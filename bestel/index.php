<?php
$product_id = $_GET['id'];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title>Product Bestellen</title>
</head>
<body>

<section class="order-form my-4 mx-4">
    <div class="container pt-4">

      <div class="row">
        <div class="col-12">
          <h1>Order Form</h1>
          <span>Uw bestelling:</span>
          <hr class="mt-1">
        </div>
        <div class="col-12">
        <form class="paypal" action="payments.php" method="post" id="paypal_form">

          <div class="row mx-4">
            <div class="col-12 mb-2">
              <label class="order-form-label">Name</label>
            </div>
            <div class="col-12 col-sm-6">
              <input class="order-form-input" placeholder="First" required>
            </div>
            <div class="col-12 col-sm-6 mt-2 mt-sm-0">
              <input class="order-form-input" placeholder="Last" required>
            </div>
          </div>

          
      

      
          <div class="row mt-3 mx-4">
            <div class="col-12">
              <label class="order-form-label">Adress</label>
            </div>
            <div class="col-12">
              <input class="order-form-input" placeholder="Street Address" required>
            </div>
            <div class="col-12 mt-2">
              <input class="order-form-input" placeholder="Street Address Line 2" >
            </div>
            <div class="col-12 col-sm-6 mt-2 pr-sm-2">
              <input class="order-form-input" placeholder="City" required>
            </div>
            <div class="col-12 col-sm-6 mt-2 pl-sm-0">
              <input class="order-form-input" placeholder="Region" required>
            </div>
            <div class="col-12 col-sm-6 mt-2 pr-sm-2">
              <input class="order-form-input" placeholder="Postal / Zip Code" required>
            </div>
            <div class="col-12 col-sm-6 mt-2 pl-sm-0">
              <input class="order-form-input" placeholder="Country" required>
            </div>
          </div>

          <div class="row mt-3 mx-4">
            <div class="col-12">
              <div class="form-check">
                <img src="" alt="" id="product_image" srcset="" style="width:80%; float: left;">
              </div>
              <div class="col-12" style="float: left;">
                  <h4 class="product_name" id="product_name"></h4>
              </div>

              <div class="col-12" style="float: left;">
                  <h4 class="price" id="product_price"></h4>
              </div>
            </div>
          </div>

          <div class="row mt-3">
            <div class="col-12">
                <input type="hidden" name="cmd" value="_xclick" />
                <input type="hidden" name="no_note" value="1" />
                <input type="hidden" name="lc" value="EUR" />
                <input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynow_LG.gif:NonHostedGuest" />
                <input type="hidden" name="first_name" value="Customer's First Name" />
                <input type="hidden" name="last_name" value="Customer's Last Name" />
                <input type="hidden" name="payer_email" value="customer@example.com" />
                <input type="hidden" name="item_number" value="123456" / >
                <input type="hidden" name="product_price" id="product_price_form" value="<?= $product_price ?>" / >
                <input type="submit" name="submit" value="Submit Payment" class="btn btn-dark d-block mx-auto btn-submit"/>
            </form>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>

    

    <script>
    var product_id = "<?php echo $product_id ?>";

    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>