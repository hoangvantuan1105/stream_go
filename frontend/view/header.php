<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<link rel="stylesheet" href="frontend/assets/css/bootstrap-reboot.min.css">
<link rel="stylesheet" href="frontend/assets/css/bootstrap-grid.min.css">
<link rel="stylesheet" href="frontend/assets/css/owl.carousel.min.css">
<link rel="stylesheet" href="frontend/assets/css/slider-radio.css">
<link rel="stylesheet" href="frontend/assets/css/select2.min.css">
<link rel="stylesheet" href="frontend/assets/css/magnific-popup.css">
<link rel="stylesheet" href="frontend/assets/css/plyr.css">
<link rel="stylesheet" href="frontend/assets/css/main.css">


<style id="smooth-scrollbar-style">
	[data-scrollbar] {
		display: block;
		position: relative;
	}

	.scroll-content {
		-webkit-transform: translate3d(0, 0, 0);
		transform: translate3d(0, 0, 0);
	}

	.scrollbar-track {
		position: absolute;
		opacity: 0;
		z-index: 1;
		background: rgba(222, 222, 222, .75);
		-webkit-user-select: none;
		-moz-user-select: none;
		-ms-user-select: none;
		user-select: none;
		-webkit-transition: opacity 0.5s 0.5s ease-out;
		transition: opacity 0.5s 0.5s ease-out;
	}

	.scrollbar-track.show,
	.scrollbar-track:hover {
		opacity: 1;
		-webkit-transition-delay: 0s;
		transition-delay: 0s;
	}

	.scrollbar-track-x {
		bottom: 0;
		left: 0;
		width: 100%;
		height: 8px;
	}

	.scrollbar-track-y {
		top: 0;
		right: 0;
		width: 8px;
		height: 100%;
	}

	.scrollbar-thumb {
		position: absolute;
		top: 0;
		left: 0;
		width: 8px;
		height: 8px;
		background: rgba(0, 0, 0, .5);
		border-radius: 4px;
	}

	/* Thanh Gợi Ý Phim */
	#searchResult {
    position: absolute;
    /* background: #212529; */
    width: 250px;
    max-height: 300px;
    overflow-y: auto;
    display: none;
    border: 1px solid #333;
    top: 80px;
    z-index: 9999;
  }
  #searchResult .item {
    padding: 10px;
    cursor: pointer;
    display: flex;
    gap: 10px;
  }
  #searchResult .item img {
    width: 50px;
    border-radius: 4px;
  }
  #searchResult .item:hover {
    background: #222;
  }
</style>

