<?php
include('db/db.php');
$prevloc=$_SERVER['HTTP_REFERER'];
if(isset($_POST['email']))
{
  $email = $_POST['email'];
  $pwd = $_POST['password'];
  $hashpwd = md5($pwd);
  $query = $mysqli->query("SELECT `ClienteId`, `name`,`admin` FROM `users` WHERE `email`='".$email."' AND `password_digest`='".$hashpwd."';");

  if($query->num_rows === 0)
  {
    $message2='Erro no login, verifique os seus dados';
    header('Location:'.$prevloc.'&message2='.$message2);
  }
  else
  {
    $result = mysqli_fetch_assoc($query);
    session_start();
    $_SESSION['login']=$result;
      $message2='';
    header('Location:'.$prevloc);
  }
}
else
header("location: index.php");
?>
