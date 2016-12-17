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
										<h3><a href="/single-product.php?id=<?php echo $i;?>"><?php echo $fp[0]?></a></h3>
									</div>
									<div class="price-box">
										<span class="old-price">₹<?php echo $fp[1]?></span>
										<span class="new-price">₹<?php echo $fp[2]?></span>
									</div>
								</div>
								<div class="product-img">
									<span class="sale-text">sale</span>
									<a href="/single-product.php?id=<?php echo $i;?>">
										<img class="primary-img" src="img/new-product/22_4.jpg" alt="">
									</a>
								</div>
								<div class="add-to-cart">
									<form method="post">
										<input type="text" name="name" value="<?php echo $fp[0]?>" hidden="">
										<input type="text" name="price" value="<?php echo $fp[2]?>" hidden="">
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
		
		<!--news-product-area start -->
		<div class="new-product-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
						<!-- new product description start -->
						<div class="New-product-des">
							<div class="new-pro-name">
								<h3>sale products</h3>
							</div>
							<div class="new-product-carousel">
								<!-- single carousel item start -->
								<div class="new-product">
									<!-- single product start -->
									<div class="single-new-product">
										<div class="product-img">
											<a>
												<img class="first-img" src="img/new-product/1_3.jpg" alt="">
												<img class="second-img" src="img/new-product/2_2.jpg" alt="">
											</a>
										</div>
										<div class="product-details">
											<div class="product-name">
												<h3><a>Donec non est</a></h3>
											</div>
											<div class="ratings no-rating">
												<ul>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
											<div class="price-box">
												<span class="old-price">$170.00</span>
												<span class="new-price">$155.00</span>
											</div>
										</div>
									</div>
									<!-- single product end -->
									<div class="single-new-product">
										<div class="product-img">
											<a>
												<img class="first-img" src="img/new-product/3_1.jpg" alt="">
												<img class="second-img" src="img/new-product/5_2.jpg" alt="">
											</a>
										</div>
										<div class="product-details">
											<div class="product-name">
												<h3><a>Donec non est</a></h3>
											</div>
											<div class="ratings no-rating">
												<ul>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
											<div class="price-box">
												<span class="old-price">$170.00</span>
												<span class="new-price">$155.00</span>
											</div>
										</div>
									</div>
									<!-- single product end -->
									<div class="single-new-product">
										<div class="product-img">
											<a>
												<img class="first-img" src="img/new-product/6_2.jpg" alt="">
												<img class="second-img" src="img/new-product/7_10.jpg" alt="">
											</a>
										</div>
										<div class="product-details">
											<div class="product-name">
												<h3><a>Donec non est</a></h3>
											</div>
											<div class="ratings no-rating">
												<ul>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
											<div class="price-box">
												<span class="old-price">$170.00</span>
												<span class="new-price">$155.00</span>
											</div>
										</div>
									</div>
									<!-- single product end -->
								</div>
								<!-- single carousel item end -->
								<div class="new-product">
									<!-- single product start -->
									<div class="single-new-product">
										<div class="product-img">
											<a>
												<img class="first-img" src="img/new-product/9.jpg" alt="">
												<img class="second-img" src="img/new-product/3_6.jpg" alt="">
											</a>
										</div>
										<div class="product-details">
											<div class="product-name">
												<h3><a>Donec non est</a></h3>
											</div>
											<div class="ratings no-rating">
												<ul>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
											<div class="price-box">
												<span class="old-price">$170.00</span>
												<span class="new-price">$155.00</span>
											</div>
										</div>
									</div>
									<!-- single product end -->
									<div class="single-new-product">
										<div class="product-img">
											<a>
												<img class="first-img" src="img/new-product/12_1.jpg" alt="">
												<img class="second-img" src="img/new-product/11_4.jpg" alt="">
											</a>
										</div>
										<div class="product-details">
											<div class="product-name">
												<h3><a>Donec non est</a></h3>
											</div>
											<div class="ratings no-rating">
												<ul>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
											<div class="price-box">
												<span class="old-price">$170.00</span>
												<span class="new-price">$155.00</span>
											</div>
										</div>
									</div>
									<!-- single product end -->
									<div class="single-new-product">
										<div class="product-img">
											<a>
												<img class="first-img" src="img/new-product/8.jpg" alt="">
												<img class="second-img" src="img/new-product/10.jpg" alt="">
											</a>
										</div>
										<div class="product-details">
											<div class="product-name">
												<h3><a>Donec non est</a></h3>
											</div>
											<div class="ratings no-rating">
												<ul>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
											<div class="price-box">
												<span class="old-price">$170.00</span>
												<span class="new-price">$155.00</span>
											</div>
										</div>
									</div>
									<!-- single product end -->
								</div>
								<!-- single carousel item end -->
								<!-- single carousel item end -->
								<div class="new-product">
									<!-- single product start -->
									<div class="single-new-product">
										<div class="product-img">
											<a>
												<img class="first-img" src="img/new-product/20_1.jpg" alt="">
												<img class="second-img" src="img/new-product/20_2.jpg" alt="">
											</a>
										</div>
										<div class="product-details">
											<div class="product-name">
												<h3><a>Donec non est</a></h3>
											</div>
											<div class="ratings no-rating">
												<ul>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
											<div class="price-box">
												<span class="old-price">$170.00</span>
												<span class="new-price">$155.00</span>
											</div>
										</div>
									</div>
									<!-- single product end -->
									<div class="single-new-product">
										<div class="product-img">
											<a>
												<img class="first-img" src="img/new-product/20_6.jpg" alt="">
												<img class="second-img" src="img/new-product/20_4.jpg" alt="">
											</a>
										</div>
										<div class="product-details">
											<div class="product-name">
												<h3><a>Donec non est</a></h3>
											</div>
											<div class="ratings no-rating">
												<ul>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
											<div class="price-box">
												<span class="old-price">$170.00</span>
												<span class="new-price">$155.00</span>
											</div>
										</div>
									</div>
									<!-- single product end -->
									<div class="single-new-product">
										<div class="product-img">
											<a>
												<img class="first-img" src="img/new-product/8.jpg" alt="">
												<img class="second-img" src="img/new-product/12_4.jpg" alt="">
											</a>
										</div>
										<div class="product-details">
											<div class="product-name">
												<h3><a>Donec non est</a></h3>
											</div>
											<div class="ratings no-rating">
												<ul>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
											<div class="price-box">
												<span class="old-price">$170.00</span>
												<span class="new-price">$155.00</span>
											</div>
										</div>
									</div>
									<!-- single product end -->
								</div>
								<!-- single carousel item end -->
							</div>
						</div>
						<!-- new product description end-->
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
						<!-- new product description start -->
						<div class="New-product-des">
							<div class="new-pro-name">
								<h3>new products</h3>
							</div>
							<div class="new-product-carousel">
								<!-- single carousel item start -->
								<div class="new-product">
									<!-- single product start -->
									<div class="single-new-product">
										<div class="product-img">
											<a>
												<img class="first-img" src="img/new-product/1_3.jpg" alt="">
												<img class="second-img" src="img/new-product/2_2.jpg" alt="">
											</a>
										</div>
										<div class="product-details">
											<div class="product-name">
												<h3><a>Donec non est</a></h3>
											</div>
											<div class="ratings no-rating">
												<ul>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
											<div class="price-box">
												<span class="old-price">$170.00</span>
												<span class="new-price">$155.00</span>
											</div>
										</div>
									</div>
									<!-- single product end -->
									<div class="single-new-product">
										<div class="product-img">
											<a>
												<img class="first-img" src="img/new-product/3_1.jpg" alt="">
												<img class="second-img" src="img/new-product/5_2.jpg" alt="">
											</a>
										</div>
										<div class="product-details">
											<div class="product-name">
												<h3><a>Donec non est</a></h3>
											</div>
											<div class="ratings no-rating">
												<ul>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
											<div class="price-box">
												<span class="old-price">$170.00</span>
												<span class="new-price">$155.00</span>
											</div>
										</div>
									</div>
									<!-- single product end -->
									<div class="single-new-product">
										<div class="product-img">
											<a>
												<img class="first-img" src="img/new-product/11_4.jpg" alt="">
												<img class="second-img" src="img/new-product/9_16.jpg" alt="">
											</a>
										</div>
										<div class="product-details">
											<div class="product-name">
												<h3><a>Donec non est</a></h3>
											</div>
											<div class="ratings no-rating">
												<ul>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
											<div class="price-box">
												<span class="old-price">$170.00</span>
												<span class="new-price">$155.00</span>
											</div>
										</div>
									</div>
									<!-- single product end -->
								</div>
								<!-- single carousel item end -->
								<div class="new-product">
									<!-- single product start -->
									<div class="single-new-product">
										<div class="product-img">
											<a>
												<img class="first-img" src="img/new-product/3_1_9.jpg" alt="">
												<img class="second-img" src="img/new-product/14_1.jpg" alt="">
											</a>
										</div>
										<div class="product-details">
											<div class="product-name">
												<h3><a>Donec non est</a></h3>
											</div>
											<div class="ratings no-rating">
												<ul>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
											<div class="price-box">
												<span class="old-price">$170.00</span>
												<span class="new-price">$155.00</span>
											</div>
										</div>
									</div>
									<!-- single product end -->
									<div class="single-new-product">
										<div class="product-img">
											<a>
												<img class="first-img" src="img/new-product/9.jpg" alt="">
												<img class="second-img" src="img/new-product/10.jpg" alt="">
											</a>
										</div>
										<div class="product-details">
											<div class="product-name">
												<h3><a>Donec non est</a></h3>
											</div>
											<div class="ratings no-rating">
												<ul>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
											<div class="price-box">
												<span class="old-price">$170.00</span>
												<span class="new-price">$155.00</span>
											</div>
										</div>
									</div>
									<!-- single product end -->
									<div class="single-new-product">
										<div class="product-img">
											<a>
												<img class="first-img" src="img/new-product/8.jpg" alt="">
												<img class="second-img" src="img/new-product/8_17.jpg" alt="">
											</a>
										</div>
										<div class="product-details">
											<div class="product-name">
												<h3><a>Donec non est</a></h3>
											</div>
											<div class="ratings no-rating">
												<ul>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
											<div class="price-box">
												<span class="old-price">$170.00</span>
												<span class="new-price">$155.00</span>
											</div>
										</div>
									</div>
									<!-- single product end -->
								</div>
								<!-- single carousel item end -->
								<!-- single carousel item end -->
								<div class="new-product">
									<!-- single product start -->
									<div class="single-new-product">
										<div class="product-img">
											<a>
												<img class="first-img" src="img/new-product/11_4.jpg" alt="">
												<img class="second-img" src="img/new-product/12_19.jpg" alt="">
											</a>
										</div>
										<div class="product-details">
											<div class="product-name">
												<h3><a>Donec non est</a></h3>
											</div>
											<div class="ratings no-rating">
												<ul>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
											<div class="price-box">
												<span class="old-price">$170.00</span>
												<span class="new-price">$155.00</span>
											</div>
										</div>
									</div>
									<!-- single product end -->
									<div class="single-new-product">
										<div class="product-img">
											<a>
												<img class="first-img" src="img/new-product/16_1.jpg" alt="">
												<img class="second-img" src="img/new-product/11_4.jpg" alt="">
											</a>
										</div>
										<div class="product-details">
											<div class="product-name">
												<h3><a>Donec non est</a></h3>
											</div>
											<div class="ratings no-rating">
												<ul>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
											<div class="price-box">
												<span class="old-price">$170.00</span>
												<span class="new-price">$155.00</span>
											</div>
										</div>
									</div>
									<!-- single product end -->
									<div class="single-new-product">
										<div class="product-img">
											<a>
												<img class="first-img" src="img/new-product/11_13.jpg" alt="">
												<img class="second-img" src="img/new-product/10_9.jpg" alt="">
											</a>
										</div>
										<div class="product-details">
											<div class="product-name">
												<h3><a>Donec non est</a></h3>
											</div>
											<div class="ratings no-rating">
												<ul>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
											<div class="price-box">
												<span class="old-price">$170.00</span>
												<span class="new-price">$155.00</span>
											</div>
										</div>
									</div>
									<!-- single product end -->
								</div>
								<!-- single carousel item end -->
							</div>
						</div>
						<!-- new product description end-->
					</div>
					<div class="col-lg-4 col-md-4 hidden-sm col-xs-12">
						<!-- new product description start -->
						<div class="New-product-des">
							<div class="new-pro-name">
								<h3>most popular</h3>
							</div>
							<div class="new-product-carousel">
								<!-- single carousel item start -->
								<div class="new-product">
									<!-- single product start -->
									<div class="single-new-product">
										<div class="product-img">
											<a>
												<img class="first-img" src="img/new-product/3_1_9.jpg" alt="">
												<img class="second-img" src="img/new-product/11_13.jpg" alt="">
											</a>
										</div>
										<div class="product-details">
											<div class="product-name">
												<h3><a>Donec non est</a></h3>
											</div>
											<div class="ratings no-rating">
												<ul>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
											<div class="price-box">
												<span class="old-price">$170.00</span>
												<span class="new-price">$155.00</span>
											</div>
										</div>
									</div>
									<!-- single product end -->
									<div class="single-new-product">
										<div class="product-img">
											<a>
												<img class="first-img" src="img/new-product/13_2.jpg" alt="">
												<img class="second-img" src="img/new-product/10_10.jpg" alt="">
											</a>
										</div>
										<div class="product-details">
											<div class="product-name">
												<h3><a>Donec non est</a></h3>
											</div>
											<div class="ratings no-rating">
												<ul>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
											<div class="price-box">
												<span class="old-price">$170.00</span>
												<span class="new-price">$155.00</span>
											</div>
										</div>
									</div>
									<!-- single product end -->
									<div class="single-new-product">
										<div class="product-img">
											<a>
												<img class="first-img" src="img/new-product/12_19.jpg" alt="">
												<img class="second-img" src="img/new-product/3_1_7.jpg" alt="">
											</a>
										</div>
										<div class="product-details">
											<div class="product-name">
												<h3><a>Donec non est</a></h3>
											</div>
											<div class="ratings no-rating">
												<ul>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
											<div class="price-box">
												<span class="old-price">$170.00</span>
												<span class="new-price">$155.00</span>
											</div>
										</div>
									</div>
									<!-- single product end -->
								</div>
								<!-- single carousel item end -->
								<div class="new-product">
									<!-- single product start -->
									<div class="single-new-product">
										<div class="product-img">
											<a>
												<img class="first-img" src="img/new-product/21_2.jpg" alt="">
												<img class="second-img" src="img/new-product/3_6.jpg" alt="">
											</a>
										</div>
										<div class="product-details">
											<div class="product-name">
												<h3><a>Donec non est</a></h3>
											</div>
											<div class="ratings no-rating">
												<ul>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
											<div class="price-box">
												<span class="old-price">$170.00</span>
												<span class="new-price">$155.00</span>
											</div>
										</div>
									</div>
									<!-- single product end -->
									<div class="single-new-product">
										<div class="product-img">
											<a>
												<img class="first-img" src="img/new-product/21_1.jpg" alt="">
												<img class="second-img" src="img/new-product/9_16.jpg" alt="">
											</a>
										</div>
										<div class="product-details">
											<div class="product-name">
												<h3><a>Donec non est</a></h3>
											</div>
											<div class="ratings no-rating">
												<ul>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
											<div class="price-box">
												<span class="old-price">$170.00</span>
												<span class="new-price">$155.00</span>
											</div>
										</div>
									</div>
									<!-- single product end -->
									<div class="single-new-product">
										<div class="product-img">
											<a>
												<img class="first-img" src="img/new-product/20_7.jpg" alt="">
												<img class="second-img" src="img/new-product/10_10.jpg" alt="">
											</a>
										</div>
										<div class="product-details">
											<div class="product-name">
												<h3><a>Donec non est</a></h3>
											</div>
											<div class="ratings no-rating">
												<ul>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
											<div class="price-box">
												<span class="old-price">$170.00</span>
												<span class="new-price">$155.00</span>
											</div>
										</div>
									</div>
									<!-- single product end -->
								</div>
								<!-- single carousel item end -->
								<!-- single carousel item end -->
								<div class="new-product">
									<!-- single product start -->
									<div class="single-new-product">
										<div class="product-img">
											<a>
												<img class="first-img" src="img/new-product/21_1.jpg" alt="">
												<img class="second-img" src="img/new-product/20_1.jpg" alt="">
											</a>
										</div>
										<div class="product-details">
											<div class="product-name">
												<h3><a>Donec non est</a></h3>
											</div>
											<div class="ratings no-rating">
												<ul>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
											<div class="price-box">
												<span class="old-price">$170.00</span>
												<span class="new-price">$155.00</span>
											</div>
										</div>
									</div>
									<!-- single product end -->
									<div class="single-new-product">
										<div class="product-img">
											<a>
												<img class="first-img" src="img/new-product/10_9.jpg" alt="">
												<img class="second-img" src="img/new-product/13_4.jpg" alt="">
											</a>
										</div>
										<div class="product-details">
											<div class="product-name">
												<h3><a>Donec non est</a></h3>
											</div>
											<div class="ratings no-rating">
												<ul>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
											<div class="price-box">
												<span class="old-price">$170.00</span>
												<span class="new-price">$155.00</span>
											</div>
										</div>
									</div>
									<!-- single product end -->
									<div class="single-new-product">
										<div class="product-img">
											<a>
												<img class="first-img" src="img/new-product/21.jpg" alt="">
												<img class="second-img" src="img/new-product/6_18.jpg" alt="">
											</a>
										</div>
										<div class="product-details">
											<div class="product-name">
												<h3><a>Donec non est</a></h3>
											</div>
											<div class="ratings no-rating">
												<ul>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
											<div class="price-box">
												<span class="old-price">$170.00</span>
												<span class="new-price">$155.00</span>
											</div>
										</div>
									</div>
									<!-- single-product end -->
								</div>
								<!-- single-carousel-item end -->
							</div>
						</div>
						<!-- new-product-description end-->
					</div>
				</div>
			</div>
		</div>
		<!--news-product-area end -->
		
		<?php include 'footer.php'; ?>