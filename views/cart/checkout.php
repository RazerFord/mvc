<?php include_once(ROOT . '\views\layouts\header.php'); ?>

<section id="cart_items">
    <div class="container">
        <div class="breadcrumbs">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Check out</li>
            </ol>
        </div>
        <!--/breadcrums-->

        <?php if ($result) : ?>
            <p>Заказ оформлен. Мы Вам перезвоним.</p>
        <?php else : ?>
            <p>Выбрано товаров: <?php echo $totalQuntity; ?>, на сумму: <?php echo $totalPrice; ?></p><br />
            <?php if (!empty($errors) && $errors != false) {
                foreach ($errors as $error) : ?>
                    - <?php echo $error; ?> <br />
            <?php endforeach;
            } ?>
            <div class="shopper-informations">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="shopper-info">
                            <p>Информация о заказе</p>
                            <form action="#" method="post">
                                <input type="text" name="userName" placeholder="Ваше имя" value="<?php echo $userName; ?>">
                                <input type="text" name="userPhone" placeholder="Номер телефона" value="<?php echo $userPhone; ?>">
                                <input type="text" name="userComment" placeholder="Комментарий к заказу"  value="<?php echo $userComment; ?>">
                                <input type="submit" class="btn btn-primary" name="submit" value="Отправить заказ">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <div class="review-payment">
            <h2>Review & Payment</h2>
        </div>

    </div>
</section>
<!--/#cart_items-->

<?php include_once(ROOT . '\views\layouts\footer.php'); ?>