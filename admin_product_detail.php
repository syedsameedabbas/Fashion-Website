<?php 
include 'conn.php';
session_start();
if(!(isset($_SESSION['AID']))){
    header("location: adminlogin.php");
}
if(!(isset($_GET['id'])) || $_GET['id'] == ""){
	header("location: adminallproduct.php");
}else{
	$id = $_GET['id'];
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Product Detail</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/linearicons-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/MagnificPopup/magnific-popup.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body class="animsition">
	
		<header class="header-v4">
		<!-- Header desktop -->
		<div class="container-menu-desktop">
            <div class="top-bar">
				<div class="content-topbar flex-sb-m h-full container">
					<div class="left-top-bar">
						All Kinds of Fancy and Cottons Suits Stich & Unstitch
					</div>

					<div class="right-top-bar flex-w h-full">
						<a href="#" class="flex-c-m trans-04 p-lr-25">
							Noman Ali
						</a>

						<a href="#" class="flex-c-m trans-04 p-lr-25">
							0314-2304355
						</a>
					</div>
				</div>
			</div>
			<div class="wrap-menu-desktop how-shadow1">
				<nav class="limiter-menu-desktop container">
					
					<!-- Logo desktop -->		
					<a href="adminallproduct.php" class="logo">
						<img src="images/icons/adminlogo.png" alt="IMG-LOGO">
					</a>

					<!-- Menu desktop -->
					<div class="menu-desktop">
                        
						<ul class="main-menu">
                              <li  class="active-menu">
								<a href="#" >Products</a>
								<ul class="sub-menu">
									<li><a href="adminallproduct.php">All Products</a></li>
									<li><a href="adminwomens.php">Women & Bridal</a></li>
									<li><a href="adminmen.php">Men's</a></li>
                                    <li><a href="adminkid.php">Kid's</a></li>
								</ul>
                                  <span class="arrow-main-menu">
						<i class="fa fa-angle-down" aria-hidden="true"></i>
					</span>
							</li>
                            
                            <li>
								<a href="#">Setting</a>
								<ul class="sub-menu">
									<li><a href="adminchangepassword.php">Change Password</a></li>
								</ul>
                                      <span class="arrow-main-menu">
						<i class="fa fa-angle-down" aria-hidden="true"></i>
					</span>
							</li>
                          <li>
								<a href="adminfabricdetail.php">Post AD</a>
							</li>


						</ul>
                  	</div>	

					<!-- Icon header -->
				  	                                    <?php 
            if(isset($_SESSION['AID'])){
            
              echo "<ul style='margin-left:550px;'>";
              echo "<li>";
                echo "<form action=' 'method='post'> <input type='submit' class='flex-c-m stext-101 cl0 size-121 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail' name='logoutBtn' value='Logout'></form>";
              echo "</li>";
            echo "</ul>";
            }
            if(isset($_POST['logoutBtn'])){
              session_unset();
              echo "<script>window.location.href = 'adminlogin.php'</script>";
            }

             ?>
				
				</nav>
              
			</div>	
		</div>

		<!-- Header Mobile -->
		<div class="wrap-header-mobile">
			<!-- Logo moblie -->		
			<div class="logo-mobile">
				<a href="adminallproduct.php"><img src="images/icons/adminlogo.png" alt="IMG-LOGO"></a>
			</div>

			

			<!-- Button show menu -->
			<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</div>
		</div>


		<!-- Menu Mobile -->
		<div class="menu-mobile">
	<ul class="topbar-mobile">
				<li>
					<div class="left-top-bar">
						All Kinds of Fancy and Cottons Suits Stich & Unstitch
					</div>
				</li>

				<li>
					<div class="right-top-bar flex-w h-full">
						<a href="#" class="flex-c-m p-lr-10 trans-04">
							Noman Ali
						</a>

						<a href="#" class="flex-c-m p-lr-10 trans-04">
                                0314-2304355
						</a>
					</div>
				</li>
			</ul>
			<ul class="main-menu-m">
                	<li>
					<a href="#">Products</a>
					<ul class="sub-menu-m">
						<li><a href="adminallproduct.php">All Products</a></li>
						<li><a href="adminwomens.php">Women & Bridal</a></li>
						<li><a href="adminmen.php">Men's</a></li>
                        <li><a href="adminkid.php">Men's</a></li>
					</ul>
					<span class="arrow-main-menu-m">
						<i class="fa fa-angle-right" aria-hidden="true"></i>
					</span>
				</li>
				<li>
					<a href="adminfabricdetail.php">Post AD</a>
					<span class="arrow-main-menu-m">
					</span>
				</li>

				<li>
					<a href="#">Setting</a>
					<ul class="sub-menu-m">
						<li><a href="adminchangepassword.php">Change Password</a></li>
						
					</ul>
					<span class="arrow-main-menu-m">
						<i class="fa fa-angle-right" aria-hidden="true"></i>
					</span>
				</li><br><br>
                				  	                                    <?php 
            if(isset($_SESSION['AID'])){
            
              echo "<ul >";
              echo "<li>";
                echo "<form action=' 'method='post'> <input type='submit' class='flex-c-m stext-101 cl0 size-121 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail' name='logoutBtn' value='Logout'></form>";
              echo "</li>";
            echo "</ul>";
            }
            if(isset($_POST['logoutBtn'])){
              session_unset();
              echo "<script>window.location.href = 'adminlogin.php'</script>";
            }

             ?>
			</ul>
		</div>
	</header>
    	<?php
                    
    
                        $conn = connect::connected();
                      $q = "SELECT DISTINCT (p.postId), i.image, p.postViews ,p.postName, p.postType, p.postPrice, p.postCategory, p.postDesc, p.postDate, i.image from images i RIGHT JOIN postad p ON i.postId = p.postId WHERE p.postId = $id GROUP BY p.postId";
    
                      
                      
                      $res = $conn->query($q);
                      $row = $res->num_rows;
                      if(!($row > 0 )){
                      	echo "<script>window.alert('Unable to find requested ad')</script>";
                      	echo "<script>window.location= 'adminallproduct.php'</script>";
                      }
                      $imgQuery = "SELECT `image` FROM `images` WHERE postId = $id";
                      $imgres = $conn->query($imgQuery);

                      
                      
                    $data = $res->fetch_assoc();
                    //connect::debug($data);

                ?>
		
	<!-- breadcrumb -->
	<div class="container">
		<div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
			<a href="index.html" class="stext-109 cl8 hov-cl1 trans-04">
				Home
				<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
			</a>

			<a href="#" class="stext-109 cl8 hov-cl1 trans-04">
				<?php echo $data['postCategory']; ?>
				<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
			</a>

			<span class="stext-109 cl4">
				Product Details
			</span>
		</div>
	</div>


	<!-- Product Detail -->
	<section class="sec-product-detail bg0 p-t-65 p-b-60">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-lg-7 p-b-30">
					<div class="p-l-25 p-r-30 p-lr-0-lg">
						<div class="wrap-slick3 flex-sb flex-w">
							<div class="wrap-slick3-dots"></div>
							<div class="wrap-slick3-arrows flex-sb-m flex-w"></div>
							<div class='slick3 gallery-lb'>
						<?php  
						while($image = $imgres->fetch_assoc()){
							//connect::debug($image);
							//echo "<div class='slick3 gallery-lb'>";
								echo "<div class='item-slick3' data-thumb='postimg/$image[image]'>";
									echo "<div class='wrap-pic-w pos-relative'>";
										echo "<img src='postimg/$image[image]' alt='IMG-PRODUCT' height='550px' width='306px'>";

										echo "<a class='flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04' href='postimg/$image[image]'>";
											echo "<i class='fa fa-expand'></i>";
										echo "</a>";
									echo "</div>";
								echo "</div>";
							//echo "</div>";
						}
							?>
						</div>
						</div>
					</div>
				</div>

					
					<div class="col-md-6 col-lg-5 p-b-30">
					<div class="p-r-50 p-t-5 p-lr-0-lg">
						<h4 class="mtext-105 cl2 js-name-detail p-b-14">
							<?php echo $data['postName']; ?>
                         
						</h4>
                           <p class="stext-102 cl3 p-t">
								<?php echo $data['postType']; ?>
							</p>

						<span class="mtext-106 cl2">
							RS: <?php echo $data['postPrice']; ?>
						</span>
                        <br><br>
                            <h4 class="mtext-105 cl2 js-name-detail p-t">
								DESCRIPTION:
							</h4>
							<p class="stext-102 cl3 p-t-5">
								<?php echo $data['postDesc']; ?>
							</p>
                            
                            <br>
                            <br>
                         <?php
							echo "<a href='admineditad.php?adId=$id'><button class='flex-c-m stext-101 cl0 size-121 bg1 bor1 hov-btn1 p-lr-15 trans-04'>Edit This Ad</button></a>";
                            ?>
                       <br>
						       <?php
							echo "<a href='admin_dlt_ad.php?adId=$id'><button class='flex-c-m stext-101 cl0 size-121 bg1 bor1 hov-btn1 p-lr-15 trans-04'>Delete This Ad</button></a>";
                            ?>
                        <br>
                        <br>
				 <p  style="text-align: right;"><?php echo $data['postDate']; ?></p><p style="text-align: right;">Viewers:  <?php echo $data['postViews'];  ?> </p>
					</div>
                         <div class="flex-w flex-m p-l-100 p-t-40 respon7">

								<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Facebook">
									<i class="fa fa-facebook"></i>
								</a>

								<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Twitter">
									<i class="fa fa-instagram"></i>
								</a>
							</div>
				</div>
			</div>
        </div>
		<div class="bg6 flex-c-m flex-w size-302 m-t-73 p-tb-15">

			<span class="stext-107 cl6 p-lr-25">
				Category:    <?php echo $data['postCategory']; ?>
			</span>
		</div>
	</section>



	<!-- Footer -->
	<?php include "includes/footer.php" ?>

	<!-- Back to top -->
	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
	</div>

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/slick/slick.min.js"></script>
	<script src="js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script src="vendor/parallax100/parallax100.js"></script>
	<script>
        $('.parallax100').parallax100();
	</script>
<!--===============================================================================================-->
	<script src="vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
	<script>
		$('.gallery-lb').each(function() { // the containers for all your galleries
			$(this).magnificPopup({
		        delegate: 'a', // the selector for gallery item
		        type: 'image',
		        gallery: {
		        	enabled:true
		        },
		        mainClass: 'mfp-fade'
		    });
		});
	</script>
<!--===============================================================================================-->
	<script src="vendor/isotope/isotope.pkgd.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/sweetalert/sweetalert.min.js"></script>
	<script>
		$('.js-addwish-b2, .js-addwish-detail').on('click', function(e){
			e.preventDefault();
		});

		$('.js-addwish-b2').each(function(){
			var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-b2');
				$(this).off('click');
			});
		});

		$('.js-addwish-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-detail');
				$(this).off('click');
			});
		});

		/*---------------------------------------------*/

		$('.js-addcart-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});
	
	</script>
<!--===============================================================================================-->
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			$(this).css('position','relative');
			$(this).css('overflow','hidden');
			var ps = new PerfectScrollbar(this, {
				wheelSpeed: 1,
				scrollingThreshold: 1000,
				wheelPropagation: false,
			});

			$(window).on('resize', function(){
				ps.update();
			})
		});
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
<?php
$view = $data['postViews'] + 1;
$q2 = "UPDATE `postad` SET `postViews` = $view WHERE `postId` = $id";
$conn->query($q2); 
?>