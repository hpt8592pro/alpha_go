<?php
	session_start();
	if(!isset($_SESSION['user']) || $_SESSION['user']=="")
	{
		//header("Location: login.php");
	}
	require '../parts/header.php';
?>

	<!-- *****************************************************************************************************************
	 TITLE & CONTENT
	 ***************************************************************************************************************** -->
<br><br><br>
	<div class="container mt">
		<form action="add-ex.php">
			<div class="form-group">
				<label for="inputlg">Title</label>
				<input class="form-control" id="inputdefault" name="go_title" type="text" placeholder="Title of Link">
			</div>
			<div class="form-group">
				<label for="inputlg">Link</label>
				<input class="form-control input-lg" id="inputlg" name="go_link" type="text" placeholder="Direct Link" required>
			</div>
			<div class="form-group">
				<label for="inputlg">Password of File</label>
				<input class="form-control" id="inputdefault" name="go_pass" type="text" placeholder="Password">
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-success btn-lg" name="go_go" value="go">Submit</button>
			</div>

		</form>
	</div><! --/container -->
	<br><br><br><br><br><br>
	<script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.12.4.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap.min.js"></script>
	<script>
        $(document).ready(function() {
            $('#example').DataTable();
        } );
	</script>
<?php
	require '../parts/footer.php';
?>