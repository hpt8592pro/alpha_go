<?php
	/*
	 * Created by PhpStorm.
	 * User: Hardik
	 * Date: 01-02-2017
	 * Time: 21:12
	 * Patch #1
	 */

	date_default_timezone_set('Asia/Kolkata');

	$info['project']="AlphaNuke GO";
	$info['version']="1.0";
	$info['author']="Hardik";


	$conf['db_name']="alphaczb_go";
	$conf['db_user']="alphaczb_go";
	$conf['db_pass']="pass@hardy8592";
	$conf['db_host']="localhost";

	$con = mysqli_connect($conf['db_host'],$conf['db_user'],$conf['db_pass'],$conf['db_name']);