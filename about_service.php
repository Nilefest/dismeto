<?php
require_once __DIR__ . '/dismeto/_scripts.php';
?>
<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<title>Про сервис | DiSMeTO</title>
	
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Prosto+One&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
	
	<link rel="stylesheet" href="/public/css/reboot.css?v=<?php echo DISMETO_VER; ?>">
	<link rel="stylesheet" href="/public/css/main.css?v=<?php echo DISMETO_VER; ?>">
</head>

<body>
	<header class="header_other_page">
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
	
	<section class="about">
		<div class="container">
			<div class="left_nav">
				<ul>
					<li>
						<a class="nav_main" href="/index.php">
							<img src="/public/img/ico_index.svg" alt="To the main" class="nav_img nav_img_main">
							<p>Главная</p>
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
			<div class="about_body">
				<div class="presentations">
					<h2>
						Ознакомиться с презентацией
					</h2>
					<div class="wrap_presentations">
						<div class="one_presentation">
							<a href="files/Digital_support_for_medical_tourism.pdf" target="_blank" class="open_presentation">
								<img src="/public/img/presentation_en.jpg" alt="" class="img_presentation">
							</a>
							<a href="files/Digital_support_for_medical_tourism.pdf" download="Digital support for medical tourism.pdf" class="download_presentation">
								English
							</a>
						</div>
						<div class="one_presentation">
							<a href="files/Supporto_digitale_al_turismo_medico.pdf" target="_blank" class="open_presentation">
								<img src="/public/img/presentation_it.jpg" alt="" class="img_presentation">
							</a>
							<a href="files/Supporto_digitale_al_turismo_medico.pdf" download="Supporto digitale al turismo medico.pdf" class="download_presentation">
								Italiano
							</a>
						</div>
						<div class="one_presentation">
							<a href="files/Digital_support_for_medical_tourism_ru.pdf" target="_blank" class="open_presentation">
								<img src="/public/img/presentation_ru.jpg" alt="" class="img_presentation">
							</a>
							<a href="files/Digital_support_for_medical_tourism_ru.pdf" download="Цифровая поддержка медицинского туризма.pdf" class="download_presentation">
								Русский
							</a>
						</div>
						<div class="one_presentation">
							<a href="files/Digital_support_for_medical_tourism_ua.pdf" target="_blank" class="open_presentation">
								<img src="/public/img/presentation_ua.jpg" alt="" class="img_presentation">
							</a>
							<a href="files/Digital_support_for_medical_tourism_ua.pdf" download="Цифрова підтримка медичного туризму.pdf" class="download_presentation">
								Українська
							</a>
						</div>
					</div>
				</div>
				<div class="about_this">
					<h2>
						О ресурсе
					</h2>
					<p class="block_1">
						В наше время все чаще можно наблюдать внедрение современных цифровых технологий в различные сферы жизни, включая и здравоохранение. Данный ресурс посвящен проблемам цифровой поддержки отдельных направлений здравоохранения. Медицинская составляющая тут остается главной, однако цифровизация существенно влияет на доступность и качество услуг здравоохранения. Это особенно заметно при лечении пациентов за пределами стран их постоянного проживания, получившее названия «медицинского туризма», в телемедицине, в туризме «за здоровьем» для пожилых (health tourism) и др.
					</p>
					<p class="block_2">
						Например, иностранному медицинскому учреждению для принятия решения о приеме пациента на лечение, необходимо получить и изучить его личные медицинские документы. Они должны быть на рабочем языке принимающего медицинского учреждения. Поэтому сервис поддержки медицинского туризма обязательно должен поддерживать высококачественный перевод личных медицинских документов пациентов с последующей верификацией качества, а это уже сфера IT-технологий. Необходимая технология сервиса цифровой поддержки медицинского туризма онлайн разработана и уже внедряется в сектор business to business.
					</p>
					<img class="block_3" src="/public/img/about_resourse.png" alt="About med-translator">
					<p class="block_4">
						Также ключевой услугой сервиса, которая выполняет значимую роль в информационно - коммуникационной технологии, является онлайн запрос зарубежного партнера – компании медицинского туризма, входящей в сервисную Сеть, о возможности принятия на лечение конкретного пациента, предоставление всех необходимых переводов медицинских документов и получение быстрого ответа.
					</p>
				</div>
				<div class="target_people">
					<h2>
						Целевая аудитория онлайн-сервиса
					</h2>
					<div class="all_targets">
						<div class="one_target">
							<img src="/public/img/target_diferent_countries.svg" alt="Medicine in diferent countries">
							<p>
								Компании медицинского туризма разных стран, работающие на&nbsp;выездной либо въездной медицинский туризм
							</p>
						</div>
						<div class="one_target">
							<img src="/public/img/target_old_people.svg" alt="Telemedicine">
							<p>
								Компании – организаторы «туризма за&nbsp;здоровьем для&nbsp;пожилых»
							</p>
						</div>
						<div class="one_target">
							<img src="/public/img/target_telemedicine.svg" alt="Telemedicine">
							<p>
								Компании телемедицины, оказывающие дистанционные услуги. Например,  консультации «второе&nbsp;мнение» из&nbsp;стран с&nbsp;другим&nbsp;языком
							</p>
						</div>
						<div class="one_target">
							<img src="/public/img/target_insurance.svg" alt="Telemedicine">
							<p>
								Отдельные функции сервиса могут быть использованы страховыми компаниями, предлагающими дополнительные услуги к&nbsp;стандартному полису обычным туристам, выезжающим на&nbsp;отдых за&nbsp;рубеж
							</p>
						</div>
					</div>
				</div>
				<div class="why_need">
					<p>
						На решение пациента лечится в конкретной клинике выбранной страны влияет удобное расположение страны - кандидата, включая транспортную доступность, высокое качество лечения и квалификации медицинского персонала.  
						<br><br>
						Одним из ключевых факторов является ценовая политика в сравнении со схожими центрами медицинского туризма. 
						<br><br>
						Также высоко ценится  оперативность отклика зарубежного медицинского учреждения за запрос об условиях и стоимости лечения, и минимизация издержек пациента до принятия решения о приеме его на лечение зарубежным медицинским учреждением.
					</p>
				</div>
			</div>
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
