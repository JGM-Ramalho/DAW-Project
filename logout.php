<?php
  session_start();
  session_destroy();
  $prevloc=$_SERVER['HTTP_REFERER'];
  header('Location:'.$prevloc);
?>
