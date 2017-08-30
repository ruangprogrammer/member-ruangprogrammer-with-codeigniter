<?php
//echo password_hash("admin", PASSWORD_DEFAULT); exit();
require_once('../config.php');
$var_username = $_POST['frm_username'];
$var_password = $_POST['frm_password'];
$sql_check="select * from admin where 
			admin_username='".$var_username."'"; 
$result = mysql_query($sql_check);
$getUser = mysql_num_rows($result);
//print_r($getUser); die();
$getDataUser = mysql_fetch_array($result);
if ($getUser === 1) 
{
	
	if (password_verify($var_password,$getDataUser['admin_password'])) 
	{
		session_start();
		$_SESSION['admin_username']=$getDataUser['admin_username'];
		$_SESSION['admin_password']=$getDataUser['admin_password'];
		header('location: index.php?hal=dashboard');
	}
	else
	{
		header('location: login.php?action=failed');
	}	
	
}
else
{
	header('location: login.php?action=failed');
}
