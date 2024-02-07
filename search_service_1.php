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
    <title>Search Service Information</title>
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

                <h3>Search Services Info / Step 1/2</h3>
                <h4 class="text-info">Search for the Services Records</h4>
                <hr>

                <form action="search_service_2.php" method="post" class="form">
                    <div class="row">
                    <div class="form-group col-lg-5 d-inline-block">
                        <label for="" class="form-label">Search By</label>
                        <select name="search_by" class="form-control" style="display:inline-block;width:70%;" id="search_by">
                            <option value="service_id">Services ID</option>
                            <option value="service_type">Service Type</option>
                            <option value="description">Description</option>
                            <option value="price">Price less than</option>
                        </select>
                    </div><!-- end of form-group -->
                    <div class="form-group col-lg-5">
                        <label for="" class="form-label" style="padding-right:20px;">Keywords </label>
                        <input type="text" name="keywords" class="form-control" style="display:inline-block;width:70%;"  id="keywords" />

                    </div><!-- end of form-group -->

                    <div class="form-group col-lg-2">
                        <input type="submit" value="SEARCH" class="btn btn-success">
                    </div><!-- end of form-group -->

                    </div><!-- end of row-->
                </form>


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
