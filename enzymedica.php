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


  <!-- Header -->
  <?php include 'includes/header_menu.php'; ?>

  <!-- Main Content -->
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card shadow-lg">
          <div class="card-body p-5">
            <h3 class="text-center text-warning pt-3 title">Enzymedica</h3>
            <hr />
            <img
              src="https://cdn.shopify.com/s/files/1/0459/6573/files/EnzyHero_GLP1-BundleOpt-dsk2.webp?v=1736751664&width=1440"
              class="img-fluid d-block rounded mx-auto image-thumbnail mb-4" alt="Enzymedica Logo">
            <h3><b>What matters to you matters to us.</b></h3>
            <p class="lead text-muted">Enzymes are the biologically active proteins that help chemical reactions happen in our body. 
                There are two kinds of enzymes, metabolic and digestive, with metabolic helping overall health and digestive helping turn food 
                into energy. Every part of our bodies needs enzymes to function.</p>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Footer -->
  <?php include 'includes/footer.php'; ?>