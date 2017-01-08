	<?php include 'header.php';

	$id = $_GET['id']; 

	if(empty($id) || !isset($all_products[$id][0])){
		echo '<script type="text/javascript">window.location.href="/";</script>';
	}
?>


<div class="single-page-area shop-product-area">
			<!-- Single Product details Area -->
			<div class="single-product-detaisl-area">
				<!-- Single Product View Area -->
				<div class="single-product-view-area">
					<div class="container">
						<div class="row">
							<div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
								<!-- Single Product View -->
								<div class="single-procuct-view">
									<!-- Simple Lence Gallery Container -->
									<div class="simpleLens-gallery-container" id="p-view">
										<div class="simpleLens-container tab-content">
											<div class="tab-pane active" id="p-view-1">
												<div class="simpleLens-big-image-container">
													
														<img src="img/product/<?php echo $all_products[$id][3];?>" class="simpleLens-big-image" alt="productd">

												</div>
											</div>
										</div>
									</div><!-- End Simple Lence Gallery Container -->
								</div><!-- End Single Product View -->
							</div>
							<div class="col-lg-7 col-md-7 col-sm-6 col-xs-12 single-product-details">
								<div class="product-details shop-review ">
									<div class="product-name">
										<h3><a href="single-product.html#"><?php echo $all_products[$id][0];?></a></h3>
									</div>
									<div class="ratings no-rating sin-rating">
										<ul>
											<li><i class="fa fa-star-o"></i></li>
											<li><i class="fa fa-star-o"></i></li>
											<li><i class="fa fa-star-o"></i></li>
											<li><i class="fa fa-star-o"></i></li>
											<li><i class="fa fa-star-o"></i></li>
										</ul>
										<p class="rating-links">
											<a href="single-product.html#">1 Review(s)</a>
											<span class="separator">|</span>
											<a href="single-product.html#" class="add-to-review">Add Your Review</a>
										</p>
									</div>
									<div class="price-box">
										<span class="old-price">₹<?php echo $all_products[$id][1];?></span>
										<span class="new-price">₹<?php echo $all_products[$id][2];?></span>
									</div>
									<p class="availability in-stock">Availability: <span>In stock</span></p>
									<div class="product-reveiw">
										<p>India Gate Basmati Rice is a product from the house of world's largest rice millers KRBL Ltd. KRBL has a history of 120 years of rice production and have combined modern day crop practice with traditional farmer's experience in basmati rice crop.</p>
									</div>
									<div class="add-to-cart cart-sin-product">
										<div class="quick-add-to-cart">
											<form method="post" class="cart">
												<div class="qty-button"> 	
													<input type="text" name="name" value="<?php echo $featured_product[$id][0]?>" hidden="">
													<input type="text" name="price" value="<?php echo $featured_product[$id][2]?>" hidden="">
										
													<input type="text" class="input-text qty" title="Qty" value="1" id="qty" name="quantity">
												
													<div class="box-icon button-plus"> 
														<input type="button" class="qty-increase " onclick="var qty_el = document.getElementById('qty'); var qty = qty_el.value; if( !isNaN( qty )) qty_el.value++;return false;" value="+">
													</div>	
													<div class="box-icon button-minus">
														<input type="button" class="qty-decrease" onclick="var qty_el = document.getElementById('qty'); var qty = qty_el.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 0 ) qty_el.value--;return false;" value="-">
													</div>
												</div>
												<div class="add-to-cart">
													<button type="submit">Add to cart</button>
												 </div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- End Single Product View Area -->
			</div>
			<!-- End Single details Area -->	
			<!-- Single Description Tab -->
			<div class="single-product-description">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="product-description-tab custom-tab">
								<!-- tab bar -->
								<ul class="nav nav-tabs" role="tablist">
									<li class="active"><a href="single-product.html#product-des" data-toggle="tab">Suggestions</a></li>
								</ul>
								<!-- Tab Content -->
								<div class="tab-content">
									<div class="tab-pane active" id="product-des">
										<p> </p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Single Description Tab -->

			<!-- single-page-feature end -->
		</div>
		<!-- Single Product Area end -->

		<?php include 'footer.php';?>