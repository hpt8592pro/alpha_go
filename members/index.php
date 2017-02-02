<?php
	/*
	 * Created by PhpStorm.
	 * User: Hardik
	 * Date: 02-02-2017
	 * Time: 13:23
	 */

	require '../lib/conf.php';
	$con = mysqli_connect($conf['db_host'],$conf['db_user'],$conf['db_pass'],$conf['db_name']);
