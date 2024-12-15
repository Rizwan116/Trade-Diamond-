<?php
if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
// the message
$msg = $_POST['msg'];

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
mail($_POST['email'],$_POST['topic'],$msg);
echo 1;
}
?>