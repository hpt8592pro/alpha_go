<?php
	/**
	 * Created by PhpStorm.
	 * User: Hardik
	 * Date: 04-02-2017
	 * Time: 02:25
	 */
	session_start();
	session_destroy();
	header("Location: login.php?logout=true");
?>