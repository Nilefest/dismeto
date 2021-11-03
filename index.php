<?php
require_once __DIR__ . '/dismeto/_scripts.php';
?>
<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<title>DiSMeTO</title>
	
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Prosto+One&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
	
	<link rel="stylesheet" href="/public/css/reboot.css?v=<?php echo DISMETO_VER; ?>">
	<link rel="stylesheet" href="/public/css/main.css?v=<?php echo DISMETO_VER; ?>">
</head>

<body>
	<header>
		<input type="hidden" id="doc_id" value="1">
		<div class="container">
			<div class="header_wrap">
				<a href="/index.php">
					<img src="/public/img/Logo.svg" alt="DiSMeTO">
				</a>
				<input type="button" class="change_lang" value="RU">
			</div>
		</div>
	</header>
	
	<section class="first_section">
		<div class="container">
			<div class="left_nav">
				<ul>
					<li>
						<a class="nav_about" href="/about_service.php">
							<img src="/public/img/ico_about.svg" alt="About med translator" class="nav_img nav_img_about">
							<p>О&nbsp;сервисе</p>
						</a>
					</li>
					<li>
						<a class="nav_translator" href="/doc_uzi.php">
							<img src="/public/img/ico_translator.svg" alt="To the med translator" class="nav_img nav_img_translator">
							<p>Переводчик<br>документов</p>
						</a>
					</li>
				</ul>
			</div>
			<div class="main_display">
				<h1>B2B онлайн сервис цифровой поддержки медицинского туризма</h1>
				<p>Предоставляет маркетинговые, информационно-коммуникационные и инструментальные услуги компаниям медицинского туризма, операторам телемедицины, организаторам оздоровительного туризма и др.</p>
			</div>
		</div>
	</section>
	<section class="future">
		<div class="container">
			<h3>Будущее полнофункционального <br>онлайн сервиса DiSMeTO</h3>
			<ul>
				<li>
					<p>Работа интерфейса сервиса более чем на 15 языках</p>
				</li>
				<li>
					<p>200+ языковых направлений перевода</p>
				</li>
				<li>
					<p>700+ разных типов личных медицинских документов пациентов</p>
				</li>
				<li>
					<p>Функционирование и обработка наиболее частотных типов личных медицинских документов и самых востребованных языков</p>
				</li>
				<li>
					<p>Постоянное развитие и наращивание возможностей сервиса</p>
				</li>
				<li>
					<p>Деятельность более чем в 45-50 странах Европы, Азии, Северной и Южной Америки в течение 3-х лет </p>
				</li>
				<li>
					<p>Предоставление услуг и техническая поддержка 2-5 тысяч международных компаний</p>
				</li>
				<li>
					<p>Объем перевода оригиналов личных медицинских документов пациентов на целевые языки 2-3 млн. страниц формата А4.</p>
				</li>
			</ul>
			<input type="button" class="go_to_start" value="🠝">
		</div>
	</section>
	
	<footer>
		<div class="container">
			<h4>Контакты</h4>
			<div class="contact_row">
				<div class="contacts">
					<h6>Руководитель проекта:</h6>
					<p>Александр Вихнин</p>
					<p>Telegram: @alexander_vikh</p>
					<p>Email: vikhnin.a.g@gmail.com</p>
					<p>Tel: +996500290854</p>
				</div>
				<div class="contacts">
					<h6>Административно - финансовые<br>вопросы:</h6>
					<p>Роза Турганбаева</p>
					<p>WhatsApp: +77058268171</p>
				</div>
				<div class="contacts">
					<h6>Отдел разработки:</h6>
					<p>Тарас Ляшко</p>
					<p>Telegram: @t_lya</p>
					<p>Email: developer.of.frontend@gmail.com</p>
					<p>Tel: +380933367533</p>
				</div>
			</div>
			<p class="rights">Авторское право (c) принадлежит DiSMeTO. Все права защищены.</p>
		</div>
	</footer>
	
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="/public/js/main.js?v=<?php echo DISMETO_VER; ?>"></script>
</body>

</html>
