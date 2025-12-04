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


<style>
    .error-text {
        color: #ff3b3b;
        font-size: 12px;
        margin-top: 5px;
    }

    .sign__input.error {
        border-color: #ff3b3b;
    }
</style>

<body>
    <div class="sign section--full-bg" data-bg="frontend/assets/images/bg.jpg" style="background: url(&quot;frontend/assets/images/bg.jpg&quot;) center center / cover no-repeat;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="sign__content">
                        <!-- registration form -->
                        <form action="index.php?page=register" class="sign__form" method="post">
                            <a href="index.html" class="sign__logo">
                                <img src="frontend/assets/images/logo.png" alt="">
                            </a>

                            <div class="sign__group">
                                <input type="text" class="sign__input" placeholder="Name" name="name">
                                <?php if (!empty($errors['name'])): ?>
                                    <div class="error-text"><?= $errors['name'] ?></div>
                                <?php endif; ?>
                            </div>

                            <div class="sign__group">
                                <input type="text" class="sign__input" placeholder="Email" name="email">
                                <?php if (!empty($errors['email'])): ?>
                                    <div class="error-text"><?= $errors['email'] ?></div>
                                <?php endif; ?>
                            </div>

                            <div class="sign__group">
                                <input type="password" class="sign__input" placeholder="Password" name="password">
                                <?php if (!empty($errors['password'])): ?>
                                    <div class="error-text"><?= $errors['password'] ?></div>
                                <?php endif; ?>
                            </div>

                            <button class="sign__btn" type="submit">Sign up</button>



                            <span class="sign__text">Already have an account? <a href="index.php?page=formLogin">Sign in!</a></span>
                        </form>
                        <!-- registration form -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</script>

</html>