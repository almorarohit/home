<?php 

	session_start();

	$brands = array('India Gate','Pansari','KRB','Sella','Delhi Pasand','Loose Dal','Packed Dal');

	$dal_brands = array('5', '6');
	//tell which brands are of dal from $brands (remember array starts from 0)

	$all_products = array(
		array('Feast Rozzana', '395', '270', 'IG-FZ.png', '1'),
		array('Mini Dubar', '22', '123', 'IG-MD.jpg', '1'),
		array('Mini Mogra', '50', '44', 'IG-MM.jpg', '1'),
		array('Mini Mogra II', '70', '50', 'IG-MM2.jpg', '1'),
		array('Mogra', '1211', '123', 'IG-M.png', '1'),
		array('Tibar', '110', '90', 'IG-T.png', '1'),
		array('Dubar', '110', '90', 'IG-D.png', '1'),
		array('Mahak', '110', '90', 'P-Mahak.jpg', '2'),
		array('Tasty', '110', '90', 'P-Tasty.jpg', '2'),
		array('Khana Khazana', '110', '90', 'P-Khana-Khazana.jpg', '2'),
		array('Royal', '110', '90', 'P-Royal.jpg', '2'),
		array('Daily', '110', '90', '3_6.jpg', '2'),
		array('1', '110', '90', 'KRB-1.jpg', '3'),
		array('2', '110', '90', 'KRB-2.jpg', '3'),
		array('3', '110', '90', 'KRB-3.jpg', '3'),
		array('4', '110', '90', 'KRB-4.jpg', '3'),
		array('5', '110', '90', 'KRB-5.jpg', '3'),
		array('6', '110', '90', 'KRB-6.jpg', '3'),
		array('7', '110', '90', 'KRB-7.jpg', '3'),
		array('8', '110', '90', 'KRB-8.jpg', '3'),
		array('XXL', '110', '90', 'KRB-XXL.jpg', '3'),
		array('Galaxy Golden Sella', '110', '90', 'Galaxy-golden-sella.jpg', '4'),
		array('Golden Sella Double Chabi', '110', '90', '13_2.jpg', '4'),
		array('Premium', '110', '90', 'DP-Premium.jpg', '5'),
		array('Super', '110', '90', 'DP-Super.jpg', '5'),
		array('Light', '110', '90', 'DP-Light.jpg', '5'),
		array('Regular', '110', '90', 'DP-Regular.jpg', '5'),
		array('Easy', '110', '90', 'DP-Easy.jpg', '5'),
		array('Daily', '110', '90', 'DP-DAILY1.jpg', '5'),
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

	//name, old, new, image name, brand id(1,2,3,4)

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

			foreach ($_SESSION['name'] as $name) {

				if($name == $_POST['name']){

					$_SESSION['quantity'][$i]+= $_POST['quantity'];
					$flag = 1;
				}

				$i++;
			}

			if($flag == 0){

				array_push($_SESSION['name'], $_POST['name']);
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
										<div class="cart-item">
											<div class="cart-item-title">
												<a><img src="img/icons/card.png" alt="">
													<span class="total-cart"><?php echo $_SESSION['count'];?></span>
												</a>
												<div class="cart-content">
												<form method="post">
													<?php  

													if($_SESSION['count'] == 0){

														echo "no items";
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
        <form method="post">
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
		<option></option>
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
<script>
	function change(){
		var val = document.getElementById('area').value;
		if(val == 'Other'){
			document.getElementById('charges').style.display = 'block';
		}else{
			document.getElementById('charges').style.display = 'none';
		}
	}
</script>