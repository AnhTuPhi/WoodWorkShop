<?php include('sever.php');?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="description" content="my first web">
	<meta name="author" content="AnhTuDev">
	<title>WoodWorkBench</title>
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="css/test.css">
	<!--https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css-->
	<link href="css/owl.theme.default.min.css" rel="stylesheet">
	<link href="css/owl.carousel.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;700&display=swap" rel="stylesheet">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
		integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css"
		integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

	<link rel="stylesheet"
		href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
		crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
		crossorigin="anonymous">

</head>

<body>
	<header id="header-wrapped">
			<div class="header-desktop hidden-xs hidden-sm">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-3">
							<div class="header-logo">
								<img src="./images/logo.webp" alt="logo">
							</div>
						</div>
						<div class="col-lg-9 col-md-9">
							<div class="header-menu">
								<ul class="menu">
									<li>
										<div><a href="index.html">Trang chủ</a></div>
									</li>
									<li>
										<div><a href="#">Tất cả sản phẩm</a></div>
										<ul class="dropdown_menu">
											<li>
												<ul class="submenu">
													<li>
														<a href="#">item 2.2.1</a>
													</li>
													<li>
														<a href="#">item 2.2.2</a>
													</li>
													<li>
														<a href="#">item 2.2.3</a>
													</li>
												</ul>
												<a href="#">Nội thất gỗ</a>
											</li>
											<li>
												<ul class="submenu">
													<li>
														<a href="#">item 2.2.1</a>
													</li>
													<li>
														<a href="#">item 2.2.2</a>
													</li>
													<li>
														<a href="#">item 2.2.3</a>
													</li>
												</ul>
												<a href="#">Quà lưu niệm gỗ</a>
											</li>
											<li>
												<ul class="submenu">
													<li>
														<a href="#">item 2.2.1</a>
													</li>
													<li>
														<a href="#">item 2.2.2</a>
													</li>
													<li>
														<a href="#">item 2.2.3</a>
													</li>
												</ul>
												<a href="#">Đồ trang trí</a>
											</li>
										</ul>
									</li>
									<li>
										<div><a href="#">Tin tức</a></div>
										<ul class="dropdown_menu">
											<li>
												<a href="#">Mẹo chọn gỗ</a>
											</li>
											<li>
												<ul class="submenu">
													<li>
														<a href="#">A</a>
													</li>
													<li>
														<a href="#">B</a>
													</li>
													<li>
														<a href="#">C</a>
													</li>
												</ul>
												<a href="#">Nổi bật</a>
											</li>
											<li>
												<a href="#">Đánh giá</a>
											</li>
										</ul>
									</li>
									<li>
										<div><a href="#">Giới thiệu</a></div>
									</li>
									<li>
										<div><a href="#">Liên hệ</a></div>
									</li>
									<li>
										<div><a href="#">
											<i class="fa fa-user"></i>
										</a></div>
										<ul class="dropdown_menu">
											<li>
												<a href="register.php">Đăng kí</a>
											</li>
											<li>
												<a href="login.php">Đăng nhập</a>
											</li>
										</ul>
									</li>
									<li>
										<div><a href="#">
											<i class="fa fa-search"></i>
										</a></div>
									</li>
									<li>
										<div><a href="shop.php">
											<i class="fa fa-shopping-cart"></i>
										</a></div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="header-mobile hidden-lg hidden-md">
				
			</div>
	</header>
	<div id="bannerr-wrapped">
		<section id="carousel-banner" class="owl-ones owl-carousel owl-theme">
			<div class="carousel-image-banner">
				<img src="./images/ms_banner_img1.webp" alt="banner">
				<h1 class="text1">Sản phẩm được làm tinh tế, chất lượng nhất</h1>
				<h2 class="text11">Chúng tôi mang đến những thiết kế độc đáo và sáng tạo cho không gian của bạn thêm mát mẻ và sảng khoái</h2>
			</div>
			<div class="carousel-image-banner">
				<img src="./images/ms_banner_img2.webp" alt="banner">
				<h1 class="text2">Sản phẩm được làm tinh tế, chất lượng nhất</h1>
				<h2 class="text12">Chúng tôi mang đến những thiết kế độc đáo và sáng tạo cho không gian của bạn thêm mát mẻ và sảng khoái</h2>
			</div>
			<div class="carousel-image-banner">
				<img src="./images/ms_banner_img3.webp" alt="banner">
				<h1 class="text2">Uy tín, chất lượng là ưu tiên hàng đầu</h1>
				<h2 class="text12">Chúng tôi mang đến những thiết kế độc đáo và sáng tạo cho không gian của bạn thêm mát mẻ và sảng khoái</h2>
			</div>
		</section>
	</div>
	<section id="form-wrapped">
		<div class="header">
			<h2>Đăng nhập</h2>
		</div>
		<form action="login.php" method="post">
			<?php
			include('errors.php'); 
			?>
			<div class="input-group">
				<input type="text" name="username" placeholder="Username">
			</div>
			<div class="input-group">
				<input type="password" name="password" placeholder="Password">
			</div>
			<!--<div class="input-group">
				<input type="text" name="permision" placeholder="Permison">
			</div>-->
			<div class="input-group">
				<button type="submit" name="login" class="btn">Đăng nhap</button>
			</div>
			<p>
				Chưa có tài khoản ? <a href="register.php">Đăng kis</a>
			</p>
		</form>
	</section>
	<section id="footer-wrapped">
		<div class="footer-inner">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<div class="footer-col">
							<a href="#"><img src="./images/ft-logo.png" alt="logo"></a>
							<ul>
								<li>
									Số 1 Lương Yên, Q.Hai Bà Trưng, Hà Nội
								</li>
								<li>
									<a href="tel:+84934323882">(+84)934 323 882</a>
								</li>
								<li>
									<a href="mailto:support@suplo.vn">support@suplo.vn</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<div class="footer-col">
							<h3>Dịch vụ khách hàng</h3>
							<ul>
								<li><a href="#">Hướng dẫn mua hàng</a></li>
								<li><a href="#">Kinh nghiệm mua hàng</a></li>
								<li><a href="#">Đối tác và đại lý</a></li>
								<li><a href="#">Hình thức thanh toán</a></li>
								<li><a href="#">Mua hàng và đổi trả</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<div class="footer-col">
							<h3>Các bộ sưu tập</h3>
							<ul>
								<li><a href="index.html">Trang chủ</a></li>
								<li><a href="#">Tất cả sản phẩm</a></li>
								<li><a href="#">Tin tức</a></li>
								<li><a href="#">Giới thiệu</a></li>
								<li><a href="#">Liên hệ</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<div class="footer-col">
							<h3>Like suplo trên mạng xã hội</h3>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="copyright">
			Copyrights Phi Anh Tu -Khoa CNTT- D13CNPM4 - 18810310361
		</div>
	</section>
	<script src="js/script.js"></script>
	<script src="https://code.jquery.com/jquery-2.2.4.min.js"
		integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script>
		$('.menu > li').hover(function() {
		  // khi thẻ menu li bị hover thì drop down menu thuộc thẻ li đó sẽ trượt xuống(hiện)
		  $('.dropdown_menu', this).slideDown();
		},function() {
		  // khi thẻ menu li bị out không hover nữa thì drop down menu thuộc thẻ li đó sẽ trượt lên(ẩn)
		  $('.dropdown_menu', this).slideUp();
		});
	  
		$('.dropdown_menu > li').hover(function() {
		  // khi thẻ dropdown_menu li bị hover thì submenusubmenu thuộc thẻ li đó sẽ trượt xuống(hiện)
		  $('.submenu', this).slideDown();
		},function() {
		  // khi thẻ dropdown_menu li bị hover thì submenusubmenu thuộc thẻ li đó sẽ trượt lên(ẩnẩn)
		  $('.submenu', this).slideUp();
		});
	</script>
	<script type="text/javascript">
		$('.owl-ones').owlCarousel({
			loop: true,
			nav: false,
			autoplay: true,
			animeOut: 'fadeOut',
			responsive: {
				0: {
					items: 1
				},
				900: {
					items: 1
				}
			}
		})
	</script>
	<script type="text/javascript">
		$('.owl-twos').owlCarousel({
			loop: true,
			nav: false,
			autoplay: true,
			animeOut: 'fadeOut',
			responsive: {
				0: {
					items: 2
				}
			}
		})
	</script>
</body>
</html>