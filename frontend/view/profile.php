<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>

    <link rel="stylesheet" href="frontend/assets/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="frontend/assets/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="frontend/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="frontend/assets/css/select2.min.css">
    <link rel="stylesheet" href="frontend/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="frontend/assets/css/plyr.css">
    <link rel="stylesheet" href="frontend/assets/css/main.css">

    <style>
        .sign__input {
            background: #162233 !important;
            border: none !important;
            height: 45px;
            border-radius: 10px;
            color: white;
            padding-left: 12px;
            margin-bottom: 15px;
        }

        .sign__btn {
            background: #2979ff !important;
            border-radius: 10px;
            padding: 10px 25px;
            border: none;
        }

        .sign__btn:hover {
            background: #1b5ef3 !important;
        }

        .active-tab {
            color: #4da3ff !important;
            font-weight: 600;
            border-bottom: 2px solid #4da3ff;
        }

        .profile-actions .action-btn {
            background: #152337;
            color: #fff;
            padding: 10px 18px;
            border-radius: 8px;
            font-size: 14px;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 8px;
            transition: 0.3s;
        }

        .profile-actions .action-btn:hover {
            background: #1e3350;
        }

        .action-home {
            border: 1px solid #4da3ff;
        }

        .action-home:hover {
            background: #4da3ff;
        }

        .action-logout {
            border: 1px solid #ff4d4d;
        }

        .action-logout:hover {
            background: #ff4d4d;
        }
    </style>
</head>

<body>



    <div class="container" style="margin-top: 40px;">

        <!-- USER HEADER -->
        <div class="user-header" style="
            display:flex; 
            align-items:center; 
            gap:15px; 
            padding:20px; 
            background:#0d1b2a; 
            border-radius:12px; 
            margin-bottom:30px;
        ">
            <img src="frontend/assets/images/avatar.png"
                style="width:60px; height:60px; border-radius:50%; object-fit:cover;">

            <div>
                <h3 style="color:white; margin:0;">
                    <?= $_SESSION['users']['name'] ?? 'name' ?>
                    <span style="color:#4caf50; font-size:14px;">(Approved)</span>
                </h3>
                <p style="color:#9ab; margin:0; font-size:14px;">
                    FlixTV ID: <?= $_SESSION['users']['id'] ?? '00001' ?>
                </p>
            </div>
        </div>

        <!-- TABS -->
        <div class="tabs" style="
            display:flex; 
            gap:30px; 
            margin-bottom:25px; 
            border-bottom:1px solid #1a2b3c;
            padding-bottom:10px;
        ">
            <a href="#" class="tab-link active-tab" onclick="showTab('profile')">Profile</a>
            <a href="#" class="tab-link" onclick="showTab('package')">Gói đã mua</a>
            <a href="#" class="tab-link" onclick="showTab('history')">Phim đã xem</a>
        </div>

        <!-- TAB: PROFILE -->
        <div class="tab-content" id="profileTab">
            <div class="row">

                <!-- LEFT -->
                <div class="col-12 col-md-6">
                    <div class="profile-box" style="
                        background:#0d1b2a;
                        padding:25px;
                        border-radius:12px;
                        margin-bottom:20px;">
                        <h4 style="color:white; margin-bottom:25px;">Profile details</h4>

                        <form action="index.php?page=updateProfile" method="post">

                            <div class="row">

                                <div class="col-6">
                                    <label style="color:#9ab;">Email</label>
                                    <input type="email" class="sign__input"
                                        value="<?= $_SESSION['users']['email'] ?? '' ?>"
                                        name="email">
                                </div>

                                <div class="col-6">
                                    <label style="color:#9ab;">Name</label>
                                    <input type="text" class="sign__input"
                                        value="<?= $_SESSION['users']['name'] ?? '' ?>"
                                        name="name">
                                </div>

                                <div class="col-6">
                                    <label style="color:#9ab;">Subscription</label>
                                    <input class="sign__input" placeholder="Basic" style="user-select: none;" disabled>
                                </div>

                                <div class="col-12" style="margin-top:20px;">
                                    <button class="sign__btn" type="submit">SAVE</button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>

                <!-- RIGHT -->
                <div class="col-12 col-md-6">
                    <div class="profile-box" style="
                        background:#0d1b2a; 
                        padding:25px; 
                        border-radius:12px;">
                        <h4 style="color:white; margin-bottom:25px;">Change password</h4>
                        <form action="index.php?page=changePassword" method="post">

                            <label style="color:#9ab;">Old password</label>
                            <input type="password" class="sign__input" name="old_password">

                            <label style="color:#9ab;">New password</label>
                            <input type="password" class="sign__input" name="new_password">

                            <label style="color:#9ab;">Confirm new password</label>
                            <input type="password" class="sign__input" name="confirm_password">

                            <button class="sign__btn" style="margin-top:20px;" type="submit">CHANGE</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>

        <!-- TAB: GÓI ĐÃ MUA -->
        <div class="tab-content" id="packageTab" style="display:none;">
            <div class="profile-box" style="
                background:#0d1b2a; padding:25px; border-radius:12px;">
                <h4 style="color:white; margin-bottom:20px;">Gói đã mua</h4>

                <ul style="color:#9ab; line-height:1.8;">
                    <li>Gói Cơ Bản – 30.000đ/tháng – Ngày mua: 01/12/2025</li>
                    <li>Gói Premium – 79.000đ/tháng – Ngày mua: 20/11/2025</li>
                    <li>Gói VIP – 119.000đ/tháng – Ngày mua: 01/10/2025</li>
                </ul>
            </div>
        </div>

        <!-- TAB: PHIM ĐÃ XEM -->
        <div class="tab-content" id="historyTab" style="display:none;">
            <div class="profile-box" style="
                background:#0d1b2a; padding:25px; border-radius:12px;">
                <h4 style="color:white; margin-bottom:20px;">Phim đã xem</h4>

                <ul style="color:#9ab; line-height:1.8;">
                    <li>Avengers: Endgame – Đã xem 90%</li>
                    <li>Spider-Man: No Way Home – Đã xem 100%</li>
                    <li>Fast & Furious 9 – Đã xem 40%</li>
                    <li>Conan Movie 26 – Đã xem 100%</li>
                </ul>
            </div>
        </div>
        <div class="profile-actions" style="
    display:flex;
    justify-content:flex-end;
    gap:15px;
    margin-bottom:20px;
">

            <a href="index.php?page=home" class="action-btn action-home">
                Home
            </a>

            <a href="index.php?page=logout" class="action-btn action-logout">
                Logout
            </a>

        </div>
    </div>

    <script>
        function showTab(name) {
            document.querySelectorAll(".tab-content").forEach(e => e.style.display = "none");
            document.querySelectorAll(".tab-link").forEach(e => e.classList.remove("active-tab"));
            document.getElementById(name + "Tab").style.display = "block";
            event.target.classList.add("active-tab");
        }
    </script>

</body>

</html>