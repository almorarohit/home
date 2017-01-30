<?php 

	session_start();

	$brands = array('India Gate','Pansari','KRB','Sella','Delhi Pasand','Loose Dal');

	$dal_brands = array('5', '6');
	//tell which brands are of dal from $brands (remember array starts from 0)

	$all_products = array(
		array('Feast Rozzana','its very nice.',array("1kg" => array('80', '65'),"5kg" => array('395', '295'),"10kg" => array('790', '570'),"25kg" => array('1975', '1405')) , 'IG-FZ.png', '1','28% OFF', 4),
		array('Mini Dubar','its also very nice.', array("5kg" => array('335', '255'), "10kg" => array('670', '495'), "25kg" => array('1675', '1225')), 'IG-MD.jpg', '1', '33% OFF',4),
		array('Mini Mogra','its very very nice.', array("10kg" => array('520', '390'), "25kg" => array('1300', '955')), 'IG-MM.jpg', '1', '35% OFF',4),
		array('Mini Mogra II', 'its very very nice.',array("10kg" => array('400', '315'), "25kg" => array('1000', '775')), 'IG-MM2.jpg', '1', '34% OFF',3),
		array('Mogra','its very very nice.', array("5kg" => array('320', '245'), "10kg" => array('640', '475'),"25kg" => array('1600', '1175')), 'IG-M.png', '1', '33% OFF',3),
		array('Tibar','its very very nice.', array("1kg" => array('100', '77'), "5kg" => array('500', '365'), "10kg" => array('1000', '715'), "25kg" => array('2500', '1750')), 'IG-T.png', '1', '30% OFF',4),
		array('Dubar','its very very nice.', array("5kg" => array('455', '350'), "10kg" => array('910', '680'), "25kg" => array('2270', '1665')), 'IG-D.png', '1', '30% OFF',3),
		array('Mahak','its very very nice.', array("10kg" => array('600', '400'), "25kg" => array('1500', '965')), 'P-Mehak.png', '2', '41% OFF',4),
		array('Tasty','its very very nice.', array("10kg" => array('780', '500'), "25kg" => array('1980', '1215')), 'P-Tasty.jpg', '2', '42% OFF',4),
		array('Khana Khazana','its very very nice.', array("10kg" => array('1200', '600'), "25kg" => array('3000', '1475')), 'P-Khana-Khazana.jpg', '2', '54% OFF',3),
		array('Royal','its very very nice.', array("NA" => array('500', '430'), "NA" => array('1250', '1075')), 'P-Royal.jpg', '2', '14% OFF',4),
		array('Daily','its very very nice.', array("10kg" => array('680', '440'), "25kg" => array('1700', '1065')), 'p-daily.png', '2', '43% OFF',3),
		array('1','its very very nice.', array("10kg" => array('830', '700'), "25kg" => array('2050', '1735')), 'KRB-1.jpg', '3', '22% OFF',4),
		array('2','its very very nice.', array("10kg" => array('750', '580'), "25kg" => array('1875', '1435')), 'KRB-2.jpg', '3', '29% OFF',4),
		array('3','its very very nice.', array("10kg" => array('660', '540'), "25kg" => array('1625', '1335')), 'KRB-3.jpg', '3', '26% OFF',4),
		array('4','its very very nice.', array("10kg" => array('620', '500'), "25kg" => array('1525', '1235')), 'KRB-4.jpg', '3', '27% OFF',3),
		array('5','its very very nice.', array("10kg" => array('580', '480'), "25kg" => array('1450', '1185')), 'KRB-5.jpg', '3', '26% OFF',4),
		array('6','its very very nice.', array("10kg" => array('530', '430'), "25kg" => array('1300', '1070')), 'KRB-6.jpg', '3', '28% OFF',4),
		array('7','its very very nice.', array("10kg" => array('480', '395'), "25kg" => array('1175', '975')), 'KRB-7.jpg', '3', '28% OFF',3),
		array('8','its very very nice.', array("10kg" => array('380', '340'), "25kg" => array('925', '835')), 'KRB-8.jpg', '3', '24% OFF',3),
		array('XXL','its very very nice.', array("10kg" => array('975', '800'), "25kg" => array('2430', '1975')), 'KRB-XXL.jpg', '3', '23% OFF',4),
/*		array('Galaxy Golden Sella','its very very nice.', array("25kg" => array('1075', '1250')), 'Galaxy-golden-sella.jpg', '4'),*/
		array('Golden Sella Double Chabi','its very very nice.', array("25kg" => array('2000', '1675')), 'Double Chabi.png', '4', '23% OFF',4),
		array('Premium','its very very nice.', array("5kg" => array('900', '340'), "10kg" => array('1800', '765')), 'DP-Premium.jpg', '5', '60% OFF',4),
		array('Super','its very very nice.', array("5kg" => array('800', '360'), "10kg" => array('1600', '705')), 'DP-Super.jpg', '5', '59% OFF',4),
		array('Light','its very very nice.', array("5kg" => array('560', '270'), "10kg" => array('1120', '525')), 'DP-Light.jpg', '5', '57% OFF',3),
		array('Regular','its very very nice.', array("5kg" => array('750', '345'), "10kg" => array('1500', '675')), 'DP-Regular.jpg', '5', '58% OFF',4),
		array('Easy','its very very nice.', array("5kg" => array('480', '230'), "10kg" => array('960', '440')), 'DP-Easy.jpg', '5', '70% OFF',4),
		array('Daily','its very very nice.', array("5kg" => array('650', '310'), "10kg" => array('1300', '680')), 'DP-Daily.jpg', '5', '57% OFF',3),
		array('Selected','its very very nice.', array("5kg" => array('650', '30'), "10kg" => array('1300', '680')), 'DP-SELECTED.png', '5', '57% OFF',4),
		
		// DAL start here	
		array('Moong Dhuli','its very very nice dal.', array("0.5kg" => array('45', '38'), "1kg" => array('85', '75')), 'moong-dhuli.jpg', '6', '12% OFF',4),

		array('Moong Sabut','its very very nice dal.', array("0.5kg" => array('45', '38'), "1kg" => array('85', '75')), 'moong-sabut.jpg', '6', '12% OFF',3),

		array('Moong Chilka', 'its very very nice dal.', array("0.5kg" => array('45', '38'), "1kg" => array('85', '75')), 'moong-chilka.jpg', '6', '12% OFF',4),

		array('Urad Dhuli', 'its very very nice dal.', array("0.5kg" => array('55', '50'), "1kg" => array('110', '100')), 'urad-dhuli-dal.jpg', '6', '9% OFF',3),

		array('Urad Sabut', 'its very very nice dal.', array("0.5kg" => array('55', '50'), "1kg" => array('110', '100')), 'urad-sabut.jpg', '6', '9% OFF',4),

		array('Urad Chilka', 'its very very nice dal.', array("0.5kg" => array('55', '50'), "1kg" => array('110', '100')), 'urad-chilka.jpg', '6', '9% OFF',4),

		array('Arhar', 'its very very nice dal.', array("0.5kg" => array('55', '45'), "1kg" => array('120', '88')), 'Arhar-Dal.jpg', '6', '25% OFF',4),

		array('Kaali Masoor', 'its very very nice dal.', array("0.5kg" => array('40', '36'), "1kg" => array('80', '71')), 'kaali-masoor.jpg', '6', '11% OFF',3),

		array('Lal Masoor(Malka)', 'its very very nice dal.', array("0.5kg" => array('40', '36'), "1kg" => array('80', '71')), 'masoor-dal.jpg', '6', '16% OFF',3),

		array('Kala Chana', 'its very very nice dal.', array("0.5kg" => array('60', '44'), "1kg" => array('120', '88')), 'kala-chana.jpg', '6', '17% OFF',4),

		array('Chane ki Dal', 'its very very nice dal.', array("0.5kg" => array('60', '50'), "1kg" => array('120', '100')), 'chana-dal.jpg', '6', '15% OFF',4),

		array('White chana','its very very nice dal.', array("0.5kg" => array('80', '70'), "1kg" => array('160', '130')), 'white-chana.jpg', '6', '13% OFF',4),

		array('White Lobia', 'its very very nice dal.', array("0.5kg" => array('48', '43'), "1kg" => array('95', '85')), 'lobia-dal.jpg', '6', '11% OFF',4),

		array('Safed Matar', 'its very very nice dal.', array("0.5kg" => array('28', '24'), "1kg" => array('55', '48')), 'white-peas.jpg', '6', '13% OFF',4),

		array('Rajma Chitra', 'its very very nice dal.', array("0.5kg" => array('63', '54'), "1kg" => array('125', '107')), 'Rajma-chitra.jpg', '6', '14% OFF',3),

		/*array('Moong Dhuli', '85', '72', 'MD.png', '7'),
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
		array('Rajma Chitra', '125', '108', 'Rajma-chitra.jpg', '7'),*/
		); 

	$featured_product = array('0', '2', '4', '1', '7');

	//name, description, array, image name, brand id(1,2,3,4),description like sale(if in sale), no. of stars

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
											<li><a href="index.php">Home</a></li>
											<li><a href="#">Rice Brands &#8711;<!-- &#9660; --></a>
												<ul>
													<?php foreach ($brands as $key => $value) {
														if(!in_array($key, $dal_brands)){?>

														<li><a href="/brand_products.php?id=<?php echo $key+1;?>"><?php echo $value;?></a></li>

													<?php }}?>
													
												</ul>
												</li>
												<li><a href="#">Pulses &#8711;</a>
												<ul>
													<?php foreach ($brands as $key => $value) {
														if(in_array($key, $dal_brands)){?>

														<li><a href="/brand_products.php?id=<?php echo $key+1;?>"><?php echo $value;?></a></li>

													<?php }}?>
													
												</ul>
												</li>
<!-- 											<li></li>
											<li></li> -->
											<li><a href="about-us.php">About us</a></li>
											<li><a href="contact-us.php">Contact us</a></li>
<!-- 											<li></li> -->
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
										<li><a href="index.php">Home</a></li>
											<li><a href="#">Rice Brands &#8711;<!-- &#9660; --></a>
												<ul>
													<?php foreach ($brands as $key => $value) {
														if(!in_array($key, $dal_brands)){?>

														<li><a href="/brand_products.php?id=<?php echo $key+1;?>"><?php echo $value;?></a></li>

													<?php }}?>
													
												</ul>
												</li>
												<li><a href="#">Pulses &#8711;</a>
												<ul>
													<?php foreach ($brands as $key => $value) {
														if(in_array($key, $dal_brands)){?>

														<li><a href="/brand_products.php?id=<?php echo $key+1;?>"><?php echo $value;?></a></li>

													<?php }}?>
													
												</ul>
												</li>
											<li><a href="about-us.php">About us</a></li>
											<li><a href="contact-us.php">Contact us</a></li>				
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
	    <textarea class="form-control" name="address" placeholder="Full address" required=""></textarea>
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