<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>iHERB</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Delius+Swash+Caps&family=Andika&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style11.css">

    
</head>
<body style="margin-bottom:200px">
    
    <?php
    include 'includes/header_menu.php';
    include 'includes/check-if-added.php';
    ?>
   
    <div id="content">
        <div id="bg">
            <div class="container" style="padding-top:150px">
                <div class="mx-auto p-5 text-white" id="banner_content">
                    <h1>“Health is not valued till sickness comes.”</h1>
                    <a href="products.php" class="btn btn-warning btn-lg text-white">Shop Now</a>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center pt-4 h3">
        BE A HEALTHY PERSON
        <br>
        Brands
        <br>
    </div>
    
    <div class="container pt-3">
        <div class="row text-center">
            <div class="col-6 col-md-3 py-3">
                <a href="lifeextention.php">
                    <img src="images/maxresdefault (1).jpg" class="img-fluid" alt="">
                    <div class="h5 pt-3 font-weight-bolder">Life Extension</div>
                </a>
            </div>
            <div class="col-6 col-md-3 py-3">
                <a href="muscletech.php#MuscleTech">
                    <img src="images/Muscletech (2) (1).jpg" class="img-fluid zoom" alt="">
                    <div class="h5 pt-3 font-weight-bolder">MuscleTech</div>
                </a>
            </div>
            <div class="col-6 col-md-3 py-3">
                <a href="naturesway.php#Nature's Way">
                    <img src="images/0x0 (3).jpg" class="img-fluid" alt="">
                    <div class="h5 pt-3 font-weight-bolder">Nature's Way</div>
                </a>
            </div>
            <div class="col-6 col-md-3 py-3">
                <a href="enzymedica.php#Enzymedica">
                    <img src="images/TT (1).jpg" class="img-fluid" alt="">
                    <div class="h5 pt-3 font-weight-bolder">Enzymedica</div>
                </a>
            </div>
        </div>
    </div>
    <!--Menu highlights end-->
    <!--Footer-->
    <?php include 'includes/footer.php' ?>
    <!--Footer end-->
</body>
</html>
