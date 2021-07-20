<?php
	$title = "Отзывы";
	require 'vendor/tpl/header.php' ?>
<?php 
$dbHost = "srv-pleskdb28.ps.kz:3306";
$dbUser = "tekse_admin";
$dbPassword = "M&8ur7o1";
$dbName = "tekseru_Students";

date_default_timezone_set('Asia/Almaty');
$time = date('H:i', time());
$monthes = array(
    1 => 'Января', 2 => 'Февраля', 3 => 'Марта', 4 => 'Апреля',
    5 => 'Мая', 6 => 'Июня', 7 => 'Июля', 8 => 'Августа',
    9 => 'Сентября', 10 => 'Октября', 11 => 'Ноября', 12 => 'Декабря'
);
$date = date('j '.$monthes[(date('n'))].' Y',time());

try {
  $dsn = "mysql:host=" . $dbHost . ";dbname=" . $dbName;
  $pdo = new PDO($dsn, $dbUser, $dbPassword);
} catch(PDOException $e) {
  echo "Связь с базой данных прервана: " . $e->getMessage();
}

$status = "";
if($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = $_POST['name'];
  $tel = $_POST['tel'];
  $email = $_POST['email'];
  $text = $_POST['text'];
	


  if(empty($name) || empty($tel) || empty($email) || empty($text)) {
    $status = "Все поля обязательны.";
  } else {
    if(strlen($name) >= 255) {
      $status = "Введите настоящее имя пожалуйста";
    } else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $status = "Введите почту";
    } else {

      $sql = "INSERT INTO Comments (имя, телефон, email, сообщение, date, time) VALUES (:name, :tel, :email, :text, :date, :time)";

      $stmt = $pdo->prepare($sql);

      $stmt->execute(['name' => $name, 'tel' => $tel, 'email' => $email, 'text' => $text, 'date' => $date, 'time' => $time]);

      $status = "Ваш отзыв отправлен!";
      $name = "";
      $email = "";
      $message = "";
    }
  }

}

?>
  <section id="about-sanat">
	<div class="container">
		<div class="row">
			<div class="h2-titles">
        		<h2>Оставьте отзыв</h2>
      		</div>
		</div>
		<div class="row">
			<form role="form" action="" method="post">
				<div class="form-row">
					<div class="form-group col-md-6">
						<input type="text" name="name" class="form-control" placeholder="Имя">
						<input type="text" name="tel" class="form-control" placeholder="+7(___)__-__-__">
						<input type="text" name="email" class="form-control" placeholder="Ваш email">
					</div>
					<div class="form-group col-md-6">
					<textarea class="form-control" name="text" id="exampleFormControlTextarea1" rows="4" placeholder="Введите сообщение"></textarea>
					</div>
					<div class="error-message">
					<?php echo $status ?>
					</div>
					<div class="button-centered">
					 <button type="submit" class="button" id="btnComments" value="Submit">Отправить сообщение</button>
					</div>
				</div>
			</form>
		</div>
		<div class="row">
		<div class="h2-titles">
        		<h2>Отзывы наших клиентов</h2>
      		</div>
		</div>
		<div class="row">
				<?php 
				$datas = GetReviews();
				$count = count($datas);
				$last = $count - 1;		
				for($i=$last;$i>=0;$i--){ ?>
				<div class="review-area">
					<div class="users">
					<img src="img/users.png" class="img-fluid">
					</div>
				<p class="p-title"><?php
					echo $datas[$i]["имя"]; ?>
				</p>
				<p><?php 
					echo $datas[$i]["сообщение"];	
				?></p> 
				<p class="datetime"><?php
				echo $datas[$i]["date"]." ";
				$timing = strtotime($datas[$i]["time"]);
				if($timing == true){
					echo date('H:i',$timing);
				}
				
				?><p/>
			</div><?php
				}
				?>			
			
		</div>
	</div>
</section> 

<?php require 'vendor/tpl/footer.php' ?>