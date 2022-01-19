<?php
include_once 'includes/dbhandler.php';

?>
<!doctype html>
  <html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>UkeShop</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <style>
    body{
      background-color: red;
      background: url(obrazky/bck.jpeg) no-repeat center center fixed; 
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
      margin:0;
    }
    .img-container{
      position: relative;
    }
    .image{
      transition: .5s ease;
      backface-visibility: hidden;
    }
    .overlay{
      transition: .5s ease;
      opacity: 0;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%,-50%);
    }
    .img-container:hover .image {
      opacity: 0.2;

    }
     .img-container:hover .overlay{
      opacity:1;
      
    }
  </style>



  <link href="sticky-footer-navbar.css" rel="stylesheet">
</head>


<body class="d-flex flex-column h-100">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      <script type="text/javascript" src="validate.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <header>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="vypisProduktu.php">eshop</a>
            </li>


            <?php 
              if (empty($_SESSION['loggedin'])) {
                    $_SESSION['loggedin'] = false;

            if ( $_SESSION['loggedin'] != false) {


             ?>
             <li class="nav-item">
              <a class="nav-link" href="login.php">Odhlásit se</a>
            </li>

          <?php 
        }
          else{


            ?>
            <li class="nav-item">
              <a class="nav-link" href="login.php">Přihlásit se</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="register.php">Registrovat se</a>
            </li>




          <?php 
        } 
        }
        else{

          ?>
           <li class="nav-item">
              <a class="nav-link" href="login.php">Odhlásit se</a>
            </li>
            <?php
        }

          ?>


        </ul>

      </div>
    </div>
  </nav>
</header>



