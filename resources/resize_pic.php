<?php
//************ file resize code with PHP start
 function resizeThumbPicture($path, $image_name)	{
   $uploadedfile = $path.$image_name;//actual path of the image

   // Capture the original size of the uploaded image
   list($width,$height,$type)=getimagesize($uploadedfile);


   if(@$width==@$height){
     @$newwidth=300;
     @$newheight=300;
   }
   else if(@$width>@$height){
     //landscape
     @$newwidth=300;
     @$newheight=200;
   }
   else if(@$height>@$width){
     //portrait
     @$newwidth=200;
     @$newheight=300;
   }



   if($type==1)
   {
     $src = imagecreatefromgif(@$uploadedfile);
   }
   else if($type==2)
   {
     $src = imagecreatefromjpeg(@$uploadedfile);
   }
   else if($type==3)
   {
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


 //************ file resize main pic with PHP
 function resizeMainPicture($path, $image_name)	{
   $uploadedfile = $path.$image_name;//actual path of the image

   // Capture the original size of the uploaded image
   list($width,$height,$type)=getimagesize($uploadedfile);


   if(@$width==@$height){
     @$newwidth=720;
     @$newheight=720;
   }
   else if(@$width>@$height){
     //landscape
     @$newwidth=720;
     @$newheight=480;
   }
   else if(@$height>@$width){
     //portrait
     @$newwidth=480;
     @$newheight=720;
   }



   if($type==1)
   {
     $src = imagecreatefromgif(@$uploadedfile);
   }
   else if($type==2)
   {
     $src = imagecreatefromjpeg(@$uploadedfile);
   }
   else if($type==3)
   {
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
 ?>
