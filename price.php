<?php
	$title = "Прейскурант";
	require 'vendor/tpl/header.php' ?>
     <section id="faq">
  <div class="container">
    <div class="row">
      <div class="faq-form">
        <div class="row">
          <div class="col-md-3">
            <div class="list-group" id="list-tab" role="tablist">
				<p class="menu-title">Направления</p>
             	<a class="list-group-item active"  data-toggle="list" href="#contentUZI">Ультразвуковое исследование</a>
          	  	<?php 
		
                  	$datas = GetSpecs();
                  	for ($i=0; $i < 7 ; $i++){
					if($i != 4){
                  ?>
                    <a class="list-group-item" data-toggle="list" href="#sp-<?php echo $datas[$i]["Код специальности"] ?>">
				  <?php 
                    echo $datas[$i]["Наименования"];
					}
				  ?></a>
                  <?php } ?>
            </div>
          </div>
          <div class="col-md-9">
            <div class="tab-content" id="nav-tabContent">
              <div class="tab-pane fade show active" id="contentUZI" role="tabpanel">
                <p class="big-title">Ультразвуковое исследование</p>
                <div id="accordion">
                  <div class="card">
                    <div class="card-header" id="headingOne">
                      <h5 class="mb-0">
                        <button class="btn btn-link" data-toggle="collapse" data-target="#coll1">
                         Прейскурант
                        </button>
                      </h5>
                    </div>
                    <div id="coll1" class="collapse show" data-parent="#accordion">
						  <table class="price-table">
							  <thead>
								  <tr>
    								<th>Наименование</th>
    								<th>Цена(тг)</th>
    							  </tr>
							  </thead>
							  <tbody>
								  <?php 
								  	$specCode = 304;
								  	$datas = GetPrice($specCode);
								  	for($i=0;$i < 12; $i++){ 
								   	echo "<tr><td>".$datas[$i]["Наименование услуги"]."</td><td>".$datas[$i]["Цена"]."</td></tr>";
									}
								  ?>
							  </tbody>
						  </table>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="sp-101" role="tabpanel">
                <p class="big-title">Кардиология</p>
                <div id="accordion">
                  <div class="card">
                    <div class="card-header" id="headingOne">
                      <h5 class="mb-0">
                        <button class="btn btn-link" data-toggle="collapse" data-target="#coll1">
                          Прейскурант
                        </button>
                      </h5>
                    </div>
                    <div id="coll1" class="collapse show" data-parent="#accordion">
                      <table class="price-table">
							  <thead>
								  <tr>
    								<th>Наименование</th>
    								<th>Цена(тг)</th>
    							  </tr>
							  </thead>
							  <tbody>
								  <?php 
								  	$specCode = 306;
								  	$datas = GetPrice($specCode);
								  	for($i=0;$i < 12; $i++){
								   	echo "<tr><td>".$datas[$i]["Наименование услуги"]."</td><td>".$datas[$i]["Цена"]."</td></tr>";
									}
								  ?>
							  </tbody>
						  </table>
                    </div>
                  </div>
                </div>
              </div>
			 <div class="tab-pane fade" id="sp-102" role="tabpanel">
                <p class="big-title">Урология</p>
                <div id="accordion">
                  <div class="card">
                    <div class="card-header" id="headingOne">
                      <h5 class="mb-0">
                        <button class="btn btn-link" data-toggle="collapse" data-target="#coll1">
                          Прейскурант
                        </button>
                      </h5>
                    </div>
                    <div id="coll1" class="collapse show" data-parent="#accordion">
                      <table class="price-table">
							  <thead>
								  <tr>
    								<th>Наименование</th>
    								<th>Цена(тг)</th>
    							  </tr>
							  </thead>
							  <tbody>
								  <?php 
								  	$specCode = 303;
								  	$datas = GetPrice($specCode);
								  	for($i=0;$i < 12; $i++){
								   	echo "<tr><td>".$datas[$i]["Наименование услуги"]."</td><td>".$datas[$i]["Цена"]."</td></tr>";
									}
								  ?>
							  </tbody>
						  </table>
                    </div>
                  </div>
                </div>
              </div>
			<div class="tab-pane fade" id="sp-103" role="tabpanel">
                <p class="big-title">Гинекология</p>
                <div id="accordion">
                  <div class="card">
                    <div class="card-header" id="headingOne">
                      <h5 class="mb-0">
                        <button class="btn btn-link" data-toggle="collapse" data-target="#coll1">
                          Основные направления
                        </button>
                      </h5>
                    </div>
                    <div id="coll1" class="collapse show" data-parent="#accordion">
                      <table class="price-table">
							  <thead>
								  <tr>
    								<th>Наименование</th>
    								<th>Цена(тг)</th>
    							  </tr>
							  </thead>
							  <tbody>
								  <?php 
								  	$datas = GetCardio();
								  	for($i=0;$i < 12; $i++){
								   	echo "<tr><td>".$datas[$i]["Наименование услуги"]."</td><td>".$datas[$i]["Цена"]."</td></tr>";
									}
								  ?>
							  </tbody>
						  </table>
                    </div>
                  </div>
                </div>
              </div>
			<div class="tab-pane fade" id="sp-104" role="tabpanel">
                <p class="big-title">Диагностика</p>
                <div id="accordion">
                  <div class="card">
                    <div class="card-header" id="headingOne">
                      <h5 class="mb-0">
                        <button class="btn btn-link" data-toggle="collapse" data-target="#coll1">
                          Прейскурант
                        </button>
                      </h5>
                    </div>
                    <div id="coll1" class="collapse show" data-parent="#accordion">
                      <table class="price-table">
							  <thead>
								  <tr>
    								<th>Наименование</th>
    								<th>Цена(тг)</th>
    							  </tr>
							  </thead>
							  <tbody>
								  <?php 
								  	$specCode = 308;
								  	$datas = GetPrice($specCode);
								  	for($i=0;$i < 12; $i++){ 
								   	echo "<tr><td>".$datas[$i]["Наименование услуги"]."</td><td>".$datas[$i]["Цена"]."</td></tr>";
									}
								  ?>
							  </tbody>
						  </table>
                    </div>
                  </div>
                </div>
              </div>
				<div class="tab-pane fade" id="sp-106" role="tabpanel">
                <p class="big-title">Терапия</p>
                <div id="accordion">
                  <div class="card">
                    <div class="card-header" id="headingOne">
                      <h5 class="mb-0">
                        <button class="btn btn-link" data-toggle="collapse" data-target="#coll1">
                          Прейскурант
                        </button>
                      </h5>
                    </div>
                    <div id="coll1" class="collapse show" data-parent="#accordion">
                      <table class="price-table">
							  <thead>
								  <tr>
    								<th>Наименование</th>
    								<th>Цена(тг)</th>
    							  </tr>
							  </thead>
							  <tbody>
								  <?php 
								  	$specCode = 307;
								  	$datas = GetPrice($specCode);
								  	for($i=0;$i < 3; $i++){ 
								   	echo "<tr><td>".$datas[$i]["Наименование услуги"]."</td><td>".$datas[$i]["Цена"]."</td></tr>";
									}
								  ?>
							  </tbody>
						  </table>
                    </div>
                  </div>
                </div>
              </div>
			<div class="tab-pane fade" id="sp-107" role="tabpanel">
                <p class="big-title">Неврология</p>
                <div id="accordion">
                  <div class="card">
                    <div class="card-header" id="headingOne">
                      <h5 class="mb-0">
                        <button class="btn btn-link" data-toggle="collapse" data-target="#coll1">
                          Прейскурант
                        </button>
                      </h5>
                    </div>
                    <div id="coll1" class="collapse show" data-parent="#accordion">
                      <table class="price-table">
							  <thead>
								  <tr>
    								<th>Наименование</th>
    								<th>Цена(тг)</th>
    							  </tr>
							  </thead>
							  <tbody>
								  <?php 
								  	$specCode = 305;
								  	$datas = GetPrice($specCode);
								  	for($i=0;$i < 8; $i++){ 
								   	echo "<tr><td>".$datas[$i]["Наименование услуги"]."</td><td>".$datas[$i]["Цена"]."</td></tr>";
									}
								  ?>
							  </tbody>
						  </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php require 'vendor/tpl/footer.php' ?>