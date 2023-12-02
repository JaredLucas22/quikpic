<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quick Pick - Promotions</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="products-style.css"> 
  <link rel="icon" href="logo.ico" type="image/x-icon">
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
    <a class="navbar-brand" href="#">
      <img src="logo.png" width="50" height="50" class="d-inline-block align-top" alt="Logo">
    </a>
    <h1 style="color: #f56632; font-size: 25px;"> Quick Pick </h1>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="products.php">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="promotions.php">Promos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="owner.php">Owner</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Fixed Banner-->
  <div class="product-banner"> 
    <img src="Graphics/Promo.png" width="100%" alt="">
  </div>

  <!-- Products Section -->
  <div class="promotion-section">
    <div class="container">
      <h2>What's New</h2>
      <div class="card-columns">
        <div class="card bg-custom">
          <div class="card-body text-center">
            <p class="card-text" data-toggle="modal" data-target="#promoModal1">
              <img src="promo1.png" width="100%" height="100%" alt="Promo 1">
            </p>
          </div>
        </div>
        <div class="card bg-custom">
          <div class="card-body text-center">
            <p class="card-text" data-toggle="modal" data-target="#promoModal2">
              <img src="promo2.png" width="100%" height="100%" alt="Promo 3">
            </p>
          </div>
        </div>
        <div class="card bg-custom">
          <div class="card-body text-center">
            <p class="card-text" data-toggle="modal" data-target="#promoModal3">
              <img src="promo3.png" width="100%" height="100%" alt="Promo 3">
            </p>
          </div>
        </div>
        <div class="card bg-custom">
          <div class="card-body text-center">
            <p class="card-text" data-toggle="modal" data-target="#promoModal1">
              <img src="promo1.png" width="100%" height="100%" alt="Promo 1">
            </p>
          </div>
        </div>
        <div class="card bg-custom">
          <div class="card-body text-center">
            <p class="card-text" data-toggle="modal" data-target="#promoModal2">
              <img src="promo2.png" width="100%" height="100%" alt="Promo 3">
            </p>
          </div>
        </div>
        <div class="card bg-custom">
          <div class="card-body text-center">
            <p class="card-text" data-toggle="modal" data-target="#promoModal3">
              <img src="promo3.png" width="100%" height="100%" alt="Promo 3">
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal for displaying descriptions -->
  <div class="modal fade" id="promoModal1" tabindex="-1" role="dialog" aria-labelledby="promoModalLabel1" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="promoModalLabel1">Promo Description</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <img src="promo1.png" alt="">
          <ul>
            <li>"Buy One Get One Free on all Ice Cream Cones!" </li>
            <li>"20% off on Double Scoop Ice Cream Sundaes!" </li>
            <li>"Free topping with any Ice Cream purchase!"</li>
          </ul>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="promoModal2" tabindex="-1" role="dialog" aria-labelledby="promoModalLabel2" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="promoModalLabel1">Product Description</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Description for Promo 1 goes here.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="promoModal3" tabindex="-1" role="dialog" aria-labelledby="promoModalLabel3" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="promoModalLabel1">Product Description</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Description for Promo 1 goes here.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

<!-- Location -->
<div class="location">
  <div class="image-container">
     <img src="Graphics/We're nearby..png" alt="Location Image">
     <a href="location.php"><button class="btn">Find our Quick Pick Stores</button></a>
  </div>
 </div>

<!-- Footer -->
<?php
include("footer.php");
?>
  <!-- JavaScript -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.4/jquery.touchSwipe.min.js"></script>
</body>
</html>
