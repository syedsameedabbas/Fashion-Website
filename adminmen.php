<?php 
include 'conn.php';
session_start();
if(!(isset($_SESSION['AID']))){
    header("location: adminlogin.php");
}

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Product</title>
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

	<!-- Product -->
	<div class="bg0 m-t-23 p-b-140">
		<div class="container">
			<div class="flex-w flex-sb-m p-b-52">
				<div class="flex-w flex-l-m filter-tope-group m-tb-10">

					<h1><b>Men's Fabrics</b></h1>

					

				</div>

				<div class="flex-w flex-c-m m-tb-10">

					<div class="flex-c-m stext-106 cl6 size-105 bor4 pointer hov-btn3 trans-04 m-tb-4 js-show-search">
						<i class="icon-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-search"></i>
						<i class="icon-close-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
						Search
					</div>
				</div>
				
				<!-- Search product -->
				<div class="dis-none panel-search w-full p-t-10 p-b-15">
					<div class="bor8 dis-flex p-l-15">
					<form action="" method="get">
						<div class="hidden-submit"><input type="submit" style="display: none;" value="" name="submitBtn" tabindex="-1"/></div>
						<i class="zmdi zmdi-search" style="display: inline-block;"></i>
					<input class="mtext-107 cl2 size-114 plh2 p-r-300" name="inputTxt" style="display: inline-block;" type="text" pattern="[a-z A-Z 0-9]{3,20}" maxlength="20" name="search-product" placeholder="Search">
					</form>
					</div>	
				</div>

            </div>

            <?php
                    $conn = connect::connected();
                    if(!(isset($_GET['inputTxt']))){
                    	$_GET['inputTxt'] = "";
                    }
                    if(isset($_GET['inputTxt'])){
                    	//$filtered = filter_var($_GET['inputTxt'], FILTER_SANITIZE_STRING);
                    	$escaped = $conn->real_escape_string($_GET['inputTxt']);
                    	$input = addcslashes($escaped, '%_');	
                    	//$input = $_GET['inputTxt'];
                    }
                    
                      $q = "SELECT DISTINCT (p.postId), i.image ,p.postName, p.postType, p.postPrice, p.postDate, i.image from images i RIGHT JOIN postad p ON i.postId = p.postId WHERE p.postCategory = 'men' AND  postName LIKE '%$input%' GROUP BY p.postId";
        			$res = $conn->query($q); 
      				 
           			 //connect::debug($res);
      				 	$row = $res->num_rows;
      				 	//Result Shown per page
                      $resultsPerPage = 16;

                      //Determining the no of page going to be shown
                      $noOfPages = ceil($row / $resultsPerPage);

                      //Getting current page number
                      if((!(isset($_GET['page']))) OR $_GET['page'] < 1){
                        $currentPage = 1;
                      }elseif ($_GET['page'] > $noOfPages) {
                          $currentPage = $noOfPages;
                      }
                      else{
                        $currentPage = $_GET["page"];
                      }

                      //Algorithum for getting page rows from database
                      $pageStartingRow = ($currentPage - 1) * $resultsPerPage;

                      //Query for getting limitrd result according to pagination
                      $q1 = "SELECT DISTINCT (p.postId), i.image ,p.postName, p.postType, p.postPrice, p.postDate, i.image from images i RIGHT JOIN postad p ON i.postId = p.postId WHERE p.postCategory = 'men' AND postName LIKE '%$input%' GROUP BY p.postId LIMIT $pageStartingRow, $resultsPerPage;";
                      $res1 = $conn->query($q1);
				if($row >= 1){
                        echo "<p class='mb-4' style='height:30px; width: 100%; color: white; text-align: center; border-radius: 6px; margin-bottom: 12px; background-color: #717fe0;' >About $row Ads Found. Viewing $currentPage of $noOfPages Pages.</p><br><br>";
                      }else{
                          echo "<p class='mb-4' style='height:30px; width: 100%; color: white; text-align: center; border-radius: 6px; margin-bottom: 12px; background-color: #717fe0;' >Oops.. No Ad Found.</p><br><br>";
                          //die();
                      }
                      if($row > 0){
                 echo "<div class='row isotope-grid'>";
                    while($data = $res1->fetch_assoc()){
                    	
				echo "<div class='col-sm-6 col-md-8 col-lg-3 p-b-35 isotope-item men' >";
					echo "<div class='block2'>";
						echo "<div class='block2-pic hov-img0'>";
							echo "<img src='postimg/$data[image]' alt='IMG-PRODUCT' height='350px' width='100%'>";

							echo "<a href='admin_product_detail.php?id=$data[postId]' class='block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal'>
								More Details
							</a>";
						echo "</div>";

						echo "<div class='block2-txt flex-w flex-t p-t-14'>";
							echo "<div class='block2-txt-child1 flex-col-l '>";
								echo "<p class='stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6'>
									$data[postName]
								</p>";

								echo "<span class='stext-105 cl3'>
									RS: $data[postPrice]
								</span>";
							echo "</div>";
                         echo "<div class='block2-txt-child2 flex-r p-t-3'>";
                            echo "<p class='stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6'>
									$data[postType]
								</p>";
							echo "</div>";
						echo "</div>";
					echo "</div>";
				echo "</div>";
       
                                      }
                        }      
                        ?>



					
            	
			</div><br><?php
         //pagination code
            //current page = active page (the page we are viewing right now)
            if($noOfPages > 1){ //pagination would show when total pages($noOfPages) are greater then 1... 
              $prevPage = $currentPage - 1; //contain previus page..

              echo "<div><nav aria-label='Page navigation example'>
					  <ul class='pagination justify-content-center'>";
              if($currentPage > 1){ //if current page is greater then 1 then < (precious page indicator) would show.
                echo "<li class='page-item' style='background-color:#717fe0; border-color:#717fe0'>
				      <a class='page-link' style='color:#717fe0'; href='adminmen.php?page=$prevPage' aria-label='Previous'>
				        <span aria-hidden='true'>&laquo;</span>
				        <span class='sr-only' >Previous</span>
				      </a>
				    </li>";
              }else{
              	echo "<li class='page-item disabled' >
				      <a class='page-link' style='color:#717fe0;' href='adminmen.php?page=$prevPage' aria-label='Previous' >
				        <span aria-hidden='true'>&laquo;</span>
				        <span class='sr-only'>Previous</span>
				      </a>
				    </li>";
              }
              //that 1 contain how much button would show before current  page (1,2,current page)..
              if($currentPage >= 1){ //if current page is greater then 1 then previous page number would show.
                for($page=$currentPage - 1; $page<= $currentPage + 1; $page++){//looping throgh page buttons.
                  if($currentPage == $page){//making current page active(current page)
                    //echo "current";
                        echo "<li class='page-item active' style='background-color:#717fe0; border-color:#717fe0'><a class='page-link' style='background-color:#717fe0;'>$page</a></li>";
                  }else{//non active pages
                      if($page > 0 AND $page <= $noOfPages){//controls the nonactive page
                        //agr page 0 se km ho ga or noOfPages se ziada ho ga to show nhi kare ga..
                      echo "<li class='page-item'><a class='page-link' href='adminmen.php?page=$page'>$page</a></li>";
                    }  
                  }
                }

              }
              //if noOfPages is greater then 1 and current page is less then total pages then > (next page indicator) would show.
              if($noOfPages > 1 AND $currentPage < $noOfPages){
                $nextPage = $currentPage + 1;
                echo "<a class='page-link' style='color:#717fe0;' href='adminmen.php?page=$nextPage' aria-label='Next'>
				        <span aria-hidden='true'>&raquo;</span>
				        <span class='sr-only'>Next</span>
				      </a>
				    </li>";
              }
            }
          ?>    
          </ul>
			</nav>
		</div>
        </div>
    </div>
    
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
	
<!--===============================================================================================-->
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>

<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>