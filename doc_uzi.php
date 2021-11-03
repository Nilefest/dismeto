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
    <input type="hidden" name="doc_type" class="doc_type" value="uzi">

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
                        <option value="/doc_uzi.php" selected>УЗД Щитовидной железы</option>
                        <option value="/doc_blood_research.php">Общий анализ крови</option>
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
                            <div class="type-research only-input">
                                <input type="text" data-typeTransform="translate" name="type_research" placeholder="Тип дослідження. Наприклад: Ультразвукове дослідження" value="Ультразвукове дослідження">
                            </div>
                            <div class="name-tools only-input">
                                <input type="text" data-typeTransform="translate-complex" name="name_tools" placeholder="Назва приладу. Наприклад: Контрон СИГМА 210, Ірис. Електронний лінійний датчик 7,5 МГц і конвексний-3,5 МГц" value="Контрон СИГМА 210, Ірис. Електронний лінійний датчик 7,5 МГц і конвексний-3,5 МГц">
                            </div>
                            <p class="tip_name-tools">(назва ультразвукового обладнання)</p>
                            <div class="patient-data">
                                <div class="doctor label-input">
                                    <label class="tip_doctor">Лікар</label>
                                    <input type="text" data-typeTransform="translite" name="doctor" value="Кузнецов Ю. М.">
                                </div>
                                <div class="patient label-input">
                                    <label class="tip_patient">Пацієнт</label>
                                    <input type="text" data-typeTransform="translite" name="patient" value="Жумабаев В. Н.">
                                </div>
                                <div class="research-number label-input">
                                    <label class="tip_research-number">Дослідження №</label>
                                    <input type="text" data-typeTransform="none" name="research_number" value="15684962">
                                </div>
                                <div class="date label-input">
                                    <label class="tip_date">від</label>
                                    <input type="date" data-typeTransform="date" name="date" value="2021-04-15">
                                </div>
                                <div class="reserch-organ label-input">
                                    <label class="tip_reserch-organ">Досліджуваний орган</label>
                                    <input type="text" data-typeTransform="translate" name="reserch_organ" value="Щитовидна залоза">
                                </div>
                            </div>
                        </div>
                        <div class="doc_body">
                            <p class="name_research">
                                Протокол ультразвукового дослідження щитовидної залози
                            </p>
                            <div class="label-textarea">
                                <label>Щитовидна залоза</label>
                                <textarea data-typeTransform="translate-complex" name="thyr_main">типової форми і розташування, контури рівні, чіткі, загальний обсяг 12,3 куб см. (без обсягу перешийка). Перешийок товщиною 4 мм., контури рівні, ехоструктура однорідна, ізоехогенная.</textarea>
                            </div>
                            <div class="label-textarea">
                                <label>Права доля</label>
                                <textarea data-typeTransform="translate-complex" name="thyr_right">розмірами 52 х 21 х 13 мм., об'ємом – 6,7 куб. см.., контури рівні, чіткі, ехоструктура однорідна, ізоехогенна.</textarea>
                            </div>
                            <div class="label-textarea">
                                <label>Ліва доля</label>
                                <textarea data-typeTransform="translate-complex" name="thyr_left">розмірами 48 х 18 х 14 мм., об'ємом - 5,6 куб. см, зхоструктура однорідна, ізоехогенна, додаткових утворень не визначається.</textarea>
                            </div>
                            <div class="label-textarea">
                                <label class="tip_other_info">Примітка</label>
                                <textarea data-typeTransform="translate-google" name="other_info">Регіонарні лімфатичні вузли не не візуалізуються.</textarea>
                            </div>
                        </div>
                        <div class="doc_footer">
                            <div class="diagnosis label-textarea">
                                <label>Лiкарський висновок</label>
                                <textarea data-typeTransform="translate-google" name="concl">Ехоструктурні зміни не виявлені</textarea>
                            </div>
                        </div>
                    </form>

                    <form class="original_doc_ru">
                        <div class="doc_head">
                            <div class="type-research only-input">
                                <input type="text" data-typeTransform="translate" name="type_research" placeholder="Тип исследования. Например: Ультразвуковое исследование" value="Ультразвуковое исследование">
                            </div>
                            <div class="name-tools only-input">
                                <input type="text" data-typeTransform="translate-complex" name="name_tools" placeholder="Название оборудования. Например: Контрон СИГМА 210, ирис. Электронные линейный датчик 7,5 МГц и конвексный - 3,5 МГц" value="Контрон СИГМА 210, ирис. Электронные линейный датчик 7,5 МГц и конвексный - 3,5 МГц">
                            </div>
                            <p class="tip_name-tools">(название ультразвукового оборудования)</p>
                            <div class="patient-data">
                                <div class="doctor label-input">
                                    <label class="tip_doctor">Врач</label>
                                    <input type="text" data-typeTransform="translite" name="doctor" value="Кузнецов Ю. М.">
                                </div>
                                <div class="patient label-input">
                                    <label class="tip_patient">Пациент</label>
                                    <input type="text" data-typeTransform="translite" name="patient" value="Жумабаев В. Н.">
                                </div>
                                <div class="research-number label-input">
                                    <label class="tip_research-number">Исследование №</label>
                                    <input type="text" name="research_number">
                                </div>
                                <div class="date label-input">
                                    <label class="tip_date">от</label>
                                    <input type="date" data-typeTransform="date" name="date" value="2021-04-15">
                                </div>
                                <div class="reserch-organ label-input">
                                    <label class="tip_reserch-organ">Исследуемый орган</label>
                                    <input type="text" data-typeTransform="translate" name="reserch_organ" value="Щитовидная железа">
                                </div>
                            </div>
                        </div>
                        <div class="doc_body">
                            <p class="name_research">
                                Протокол ультразвукового исследования щитовидной железы
                            </p>
                            <div class="label-textarea">
                                <label>Щитовидная железа</label>
                                <textarea data-typeTransform="translate-complex" name="thyr_main">типичной формы и расположения, контуры ровные, чёткие, общий объём 12,3 куб см. (без объёма перешейка). Перешеек толщиной 4 мм., контуры ровные, эхоструктура однородная, изоэхогенная.</textarea>
                            </div>
                            <div class="label-textarea">
                                <label>Правая доля</label>
                                <textarea data-typeTransform="translate-complex" name="thyr_right">размерами 52 х 21 х 13 мм., объёмом – 6,7 куб. см.., контуры ровные, чёткие, эхоструктура однородная, изоэхогенная.</textarea>
                            </div>
                            <div class="label-textarea">
                                <label>Левая доля</label>
                                <textarea data-typeTransform="translate-complex" name="thyr_left">размерами 48 х 18 х 14 мм., объёмом - 5,6 куб. см, зхоструктура однородная, изоэхогенная, дополнительных образований не определяется.</textarea>
                            </div>
                            <div class="label-textarea">
                                <label class="tip_other_info">Примечание</label>
                                <textarea data-typeTransform="translate-google" name="other_info">Регионарные лимфатические узлы не визуализируются.</textarea>
                            </div>
                        </div>
                        <div class="doc_footer">
                            <div class="diagnosis label-textarea">
                                <label>Заключение</label>
                                <textarea data-typeTransform="translate-google" name="concl">Эхоструктурные изменения не выявлены</textarea>
                            </div>
                        </div>
                    </form>

                    <form class="original_doc_en">
                        <div class="doc_head">
                            <div class="type-research only-input">
                                <input type="text" data-typeTransform="translate" name="type_research" placeholder="Type of Research. For example: Ultrasound examination" value="ULTRASOUND OF THE THYROID">
                            </div>
                            <div class="name-tools only-input">
                                <input type="text" data-typeTransform="translate-complex" name="name_tools" placeholder="Equipment name. For example:KONTRON Sigma Iris 210. Electronic linear probe 7.5 MHz and convex - 3.5 MHz" value="KONTRON Sigma Iris 210. Electronic linear probe 7.5 MHz and convex - 3.5 MHz">
                            </div>
                            <p class="tip_name-tools">(name of ultrasonic equipment)</p>
                            <div class="patient-data">
                                <div class="doctor label-input">
                                    <label class="tip_doctor">Doctor</label>
                                    <input type="text" data-typeTransform="translite" name="doctor" value="Kuznecov U. M.">
                                </div>
                                <div class="patient label-input">
                                    <label class="tip_patient">A patient</label>
                                    <input type="text" data-typeTransform="translite" name="patient" value="Smith V. N.">
                                </div>
                                <div class="research-number label-input">
                                    <label class="tip_research-number">Examine No.</label>
                                    <input type="text" data-typeTransform="none" name="research_number" value="15684962">
                                </div>
                                <div class="date label-input">
                                    <label class="tip_date">dated</label>
                                    <input type="date" data-typeTransform="date" name="date" value="2021-04-15">
                                </div>
                                <div class="reserch-organ label-input">
                                    <label class="tip_reserch-organ">Examined organ</label>
                                    <input type="text" data-typeTransform="translate" name="reserch_organ" value="Thyroid">
                                </div>
                            </div>
                        </div>
                        <div class="doc_body">
                            <p class="name_research">
                                ULTRASOUND OF THE THYROID
                            </p>
                            <div class="label-textarea">
                                <label>The thyroid gland</label>
                                <textarea data-typeTransform="translate-complex" name="thyr_main">has typical shape and location, the contours are even, clear, the total volume is 12.3 cubic cm (without the volume of isthmus). The isthmus is 4 mm thick, the contours are even, the echostructure is homogeneous, isoechoic.</textarea>
                            </div>
                            <div class="label-textarea">
                                <label>The right lobe</label>
                                <textarea data-typeTransform="translate-complex" name="thyr_right">measures 52 x 21 x 13 mm., Volume - 6.7 cubic cm., the contours are smooth, clear, the echostructure is homogeneous, isoechoic.</textarea>
                            </div>
                            <div class="label-textarea">
                                <label>The left lobe</label>
                                <textarea data-typeTransform="translate-complex" name="thyr_left">measures 48 x 18 x 14 mm, volume - 5.6 cubic cm, the structure is homogeneous, isoechoic, no additional formations are detected.</textarea>
                            </div>
                            <div class="label-textarea">
                                <label class="tip_other_info">Note</label>
                                <textarea data-typeTransform="translate-google" name="other_info">Regional lymph nodes are not visualized.</textarea>
                            </div>
                        </div>
                        <div class="doc_footer">
                            <div class="diagnosis label-textarea">
                                <label>Conclusion</label>
                                <textarea data-typeTransform="translate-google" name="concl">Echostructural changes were not identified</textarea>
                            </div>
                        </div>
                    </form>

                    <form class="original_doc_it">
                        <div class="doc_head">
                            <div class="type-research only-input">
                                <input type="text" data-typeTransform="translate" name="type_research" placeholder="Tipo di ricerca. Ad esempio: esame ecografico" value="ULTRASOUND OF THE THYROID">
                            </div>
                            <div class="name-tools only-input">
                                <input type="text" data-typeTransform="translate-complex" name="name_tools" placeholder="Name tool" value="KONTRON Sigma Iris 210. Electronic linear probe 7.5 MHz and convex - 3.5 MHz">
                            </div>
                            <p class="tip_name-tools">(nome dell'attrezzatura ad ultrasuoni)</p>
                            <div class="patient-data">
                                <div class="patient label-input">
                                    <label class="tip_patient">Nome del paziente</label>
                                    <input type="text" data-typeTransform="translite" name="patient" value="Smith V. N.">
                                </div>
                                <div class="birth label-input">
                                    <label class="tip_birth">Data di nascita</label>
                                    <input type="date" data-typeTransform="date" name="birth" value="2021-04-15">
                                </div>
                                <div class="live label-input">
                                    <label class="tip_live">Residenza : via , città , regione , c.a.p</label>
                                    <input type="text" data-typeTransform="translate-google" name="live" value="">
                                </div>
                                <div class="tel label-input">
                                    <label class="tip_tel">Numero di telefono del paziente</label>
                                    <input type="numb" data-typeTransform="none" name="tel" value="">
                                </div>
                                <div class="email label-input">
                                    <label class="tip_email">e-mail</label>
                                    <input type="email" data-typeTransform="none" name="email" value="">
                                </div>
                                <div class="research-number label-input">
                                    <label class="tip_research-number">Numero di protocollo</label>
                                    <input type="text" data-typeTransform="none" name="research_number" value="15684962">
                                </div>
                                <div class="date label-input">
                                    <label class="tip_date">Data d’accertamento</label>
                                    <input type="date" data-typeTransform="date" name="date" value="2021-04-15">
                                </div>
                                <div class="reserch-organ label-input">
                                    <label class="tip_reserch-organ">Tiroide</label>
                                    <input type="text" data-typeTransform="translate" name="reserch_organ" value="Thyroid">
                                </div>
                            </div>
                        </div>
                        <div class="doc_body">
                            <p class="name_research">
                                Ecografia del collo
                            </p>
                            <div class="label-textarea">
                                <label>Tiroide regolare per morfovolumetria</label>
                                <textarea data-typeTransform="translate-complex" name="thyr_main">ha una forma e posizione tipiche a contorni regolari. L'istmo ha uno spessore di 4 mm, i contorni sono regolari, l'ecostruttura è omogenea, isoecogena.</textarea>
                            </div>
                            <div class="label-textarea">
                                <label>Il lobo destro</label>
                                <textarea data-typeTransform="translate-complex" name="thyr_right">misura 52 x 21 x 13 mm, volume - 6,7 cm3, i contorni sono uniformi, regolari  l'ecostruttura è omogenea, isoecogena.</textarea>
                            </div>
                            <div class="label-textarea">
                                <label>Il lobo sinistro</label>
                                <textarea data-typeTransform="translate-complex" name="thyr_left">misura 48 x 18 x 14 mm, volume - 5,6 cm3,  I contorni sono regolari ,  la struttura.  omogenea, isoecogena.</textarea>
                            </div>
                            <div class="label-textarea">
                                <label class="tip_other_info">Nota</label>
                                <textarea data-typeTransform="translate-google" name="other_info">I linfonodi regionali non vengono visualizzati.</textarea>
                            </div>
                        </div>
                        <div class="doc_footer">
                            <div class="diagnosis label-textarea">
                                <label>Conclusione</label>
                                <textarea data-typeTransform="translate-google" name="concl">I cambiamenti ecostrutturali non sono rilevati. Non sono presenti  formazioni patologiche.</textarea>
                            </div>
                            <div class="doctor label-input">
                                <label class="tip_doctor">Medico</label>
                                <input type="text" data-typeTransform="translite" name="doctor" value="Kuznecov U. M.">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="target_doc">
                    <div class="preloader">
                        <div class="preloader__row">
                            <div class="preloader__item"></div>
                            <div class="preloader__item"></div>
                        </div>
                    </div>

                    <D class="target_doc_ru">
                        <TYP>Ультразвуковое исследование</TYP>
                        <TL>Контрон СИГМА 210, ирис. Электронные линейный датчик 7,5 МГц и конвексный - 3,5 МГц</TL>
                        <FK>(название ультразвукового оборудования)</FK>
                        <DM>
                            <TIP>Врач:</TIP>
                            <VAL>Кузнецов Ю. М.</VAL>
                        </DM>
                        <PAT>
                            <TIP>Пациент:</TIP>
                            <VAL>Жумабаев В. Н.</VAL>
                        </PAT>
                        <RES>
                            <TIP>Исследование №</TIP>
                            <VAL>15684962</VAL>
                        </RES>
                        <DAT>
                            <TIP>от</TIP>
                            <VAL>15.04.2021</VAL>
                        </DAT>
                        <ORG>
                            <TIP>Исследуемый орган:</TIP>
                            <VAL>Щитовидная железа</VAL>
                        </ORG>
                        <NAM>Протокол УЗИ щитовидной железы (норма)</NAM>
                        <N1>
                            <SN1>
                                <DN>Щитовидная железа</DN>
                                <FCL>типичной формы и расположения</FCL>
                            </SN1>
                            <SN2>
                                <NCL>контуры</NCL>
                                <FCL>ровные, чёткие</FCL>
                            </SN2>
                            <SN3>
                                <NCL>общий объём</NCL>
                                <PCL>12,3</PCL>
                                <DOU>куб см.</DOU>
                            </SN3>
                            <FK>без объёма перешейка</FK>
                            <SN4>
                                <SN1>
                                    <NCL>Перешеек толщиной</NCL>
                                    <PCL>4</PCL>
                                    <DOU>мм.</DOU>
                                </SN1>
                                <SN2>
                                    <NCL>контуры</NCL>
                                    <FCL>ровные</FCL>
                                </SN2>
                                <SN3>
                                    <NCL>эхоструктура</NCL>
                                    <FCL>однородная, изоэхогенная</FCL>
                                </SN3>
                            </SN4>
                        </N1>
                        <N2>
                            <SN1>
                                <DN>Правая доля</DN>
                            </SN1>
                            <SN2>
                                <NCL>размерами</NCL>
                                <PCL>52x21x13</PCL>
                                <DOU>мм.</DOU>
                            </SN2>
                            <SN3>
                                <NCL>объёмом</NCL>
                                <PCL>6,7</PCL>
                                <DOU>куб. см.</DOU>
                            </SN3>
                            <SN4>
                                <NCL>контуры</NCL>
                                <FCL>ровные, чёткие</FCL>
                            </SN4>
                            <SN5>
                                <NCL>эхоструктура</NCL>
                                <FCL>однородная, изоэхогенная</FCL>
                            </SN5>
                        </N2>
                        <N3>
                            <SN1>
                                <DN>Левая доля</DN>
                            </SN1>
                            <SN2>
                                <NCL>размерами</NCL>
                                <PCL>48x18x14</PCL>
                                <DOU>мм.</DOU>
                            </SN2>
                            <SN3>
                                <NCL>объёмом</NCL>
                                <PCL>5,6</PCL>
                                <DOU>куб. см</DOU>
                            </SN3>
                            <SN4>
                                <NCL>зхоструктура</NCL>
                                <FCL>однородная, изоэхогенная</FCL>
                            </SN4>
                            <SN5>
                                <FCL>дополнительных образований не определяется</FCL>
                            </SN5>
                        </N3>
                        <N4>
                            <SN1>
                                <DN>Регионарные лимфатические узлы</DN>
                                <FCL>не визуализируются</FCL>
                            </SN1>
                        </N4>
                        <N5>
                            <SN1>
                                <DN>Заключение</DN>
                                <FCL>Эхоструктурные изменения не выявлены</FCL>
                            </SN1>
                        </N5>
                    </D>

                    <D class="target_doc_uk">
                        <TYP>Ультразвукове дослідження</TYP>
                        <TL>Контрон СИГМА 210, Ірис. Електронний лінійний датчик 7,5 МГц і конвексний-3,5 МГц</TL>
                        <FK>(назва ультразвукового обладнання)</FK>
                        <DM>
                            <TIP>Лікар:</TIP>
                            <VAL>Кузнецов Ю. М.</VAL>
                        </DM>
                        <PAT>
                            <TIP>Пацієнт:</TIP>
                            <VAL>Жумабаев В. Н.</VAL>
                        </PAT>
                        <RES>
                            <TIP>Дослідження №</TIP>
                            <VAL>15684962</VAL>
                        </RES>
                        <DAT>
                            <TIP>від</TIP>
                            <VAL>15.04.2021</VAL>
                        </DAT>
                        <ORG>
                            <TIP>Досліджуваний орган:</TIP>
                            <VAL>Щитовидна залоза</VAL>
                        </ORG>
                        <NAM>Протокол ультразвукового дослідження щитовидної залози <FK>(норма)</FK>
                        </NAM>
                        <N1>
                            <SN1>
                                <DN>Щитовидна залоза</DN>
                                <FCL>типової форми і розташування</FCL>
                            </SN1>
                            <SN2>
                                <NCL>контури</NCL>
                                <FCL>рівні, чіткі</FCL>
                            </SN2>
                            <SN3>
                                <NCL>загальний обсяг</NCL>
                                <PCL>12,3</PCL>
                                <DOU>куб см.</DOU>
                            </SN3>
                            <FK>(без обсягу перешийка)</FK>
                            <SN4>
                                <SN1>
                                    <NCL>Перешийок товщиною</NCL>
                                    <PCL>4</PCL>
                                    <DOU>мм.</DOU>
                                </SN1>
                                <SN2>
                                    <NCL>контури</NCL>
                                    <FCL>рівні</FCL>
                                </SN2>
                                <SN3>
                                    <NCL>ехоструктура</NCL>
                                    <FCL>однорідна, ізоехогенная</FCL>
                                </SN3>
                            </SN4>
                        </N1>
                        <N2>
                            <SN1>
                                <DN>Права доля</DN>
                            </SN1>
                            <SN2>
                                <NCL>розмірами</NCL>
                                <PCL>52x21x13</PCL>
                                <DOU>мм.</DOU>
                            </SN2>
                            <SN3>
                                <NCL>об'ємом</NCL>
                                <PCL>6,7</PCL>
                                <DOU>куб. см.</DOU>
                            </SN3>
                            <SN4>
                                <NCL>контури</NCL>
                                <FCL>рівні, чіткі</FCL>
                            </SN4>
                            <SN5>
                                <NCL>ехоструктура</NCL>
                                <FCL>однорідна, ізоехогенная</FCL>
                            </SN5>
                        </N2>
                        <N3>
                            <SN1>
                                <DN>Ліва доля</DN>
                            </SN1>
                            <SN2>
                                <NCL>розмірами</NCL>
                                <PCL>48x18x14</PCL>
                                <DOU>мм.</DOU>
                            </SN2>
                            <SN3>
                                <NCL>об'ємом</NCL>
                                <PCL>5,6</PCL>
                                <DOU>куб. см</DOU>
                            </SN3>
                            <SN4>
                                <NCL>зхоструктура</NCL>
                                <FCL>однорідна, ізоехогенна</FCL>
                            </SN4>
                            <SN5>
                                <FCL>додаткових утворень не визначається</FCL>
                            </SN5>
                        </N3>
                        <N4>
                            <SN1>
                                <DN>Регіонарні лімфатичні вузли</DN>
                                <FCL>не візуалізуються</FCL>
                            </SN1>
                        </N4>
                        <N5>
                            <SN1>
                                <DN>Лiкарський висновок</DN>
                                <FCL>Ехоструктурні зміни не виявлені</FCL>
                            </SN1>
                        </N5>
                    </D>

                    <D class="target_doc_en">
                        <TYP>ULTRASOUND OF THE THYROID</TYP>
                        <TL>KONTRON Sigma Iris 210. Electronic linear probe 7.5 MHz and convex - 3.5 MHz</TL>
                        <FK>(name of ultrasonic equipment)</FK>
                        <DM>
                            <TIP>Doctor:</TIP>
                            <VAL>Kuznecov U. M.</VAL>
                        </DM>
                        <PAT>
                            <TIP>A patient:</TIP>
                            <VAL>Smith V. N.</VAL>
                        </PAT>
                        <RES>
                            <TIP>Examine No.</TIP>
                            <VAL>15684962</VAL>
                        </RES>
                        <DAT>
                            <TIP>dated</TIP>
                            <VAL>15.04.2021</VAL>
                        </DAT>
                        <ORG>
                            <TIP>Examined organ:</TIP>
                            <VAL>Thyroid</VAL>
                        </ORG>
                        <NAM>ULTRASOUND OF THE THYROID (normal)</NAM>
                        <N1>
                            <SN1>
                                <DN>The thyroid gland</DN>
                                <FCL>has typical shape and location</FCL>
                            </SN1>
                            <SN2>
                                <NCL>the contours are</NCL>
                                <FCL>even, clear</FCL>
                            </SN2>
                            <SN3>
                                <NCL>the total volume is</NCL>
                                <PCL>12,3</PCL>
                                <DOU>cubic cm</DOU>
                            </SN3>
                            <FK>(without the volume of isthmus)</FK>
                            <SN4>
                                <SN1>
                                    <NCL>The isthmus is<PCL>4</PCL>
                                        <DOU>mm.</DOU>thick
                                    </NCL>
                                </SN1>
                                <SN2>
                                    <NCL>the contours are</NCL>
                                    <FCL>even</FCL>
                                </SN2>
                                <SN3>
                                    <NCL>the echostructure is</NCL>
                                    <FCL>homogeneous, isoechoic</FCL>
                                </SN3>
                            </SN4>
                        </N1>
                        <N2>
                            <SN1>
                                <DN>The right lobe</DN>
                            </SN1>
                            <SN2>
                                <NCL>measures</NCL>
                                <PCL>52x21x13</PCL>
                                <DOU>mm.</DOU>
                            </SN2>
                            <SN3>
                                <NCL>Volume</NCL>
                                <PCL>6,7</PCL>
                                <DOU>cubic cm.</DOU>
                            </SN3>
                            <SN4>
                                <NCL>the contours are</NCL>
                                <FCL>smooth, clear</FCL>
                            </SN4>
                            <SN5>
                                <NCL>the echostructure is</NCL>
                                <FCL>homogeneous, isoechoic</FCL>
                            </SN5>
                        </N2>
                        <N3>
                            <SN1>
                                <DN>The left lobe</DN>
                            </SN1>
                            <SN2>
                                <NCL>measures</NCL>
                                <PCL>48x18x14</PCL>
                                <DOU>mm.</DOU>
                            </SN2>
                            <SN3>
                                <NCL>Volume</NCL>
                                <PCL>5,6</PCL>
                                <DOU>cubic cm.</DOU>
                            </SN3>
                            <SN4>
                                <NCL>the echostructure is</NCL>
                                <FCL>homogeneous, isoechoic</FCL>
                            </SN4>
                            <SN5>
                                <FCL>no additional formations are detected</FCL>
                            </SN5>
                        </N3>
                        <N4>
                            <SN1>
                                <DN>Regional lymph nodes are</DN>
                                <FCL>not identified</FCL>
                            </SN1>
                        </N4>
                        <N5>
                            <SN1>
                                <DN>Conclusion</DN>
                                <FCL>Echostructural changes were not identified</FCL>
                            </SN1>
                        </N5>
                    </D>

                    <D class="target_doc_it">
                        <HOS>Nominativo dell’ospedale o nominativo dello studio che ha eseguito l’accertamento</HOS>
                        <PAT>
                            <TIP>Nome del paziente:</TIP>
                            <VAL>Smith V. N.</VAL>
                        </PAT>
                        <BIR>
                            <TIP>Data di nascita</TIP>
                            <VAL>15.01.2001</VAL>
                        </BIR>
                        <ADR>
                            <TIP>Residenza:</TIP>
                            <VIA></VIA>
                            <CIT></CIT>
                            <REG></REG>
                            <CAP></CAP>
                        </ADR>
                        <CON>Numero di telefono del paziente <TEL></TEL>
                            <EMAIL></EMAIL>
                        </CON>
                        <RES>
                            <TIP>Numero di protocollo</TIP>
                            <VAL>15684962</VAL>
                        </RES>
                        <DAT>
                            <TIP>Data d’accertamento</TIP>
                            <VAL>15.04.2021</VAL>
                        </DAT>
                        <NAM>Ecografia del collo</NAM>
                        <N1>
                            <SN1>
                                <DN>Tiroide regolare per morfovolumetria</DN>
                                <FCL>ha una forma e posizione tipiche</FCL>
                            </SN1>
                            <SN2>
                                <NCL>a contorni </NCL>
                                <FCL>regolari</FCL>
                            </SN2>
                            <SN4>
                                <SN1>
                                    <NCL>L'istmo ha uno spessore di <PCL>4</PCL>
                                        <DOU>mm.</DOU>
                                    </NCL>
                                </SN1>
                                <SN2>
                                    <NCL>i contorni sono</NCL>
                                    <FCL>regolari</FCL>
                                </SN2>
                                <SN3>
                                    <NCL>l'ecostruttura è</NCL>
                                    <FCL>omogenea, isoecogena</FCL>
                                </SN3>
                            </SN4>
                        </N1>
                        <N2>
                            <SN1>
                                <DN>Il lobo destro</DN>
                            </SN1>
                            <SN2>
                                <NCL>misura </NCL>
                                <PCL>52x21x13</PCL>
                                <DOU>mm.</DOU>
                            </SN2>
                            <SN3>
                                <NCL>Volume</NCL>
                                <PCL>6,7</PCL>
                                <DOU>cubic cm.</DOU>
                            </SN3>
                            <SN4>
                                <NCL>i contorni sono </NCL>
                                <FCL>uniformi, regolari </FCL>
                            </SN4>
                            <SN5>
                                <NCL>l'ecostruttura è </NCL>
                                <FCL>omogenea, isoecogena</FCL>
                            </SN5>
                        </N2>
                        <N3>
                            <SN1>
                                <DN>Il lobo sinistro </DN>
                            </SN1>
                            <SN2>
                                <NCL>misura </NCL>
                                <PCL>48x18x14</PCL>
                                <DOU>mm.</DOU>
                            </SN2>
                            <SN3>
                                <NCL>Volume</NCL>
                                <PCL>5,6</PCL>
                                <DOU>cubic cm.</DOU>
                            </SN3>
                            <SN4>
                                <NCL>I contorni sono </NCL>
                                <FCL>regolari </FCL>
                            </SN4>
                            <SN5>
                                <NCL>la struttura</NCL>
                                <FCL>omogenea, isoecogena</FCL>
                            </SN5>
                        </N3>
                        <N4>
                            <SN1>
                                <DN>I linfonodi regionali</DN>
                                <FCL>non vengono visualizzati</FCL>
                            </SN1>
                        </N4>
                        <N5>
                            <SN1>
                                <DN>Conclusione</DN>
                                <FCL>I cambiamenti ecostrutturali non sono rilevati</FCL>
                            </SN1>
                            <SN2>
                                <FCL>Non sono presenti formazioni patologiche</FCL>
                            </SN2>
                        </N5>
                        <DM>
                            <TIP>Medico:</TIP>
                            <VAL>Kuznecov U. M.</VAL>
                        </DM>
                        <STAMP>Timbro</STAMP>
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
