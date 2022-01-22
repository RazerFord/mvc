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
                                        <a href="/category/<?php echo $category['id']; ?>" 
                                        class="<?php if ($categoryId == $category['id']) echo 'btn active'; ?>">
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
                <div class="features_items">
                    <!--features_items-->
                    <h2 class="title text-center">Features Items</h2>
                    <?php foreach ($categoryItem as $product) : ?>
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="<?php echo $product['image']; ?>" alt="" />
                                        <h2>$<?php echo $product['price']; ?></h2>
                                        <p> <?php echo $product['name']; ?> </p>
                                        <a href="#1" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>
                                    <div class="product-overlay">
                                        <div class="overlay-content">
                                            <h2>$<?php echo $product['price']; ?></h2>
                                            <p>
                                                <a href="/product/<?php echo $product['id']; ?>">
                                                    <?php echo $product['name']; ?>
                                                </a>
                                            </p>
                                            <a href="#2" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                        <?php if ($product['is_new']) : ?>
                                            <img src="/template/images/home/new.png" class="new" alt="">
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="choose">
                                    <ul class="nav nav-pills nav-justified">
                                        <li><a href="#3"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                                        <li><a href="#4"><i class="fa fa-plus-square"></i>Add to compare</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <!--features_items-->
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