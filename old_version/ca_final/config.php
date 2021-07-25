<?php
$dsn = 'mysql:dbname=epiz_29141923_users;host=sql204.epizy.com';
$user = 'epiz_29141923';
$password = 'KT3lG3ZTJZD7zJ3';

try
{
	$pdo = new PDO($dsn,$user,$password);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
	echo "PDO error".$e->getMessage();
	die();
}
?>