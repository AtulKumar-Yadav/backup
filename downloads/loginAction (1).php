<?php

$uid = $_REQUEST['userid'];
$pass = $_REQUEST['password'];

$connect = mysqli_connect("localhost", "root", "", "cse_department");
$sql = "SELECT `wmode` FROM `tbllogin` WHERE `userid`='$uid' AND BINARY `pass`='$pass' ";

$x = mysqli_query($connect, $sql);

//echo $x;
?>