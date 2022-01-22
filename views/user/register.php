<?php include_once(ROOT . '\views\layouts\header.php'); ?>

<section id="form">
	<!--form-->
	<div class="container">
		<div class="row">
			<div class="col-sm-4">
			</div>
			<div class="col-sm-4">
				<?php if (!empty($result)) : ?>
					<p>Вы зарегистрированы!</p>
				<?php else : ?>

					<?php if (isset($errors) && is_array($errors)) : ?>
						<ul><?php
							foreach ($errors as $error) : ?>
								<li> - <?php echo $error; ?></li>
							<?php endforeach; ?>
						</ul>
					<?php endif; ?>

					<div class="signup-form">
						<!--sign up form-->
						<h2>Новый пользователь</h2>
						<form action="#" method="post">
							<input type="text" name="name" placeholder="Имя" value="<?php echo $name ?>" />
							<input type="email" name="email" placeholder="e-mail" value="<?php echo $email ?>" />
							<input type="password" name="password" placeholder="password" value="<?php echo $password ?>" />
							<button type="submit" name="submit" class="btn btn-default">Зарегистрироваться</button>
						</form>
					</div>
					<!--/sign up form-->
				<?php endif; ?>
			</div>
			<div class="col-sm-4">
			</div>
		</div>
	</div>
</section>
<!--/form-->

<?php include_once(ROOT . '\views\layouts\footer.php'); ?>