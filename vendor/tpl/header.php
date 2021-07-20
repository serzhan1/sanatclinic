<?php 
//require 'data/db.php'
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">
    <meta http-equiv="Cache-Control" content="no-cache">
    <title><?php echo $title; ?></title>
    <link rel="apple-touch-icon" sizes="180x180" href="/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="/img/favicon/site.webmanifest">
    <link rel="mask-icon" href="/img/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/main.css">
    <link rel="stylesheet" type="text/css" href="/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="/slick/slick-theme.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap&subset=cyrillic-ext" rel="stylesheet"> 
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <?php echo $test ?>
  </head>
  <body>
    <header id="my-header">
      <div class="container ">
        <div class="row header-body">
          <div class="col-md-6">
            <p>Время работы:</p>
            <p class="dnij">пн-вт: 09:00 - 18:00 сб-вс: 9:00 - 13:00</p>
          </div>
       
          <div class="col-md-6 left-call">
            <a class="address" href="https://yandex.kz/maps/221/chimkent/house/YkAYcw5iTEUEQFpofX9wd31lZQ==/?ll=69.594185%2C42.317205&z=17.78">улица Туркестанская 2/4 Б</a>
            <a href="tel:+77787889070" class="num">+7(778)788-90-70</a>
          </div>
        </div>
      </div>
    </header>
    <nav class="navbar navbar-expand-md justify-content-between sticky-top">
      <div class="container">
        <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target=".dual-nav">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse dual-nav w-50 order-1 order-md-0 ">
          <ul class="navbar-nav">
            <li class="d-sm-block d-md-none d-nom">
              <a href="tel:+77787889070">+7(778)788-90-70</a>
              <p>пн-вт: 09:00 - 18:00 сб-вс: 9:00 - 13:00</p>
            </li>
            <li class="nav-item d-none d-sm-none d-md-block">
              <a class="navbar-brand" href="index.php">
              <img src="/img/sanatlogo1.svg" class="img-logo1" alt="SANAT CLINIC">
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="about.php">О клинике</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="services.php">Услуги</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="price.php">Цены</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contacts.php">Контакты</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="sales.php">Акции</a>
            </li>
          </ul>
        </div>
        <a href="index.php" class="navbar-brand mx-auto d-sm-block d-md-none text-right order-0 order-md-">
          <img src="img/sanatlogo2.svg" class="img-logo2">
        </a>
        <form class="form-inline">
          <button class="btn btn-reg" type="button" data-toggle="modal" data-target="#exampleModal">Записаться на приём</button>
        </form>
      </div>
    </nav>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Записаться на приём</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body modal_callback">
        <div class="modal_form">
          <form role="form" method="post" id="reused_form2">
            <input type="text" class="modal_input_form" name="Имя" placeholder="Имя">
            <input type="text" class="modal_input_form" name="Номер" placeholder="Номер телефона">
            <input type="text" class="modal_input_form" name="Почта" placeholder="Почта">
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Отменить</button>
              <button type="submit" class="button" id="btnContactUs2">Отправить</button> 
            </div>
          </form>
        </div>          
      </div>
    </div>
  </div>
</div>