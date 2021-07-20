<?php 
$dbHost = "srv-pleskdb28.ps.kz:3306";
$dbUser = "tekse_admin";
$dbPassword = "M&8ur7o1";
$dbName = "tekseru_Students";

try {
  $dsn = "mysql:host=" . $dbHost . ";dbname=" . $dbName;
  $pdo = new PDO($dsn, $dbUser, $dbPassword);
} catch(PDOException $e) {
  echo "Связь с базой данных прервана: " . $e->getMessage();
}
$status = "";
if($_SERVER['REQUEST_METHOD'] == 'POST') {
  $Username = $_POST['Username'];
  $Telephone = $_POST['Telephone'];
  $Email = $_POST['Email'];
  if(empty($Username) || empty($Telephone) || empty($Email)) {
    $result = "Все поля обязательны.";
  } else {
    if(strlen($Username) >= 255) {
      $result = "Введите настоящее имя пожалуйста";
    } else if(!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
      $result = "Введите почту";
    } else {

      $sql = "INSERT INTO `Заявки` (Имя, Телефон, Почта) VALUES (:Username, :Telephone, :Email)";

      $stmt = $pdo->prepare($sql);

      $stmt->execute(['Username' => $Username, 'Telephone' => $Telephone, 'Email' => $Email]);

      $result = "Ваша заявка отправлена!";
      $name = "";
      $email = "";
      $message = "";
    }
  }
}
?>
<section id="callback">
  <div class="container">
    <div class="row">
      <div class="h2-titles">
        <h2>Остались вопросы ?</h2>
        <p>Оставьте ваши контактные данные и мы свяжемся с вами и постараемся помочь</p>
      </div>
      <div class="callback-form">
        <form role="form" method="post">
          <input type="text" class="main_input_form" name="Username" placeholder="Имя">
          <input type="text" class="main_input_form" name="Telephone" placeholder="Номер телефона">
          <input type="text" class="main_input_form" name="Email" placeholder="Почта">
          <button type="submit" class="button" id="btnContactUs">Связаться с нами</button>
        </form>
<div class="error-message">
					<?php echo $result ?>
</div>
      </div>
    </div>
  </div>
</section>
<footer id="footer-sanat">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <img src="/img/sanatlogo2.svg" class="img-fluid">
          </div>
          <div class="col-md-5 footer-info">
            <p> <a href="https://yandex.kz/maps/221/chimkent/house/YkAYcw5iTEUEQFpofX9wd31lZQ==/?ll=69.594185%2C42.317205&z=17.78">Казахстан, 160000, город Шымкент, улица Туркестанская 2/4 Б</a></p>
            <p class="footer-num"><a href="tel:+77787889070" >+77787889070</a></p>
            <p class="footer-pe">Время работы: </p>
            <p class="footer-p"> пн-пт: 09:00 - 18:00 сб-вс: 09:00 - 13:00</p>
          </div>
          <div class="col-md-2 footer-list">
            <p>О Клинике</p>
            <ul>
              <li><a href="services.php">Услуги</a></li>
              <li><a href="price.php">Цены</a></li>
              <li><a href="sales.php">Акции</a></li>
              <li><a href="about.php">История</a></li>
            </ul>
          </div>
          <div class="col-md-2 footer-list">
            <p>Пациентам</p>
            <ul>
               <li><a href="abouts.php">Информация</a></li>
              <li><a href="review.php">Отзывы</a></li>
              <li><a href="abouts.php">Стандарты</a></li>
              <li><a href="services.php">Осмотр</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <p> © 2020 Медицинский центр "SANAT CLINIC" </p>
    </div>
  </footer>  <!-- JAVASCRIPT FILES  -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="slick/slick.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
  </body>
</html>