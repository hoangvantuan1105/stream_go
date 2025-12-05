<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/../../PHPMailer/src/PHPMailer.php';
require  __DIR__ . '/../../PHPMailer/src/SMTP.php';
require  __DIR__ . '/../../PHPMailer/src/Exception.php';
require_once __DIR__ . '/../model/db.php';
class controller
{
    private $movieModel;

    public function __construct()
    {

        $this->movieModel = new streamGo();

        $this->movieModel->connectDB();
    }

    public function index()
    {

        $allInfoMovie = $this->movieModel->getAll();
        include __DIR__ . "/../view/header.php";

        include __DIR__ . '/../view/home.php';

        include __DIR__ . '/../view/footer.php';
    }

    public function detail($id)
    {
        $detailPage = $this->movieModel->getId($id);
        include __DIR__ . "/../view/header.php";
        include __DIR__ . "/../view/detail.php";
        include __DIR__ . '/../view/footer.php';
    }
    public function playVideo($id)
    {
        $playVideo = $this->movieModel->getId($id);
        include __DIR__ . "/../view/playVideo.php";
    }
    // ============================
    public function formLogin()
    {
        include __DIR__ . "/../view/login.php";
    }
    public function login()
    {

        $error = "";

        if (isset($_POST['email']) && isset($_POST['password'])) {

            $email    = trim($_POST['email']);
            $password = trim($_POST['password']);

            if (empty($email)) {
                $error = "Vui lòng nhập email";
            } elseif (empty($password)) {
                $error = "Vui lòng nhập mật khẩu";
            } else {
                $user = $this->movieModel->loginModel($email, $password);
                if ($user) {
                    $_SESSION['users'] = $user;
                    if ($user['role'] === "admin") {
                        header("Location: admin.php?page=main");
                    } else {
                        header("Location: index.php?page=home");
                    }
                    exit;
                } else {
                    $error = "Sai Email hoặc Password";
                }
            }
        }

        require_once __DIR__ . "/../view/login.php";
    }

    // ============================
    public function formRegister()
    {
        include __DIR__ . "/../view/register.php";
    }
    public function register()
    {
        $errors = [];

        $name     = trim($_POST['name'] ?? '');
        $email    = trim($_POST['email'] ?? '');
        $password = trim($_POST['password'] ?? '');
        if (empty($name)) {
            $errors['name'] = "Vui lòng nhập tên";
        } elseif (strlen($name) < 2) {
            $errors['name'] = "Tên phải có ít nhất 2 ký tự";
        }
        if (empty($email)) {
            $errors['email'] = "Vui lòng nhập email";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = "Email không hợp lệ";
        }
        if (empty($password)) {
            $errors['password'] = "Vui lòng nhập mật khẩu";
        } elseif (strlen($password) < 6) {
            $errors['password'] = "Mật khẩu phải ít nhất 6 ký tự";
        }


        if (!empty($errors)) {
            include __DIR__ . "/../view/register.php";
            return;
        }
        if ($this->movieModel->checkEmailExists($email)) {
            $errors['email'] = "Email đã tồn tại";
            include __DIR__ . "/../view/register.php";
            return;
        }
        if ($this->movieModel->registerModel($name, $email, $password)) {
            header("Location:index.php?page=formLogin");
            exit;
        } else {
            $errors['general'] = "Lỗi đăng ký";
            include __DIR__ . "/../view/register.php";
        }
    }
    public function logout()
    {
        session_start();
        unset($_SESSION['users']);
        header("Location: index.php?page=formLogin");
        exit;
    }


    public function profile()
    {
        include __DIR__ . "/../view/profile.php";
    }
    public function forgotPass()
    {
        include __DIR__ . "/../view/forgotPassword.php";
    }
    public function forgotPassAction()
    {
        $email = $_POST['email'] ?? '';

        if (empty($email)) {
            $msg = 'Vui lòng nhập email';
            include __DIR__ . "/../view/forgotPassword.php";
            return;
        }

        $user = $this->movieModel->checkEmailExists($email);
        if (!$user) {
            $msg = 'Email không tồn tại!';
            include __DIR__ . '/../view/forgotPassword.php';
            return;
        }


        $newPass = substr(str_shuffle('ABCDEFGHJKLMNPQRSTUVWXYZ0123456789'), 0, 8);

        $this->movieModel->updatePasswordByEmail($email, $newPass);

        $this->sendNewPasswordMail($email, $newPass);
        header("Location: index.php?page=formLogin&msg=sent");
        exit;
    }



    public function sendNewPasswordMail($email, $newPass)
    {


        $mail = new PHPMailer(true);

        try {
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;

            $mail->Username   = 'vantuan0326@gmail.com';
            $mail->Password   = 'rdmy kbpi hypt fmoy';

            $mail->SMTPSecure = 'tls';
            $mail->Port       = 587;

            $mail->setFrom('vantuan0326@gmail.com', 'streamGo');
            $mail->addAddress($email);

            $mail->isHTML(true);
            $mail->Subject = "Mật khẩu mới của bạn – streamGo";
            $mail->Body = "
            <h2 style='color:#4da3ff'>streamGo - Khôi phục mật khẩu</h2>
            <p>Mật khẩu mới của bạn:</p>
            <h3 style='color:#4da3ff'>$newPass</h3>
            <p>Hãy đăng nhập và đổi mật khẩu ngay!</p>
        ";

            $mail->send();
            return true;
        } catch (Exception $e) {
            return false;
        }
    }
    public function changePassword()
    {
        if (!isset($_SESSION['users'])) {
            header("Location: index.php?page=formLogin");
            exit;
        }

        $oldPass     = $_POST['old_password'] ?? '';
        $newPass     = $_POST['new_password'] ?? '';
        $confirmPass = $_POST['confirm_password'] ?? '';

        $user = $_SESSION['users'];

        // 1. Validate rỗng
        if (empty($oldPass) || empty($newPass) || empty($confirmPass)) {
            $msg = "Vui lòng nhập đầy đủ thông tin!";
            include __DIR__ . "/../view/profile.php";
            return;
        }

        // 2. Kiểm tra mật khẩu cũ đúng không
        if ($oldPass !== $user['password']) {
            $msg = "Mật khẩu cũ không đúng!";
            include __DIR__ . "/../view/profile.php";
            return;
        }

        // 3. Kiểm tra newPass trùng confirm
        if ($newPass !== $confirmPass) {
            $msg = "Mật khẩu xác nhận không khớp!";
            include __DIR__ . "/../view/profile.php";
            return;
        }

        // 4. Update DB
        $this->movieModel->updatePasswordByEmail($user['email'], $newPass);

        // 5. Update lại session
        $_SESSION['users']['password'] = $newPass;

        // 6. Thông báo thành công
        $msg = "Đổi mật khẩu thành công!";
        include __DIR__ . "/../view/profile.php";
    }



    public function page404()
    {
        include __DIR__ . "/../view/page404.php";
    }
}
