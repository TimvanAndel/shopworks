<?php
$product_id = $_GET['id'];
$product_name = $_GET['name'];
$product_price = $_GET['price'];
$image_url = $_GET['image_url'];
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Tutorial</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">
        <!-- CSS -->
        <link href="assets/css/style.css" rel="stylesheet">
        <meta name="robots" content="noindex,follow" />
    
      </head>
    
      <body>
        <main class="container">
    
          <!-- Left Column / Headphones Image -->
          <div class="left-column">
            <img data-image="red" class="active" id="product_image" src="" alt="">
          </div>
    
    
          <!-- Right Column -->
          <div class="right-column">
    
            <!-- Product Description -->
            <div class="product-description">
              <span id="product_category"></span>
              <h1 id="product_name_h1"></h1>
              <p id="product_description"></p>
            </div>
    
            <!-- Product Pricing -->
            <div class="product-price">
              <span id="product_price"></span>
              <a href="bestel/index.php?id=<?= $product_id; ?>&price=<?= $product_price; ?>&image_url=<?= $image_url; ?>&name=<?= $product_name; ?>" class="cart-btn">Bestellen</a>
            </div>
          </div>
        </main>
    
        <!-- Scripts -->
        <script>
        var product_id = "<?php echo $product_id ?>";
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" charset="utf-8"></script>
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="assets/js/script.js"></script>
        
</body>
</html>