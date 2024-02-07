<?php
  //restricting the user
  require("validate_user_inc.php");
  include("code_bank.inc.php");

  //connecting to db server
  require("db_connection.php");

  // debug code
  //lets display all the values we recieve
  //from the unser filled form
/*  echo "<pre>";
  print_r($_REQUEST);
  echo "</pre>";*/

  //lets copy the values from $_REQUEST array
  //to variables
  $service_type   = addslashes($_REQUEST['service_type']);
  $description    = addslashes($_REQUEST['description']);
  $price          = addslashes($_REQUEST['price']);

  //lets build a dynamic SQL  command to save the
  //record in product table in the database db_aqua

  $sql  = "insert into service (service_type,description,price) values(";
  $sql .= "'$service_type',";
  $sql .= "'$description',";
  $sql .= "$price)";

  //echo $sql;

  //lets execute the sql command

  $x = $mysqli->query($sql);

  //making sure the sql command got executed properly
  if($x > 0){
      //echo "record successfully added / created!";
      //lets redirect the user

      //** starting to upload the file
      if(($_FILES['picture']['error']==0) && ($_FILES['picture']['type']=="image/jpeg")){
          $filename    = $_FILES['picture']['tmp_name'];
          $last_id     = $mysqli->insert_id;
          $destination = $last_id . "_" .rand().rand().".jpg";
          $path        = "pictures/large/";
          $y           = move_uploaded_file($filename,$path.$destination);
          if($y > 0){
            //uploading was done ok 100%
            //lets make a copy into the folder thumbs
            $z = copy($path.$destination,"pictures/thumbs/".$destination);
            if($z > 0){
              //all is well
              //so lets update the database table
              $sql2 = "update service set picture='$destination' where service_id=$last_id";
              $m = $mysqli->query($sql2);
              if($m > 0){
                //all is very well including the database table
                resizeThumbPicture("pictures/thumbs/",$destination);
              }
              //else check manually by adding die() commands...
            }
          }
      }

      //** end of file upload code


      header("location:add_service_3.php?status=pass");
  }
  else{
      //echo "sorry saving / creating record failed!";
      //lets redirect the user
      header("location:add_service_3.php?status=fail");
  }





 ?>
