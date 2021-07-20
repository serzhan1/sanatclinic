/* <?php


 $host = "srv-pleskdb28.ps.kz:3306";
 $database = "tekseru_Students";
 $user = "tekse_admin";
 $pass = "M&8ur7o1";
 
 $dsn = "mysql:host=$host;dbname=$database;";
  $options = array(
      PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
  );
  $pdo = new PDO($dsn, $user, $pass, $options);

	function GetServiceList($services){
		global $pdo;
		$stmt = $pdo->query('SELECT `Наименования` FROM `Услуги` WHERE `Код специальности` = "'.$services.'" ');
  		$data = $stmt->fetchAll();
  		return $data;
	}
	function GetServicesGroup($services){
		global $pdo;
		$stmt = $pdo->query('SELECT `Наименования` FROM `Услуги` WHERE `Вид услуги` = "'.$services.'" ');
  		$data = $stmt->fetchAll();
  		return $data;
	}
	function GetSpecs(){
		global $pdo;
		$stmt = $pdo->query('SELECT * FROM `Специализация`');
  		$data = $stmt->fetchAll();
  		return $data;
	}
	function GetPrice($doctorCode){
		global $pdo;
		$stmt = $pdo->query('SELECT * FROM `Цены` WHERE `Код специалиста` = "'.$doctorCode.'" ');
		$data = $stmt->fetchAll();
  		return $data;
	}
	function GetCardio(){
		global $pdo;
		$stmt = $pdo->query('SELECT * FROM `Цены` WHERE `Код специалиста` = "301" OR `Код специалиста` = "302"');
  		$data = $stmt->fetchAll();
  		return $data;
	}
	function GetReviews(){
		global $pdo;
		$stmt = $pdo->query('SELECT * FROM `Comments`');
  		$data = $stmt->fetchAll();
  		return $data;
	}

?>