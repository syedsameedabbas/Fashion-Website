<?php
include "conn.php";
session_start();
//connect::debug($_SESSION);
if(!(isset($_SESSION['AID']))){
    header("location: adminlogin.php");
}
//$conn = connect::connected();
?>

<?php 
class Post{

    private $postId;
    private $postName;
    private $postType;
    private $postPrice;
    private $postCategory;
    private $postDesc;
 

    public function set_post_id($id){
        $this->postId = $id;
    }
    public function set_post_name($name){
        $this->postName = $name;
    }
    public function set_post_type($type){
        $this->postType = $type;
    }
     public function set_post_price($price){
        $this->postPrice = $price;
    }
     public function set_post_category($category){
        $this->postCategory = $category;
    }
    public function set_post_Desc($desc){
        $this->postDesc = $desc;
    }
    public function get_post_id(){
        return $this->postId;
    }
    public function get_post_name(){
        return $this->postName;
    }
    public function get_post_type(){
        return $this->postType;
    }
    public function get_post_price(){
        return $this->postPrice;
    }
    public function get_post_category(){
        return $this->postCategory;
    }
    public function get_post_Desc(){
        return $this->postDesc;
    }
    public function upload_image(){
      $conn = connect::connected();
      $q = "SELECT `postId` FROM `postad` ORDER BY `postId` DESC";
      $res = $conn->query($q);
      $datadb = $res->fetch_assoc();
      $postId = $datadb['postId'];
      //include "conn.php";
      $files = $_FILES['files'];
      //connect::debug($files);
      $fileCount = count($_FILES['files']['name']);
      $fileFormat = $_FILES['files']['type'];
      $fileSize = $_FILES['files']['size'];
      //connect::debug($fileFormat);
      $arry = array('image/png', 'image/jpeg', 'image/PNG', 'image/JPEG', 'image/jpg', 'image/JPG');
      foreach ($fileSize as $key => $value) { 
        if($value > 2097152){
          echo "<script>window.location='adminallproduct.php?submit=size';</script>";
          die();
          //echo "invalid format: ".$value;
        }
      }
      foreach ($fileFormat as $key => $value) { 
        if(!(in_array($value, $arry))){
          echo "<script>window.location='adminallproduct.php?submit=formatError';</script>";
          die();
          //echo "invalid format: ".$value;
        }
      }
      if($fileCount > 5){
        echo "<script>window.location='adminallproduct.php?submit=imgGreater';</script>";
        die;
      }elseif($fileCount < 3){
        echo "<script>window.location='adminallproduct.php?submit=imgLesser';</script>";
        die;
      }
            
      $data = [];
      foreach ($files as $index => $value) {
        foreach ($value as $valueindex => $innervalue) {
          $data[$valueindex][$index] = $innervalue;
        }
        //
      }
      
      foreach ($data as $key => $value) {
        $unique = uniqid().'.jpg';
        $tempname = $value['tmp_name'];
        $imgname = $value['name'];
        
        if(move_uploaded_file($tempname, 'PostImg/'.$unique)){
            $q = "INSERT INTO `images`(`postId`, `image`) VALUES ($postId, '$unique')";
            if(connect::connection($q)){
              //echo $imgname." Has Successfully Uploaded<br>";
            }
        }
        else{
            echo "<script>window.location = 'adminallproduct.php?submit=fail';</script>";
            die();
        }
      }
      echo "<script>window.location = 'adminallproduct.php?submit=success';</script>";
      //$q = ""
    }
    
    public function ad_to_db($name, $type, $price, $category, $desc){
        $id = $_SESSION['AID'];
        date_default_timezone_set("Asia/Karachi");
        $date = date("Y-m-d h:i a");
        $q = "INSERT INTO `postad`(`postName`, `postType`, `postPrice`, `postCategory` ,`postDesc`,`postDate`) VALUES ('$name', '$type', '$price','$category', '$desc', '$date')";
        connect::connection($q);
    }

}
if(isset($_POST['submit'])){

  $obj = new Post();
  $obj->set_post_name($_POST['name']);
  $obj->set_post_type($_POST['type']);
  $obj->set_post_price($_POST['price']);
$obj->set_post_category($_POST['category']);
  $obj->set_post_desc($_POST['desc']);

  $obj->ad_to_db($obj->get_post_name(), $obj->get_post_type(), $obj->get_post_price(),$obj->get_post_category(), $obj->get_post_desc());

  $obj->upload_image();

}


 ?>




<!DOCTYPE html>
<html lang="en">
<head>
	<title>fabric detail</title>
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
                            
                            <li>
								<a href="#">Setting</a>
								<ul class="sub-menu">
									<li><a href="adminchangepassword.php">Change Password</a></li>
								</ul>
                                      <span class="arrow-main-menu">
						<i class="fa fa-angle-down" aria-hidden="true"></i>
					</span>
							</li>
                          <li   class="active-menu">
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
						<li><a href="adminwomens.php">Women's & Bridal's</a></li>
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


	<!-- Title page -->
	<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('images/bg-03.jpg');">
		<h2 class="ltext-105 cl0 txt-center">
			Submit Fabric Details
		</h2>
	</section>	


	<!-- Content page -->
    
    
	<section class="bg0 p-t-104 p-b-116">
		<div class="container">
			<div class="flex-w flex-tr">
				<div class="size-200 bor10 p-lr-300 p-t-55 p-b-70 p-lr-15-lg w-full-md">
					<form action="adminfabricdetail.php" method="post" enctype="multipart/form-data">
						<h4 class="mtext-105 cl2 txt-center p-b-30">
							Fill All the required fields!!
						</h4>
                        <label>Fabric name</label>

						<div class="bor8 m-b-20 how-pos4-parent">
                            
							<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="name" required="" pattern="[a-z A-Z 0-9]{3,15}" maxlength="15" placeholder="Enter Fabric Name">
						</div>
                        <label>Fabric type</label>
						<div class="bor8 m-b-20 how-pos4-parent">
							<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" required="" maxlength="20" pattern="[a-z A-Z 0-9]{3,20}" type="text" name="type" placeholder="Enter Fabric Type">
						</div>
                        <label>Fabric Price</label>
						<div class="bor8 m-b-20 how-pos4-parent">
							<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" pattern="[0-9]{3,7}" required="" maxlength="7" type="tel" name="price" placeholder="Enter Fabric Price">
						</div>
                        
                        <label>Category</label>
                            <div class="select-wrap one-third">
                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                      <select name="category" id="" class="form-control">
                        <option selected="" value="">Select Category</option>
                        <option value="Women">Women & Bridal</option>
                        <option value="Men">Men's</option>
                        <option value="Kid">Kid's</option>
                        
                      </select>
                    </div>
                        <br>
                          <label>Fabric Description</label>
                        <div class="bor8 m-b-30">
                         <textarea class="stext-111 cl2 plh3 size-120 p-lr-28 p-tb-25" required="" pattern="[a-z A-Z.0-9]{3,550}" maxlength="550" class="form-control py-2"  name="desc"></textarea>
                            </div>
                        <p>Choose minimum three and maximum five Fabric Images</p><BR>
                         <input type="file" name="files[]" id="files" accept=".jpg, .png, .PNG, .JPG" multiple="" required="required"/>

                        <br><br>
						<input class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer" type="submit" value="submit" name="submit">
                        </BR>
					</form>
				</div>

			</div>
		</div>
	</section>	
	




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