<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <title>Basic Banking System</title>
  </head>

  <body>
  <?php
  include 'navbar.php';
  ?>
  
      <div class="container-fluid">
      <div class="row justify-content-md-center align-items-md-center" style="height: 80vh;">

            <div class="col text-center">
                  <div class="col-md act">
                    <img src="./img/banklogo.png" style="height: 250px; margin: 20px;"/>
                    <h1>Welcome to </br>My Country Bank</h1>
                  </div>
            </div>
            <div class="col text-center">
                  <div class="col-md act">
                    <br>
                    <a href="createuser.php" ><button style="background-color : #1775ee; color: white; width: 300px; margin-top: 10px; margin-bottom: 20px; font-size: 20px">Create a User</button></a>
                  </div>
                  <div class="col-md act">
                    <br>
                    <a href="transfermoney.php"><button style="background-color : #1775ee; color: white; width: 300px; margin-top: 10px; margin-bottom: 20px; font-size: 20px">Make a Transaction</button></a>
                  </div>
                  <div class="col-md act">
                    <br>
                    <a href="transactionhistory.php"><button style="background-color : #1775ee; color: white; width: 300px; margin-top: 10px; margin-bottom: 20px; font-size: 20px">Transaction History</button></a>
                  </div>
            </div>
            </div>
      </div>
      <footer class="text-center mt-5 py-2">
        <p>&copy 2021. Made by <b>Sushil Gupta</b></p>
      </footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
  <style>
    footer{
      position: absolute;
      width: 100%;
      bottom: 0;
      background-color: white;
    }
  </style>
</html>