<?php include 'header.php';?>

<!-- slider-area start -->
		<div class="slider-area">
			<!-- slider start -->
			<div class="slider">
				<div id="topSlider" class="nivoSlider nevo-slider">
					<img src="img/slider/slide1-home1.jpg" alt="main slider" title="#htmlcaption1"/>
					<img src="img/slider/slide2-home1.jpg" alt="main slider" title="#htmlcaption2"/>
				</div>
				<div id="htmlcaption1" class="nivo-html-caption slider-caption">
					<div class="slider-progress"></div>
				</div>
				<div id="htmlcaption2" class="nivo-html-caption slider-caption">
					<div class="slider-progress"></div>
				</div>
			</div>
			<!-- slider end -->
		</div>
		<!-- slider-area end -->

		<!-- feature-product-area start -->
		<div class="feature-product-area">
			<div class="container">
				<!-- Area-heading start -->
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="feature-headline section-heading text-center">
							<h2>featured product</h2>
							<p>Mirum est notare quam littera gothica, quam nunc putamus parum claram</p>
						</div>
					</div>
				</div>
				<!-- Area-heading end -->
				<div class="row">
					<div class="feature-product product-carousel derection-key">
						<!-- single-product start -->
						<?php 
							$i = 1;

							foreach ($featured_product as $fp) {?>

						<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
							<div class="single-product">
								<div class="product-details">
									<div class="ratings no-rating">
										<ul>
											<li><i class="fa fa-star-o"></i></li>
											<li><i class="fa fa-star-o"></i></li>
											<li><i class="fa fa-star-o"></i></li>
											<li><i class="fa fa-star-o"></i></li>
											<li><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
									<div class="product-name">
										<h3><a href="/single-product.php?id=<?php echo $i;?>"><?php echo $all_products[$fp][0]?></a></h3>
									</div>
									<div class="price-box">
										<span class="old-price">₹<?php echo $all_products[$fp][1]?></span>
										<span class="new-price">₹<?php echo $all_products[$fp][2]?></span>
									</div>
								</div>
								<div class="product-img">
									<span class="sale-text">sale</span>
									<a href="/single-product.php?id=<?php echo $i;?>">
										<img class="primary-img" src="img/product/<?php echo $all_products[$fp][3];?>" alt="">
									</a>
								</div>
								<div class="add-to-cart">
									<form method="post">
										<input type="text" name="name" value="<?php echo $all_products[$fp][0]?>" hidden="">
										<input type="text" name="price" value="<?php echo $all_products[$fp][2]?>" hidden="">
										<input type="number" class="form-control" name="quantity" value="1" style="width:70px; margin-left: 80px;"><br>
										<button type="submit" class="btn btn-link" style="padding: 0; color: #b0b0b0"><a>Add To Cart</a></button>
									</form>
								</div>
							</div>
						</div>

						<?php $i++;
							}?>
					</div>
				</div>
			</div>
		</div>
		<!-- featured-product-area end -->
		
		<?php include 'footer.php'; ?>