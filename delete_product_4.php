<?php
  //restricting the user
  require("validate_user_inc.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete product information </title>
    <link rel="stylesheet" href="css/bootstrap.css" />
</head>
<body>

    <!-- top nav bar from include file -->
    <?php
        include("nav_bar.inc.php");
    ?>

    <div class="container" style="padding:0px;">
                <?php
                    //have 4 pics in the images folder, therefore generating a number in between 2-4 and
                    //dynamically generating the filename so the banner image would randomly change at each reload
                    $filename = "banner_pic" . rand(6,11) . ".jpg";
                ?>
                <img src="images/<?php echo $filename;?>" style="max-height:350px;"
                class="img img-fluid col-lg-12" alt="banner image for billboard">
    </div><!-- end of container-->

    <div class="container" style="padding:0px;">
        <div class="row">
            <div class="col-lg-4">
                <div class="card bg-secondary mb-3 mt-3" style="max-width: 20rem;">
                    <div class="card-header">A Short About Us</div>
                    <div class="card-body">
                        <h4 class="card-title">AQUATRINICA</h4>
                        <p class="card-text" align="justify">The Aquatrinica Aquarium is a aquarium with a solid reputation in Srilanka for several years. the Aquantrinica aquarium began in 2005 as a small shop and slowly grew to become a showroom. we provide you high quality products at the best price and offer you a best shopping experience possible for aqaurium products, fishes, feeds all at a reasonable price.
                         we provide professional services and also warranty for our products.</p>
                    </div>
                    <a class="btn btn-primary" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                    Contact Now
                    </a>
                </div>
            </div><!-- end of div col-4 -->

            <div class="col-lg-8 mt-3">

                <h3>CONFIRMATION ::.</h3>
                <hr>
                <?php
                  $status = $_REQUEST['status'];


                  if($status == "pass"){
                 ?>
                <!-- success -->
                <div class="alert alert-dismissible alert-success">
                    <h3>Success</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <strong>Deleting </strong> record was successful!
                    <br>
                    <a href="delete_product_1.php" class="btn btn-success mt-5">Delete Another Record</a>
                </div>

                <?php
                }//end of if
                else{
                 ?>
                <!-- failure message -->
                <div class="alert alert-dismissible alert-danger">
                    <h3>Failed</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <strong>Deleting</strong> record failed. Sorry !
                    <br>
                    <a href="delete_product_1.php" class="btn btn-danger mt-5">Try Again</a>
                </div>
                <?php
              }//end of else of the if condition
               ?>

            </div><!-- end of div col-8 -->

        </div><!-- end of row-->
    </div>



    <div class="footer">
        <?php
            include("footer.inc.php");
        ?>
    </div>



<script src="js/bootstrap.bundle.js"></script>
</body>
</html>
