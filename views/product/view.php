<?php include_once(ROOT . '\views\layouts\header.php'); ?>

<section>
	<div class="container">
		<div class="row">
			<div class="col-sm-3">
				<div class="left-sidebar">
					<h2>Category</h2>
					<div class="panel-group category-products" id="accordian">
						<!--category-productsr-->
						<?php foreach ($categories as $category) : ?>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a href="/category/<?php echo $category['id']; ?>" class="<?php if ($categoryId == $category['id']) echo 'btn active'; ?>">
											<?php echo $category['name']; ?>
										</a>
									</h4>
								</div>
							</div>
						<?php endforeach; ?>
					</div>
					<!--/category-products-->
				</div>
			</div>

			<div class="col-sm-9 padding-right">
				<div class="product-details">
					<!--product-details-->
					<div class="col-sm-5">
						<div class="view-product">
							<img src="/template/images/product-details/1.jpg" alt="" />
							<h3>ZOOM</h3>
						</div>
						<div id="similar-product" class="carousel slide" data-ride="carousel">

							<!-- Wrapper for slides -->
							<div class="carousel-inner">
								<div class="item active">
									<a href=""><img src="/template/images/product-details/similar1.jpg" alt=""></a>
									<a href=""><img src="/template/images/product-details/similar2.jpg" alt=""></a>
									<a href=""><img src="/template/images/product-details/similar3.jpg" alt=""></a>
								</div>
								<div class="item">
									<a href=""><img src="/template/images/product-details/similar1.jpg" alt=""></a>
									<a href=""><img src="/template/images/product-details/similar2.jpg" alt=""></a>
									<a href=""><img src="/template/images/product-details/similar3.jpg" alt=""></a>
								</div>
								<div class="item">
									<a href=""><img src="/template/images/product-details/similar1.jpg" alt=""></a>
									<a href=""><img src="/template/images/product-details/similar2.jpg" alt=""></a>
									<a href=""><img src="/template/images/product-details/similar3.jpg" alt=""></a>
								</div>

							</div>

							<!-- Controls -->
							<a class="left item-control" href="#similar-product" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							</a>
							<a class="right item-control" href="#similar-product" data-slide="next">
								<i class="fa fa-angle-right"></i>
							</a>
						</div>

					</div>
					<div class="col-sm-7">
						<div class="product-information">
							<!--/product-information-->
							<img src="/template/images/product-details/new.jpg" class="newarrival" alt="" />
							<h2><?php echo $product['name']; ?></h2>
							<p>ID: <?php echo $product['code']; ?></p>
							<img src="/template/images/product-details/rating.png" alt="" />
							<span>
								<span>US $<?php echo $product['price']; ?></span>
								<label>Quantity:</label>
								<input type="text" value="3" />
								<button type="button" class="btn btn-fefault cart">
									<i class="fa fa-shopping-cart"></i>
									Add to cart
								</button>
							</span>
							<p><b>Availability:</b> In Stock</p>
							<p><b>Condition:</b> New</p>
							<p><b>Brand:</b> E-SHOPPER</p>
							<a href=""><img src="/template/images/product-details/share.png" class="share img-responsive" alt="" /></a>
						</div>
						<!--/product-information-->
					</div>
				</div>
				<!--/product-details-->

				<div class="category-tab shop-details-tab">
					<!--category-tab-->
					<div class="col-sm-12">
							Details
					</div>
					

						<div class="tab-pane fade active in" id="reviews">
							<div class="col-sm-12">
								<p><?php echo $product['description']; ?></p>
							</div>
						</div>

					</div>
				</div>
				<!--/category-tab-->
			</div>
		</div>
	</div>
</section>

<footer id="footer">
	<div class="footer-bottom">
		<div class="container">
			<div class="row">
				<p class="pull-left">Copyright © 2013 E-SHOPPER Inc. All rights reserved.</p>
				<p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">Themeum</a></span></p>
			</div>
		</div>
	</div>

</footer>
<!--/Footer-->