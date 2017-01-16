<?php 

	session_start();

	$brands = array('India Gate','Pansari','KRB','Sella','Delhi Pasand','Loose Dal','Packed Dal');

	$dal_brands = array('5', '6');
	//tell which brands are of dal from $brands (remember array starts from 0)

	$all_products = array(
		array('Feast Rozzana',array("1kg" => array('80', '58'),"5kg" => array('395', '285'),"10kg" => array('790', '520'),"25kg" => array('1210', '1975')) , 'IG-FZ.png', '1',1),
		array('Mini Dubar', array("5kg" => array('335', '225'), "10kg" => array('670', '425'), "25kg" => array('1675', '1100')), 'IG-MD.jpg', '1'),
		array('Mini Mogra', array("10kg" => array('520', '340'), "25kg" => array('1300', '830')), 'IG-MM.jpg', '1'),
		array('Mini Mogra II', array("10kg" => array('400', '265'), "25kg" => array('1000', '650')), 'IG-MM2.jpg', '1',1),
		array('Mogra', array("5kg" => array('320', '215'), "10kg" => array('640', '425'),"25kg" => array('1600', '1050')), 'IG-M.png', '1'),
		array('Tibar', array("1kg" => array('100', '70'), "5kg" => array('500', '335'), "10kg" => array('1000', '665'), "25kg" => array('2500', '1625')), 'IG-T.png', '1'),
		array('Dubar', array("5kg" => array('455', '320'), "10kg" => array('910', '630'), "25kg" => array('2270', '1970')), 'IG-D.png', '1'),
		array('Mahak', array("10kg" => array('600', '350'), "25kg" => array('1500', '840')), 'P-Mahak.jpg', '2'),
		array('Tasty', array("10kg" => array('780', '450'), "25kg" => array('1980', '1090')), 'P-Tasty.jpg', '2'),
		array('Khana Khazana', array("10kg" => array('1200', '550'), "25kg" => array('3000', '1350')), 'P-Khana-Khazana.jpg', '2'),
		array('Royal', array("NA" => array('430', '500'), "NA" => array('1075', '1250')), 'P-Royal.jpg', '2'),
		array('Daily', array("10kg" => array('680', '390'), "25kg" => array('1700', '940')), '3_6.jpg', '2'),
		array('1', array("10kg" => array('830', '650'), "25kg" => array('2050', '1610')), 'KRB-1.jpg', '3'),
		array('2', array("10kg" => array('750', '530'), "25kg" => array('1875', '1310')), 'KRB-2.jpg', '3'),
		array('3', array("10kg" => array('660', '490'), "25kg" => array('1625', '1210')), 'KRB-3.jpg', '3'),
		array('4', array("10kg" => array('620', '450'), "25kg" => array('1525', '1110')), 'KRB-4.jpg', '3'),
		array('5', array("10kg" => array('580', '430'), "25kg" => array('1450', '1060')), 'KRB-5.jpg', '3'),
		array('6', array("10kg" => array('530', '380'), "25kg" => array('1300', '945')), 'KRB-6.jpg', '3'),
		array('7', array("10kg" => array('480', '345'), "25kg" => array('1175', '850')), 'KRB-7.jpg', '3'),
		array('8', array("10kg" => array('380', '290'), "25kg" => array('925', '710')), 'KRB-8.jpg', '3'),
		array('XXL', array("10kg" => array('975', '750'), "25kg" => array('2430', '1850')), 'KRB-XXL.jpg', '3'),
		array('Galaxy Golden Sella', array("25kg" => array('1075', '1250')), 'Galaxy-golden-sella.jpg', '4'),
		array('Golden Sella Double Chabi', array("25kg" => array('1075', '1250')), '13_2.jpg', '4'),
		array('Premium', array("5kg" => array('430', '500'), "25kg" => array('1075', '1250')), 'DP-Premium.jpg', '5'),
		array('Super', array("5kg" => array('430', '500'), "25kg" => array('1075', '1250')), 'DP-Super.jpg', '5'),
		array('Light', array("5kg" => array('430', '500'), "25kg" => array('1075', '1250')), 'DP-Light.jpg', '5'),
		array('Regular', array("5kg" => array('430', '500'), "25kg" => array('1075', '1250')), 'DP-Regular.jpg', '5'),
		array('Easy', array("5kg" => array('430', '500'), "25kg" => array('1075', '1250')), 'DP-Easy.jpg', '5'),
		array('Daily', array("5kg" => array('430', '500'), "25kg" => array('1075', '1250')), 'DP-DAILY1.jpg', '5'),
		array('Moong Dhuli', '85', '72', 'moong-dhuli.jpg', '6'),
		array('Moong Sabut', '85', '72', 'moong-sabut.jpg', '6'),
		array('Moong Chilka', '85', '72', 'moong-chilka.jpg', '6'),
		array('Urad Dhuli', '110', '100', 'urad-dhuli-dal.jpg', '6'),
		array('Urad Sabut', '110', '100', 'urad-sabut.jpg', '6'),
		array('Udad Chilka', '110', '100', 'urad-chilka.jpg', '6'),
		array('Arhar', '110', '90', 'Arhar-Dal.jpg', '6'),
		array('Kaali Masoor', '80', '67', 'kaali-masoor.jpg', '6'),
		array('Lal Masoor(Malka)', '80', '67', 'masoor-dal.jpg', '6'),
		array('Kala Chana', '120', '100', 'kala-chana.jpg', '6'),
		array('Chane ki Dal', '120', '102', 'chana-dal.jpg', '6'),
		array('White chana', '160', '140', 'white-chana.jpg', '6'),
		array('White Lobia', '95', '85', 'lobia-dal.jpg', '6'),
		array('Safed Matar', '55', '48', 'white-peas.jpg', '6'),
		array('Rajma Chitra', '125', '108', 'Rajma-chitra.jpg', '6'),
		array('Moong Dhuli', '85', '72', 'MD.png', '7'),
		array('Moong Sabut', '85', '72', 'moong-sabut.jpg', '7'),
		array('Moong Chilka', '85', '72', 'moong-chilka.jpg', '7'),
		array('Urad Dhuli', '110', '100', 'urad-dhuli-dal.jpg', '7'),
		array('Urad Sabut', '110', '100', 'urad-sabut.jpg', '7'),
		array('Udad Chilka', '110', '100', 'urad-chilka.jpg', '7'),
		array('Arhar', '110', '90', 'Arhar-Dal.jpg', '7'),
		array('Kaali Masoor', '80', '67', 'kaali-masoor.jpg', '7'),
		array('Lal Masoor(Malka)', '80', '67', 'masoor-dal.jpg', '7'),
		array('Kala Chana', '120', '100', 'kala-chana.jpg', '7'),
		array('Chane ki Dal', '120', '102', 'chana-dal.jpg', '7'),
		array('White chana', '160', '140', 'white-chana.jpg', '7'),
		array('White Lobia', '95', '85', 'lobia-dal.jpg', '7'),
		array('Safed Matar', '55', '48', 'white-peas.jpg', '7'),
		array('Rajma Chitra', '125', '108', 'Rajma-chitra.jpg', '7'),
		); 

	$featured_product = array('3', '2', '4', '1', '7');

	//name, array, image name, brand id(1,2,3,4),1(if in sale)

	if($_POST['contact_form']){

		$to = "sastachawal@gmail.com";
		$subject = $_POST['contact_subject'];
		$txt = $_POST['contact_name'] . '

' . $_POST['contact_message'] . '

' . $_POST['contact_email'];

		$headers = "From: webmaster@example.com";

		mail($to,$subject,$txt,$headers);

		echo "<script>alert('successfully submited')</script>";
	}

	if(isset($_POST['checkout'])){

			$to = "sastachawal@gmail.com";
			$subject = "Enquiry Alert";

			$i = 0;
			$n = '
';

			$txt = '';

			foreach($_SESSION['name'] as $name){

				$txt = $txt . $name . '  ' . $_SESSION['quantity'][$i] . '  ' . $_SESSION['price'][$i] . $n;

				$i++;
			}

			if(!empty($_POST['name'])){
				
				$txt = $txt . $n . $_POST['cname'];				
			}

			if(!empty($_POST['contact'])){
				
				$txt = $txt . $n . $_POST['contact'];				
			}

			if(!empty($_POST['email'])){
				
				$txt = $txt . $n . $_POST['email'];				
			}

			if(!empty($_POST['address'])){
				
				$txt = $txt . $n . $_POST['address'];				
			}

			if(!empty($_POST['area'])){
				
				$txt = $txt . $n . $_POST['area'];				
			}

			$headers = "From: webmaster@example.com";

			mail($to,$subject,$txt,$headers);

			echo "<script>alert('successfully submited')</script>";

			session_unset();

	}

	if(!isset($_SESSION['count'])){
		$_SESSION['count'] = 0;
	}

	if(!isset($_SESSION['name'])){
		$_SESSION['name'] = array();
	}

	if(!isset($_SESSION['price'])){
		$_SESSION['price'] = array();
	}

	if(!isset($_SESSION['quantity'])){
		$_SESSION['quantity'] = array();
	}

	if(isset($_POST['delete'])){

		$id = $_POST['delete'];

		if(!empty($_SESSION['name'][$id])){
			unset($_SESSION['name'][$id]);
			$_SESSION['name'] = array_values($_SESSION['name']);
			
			unset($_SESSION['price'][$id]);
			$_SESSION['price'] = array_values($_SESSION['price']);

			unset($_SESSION['quantity'][$id]);
			$_SESSION['quantity'] = array_values($_SESSION['quantity']);

			$_SESSION['count']--;
		}

	}
	
	if(isset($_POST['name'])){

		if($_POST['quantity'] <= 0){
			echo "<script>alert('Quantity cannot be 0')</script>";
		}else{

			$flag = 0;

			$i = 0;

			foreach ($_SESSION['name'] as $key => $name) {

				if($name == $_POST['name'] . $_POST['kgs']){

					$_SESSION['quantity'][$i]+= $_POST['quantity'];
					$flag = 1;
				}

				$i++;
			}

			if($flag == 0){

				array_push($_SESSION['name'], $_POST['name'] . $_POST['kgs']);
				array_push($_SESSION['quantity'], $_POST['quantity']);
				array_push($_SESSION['price'], $_POST['price']);

				$_SESSION['count']++;
			}
		}

	}
