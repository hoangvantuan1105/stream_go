<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

function sendNewPasswordMail($email, $newPass)
{
    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;

        $mail->Username   = 'vantuan0326@gmail.com';
        $mail->Password   = 'MẬT_KHẨU_ỨNG_DỤNG_12_KÝ_TỰ'; // Password ứng dụng

        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        // From
        $mail->setFrom('vantuan0326@gmail.com', 'streamGo');

        // To
        $mail->addAddress($email);

        // Nội dung
        $mail->isHTML(true);
        $mail->Subject = "Mật khẩu mới của bạn – streamGo";
        $mail->Body    = "
            <html>
            <body style='font-family:Arial; background:#0d1b2a; padding:20px; color:white'>
                <h2 style='color:#4da3ff'>Khôi phục mật khẩu</h2>
                <p>Mật khẩu mới của bạn là:</p>
                <div style='padding:10px; background:#162233; font-size:20px; border-left:4px solid #4da3ff'>
                    $newPass
                </div>
                <br>
                <p>Hãy đăng nhập và đổi mật khẩu trong phần Profile.</p>
                <p>streamGo Team</p>
            </body>
            </html>
        ";

        return $mail->send();
    } catch (Exception $e) {
        return false;
    }
}
