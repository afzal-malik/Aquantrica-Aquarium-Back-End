<?php
function resizeThumbPicture($path, $image_name)	{
  $uploadedfile = $path.$image_name;//actual path of the image

  // Capture the original size of the uploaded image
  list($width,$height,$type)=getimagesize($uploadedfile);


  if(@$width==@$height){
    @$newwidth  = 300;//change this if you want
    @$newheight = 300;//change this if you want
  }
  else if(@$width>@$height){
    //landscape
    @$newwidth  = 300;//change this if you want
    @$newheight = 200;//change this if you want
  }
  else if(@$height>@$width){
    //portrait
    @$newwidth  = 200;//change this if you want
    @$newheight = 300;//change this if you want
  }



  if($type == 1){
    $src = imagecreatefromgif(@$uploadedfile);
  }
  else if($type == 2){
    $src = imagecreatefromjpeg(@$uploadedfile);
  }
  else if($type == 3){
    $src = imagecreatefrompng(@$uploadedfile);
  }


  @$tmp=imagecreatetruecolor(@$newwidth,@$newheight);
  imagecopyresampled($tmp,$src,0,0,0,0,@$newwidth,@$newheight,@$width,@$height);
  @$filename = $path.$image_name;
  imagejpeg($tmp,$filename,100);//100 means full 100% quality
  imagedestroy($src);
  imagedestroy($tmp); // NOTE: PHP will clean up the temp

  }
//************ file resize code with PHP end

function getPictureName($pid){
  global $mysqli;
  $sql =  "select picture from product where pid=$pid";
  $rs  = $mysqli->query($sql);
  $row = mysqli_fetch_assoc($rs);
  return $row['picture'];
}



 ?>
