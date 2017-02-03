<?php
	/*
	 * Created by PhpStorm.
	 * User: Hardik
	 * Date: 01-02-2017
	 * Time: 21:12
	 * Patch #1
	 */

	session_start();
	if(!isset($_SESSION['user']) || $_SESSION['user']=="")
	{
		unset($_SESSION['user']);
		//header("Location:http://go.alphanuke.com/login.php?from=member&sign=kick");
	}
	else
	{
		$user=$_SESSION['user'];
	}
	date_default_timezone_set('Asia/Kolkata');

	$info['project']="AlphaNuke GO";
	$info['version']="1.0";
	$info['author']="Hardik";


	$conf['db_name']="alphaczb_go";
	$conf['db_user']="alphaczb_go";
	$conf['db_pass']="pass@hardy8592";
	$conf['db_host']="localhost";

	$con = mysqli_connect($conf['db_host'],$conf['db_user'],$conf['db_pass'],$conf['db_name']);