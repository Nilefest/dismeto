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
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
	
	<link rel="stylesheet" href="/public/css/reboot.css?v=<?php echo DISMETO_VER; ?>">
	<link rel="stylesheet" href="/public/css/main.css?v=<?php echo DISMETO_VER; ?>">
</head>

<body>
    <input type="hidden" name="doc_type" class="doc_type" value="urine_research">
    
	<header class="header_other_page">
		<input type="hidden" id="doc_id" value="1">
		<div class="container">
			<div class="header_wrap">
				<a href="/index.php">
					<img src="/public/img/Logo.svg" alt="DiSMeTO">
				</a>
				<div class="translator_nav">
				<ul>
					<li>
						<a class="nav_main" href="/index.php">
							<img src="/public/img/ico_index.svg" alt="To the main" class="nav_img nav_img_main">
							<p>Главная</p>
						</a>
					</li>
					<li>
						<a class="nav_about" href="/about_service.php">
							<img src="/public/img/ico_about.svg" alt="About med translator" class="nav_img nav_img_about">
							<p>О&nbsp;сервисе</p>
						</a>
					</li>
				</ul>
			</div>
				<input type="button" class="change_lang" value="RU">
			</div>
		</div>
	</header>
	
	<section class="all-page">
		<div class="container">
			<div class="translation_wrap">
				<div class="select_doc">
					<label>Выберите документ:</label>
					<select name="select_doc" id="select_doc">
						<option class="placeholder" value="placeholder" disabled>Выберите документ</option>
						<option value="/doc_uzi.php">УЗД Щитовидной железы</option>
						<option value="/doc_blood_research.php">Общий анализ крови</option>
						<option value="/doc_urine_research.php" selected>Анализ мочи</option>
					</select>
				</div>
				<div class="translate_from">
					<label>Перекласти з:</label>
					<select name="language" id="from_lang">
						<option value="placeholder" selected disabled>Выберіть мову</option>
						<option value="ru">Русский</option>
						<option value="uk">Українська</option>
						<option value="en">English</option>
						<option value="it">Italiano</option>
					</select>
				</div>
				<div class="translate_to">
					<label>Перекласти на:</label>
					<select name="language" id="to_lang">
						<option value="ru">Русский</option>
						<option value="uk">Українська</option>
						<option value="en">English</option>
						<option value="it">Italiano</option>
					</select>
					<input id="btn_to_lang" type="button" value="Translate">
				</div>
			</div>
		</div>
		<div class="container">
			<div class="docs_wrap">
				<div class="original_doc">

					<form class="doc_urine original_doc_uk">
						<div class="doc_head">
							<div class="name-tools only-input">
								<input type="text" data-typeTransform="translate-complex" name="name_tools" placeholder="Назва приладу. Наприклад: ИК анализатор Инфраматик 8800" value="ИК анализатор Инфраматик 8800">
							</div>
							<p class="tip_name-tools">(назва обладнання)</p>
							<div class="patient-data">
								<div class="doctor label-input">
									<label class="tip_doctor">Лікар</label>
									<input type="text" data-typeTransform="translite" name="doctor" value="Кузнецов Ю. М.">
								</div>
								<div class="patient label-input">
									<label class="tip_patient">Пацієнт</label>
									<input type="text" data-typeTransform="translite" name="patient" value="Жумабаев В. Н.">
								</div>
								<div class="date label-input">
									<label class="tip_date">від</label>
									<input type="date" data-typeTransform="date" name="date" value="2021-04-15">
								</div>
							</div>
						</div>
						<div class="doc_body">
							<p class="name_research">
								Загальний аналіз сечі
							</p>
							<div class="label-two-input">
								<div class="labels">
									<h6>Показник</h6>
								</div>
								<div class="inputs">
									<h6>Норма</h6>
									<h6>Дані пацієнта</h6>
								</div>
							</div>
							<div class="label-two-input">
								<div class="labels">
									<label>Колір</label>
								</div>
								<div class="inputs">
									<input type="numb" data-typeTransform="translate" name="norm_ur_color" value="Солом'яний">
									<input type="numb" data-typeTransform="translate" name="ur_color" value="">
								</div>
							</div>
							<div class="label-two-input">
								<div class="labels">
									<label>Зовнішній вигляд</label>
								</div>
								<div class="inputs">
									<input type="numb" data-typeTransform="translate" name="norm_ur_view" value="Прозора">
									<input type="numb" data-typeTransform="translate" name="ur_view" value="">
								</div>
							</div>
							<div class="label-two-input">
								<div class="labels">
									<label>PH</label>
								</div>
								<div class="inputs">
									<input type="numb" data-typeTransform="translate" name="norm_ur_ph" value="4.5-8.0">
									<input type="numb" data-typeTransform="translate" name="ur_ph" value="">
								</div>
							</div>
							<div class="label-two-input">
								<div class="labels">
									<label>Густина (г/л)</label>
								</div>
								<div class="inputs">
									<input type="numb" data-typeTransform="translate" name="norm_ur_density" value="1010-1024">
									<input type="numb" data-typeTransform="translate" name="ur_density" value="">
								</div>
							</div>
							<div class="label-two-input">
								<div class="labels">
									<label>Білок</label>
								</div>
								<div class="inputs">
									<input type="numb" data-typeTransform="translate" name="norm_ur_protein" value="'Сліди' або '>140мг/л'">
									<input type="numb" data-typeTransform="translate" name="ur_protein" value="">
								</div>
							</div>
							<div class="label-two-input">
								<div class="labels">
									<label>Глікозурія</label>
								</div>
								<div class="inputs">
									<input type="numb" data-typeTransform="translate" name="norm_ur_glicosurium" value="Негативний">
									<input type="numb" data-typeTransform="translate" name="ur_glicosurium" value="">
								</div>
							</div>
							<div class="label-two-input">
								<div class="labels">
									<label>Кетони</label>
								</div>
								<div class="inputs">
									<input type="numb" data-typeTransform="translate" name="norm_ur_ketones" value="Негативний">
									<input type="numb" data-typeTransform="translate" name="ur_ketones" value="">
								</div>
							</div>
							<div class="label-two-input">
								<div class="labels">
									<label>Гемоглобін</label>
								</div>
								<div class="inputs">
									<input type="numb" data-typeTransform="translate" name="norm_ur_hemoglobin" value="Немає">
									<input type="numb" data-typeTransform="translate" name="ur_hemoglobin" value="">
								</div>
							</div>
							<div class="label-two-input">
								<div class="labels">
									<label>Гній</label>
								</div>
								<div class="inputs">
									<input type="numb" data-typeTransform="translate" name="norm_ur_pus" value="Немає">
									<input type="numb" data-typeTransform="translate" name="ur_pus" value="">
								</div>
							</div>
							<div class="label-two-input">
								<div class="labels">
									<label>Жовчних пігментів</label>
								</div>
								<div class="inputs">
									<input type="numb" data-typeTransform="translate" name="norm_ur_gpigments" value="Негативний">
									<input type="numb" data-typeTransform="translate" name="ur_gpigments" value="">
								</div>
							</div>
							<div class="label-two-input">
								<div class="labels">
									<label>Уробіліноген</label>
								</div>
								<div class="inputs">
									<input type="numb" data-typeTransform="translate" name="norm_ur_urobilinogen" value="Норма">
									<input type="numb" data-typeTransform="translate" name="ur_urobilinogen" value="">
								</div>
							</div>
							<div class="label-two-input">
								<div class="labels">
									<label>Нітрити</label>
								</div>
								<div class="inputs">
									<input type="numb" data-typeTransform="translate" name="norm_ur_nitrites" value="Негативний">
									<input type="numb" data-typeTransform="translate" name="ur_nitrites" value="">
								</div>
							</div>
							<div class="label-textarea">
								<label>Мікроскопія осаду</label>
								<textarea data-typeTransform="translate-complex" name="ur_sediment">Трохи крові (5-10 у полi  зору). Деяка кількість лейкоцитів (до 20 в поле зору). Бактеріальна флора</textarea>
							</div>
						</div>
						<div class="doc_footer">
						</div>
					</form>

					<form class="doc_urine original_doc_ru">
						<div class="doc_head">
							<div class="name-tools only-input">
								<input type="text" data-typeTransform="translate-complex" name="name_tools" placeholder="Название оборудования. Например: ИК анализатор Инфраматик 8800" value="ИК анализатор Инфраматик 8800">
							</div>
							<p class="tip_name-tools">(Название оборудования)</p>
							<div class="patient-data">
								<div class="doctor label-input">
									<label class="tip_doctor">Врач</label>
									<input type="text" data-typeTransform="translite" name="doctor" value="Кузнецов Ю. М.">
								</div>
								<div class="patient label-input">
									<label class="tip_patient">Пациент</label>
									<input type="text" data-typeTransform="translite" name="patient" value="Жумабаев В. Н.">
								</div>
								<div class="date label-input">
									<label class="tip_date">от</label>
									<input type="date" data-typeTransform="date" name="date" value="2021-04-15">
								</div>
							</div>
						</div>
						<div class="doc_body">
							<p class="name_research">
								Общий Анализ Мочи
							</p>
							<div class="label-two-input">
								<div class="labels">
									<h6>Показатель</h6>
								</div>
								<div class="inputs">
									<h6>Норма</h6>
									<h6>Данные пациента</h6>
								</div>
							</div>
							<div class="label-two-input">
								<div class="labels">
									<label>Цвет</label>
								</div>
								<div class="inputs">
									<input type="numb" data-typeTransform="translate" name="norm_ur_color" value="Соломенный">
									<input type="numb" data-typeTransform="translate" name="ur_color" value="">
								</div>
							</div>
							<div class="label-two-input">
								<div class="labels">
									<label>Внешний вид</label>
								</div>
								<div class="inputs">
									<input type="numb" data-typeTransform="translate" name="norm_ur_view" value="Прозрачная">
									<input type="numb" data-typeTransform="translate" name="ur_view" value="">
								</div>
							</div>
							<div class="label-two-input">
								<div class="labels">
									<label>PH</label>
								</div>
								<div class="inputs">
									<input type="numb" data-typeTransform="translate" name="norm_ur_ph" value="4.5-8.0">
									<input type="numb" data-typeTransform="translate" name="ur_ph" value="">
								</div>
							</div>
							<div class="label-two-input">
								<div class="labels">
									<label>Плотность (г/л)</label>
								</div>
								<div class="inputs">
									<input type="numb" data-typeTransform="translate" name="norm_ur_density" value="1010-1024">
									<input type="numb" data-typeTransform="translate" name="ur_density" value="">
								</div>
							</div>
							<div class="label-two-input">
								<div class="labels">
									<label>Белок</label>
								</div>
								<div class="inputs">
									<input type="numb" data-typeTransform="translate" name="norm_ur_protein" value='"Следы" или ">140мг/л"'>
									<input type="numb" data-typeTransform="translate" name="ur_protein" value="">
								</div>
							</div>
							<div class="label-two-input">
								<div class="labels">
									<label>Гликозурия</label>
								</div>
								<div class="inputs">
									<input type="numb" data-typeTransform="translate" name="norm_ur_glicosurium" value="Отрицательный">
									<input type="numb" data-typeTransform="translate" name="ur_glicosurium" value="">
								</div>
							</div>
							<div class="label-two-input">
								<div class="labels">
									<label>Кетоны</label>
								</div>
								<div class="inputs">
									<input type="numb" data-typeTransform="translate" name="norm_ur_ketones" value="Отрицательный">
									<input type="numb" data-typeTransform="translate" name="ur_ketones" value="">
								</div>
							</div>
							<div class="label-two-input">
								<div class="labels">
									<label>Гемоглобин</label>
								</div>
								<div class="inputs">
									<input type="numb" data-typeTransform="translate" name="norm_ur_hemoglobin" value="Нет">
									<input type="numb" data-typeTransform="translate" name="ur_hemoglobin" value="">
								</div>
							</div>
							<div class="label-two-input">
								<div class="labels">
									<label>Гной</label>
								</div>
								<div class="inputs">
									<input type="numb" data-typeTransform="translate" name="norm_ur_pus" value="Нет">
									<input type="numb" data-typeTransform="translate" name="ur_pus" value="">
								</div>
							</div>
							<div class="label-two-input">
								<div class="labels">
									<label>Желчные Пигменты</label>
								</div>
								<div class="inputs">
									<input type="numb" data-typeTransform="translate" name="norm_ur_gpigments" value="Отрицательный">
									<input type="numb" data-typeTransform="translate" name="ur_gpigments" value="">
								</div>
							</div>
							<div class="label-two-input">
								<div class="labels">
									<label>Уробилиноген</label>
								</div>
								<div class="inputs">
									<input type="numb" data-typeTransform="translate" name="norm_ur_urobilinogen" value="Норма">
									<input type="numb" data-typeTransform="translate" name="ur_urobilinogen" value="">
								</div>
							</div>
							<div class="label-two-input">
								<div class="labels">
									<label>Нитриты</label>
								</div>
								<div class="inputs">
									<input type="numb" data-typeTransform="translate" name="norm_ur_nitrites" value="Отрицательный">
									<input type="numb" data-typeTransform="translate" name="ur_nitrites" value="">
								</div>
							</div>
							<div class="label-textarea">
								<label>Микроскопия Осадка</label>
								<textarea data-typeTransform="translate-complex" name="ur_sediment">Немного крови , (5-10 в поле зрения). Некоторое количество лейкоцитов (до 20 в поле зрения). Бактериальная флора</textarea>
							</div>
						</div>
						<div class="doc_footer">
						</div>
					</form>

					<form class="doc_urine original_doc_en">
						<div class="doc_head">
							<div class="name-tools only-input">
								<input type="text" data-typeTransform="translate-complex" name="name_tools" placeholder="Equipment name. For example:KONTRON Sigma Iris 210. Electronic linear probe 7.5 MHz and convex - 3.5 MHz" value="">
							</div>
							<p class="tip_name-tools">(name of equipment)</p>
							<div class="patient-data">
								<div class="doctor label-input">
									<label class="tip_doctor">Doctor</label>
									<input type="text" data-typeTransform="translite" name="doctor" value="Kuznecov U. M.">
								</div>
								<div class="patient label-input">
									<label class="tip_patient">A patient</label>
									<input type="text" data-typeTransform="translite" name="patient" value="Smith V. N.">
								</div>
								<div class="date label-input">
									<label class="tip_date">dated</label>
									<input type="date" data-typeTransform="date" name="date" value="2021-04-15">
								</div>
							</div>
						</div>
						<div class="doc_body">
							<p class="name_research">
								General urine analysis
							</p>
							<div class="label-two-input">
								<div class="labels">
									<h6>Indicator</h6>
								</div>
								<div class="inputs">
									<h6>Normal value</h6>
									<h6>Patient data</h6>
								</div>
							</div>
							<div class="label-two-input">
								<div class="labels">
									<label>Color</label>
								</div>
								<div class="inputs">
									<input type="numb" data-typeTransform="translate" name="norm_ur_color" value="Straw">
									<input type="numb" data-typeTransform="translate" name="ur_color" value="">
								</div>
							</div>
							<div class="label-two-input">
								<div class="labels">
									<label>Appearance</label>
								</div>
								<div class="inputs">
									<input type="numb" data-typeTransform="translate" name="norm_ur_view" value="Transparent">
									<input type="numb" data-typeTransform="translate" name="ur_view" value="">
								</div>
							</div>
							<div class="label-two-input">
								<div class="labels">
									<label>PH</label>
								</div>
								<div class="inputs">
									<input type="numb" data-typeTransform="translate" name="norm_ur_ph" value="4.5-8.0">
									<input type="numb" data-typeTransform="translate" name="ur_ph" value="">
								</div>
							</div>
							<div class="label-two-input">
								<div class="labels">
									<label>Density (g/l)</label>
								</div>
								<div class="inputs">
									<input type="numb" data-typeTransform="translate" name="norm_ur_density" value="1010-1024">
									<input type="numb" data-typeTransform="translate" name="ur_density" value="">
								</div>
							</div>
							<div class="label-two-input">
								<div class="labels">
									<label>Protein</label>
								</div>
								<div class="inputs">
									<input type="numb" data-typeTransform="translate" name="norm_ur_protein" value="'Traces' or '>140mg/l'">
									<input type="numb" data-typeTransform="translate" name="ur_protein" value="">
								</div>
							</div>
							<div class="label-two-input">
								<div class="labels">
									<label>Glycosuria</label>
								</div>
								<div class="inputs">
									<input type="numb" data-typeTransform="translate" name="norm_ur_glicosurium" value="Negative">
									<input type="numb" data-typeTransform="translate" name="ur_glicosurium" value="">
								</div>
							</div>
							<div class="label-two-input">
								<div class="labels">
									<label>Ketones</label>
								</div>
								<div class="inputs">
									<input type="numb" data-typeTransform="translate" name="norm_ur_ketones" value="Negative">
									<input type="numb" data-typeTransform="translate" name="ur_ketones" value="">
								</div>
							</div>
							<div class="label-two-input">
								<div class="labels">
									<label>Hemoglobin</label>
								</div>
								<div class="inputs">
									<input type="numb" data-typeTransform="translate" name="norm_ur_hemoglobin" value="No">
									<input type="numb" data-typeTransform="translate" name="ur_hemoglobin" value="">
								</div>
							</div>
							<div class="label-two-input">
								<div class="labels">
									<label>Pus</label>
								</div>
								<div class="inputs">
									<input type="numb" data-typeTransform="translate" name="norm_ur_pus" value="No">
									<input type="numb" data-typeTransform="translate" name="ur_pus" value="">
								</div>
							</div>
							<div class="label-two-input">
								<div class="labels">
									<label>Gallery pigments</label>
								</div>
								<div class="inputs">
									<input type="numb" data-typeTransform="translate" name="norm_ur_gpigments" value="Negative">
									<input type="numb" data-typeTransform="translate" name="ur_gpigments" value="">
								</div>
							</div>
							<div class="label-two-input">
								<div class="labels">
									<label>Urobilinogen</label>
								</div>
								<div class="inputs">
									<input type="numb" data-typeTransform="translate" name="norm_ur_urobilinogen" value="Norm">
									<input type="numb" data-typeTransform="translate" name="ur_urobilinogen" value="">
								</div>
							</div>
							<div class="label-two-input">
								<div class="labels">
									<label>Nitrites</label>
								</div>
								<div class="inputs">
									<input type="numb" data-typeTransform="translate" name="norm_ur_nitrites" value="Negative">
									<input type="numb" data-typeTransform="translate" name="ur_nitrites" value="">
								</div>
							</div>
							<div class="label-textarea">
								<label>Sediment Microscopy</label>
								<textarea data-typeTransform="translate-complex" name="ur_sediment">A little blood, 5-10 usefulness. A certain number of leukocytes (up to 20 in the field of vision). Bacterial flora</textarea>
							</div>
						</div>
						<div class="doc_footer">
						</div>
					</form>

					<form class="doc_urine original_doc_it">
						<div class="doc_head">
							<div class="name-tools only-input">
								<input type="text" data-typeTransform="translate-complex" name="name_tools" placeholder="Name tool" value="KONTRON Sigma Iris 210">
							</div>
							<p class="tip_name-tools">(nome dell'attrezzatura)</p>
							<div class="patient-data">
								<div class="doctor label-input">
									<label class="tip_doctor">Medico</label>
									<input type="text" data-typeTransform="translite" name="doctor" value="Kuznecov U. M.">
								</div>
								<div class="patient label-input">
									<label class="tip_patient">Nome del paziente</label>
									<input type="text" data-typeTransform="translite" name="patient" value="Smith V. N.">
								</div>
								<div class="date label-input">
									<label class="tip_date">Data d’accertamento</label>
									<input type="date" data-typeTransform="date" name="date" value="2021-04-15">
								</div>
							</div>
						</div>
						<div class="doc_body">
							<p class="name_research">
								Esame urine
							</p>
							<div class="label-two-input">
								<div class="labels">
									<h6>Indicatore</h6>
								</div>
								<div class="inputs">
									<h6>Valore normale</h6>
									<h6>Dati del paziente</h6>
								</div>
							</div>
							<div class="label-two-input">
								<div class="labels">
									<label>Colore</label>
								</div>
								<div class="inputs">
									<input type="numb" data-typeTransform="translate" name="norm_ur_color" value="paglierino">
									<input type="numb" data-typeTransform="translate" name="ur_color" value="">
								</div>
							</div>
							<div class="label-two-input">
								<div class="labels">
									<label>Aspetto</label>
								</div>
								<div class="inputs">
									<input type="numb" data-typeTransform="translate" name="norm_ur_view" value="Trasparente">
									<input type="numb" data-typeTransform="translate" name="ur_view" value="">
								</div>
							</div>
							<div class="label-two-input">
								<div class="labels">
									<label>PH</label>
								</div>
								<div class="inputs">
									<input type="numb" data-typeTransform="translate" name="norm_ur_ph" value="4.5-8.0">
									<input type="numb" data-typeTransform="translate" name="ur_ph" value="">
								</div>
							</div>
							<div class="label-two-input">
								<div class="labels">
									<label>Densità (g/l)</label>
								</div>
								<div class="inputs">
									<input type="numb" data-typeTransform="translate" name="norm_ur_density" value="1010-1024">
									<input type="numb" data-typeTransform="translate" name="ur_density" value="">
								</div>
							</div>
							<div class="label-two-input">
								<div class="labels">
									<label>Proteine</label>
								</div>
								<div class="inputs">
									<input type="numb" data-typeTransform="translate" name="norm_ur_protein" value="'Tracce' або '>140mg/l'">
									<input type="numb" data-typeTransform="translate" name="ur_protein" value="">
								</div>
							</div>
							<div class="label-two-input">
								<div class="labels">
									<label>Glicosuria</label>
								</div>
								<div class="inputs">
									<input type="numb" data-typeTransform="translate" name="norm_ur_glicosurium" value="Negativa">
									<input type="numb" data-typeTransform="translate" name="ur_glicosurium" value="">
								</div>
							</div>
							<div class="label-two-input">
								<div class="labels">
									<label>Chetoni</label>
								</div>
								<div class="inputs">
									<input type="numb" data-typeTransform="translate" name="norm_ur_ketones" value="Negativi">
									<input type="numb" data-typeTransform="translate" name="ur_ketones" value="">
								</div>
							</div>
							<div class="label-two-input">
								<div class="labels">
									<label>Emoglobina</label>
								</div>
								<div class="inputs">
									<input type="numb" data-typeTransform="translate" name="norm_ur_hemoglobin" value="No">
									<input type="numb" data-typeTransform="translate" name="ur_hemoglobin" value="">
								</div>
							</div>
							<div class="label-two-input">
								<div class="labels">
									<label>Pus</label>
								</div>
								<div class="inputs">
									<input type="numb" data-typeTransform="translate" name="norm_ur_pus" value="No">
									<input type="numb" data-typeTransform="translate" name="ur_pus" value="">
								</div>
							</div>
							<div class="label-two-input">
								<div class="labels">
									<label>Pigmenti biliari</label>
								</div>
								<div class="inputs">
									<input type="numb" data-typeTransform="translate" name="norm_ur_gpigments" value="Negativi">
									<input type="numb" data-typeTransform="translate" name="ur_gpigments" value="">
								</div>
							</div>
							<div class="label-two-input">
								<div class="labels">
									<label>Urobilinogeno</label>
								</div>
								<div class="inputs">
									<input type="numb" data-typeTransform="translate" name="norm_ur_urobilinogen" value="Normale">
									<input type="numb" data-typeTransform="translate" name="ur_urobilinogen" value="">
								</div>
							</div>
							<div class="label-two-input">
								<div class="labels">
									<label>Nitriti</label>
								</div>
								<div class="inputs">
									<input type="numb" data-typeTransform="translate" name="norm_ur_nitrites" value="Negativi">
									<input type="numb" data-typeTransform="translate" name="ur_nitrites" value="">
								</div>
							</div>
							<div class="label-textarea">
								<label>Microscopia dei sedimenti</label>
								<textarea data-typeTransform="translate-complex" name="ur_sediment">Qualche emazia (5-10 x campo). Discreto numero di leucociti (fino a 20 x campo), in parte ammassati. Flora batterica</textarea>
							</div>
						</div>
						<div class="doc_footer">
						</div>
					</form>
				</div>

				<div class="target_doc target_urina">
					<div class="preloader">
						<div class="preloader__row">
							<div class="preloader__item"></div>
							<div class="preloader__item"></div>
						</div>
					</div>
					
					<D class="target_doc_ru">
						<TL>ИК анализатор Инфраматик 8800</TL>
						<FK>(название оборудования)</FK>
						<DM>
							<TIP>Врач:</TIP>
							<VAL>Кузнецов Ю. М.</VAL>
						</DM>
						<PAT>
							<TIP>Пациент:</TIP>
							<VAL>Жумабаев В. Н.</VAL>
						</PAT>
						<DAT>
							<TIP>от</TIP>
							<VAL>15.04.2021</VAL>
						</DAT>
						<NAM>Общий анализ мочи</NAM>
						<N1>
							<SN1>
								<FCL>Показатель</FCL>
								<FCL>Данные пациента</FCL>
							</SN1>
						</N1>
						<N2>
							<SN1>
								<NCL>Цвет</NCL>
								<FCL>Соломенный</FCL>
							</SN1>
							<SN2>
								<NCL>Внешний вид</NCL>
								<FCL>Прозрачная</FCL>
							</SN2>
							<SN3>
								<NCL>PH</NCL>
								<FCL>6.2</FCL>
							</SN3>
							<SN4>
								<NCL>Плотность (г/л)</NCL>
								<FCL>1015</FCL>
							</SN4>
							<SN5>
								<NCL>Белок</NCL>
								<FCL>Следы</FCL>
							</SN5>
							<SN6>
								<NCL>Гликозурия</NCL>
								<FCL>Отрицательный</FCL>
							</SN6>
							<SN7>
								<NCL>Кетоны</NCL>
								<FCL>Отрицательный</FCL>
							</SN7>
							<SN8>
								<NCL>Гемоглобин</NCL>
								<FCL>Нет</FCL>
							</SN8>
							<SN9>
								<NCL>Гной</NCL>
								<FCL>Нет</FCL>
							</SN9>
							<SN10>
								<NCL>Желчные пигменты</NCL>
								<FCL>Отрицательный</FCL>
							</SN10>
							<SN11>
								<NCL>Уробилиноген</NCL>
								<FCL>Норма</FCL>
							</SN11>
							<SN12>
								<NCL>Нитриты</NCL>
								<FCL>Отрицательный</FCL>
							</SN12>
						</N2>
						<N3>
							<SN1>
								<NCL>Микроскопия Осадка</NCL>
								<FCL>Немного крови , (5-10 в поле зрения). Некоторое количество лейкоцитов (до 20 в поле зрения). Бактериальная флора</FCL>
							</SN1>
						</N3>
					</D>
					
					<D class="target_doc_uk">
						<TL>Контрон СИГМА 210, ирис</TL>
						<FK>(назва обладнання)</FK>
						<DM>
							<TIP>Лікар:</TIP>
							<VAL>Кузнецов Ю. М.</VAL>
						</DM>
						<PAT>
							<TIP>Пацієнт:</TIP>
							<VAL>Жумабаев В. Н.</VAL>
						</PAT>
						<DAT>
							<TIP>від</TIP>
							<VAL>15.04.2021</VAL>
						</DAT>
						<NAM>Общий анализ мочи</NAM>
						<N1>
							<SN1>
								<FCL>Показник</FCL>
								<FCL>Дані пацієнта</FCL>
							</SN1>
						</N1>
						<N2>
							<SN1>
								<NCL>Колір</NCL>
								<FCL>Солом'яний</FCL>
							</SN1>
							<SN2>
								<NCL>Зовнішній вигляд</NCL>
								<FCL>Прозора</FCL>
							</SN2>
							<SN3>
								<NCL>PH</NCL>
								<FCL>6.2</FCL>
							</SN3>
							<SN4>
								<NCL>Густина (г/л)</NCL>
								<FCL>1015</FCL>
							</SN4>
							<SN5>
								<NCL>Білок</NCL>
								<FCL>Сліди</FCL>
							</SN5>
							<SN6>
								<NCL>Глікозурія</NCL>
								<FCL>Негативний</FCL>
							</SN6>
							<SN7>
								<NCL>Кетони</NCL>
								<FCL>Негативний</FCL>
							</SN7>
							<SN8>
								<NCL>Гемоглобін</NCL>
								<FCL>Ні</FCL>
							</SN8>
							<SN9>
								<NCL>Гній</NCL>
								<FCL>Ні</FCL>
							</SN9>
							<SN10>
								<NCL>Жовчних пігментів</NCL>
								<FCL>Негативний</FCL>
							</SN10>
							<SN11>
								<NCL>Уробіліноген</NCL>
								<FCL>Норма</FCL>
							</SN11>
							<SN12>
								<NCL>Нітрити</NCL>
								<FCL>Негативний</FCL>
							</SN12>
						</N2>
						<N3>
							<SN1>
								<NCL>Мікроскопія осаду</NCL>
								<FCL>Трохи крові (5-10 у полi  зору). Деяка кількість лейкоцитів (до 20 в поле зору). Бактеріальна флора</FCL>
							</SN1>
						</N3>
					</D>
					
					<D class="target_doc_en">
						<TL>KONTRON Sigma Iris 210</TL>
						<FK>(name of equipment)</FK>
						<DM>
							<TIP>Doctor:</TIP>
							<VAL>Kuznecov U. M.</VAL>
						</DM>
						<PAT>
							<TIP>A patient:</TIP>
							<VAL>Smith V. N.</VAL>
						</PAT>
						<DAT>
							<TIP>dated</TIP>
							<VAL>15.04.2021</VAL>
						</DAT>
						<NAM>General urine analysis</NAM>
						<N1>
							<SN1>
								<FCL>Indicator</FCL>
								<FCL>Patient data</FCL>
							</SN1>
						</N1>
						<N2>
							<SN1>
								<NCL>Color</NCL>
								<FCL>Straw</FCL>
							</SN1>
							<SN2>
								<NCL>Appearance</NCL>
								<FCL>Transparent</FCL>
							</SN2>
							<SN3>
								<NCL>PH</NCL>
								<FCL>6.2</FCL>
							</SN3>
							<SN4>
								<NCL>Density (g/l)</NCL>
								<FCL>1015</FCL>
							</SN4>
							<SN5>
								<NCL>Protein</NCL>
								<FCL>Traces</FCL>
							</SN5>
							<SN6>
								<NCL>Glycosuria</NCL>
								<FCL>Negative</FCL>
							</SN6>
							<SN7>
								<NCL>Ketones</NCL>
								<FCL>Negative</FCL>
							</SN7>
							<SN8>
								<NCL>Hemoglobin</NCL>
								<FCL>No</FCL>
							</SN8>
							<SN9>
								<NCL>Pus</NCL>
								<FCL>No</FCL>
							</SN9>
							<SN10>
								<NCL>Gallery pigments</NCL>
								<FCL>Negative</FCL>
							</SN10>
							<SN11>
								<NCL>Urobilinogen</NCL>
								<FCL>Norm</FCL>
							</SN11>
							<SN12>
								<NCL>Nitrites</NCL>
								<FCL>Negative</FCL>
							</SN12>
						</N2>
						<N3>
							<SN1>
								<NCL>Sediment Microscopy</NCL>
								<FCL>A little blood, 5-10 usefulness. A certain number of leukocytes (up to 20 in the field of vision). Bacterial flora</FCL>
							</SN1>
						</N3>
					</D>

					<D class="target_doc_it">
						<TL>KONTRON Sigma Iris 210</TL>
						<FK>(nome dell'attrezzatura)</FK>
						<DM>
							<TIP>Medico:</TIP>
							<VAL>Kuznecov U. M.</VAL>
						</DM>
						<PAT>
							<TIP>Nome del paziente:</TIP>
							<VAL>Smith V. N.</VAL>
						</PAT>
						<DAT>
							<TIP>Data d’accertamento</TIP>
							<VAL>15.04.2021</VAL>
						</DAT>
						<NAM>Esame urine</NAM>
						<N1>
							<SN1>
								<FCL>Indicatore</FCL>
								<FCL>Dati del paziente</FCL>
							</SN1>
						</N1>
						<N2>
							<SN1>
								<NCL>Colore</NCL>
								<FCL>Paglierino</FCL>
							</SN1>
							<SN2>
								<NCL>Aspetto</NCL>
								<FCL>Trasparente</FCL>
							</SN2>
							<SN3>
								<NCL>PH</NCL>
								<FCL>6.2</FCL>
							</SN3>
							<SN4>
								<NCL>Densità (g/l)</NCL>
								<FCL>1015</FCL>
							</SN4>
							<SN5>
								<NCL>Proteine</NCL>
								<FCL>Tracce</FCL>
							</SN5>
							<SN6>
								<NCL>Glicosuria</NCL>
								<FCL>Negativa</FCL>
							</SN6>
							<SN7>
								<NCL>Chetoni</NCL>
								<FCL>Negativa</FCL>
							</SN7>
							<SN8>
								<NCL>Emoglobina</NCL>
								<FCL>No</FCL>
							</SN8>
							<SN9>
								<NCL>Pus</NCL>
								<FCL>No</FCL>
							</SN9>
							<SN10>
								<NCL>Pigmenti biliari</NCL>
								<FCL>Negativa</FCL>
							</SN10>
							<SN11>
								<NCL>Urobilinogeno</NCL>
								<FCL>Normale</FCL>
							</SN11>
							<SN12>
								<NCL>Nitriti</NCL>
								<FCL>Negativa</FCL>
							</SN12>
						</N2>
						<N3>
							<SN1>
								<NCL>Microscopia dei sedimenti</NCL>
								<FCL>Qualche emazia (5-10 x campo). Discreto numero di leucociti (fino a 20 x campo), in parte ammassati. Flora batterica</FCL>
							</SN1>
						</N3>
					</D>

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
