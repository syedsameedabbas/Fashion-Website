<?php
include "conn.php";
session_start();
$conn = connect::connected();
if(!isset($_SESSION["AID"]))
	{
    header("location: adminlogin.php");	}



?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Change Password</title>
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
                              <li>
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
                            
                            <li   class="active-menu">
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

				<li >
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




	<!-- Title page -->
	<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('images/bg-03.jpg');">
		<h2 class="ltext-105 cl0 txt-center">
			Change Password
		</h2>
     
	</section>	

    <?php 
  if(!(isset($_GET['submit']))){
  $_GET['submit'] = "";
}
          //$_GET['submit'] = "";
          if($_GET['submit'] == "success"){
                  echo "<div class='alert alert-success' role='alert' style='width: 100%; text-align: center; margin: 0 auto 0 auto'>Your Ad Has Been Submited Successfully And Will Be Posted In A While!</div><br>";
                  //connect::debug($_GET);
          }elseif($_GET['submit'] == "fail"){
                  echo "<div class='alert alert-danger' role='alert' style='width: 100%; text-align: center; margin: 0 auto 0 auto'>Something Went Wrong!</div><br>";
          } elseif($_GET['submit'] == "passmismacthed"){
                  echo "<div class='alert alert-danger' role='alert' style='width: 100%; text-align: center; margin: 0 auto 0 auto'>Password Mismatched!</div><br>";
          }
          elseif($_GET['submit'] == "invalidpass"){
                  echo "<div class='alert alert-danger' role='alert' style='width: 100%; text-align: center; margin: 0 auto 0 auto'>Invalid Password!! Please Enter An Valid Password.</div><br>";
          }
          ?>
	<!-- Content page -->
	<section class="bg0 p-t-104 p-b-116">
       
		<div class="container">
			<div class="flex-w flex-tr">
				<div class="size-200 bor10 p-lr-300 p-t-55 p-b-70 p-lr-15-lg w-full-md">

						<h4 class="mtext-105 cl2 txt-center p-b-30">
							Change Your Password!!
						</h4>
                     <?php
                    $conn = connect::connected();
							if(isset($_POST["submit"]))
							{
								$sql="select * from admin where adminPass='{$_POST["opass"]}' and AID='{$_SESSION["AID"]}'";
								$result=$conn->query($sql);
								if($result->num_rows>0)
								{
									if($_POST["npass"]==$_POST["cpass"])
									{
										$s="update admin SET adminPass='{$_POST["npass"]}' where AID='{$_SESSION["AID"]}'";
										$conn->query($s);
                                        echo "<script>window.location='adminallproduct.php?submit=passchanged';</script>";
									}
									else
									{
										echo "<script>window.location='adminchangepassword.php?submit=passmismacthed';</script>";
									}
								}
								else
								{
                                    echo "<script>window.location='adminchangepassword.php?submit=invalidpass';</script>";
								}
							}
						
						
						?>
						
                <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
			<label>Old Password</label>
						<div class="bor8 m-b-20 how-pos4-parent">
                            
							<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="password" maxlength="20" required="" name="opass">
							<img class="how-pos4 pointer-none" src="images/icons/icon-email.png" alt="ICON">
						</div>
                        <label>New Password</label>
						<div class="bor8 m-b-20 how-pos4-parent">
                            
							<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="password" maxlength="20" required=""  name="npass">
							<img class="how-pos4 pointer-none" src="images/icons/icon-heart-01.png" alt="ICON">
						</div>
                     <label>Confirm Password</label>
						<div class="bor8 m-b-20 how-pos4-parent">
                            
							<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="password" maxlength="20" required=""  name="cpass">
							<img class="how-pos4 pointer-none" src="images/icons/icon-heart-01.png" alt="ICON">
						</div>

						<button type="submit" name="submit" class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer">Change Password
                    </button>
					</form>
				</div>

			</div>
		</div>
	</section>	
	




	<!-- Footer -->
	<?php include "includes/footer.php"; ?>


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
	<script src="vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
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
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>