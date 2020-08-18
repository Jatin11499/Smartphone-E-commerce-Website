<div class="modal fade" id="login_modal">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<h3 class="modal-title">LOGIN</h3>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body">
				<form method="post" action="login_submit.php">
					<div class="form-group">Don't have an account? <a href="signup.php" class="text-primary">Register</a></div>
					<div class="form-group"><input type="email" name="email" placeholder="Email" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" id="email"></div>
					<div class="form-group"><input type="password" name="pass" placeholder="Password" class="form-control" pattern=".{8,}" id="pass"></div>
					<button class="btn btn-primary" type="submit">Login</button>
					<br><br>
					<a href="forgot.php" class="text-primary">Forgot Password?</a>
				</form>
			</div>
		</div>
	</div>
</div>