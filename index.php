<?php 
$title = "Главная";
$test = '<link href="https://fonts.googleapis.com/css?family=Rubik:300,400&display=swap&subset=cyrillic" rel="stylesheet">';
require 'vendor/tpl/header.php' 
?>
<section id="san-slide">
    <div class="container">
      <div class="row">
        <div class="col-lg-9">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="img-fluid" src="/img/sanatslide.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="img-fluid" src="/img/sanatslide1.jpg" alt="Second slide">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
        </div>
        <div class="col-lg-3">
          <div class="easybar"> 
            <ul>
              <li><a href="about.php">О клинике</a> </li>
              <li><a href="abouts.php">Стандарты</a> </li>
              <li><a href="sales.php">Акции</a> </li>
              <li><a href="review.php">Отзывы</a> </li>
              <li><a href="price.php">Прайс-лист</a> </li>
            </ul>
          </div>  
        </div>
      </div>
    </div>
</section>

<section id="check-services">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="scroll-tabs">
          <ul class="nav nav-tabs w-100 flex-nowrap" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link  active" id="home-tab" data-toggle="tab" href="#UZI" role="tab" aria-controls="home" aria-selected="true">УЗИ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#diagnose" role="tab" aria-controls="profile" aria-selected="false">Диагностика</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#cardio" role="tab" aria-controls="contact" aria-selected="false">Кардиология</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#urology" role="tab" aria-controls="contact" aria-selected="false">Урология</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#ginekology" role="tab" aria-controls="contact" aria-selected="false">Гинекология</a>
          </li>
        </ul>
        </div>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane active" id="UZI" role="tabpanel" aria-labelledby="home-tab"> 
            <div class="row">
              <div class="col-md-12 table-list">
                <ul>
                  <?php 
					$services = 105;
                  	$datas = GetServiceList($services);
                  	for ($i=0; $i < 12 ; $i++){
                  ?>
                    <li><a>
				  <?php 
                    echo $datas[$i]["Наименования"];
				  ?></a></li>
                  <?php } ?>
                </ul>
              </div>
            </div>
          </div>
          <div class="tab-pane" id="diagnose" role="tabpanel" aria-labelledby="profile-tab"> 
            <div class="row">
              <div class="col-md-12 table-list">
                <ul>
                  <?php 
					$services = 104;
                  	$datas = GetServiceList($services);
                  	for ($i=0; $i < 12 ; $i++){
                  ?>
                    <li><a>
				  <?php 
                    echo $datas[$i]["Наименования"];
				  ?></a></li>
                  <?php } ?>
                </ul>
              </div>		
            </div>
          </div>
          <div class="tab-pane" id="cardio" role="tabpanel" aria-labelledby="contact-tab">
            <div class="row">
              <div class="col-md-12 table-list">
                <ul>
                  <?php 
					$services = 101;
                  	$datas = GetServiceList($services);
                  	for ($i=0; $i < 12 ; $i++){
                  ?>
                    <li><a>
				  <?php 
                    echo $datas[$i]["Наименования"];
				  ?></a></li>
                  <?php } ?>
                </ul>
              </div>
            </div>
          </div>
			          <div class="tab-pane" id="urology" role="tabpanel" aria-labelledby="contact-tab">
            <div class="row">
              <div class="col-md-12 table-list">
                <ul>
                  <?php 
					$services = 102;
                  	$datas = GetServiceList($services);
                  	for ($i=0; $i < 12 ; $i++){
                  ?>
                    <li><a>
				  <?php 
                    echo $datas[$i]["Наименования"];
				  ?></a></li>
                  <?php } ?>
                </ul>
              </div>
            </div>
          </div>
			          <div class="tab-pane" id="ginekology" role="tabpanel" aria-labelledby="contact-tab">
            <div class="row">
              <div class="col-md-12 table-list">
                <ul>
                  <?php 
					$services = 103;
                  	$datas = GetServiceList($services);
                  	for ($i=0; $i < 12 ; $i++){
                  ?>
                    <li><a>
				  <?php 
                    echo $datas[$i]["Наименования"];
				  ?></a></li>
                  <?php } ?>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="about-sanat">
  <div class="container">
    <div class="row">
      <div class="sanat-title">
        <h1>Медицинский центр SANAT CLINIC</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
    	<img class="w-100" src="img/sanat-block-2.jpeg">
      </div>
      <div class="col-md-6 about-sanat-text">
		  <p>
         Медицинский центр "SANAT CLINIC" - территория здоровья, где каждый пациент получает индивидуальный комплексный подход и доступ к лучшим мировым технологиям.
        </p>
		  <p>Наши приоритеты:</p>
		  <h4>Доступность</h4>
       	  <ul>
			<li>Демократичные цены;</li>
			<li>Выгодные программы и акции.</li>
		  </ul>
		  <h4>Внимательность</h4>
          <ul>
			<li>Чуткий и отзывчивый персонал;</li>
			<li>Только необходимые исследования и консультации;</li>
			<li>Открытость и желание помочь.</li>
		  </ul>
		  <h4>Качество</h4>
       	  <ul>
			<li>Современное диагностическое и лечебное оборудование;</li>
			<li>Федеральные стандарты лечения;</li>
			<li>Врачи высокой квалификации, опытные медсестры.</li>
		  </ul>
		  <p> В состав нашего медицинского центра входят врачи с большим опытом работы, которые внимательно относятся к каждому своему пациенту.</p>
		  <p class="p-title">Мы развиваемся, потому что знаем — наше дело и наша работа нужны обществу, ведь мы заботимся о здоровье людей, чье благополучие для нас всегда в приоритете!</p>
      </div>
    </div>
  </div>
</section>


<section id="map-id">
<iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A599c8928b1a86a5d4a5440413b0881f050fe3ea7f2585f41a4f87d6ae81e8900&amp;source=constructor" width="100%" height="600" frameborder="0"   style="pointer-events: none;"></iframe>
</section>

<?php require 'vendor/tpl/footer.php' ?>
