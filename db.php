<?php

$db['db_host']='localhost';
$db['db_user']='root';
$db['db_psw']='';
$db['db_name']='celeste';
foreach($db as $key=>$value){
	define(strtoupper($key),$value);
}
$connection=mysqli_connect(DB_HOST,DB_USER,DB_PSW,DB_NAME);

?>