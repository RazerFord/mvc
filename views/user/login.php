<?php include_once(ROOT . '\views\layouts\header.php'); ?>

<section id="form">
	<!--form-->
	<div class="container">
		<div class="row">
			<div class="col-sm-4">
			</div>
			<div class="col-sm-4 col-sm-offset-1">
				<div class="login-form">
					<?php if (isset($errors) && is_array($errors)) : ?>
						<ul><?php
							foreach ($errors as $error) : ?>
								<li> - <?php echo $error; ?></li>
							<?php endforeach; ?>
						</ul>
					<?php endif; ?>
					<!--login form-->
					<h2>Login to your account</h2>
					<form action="#" method="post">
						<input type="email" name="email" placeholder="e-mail" value="<?php echo $email ?>" />
						<input type="password" name="password" placeholder="password" value="<?php echo $password ?>" />
						<button type="submit" name="submit" class="btn btn-default">Войти</button>
					</form>
				</div>
				<!--/login form-->
			</div>
			<div class="col-sm-4">
			</div>
		</div>
	</div>
</section>
<!--/form-->

<?php include_once(ROOT . '\views\layouts\footer.php'); ?>