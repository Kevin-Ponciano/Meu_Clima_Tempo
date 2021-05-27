<?php
  // Definir alguns valores
  $apiKey = "fa23f4b681863cc75e95c5d6a5e9b597";
  $cityId = "3444924";
  $lat = "-20.121";
  $lon = "-40.3074";
  $url = "https://api.openweathermap.org/data/2.5/weather?lat=$lat&lon=$lon&units=metric&appid=$apiKey";
  $url2 = "https://api.openweathermap.org/data/2.5/onecall?lat=$lat&lon=$lon&units=metric&appid=$apiKey";

  // Fazer a requisição ao WS
  $response = file_get_contents($url);
  $response2 = file_get_contents($url2);

  // Processar o resultado
  $data = json_decode($response);
  $data2 = json_decode($response2);
  
  //Hoje
  $temperatura = intval($data->main->temp);//intval tira as casas decimais
  $humidade = $data->main->humidity;
  $vento = $data->wind->speed;

  //Privisão do dia 01
  $temp_max1 = intval($data2->daily[1]->temp->max);
  $temp_min1 = intval($data2->daily[1]->temp->min);

  //Privisão do dia 02
  $temp_max2 = intval($data2->daily[2]->temp->max);
  $temp_min2 = intval($data2->daily[2]->temp->min);
  
  //Privisão do dia 03
  $temp_max3 = intval($data2->daily[3]->temp->max);
  $temp_min3 = intval($data2->daily[3]->temp->min);

  //Privisão do dia 04
  $temp_max4 = intval($data2->daily[4]->temp->max);
  $temp_min4 = intval($data2->daily[4]->temp->min);

  //Privisão do dia 05
  $temp_max5 = intval($data2->daily[5]->temp->max);
  $temp_min5 = intval($data2->daily[5]->temp->min);

  //Privisão do dia 06
  $temp_max6 = intval($data2->daily[6]->temp->max);
  $temp_min6 = intval($data2->daily[6]->temp->min);

  //Direão do vento

  //
?>

