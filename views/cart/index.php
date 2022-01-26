<?php include_once(ROOT . '\views\layouts\header.php'); ?>

<section id="cart_items">
    <div class="container">
        <div class="breadcrumbs">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Shopping Cart</li>
            </ol>
        </div>
        <?php if ($productsInCart) : ?>
            <div class="table-responsive cart_info">
                <table class="table table-condensed">
                    <thead>
                        <tr class="cart_menu">
                            <td class="image">Код товара</td>
                            <td class="description"></td>
                            <td class="price">Цена</td>
                            <td class="quantity">Количество</td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($products as $product) : ?>
                            <tr>
                                <td class="cart_product">
                                    <a href=""><img src="<?php echo $product['image']; ?>" alt=""></a>
                                </td>
                                <td class="cart_description">
                                    <h4><a href=""><?php echo $product['name']; ?></a></h4>
                                    <p>Web ID: <?php echo $product['code']; ?></p>
                                </td>
                                <td class="cart_price">
                                    <p>$<?php echo $product['price']; ?></p>
                                </td>
                                <td class="cart_quantity">
                                    <p><?php echo $productsInCart[$product['id']] ?></p>
                                </td>
                                <td class="cart_delete">
                                    <a class="cart_quantity_delete" href="cart/delete/<?php echo $product['id']; ?>"><i class="fa fa-times"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <p>Итого: $<?php echo $totalPrice; ?></p>
            <a href="/cart/checkout/"><input type="button" class="btn btn-primary" value="Оформить заказ"></a>
        <?php endif; ?>
    </div>
</section>
<!--/#cart_items-->

<?php include_once(ROOT . '\views\layouts\footer.php'); ?>