<?php
/* Smarty version 3.1.33, created on 2018-10-18 18:14:24
  from 'C:\xampp\htdocs\Summertime\templates\main\template\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc8b1606c9811_97325189',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee0c84b21dc71ce16ec7ed4e9485942e1539374e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Summertime\\templates\\main\\template\\index.html',
      1 => 1539879262,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bc8b1606c9811_97325189 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
<title>HostSpace</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="HostSpace template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="templates/main/template/styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="templates/main/template/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="templates/main/template/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="templates/main/template/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="templates/main/template/plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="templates/main/template/styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="templates/main/template/styles/responsive.css">
</head>
<body>

<div class="super_container">
	
	<!-- Header -->

	<header class="header trans_400">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="header_content d-flex flex-row align-items-center justify-content-start trans_400">
						<div class="logo"><a href="#">Host<span>Space</span></a></div>
						<nav class="main_nav ml-auto mr-auto">
							<ul class="d-flex flex-row align-items-center justify-content-start">
								<li class="active"><a href="index.html">Home</a></li>
								<li><a href="about.html">About us</a></li>
								<li><a href="services.html">Services</a></li>
								<li><a href="blog.html">News</a></li>
								<li><a href="contact.html">Contact</a></li>
							</ul>
						</nav>
						<div class="log_reg">
							<div class="log_reg_content d-flex flex-row align-items-center justify-content-start">
								<div class="login log_reg_text"><a href="#">Login</a></div>
								<div class="register log_reg_text"><a href="#">Register</a></div>
							</div>
						</div>
						<div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- Menu -->
	
	<div class="menu_overlay trans_400"></div>
	<div class="menu trans_400">
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
		<div class="log_reg">
			<div class="log_reg_content d-flex flex-row align-items-center justify-content-end">
				<div class="login log_reg_text"><a href="#">Login</a></div>
				<div class="register log_reg_text"><a href="#">Register</a></div>
			</div>
		</div>
		<nav class="menu_nav">
			<ul>
				<li><a href="index.html">Home</a></li>
				<li><a href="about.html">About us</a></li>
				<li><a href="services.html">Services</a></li>
				<li><a href="blog.html">News</a></li>
				<li><a href="contact.html">Contact</a></li>
			</ul>
		</nav>
	</div>

	<!-- Home -->

	<div class="home">
		<div class="home_background"></div>
		<div class="background_image background_city" style="background-image:url(templates/main/template/images/Spiaggia-del-principe.jpg)"></div>
		<div class="cloud cloud_1"><img src="templates/main/template/images/ombrellone-png-spiaggia-300.png" alt=""></div>
		<div class="cloud cloud_2"><img src="templates/main/template/images/ombrellone-png-spiaggia-300.png" alt=""></div>
		<div class="cloud cloud_3"><img src="templates/main/template/images/ombrellone-png-spiaggia-300.png" alt=""></div>
		<div class="cloud cloud_4"><img src="templates/main/template/images/ombrellone-png-spiaggia-300.png" alt=""></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content text-center">
							<div class="home_title">Summertime</div>
							<div class="home_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus.</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-10 offset-lg-1">
						<div class="domain_search_form_container">
							<form action="#" id="domain_search_form" class="domain_search_form d-flex flex-md-row flex-column align-items-center justify-content-start">
								<div class="d-flex flex-row align-items-center justify-content-start">
									<input type="text" class="domain_search_input" placeholder="yourdomain" required="required">
									<div class="domain_search_dropdown d-flex flex-row align-items-center justify-content-start">
										<i class="fa fa-chevron-down" aria-hidden="true"></i>
										<div class="domain_search_selected">.io</div>
										<ul>
											<li>.io</li>
											<li>.com</li>
											<li>.net</li>
										</ul>
									</div>
								</div>
								<button class="domain_search_button d-flex flex-row align-items-center justify-content-center"><img src="images/search.png" alt="">Search</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Intro -->

	<div class="intro">
		<div class="container">
			<div class="row">
				<div class="col magic_fade_in">
					<div class="section_title text-center"><h2>How to get started</h2></div>
				</div>
			</div>
			<div class="row intro_row">
				<div class="intro_dots magic_fade_in" style="background-image:url(templates/main/template/images/dots.png)"></div>
				
				<!-- Intro Item -->
				<div class="col-lg-4 intro_col magic_fade_in">
					<div class="intro_item d-flex flex-column align-items-center justify-content-start text-center">
						<div class="intro_icon_container d-flex flex-column align-items-center justify-content-center">
							<div class="intro_icon"><img src="templates/main/template/images/icon_1.svg" alt="https://www.flaticon.com/authors/freepik"></div>
						</div>
						<div class="intro_item_content">
							<div class="intro_item_title">Buy your Domain</div>
							<div class="intro_item_text">
								<p>Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis eget nibh laoreet iaculis.</p>
							</div>
						</div>
					</div>
				</div>

				<!-- Intro Item -->
				<div class="col-lg-4 intro_col magic_fade_in">
					<div class="intro_item d-flex flex-column align-items-center justify-content-start text-center">
						<div class="intro_icon_container d-flex flex-column align-items-center justify-content-center">
							<div class="intro_icon"><img src="templates/main/template/images/icon_2.svg" alt="https://www.flaticon.com/authors/freepik"></div>
						</div>
						<div class="intro_item_content">
							<div class="intro_item_title">Get your Hosting</div>
							<div class="intro_item_text">
								<p>Ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis eget nibh laoreet iaculis. Proin ac urna at lectus.</p>
							</div>
						</div>
					</div>
				</div>

				<!-- Intro Item -->
				<div class="col-lg-4 intro_col magic_fade_in">
					<div class="intro_item d-flex flex-column align-items-center justify-content-start text-center">
						<div class="intro_icon_container d-flex flex-column align-items-center justify-content-center">
							<div class="intro_icon"><img src="templates/main/template/images/icon_3.svg" alt="https://www.flaticon.com/authors/freepik"></div>
						</div>
						<div class="intro_item_content">
							<div class="intro_item_title">Set your Website</div>
							<div class="intro_item_text">
								<p>Suscipit interdum augue condimentum. Etiam pretium turpis eget nibh laoreet iaculis. Proin ac urna at lectus volutpat lobortis.</p>
							</div>
						</div>
					</div>
				</div>

			</div>
			<div class="row">
				<div class="col text-center">
					<div class="intro_button text-center trans_200 ml-auto mr-auto"><a href="#">Start from $9.90/month</a></div>
				</div>
			</div>
		</div>
	</div>

	<!-- Services -->

	<div class="services">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="templates/main/template/images/Spiaggia-del-principe.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col magic_fade_in">
					<div class="section_title text-center"><h2>Our Services</h2></div>
				</div>
			</div>
			<div class="row services_row">
				
				<!-- Service -->
				<div class="col-lg-4 service_col magic_fade_in">
					<div class="service d-flex flex-column align-items-center justify-content-start text-center trans_200">
						<div class="service_icon"><img class="svg" src="templates/main/template/images/icon_4.svg" alt="https://www.flaticon.com/authors/freepik"></div>
						<div class="service_title"><h3>Cloud Backup</h3></div>
						<div class="service_text">
							<p>Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis ege.</p>
						</div>
						<div class="service_button trans_200"><a href="#">Read More</a></div>
					</div>
				</div>

				<!-- Service -->
				<div class="col-lg-4 service_col magic_fade_in">
					<div class="service d-flex flex-column align-items-center justify-content-start text-center trans_200">
						<div class="service_icon"><img class="svg" src="templates/main/template/images/icon_5.svg" alt="https://www.flaticon.com/authors/freepik"></div>
						<div class="service_title"><h3>Data Migration</h3></div>
						<div class="service_text">
							<p>Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis ege.</p>
						</div>
						<div class="service_button trans_200"><a href="#">Read More</a></div>
					</div>
				</div>

				<!-- Service -->
				<div class="col-lg-4 service_col magic_fade_in">
					<div class="service d-flex flex-column align-items-center justify-content-start text-center trans_200">
						<div class="service_icon"><img class="svg" src="templates/main/template/images/icon_6.svg" alt="https://www.flaticon.com/authors/freepik"></div>
						<div class="service_title"><h3>VPS Hosting</h3></div>
						<div class="service_text">
							<p>Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis ege.</p>
						</div>
						<div class="service_button trans_200"><a href="#">Read More</a></div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Pricing -->

	<div class="pricing">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="pricing_container d-flex flex-row align-items-start justify-content-start flex-wrap">
						
						<!-- Pricing Item -->
						<div class="pricing_item text-center magic_fade_in">
							<div class="pricing_title">Starter Pack</div>
							<div class="pricing_content">
								<div class="package_price">$ 9.90<span>/Month</span></div>
								<div class="pricing_list">
									<ul>
										<li class="pack_ok d-flex flex-row align-items-center justify-content-center">
											<img src="templates/main/template/images/ok.png" alt="">
											<span>50 GB Disk Space</span>
										</li>
										<li class="pack_ok d-flex flex-row align-items-center justify-content-center">
											<img src="templates/main/template/images/ok.png" alt="">
											<span>1 sub-domain</span>
										</li>
										<li class="pack_ok d-flex flex-row align-items-center justify-content-center">
											<img src="templates/main/template/images/ok.png" alt="">
											<span>5 E-mail Accounts</span>
										</li>
										<li class="d-flex flex-row align-items-center justify-content-center">
											<img src="templates/main/template/images/x.png" alt="">
											<span>24/7 Support</span>
										</li>
										<li class="d-flex flex-row align-items-center justify-content-center">
											<img src="templates/main/template/images/x.png" alt="">
											<span>Control Panel</span>
										</li>
									</ul>
								</div>
								<div class="pricing_button ml-auto mr-auto"><a href="#">Buy Now</a></div>
							</div>
						</div>

						<!-- Pricing Item -->
						<div class="pricing_item text-center magic_fade_in">
							<div class="pricing_title">Basic Pack</div>
							<div class="pricing_content">
								<div class="package_price">$ 19.90<span>/Month</span></div>
								<div class="pricing_list">
									<ul>
										<li class="pack_ok d-flex flex-row align-items-center justify-content-center">
											<img src="images/ok.png" alt="">
											<span>70 GB Disk Space</span>
										</li>
										<li class="pack_ok d-flex flex-row align-items-center justify-content-center">
											<img src="images/ok.png" alt="">
											<span>3 sub-domain</span>
										</li>
										<li class="pack_ok d-flex flex-row align-items-center justify-content-center">
											<img src="images/ok.png" alt="">
											<span>7 E-mail Accounts</span>
										</li>
										<li class="d-flex flex-row align-items-center justify-content-center">
											<img src="images/x.png" alt="">
											<span>24/7 Support</span>
										</li>
										<li class="d-flex flex-row align-items-center justify-content-center">
											<img src="images/x.png" alt="">
											<span>Control Panel</span>
										</li>
									</ul>
								</div>
								<div class="pricing_button ml-auto mr-auto"><a href="#">Buy Now</a></div>
							</div>
						</div>

						<!-- Pricing Item -->
						<div class="pricing_item text-center magic_fade_in">
							<div class="pricing_title">Premium Pack</div>
							<div class="pricing_content">
								<div class="package_price">$ 39.90<span>/Month</span></div>
								<div class="pricing_list">
									<ul>
										<li class="pack_ok d-flex flex-row align-items-center justify-content-center">
											<img src="images/ok.png" alt="">
											<span>90 GB Disk Space</span>
										</li>
										<li class="pack_ok d-flex flex-row align-items-center justify-content-center">
											<img src="images/ok.png" alt="">
											<span>5 sub-domain</span>
										</li>
										<li class="pack_ok d-flex flex-row align-items-center justify-content-center">
											<img src="images/ok.png" alt="">
											<span>10 E-mail Accounts</span>
										</li>
										<li class="pack_ok d-flex flex-row align-items-center justify-content-center">
											<img src="images/ok.png" alt="">
											<span>24/7 Support</span>
										</li>
										<li class="d-flex flex-row align-items-center justify-content-center">
											<img src="images/x.png" alt="">
											<span>Control Panel</span>
										</li>
									</ul>
								</div>
								<div class="pricing_button ml-auto mr-auto"><a href="#">Buy Now</a></div>
							</div>
						</div>

						<!-- Pricing Item -->
						<div class="pricing_item text-center magic_fade_in">
							<div class="pricing_title">Pro Pack</div>
							<div class="pricing_content">
								<div class="package_price">$ 59.90<span>/Month</span></div>
								<div class="pricing_list">
									<ul>
										<li class="pack_ok d-flex flex-row align-items-center justify-content-center">
											<img src="images/ok.png" alt="">
											<span>120 GB Disk Space</span>
										</li>
										<li class="pack_ok d-flex flex-row align-items-center justify-content-center">
											<img src="images/ok.png" alt="">
											<span>7 sub-domain</span>
										</li>
										<li class="pack_ok d-flex flex-row align-items-center justify-content-center">
											<img src="images/ok.png" alt="">
											<span>15 E-mail Accounts</span>
										</li>
										<li class="pack_ok d-flex flex-row align-items-center justify-content-center">
											<img src="images/ok.png" alt="">
											<span>24/7 Support</span>
										</li>
										<li class="pack_ok d-flex flex-row align-items-center justify-content-center">
											<img src="images/ok.png" alt="">
											<span>Control Panel</span>
										</li>
									</ul>
								</div>
								<div class="pricing_button ml-auto mr-auto"><a href="#">Buy Now</a></div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Why Choose Us -->

	<div class="choice">
		<div class="container">
			<div class="row row-lg-eq-height">
				
				<!-- Choice Image -->
				<div class="col-lg-6 choice_col magic_fade_in">
					<div class="choice_image"><img src="templates/main/template/images/choice.png" alt=""></div>
				</div>

				<!-- Choice Content -->
				<div class="col-lg-6 choice_col magic_fade_in">
					<div class="choice_content">
						<div class="section_title magic_fade_in"><h2>Why Choose us?</h2></div>
						<div class="choice_text">
							<p>Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis eget nibh laoreet iaculis. Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis eget nibh laoreet iaculis.</p>
						</div>
						<div class="choice_list">
							<ul class="d-flex flex-row align-items-start justify-content-between">
								<li class="d-flex flex-column align-items-center justify-content-center magic_fade_in">
									<div class="choice_icon"><img src="templates/main/template/images/icon_7.svg" alt="https://www.flaticon.com/authors/freepik"></div>
									<div class="choice_title">Marketing</div>
								</li>
								<li class="d-flex flex-column align-items-center justify-content-center magic_fade_in">
									<div class="choice_icon"><img src="images/icon_8.svg" alt="https://www.flaticon.com/authors/freepik"></div>
									<div class="choice_title">Stats</div>
								</li>
								<li class="d-flex flex-column align-items-center justify-content-center magic_fade_in">
									<div class="choice_icon"><img src="images/icon_9.svg" alt="https://www.flaticon.com/authors/freepik"></div>
									<div class="choice_title">Servers</div>
								</li>
								<li class="d-flex flex-column align-items-center justify-content-center magic_fade_in">
									<div class="choice_icon"><img src="images/icon_10.svg" alt="https://www.flaticon.com/authors/freepik"></div>
									<div class="choice_title">Quality</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- CTA -->

	<div class="cta">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="cta_content d-flex flex-lg-row flex-column align-items-center justify-content-lg-between justify-content-center magic_fade_in">
						<div class="cta_title">Start building your website now!</div>
						<div class="cta_price"><span>from</span>$9.90<span>/month</span></div>
						<div class="cta_button"><a href="#">Start Now</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->

	<footer class="footer magic_fade_in">
		<div class="container">
			<div class="row">
				
				<div class="col-lg-6 footer_col magic_fade_in">
					<div class="footer_about">
						<div class="footer_logo">Host<span>Space</span></div>
						<div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<?php echo '<script'; ?>
>document.write(new Date().getFullYear());<?php echo '</script'; ?>
> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</div>
						<div class="footer_text">
							<p>Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis eget nibh laoreet iaculis. Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis eget nibh laoreet iaculis.</p>
						</div>
						<div class="contact_container">
							<form action="#" id="contact_form" class="contact_form">
								<div class="row">
									<div class="col-md-6">
										<input type="text" class="contact_input" placeholder="Your Name" required="required">
									</div>
									<div class="col-md-6">
										<input type="email" class="contact_input" placeholder="Your e-mail" required="required">
									</div>
								</div>
								<div>
									<textarea class="contact_input contact_textarea" placeholder="Message" required="required"></textarea>
								</div>
								<button class="contact_button">Send</button>
							</form>
						</div>
					</div>
				</div>

				<div class="col-lg-6 footer_col">
					<div class="footer_links">
						<div class="row">
							<div class="col-sm-6 footer_list_col magic_fade_in">
								<div class="footer_list_container">
									<div class="footer_list_title">Hosting Options</div>
									<ul class="footer_list">
										<li><a href="#">Web Hosting</a></li>
										<li><a href="#">WordPress Hosting</a></li>
										<li><a href="#">VPS Hosting</a></li>
										<li><a href="#">Cloud Server</a></li>
										<li><a href="#">Reseller Package</a></li>
										<li><a href="#">Dedicated Hosting</a></li>
									</ul>
								</div>
							</div>
							<div class="col-sm-6 footer_list_col magic_fade_in">
								<div class="footer_list_container">
									<div class="footer_list_title">Domains</div>
									<ul class="footer_list">
										<li><a href="#">Buy a Domain</a></li>
										<li><a href="#">Premium Domain Names</a></li>
										<li><a href="#">Web Hosting</a></li>
										<li><a href="#">Transfer Your Domain</a></li>
										<li><a href="#">Domain Marketplace</a></li>
									</ul>
								</div>
							</div>
							<div class="col-sm-6 footer_list_col magic_fade_in">
								<div class="footer_list_container">
									<div class="footer_list_title">Resellers</div>
									<ul class="footer_list">
										<li><a href="#">VPS Hosting</a></li>
										<li><a href="#">Cloud Server</a></li>
										<li><a href="#">Reseller Package</a></li>
										<li><a href="#">Dedicated Hosting</a></li>
									</ul>
								</div>
							</div>
							<div class="col-sm-6 footer_list_col magic_fade_in">
								<div class="footer_list_container">
									<div class="footer_list_title">Support</div>
									<ul class="footer_list">
										<li><a href="#">Buy a Domain</a></li>
										<li><a href="#">Premium Domain Names</a></li>
										<li><a href="#">Web Hosting</a></li>
									</ul>
								</div>	
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</footer>
</div>

<?php echo '<script'; ?>
 src="templates/main/template/js/jquery-3.2.1.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="templates/main/template/styles/bootstrap-4.1.2/popper.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="templates/main/template/styles/bootstrap-4.1.2/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="templates/main/template/plugins/greensock/TweenMax.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="templates/main/template/plugins/greensock/TimelineMax.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="templates/main/template/plugins/scrollmagic/ScrollMagic.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="templates/main/template/plugins/greensock/animation.gsap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="templates/main/template/plugins/greensock/ScrollToPlugin.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="templates/main/template/plugins/OwlCarousel2-2.2.1/owl.carousel.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="templates/main/template/plugins/easing/easing.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="templates/main/template/plugins/progressbar/progressbar.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="templates/main/template/plugins/parallax-js-master/parallax.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="templates/main/template/js/custom.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
