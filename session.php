<?php 
ob_start();
session_start();
if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
$_SESSION['valid'] = true;
$_SESSION['username'] = $_POST['key'];
echo 1;
}
?>

				 