<?php include_once(ROOT . '\views\layouts\header.php'); ?>

<section id="form">
    <!--form-->
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
            </div>
            <div class="col-sm-4 col-sm-offset-1">
                <?php if ($result) : ?>
                    <p>Данные отредактированы</p>
                <?php else : ?>
                    <?php if (isset($errors) && is_array($errors)) : ?>
                        <ul>
                            <?php foreach ($errors as $error) : ?>
                                <li> - <?php echo $error; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                    <div class="signup-form">
                        <h2>Редактирование данных</h2>
                        <form action="#" method="post">
                            <p>Имя:</p>
                            <input type="text" name="name" placeholder="e-mail" value="<?php echo $name ?>" />
                            <p>Пароль:</p>
                            <input type="password" name="password" placeholder="password" value="<?php echo $password ?>" />
                            <button type="submit" name="submit" class="btn btn-default">Сохранить</button>
                        </form>
                    </div>
                <?php endif; ?>
            </div>
            <div class="col-sm-4">
            </div>
        </div>
    </div>
</section>
<!--/form-->

<?php include_once(ROOT . '\views\layouts\footer.php'); ?>