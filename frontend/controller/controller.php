<?php
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

    public function streamVideo()
    {
        include __DIR__ . "/../view/header.php";
        include __DIR__ . "/../view/streamVideo.php";
        include __DIR__ . '/../view/footer.php';
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

    public function page404()
    {
        include __DIR__ . "/../view/page404.php";
    }
}
