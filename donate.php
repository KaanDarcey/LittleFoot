<?php session_start(); ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Make a Donation</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link rel="stylesheet" href="./CSS/style.css">
    <link rel="stylesheet" href="./CSS/admin.css">
  </head>
  <body>
    <!--[if lt IE 7]>
      <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <div class="container">
      <main class="add-new-post">
        <h1>Donate</h1>
        <div class="form-cont">
          <form class="post-form" method="POST" action="PHP/add-donation.php">
            <label for="name">Name</label>
            <input type="text" name="name" class="name" placeholder="Name" required/>
            <label for="card">Card Number</label>
            <input type="text" name="card" class="card" placeholder="Card Number" required/>
            <label for="cvv">CVV</label>
            <input type="text" name="cvv" class="cvv" placeholder="CVV" required/>
            <label for="date">Expiry Date</label>
            <input type="text" name="date" class="date" placeholder="Expiry Date" required/>
            <label for="amount">Donation Amount</label>
            <input type="text" name="amount" class="amount" placeholder="Donation Amount" required/>


            <input type="submit" name="submit" value="Donate" class="btn-publish">
          </form>
        </div>
      </main>
    </div>
    <script src="" async defer></script>
  </body>
</html>