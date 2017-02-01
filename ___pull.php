<?php
$o = shell_exec("git pull");
echo "<pre>";
var_dump($o);
echo "</pre>";
