<?php

if(!isset($_SESSION))
  session_start();
  unset($_SESSION['username']);

  unset($_SESSION['udahlogin']);
 header("location:masuk.php?code=3");
?>