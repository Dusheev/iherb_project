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
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    <link href='https://fonts.googleapis.com/css?family=Delius Swash Caps' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Andika' rel='stylesheet'>
    <link rel="stylesheet" href="index.css">
</head>
<body style="margin-bottom:200px">
    <!--Header-->
    <?php
include 'includes/header_menu.php';
include 'includes/check-if-added.php';
?>
    <!--Header ends-->
    <div id="content">
        <div id="bg" class=" ">
            <div class="container" style="padding-top:50px">
            <div class="mx-auto p-5 text-black" id="banner_content" style="border-radius: 0.5rem;" >
            <a href="brandinfo.php" class="btn">Shop Now</a>
            </div>
            </div>
        </div>
    </div>
    <div class="row text-center" id="Life Extension">
        <div class="col-md-3 col-6 py-5">
            <div class="card">
                <img src="https://www.guardian.in/cdn/shop/articles/vitamin-d-food.jpg?v=1691563301&width=1000" alt="" class="img-fluid pb-1" >
                <div class="figure-caption">
                    <h6><b>Our ability to make vitamin D declines in the winter. Anetlanda/ Shutterstock
                        Vitamin D supplements can keep bones strong – but 
                        they may also have other benefits to your health</b>
                        </h6>
                        <div class="mx-auto p-5 text-black" id="banner_content" style="border-radius: 0.5rem;" >
                        <a href="https://theconversation.com/vitamin-d-supplements-can-keep-bones-strong-but-they-may-also-have-other-benefits-to-your-health-219521" class="btn">News Link</a>
                        </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-6 py-5">
            <div class="card">
                <img src="https://images.theconversation.com/files/506549/original/file-20230126-24-cotpgv.jpg?ixlib=rb-4.1.0&rect=0%2C0%2C4099%2C3010&q=45&auto=format&w=926&fit=clip" alt="" class="img-fluid pb-1" >
                <div class="figure-caption">
                    <h6><b>Magnesium: what you need to know about this important micronutrient</b>
                    </h6>
                        <div class="mx-auto p-5 text-black" id="banner_content" style="border-radius: 0.5rem;" >
                        <a href="https://theconversation.com/magnesium-what-you-need-to-know-about-this-important-micronutrient-197328" class="btn">News Link</a>
                        </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-6 py-5">
            <div class="card">
                <img src="https://images.theconversation.com/files/465720/original/file-20220527-11-h3yqf7.jpg?ixlib=rb-4.1.0&rect=9%2C0%2C6312%2C4217&q=45&auto=format&w=926&fit=clip" alt="" class="img-fluid pb-1" >
                <div class="figure-caption">
                    <h6><b>Vegan and vegetarian diets may lack certain nutrients – here’s how to get more of them</b>
                    </h6>
                        <div class="mx-auto p-5 text-black" id="banner_content" style="border-radius: 0.5rem;" >
                        <a href="https://theconversation.com/vegan-and-vegetarian-diets-may-lack-certain-nutrients-heres-how-to-get-more-of-them-183561" class="btn">News Link</a>
                        </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-6 py-5">
            <div class="card">
                <img src="https://www.facingourrisk.org/cdn-cgi/image/width=400,height=400,fit=contain,format=webp/uploads/assets/xray/vitamins-supplements.jpg" alt="" class="img-fluid pb-1" >
                <div class="figure-caption">
                    <h6><b>New vitamin supplement study finds they may do more harm than good</b>
                    </h6>
                        <div class="mx-auto p-5 text-black" id="banner_content" style="border-radius: 0.5rem;" >
                        <a href="https://theconversation.com/new-vitamin-supplement-study-finds-they-may-do-more-harm-than-good-97246" class="btn">News Link</a>
                        </div>
                </div>
            </div>
        </div>
    </div>


    <!--footer -->
    <?php include 'includes/footer.php'?>
    <!--footer end-->




</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
  $('[data-toggle="popover"]').popover();
});
$(document).ready(function() {

if(window.location.href.indexOf('#login') != -1) {
  $('#login').modal('show');
}

});
</script>
<?php if (isset($_GET['error'])) {$z = $_GET['error'];
    echo "<script type='text/javascript'>
$(document).ready(function(){
$('#signup').modal('show');
});
</script>";
    echo "<script type='text/javascript'>alert('" . $z . "')</script>";}?>
    
<?php if (isset($_GET['errorl'])) {$z = $_GET['errorl'];
    echo "<script type='text/javascript'>
$(document).ready(function(){
$('#login').modal('show');
});
</script>";
    echo "<script type='text/javascript'>alert('" . $z . "')</script>";}?>




</html>