?>

<!doctype html>
<html class="no-js" lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title></title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- favicon -->		
        <link rel="shortcut icon" type="image/x-icon" href="img/icons/favicon.ico">

		<!-- google fonts here -->
		<link href='https://fonts.googleapis.com/css?family=Lato:400,400italic,700,900,300' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Raleway:400,300,500,600,400italic,700' rel='stylesheet' type='text/css'>
		
		<!-- style css -->
		<link rel="stylesheet" href="style.css">
		
		<!-- modernizr css -->
		<script src="js/vendor/modernizr-2.8.3.min.js"></script>
	</head>
	<body>
		<!--[if lt IE 8]>
			<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->

		<!-- Header-area start -->
		<header>
			<div class="header-area">
				<!-- header-top start -->
				<div class="header-top">
					<div class="container">
						<div class="row">
							<div class="col-lg-4 col-md-4 col-sm-4">
								<div class="top-left-item hidden-xs">
									<div class="top-menu">
										<nav>
											
										</nav>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-4">
								<div class="logo">
									<a href="index.php"><img src="img/logo/logo7.png" alt=""></a>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-4">
								<div class="header-right">
									<div class="header-right-link">
										<!-- cart item start -->
										<div class="cart-item" >
											<div class="cart-item-title">
												<a><img src="img/icons/card.png" alt="">
													<span class="total-cart"><?php echo $_SESSION['count'];?></span>
												</a>
												<div class="cart-content">
												<form method="post">
													<?php  

													if($_SESSION['count'] == 0){

														echo "CART EMPTY";
													}else{
														$i = 0;
														$total = 0;
														while($i < $_SESSION['count']){
																?>
																<div class="product-items-cart">
																	<div class="cart-text-2">
																		<button type="submit" class="btn btn-link" style="margin-left: 180px; position: absolute;";" value="<?php echo $i;?>" name="delete"><i class="fa fa-times"></i></button>
																		<p class="product-name"><a href="index.html#"><?php echo $_SESSION['name'][$i];?></a></p>
																		<p><strong><?php echo $_SESSION['quantity'][$i];?></strong> x<span class="price"><?php echo $_SESSION['price'][$i];?></span> </p>
																	</div>
																</div>
													<?php   
															$total+= $_SESSION['quantity'][$i] * $_SESSION['price'][$i];
															$i++;
														
														}
														?>
														<div class="top-subtotal">Subtotal: <span class="price">₹<?php echo $total?></span></div>
														<div class="cart-btn-3">
															<a style="cursor: pointer" class="button check-btn" data-toggle="modal" data-target="#myModal">checkout</a>
														</div>
													<?php
													}
													?>
												</form>
												</div>
											</div>
										</div>
										<!-- cart item end -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- header-top end -->
				<!-- header-bottom start -->
				<div class="header-bottom hidden-xs">
					<div class="container">
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12">
								<!-- main-menu start -->
								<div class="main-menu">
									<nav>
										<ul>
											<li><a href="#">Rice Brands</a>
												<ul>
													<?php foreach ($brands as $key => $value) {
														if(!in_array($key, $dal_brands)){?>

														<li><a href="/brand_products.php?id=<?php echo $key+1;?>"><?php echo $value;?></a></li>

													<?php }}?>
													
												</ul>
												</li>
												<li><a href="#">Dal</a>
												<ul>
													<?php foreach ($brands as $key => $value) {
														if(in_array($key, $dal_brands)){?>

														<li><a href="/brand_products.php?id=<?php echo $key+1;?>"><?php echo $value;?></a></li>

													<?php }}?>
													
												</ul>
												</li>
											<li></li>
											<li></li>
											<li><a href="about-us.php">About us</a></li>
											<li><a href="contact-us.php">Contact us</a></li>
											<li></li>
										</ul>
									</nav>
								</div>
								<!-- main-menu end -->
							</div>
						</div>
					</div>
				</div>
				<!-- header-bottom end -->
			</div>
			<!-- mobile-menu-area start -->
			<div class="mobile-menu-area hidden-lg hidden-md hidden-sm">
				<div class="container">
					<div class="row">
						<div class="col-md-12 hidden-lg hidden-md hidden-sm">
							<div class="mobile-menu">
								<nav id="dropdown">
									<ul>
																					<li><a href="#">Rice Brands</a>
												<ul>
													<?php foreach ($brands as $key => $value) {
														if(!in_array($key, $dal_brands)){?>

														<li><a href="/brand_products.php?id=<?php echo $key+1;?>"><?php echo $value;?></a></li>

													<?php }}?>
													
												</ul>
												</li>
												<li><a href="#">Dal</a>
												<ul>
													<?php foreach ($brands as $key => $value) {
														if(in_array($key, $dal_brands)){?>

														<li><a href="/brand_products.php?id=<?php echo $key+1;?>"><?php echo $value;?></a></li>

													<?php }}?>
													
												</ul>
												</li>
											<li></li>
											<li></li>
											<li><a href="about-us.php">about us</a></li>
											<li><a href="contact-us.php">Contact us</a></li>
											<li></li>								
									</ul>
								</nav>						
							</div>					
						</div>
					</div>
				</div>
			</div>
			<!-- mobile-menu-area end -->
		</header>


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Finalize It</h4>
      </div>
      <div class="modal-body">
        <form method="post" id="checkout_form">
        <?php if($total <300){?>
        <div class="form-group" id="charges">
		    <label style="color: red">Minimum transaction should be of Rs 300</label>
		  </div>
		  <?php }?>
       	<div class="form-group">
	    <label for="exampleInputEmail1">Name</label>
	    <input type="text" class="form-control" name="cname" placeholder="name" required="">
	  </div>
	  <div class="form-group">
	    <label for="exampleInputEmail1">Email address</label>
	    <input type="email" class="form-control" name="email" placeholder="Email" required="">
	  </div>
	  <div class="form-group">
	    <label for="exampleInputPassword1">Contact Number</label>
	    <input type="text" class="form-control" name="contact" placeholder="contact" required="">
	  </div>
	 <div class="form-group">
	    <label for="exampleInputPassword1">Address</label>
	    <textarea class="form-control" name="address" placeholder="Full address"></textarea>
	  </div>
	  <div class="form-group">
    <label for="exampleInputPassword1">Area</label>
	<select class="form-control" name="area" id="area" onchange="change()"> 
		<option>Pitampura</option>
		<option>Shalimar bagh</option>
		<option>Wazirpur</option>
		<option>Ashokvihar</option>
		<option>Rohini</option>
		<option>Other</option>
	</select>
  </div>
  <div class="form-group" id="charges" style="display: none">
    <label style="color: red">CAUTION: Shipping charges Rs.30 will apply</label>
  </div>

      </div>
      <div class="modal-footer">
        	<button type="submit" name="checkout" class="btn btn-primary">Checkout</button>
        </form>
      </div>
    </div>
  </div>
</div>