<?php
  //restricting the user
  require("validate_user_inc.php");

 //connect to the database
 require("db_connection.php");

 include("code_bank.inc.php");
 //lets view the form contents
 /*echo "<pre>";
 print_r($_REQUEST);
 echo "</pre>";*/

 //lets store the form field values in variables
$pid         = $_REQUEST['pid'];
$title       = addslashes($_REQUEST['title']);
$description = addslashes($_REQUEST['description']);
$price       = addslashes($_REQUEST['price']);
$stock_bal   = addslashes($_REQUEST['stock_bal']);

//lets build an SQL cammand dynamically
$sql  = "update product set ";
$sql .= "title='$title',";
$sql .= "description='$description',";
$sql .= "price=$price,";
$sql .= "stock_bal=$stock_bal ";//make sure the space is there
$sql .= " where pid=$pid";

//lets execute the sql command
$x = $mysqli->query($sql);

if($x > 0){
  //all is well lets start file uploading..
  if(($_FILES['picture']['error']==0) && ($_FILES['picture']['type']=="image/jpeg")){
    $db_picture_name = getPictureName($pid);
    $filename = $_FILES['picture']['tmp_name'];
    $destination;
    $path = "pictures/large/";
    if($db_picture_name=="default.jpg"){
      //we need to create a new picture
      $destination = $pid . "_".rand().rand().".jpg";
    }
    else{
      //we can use the existing file name
      $destination = $db_picture_name;
    }
    $y = move_uploaded_file($filename,$path.$destination);
    if($y > 0){
      $z = copy($path.$destination,"pictures/thumbs/".$destination);
      if($z > 0){
        //resize the image
        resizeThumbPicture("pictures/thumbs/",$destination);
        //lets update the database
        $sql_update = "update product set picture='$destination' where pid=$pid";
        $m = $mysqli->query($sql_update);
        if($m > 0){
          //success 100%
        }
      }

    }
  }
  //end of file uploading...
  header("location:edit_product_4.php?status=pass");
}
else{
  header("location:edit_product_4.php?status=fail");
}

 ?>
