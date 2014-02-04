<!DOCTYPE html>
<html>
  <head>
    <title><?php echo $title; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="css/style.css" rel="stylesheet" media="screen">
	
  </head>
  <body>
	<header class="b-body-header">
		<!-- ****** Header block ****** -->
		<div class="container">
			<div class="row">
				<div class="col-md-2 col-sm-2">
					<div class="b-logo"><a href="<?php echo base_url(); ?>">Эксторг.рф</a></div>
				</div>
				<div class="col-md-6 col-sm-6 hidden-xs">
					<div class="b-slogan">продажа дорожно-<br>строительной техники</div>
				</div>
				<div class="col-md-4 col-sm-4">
					<div class="b-help">
						<br><div class="b-cal-num">(351) 2-777-847</div>
						<!--<a href="#" class="b-button1">запросить обратный звонок</a>-->
					</div>
				</div>
			</div>
		</div>
		<!-- ****** Menu ****** -->
		<div class="b-menu">
			<div class="container">
				<nav class="navbar navbar-default navbar-static-top" role="navigation">
					<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					  <span class="sr-only">Toggle navigation</span>
					  <span class="icon-bar"></span>
					  <span class="icon-bar"></span>
					  <span class="icon-bar"></span>
					</button>
					<div class="b-title-menu-xs visible-xs">Меню</div>
					</div>
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
							<li><a href="<?php echo base_url(); ?>"><span>Главная</span></a></li>
							<li><a href="<?php echo base_url(); ?>excavator"><span>Экскаваторы</span></a></li>
							<li><a href="<?php echo base_url(); ?>drilling"><span>Установки бурения</span></a></li>
							<li><a href="<?php echo base_url(); ?>about"><span>О компании</span></a></li>
							<li><a href="<?php echo base_url(); ?>contacts"><span>Контакты</span></a></li>
						</ul>
					</div>
				</nav>
			</div>
		</div>
		<!--<!-- ****** Contact top from ****** 
		<div class="b-top-from-container">
			<div class="container">
				<form action="" class="b-top-from pull-right">
					<div class="b-title">Оставьте заявку <br>и мы с вами свяжемся</div>
					<div class="b-item-form">
						<input type="text" class="form-control" placeholder="Имя*">
					</div>
					<div class="b-item-form">
						<input type="text" class="form-control" placeholder="Фамилия*">
					</div>
					<div class="b-item-form">
						<input type="text" class="form-control" placeholder="Компания*">
					</div>
					<div class="b-item-form">
						<input type="text" class="form-control" placeholder="Телефон*">
					</div>
					<div class="b-button">
						<button class="btn b-button2">отправить</button>
					</div>
				</form>
			</div>
		</div>-->
		
		<!-- ****** Details block ****** -->
		<div class="b-details-block">
			<div class="container">
				<div class="row">
					<div class="col-md-2 col-sm-2 col-xs-2">
						<div class="b-item">Работаем<br>с 2003 года</div>
					</div>
					<div class="col-md-2 col-sm-2 col-xs-2">
						<div class="b-item">Поставки в любой<br>регион России</div>
					</div>
					<div class="col-md-2 col-sm-2 col-xs-2">
						<div class="b-item">Возможность<br>аренды техники</div>
					</div>
					<div class="col-md-2 col-sm-2 col-xs-2">
						<div class="b-item">Качественное сервисное<br>обслуживание</div>
					</div>
					<div class="col-md-2 col-sm-2 col-xs-2">
						<div class="b-item">Гибкие условия<br>сотрудничества</div>
					</div>
				</div>
			</div>
		</div>
	</header>