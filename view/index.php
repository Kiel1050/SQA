<?php
	var_dump($_SESSION);
	// if ($_SESSION['loginState'] == 'failed') {
	//alert('login failed');}
?>
<div class="container-fluid" style="padding : 100px 33%">
	<div class="card-wrapper">
		<div class="card fat">
			<div class="card-body">
				<h4 class="card-title">Đăng nhập</h4>
				<form method="POST" class="my-login-validation" action="controller/login.php">
					<div class="form-group">
						<label>Username</label>
						<input type="text" name="username" class="form-control">
					</div>

					<div class="form-group">
						<label>Password</label>
						<input type="password" name="password" class="form-control">
					</div>

					<div class="form-group m-0">
						<button type="submit" class="btn btn-primary btn-block">
							Đăng nhập
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>