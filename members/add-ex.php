<?php
	/*
	 * Created by PhpStorm.
	 * User: Hardik
	 * Date: 03-02-2017
	 * Time: 03:11
	 */
	require '../lib/conf.php';
	if(isset($_POST['go_link']) && $_POST['go_link']!="")
	{
		$link = $_POST['go_link'];
		$title = $_POST['go_title'];
		$pass = $_POST['go_pass'];
		$user = $_SESSION['user'];
		$time = date("Y-m-d h:i:s");
		$hash = date("ymdhis");
		$sql = "INSERT INTO `links` ('hash', 'title`, `link`, `user`, `password`, `time`) VALUES ('".$hash."', '".$title."', '".$link."', '".$user."', '".$pass."', '".$time."')";
		$exec = mysqli_query($con, $sql);
		header("Location: view.php?from=ex&agent=$hash");
	}
	else
	{
		header("Location: add.php?from=ex&post=false");
	}