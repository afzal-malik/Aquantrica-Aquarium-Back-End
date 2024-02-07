<?php
  //restricting the user
  require("validate_user_inc.php");

  require("db_connection.php");
  include("code_bank.inc.php");

  //get the Product ID (pid) the build an SQL command
  $service_id = $_REQUEST['service_id'];
  $db_picture_name = getPictureName($service_id);

  $sql =  "insert into service_archive select * from service "; //space must
  $sql .= " where service_id=$service_id";

  //execute the SQL command
  $x = $mysqli->query($sql);

  if($x > 0){
    //making the backup of the record was successful
    //then lets delete the record permanently from the table product
    $sql_del = "delete from service where service_id=$service_id";

    //execute the SQL command
    $y = $mysqli->query($sql_del);

    if($y > 0){
      //lets delete the file from harddrive
      if($db_picture_name!="default.jpg"){
        unlink("pictures/large/$db_picture_name");
        unlink("pictures/thumbs/$db_picture_name");
      }

      //hooray everything went well lets re direct the user to
      //delete_product_4.php with the status pass

      header("location:delete_service_4.php?status=pass");
    }
    else{
      //delete failed so lets send the user to delete_product_4.php
      //with the status failed
      header("location:delete_service_4.php?status=fail");
    }//end of if - $y part
  }
  else{
    //we should re direct the user to delete_product_4.php
    //with the fail status
    header("location:delete_service_4.php?status=fail");
  }





 ?>
