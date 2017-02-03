<?php
	/*
	 * Created by PhpStorm.
	 * User: Hardik
	 * Date: 03-02-2017
	 * Time: 03:11
	 */
	session_start();

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
		echo $sql;die;
		$exec = mysqli_query($con, $sql);
		$hash = base64_encode($hash);
		header("Location: add.php?from=ex&agent=$hash");
	}