<!DOCTYPE html>
<html lang="pt_BR">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		<title>Ponciano Clima</title>
    <link rel="shortcut icon" sizes="16x16" href="images/logo.png" />

    <!--CSS e JS da leaflet-->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
    integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
    crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
      integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
      crossorigin="">
    </script>

    <!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Roboto:300,400,700|" rel="stylesheet" type="text/css">
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">

		<!-- Loading main css file -->
		<link rel="stylesheet" href="style.css">
	</head>


	<body>
		
		<div class="site-content">
			<div class="site-header">
				<div class="container">
					<a href="index.php" class="branding">
						<img src="images/logo.png" alt="" class="logo">
						<div class="logo-type">
							<h1 class="site-title">Ponciano Clima</h1>
							<small class="site-description">Preveja o futuro conosco</small>
						</div>
					</a>
          
          <div class="main-navigation">
						<button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
						<ul class="menu">
							<li class="menu-item"><a href="index.php">Vitória</a></li>
							<li class="menu-item"><a href="cariacica.php">Cariacica</a></li>
							<li class="menu-item"><a href="vilavelha.php">Vila Velha</a></li>
							<li class="menu-item current-menu-item"><a href="serra.php">Serra</a></li>
							<li class="menu-item"><a href="https://openweathermap.org/" target="_blank">API</a></li>
						</ul> <!-- .menu -->
					</div> <!-- .main-navigation -->


					<div class="mobile-navigation"></div>

				</div>
			</div> <!-- .site-header -->

			<div class="hero" data-bg-image="images/ceu.jpg">
        
        <!--
				<div class="container"> 
					<form action="#" class="find-location">
          	<input type="text" placeholder="Find your location...">
						<input type="submit" value="Find">
					</form>
          
				</div>
        -->
			</div>
			<div class="forecast-table">
				<div class="container">
					<div class="forecast-container">
						<div class="today forecast">
							<div class="forecast-header">
								<div class="day" id="semana"></div>
								<div class="date" id="mes"></div>
							</div> <!-- .forecast-header -->
							<div class="forecast-content">
								<div class="location"><?= $data->name ?></div>
								<div class="degree">
									<div class="num"><?= $temperatura?><sup>o</sup>C</div>
									<div class="forecast-icon">
										<img src="http://openweathermap.org/img/wn/<?=$data2->daily[0]->weather[0]->icon;?>@2x.png" alt="icon_weather" width=100>
									</div>	
								</div>
								<span><img src="images/icon-umberella.png" alt=""><?=$humidade?>%</span>
								<span><img src="images/icon-wind.png" alt=""><?=$vento?> km/h</span>
							</div>
						</div>
						<div class="forecast">
							<div class="forecast-header">
								<div class="day" id="semana1"></div>
							</div> <!-- .forecast-header -->
							<div class="forecast-content">
								<div class="forecast-icon">
									<img src="http://openweathermap.org/img/wn/<?=$data2->daily[1]->weather[0]->icon;?>@2x.png" alt="icon_weather" width=90>
								</div>
								<div class="degree"><?=$temp_max1?><sup>o</sup>C</div>
								<small><?=$temp_min1?><sup>o</sup></small>
							</div>
						</div>
						<div class="forecast">
							<div class="forecast-header">
								<div class="day" id="semana2"></div>
							</div> <!-- .forecast-header -->
							<div class="forecast-content">
								<div class="forecast-icon">
									<img src="http://openweathermap.org/img/wn/<?=$data2->daily[2]->weather[0]->icon;?>@2x.png" alt="icon_weather" width=90>
								</div>
								<div class="degree"><?=$temp_max2?><sup>o</sup>C</div>
								<small><?=$temp_min2?><sup>o</sup></small>
							</div>
						</div>
						<div class="forecast">
							<div class="forecast-header">
								<div class="day" id="semana3"></div>
							</div> <!-- .forecast-header -->
							<div class="forecast-content">
								<div class="forecast-icon">
									<img src="http://openweathermap.org/img/wn/<?=$data2->daily[3]->weather[0]->icon;?>@2x.png" alt="icon_weather" width=90>
								</div>
								<div class="degree"><?=$temp_max3?><sup>o</sup>C</div>
								<small><?=$temp_min3?><sup>o</sup></small>
							</div>
						</div>
						<div class="forecast">
							<div class="forecast-header">
								<div class="day" id="semana4"></div>
							</div> <!-- .forecast-header -->
							<div class="forecast-content">
								<div class="forecast-icon">
									<img src="http://openweathermap.org/img/wn/<?=$data2->daily[4]->weather[0]->icon;?>@2x.png" alt="icon_weather" width=90>
								</div>
								<div class="degree"><?=$temp_max4?><sup>o</sup>C</div>
								<small><?=$temp_min4?><sup>o</sup></small>
							</div>
						</div>
						<div class="forecast">
							<div class="forecast-header">
								<div class="day" id="semana5"></div>
							</div> <!-- .forecast-header -->
							<div class="forecast-content">
								<div class="forecast-icon">
									<img src="http://openweathermap.org/img/wn/<?=$data2->daily[5]->weather[0]->icon;?>@2x.png" alt="icon_weather" width=90>
								</div>
								<div class="degree"><?=$temp_max5?><sup>o</sup>C</div>
								<small><?=$temp_min5?><sup>o</sup></small>
							</div>
						</div>
						<div class="forecast">
							<div class="forecast-header">
								<div class="day"id="semana6"></div>
							</div> <!-- .forecast-header -->
							<div class="forecast-content">
								<div class="forecast-icon">
									<img src="http://openweathermap.org/img/wn/<?=$data2->daily[6]->weather[0]->icon;?>@2x.png" alt="icon_weather" width=90>
								</div>
								<div class="degree"><?=$temp_max6?><sup>o</sup>C</div>
								<small><?=$temp_min6?><sup>o</sup></small>
							</div>
						</div>
					</div>
				</div>
			</div>

			<footer class="site-footer">
				<div class="container">
					<div class="row">						
						<div class="col-md-4 col-md-offset-4">
							<div class="social-links">
								<a href="https://www.facebook.com/KevinPonciano2017" target="_blank"><i class="fa fa-facebook"></i></a>
								<a href="https://github.com/Kevin-Ponciano" target="_blank"><i class="fa fa-github"></i></a>
								<a href="https://www.linkedin.com/in/kevin-ponciano-a462661a3/" target="_blank"><i class="fa fa-linkedin"></i></a>
						  </div>
						</div>
					</div>

					<p class="colophon">
            Copyright 2021 Kevin Ponciano.<br>
            <a href="https://www.themezy.com/free-website-templates" target="_blank">Designed CSS by Themezy.<br></a>
            Fundo foto criado por evening_tao
            <a href='https://br.freepik.com/fotos/fundo' target="_blank"> br.freepik.com.<br></a> 
            All rights reserved</p>
				</div>
			</footer> <!-- .site-footer -->
		</div>
		
		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
    <script src="script.js"></script>
	</body>

</html>