<body>
	<!-- header (relative style) -->
	<header class="header header--static">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="header__content">
						<button class="header__menu" type="button">
							<span></span>
							<span></span>
							<span></span>
						</button>

						<a href="" class="header__logo">
							<img src="/frontend/assets/images/logo.png" alt="">
						</a>

						<ul class="header__nav">
							<li class="header__nav-item">
								<a class="header__nav-link" href="" role="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home <svg width="4" height="4" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M1.93893 3.30334C1.08141 3.30334 0.384766 2.60669 0.384766 1.75047C0.384766 0.894254 1.08141 0.196308 1.93893 0.196308C2.79644 0.196308 3.49309 0.894254 3.49309 1.75047C3.49309 2.60669 2.79644 3.30334 1.93893 3.30334Z"></path>
									</svg></a>

								<ul class="dropdown-menu header__nav-menu" aria-labelledby="dropdownMenu2">
									<li><a href="">Home style 1</a></li>
									<li><a href="">Home style 2</a></li>
									<li><a href="">Home style 3</a></li>
								</ul>
							</li>
							<li class="header__nav-item">
								<a class="header__nav-link" href="" role="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Catalog <svg width="4" height="4" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M1.93893 3.30334C1.08141 3.30334 0.384766 2.60669 0.384766 1.75047C0.384766 0.894254 1.08141 0.196308 1.93893 0.196308C2.79644 0.196308 3.49309 0.894254 3.49309 1.75047C3.49309 2.60669 2.79644 3.30334 1.93893 3.30334Z"></path>
									</svg></a>

								<ul class="dropdown-menu header__nav-menu" aria-labelledby="dropdownMenu1">
									<li><a href="">Catalog</a></li>
									<li class="dropdown-submenu">
										<a class="dropdown-item" href="" role="button" id="dropdownMenuSub" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Catalog dropdown <svg width="4" height="4" viewBox="0 0 4 4" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M1.93893 3.30334C1.08141 3.30334 0.384766 2.60669 0.384766 1.75047C0.384766 0.894254 1.08141 0.196308 1.93893 0.196308C2.79644 0.196308 3.49309 0.894254 3.49309 1.75047C3.49309 2.60669 2.79644 3.30334 1.93893 3.30334Z"></path>
											</svg></a>

										<ul class="dropdown-menu header__nav-menu" aria-labelledby="dropdownMenuSub">
											<li><a href="">Actions</a></li>
											<li><a href="">Biography</a></li>
											<li><a href="">Documentary</a></li>
											<li><a href="">Horror</a></li>
										</ul>
									</li>
									<li><a href="">Category style 1</a></li>
									<li><a href="">Category style 2</a></li>
									<li><a href="">Details style 1</a></li>
									<li><a href="">Details style 2</a></li>
									<li><a href="">Details style 3</a></li>
								</ul>
							</li>
							<li class="header__nav-item">
								<a class="header__nav-link" href="">Pricing plans</a>
							</li>
							<li class="header__nav-item">
								<a class="header__nav-link header__nav-link--live" href="">LIVE<svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
										<circle cx="6" cy="4" r="4" fill="#EB5757" fill-opacity="0.5"></circle>
										<g filter="url(#filter0_d)">
											<circle cx="6" cy="4" r="2" fill="#EB5757"></circle>
										</g>
										<defs>
											<filter id="filter0_d" x="0" y="0" width="12" height="12" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
												<feflood flood-opacity="0" result="BackgroundImageFix"></feflood>
												<fecolormatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"></fecolormatrix>
												<feoffset dy="2"></feoffset>
												<fegaussianblur stdDeviation="2"></fegaussianblur>
												<fecolormatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.3 0"></fecolormatrix>
												<feblend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"></feblend>
												<feblend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"></feblend>
											</filter>
										</defs>
									</svg></a>
							</li>
							<li class="header__nav-item">
								<a class="header__nav-link header__nav-link--more" href="" role="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M6.93893 14.3033C6.08141 14.3033 5.38477 13.6067 5.38477 12.7505C5.38477 11.8943 6.08141 11.1963 6.93893 11.1963C7.79644 11.1963 8.49309 11.8943 8.49309 12.7505C8.49309 13.6067 7.79644 14.3033 6.93893 14.3033Z"></path>
										<path d="M12.7501 14.3033C11.8926 14.3033 11.1959 13.6067 11.1959 12.7505C11.1959 11.8943 11.8926 11.1963 12.7501 11.1963C13.6076 11.1963 14.3042 11.8943 14.3042 12.7505C14.3042 13.6067 13.6076 14.3033 12.7501 14.3033Z"></path>
										<path d="M18.5608 14.3033C17.7032 14.3033 17.0066 13.6067 17.0066 12.7505C17.0066 11.8943 17.7032 11.1963 18.5608 11.1963C19.4183 11.1963 20.1149 11.8943 20.1149 12.7505C20.1149 13.6067 19.4183 14.3033 18.5608 14.3033Z"></path>
									</svg>
								</a>

								<ul class="dropdown-menu header__nav-menu header__nav-menu--scroll" aria-labelledby="dropdownMenu3" data-scrollbar="true" tabindex="-1" style="overflow: hidden; outline: none;">
									<div class="scroll-content">
										<li><a href="https://flixtv.volkovdesign.com/main/about.html">About us</a></li>
										<li><a href="https://flixtv.volkovdesign.com/main/profile.html">Profile</a></li>
										<li><a href="https://flixtv.volkovdesign.com/main/contacts.html">Contacts</a></li>
										<li><a href="https://flixtv.volkovdesign.com/main/interview.html">Interview</a></li>
										<li><a href="https://flixtv.volkovdesign.com/admin/index.html" target="_blank">Admin pages</a></li>
										<li><a href="https://flixtv.volkovdesign.com/main/privacy.html">Privacy policy</a></li>
										<li><a href="https://flixtv.volkovdesign.com/main/signin.html">Sign in</a></li>
										<li><a href="https://flixtv.volkovdesign.com/main/signup.html">Sign up</a></li>
										<li><a href="https://flixtv.volkovdesign.com/main/forgot.html">Forgot password</a></li>
										<li><a href="">404 Page</a></li>
									</div>
									<div class="scrollbar-track scrollbar-track-x show" style="display: none;">
										<div class="scrollbar-thumb scrollbar-thumb-x" style="width: 200px; transform: translate3d(0px, 0px, 0px);"></div>
									</div>
									<div class="scrollbar-track scrollbar-track-y show" style="display: block;">
										<div class="scrollbar-thumb scrollbar-thumb-y" style="height: 149.61px; transform: translate3d(0px, 0px, 0px);"></div>
									</div>
								</ul>
							</li>
						</ul>

						<div class="header__actions">

						<!--  -->
							<form id="searchForm" class="search-header">
								<input type="text" id="searchInput" class="header__form-input" placeholder="Tìm kiếm phim...">
								<div id="searchResult" class="search-result-box"></div>
							</form>

							<!--  -->
							<?php if (!isset($_SESSION['users'])): ?>
								<a href="index.php?page=formLogin" class="header__user">
									<span>Sign in</span>
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
										<path d="M20,12a1,1,0,0,0-1-1H11.41l2.3-2.29a1,1,0,1,0-1.42-1.42l-4,4a1,1,0,0,0-.21.33,1,1,0,0,0,0,.76,1,1,0,0,0,.21.33l4,4a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L11.41,13H19A1,1,0,0,0,20,12ZM17,2H7A3,3,0,0,0,4,5V19a3,3,0,0,0,3,3H17a3,3,0,0,0,3-3V16a1,1,0,0,0-2,0v3a1,1,0,0,1-1,1H7a1,1,0,0,1-1-1V5A1,1,0,0,1,7,4H17a1,1,0,0,1,1,1V8a1,1,0,0,0,2,0V5A3,3,0,0,0,17,2Z"></path>
									</svg>
								</a>

							<?php else: ?>
								<?php
								$user = $_SESSION['users'];
								$avatar = (!empty($user['avatar']))
									? $user['avatar']
									: 'frontend/assets/images/avatar.png';
								?>

								<a href="index.php?page=profile" class="header__user">
									<img src="<?= $avatar ?>"
										alt="Avatar"
										style="width:35px;height:35px;border-radius:50%;object-fit:cover;">
								</a>

							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- end header -->
	 
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
$(document).ready(function () {

    $("#searchInput").keyup(function () {
        let keyword = $(this).val();

        if (keyword.length < 1) {
            $("#searchResult").hide();
            return;
        }

        $.ajax({
            url: "index.php?page=search",
            method: "POST",
            data: { keyword: keyword },
            success: function (response) {
                $("#searchResult").html(response).show();
            }
        });
    });

    $(document).click(function (e) {
        if (!$(e.target).closest("#searchForm").length) {
            $("#searchResult").hide();
        }
    });

});

</script>

</html>