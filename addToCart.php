<?php
include('db/db.php');

$idProduct = $_GET['pid'];
$prevloc=$_SERVER['HTTP_REFERER'];
session_start();

if(isset($_SESSION['login'])){

  $query1 = "INSERT INTO `carrinho` (`ClienteId`, `ProdutoId`, `Quantidade`) VALUES ('".$_SESSION['login']['ClienteId']."', '".$idProduct."', '1') ON DUPLICATE KEY UPDATE Quantidade = Quantidade+1;";
  var_dump($mysqli->query($query1));
  header('Location:'.$prevloc);
}

else{
  $message2='Faça Login ou Registe-se para fazer compras';
  header('Location:'.$prevloc.'&message2='.$message2);
}
?>
