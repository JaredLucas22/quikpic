<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quick Pick - Home</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css"> 
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
        <a class="nav-link active" href="home.html">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="products.html">Products</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="promotions.html">Promos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.html">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="owner.html">Owner</a>
      </li>
    </ul>
  </div>
</nav>

<!-- Fixed Banner-->
<div class="banner"> 
  <img src="Graphics/Jumbotron.png" alt="" width="100%"">
</div>
<!-- Carousel Section -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <h1> Our Promos </h1>
    <div class="carousel-item active">
      <div class="row">
        <div class="col-lg-4">
          <a href="promotions.html"><img src="promo3.png" class="d-block w-100 custom-img" alt="First slide"></a>
        </div>
        <div class="col-lg-4">
          <a href="promotions.html"><img src="promo3.png" class="d-block w-100 custom-img" alt="Second slide"></a>
        </div>
        <div class="col-lg-4">
          <a href="promotions.html"><img src="promo3.png" class="d-block w-100 custom-img" alt="Third slide"></a>
        </div>
      </div>
    </div>
    <!-- Additional carousel items with three images each -->
    <div class="carousel-item">
      <div class="row">
        <div class="col-lg-4">
          <a href="promotions.html"><img src="promo1.png" class="d-block w-100 custom-img" alt="Fourth slide"></a>
        </div>
        <div class="col-lg-4">
          <a href="promotions.html"><img src="promo2.png" class="d-block w-100 custom-img" alt="Fifth slide"></a>
        </div>
        <div class="col-lg-4">
          <a href="promotions.html"><img src="promo3.png" class="d-block w-100 custom-img" alt="Sixth slide"></a>
        </div>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <a href="promotions.html"><button class="button"> See more promos </button></a>
</div>


<!-- Bestselling Products -->
<div class="best-selling">
  <h1> Our Best-Selling Products! </h1>
  <!-- Product 1-->
  <div class="row">
    <div class="col-md-6">
      <div class="product-card">
        <div class="main-image">
          <img src="Best Selling Products/1.png" style="width: 300px;" alt="Product 1" id="mainImage">
        </div>
      </div>
      <div class="small-images">
        <!-- Small Images for Product 1 -->
        <img src="Best Selling Products/1.png" alt="Small Image 1" onclick="changeImage('Best Selling Products/1.png')">
        <img src="Best Selling Products/2.png" alt="Small Image 2" onclick="changeImage('Best Selling Products/2.png')">
        <img src="Best Selling Products/3.png" alt="Small Image 3" onclick="changeImage('Best Selling Products/3.png')">
      </div>
    </div>
    <div class="col-md-6">
      <div class="product-details">
        <h2>Alcoholic Beverages</h2>
        <p>
          At Quick Pick, we believe in elevating experiences through exceptional taste and quality. Our alcohol collection is a curation of the finest spirits sourced globally, meticulously chosen to offer connoisseurs and enthusiasts a diverse range of premium beverages. With a commitment to excellence, we aim to deliver unparalleled satisfaction with every sip.
          <br><br>
          Savor the moments that matter with our exquisite alcohol collection. Elevate celebrations, gatherings, and quiet evenings alike with the sophistication and quality embodied in every bottle. Whether it's for a special toast or to unwind after a long day, our selection is here to enhance your experiences.
        </p>
      </div>
    </div>
  </div>
  <!--Product 2-->
  <div class="row">
    <div class="col-md-6">
      <div class="product-details">
        <h2>Groceries</h2>
        <p>
          Nourish your family with our diverse array of farm-fresh produce and pantry staples. Our commitment to quality ensures that every item, from vibrant fruits and vegetables to pantry essentials, meets the highest standards. Experience the convenience of online shopping without compromising on freshness.
          <br><br>
          Simplify your daily routine with our extensive range of everyday essentials. From dairy products to baking ingredients, household supplies, and more, we've got you covered. Enjoy the ease of shopping for top-notch groceries delivered straight to your door.
        </p>
      </div>
    </div>
    <div class="col-md-6">
      <div class="product-card">
        <div class="main-image">
          <img src="Best Selling Products/5.png" style="width: 400px;" alt="Product 2" id="cannedGoods">
        </div>
      </div>
      <div class="small-images2">
        <!-- Small Images for Product 2 -->
        <img src="Best Selling Products/5.png" alt="Small Image 1" onclick="changeCannedImage('Best Selling Products/5.png')">
        <img src="Best Selling Products/4.png" alt="Small Image 2" onclick="changeCannedImage('Best Selling Products/4.png')">
        <img src="Best Selling Products/6.png" alt="Small Image 3" onclick="changeCannedImage('Best Selling Products/6.png')">
      </div>
    </div>
  </div>
</div>
</div>

<!-- Location -->
<div class="location">
  <img src="Graphics/We're nearby..png" alt="" width="100%">
</div>

<?php 
include("footer.php");
?>
<script>
  function changeImage(imageSrc) {
    document.getElementById('mainImage').src = imageSrc;
  }

  function changeCannedImage(imageSrc) {
    document.getElementById('cannedGoods').src = imageSrc; // Ensure the extension is added
  }
</script>




<!-- Bootstrap JS and dependencies (jQuery, Popper.js) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
