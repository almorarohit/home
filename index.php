<?php include 'header.php';?>

<!-- slider-area start -->
		<div class="slider-area">
			<!-- slider start -->
			<div class="slider">
				<div id="topSlider" class="nivoSlider nevo-slider">
					<img style="height:100%;" src="img/slider/124.jpg" alt="main slider" title="#htmlcaption1"/>
					<img style="height:100%;" src="img/slider/dal&pulses.jpg" alt="main slider" title="#htmlcaption2"/>
					<img style="height:100%;" src="img/slider/indiagate.jpg" alt="main slider" title="#htmlcaption2"/>
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
							<p></p>
						</div>
					</div>
				</div>
				<!-- Area-heading end -->
				<div class="row">
					<div class="feature-product product-carousel derection-key">
						<!-- single-product start -->
						<?php 

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
										<h3><a href="/single-product.php?id=<?php echo $fp;?>"><?php echo $all_products[$fp][0]?></a></h3>
									</div>
									<div class="price-box">
									<?php foreach($all_products[$fp][2] as $key=>$value){?>
										<span class="old-price">₹<?php echo $value[0]?></span>
										<span class="new-price">₹<?php echo $value[1]?></span>
									<?php break;}?>
									</div>
								</div>
								<div class="product-img">
									<?php  if(isset($all_products[$fp][5])){?><span class="sale-text">sale</span><?php } ?>
									<a href="/single-product.php?id=<?php echo $fp;?>">
										<img class="primary-img" src="img/new-product/<?php echo $all_products[$fp][3];?>" alt="">
									</a>
								</div>
								<div class="add-to-cart">
									<form method="post">
										<input type="text" name="name" value="<?php echo $all_products[$fp][0]?>" hidden="">
										<?php foreach($all_products[$fp][2] as $key=>$value){?>
											<input type="text" class="price" name="price" value="<?php echo $value[1]?>" hidden="">
										<?php break;}?>
										<select class="form-control kgs<?php echo $fp;?>" name="kgs" style="width: auto; margin-left: 50px;" onchange="select(<?php echo $fp;?>)">
											<?php foreach($all_products[$fp][2] as $key=>$value){?>
												<option value="<?php echo $key;?>" data-value="<?php echo $value[0] . ',' . $value[1];?>"><?php echo $key;?></option>
											<?php }?>
										</select>
										<input type="number" class="form-control" name="quantity" value="1" style="width:70px; margin-left: 130px; margin-top: -34px;"><br>
										<button type="submit" class="btn btn-link" style="padding: 0; color: #b0b0b0"><a>Add To Cart</a></button>
									</form>
								</div>
							</div>
						</div>

						<?php
							}?>
					</div>
				</div>
			</div>

<!-- 		<div style="height:400px;width:200px;border:solid 1px red;margin-left:100px;float:left;position:relative;bottom:10px;">
			
		</div>
	
		<div style="height:400px;width:200px;border:solid 1px red;margin-left:100px;float:left;position:relative;bottom:10px;">
			
		</div>

		</div> -->
		
		<!-- featured-product-area end -->

		<?php include 'footer.php'; ?>