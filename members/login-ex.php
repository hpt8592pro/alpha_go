<?php
	/*
	 * Created by PhpStorm.
	 * User: Hardik
	 * Date: 04-02-2017
	 * Time: 02:46
	 */
	require '../lib/conf.php';
	$go_user = $_POST['go_user'];
	$go_pass = $_POST['go_pass'];

	$sql = "SELECT `password` FROM `users` WHERE `user`='".$go_user."' OR `email`='".$go_user."'";
	$query = mysqli_query($con,$sql);
	$data = mysqli_fetch_array($query);

	if($data[0]==$go_pass)
	{
		session_start();
		$_SESSION['user']=$go_user;
		header("Location: add.php");
	}
	else
	{
		session_destroy();
		header("Location: login.php?login=error");
	}