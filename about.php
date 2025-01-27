<?php
require ("includes/common.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>iHERB - Who We Are</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Delius Swash Caps' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Andika' rel='stylesheet'>
  <link rel="stylesheet" href="aboutfr.css">
</head>

<body style="overflow-x:hidden; padding-bottom:100px; font-family: 'Andika', sans-serif; background-color: #f9f9f9;">

  <?php include 'includes/header_menu.php'; ?>

  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card shadow-lg">
          <div class="card-body p-5">
            <h3 class="text-center text-warning pt-3 title">Who We Are?</h3>
            <hr />
            <img
              src="https://logos-world.net/wp-content/uploads/2022/12/iHerb-Logo-500x281.png"
              class="img-fluid d-block rounded mx-auto image-thumbnail mb-4" alt="iHERB Logo">
            <p class="lead text-muted">We are the world’s largest eCommerce platform dedicated to vitamins, minerals, and supplements, and other health and wellness products. 
              For more than 27 years, we have been making it simple for customers all over the world to purchase the highest quality health and wellness products. From supplements to skincare to grocery items, we ship over
              40,000 products, from over 1,600 brands to more than 180+ countries, and we are proud to provide the very best value.</p>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="container mt-5 d-flex justify-content-center">
    <div class="card shadow-lg p-4 col-md-6">
      <h3 class="text-center text-warning pt-3 title">Contact Form</h3>
      <form action="https://formspree.io/EnterYourEmail" method="POST" name="_next">
        <div class="form-group">
          <label for="exampleFormControlInput1">Email address</label>
          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter Your Email"
            name="email">
        </div>

        <div class="form-group">
          <label for="exampleFormControlTextarea1">Message</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" name="message" rows="5" placeholder="Your Message..."></textarea>
        </div>
        <input type="hidden" name="_next" value="http://localhost/foody/about.php" />
        <button type="submit" class="btn btn-primary w-100">Submit</button>
      </form>
    </div>
  </div>

  <!-- Footer -->
  <?php include 'includes/footer.php'; ?>

  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <script>
    $(document).ready(function () {
      $('[data-toggle="popover"]').popover();
    });
    $(document).ready(function () {
      if (window.location.href.indexOf('#login') != -1) {
        $('#login').modal('show');
      }
    });
  </script>
  <?php if (isset($_GET['error'])) { 
    $z = $_GET['error']; 
    echo "<script type='text/javascript'>
          $(document).ready(function(){
            $('#signup').modal('show');
          });
          </script>"; 
    echo "<script type='text/javascript'>alert('".$z."')</script>"; 
  } ?>
  <?php if (isset($_GET['errorl'])) { 
    $z = $_GET['errorl']; 
    echo "<script type='text/javascript'>
          $(document).ready(function(){
            $('#login').modal('show');
          });
          </script>"; 
    echo "<script type='text/javascript'>alert('".$z."')</script>"; 
  } ?>
</body>

</html>

