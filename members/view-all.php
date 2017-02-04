<?php
	session_start();
	require '../parts/header.php';
	require '../lib/conf.php';
	$sql = "SELECT * FROM `links` WHERE `user`='".$user[0]."' ORDER BY `id` DESC";
	//echo $sql;die;
	$query = mysqli_query($con,$sql);
	$rows = mysqli_num_rows($query);
?>

	<!-- *****************************************************************************************************************
	 TITLE & CONTENT
	 ***************************************************************************************************************** -->
	<br><br><br>
	<div class="container mt">
		<table id="links" class="table table-striped table-bordered" cellspacing="0" width="100%">
			<thead>
			<tr>
				<th>#</th>
				<th>Title</th>
				<th>Link</th>
				<th>Password</th>
				<th>Hits</th>
				<th>Date</th>
				<th>GO Link</th>
			</tr>
			</thead>
			<tfoot>
			<tr>
				<th>#</th>
				<th>Title</th>
				<th>Link</th>
				<th>Password</th>
				<th>Hits</th>
				<th>Date</th>
				<th>GO Link</th>
			</tr>
			</tfoot>
			<tbody>
		<?php
			for($i=1;$i<=$rows;$i++)
			{
				//loop
				$row = mysqli_fetch_assoc($query);
		?>
				<tr>
					<td><?=$i?></td>
					<td><?=$row['title']?></td>
					<td><?=$row['link']?></td>
					<td><?=$row['password']?></td>
					<td><?=$row['hits']?></td>
					<td><?=substr($row['time'],0,10)?></td>
					<td><a href="view.php?agent=<?=$row['hash']?>"><button class="btn btn-success">GO Link</button></a></td>
				</tr>
		<?php

			}
		?>
			</tbody>
		</table>
	</div><! --/container -->
	<br><br><br><br>
	<script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.12.4.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap.min.js"></script>
	<script>
        $(document).ready(function() {
            $('#links').DataTable();
        } );
	</script>
<?php
	require '../parts/footer.php';
?>