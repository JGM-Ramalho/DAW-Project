<?php
include('db/db.php');

if (isset($_POST['name']))
{
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $passwordR = $_POST['passwordR'];

  if ($password!=$passwordR)
  {
    $message =" As passwords não correspondem";
    header("location: index.php?loc=register&message=".$message."&name=".$name."&email=".$email);
  }

  else
  {
    $date = date('Y-m-d');
    $hashpass = md5($password);
    $query = "INSERT INTO users (name, email, password_digest) VALUES ('".$name."', '".$email."', '".$hashpass."');";
    if($mysqli->query($query))
    {
      $message =" Conta criada com sucesso! Faça Login";
      header("location:index.php?&message2=".$message);
    }else
    {
      $err = $mysqli->error;
      if(substr($err, 0, 9)=='Duplicate')
      {
        $message = "Email Duplicado!";
        header("location: index.php?loc=register&message=".$message."&name=".$name."&email=".$email);
      }
      else
      header("location: index.php?loc=register&message=".$err."&name=".$name."&email=".$email);
    }
  }
}

else
header("location: index.php");


?>
