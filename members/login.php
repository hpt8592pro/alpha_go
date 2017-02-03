<?php
	/*
	 * Created by PhpStorm.
	 * User: Hardik
	 * Date: 04-02-2017
	 * Time: 02:30
	 */
	session_start();
	session_destroy();
	require '../parts/header.php';
?>

	<!-- *****************************************************************************************************************
	 TITLE & CONTENT
	 ***************************************************************************************************************** -->
	<br><br><br><br><br>
	<div class="container mt">
		<form action="login-ex.php" method="post">
			<div class="form-group">
				<label for="inputlg">UserID or Email ID</label>
				<input class="form-control" id="inputdefault" name="go_user" type="text" placeholder="UserID or Email ID">
			</div>
			<div class="form-group">
				<label for="inputlg">Password</label>
				<input class="form-control" id="inputdefault" name="go_pass" type="password" placeholder="Password" required>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-success" name="go_go" value="go">Login</button>
			</div>

		</form>
	</div><!--/container -->
	<br><br><br><br><br>
<?php
	require '../parts/footer.php';
?>