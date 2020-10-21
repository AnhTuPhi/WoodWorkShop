<?php
    session_start();
    $database_name = "reg";
    $con = mysqli_connect("localhost","root","",$database_name);

    if (isset($_POST["add"])){
        if (isset($_SESSION["cart"])){
            $item_array_id = array_column($_SESSION["cart"],"product_id");
            if (!in_array($_GET["id"],$item_array_id)){
                $count = count($_SESSION["cart"]);
                $item_array = array(
                    'product_id' => $_GET["id"],
					'item_name' => $_POST["hidden_name"],
					'item_brand' => $_POST["hidden_brand"],
                    'product_price' => $_POST["hidden_price"],
					'item_quantity' => $_POST["quantity"],
					/*'permision' => $_POST["permision"],*/
                );
                $_SESSION["cart"][$count] = $item_array;
                echo '<script>window.location="shop.php"</script>';
            }else{
                echo '<script>alert("Product is already Added to Cart")</script>';
                echo '<script>window.location="shop.php"</script>';
            }
        }else{
            $item_array = array(
                'product_id' => $_GET["id"],
				'item_name' => $_POST["hidden_name"],
				'item_brand' => $_POST["hidden_brand"],
                'product_price' => $_POST["hidden_price"],
				'item_quantity' => $_POST["quantity"],
				/*'permision' => $_POST["permision"],*/
            );
			$_SESSION["cart"][0] = $item_array;
        }
    }

    if (isset($_GET["action"])){
        if ($_GET["action"] == "delete"){
            foreach ($_SESSION["cart"] as $keys => $value){
                if ($value["product_id"] == $_GET["id"]){
                    unset($_SESSION["cart"][$keys]);
                    echo '<script>alert("Product has been Removed...!")</script>';
                    echo '<script>window.location="shop.php"</script>';
                }
            }
        }
	}
?>

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
		<style>
        @import url('https://fonts.googleapis.com/css?family=Titillium+Web');

        *{
            font-family: 'Titillium Web', sans-serif;
        }
        .product{
            border: 1px solid #eaeaec;
            margin: -1px 19px 3px -1px;
            padding: 10px;
            text-align: center;
			background-color: #efefef;
			height:520px;
		}
        table, th, tr{
            text-align: center;
        }
        .title2{
            text-align: center;
            color: #66afe9;
            background-color: #efefef;
            padding: 2%;
        }
        h2{
            text-align: center;
            color: #66afe9;
            background-color: #efefef;
            padding: 2%;
        }
        table th{
            background-color: #efefef;
        }
    </style>
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
										<div><a href="shop.html">Tất cả sản phẩm</a></div>
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
										<div><a href="news.php">Tin tức</a></div>
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
										<div><a href="shop.php" >
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
    <div class="content">
        <?php if(isset($_SESSION['success'])): ?>
            <div class="error success">
                <h3>
                    <?php 
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                        ?>
                </h3>
            </div>
		<?php endif ?>
		<?php
print_r($_SESSION);
?>

        <?php if (isset($_SESSION['username'])): ?>
			<p>Welcom <strong><?php echo $_SESSION['username']; ?></strong></p>
            <p><a href="login.php?logout='1">Logout</a></p>
		<?php endif ?>
		<?php if (isset($_SESSION['permision'])): ?>
			<p>Welcom <strong><?php echo $_SESSION['permision']; ?></strong></p>
			<?php endif ?>
    </div>
	
	<div class="container" style="width:100%">
        <h2>Shopping Cart</h2>
        <?php
            $query = "SELECT * FROM products ORDER BY id ASC ";
            $result = mysqli_query($con,$query);
            if(mysqli_num_rows($result) > 0) {

                while ($row = mysqli_fetch_array($result)) {
					
                    ?>
                    <div class="col-lg-3">

                        <form method="post" action="shop.php?action=add&id=<?php echo $row["id"]; ?>">

                            <div class="product">
                                <img src="<?php echo $row["image"]; ?>" class="img-responsive">
								<h5 class="text-info"><?php echo $row["pname"]; ?></h5>
								<h5 class="text-danger"><?php echo $row["brand"]; ?></h5>
								<h5 class="text-danger"><?php echo $row["price"]; ?></h5>
                                <input type="text" name="quantity" class="form-control" value="1">
								<input type="hidden" name="hidden_name" value="<?php echo $row["pname"]; ?>">
								<input type="hidden" name="hidden_brand" value="<?php echo $row["brand"]; ?>">
								<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
                                <input type="submit" name="add" style="margin-top: 15px;" class="btn btn-success"
                                       value="Add to Cart">
                            </div>
                        </form>
                    </div>
                    <?php
                }
            }
        ?>

        <div style="clear: both"></div>
        <h3 class="title2">Shopping Cart Details</h3>
        <div class="table-responsive">
            <table class="table table-bordered">
            <tr>
				<th width="20%">Product Name</th>
				<th width="10%">Brand</th>
                <th width="10%">Quantity</th>
                <th width="13%">Price Details</th>
                <th width="10%">Total Price</th>
                <th width="17%">Remove Item</th>
            </tr>

            <?php
                if(!empty($_SESSION["cart"])){
					$total = 0;
					$idproducts;
                    foreach ($_SESSION["cart"] as $key => $value) {
                        ?>
                        <tr>
							<td><?php echo $value["item_name"]; ?></td>
							<td><?php echo $value["item_brand"]; ?></td>
                            <td><?php echo $value["item_quantity"]; ?></td>
                            <td><?php echo $value["product_price"];?> vnd</td>
                            <td>
                                 <?php echo number_format($value["item_quantity"] * $value["product_price"], 2); ?> vnd</td>
                            <td><a href="shop.php?action=delete&id=<?php echo $value["product_id"]; ?>"><span
                                        class="text-danger">Remove Item</span></a></td>

                        </tr>
                        <?php
                        $total = $total + ($value["item_quantity"] * $value["product_price"]);
					}
						$idproducts = $value["product_id"];
						$quantity = $value["item_quantity"];
                        ?>
                        <tr>
                            <td colspan="3" align="right">Total</td>
                            <th align="right"><?php echo number_format($total, 2); ?> vnd</th>
                            <td></td>
                        </tr>
                        <?php
						$_SESSION["total"] = $total;
                    }
                ?>
            </table>
			<form  method="post">
				<button type="submit" name="buy" class="btn">Mua hang</button>
			</form>
        </div>

    </div>
	<?php 
				if (isset($_POST["buy"])) {
					$userId = $_SESSION["user_id"];
					$username = $_SESSION["username"];
					$email = $_SESSION["email"];
					//$number = $_SESSION["number"];
					//$address = $_SESSION["address"];
					$_SESSION["quantity"] = $quantity;
					$_SESSION["idproducts"] = $idproducts;
					//lấy thông tin từ các form bằng phương thức POST
					$sql = "INSERT INTO bills(id, username, email, date_of_sale) VALUES ('$userId','$username','$email', now())";
					mysqli_query($con,$sql);
					echo "DATA HAS BEEN SENT";
					$sql1 = "INSERT INTO detailbill(idproduct, quantity, total) VALUES ('$idproducts','$quantity', '$total')";
					mysqli_query($con,$sql1);
					echo "DATA HAS BEEN SENT1";
				}	
	?>
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