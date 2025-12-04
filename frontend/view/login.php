<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="frontend/assets/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="frontend/assets/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="frontend/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="frontend/assets/css/slider-radio.css">
    <link rel="stylesheet" href="frontend/assets/css/select2.min.css">
    <link rel="stylesheet" href="frontend/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="frontend/assets/css/plyr.css">
    <link rel="stylesheet" href="frontend/assets/css/main.css">

</head>


<body>
    <div class="sign section--full-bg" data-bg="frontend/assets/images/bg.jpg" style="background: url(&quot;frontend/assets/images/bg.jpg&quot;) center center / cover no-repeat;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="sign__content">

                        <form action="index.php?page=login" class="sign__form" method="post">
                            <a href="index.html" class="sign__logo">
                                <img src="frontend/assets/images/logo.png" alt="">
                            </a>
                            <?php if (!empty($error)): ?>
                                <div style="color: red; margin-top: 10px; font-size: 14px;">
                                    <?= $error ?>
                                </div>
                            <?php endif; ?>
                            <div class="sign__group">
                                <input type="text" class="sign__input" placeholder="Email" name="email">
                            </div>

                            <div class="sign__group">
                                <input type="password" class="sign__input" placeholder="Password" name="password">
                            </div>

                            <button class="sign__btn" type="submit">Sign in</button>
                            <span class="sign__text">Don't have an account? <a href="index.php?page=formRegister">Sign up!</a></span>

                            <span class="sign__text"><a href="index.php?page=forgotPass">Forgot password?</a></span>
                        </form>
                        <!-- end authorization form -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>


</html>