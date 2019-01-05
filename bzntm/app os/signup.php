<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Byzantium - Sign In</title>
	<link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
	<link rel="stylesheet" href="libs/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/libs.min.css">
	<link rel="stylesheet" href="css/main.css">
</head>
<body class="main-page static">
	<div class="wrapper">
		<header class="header">
			<div class="header-wrap">
				<a href="/" class="header-logo">
					<img src="img/logo-company.png" alt="logo-company.png">
				</a>
			</div>

			<div class="back-link-wrap">
				<div class="back-link-inner">
					<a href="" class="back-link">
						<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 240.823 240.823" style="enable-background:new 0 0 240.823 240.823;" xml:space="preserve">
							<path d="M57.633,129.007L165.93,237.268c4.752,4.74,12.451,4.74,17.215,0c4.752-4.74,4.752-12.439,0-17.179
							l-99.707-99.671l99.695-99.671c4.752-4.74,4.752-12.439,0-17.191c-4.752-4.74-12.463-4.74-17.215,0L57.621,111.816
							C52.942,116.507,52.942,124.327,57.633,129.007z"/>
						</svg>
						<span>Back</span>
					</a>
				</div>
			</div>

		</header>
		<main class="main">
			<div class="decor-cross">
				<img src="img/svg/many_green_cross.svg" alt="">
			</div>

			<div class="container">
				<div class="main-content auth-page">

					<form action="" class="auth-form">
						<div class="decor-wave-one">
							<img src="img/svg/white_wave.svg" alt="">
						</div>
						<div class="decor-wave-two">
							<img src="img/svg/two_white_wave.svg" alt="">
						</div>
						<div class="form-title">Use my <span class="title-decor-cross">Code</span></div>
						<div class="form-desc auth-form-desc">Paste your code to create your account</div>
						<div class="form-input-row">
							<span class="form-input-title">E-mail</span>
							<input type="text" class="form-input">
						</div>
						<div class="form-input-row">
							<span class="form-input-title">Promocode</span>
							<input type="text" class="form-input">
						</div>
						<div class="form-already-acc">Already have an account? <a href="/signin.html">Log in</a></div>
						<div class="form-submit">
							<button class="btn-green btn-medium">Sign up</button>
						</div>
					</form>
					<div class="above">
						<span>Click "Sign up" above to accept Top10</span>
						<p><a href="/terms-of-use.html">Terms of Use</a> and <a href="/privacy-policy.html">Privacy Policy</a></p>
					</div>
				</div>
			</div>
			<div class="soc-wrap soc-wrap-modal">
				<a href="#" class="soc-wrap-link js-contact-us">
					<span class="soc-wrap-img soc-wrap-modal"><?php include('img/svg/email_icon.svg') ?></span>
					<!-- <img src="img/svg/email_icon.svg" alt="" class="soc-wrap-img"> -->
				</a>
				<a href="t.me/top10pointoftrust" class="soc-wrap-link">
					<span class="soc-wrap-img-sc soc-wrap-modal"><?php include('img/svg/telegram_icon.svg') ?></span>
					<!-- <img src="img/svg/telegram_icon.svg" alt="" class=" soc-wrap-img-sc"> -->
				</a>
				<a href="twitter.com/top10_of_trust" class="soc-wrap-link">
					<span class="soc-wrap-img-th soc-wrap-modal"><?php include('img/svg/twitter_icon.svg') ?></span>
					<!-- <img src="img/svg/twitter_icon.svg" alt="" class=" soc-wrap-img-th"> -->
				</a>
				<a href="facebook.com/top10pointoftrust" class="soc-wrap-link">
					<span class="soc-wrap-img-ft soc-wrap-modal"><?php include('img/svg/facebook_icon.svg') ?></span>
					<!-- <img src="img/svg/facebook_icon.svg" alt="" class=" soc-wrap-img-ft"> -->
				</a>
			</div>
		</main>
	</div>
	<!-- modal -->
	<div class="modal get-invite-modal">
		<button class="close-modal js-close-modal">
			<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 612 612" style="enable-background:new 0 0 612 612;" xml:space="preserve">
				<g>
					<polygon points="612,36.004 576.521,0.603 306,270.608 35.478,0.603 0,36.004 270.522,306.011 0,575.997 35.478,611.397 306,341.411 576.521,611.397 612,575.997 341.459,306.011"/>
				</g>
			</svg>
		</button>
		<div class="decor-cross">
			<img src="img/many_cross.png" alt="">
		</div>
		<div class="inner-container get-invite-inner">
			<div class="modal-content">
				<div class="modal-title">Get an Invite</div>
				<div class="modal-pre-text">Leave your information below and we’ll proceed your request as soo as we can.</div>
				<form action="" class="modal-form">
					<div class="modal-form-row get-invite-modal-row">
						<span class="modal-form-input-title">Name</span>
						<input type="text" class="modal-form-input">
					</div>
					<div class="modal-form-row get-invite-modal-row">
						<span class="modal-form-input-title">Last Name</span>
						<input type="text" class="modal-form-input">
					</div>
					<div class="modal-form-row get-invite-modal-row">
						<span class="modal-form-input-title">Email</span>
						<input type="text" class="modal-form-input">
					</div>
					<div class="modal-form-row get-invite-modal-row">
						<span class="modal-form-input-title">Company</span>
						<input type="text" class="modal-form-input">
					</div>
					<div class="modal-form-row get-invite-modal-row">
						<span class="modal-form-input-title">Title</span>
						<input type="text" class="modal-form-input">
					</div>
					<div class="modal-form-row get-invite-modal-row">
						<span class="modal-form-input-title">Message</span>
						<input type="text" class="modal-form-input">
					</div>
					<button type="submit" class="btn-green-2">Send request</button>
				</form>
			</div>
			<img src="img/statue_lion.png" alt="Byzantium #Lion">
		</div>
	</div>
	<!-- modal -->
	<div class="modal become-sponsor-modal">
		<button class="close-modal js-close-modal">
			<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 612 612" style="enable-background:new 0 0 612 612;" xml:space="preserve">
				<g>
					<polygon points="612,36.004 576.521,0.603 306,270.608 35.478,0.603 0,36.004 270.522,306.011 0,575.997 35.478,611.397 306,341.411 576.521,611.397 612,575.997 341.459,306.011"/>
				</g>
			</svg>
		</button>
		<div class="decor-cross">
			<img src="img/many_cross.png" alt="">
		</div>
		<div class="inner-container become-sponsor-inner">
			<div class="modal-content">
				<div class="modal-title">Become a Sponsor</div>
				<div class="modal-pre-text">Leave your information below and we’ll provide you with information about sponsorship packages as soon as we can.</div>
				<form action="" class="modal-form">
					<div class="modal-form-row become-sponsor-modal-row">
						<span class="modal-form-input-title">Name</span>
						<input type="text" class="modal-form-input">
					</div>
					<div class="modal-form-row become-sponsor-modal-row">
						<span class="modal-form-input-title">Last Name</span>
						<input type="text" class="modal-form-input">
					</div>
					<div class="modal-form-row become-sponsor-modal-row">
						<span class="modal-form-input-title">Email</span>
						<input type="text" class="modal-form-input">
					</div>
					<div class="modal-form-row become-sponsor-modal-row">
						<span class="modal-form-input-title">Company</span>
						<input type="text" class="modal-form-input">
					</div>
					<div class="modal-form-row become-sponsor-modal-row">
						<span class="modal-form-input-title">Title</span>
						<input type="text" class="modal-form-input">
					</div>
					<div class="modal-form-row become-sponsor-modal-row">
						<span class="modal-form-input-title">Message</span>
						<input type="text" class="modal-form-input">
					</div>
					<button type="submit" class="btn-green-2">Send request</button>
				</form>
			</div>
			<img src="img/statue_lion.png" alt="Byzantium #Lion">
		</div>
	</div>
	<!-- modal -->
	<div class="modal contact-modal">
		<button class="close-modal js-close-modal">
			<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 612 612" style="enable-background:new 0 0 612 612;" xml:space="preserve">
				<g>
					<polygon points="612,36.004 576.521,0.603 306,270.608 35.478,0.603 0,36.004 270.522,306.011 0,575.997 35.478,611.397 306,341.411 576.521,611.397 612,575.997 341.459,306.011"/>
				</g>
			</svg>
		</button>
		<div class="decor-cross">
			<img src="img/many_cross.png" alt="">
		</div>
		<div class="inner-container contact-inner">
			<div class="modal-content">
				<div class="modal-title">Contact</div>
				<div class="modal-pre-text">Got a question? We’d love to hear from you. Send us a message and we’ll respond as soon as possible.</div>
				<form action="" class="modal-form">
					<div class="modal-form-row contact-modal-row">
						<span class="modal-form-input-title">Name</span>
						<input type="text" class="modal-form-input">
					</div>
					<div class="modal-form-row contact-modal-row">
						<span class="modal-form-input-title">Email</span>
						<input type="text" class="modal-form-input">
					</div>
					<div class="modal-form-row contact-modal-row">
						<span class="modal-form-input-title">Message</span>
						<input type="text" class="modal-form-input">
					</div>
					<button type="submit" class="btn-green-2">Send message</button>
				</form>
			</div>
			<img src="img/statue_lion.png" alt="Byzantium #Lion">
		</div>
	</div>
	<!-- modal -->
	<div class="modal thank-you-modal">
		<button class="close-modal js-close-modal">
			<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 612 612" style="enable-background:new 0 0 612 612;" xml:space="preserve">
				<g>
					<polygon points="612,36.004 576.521,0.603 306,270.608 35.478,0.603 0,36.004 270.522,306.011 0,575.997 35.478,611.397 306,341.411 576.521,611.397 612,575.997 341.459,306.011"/>
				</g>
			</svg>
		</button>
		<div class="inner-container thank-you-modal-inner">
			<div class="modal-content">
				<div class="modal-title">Thanks, we’ll be in touch shortly</div>
				<div class="modal-pre-text">Someone on our team is reviewing your request and will contact with you as soon as possible.</div>
			</div>
			<img src="img/statue_thank-you.png" alt="Byzantium #Thanks" class="modal-statue-thank-you-img">
		</div>
	</div>


	<!-- <script src="libs/jquery/dist/jquery.min.js"></script> -->
	<script src="js/libs.min.js"></script>
	<script src="js/common.js"></script>
</body>
</html>