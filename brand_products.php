<?php include 'header.php';

 $id = $_GET['id'];

 	if(empty($id) || $id > count($brands)){
 		echo '<script type="text/javascript">window.location.href="/";</script>';
 	}?>

		<!-- feature-product-area start -->
		<div class="feature-product-area">
			<div class="container">
				<!-- Area-heading start -->
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="feature-headline section-heading text-center">
							<h2><?php echo $brands[$id-1];?></h2>
						</div>
					</div>
				</div>
				<!-- Area-heading end -->
				<div class="row">
					<div class="feature-product">
						<!-- single-product start -->
						<?php 
							$i = 1;

							foreach ($all_products as $fp) {

								if($fp[3] == $id){?>

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
										<h3><a href="/single-product.php?id=<?php echo $fp;?>"><?php echo $fp[0]?></a></h3>
									</div>
									<div class="price-box">
									<?php foreach($fp[1] as $key=>$value){?>
										<span class="old-price">₹<?php echo $value[0]?></span>
										<span class="new-price">₹<?php echo $value[1]?></span>
									<?php break;}?>
									</div>
								</div>
								<div class="product-img">
									<?php  if(isset($fp[4])){?><span class="sale-text">sale</span><?php } ?>
									<a href="/single-product.php?id=<?php echo $fp;?>">
										<img style="height:100%;" class="primary-img" src="img/new-product/<?php echo $fp[2];?>" alt="">
									</a>
								</div>
								<div class="add-to-cart">
									<form method="post">
										<input type="text" name="name" value="<?php echo $fp[0]?>" hidden="">
										<?php foreach($fp[1] as $key=>$value){?>
											<input type="text" class="price" name="price" value="<?php echo $value[1]?>" hidden="">
										<?php break;}?>
										<select class="form-control kgs<?php echo $i;?>" name="kgs" style="width: auto; margin-left: 50px;" onchange="select(<?php echo $i;?>)">
											<?php foreach($fp[1] as $key=>$value){?>
												<option value="<?php echo $key;?>" data-value="<?php echo $value[0] . ',' . $value[1];?>"><?php echo $key;?></option>
											<?php }?>
										</select>
										<input type="number" class="form-control" name="quantity" value="1" style="width:70px; margin-left: 130px; margin-top: -34px;"><br>
										<button type="submit" class="btn btn-link" style="padding: 0; color: #b0b0b0"><a>Add To Cart</a></button>
									</form>
								</div>
							</div>
						</div>
						<?php }
						$i++;
							}?>
					</div>
				</div>
			</div>
		</div>
		<!-- featured-product-area end -->
		
		<?php include 'footer.php'; ?>