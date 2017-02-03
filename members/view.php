<?php
	session_start();
	require '../parts/header.php';
	$id = $_GET['agent'];
	/*$sql = "SELECT * FROM `links` WHERE `hash`='".$id."'";
	$query = mysqli_query($con,$sql);
	$data = mysqli_fetch_row($query);*/
?>

	<!-- *****************************************************************************************************************
	 TITLE & CONTENT
	 ***************************************************************************************************************** -->
	<br><br><br><br><br>
	<div class="container mt">
		<div class="form-group">
			<label for="inputlg">GO Link</label>
			<input class="form-control input-lg selected" id="inputlg" name="go_link" type="text" value="http://go.alphanuke.com/to/<?=$id?>" selected>
		</div>
	</div><!--container -->
	<br><br><br><br><br><br>
<?php
	require '../parts/footer.php';
?>