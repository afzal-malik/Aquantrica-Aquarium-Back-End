<?php
  //gen_pwd.php
  $pwd = "user";
  echo "<h1>before encryption :.. <br />";
  echo $pwd;

  echo "<hr />";
  //lets encrypt
  echo crypt($pwd,"KEY5456");



 ?>
