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
			<div id="selectable" onclick="selectText('selectable')">http://example.com/page.htm</div>
		</div>
	</div><!--container -->
	<br><br><br><br><br><br>
	<script type="text/javascript">
        function selectText(containerid) {
            if (document.selection) {
                var range = document.body.createTextRange();
                range.moveToElementText(document.getElementById(containerid));
                range.select();
            } else if (window.getSelection) {
                var range = document.createRange();
                range.selectNode(document.getElementById(containerid));
                window.getSelection().addRange(range);
            }
        }
	</script>
<?php
	require '../parts/footer.php';
?>