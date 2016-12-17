<?php 

	session_start();

	$brands = array('a','b','c');

	$all_products = array(
		array('hey', '13', '123123', '', '1'),
		array('eded', '22', '123', '', '1'),
		array('newpr', '50', '44', '', '3'),
		array('newpr1', '70', '50', '', '2'),
		array('eccec', '1211', '123', '', '2')
		);

	$featured_product = array('1', '2', '4');

	//name, old, new, image name, brand id(1,2,3,4)

	if($_POST['contact_form']){

		$to = "almorarohitsharma@gmail.com";
		$subject = $_POST['contact_subject'];
		$txt = $_POST['contact_name'] . '

' . $_POST['contact_message'] . '

' . $_POST['contact_email'];

		$headers = "From: webmaster@example.com";

		mail($to,$subject,$txt,$headers);

		echo "<script>alert('successfully submited')</script>";
	}

	if(isset($_POST['checkout'])){

			$to = "almorarohitsharma@gmail.com";
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
									<a href="index.php"><img src="img/logo/logo.png" alt=""></a>
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
											<li><a href="">Rice Brands</a>
												<ul>
													<?php $i = 1; foreach ($brands as $b) {?>
														
														<li><a href="/brand_products.php?id=<?php echo $i;?>"><?php echo $b;?></a></li>

													<?php $i++;}?>
													
												</ul>
												</li>
											<li></li>
											<li></li>
											<li></li>
											<li><a href="about-us.php">About Us</a></li>
											<li><a href="contact-us.php">Contact us</a></li>
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
										<li><a href="https://devitems.com/tf/expert-preview/expert/contact.html">Contact Us</a></li>									
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

      </div>
      <div class="modal-footer">

        	<button type="submit" name="checkout" class="btn btn-primary">Checkout</button>
        </form>
      </div>
    </div>
  </div>
</div>