<?php
include('db/db.php');
$prevloc=$_SERVER['HTTP_REFERER'];
session_start();

$pid=$_GET['pid'];
$cid=$_SESSION['login']['ClienteId'];

$query2 = "DELETE FROM `carrinho` WHERE `carrinho`.`ClienteId` =".$cid." AND `carrinho`.`ProdutoId` =".$pid.";";

if(!$mysqli->query($query2))
printf("Error: %s\n", $mysqli->error);

$mysqli->query($query2);
header('Location:'.$prevloc);
 ?>
