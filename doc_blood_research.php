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
    <input type="hidden" name="doc_type" class="doc_type" value="blood_research">
    
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
						<option value="/doc_blood_research.php" selected>Общий анализ крови</option>
						<option value="/doc_urine_research.php">Анализ мочи</option>
					</select>
				</div>
				<div class="translate_from">
					<label>Перевести з:</label>
					<select name="language" id="from_lang">
						<option value="placeholder" selected disabled>Выберите язык</option>
						<option value="ru">Русский</option>
						<option value="uk">Українська</option>
						<option value="en">English</option>
						<option value="it">Italiano</option>
					</select>
				</div>
				<div class="translate_to">
					<label>Перевести на:</label>
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
					<form class="original_doc_uk">
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
						<div class="doc_body doc_blood">
							<p class="name_research">
								Загальний аналіз крові
							</p>
							<div class="label-two-input">
								<div class="pati_data">
									<h6>Показник</h6>
									<h6>Дані пацієнта</h6>
								</div>
								<div class="norm">
									<h6>Одиниця вимірювання</h6>
									<h6>Норма</h6>
								</div>
							</div>
							<div class="label-two-input">
								<div class="pati_data">
									<label>Еритроцити</label>
									<input type="numb" data-typeTransform="translate" name="erythrocytes" value="">
								</div>
								<div class="norm">
									<label>10¹²/л</label>
									<input type="numb" data-typeTransform="translate" name="norm_erythrocytes" value="3.5-5.0">
								</div>
							</div>
							<div class="label-two-input">
								<div class="pati_data">
									<label>Гемоглобін</label>
									<input type="numb" data-typeTransform="translate" name="hemoglobin" value="">
								</div>
								<div class="norm">
									<label>г/л</label>
									<input type="numb" data-typeTransform="translate" name="norm_hemoglobin" value="110-170">
								</div>
							</div>
							<div class="label-two-input">
								<div class="pati_data">
									<label>Лейкоцити</label>
									<input type="numb" data-typeTransform="translate" name="leukocytes" value="">
								</div>
								<div class="norm">
									<label>10⁹/л</label>
									<input type="numb" data-typeTransform="translate" name="norm_leukocytes" value="4.0-10.0">
								</div>
							</div>
							<div class="label-two-input">
								<div class="pati_data">
									<label>Гематокрит (HCT)</label>
									<input type="numb" data-typeTransform="translate" name="hematocritis" value="">
								</div>
								<div class="norm">
									<label>%</label>
									<input type="numb" data-typeTransform="translate" name="norm_hematocritis" value="25-45">
								</div>
							</div>
							<div class="label-two-input">
								<div class="pati_data">
									<label>MCH</label>
									<input type="numb" data-typeTransform="translate" name="mch" value="">
								</div>
								<div class="norm">
									<label>пг</label>
									<input type="numb" data-typeTransform="translate" name="norm_mch" value="27-34">
								</div>
							</div>
							<div class="label-two-input">
								<div class="pati_data">
									<label>MCV</label>
									<input type="numb" data-typeTransform="translate" name="mcv" value="">
								</div>
								<div class="norm">
									<label>фл</label>
									<input type="numb" data-typeTransform="translate" name="norm_mcv" value="80-100">
								</div>
							</div>
							<div class="label-two-input">
								<div class="pati_data">
									<label>MCHC</label>
									<input type="numb" data-typeTransform="translate" name="mchc" value="">
								</div>
								<div class="norm">
									<label>г/л</label>
									<input type="numb" data-typeTransform="translate" name="norm_mchc" value="300-350">
								</div>
							</div>
							<div class="few_points">
								<div class="label-for_few">
									<h6>Лейкоцитарна форма (%)</h6>
								</div>
								<div class="label-two-input">
									<div class="pati_data">
										<label>Нейтрофіли</label>
										<input type="numb" data-typeTransform="translate" name="neutrophiles_p" value="">
									</div>
									<div class="norm">
										<label>%</label>
										<input type="numb" data-typeTransform="translate" name="norm_neutrophiles_p" value="45-72">
									</div>
								</div>
								<div class="label-two-input">
									<div class="pati_data">
										<label>Еозінофіли</label>
										<input type="numb" data-typeTransform="translate" name="eosiophiles_p" value="">
									</div>
									<div class="norm">
										<label>%</label>
										<input type="numb" data-typeTransform="translate" name="norm_eosiophiles_p" value="1-5">
									</div>
								</div>
								<div class="label-two-input">
									<div class="pati_data">
										<label>Базофіли</label>
										<input type="numb" data-typeTransform="translate" name="basophiles_p" value="">
									</div>
									<div class="norm">
										<label>%</label>
										<input type="numb" data-typeTransform="translate" name="norm_basophiles_p" value="0-1">
									</div>
								</div>
								<div class="label-two-input">
									<div class="pati_data">
										<label>Моноцити</label>
										<input type="numb" data-typeTransform="translate" name="monocytes_p" value="">
									</div>
									<div class="norm">
										<label>%</label>
										<input type="numb" data-typeTransform="translate" name="norm_monocytes_p" value="3-11">
									</div>
								</div>
								<div class="label-two-input">
									<div class="pati_data">
										<label>Лімфоцити</label>
										<input type="numb" data-typeTransform="translate" name="lymphocytes_p" value="">
									</div>
									<div class="norm">
										<label>%</label>
										<input type="numb" data-typeTransform="translate" name="norm_lymphocytes_p" value="19-37">
									</div>
								</div>
							</div>
							<div class="few_points">
								<div class="label-for_few">
									<h6>Лейкоцитарна форма (абсолютне значення)</h6>
								</div>
								<div class="label-two-input">
									<div class="pati_data">
										<label>Нейтрофіли</label>
										<input type="numb" data-typeTransform="translate" name="neutrophiles_a" value="">
									</div>
									<div class="norm">
										<label>10⁹/л</label>
										<input type="numb" data-typeTransform="translate" name="norm_neutrophiles_a" value="?">
									</div>
								</div>
								<div class="label-two-input">
									<div class="pati_data">
										<label>Еозінофіли</label>
										<input type="numb" data-typeTransform="translate" name="eosiophiles_a" value="">
									</div>
									<div class="norm">
										<label>10⁹/л</label>
										<input type="numb" data-typeTransform="translate" name="norm_eosiophiles_a" value="?">
									</div>
								</div>
								<div class="label-two-input">
									<div class="pati_data">
										<label>Базофіли</label>
										<input type="numb" data-typeTransform="translate" name="basophiles_a" value="">
									</div>
									<div class="norm">
										<label>10⁹/л</label>
										<input type="numb" data-typeTransform="translate" name="norm_basophiles_a" value="0.0-0.2">
									</div>
								</div>
								<div class="label-two-input">
									<div class="pati_data">
										<label>Моноцити</label>
										<input type="numb" data-typeTransform="translate" name="monocytes_a" value="">
									</div>
									<div class="norm">
										<label>10⁹/л</label>
										<input type="numb" data-typeTransform="translate" name="norm_monocytes_a" value="?">
									</div>
								</div>
								<div class="label-two-input">
									<div class="pati_data">
										<label>Лімфоцити</label>
										<input type="numb" data-typeTransform="translate" name="lymphocytes_a" value="">
									</div>
									<div class="norm">
										<label>10⁹/л</label>
										<input type="numb" data-typeTransform="translate" name="norm_lymphocytes_a" value="?">
									</div>
								</div>
							</div>
							<div class="label-two-input">
								<div class="pati_data">
									<label>Тромбоцити</label>
									<input type="numb" data-typeTransform="translate" name="platelets" value="">
								</div>
								<div class="norm">
									<label>10⁹/л</label>
									<input type="numb" data-typeTransform="translate" name="norm_platelets" value="150-400">
								</div>
							</div>
							<div class="few_points">
								<div class="label-for_few">
									<h6>Коагуляція</h6>
								</div>
								<div class="label-two-input">
									<div class="pati_data">
										<label>Протромбін</label>
										<input type="numb" data-typeTransform="translate" name="prothrombin" value="">
									</div>
									<div class="norm">
										<label>%</label>
										<input type="numb" data-typeTransform="translate" name="norm_prothrombin" value="70-140">
									</div>
								</div>
								<div class="label-two-input">
									<div class="pati_data">
										<label>(INR)Міждународне нормальне відношення</label>
										<input type="numb" data-typeTransform="translate" name="inr" value="">
									</div>
									<div class="norm">
										<label></label>
										<input type="numb" data-typeTransform="translate" name="norm_inr" value="2.00-4.00">
									</div>
								</div>
								<div class="label-two-input">
									<div class="pati_data">
										<label>(PPT) Частковий час тромбопластину</label>
										<input type="numb" data-typeTransform="translate" name="ppt" value="">
									</div>
									<div class="norm">
										<label>?</label>
										<input type="numb" data-typeTransform="translate" name="norm_ppt" value="1-35">
									</div>
								</div>
							</div>
							<div class="few_points">
								<div class="label-for_few">
									<h6>Клінічна хімія</h6>
								</div>
								<div class="label-two-input">
									<div class="pati_data">
										<label>Гліцемія</label>
										<input type="numb" data-typeTransform="translate" name="glycemia" value="">
									</div>
									<div class="norm">
										<label>?</label>
										<input type="numb" data-typeTransform="translate" name="norm_glycemia" value="60-110">
									</div>
								</div>
								<div class="label-two-input">
									<div class="pati_data">
										<label>Глікозований гемоглобін</label>
										<input type="numb" data-typeTransform="translate" name="hplc" value="">
									</div>
									<div class="norm">
										<label>%</label>
										<input type="numb" data-typeTransform="translate" name="norm_hplc" value="4.0-6.0">
									</div>
								</div>
								<div class="label-two-input">
									<div class="pati_data">
										<label>Сечова кислота</label>
										<input type="numb" data-typeTransform="translate" name="urin_acid" value="">
									</div>
									<div class="norm">
										<label>?</label>
										<input type="numb" data-typeTransform="translate" name="norm_urin_acid" value="3.4-7.0">
									</div>
								</div>
								<div class="label-two-input">
									<div class="pati_data">
										<label>Загальний холестерин</label>
										<input type="numb" data-typeTransform="translate" name="total_cholesterol" value="">
									</div>
									<div class="norm">
										<label>?</label>
										<input type="numb" data-typeTransform="translate" name="norm_total_cholesterol" value="130-200">
									</div>
								</div>
								<div class="label-two-input">
									<div class="pati_data">
										<label>Холестеролу ЛПВЩ</label>
										<input type="numb" data-typeTransform="translate" name="hdl" value="">
									</div>
									<div class="norm">
										<label>?</label>
										<input type="numb" data-typeTransform="translate" name="norm_hdl" value="?">
									</div>
								</div>
							</div>
							<div class="label-two-input">
								<div class="pati_data">
									<label>Швидкість осідання еритроцитів</label>
									<input type="numb" data-typeTransform="translate" name="esr" value="">
								</div>
								<div class="norm">
									<label>мм/год</label>
									<input type="numb" data-typeTransform="translate" name="norm_esr" value="1-15">
								</div>
							</div>
						</div>
						<div class="doc_footer">
						</div>
					</form>
			
					<form class="original_doc_ru">
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
						<div class="doc_body doc_blood">
							<p class="name_research">
								Общий анализ крови
							</p>
							<div class="label-two-input">
								<div class="pati_data">
									<h6>Показатель</h6>
									<h6>Данные пациента</h6>
								</div>
								<div class="norm">
									<h6>Единица измерения</h6>
									<h6>Норма</h6>
								</div>
							</div>
							<div class="label-two-input">
								<div class="pati_data">
									<label>Эритроциты</label>
									<input type="numb" data-typeTransform="translate" name="erythrocytes" value="">
								</div>
								<div class="norm">
									<label>10¹²/л</label>
									<input type="numb" data-typeTransform="translate" name="norm_erythrocytes" value="3.5-5.0">
								</div>
							</div>
							<div class="label-two-input">
								<div class="pati_data">
									<label>Гемоглобин</label>
									<input type="numb" data-typeTransform="translate" name="hemoglobin" value="">
								</div>
								<div class="norm">
									<label>г/л</label>
									<input type="numb" data-typeTransform="translate" name="norm_hemoglobin" value="110-170">
								</div>
							</div>
							<div class="label-two-input">
								<div class="pati_data">
									<label>Лейкоциты</label>
									<input type="numb" data-typeTransform="translate" name="leukocytes" value="">
								</div>
								<div class="norm">
									<label>10⁹/л</label>
									<input type="numb" data-typeTransform="translate" name="norm_leukocytes" value="4.0-10.0">
								</div>
							</div>
							<div class="label-two-input">
								<div class="pati_data">
									<label>Гематокрит (HCT)</label>
									<input type="numb" data-typeTransform="translate" name="hematocritis" value="">
								</div>
								<div class="norm">
									<label>%</label>
									<input type="numb" data-typeTransform="translate" name="norm_hematocritis" value="25-45">
								</div>
							</div>
							<div class="label-two-input">
								<div class="pati_data">
									<label>MCH</label>
									<input type="numb" data-typeTransform="translate" name="mch" value="">
								</div>
								<div class="norm">
									<label>пг</label>
									<input type="numb" data-typeTransform="translate" name="norm_mch" value="27-34">
								</div>
							</div>
							<div class="label-two-input">
								<div class="pati_data">
									<label>MCV</label>
									<input type="numb" data-typeTransform="translate" name="mcv" value="">
								</div>
								<div class="norm">
									<label>фл</label>
									<input type="numb" data-typeTransform="translate" name="norm_mcv" value="80-100">
								</div>
							</div>
							<div class="label-two-input">
								<div class="pati_data">
									<label>MCHC</label>
									<input type="numb" data-typeTransform="translate" name="mchc" value="">
								</div>
								<div class="norm">
									<label>г/л</label>
									<input type="numb" data-typeTransform="translate" name="norm_mchc" value="300-350">
								</div>
							</div>
							<div class="few_points">
								<div class="label-for_few">
									<h6>Лейкоцитарная форма (%)</h6>
								</div>
								<div class="label-two-input">
									<div class="pati_data">
										<label>Нейрофилы</label>
										<input type="numb" data-typeTransform="translate" name="neutrophiles_p" value="">
									</div>
									<div class="norm">
										<label>%</label>
										<input type="numb" data-typeTransform="translate" name="norm_neutrophiles_p" value="45-72">
									</div>
								</div>
								<div class="label-two-input">
									<div class="pati_data">
										<label>Эозинофилы</label>
										<input type="numb" data-typeTransform="translate" name="eosiophiles_p" value="">
									</div>
									<div class="norm">
										<label>%</label>
										<input type="numb" data-typeTransform="translate" name="norm_eosiophiles_p" value="1-5">
									</div>
								</div>
								<div class="label-two-input">
									<div class="pati_data">
										<label>Базофилы</label>
										<input type="numb" data-typeTransform="translate" name="basophiles_p" value="">
									</div>
									<div class="norm">
										<label>%</label>
										<input type="numb" data-typeTransform="translate" name="norm_basophiles_p" value="0-1">
									</div>
								</div>
								<div class="label-two-input">
									<div class="pati_data">
										<label>Моноциты</label>
										<input type="numb" data-typeTransform="translate" name="monocytes_p" value="">
									</div>
									<div class="norm">
										<label>%</label>
										<input type="numb" data-typeTransform="translate" name="norm_monocytes_p" value="3-11">
									</div>
								</div>
								<div class="label-two-input">
									<div class="pati_data">
										<label>Лимфоциты</label>
										<input type="numb" data-typeTransform="translate" name="lymphocytes_p" value="">
									</div>
									<div class="norm">
										<label>%</label>
										<input type="numb" data-typeTransform="translate" name="norm_lymphocytes_p" value="19-37">
									</div>
								</div>
							</div>
							<div class="few_points">
								<div class="label-for_few">
									<h6>Лейкоцитарная форма (абсолютное значение)</h6>
								</div>
								<div class="label-two-input">
									<div class="pati_data">
										<label>Нейтрофилы</label>
										<input type="numb" data-typeTransform="translate" name="neutrophiles_a" value="">
									</div>
									<div class="norm">
										<label>10⁹/л</label>
										<input type="numb" data-typeTransform="translate" name="norm_neutrophiles_a" value="?">
									</div>
								</div>
								<div class="label-two-input">
									<div class="pati_data">
										<label>Эозинофилы</label>
										<input type="numb" data-typeTransform="translate" name="eosiophiles_a" value="">
									</div>
									<div class="norm">
										<label>10⁹/л</label>
										<input type="numb" data-typeTransform="translate" name="norm_eosiophiles_a" value="?">
									</div>
								</div>
								<div class="label-two-input">
									<div class="pati_data">
										<label>Базофилы</label>
										<input type="numb" data-typeTransform="translate" name="basophiles_a" value="">
									</div>
									<div class="norm">
										<label>10⁹/л</label>
										<input type="numb" data-typeTransform="translate" name="norm_basophiles_a" value="0.0-0.2">
									</div>
								</div>
								<div class="label-two-input">
									<div class="pati_data">
										<label>Моноциты</label>
										<input type="numb" data-typeTransform="translate" name="monocytes_a" value="">
									</div>
									<div class="norm">
										<label>10⁹/л</label>
										<input type="numb" data-typeTransform="translate" name="norm_monocytes_a" value="?">
									</div>
								</div>
								<div class="label-two-input">
									<div class="pati_data">
										<label>Лимфоциты</label>
										<input type="numb" data-typeTransform="translate" name="lymphocytes_a" value="">
									</div>
									<div class="norm">
										<label>10⁹/л</label>
										<input type="numb" data-typeTransform="translate" name="norm_lymphocytes_a" value="?">
									</div>
								</div>
							</div>
							<div class="label-two-input">
								<div class="pati_data">
									<label>Тромбоциты</label>
									<input type="numb" data-typeTransform="translate" name="platelets" value="">
								</div>
								<div class="norm">
									<label>10⁹/л</label>
									<input type="numb" data-typeTransform="translate" name="norm_platelets" value="150-400">
								</div>
							</div>
							<div class="few_points">
								<div class="label-for_few">
									<h6>Коагуляция</h6>
								</div>
								<div class="label-two-input">
									<div class="pati_data">
										<label>Протромбин</label>
										<input type="numb" data-typeTransform="translate" name="prothrombin" value="">
									</div>
									<div class="norm">
										<label>%</label>
										<input type="numb" data-typeTransform="translate" name="norm_prothrombin" value="70-140">
									</div>
								</div>
								<div class="label-two-input">
									<div class="pati_data">
										<label>(INR)Международное нормализованное отношение</label>
										<input type="numb" data-typeTransform="translate" name="inr" value="">
									</div>
									<div class="norm">
										<label></label>
										<input type="numb" data-typeTransform="translate" name="norm_inr" value="2.00-4.00">
									</div>
								</div>
								<div class="label-two-input">
									<div class="pati_data">
										<label>(PPT) частичное время тромбопластина</label>
										<input type="numb" data-typeTransform="translate" name="ppt" value="">
									</div>
									<div class="norm">
										<label>?</label>
										<input type="numb" data-typeTransform="translate" name="norm_ppt" value="1-35">
									</div>
								</div>
							</div>
							<div class="few_points">
								<div class="label-for_few">
									<h6>Клиническая химия</h6>
								</div>
								<div class="label-two-input">
									<div class="pati_data">
										<label>Гликемия</label>
										<input type="numb" data-typeTransform="translate" name="glycemia" value="">
									</div>
									<div class="norm">
										<label>?</label>
										<input type="numb" data-typeTransform="translate" name="norm_glycemia" value="60-110">
									</div>
								</div>
								<div class="label-two-input">
									<div class="pati_data">
										<label>Гликированный гемоглобин</label>
										<input type="numb" data-typeTransform="translate" name="hplc" value="">
									</div>
									<div class="norm">
										<label>%</label>
										<input type="numb" data-typeTransform="translate" name="norm_hplc" value="4.0-6.0">
									</div>
								</div>
								<div class="label-two-input">
									<div class="pati_data">
										<label>Мочевая кислота</label>
										<input type="numb" data-typeTransform="translate" name="urin_acid" value="">
									</div>
									<div class="norm">
										<label>?</label>
										<input type="numb" data-typeTransform="translate" name="norm_urin_acid" value="3.4-7.0">
									</div>
								</div>
								<div class="label-two-input">
									<div class="pati_data">
										<label>Общий холестерин</label>
										<input type="numb" data-typeTransform="translate" name="total_cholesterol" value="">
									</div>
									<div class="norm">
										<label>?</label>
										<input type="numb" data-typeTransform="translate" name="norm_total_cholesterol" value="130-200">
									</div>
								</div>
								<div class="label-two-input">
									<div class="pati_data">
										<label>Холестерин ЛПВП</label>
										<input type="numb" data-typeTransform="translate" name="hdl" value="">
									</div>
									<div class="norm">
										<label>?</label>
										<input type="numb" data-typeTransform="translate" name="norm_hdl" value="?">
									</div>
								</div>
							</div>
							<div class="label-two-input">
								<div class="pati_data">
									<label>Скорость оседания эритроцитов</label>
									<input type="numb" data-typeTransform="translate" name="esr" value="">
								</div>
								<div class="norm">
									<label>мм/час</label>
									<input type="numb" data-typeTransform="translate" name="norm_esr" value="1-15">
								</div>
							</div>
						</div>
						<div class="doc_footer">
						</div>
					</form>
			
					<form class="original_doc_en">
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
						<div class="doc_body doc_blood">
							<p class="name_research">
								General blood test
							</p>
							<div class="label-two-input">
								<div class="pati_data">
									<h6>Indicator</h6>
									<h6>Patient data</h6>
								</div>
								<div class="norm">
									<h6>Unit of measurement</h6>
									<h6>Normal data</h6>
								</div>
							</div>
							<div class="label-two-input">
								<div class="pati_data">
									<label>Erythrocytes</label>
									<input type="numb" data-typeTransform="translate" name="erythrocytes" value="">
								</div>
								<div class="norm">
									<label>10¹²/l</label>
									<input type="numb" data-typeTransform="translate" name="norm_erythrocytes" value="3.5-5.0">
								</div>
							</div>
							<div class="label-two-input">
								<div class="pati_data">
									<label>Hemoglobin</label>
									<input type="numb" data-typeTransform="translate" name="hemoglobin" value="">
								</div>
								<div class="norm">
									<label>g/l</label>
									<input type="numb" data-typeTransform="translate" name="norm_hemoglobin" value="110-170">
								</div>
							</div>
							<div class="label-two-input">
								<div class="pati_data">
									<label>Leukocytes</label>
									<input type="numb" data-typeTransform="translate" name="leukocytes" value="">
								</div>
								<div class="norm">
									<label>10⁹/l</label>
									<input type="numb" data-typeTransform="translate" name="norm_leukocytes" value="4.0-10.0">
								</div>
							</div>
							<div class="label-two-input">
								<div class="pati_data">
									<label>Hematocritis (HCT)</label>
									<input type="numb" data-typeTransform="translate" name="hematocritis" value="">
								</div>
								<div class="norm">
									<label>%</label>
									<input type="numb" data-typeTransform="translate" name="norm_hematocritis" value="25-45">
								</div>
							</div>
							<div class="label-two-input">
								<div class="pati_data">
									<label>MCH</label>
									<input type="numb" data-typeTransform="translate" name="mch" value="">
								</div>
								<div class="norm">
									<label>pg</label>
									<input type="numb" data-typeTransform="translate" name="norm_mch" value="27-34">
								</div>
							</div>
							<div class="label-two-input">
								<div class="pati_data">
									<label>MCV</label>
									<input type="numb" data-typeTransform="translate" name="mcv" value="">
								</div>
								<div class="norm">
									<label>fl</label>
									<input type="numb" data-typeTransform="translate" name="norm_mcv" value="80-100">
								</div>
							</div>
							<div class="label-two-input">
								<div class="pati_data">
									<label>MCHC</label>
									<input type="numb" data-typeTransform="translate" name="mchc" value="">
								</div>
								<div class="norm">
									<label>g/l</label>
									<input type="numb" data-typeTransform="translate" name="norm_mchc" value="300-350">
								</div>
							</div>
							<div class="few_points">
								<div class="label-for_few">
									<h6>Leukocytic form (%)</h6>
								</div>
								<div class="label-two-input">
									<div class="pati_data">
										<label>Neutrophiles</label>
										<input type="numb" data-typeTransform="translate" name="neutrophiles_p" value="">
									</div>
									<div class="norm">
										<label>%</label>
										<input type="numb" data-typeTransform="translate" name="norm_neutrophiles_p" value="45-72">
									</div>
								</div>
								<div class="label-two-input">
									<div class="pati_data">
										<label>Eosiophiles</label>
										<input type="numb" data-typeTransform="translate" name="eosiophiles_p" value="">
									</div>
									<div class="norm">
										<label>%</label>
										<input type="numb" data-typeTransform="translate" name="norm_eosiophiles_p" value="1-5">
									</div>
								</div>
								<div class="label-two-input">
									<div class="pati_data">
										<label>Basophiles</label>
										<input type="numb" data-typeTransform="translate" name="basophiles_p" value="">
									</div>
									<div class="norm">
										<label>%</label>
										<input type="numb" data-typeTransform="translate" name="norm_basophiles_p" value="0-1">
									</div>
								</div>
								<div class="label-two-input">
									<div class="pati_data">
										<label>Monocytes</label>
										<input type="numb" data-typeTransform="translate" name="monocytes_p" value="">
									</div>
									<div class="norm">
										<label>%</label>
										<input type="numb" data-typeTransform="translate" name="norm_monocytes_p" value="3-11">
									</div>
								</div>
								<div class="label-two-input">
									<div class="pati_data">
										<label>Lymphocytes</label>
										<input type="numb" data-typeTransform="translate" name="lymphocytes_p" value="">
									</div>
									<div class="norm">
										<label>%</label>
										<input type="numb" data-typeTransform="translate" name="norm_lymphocytes_p" value="19-37">
									</div>
								</div>
							</div>
							<div class="few_points">
								<div class="label-for_few">
									<h6>Leukocytic form (absolute value)</h6>
								</div>
								<div class="label-two-input">
									<div class="pati_data">
										<label>Neutrophiles</label>
										<input type="numb" data-typeTransform="translate" name="neutrophiles_a" value="">
									</div>
									<div class="norm">
										<label>10⁹/l</label>
										<input type="numb" data-typeTransform="translate" name="norm_neutrophiles_a" value="?">
									</div>
								</div>
								<div class="label-two-input">
									<div class="pati_data">
										<label>Eosiophiles</label>
										<input type="numb" data-typeTransform="translate" name="eosiophiles_a" value="">
									</div>
									<div class="norm">
										<label>10⁹/l</label>
										<input type="numb" data-typeTransform="translate" name="norm_eosiophiles_a" value="?">
									</div>
								</div>
								<div class="label-two-input">
									<div class="pati_data">
										<label>Basophiles</label>
										<input type="numb" data-typeTransform="translate" name="basophiles_a" value="">
									</div>
									<div class="norm">
										<label>10⁹/l</label>
										<input type="numb" data-typeTransform="translate" name="norm_basophiles_a" value="0.0-0.2">
									</div>
								</div>
								<div class="label-two-input">
									<div class="pati_data">
										<label>Monocytes</label>
										<input type="numb" data-typeTransform="translate" name="monocytes_a" value="">
									</div>
									<div class="norm">
										<label>10⁹/l</label>
										<input type="numb" data-typeTransform="translate" name="norm_monocytes_a" value="?">
									</div>
								</div>
								<div class="label-two-input">
									<div class="pati_data">
										<label>Lymphocytes</label>
										<input type="numb" data-typeTransform="translate" name="lymphocytes_a" value="">
									</div>
									<div class="norm">
										<label>10⁹/l</label>
										<input type="numb" data-typeTransform="translate" name="norm_lymphocytes_a" value="?">
									</div>
								</div>
							</div>
							<div class="label-two-input">
								<div class="pati_data">
									<label>Platelets</label>
									<input type="numb" data-typeTransform="translate" name="platelets" value="">
								</div>
								<div class="norm">
									<label>10⁹/l</label>
									<input type="numb" data-typeTransform="translate" name="norm_platelets" value="150-400">
								</div>
							</div>
							<div class="few_points">
								<div class="label-for_few">
									<h6>Coagulation</h6>
								</div>
								<div class="label-two-input">
									<div class="pati_data">
										<label>Prothrombin</label>
										<input type="numb" data-typeTransform="translate" name="prothrombin" value="">
									</div>
									<div class="norm">
										<label>%</label>
										<input type="numb" data-typeTransform="translate" name="norm_prothrombin" value="70-140">
									</div>
								</div>
								<div class="label-two-input">
									<div class="pati_data">
										<label>INR (International normalized ratio)</label>
										<input type="numb" data-typeTransform="translate" name="inr" value="">
									</div>
									<div class="norm">
										<label></label>
										<input type="numb" data-typeTransform="translate" name="norm_inr" value="2.00-4.00">
									</div>
								</div>
								<div class="label-two-input">
									<div class="pati_data">
										<label>PPT (Partial Thromboplastin Time)</label>
										<input type="numb" data-typeTransform="translate" name="ppt" value="">
									</div>
									<div class="norm">
										<label>?</label>
										<input type="numb" data-typeTransform="translate" name="norm_ppt" value="1-35">
									</div>
								</div>
							</div>
							<div class="few_points">
								<div class="label-for_few">
									<h6>Clinical chemistry</h6>
								</div>
								<div class="label-two-input">
									<div class="pati_data">
										<label>Glycemia</label>
										<input type="numb" data-typeTransform="translate" name="glycemia" value="">
									</div>
									<div class="norm">
										<label>?</label>
										<input type="numb" data-typeTransform="translate" name="norm_glycemia" value="60-110">
									</div>
								</div>
								<div class="label-two-input">
									<div class="pati_data">
										<label>Glycated hemoglobin</label>
										<input type="numb" data-typeTransform="translate" name="hplc" value="">
									</div>
									<div class="norm">
										<label>%</label>
										<input type="numb" data-typeTransform="translate" name="norm_hplc" value="4.0-6.0">
									</div>
								</div>
								<div class="label-two-input">
									<div class="pati_data">
										<label>Uric acid</label>
										<input type="numb" data-typeTransform="translate" name="urin_acid" value="">
									</div>
									<div class="norm">
										<label>?</label>
										<input type="numb" data-typeTransform="translate" name="norm_urin_acid" value="3.4-7.0">
									</div>
								</div>
								<div class="label-two-input">
									<div class="pati_data">
										<label>Total cholesterol</label>
										<input type="numb" data-typeTransform="translate" name="total_cholesterol" value="">
									</div>
									<div class="norm">
										<label>?</label>
										<input type="numb" data-typeTransform="translate" name="norm_total_cholesterol" value="130-200">
									</div>
								</div>
								<div class="label-two-input">
									<div class="pati_data">
										<label>Cholesterol HDL</label>
										<input type="numb" data-typeTransform="translate" name="hdl" value="">
									</div>
									<div class="norm">
										<label>?</label>
										<input type="numb" data-typeTransform="translate" name="norm_hdl" value="?">
									</div>
								</div>
							</div>
							<div class="label-two-input">
								<div class="pati_data">
									<label>Erythrocyte sedimentation rate</label>
									<input type="numb" data-typeTransform="translate" name="esr" value="">
								</div>
								<div class="norm">
									<label>mm/h</label>
									<input type="numb" data-typeTransform="translate" name="norm_esr" value="1-15">
								</div>
							</div>
						</div>
						<div class="doc_footer">
						</div>
					</form>
			
					<form class="original_doc_it">
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
						<div class="doc_body doc_blood">
							<p class="name_research">
								Esame Emocromocitometrico
							</p>
							<div class="label-two-input">
								<div class="pati_data">
									<h6>Indicatore</h6>
									<h6>Dati del paziente</h6>
								</div>
								<div class="norm">
									<h6>Unità</h6>
									<h6>Valore normale</h6>
								</div>
							</div>
							<div class="label-two-input">
								<div class="pati_data">
									<label>Eritrociti</label>
									<input type="numb" data-typeTransform="translate" name="erythrocytes" value="">
								</div>
								<div class="norm">
									<label>10¹²/l</label>
									<input type="numb" data-typeTransform="translate" name="norm_erythrocytes" value="3.5-5.0">
								</div>
							</div>
							<div class="label-two-input">
								<div class="pati_data">
									<label>Emoglobina</label>
									<input type="numb" data-typeTransform="translate" name="hemoglobin" value="">
								</div>
								<div class="norm">
									<label>g/l</label>
									<input type="numb" data-typeTransform="translate" name="norm_hemoglobin" value="110-170">
								</div>
							</div>
							<div class="label-two-input">
								<div class="pati_data">
									<label>Leucociti</label>
									<input type="numb" data-typeTransform="translate" name="leukocytes" value="">
								</div>
								<div class="norm">
									<label>10⁹/l</label>
									<input type="numb" data-typeTransform="translate" name="norm_leukocytes" value="4.0-10.0">
								</div>
							</div>
							<div class="label-two-input">
								<div class="pati_data">
									<label>Ematocrito (HCT)</label>
									<input type="numb" data-typeTransform="translate" name="hematocritis" value="">
								</div>
								<div class="norm">
									<label>%</label>
									<input type="numb" data-typeTransform="translate" name="norm_hematocritis" value="25-45">
								</div>
							</div>
							<div class="label-two-input">
								<div class="pati_data">
									<label>MCH</label>
									<input type="numb" data-typeTransform="translate" name="mch" value="">
								</div>
								<div class="norm">
									<label>pg</label>
									<input type="numb" data-typeTransform="translate" name="norm_mch" value="27-34">
								</div>
							</div>
							<div class="label-two-input">
								<div class="pati_data">
									<label>MCV</label>
									<input type="numb" data-typeTransform="translate" name="mcv" value="">
								</div>
								<div class="norm">
									<label>fl</label>
									<input type="numb" data-typeTransform="translate" name="norm_mcv" value="80-100">
								</div>
							</div>
							<div class="label-two-input">
								<div class="pati_data">
									<label>MCHC</label>
									<input type="numb" data-typeTransform="translate" name="mchc" value="">
								</div>
								<div class="norm">
									<label>g/l</label>
									<input type="numb" data-typeTransform="translate" name="norm_mchc" value="300-350">
								</div>
							</div>
							<div class="few_points">
								<div class="label-for_few">
									<h6>Form.Leucocitaria (%)</h6>
								</div>
								<div class="label-two-input">
									<div class="pati_data">
										<label>Gran.Neutrofili</label>
										<input type="numb" data-typeTransform="translate" name="neutrophiles_p" value="">
									</div>
									<div class="norm">
										<label>%</label>
										<input type="numb" data-typeTransform="translate" name="norm_neutrophiles_p" value="45-72">
									</div>
								</div>
								<div class="label-two-input">
									<div class="pati_data">
										<label>Gran.Eosinofili</label>
										<input type="numb" data-typeTransform="translate" name="eosiophiles_p" value="">
									</div>
									<div class="norm">
										<label>%</label>
										<input type="numb" data-typeTransform="translate" name="norm_eosiophiles_p" value="1-5">
									</div>
								</div>
								<div class="label-two-input">
									<div class="pati_data">
										<label>Gran.Basofili</label>
										<input type="numb" data-typeTransform="translate" name="basophiles_p" value="">
									</div>
									<div class="norm">
										<label>%</label>
										<input type="numb" data-typeTransform="translate" name="norm_basophiles_p" value="0-1">
									</div>
								</div>
								<div class="label-two-input">
									<div class="pati_data">
										<label>Monociti</label>
										<input type="numb" data-typeTransform="translate" name="monocytes_p" value="">
									</div>
									<div class="norm">
										<label>%</label>
										<input type="numb" data-typeTransform="translate" name="norm_monocytes_p" value="3-11">
									</div>
								</div>
								<div class="label-two-input">
									<div class="pati_data">
										<label>Linfociti</label>
										<input type="numb" data-typeTransform="translate" name="lymphocytes_p" value="">
									</div>
									<div class="norm">
										<label>%</label>
										<input type="numb" data-typeTransform="translate" name="norm_lymphocytes_p" value="19-37">
									</div>
								</div>
							</div>
							<div class="few_points">
								<div class="label-for_few">
									<h6>Form.Leucocitaria (Val.Assol.)</h6>
								</div>
								<div class="label-two-input">
									<div class="pati_data">
										<label>Gran.Neutrofili</label>
										<input type="numb" data-typeTransform="translate" name="neutrophiles_a" value="">
									</div>
									<div class="norm">
										<label>10⁹/l</label>
										<input type="numb" data-typeTransform="translate" name="norm_neutrophiles_a" value="?">
									</div>
								</div>
								<div class="label-two-input">
									<div class="pati_data">
										<label>Gran.Eosinofili</label>
										<input type="numb" data-typeTransform="translate" name="eosiophiles_a" value="">
									</div>
									<div class="norm">
										<label>10⁹/l</label>
										<input type="numb" data-typeTransform="translate" name="norm_eosiophiles_a" value="?">
									</div>
								</div>
								<div class="label-two-input">
									<div class="pati_data">
										<label>Gran.Basofili</label>
										<input type="numb" data-typeTransform="translate" name="basophiles_a" value="">
									</div>
									<div class="norm">
										<label>10⁹/l</label>
										<input type="numb" data-typeTransform="translate" name="norm_basophiles_a" value="0.0-0.2">
									</div>
								</div>
								<div class="label-two-input">
									<div class="pati_data">
										<label>Monociti</label>
										<input type="numb" data-typeTransform="translate" name="monocytes_a" value="">
									</div>
									<div class="norm">
										<label>10⁹/l</label>
										<input type="numb" data-typeTransform="translate" name="norm_monocytes_a" value="?">
									</div>
								</div>
								<div class="label-two-input">
									<div class="pati_data">
										<label>Linfociti</label>
										<input type="numb" data-typeTransform="translate" name="lymphocytes_a" value="">
									</div>
									<div class="norm">
										<label>10⁹/l</label>
										<input type="numb" data-typeTransform="translate" name="norm_lymphocytes_a" value="?">
									</div>
								</div>
							</div>
							<div class="label-two-input">
								<div class="pati_data">
									<label>Piastrine</label>
									<input type="numb" data-typeTransform="translate" name="platelets" value="">
								</div>
								<div class="norm">
									<label>10⁹/l</label>
									<input type="numb" data-typeTransform="translate" name="norm_platelets" value="150-400">
								</div>
							</div>
							<div class="few_points">
								<div class="label-for_few">
									<h6>Coagulazione</h6>
								</div>
								<div class="label-two-input">
									<div class="pati_data">
										<label>Attiv. Protrombinica</label>
										<input type="numb" data-typeTransform="translate" name="prothrombin" value="">
									</div>
									<div class="norm">
										<label>%</label>
										<input type="numb" data-typeTransform="translate" name="norm_prothrombin" value="70-140">
									</div>
								</div>
								<div class="label-two-input">
									<div class="pati_data">
										<label>INR</label>
										<input type="numb" data-typeTransform="translate" name="inr" value="">
									</div>
									<div class="norm">
										<label></label>
										<input type="numb" data-typeTransform="translate" name="norm_inr" value="2.00-4.00">
									</div>
								</div>
								<div class="label-two-input">
									<div class="pati_data">
										<label>Ptt (Tempo Tromb.Parz.)</label>
										<input type="numb" data-typeTransform="translate" name="ppt" value="">
									</div>
									<div class="norm">
										<label>?</label>
										<input type="numb" data-typeTransform="translate" name="norm_ppt" value="1-35">
									</div>
								</div>
							</div>
							<div class="few_points">
								<div class="label-for_few">
									<h6>Chimica Clinica</h6>
								</div>
								<div class="label-two-input">
									<div class="pati_data">
										<label>Glicemia</label>
										<input type="numb" data-typeTransform="translate" name="glycemia" value="">
									</div>
									<div class="norm">
										<label>?</label>
										<input type="numb" data-typeTransform="translate" name="norm_glycemia" value="60-110">
									</div>
								</div>
								<div class="label-two-input">
									<div class="pati_data">
										<label>Emoglobina Glic.(Hbaic)</label>
										<input type="numb" data-typeTransform="translate" name="hplc" value="">
									</div>
									<div class="norm">
										<label>%</label>
										<input type="numb" data-typeTransform="translate" name="norm_hplc" value="4.0-6.0">
									</div>
								</div>
								<div class="label-two-input">
									<div class="pati_data">
										<label>Acido Urico</label>
										<input type="numb" data-typeTransform="translate" name="urin_acid" value="">
									</div>
									<div class="norm">
										<label>?</label>
										<input type="numb" data-typeTransform="translate" name="norm_urin_acid" value="3.4-7.0">
									</div>
								</div>
								<div class="label-two-input">
									<div class="pati_data">
										<label> Colesterolo Totale</label>
										<input type="numb" data-typeTransform="translate" name="total_cholesterol" value="">
									</div>
									<div class="norm">
										<label>?</label>
										<input type="numb" data-typeTransform="translate" name="norm_total_cholesterol" value="130-200">
									</div>
								</div>
								<div class="label-two-input">
									<div class="pati_data">
										<label>Colesterolo Hdl</label>
										<input type="numb" data-typeTransform="translate" name="hdl" value="">
									</div>
									<div class="norm">
										<label>?</label>
										<input type="numb" data-typeTransform="translate" name="norm_hdl" value="?">
									</div>
								</div>
							</div>
							<div class="label-two-input">
								<div class="pati_data">
									<label>Velocità di sedimentazione eritrocitaria</label>
									<input type="numb" data-typeTransform="translate" name="esr" value="">
								</div>
								<div class="norm">
									<label>mm/ora</label>
									<input type="numb" data-typeTransform="translate" name="norm_esr" value="1-15">
								</div>
							</div>
						</div>
						<div class="doc_footer">
						</div>
					</form>
				</div>
				<div class="target_doc target_blood">
					<div class="preloader">
						<div class="preloader__row">
							<div class="preloader__item"></div>
							<div class="preloader__item"></div>
						</div>
					</div>
					
					<D class="target_doc_ru">
						<TL>Контрон СИГМА 210, ирис</TL>
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
						<NAM>Общий Анализ Крови</NAM>
						<N1>
							<SN1>
								<FCL>Показатель</FCL>
								<FCL>Данные пациента</FCL>
								<FCL>Единица измерения</FCL>
								<FCL>Норма</FCL>
							</SN1>
						</N1>
						<N2>
							<SN1>
								<NCL>Эритроциты</NCL>
								<PCL>4.2</PCL>
								<DOU>10¹²/л</DOU>
								<FK>3.5-5.0</FK>
							</SN1>
							<SN2>
								<NCL>Гемоглобин</NCL>
								<PCL>115</PCL>
								<DOU>г/л</DOU>
								<FK>110-170</FK>
							</SN2>
							<SN3>
								<NCL>Лейкоциты</NCL>
								<PCL>4.2</PCL>
								<DOU>10⁹/л</DOU>
								<FK>4.0-10.0</FK>
							</SN3>
							<SN4>
								<NCL>Гематокрит (HCT)</NCL>
								<PCL>32</PCL>
								<DOU>%</DOU>
								<FK>25-45</FK>
							</SN4>
							<SN5>
								<NCL>MCH</NCL>
								<PCL>30</PCL>
								<DOU>пг</DOU>
								<FK>27-34</FK>
							</SN5>
							<SN6>
								<NCL>MCV</NCL>
								<PCL>90</PCL>
								<DOU>фл</DOU>
								<FK>80-100</FK>
							</SN6>
							<SN7>
								<NCL>MCHC</NCL>
								<PCL>325</PCL>
								<DOU>г/л</DOU>
								<FK>300-350</FK>
							</SN7>
						</N2>
						<N3>
							<SN1>
								<DN>Лейкоцитарная форма (%)</DN>
							</SN1>
							<SN2>
								<NCL>Нейтрофилы</NCL>
								<PCL>50</PCL>
								<DOU>%</DOU>
								<FK>45-72</FK>
							</SN2>
							<SN3>
								<NCL>Эозинофилы</NCL>
								<PCL>4</PCL>
								<DOU>%</DOU>
								<FK>1-5</FK>
							</SN3>
							<SN4>
								<NCL>Базофилы</NCL>
								<PCL>1</PCL>
								<DOU>%</DOU>
								<FK>0-1</FK>
							</SN4>
							<SN5>
								<NCL>Моноциты</NCL>
								<PCL>5</PCL>
								<DOU>%</DOU>
								<FK>3-11</FK>
							</SN5>
							<SN6>
								<NCL>Лимфоциты</NCL>
								<PCL>30</PCL>
								<DOU>%</DOU>
								<FK>19-37</FK>
							</SN6>
						</N3>
						<N4>
							<SN1>
								<DN>Лейкоцитарная форма (Абсолютное значение)</DN>
							</SN1>
							<SN2>
								<NCL>Нейтрофилы</NCL>
								<PCL></PCL>
								<DOU>10⁹/л</DOU>
								<FK>?</FK>
							</SN2>
							<SN3>
								<NCL>Эозинофилы</NCL>
								<PCL></PCL>
								<DOU>10⁹/л</DOU>
								<FK>?</FK>
							</SN3>
							<SN4>
								<NCL>Базофилы</NCL>
								<PCL>0.1</PCL>
								<DOU>10⁹/л</DOU>
								<FK>0.0-0.2</FK>
							</SN4>
							<SN5>
								<NCL>Моноциты</NCL>
								<PCL></PCL>
								<DOU>10⁹/л</DOU>
								<FK>?</FK>
							</SN5>
							<SN6>
								<NCL>Лимфоциты</NCL>
								<PCL></PCL>
								<DOU>10⁹/л</DOU>
								<FK>?</FK>
							</SN6>
						</N4>
						<N5>
							<SN1>
								<NCL>Тромбоциты</NCL>
								<PCL>275</PCL>
								<DOU>10⁹/л</DOU>
								<FK>150-400</FK>
							</SN1>
						</N5>
						<N6>
							<SN1>
								<DN>Коагуляция</DN>
							</SN1>
							<SN2>
								<NCL>Протромбин</NCL>
								<PCL></PCL>
								<DOU>%</DOU>
								<FK>70-140</FK>
							</SN2>
							<SN3>
								<NCL>(INR)Международное нормализованное отношение</NCL>
								<PCL></PCL>
								<DOU></DOU>
								<FK>2.00-4.00</FK>
							</SN3>
							<SN4>
								<NCL>(PPT) частичное время тромбопластина</NCL>
								<PCL>0.1</PCL>
								<DOU>?</DOU>
								<FK>1-35</FK>
							</SN4>
						</N6>
						<N7>
							<SN1>
								<DN>Клиническая химия</DN>
							</SN1>
							<SN2>
								<NCL>Гликемия</NCL>
								<PCL></PCL>
								<DOU>?</DOU>
								<FK>60-110</FK>
							</SN2>
							<SN3>
								<NCL>Гликированный гемоглобин</NCL>
								<PCL></PCL>
								<DOU>%</DOU>
								<FK>4.0-6.0</FK>
							</SN3>
							<SN4>
								<NCL>Мочевая кислота</NCL>
								<PCL></PCL>
								<DOU>?</DOU>
								<FK>3.4-7.0</FK>
							</SN4>
							<SN5>
								<NCL>Общий холестерин</NCL>
								<PCL></PCL>
								<DOU>?</DOU>
								<FK>130-200</FK>
							</SN5>
							<SN6>
								<NCL>Холестерин ЛПВП</NCL>
								<PCL></PCL>
								<DOU>?</DOU>
								<FK>?</FK>
							</SN6>
							<SN7>
								<NCL>Скорость оседания эритроцитов</NCL>
								<PCL></PCL>
								<DOU>мм/час</DOU>
								<FK>1-15</FK>
							</SN7>
						</N7>
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
						<NAM>Загальний аналіз крові</NAM>
						<N1>
							<SN1>
								<FCL>Показник</FCL>
								<FCL>Дані пацієнта</FCL>
								<FCL>Одиниця вимірювання</FCL>
								<FCL>Норма</FCL>
							</SN1>
						</N1>
						<N2>
							<SN1>
								<NCL>Еритроцити</NCL>
								<PCL>4.2</PCL>
								<DOU>10¹²/л</DOU>
								<FK>3.5-5.0</FK>
							</SN1>
							<SN2>
								<NCL>Гемоглобін</NCL>
								<PCL>115</PCL>
								<DOU>г/л</DOU>
								<FK>110-170</FK>
							</SN2>
							<SN3>
								<NCL>Лейкоцити</NCL>
								<PCL>4.2</PCL>
								<DOU>10⁹/л</DOU>
								<FK>4.0-10.0</FK>
							</SN3>
							<SN4>
								<NCL>Гематокрит (HCT)</NCL>
								<PCL>32</PCL>
								<DOU>%</DOU>
								<FK>25-45</FK>
							</SN4>
							<SN5>
								<NCL>MCH</NCL>
								<PCL>30</PCL>
								<DOU>пг</DOU>
								<FK>27-34</FK>
							</SN5>
							<SN6>
								<NCL>MCV</NCL>
								<PCL>90</PCL>
								<DOU>фл</DOU>
								<FK>80-100</FK>
							</SN6>
							<SN7>
								<NCL>MCHC</NCL>
								<PCL>325</PCL>
								<DOU>г/л</DOU>
								<FK>300-350</FK>
							</SN7>
						</N2>
						<N3>
							<SN1>
								<DN>Лейкоцитарна форма (%)</DN>
							</SN1>
							<SN2>
								<NCL>Нейтрофіли</NCL>
								<PCL>50</PCL>
								<DOU>%</DOU>
								<FK>45-72</FK>
							</SN2>
							<SN3>
								<NCL>Еозінофіли</NCL>
								<PCL>4</PCL>
								<DOU>%</DOU>
								<FK>1-5</FK>
							</SN3>
							<SN4>
								<NCL>Базофіли</NCL>
								<PCL>1</PCL>
								<DOU>%</DOU>
								<FK>0-1</FK>
							</SN4>
							<SN5>
								<NCL>Моноцити</NCL>
								<PCL>5</PCL>
								<DOU>%</DOU>
								<FK>3-11</FK>
							</SN5>
							<SN6>
								<NCL>Лімфоцити</NCL>
								<PCL>30</PCL>
								<DOU>%</DOU>
								<FK>19-37</FK>
							</SN6>
						</N3>
						<N4>
							<SN1>
								<DN>Лейкоцитарна форма (абсолютне значення)</DN>
							</SN1>
							<SN2>
								<NCL>Нейтрофіли</NCL>
								<PCL></PCL>
								<DOU>10⁹/л</DOU>
								<FK>?</FK>
							</SN2>
							<SN3>
								<NCL>Еозінофіли</NCL>
								<PCL></PCL>
								<DOU>10⁹/л</DOU>
								<FK>?</FK>
							</SN3>
							<SN4>
								<NCL>Базофіли</NCL>
								<PCL>0.1</PCL>
								<DOU>10⁹/л</DOU>
								<FK>0.0-0.2</FK>
							</SN4>
							<SN5>
								<NCL>Моноцити</NCL>
								<PCL></PCL>
								<DOU>10⁹/л</DOU>
								<FK>?</FK>
							</SN5>
							<SN6>
								<NCL>Лімфоцити</NCL>
								<PCL></PCL>
								<DOU>10⁹/л</DOU>
								<FK>?</FK>
							</SN6>
						</N4>
						<N5>
							<SN1>
								<NCL>Тромбоцити</NCL>
								<PCL>275</PCL>
								<DOU>10⁹/л</DOU>
								<FK>150-400</FK>
							</SN1>
						</N5>
						<N6>
							<SN1>
								<DN>Коагуляція</DN>
							</SN1>
							<SN2>
								<NCL>Протромбін</NCL>
								<PCL></PCL>
								<DOU>%</DOU>
								<FK>70-140</FK>
							</SN2>
							<SN3>
								<NCL>(INR)Міждународне нормальне відношення</NCL>
								<PCL></PCL>
								<DOU></DOU>
								<FK>2.00-4.00</FK>
							</SN3>
							<SN4>
								<NCL>(PPT) Частковий час тромбопластину</NCL>
								<PCL>0.1</PCL>
								<DOU>?</DOU>
								<FK>1-35</FK>
							</SN4>
						</N6>
						<N7>
							<SN1>
								<DN>Клінічна хімія</DN>
							</SN1>
							<SN2>
								<NCL>Гліцемія</NCL>
								<PCL></PCL>
								<DOU>?</DOU>
								<FK>60-110</FK>
							</SN2>
							<SN3>
								<NCL>Глікозований гемоглобін</NCL>
								<PCL></PCL>
								<DOU>%</DOU>
								<FK>4.0-6.0</FK>
							</SN3>
							<SN4>
								<NCL>Сечова кислота</NCL>
								<PCL></PCL>
								<DOU>?</DOU>
								<FK>3.4-7.0</FK>
							</SN4>
							<SN5>
								<NCL>Загальний холестерин</NCL>
								<PCL></PCL>
								<DOU>?</DOU>
								<FK>130-200</FK>
							</SN5>
							<SN6>
								<NCL>Холестеролу ЛПВЩ</NCL>
								<PCL></PCL>
								<DOU>?</DOU>
								<FK>?</FK>
							</SN6>
							<SN7>
								<NCL>Швидкість осідання еритроцитів</NCL>
								<PCL></PCL>
								<DOU>мм/год</DOU>
								<FK>1-15</FK>
							</SN7>
						</N7>
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
						<NAM>General blood test</NAM>
						<N1>
							<SN1>
								<FCL>Indicator</FCL>
								<FCL>Patient data</FCL>
								<FCL>Unit of measurement</FCL>
								<FCL>Normal data</FCL>
							</SN1>
						</N1>
						<N2>
							<SN1>
								<NCL>Erythrocytes</NCL>
								<PCL>4.2</PCL>
								<DOU>10¹²/l</DOU>
								<FK>3.5-5.0</FK>
							</SN1>
							<SN2>
								<NCL>Hemoglobin</NCL>
								<PCL>115</PCL>
								<DOU>g/l</DOU>
								<FK>110-170</FK>
							</SN2>
							<SN3>
								<NCL>Leukocytes</NCL>
								<PCL>4.2</PCL>
								<DOU>10⁹/l</DOU>
								<FK>4.0-10.0</FK>
							</SN3>
							<SN4>
								<NCL>Hematocritis (HCT)</NCL>
								<PCL>32</PCL>
								<DOU>%</DOU>
								<FK>25-45</FK>
							</SN4>
							<SN5>
								<NCL>MCH</NCL>
								<PCL>30</PCL>
								<DOU>pg</DOU>
								<FK>27-34</FK>
							</SN5>
							<SN6>
								<NCL>MCV</NCL>
								<PCL>90</PCL>
								<DOU>fl</DOU>
								<FK>80-100</FK>
							</SN6>
							<SN7>
								<NCL>MCHC</NCL>
								<PCL>325</PCL>
								<DOU>g/l</DOU>
								<FK>300-350</FK>
							</SN7>
						</N2>
						<N3>
							<SN1>
								<DN>Leukocytic form (%)</DN>
							</SN1>
							<SN2>
								<NCL>Neutrophiles</NCL>
								<PCL>50</PCL>
								<DOU>%</DOU>
								<FK>45-72</FK>
							</SN2>
							<SN3>
								<NCL>Eosiophiles</NCL>
								<PCL>4</PCL>
								<DOU>%</DOU>
								<FK>1-5</FK>
							</SN3>
							<SN4>
								<NCL>Basophiles</NCL>
								<PCL>1</PCL>
								<DOU>%</DOU>
								<FK>0-1</FK>
							</SN4>
							<SN5>
								<NCL>Monocytes</NCL>
								<PCL>5</PCL>
								<DOU>%</DOU>
								<FK>3-11</FK>
							</SN5>
							<SN6>
								<NCL>Lymphocytes</NCL>
								<PCL>30</PCL>
								<DOU>%</DOU>
								<FK>19-37</FK>
							</SN6>
						</N3>
						<N4>
							<SN1>
								<DN>Leukocytic form (absolute value)</DN>
							</SN1>
							<SN2>
								<NCL>Neutrophiles</NCL>
								<PCL></PCL>
								<DOU>10⁹/l</DOU>
								<FK>?</FK>
							</SN2>
							<SN3>
								<NCL>Eosiophiles</NCL>
								<PCL></PCL>
								<DOU>10⁹/l</DOU>
								<FK>?</FK>
							</SN3>
							<SN4>
								<NCL>Basophiles</NCL>
								<PCL>0.1</PCL>
								<DOU>10⁹/l</DOU>
								<FK>0.0-0.2</FK>
							</SN4>
							<SN5>
								<NCL>Monocytes</NCL>
								<PCL></PCL>
								<DOU>10⁹/l</DOU>
								<FK>?</FK>
							</SN5>
							<SN6>
								<NCL>Lymphocytes</NCL>
								<PCL></PCL>
								<DOU>10⁹/l</DOU>
								<FK>?</FK>
							</SN6>
						</N4>
						<N5>
							<SN1>
								<NCL>Platelets</NCL>
								<PCL>275</PCL>
								<DOU>10⁹/l</DOU>
								<FK>150-400</FK>
							</SN1>
						</N5>
						<N6>
							<SN1>
								<DN>Coagulation</DN>
							</SN1>
							<SN2>
								<NCL>Prothrombin</NCL>
								<PCL></PCL>
								<DOU>%</DOU>
								<FK>70-140</FK>
							</SN2>
							<SN3>
								<NCL>INR</NCL>
								<PCL></PCL>
								<DOU></DOU>
								<FK>2.00-4.00</FK>
							</SN3>
							<SN4>
								<NCL>PPT (Partial Thromboplastin Time)</NCL>
								<PCL>0.1</PCL>
								<DOU>?</DOU>
								<FK>1-35</FK>
							</SN4>
						</N6>
						<N7>
							<SN1>
								<DN>Clinical chemistry</DN>
							</SN1>
							<SN2>
								<NCL>Glycemia</NCL>
								<PCL></PCL>
								<DOU>?</DOU>
								<FK>60-110</FK>
							</SN2>
							<SN3>
								<NCL>Glycated hemoglobin</NCL>
								<PCL></PCL>
								<DOU>%</DOU>
								<FK>4.0-6.0</FK>
							</SN3>
							<SN4>
								<NCL>Uric acid</NCL>
								<PCL></PCL>
								<DOU>?</DOU>
								<FK>3.4-7.0</FK>
							</SN4>
							<SN5>
								<NCL>Total cholesterol</NCL>
								<PCL></PCL>
								<DOU>?</DOU>
								<FK>130-200</FK>
							</SN5>
							<SN6>
								<NCL>Cholesterol HDL</NCL>
								<PCL></PCL>
								<DOU>?</DOU>
								<FK>?</FK>
							</SN6>
							<SN7>
								<NCL>Erythrocyte sedimentation rate</NCL>
								<PCL></PCL>
								<DOU>mm/h</DOU>
								<FK>1-15</FK>
							</SN7>
						</N7>
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
						<NAM>Esame Emocromocitometrico</NAM>
						<N1>
							<SN1>
								<FCL>Indicatore</FCL>
								<FCL>Dati del paziente</FCL>
								<FCL>Unità</FCL>
								<FCL>Valore normale</FCL>
							</SN1>
						</N1>
						<N2>
							<SN1>
								<NCL>Eritrociti</NCL>
								<PCL>4.2</PCL>
								<DOU>10¹²/l</DOU>
								<FK>3.5-5.0</FK>
							</SN1>
							<SN2>
								<NCL>Emoglobina</NCL>
								<PCL>115</PCL>
								<DOU>г/l</DOU>
								<FK>110-170</FK>
							</SN2>
							<SN3>
								<NCL>Leucociti</NCL>
								<PCL>4.2</PCL>
								<DOU>10⁹/l</DOU>
								<FK>4.0-10.0</FK>
							</SN3>
							<SN4>
								<NCL>Ematocrito (HCT)</NCL>
								<PCL>32</PCL>
								<DOU>%</DOU>
								<FK>25-45</FK>
							</SN4>
							<SN5>
								<NCL>MCH</NCL>
								<PCL>30</PCL>
								<DOU>pg</DOU>
								<FK>27-34</FK>
							</SN5>
							<SN6>
								<NCL>MCV</NCL>
								<PCL>90</PCL>
								<DOU>fl</DOU>
								<FK>80-100</FK>
							</SN6>
							<SN7>
								<NCL>MCHC</NCL>
								<PCL>325</PCL>
								<DOU>g/l</DOU>
								<FK>300-350</FK>
							</SN7>
						</N2>
						<N3>
							<SN1>
								<DN>Form.Leucocitaria (%)</DN>
							</SN1>
							<SN2>
								<NCL>Gran.Neutrofili</NCL>
								<PCL>50</PCL>
								<DOU>%</DOU>
								<FK>45-72</FK>
							</SN2>
							<SN3>
								<NCL>Gran.Eosinofili</NCL>
								<PCL>4</PCL>
								<DOU>%</DOU>
								<FK>1-5</FK>
							</SN3>
							<SN4>
								<NCL>Gran.Basofili</NCL>
								<PCL>1</PCL>
								<DOU>%</DOU>
								<FK>0-1</FK>
							</SN4>
							<SN5>
								<NCL>Monociti</NCL>
								<PCL>5</PCL>
								<DOU>%</DOU>
								<FK>3-11</FK>
							</SN5>
							<SN6>
								<NCL>Linfociti</NCL>
								<PCL>30</PCL>
								<DOU>%</DOU>
								<FK>19-37</FK>
							</SN6>
						</N3>
						<N4>
							<SN1>
								<DN>Form.Leucocitaria (Val.Assol.)</DN>
							</SN1>
							<SN2>
								<NCL>Gran.Neutrofili</NCL>
								<PCL></PCL>
								<DOU>10⁹/l</DOU>
								<FK>?</FK>
							</SN2>
							<SN3>
								<NCL>Gran.Eosinofili</NCL>
								<PCL></PCL>
								<DOU>10⁹/l</DOU>
								<FK>?</FK>
							</SN3>
							<SN4>
								<NCL>Gran.Basofili</NCL>
								<PCL>0.1</PCL>
								<DOU>10⁹/l</DOU>
								<FK>0.0-0.2</FK>
							</SN4>
							<SN5>
								<NCL>Monociti</NCL>
								<PCL></PCL>
								<DOU>10⁹/l</DOU>
								<FK>?</FK>
							</SN5>
							<SN6>
								<NCL>Linfociti</NCL>
								<PCL></PCL>
								<DOU>10⁹/l</DOU>
								<FK>?</FK>
							</SN6>
						</N4>
						<N5>
							<SN1>
								<NCL>Piastrine</NCL>
								<PCL>275</PCL>
								<DOU>10⁹/l</DOU>
								<FK>150-400</FK>
							</SN1>
						</N5>
						<N6>
							<SN1>
								<DN>Coagulazione</DN>
							</SN1>
							<SN2>
								<NCL>Attiv. Protrombinica</NCL>
								<PCL></PCL>
								<DOU>%</DOU>
								<FK>70-140</FK>
							</SN2>
							<SN3>
								<NCL>INR</NCL>
								<PCL></PCL>
								<DOU></DOU>
								<FK>2.00-4.00</FK>
							</SN3>
							<SN4>
								<NCL>Ptt (Tempo Tromb.Parz.)</NCL>
								<PCL>0.1</PCL>
								<DOU>?</DOU>
								<FK>1-35</FK>
							</SN4>
						</N6>
						<N7>
							<SN1>
								<DN>Chimica Clinica</DN>
							</SN1>
							<SN2>
								<NCL>Glicemia</NCL>
								<PCL></PCL>
								<DOU>?</DOU>
								<FK>60-110</FK>
							</SN2>
							<SN3>
								<NCL>Emoglobina Glic.(Hbaic)</NCL>
								<PCL></PCL>
								<DOU>%</DOU>
								<FK>4.0-6.0</FK>
							</SN3>
							<SN4>
								<NCL>Acido Urico</NCL>
								<PCL></PCL>
								<DOU>?</DOU>
								<FK>3.4-7.0</FK>
							</SN4>
							<SN5>
								<NCL>Colesterolo Totale</NCL>
								<PCL></PCL>
								<DOU>?</DOU>
								<FK>130-200</FK>
							</SN5>
							<SN6>
								<NCL>Colesterolo Hdl</NCL>
								<PCL></PCL>
								<DOU>?</DOU>
								<FK>?</FK>
							</SN6>
							<SN7>
								<NCL>Velocità di sedimentazione eritrocitaria</NCL>
								<PCL></PCL>
								<DOU>mm/ora</DOU>
								<FK>1-15</FK>
							</SN7>
						</N7>
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
