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
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Raleway:wght@600&display=swap');
.nav-link {
    margin-right: 15px;
    color: #2F363F;
    letter-spacing: 0.5px;
    transition: 0.5s;
}
.navbar
{
  background-color:skyblue;
}
.navbar-brand:hover {
    background-color: skyblue;
}
.navbar-brand {
    color: #4C4B4B;
    letter-spacing: 0.5px;
    
}
div a
{
  background-color:skyblue;
}
div ul :hover
{
  background-color: skyblue;
}
div ul li a
{
  background-color:pink;
}
h2 {
    color: #4C4B4B;
    letter-spacing: 0.5px;
    font-family: raleway;
}

* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: sans-serif;
}

.intro {
    background: #EAF0F1;
}

h1 {
    color: #4C4B4B;
    font-weight: bold;
    transition: 0.5s;
}

h3 {
    color: #2F363F;
}

button {
    border: none;
    border-radius: 8px;
    padding: 10px;
    background: #7B8788;
    color: white;
    letter-spacing: 1.5px;
    font-size: 15px;
    transition: 0.5s;
}

button:hover,
h1:hover {
    transform: scale(1.1);
}


button:hover {
    background-color: skyblue;
    color:black;
}
.app-form-group:hover
{
  background-color:blue;
  color:black;
}
footer {
    color: black;
    background-color: pink;
    letter-spacing: 0.5px;
}

footer .text-center {
    background-color: pink;
}

footer p {
    margin: 0;
    font-size: 15px;
}

@media only screen and (orientation:portrait) {
    .intro {
        display: flex;
        flex-direction: column-reverse;
    }
    h1 {
        font-size: 30px;
    }
    .act {
        padding-bottom: 100px;
    }
}
    </style>
  </head>

  <body>
  <?php
  include 'navbar.php';
  ?>
  
      <div class="container-fluid">
      <!-- Introduction section -->
            <div class="row intro py-1">
              <div class="col-sm-12 col-md">
                <div class="heading text-center my-5">
                  <h3>Welcome to</h3>
                  <h1>Online Banking</h1>
                </div>
              </div>
              <div class="col-sm-12 col-md img text-center">
                <img src="img/o1.jpg" class="img-fluid pt-2">
              </div>
            </div>

      <!-- Activity section -->
            <div class="row activity text-center">
                  <div class="col-md act">
                    <img src="img/download.jpeg" style="height:200px;" class="img-fluid">
                    <br>
                    <a href="createuser.php"><button>Create a User</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/images.png"  style="height:200px;"class="img-fluid">
                    <br>
                    <a href="transfermoney.php"><button>Make a Transaction</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/transaction.png" style="height:200px;" class="img-fluid">
                    <br>
                    <a href="transactionhistory.php"><button>Transaction History</button></a>
                  </div>
            </div>
      </div>
      <footer class="text-center mt-5 py-2">
        <p>&copy 2021. Made by <b>Ayushi Patel</b> <br> The GRIP Sparks Foundation</p>
      </footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>