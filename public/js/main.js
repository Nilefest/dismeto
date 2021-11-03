// SHOW Preloader for translated document
function preloaderShow() {
    $("#btn_to_lang").prop("disabled", true);

    $('.preloader').css('display', 'block');
    $('.preloader').removeClass('loaded');
};

// HIDE Preloader for translated document
preloaderHide();

function preloaderHide() {
    $('.preloader').addClass('loaded');
    setTimeout(function () {
        $('.preloader').css('display', 'none');
    }, 350);

    $("#btn_to_lang").prop("disabled", false);
};

$('.left_nav ul li').hover(function () {
    $('.left_nav ul').addClass('hover');

}, function () {
    $('.left_nav ul').removeClass('hover');
});

// Scroll to top
$('body .go_to_start').click(function () {
    $('body, html').animate({
        scrollTop: 0
    }, 600); // плавно переходим к блоку
});

// Select 1st language for translate
select_lang_from('ru');

function select_lang_from(fromLang) {
    $('#from_lang').val(fromLang);
    $('.original_doc>*').css('display', 'none');
    $('.original_doc_' + fromLang).css('display', 'block');
}

// Get for translate
function get_lang_from_data() {
    console.log('Get data for translate');

    let docType = $('.doc_type').val();
    let fromLang = $('#from_lang option:selected').val();
    let toLang = $('#to_lang option:selected').val();
    let fromDoc = $('.original_doc_' + fromLang);

    // Массив "arr" это введённые в форму данные в виде "ключ => значение""
    let arr = [];
    let key_n = 0;
    fromDoc.find($('input[type=text],input[type=date],input[type=numb],input[type=email],textarea')).each(function () {
        let type = $(this).attr('data-typeTransform') + '';
        let name = $(this).attr('name') + '';
        let val = $(this).val() + '';

        arr[key_n] = {
            key: key_n,
            type: type,
            name: name,
            val: val
        };

        key_n++;
    });

    let data = {
        op: 'translate_from_form',
        doc_type: docType,
        lang_from: fromLang,
        lang_to: toLang,
        data: arr,
    };

    return data;
}

// Generete translated document
function generate_document(data) {
    let docType = $('.doc_type').val();

    switch (docType) {
        case 'uzi':
            generate_document_uzi(data);
            break;
        case 'blood_research':
            generate_document_blood_research(data);
            break;
        case 'urine_research':
            generate_document_urine_research(data);
            break;
        default:
            alert('NONE');
    }
}

function generate_document_uzi(data) { //let regex = my_str.replace(/ .(.+)\./g, '');
    console.log('Получение результата');

    //console.log(data);
    let fromLang = $('#from_lang option:selected').val();
    let toLang = $('#to_lang option:selected').val();
    let toDoc = $('.target_doc_' + toLang);

    // Дефолтный масив, якобы полученный с сервера, из которого строится документ
    let arr2 = new Map([
		['type_research', data['type_research']['new']],
		['name_tools', data['name_tools']['new']],
		['doctor', data['doctor']['new']],
		['patient', data['patient']['new']],
		['research_number', data['research_number']['new']],
		['date', data['date']['new']],
		['reserch_organ', data['reserch_organ']['new']],

		['tr_main', data['thyr_main']['new']],
		//['tr_main_shape', 'has typical shape and location'],
		//['tr_main_cont', 'even, clear'],
		//['tr_main_vol', '12,3'],
		//['tr_main_fk', '(without the volume of isthmus)'],
		//['tr_isth_thick', '4'],
		//['tr_isth_cont', 'even'],
		//['tr_isth_echo', 'homogeneous, isoechoic'],

		['tr_right', data['thyr_right']['new']],
		//['tr_rl_measures', 'tr_rl_measures'],
		//['tr_rl_vol', 'tr_rl_vol'],
		//['tr_rl_cont', 'tr_rl_cont'],
		//['tr_rl_echo', 'tr_rl_echo'],

		['tr_left', data['thyr_left']['new']],
		//['tr_ll_measures', 'tr_ll_measures'],
		//['tr_ll_vol', 'tr_ll_vol'],
		//['tr_ll_echo', 'tr_ll_echo'],
		//['tr_ll_addit', 'tr_ll_addit'],

		['tr_nodes', data['other_info']['new']],
		['tr_concl', data['concl']['new']],

		['tr_patal', data['concl']['new']],
	]);
    console.log(data);

    // Построение документа
    toDoc.find('TYP').html(arr2.get('type_research'));
    toDoc.find('TL').html(arr2.get('name_tools'));
    toDoc.find('DM VAL').html(arr2.get('doctor'));
    toDoc.find('PAT VAL').html(arr2.get('patient'));
    toDoc.find('RES VAL').html(arr2.get('research_number'));
    toDoc.find('DAT VAL').html(arr2.get('date'));
    toDoc.find('ORG VAL').html(arr2.get('reserch_organ'));

    //toDoc.find('N1 SN1 FCL').html(arr2.get('tr_main_shape'));
    //toDoc.find('N1 SN2 FCL').html(arr2.get('tr_main_cont'));
    //toDoc.find('N1 SN3 PCL').html(arr2.get('tr_main_vol'));
    //toDoc.find('N1 FK').html(arr2.get('tr_main_fk'));
    //toDoc.find('N1 SN4 SN1 PCL').html(arr2.get('tr_isth_thick'));
    //toDoc.find('N1 SN4 SN2 FCL').html(arr2.get('tr_isth_cont'));
    //toDoc.find('N1 SN4 SN3 FCL').html(arr2.get('tr_isth_echo'));
    toDoc.find('N1 SN1 FCL').html('');
    toDoc.find('N1 SN2').html(arr2.get('tr_main'));
    toDoc.find('N1 SN3').remove();
    toDoc.find('N1 SN4').remove();

    //toDoc.find('N2 SN2 PCL').html(arr2.get('tr_rl_measures'));
    //toDoc.find('N2 SN3 PCL').html(arr2.get('tr_rl_vol'));
    //toDoc.find('N2 SN4 FCL').html(arr2.get('tr_rl_cont'));
    //toDoc.find('N2 SN5 FCL').html(arr2.get('tr_rl_echo'));
    toDoc.find('N2 SN2').html(arr2.get('tr_right'));
    toDoc.find('N2 SN3').remove();
    toDoc.find('N2 SN4').remove();
    toDoc.find('N2 SN5').remove();

    //toDoc.find('N3 SN2 PCL').html(arr2.get('tr_ll_measures'));
    //toDoc.find('N3 SN3 PCL').html(arr2.get('tr_ll_vol'));
    //toDoc.find('N3 SN4 FCL').html(arr2.get('tr_ll_echo'));
    //toDoc.find('N3 SN5 FCL').html(arr2.get('tr_ll_addit'));
    toDoc.find('N3 SN2').html(arr2.get('tr_left'));
    toDoc.find('N3 SN3').remove();
    toDoc.find('N3 SN4').remove();
    toDoc.find('N3 SN5').remove();

    toDoc.find('N4 SN1 FCL').html(arr2.get('tr_nodes'));
    toDoc.find('N5 SN1 FCL').html(arr2.get('tr_concl'));
    toDoc.find('N5 SN2 FCL').html(arr2.get('tr_patal'));

    if (fromLang == 'it') {
        myMap.set('birth', data['birth']['new']);
        toDoc.find('BIR VAL').html(arr2.get('birth'));

        myMap.set('live', data['live']['live']);
        //myMap.set('live_via', 'live_via');
        //myMap.set('live_cit', 'live_cit');
        //myMap.set('live_reg', 'live_reg'); 

        myMap.set('pat_tel', data['tel']['new']);
        myMap.set('pat_email', data['email']['new']);
        myMap.set('live_cap', 'pat_tel');


        //toDoc.find('ADR VIA').html(arr2.get('live_via'));
        //toDoc.find('ADR CIT').html(arr2.get('live_cit'));
        //toDoc.find('ADR REG').html(arr2.get('live_reg'));
        //toDoc.find('ADR CAP').html(arr2.get('live_cap'));

        toDoc.find('ADR').html(arr2.get('live'));

        toDoc.find('CON TEL').html(arr2.get('pat_tel'));
        toDoc.find('CON EMAIL').html(arr2.get('pat_email'));

    }
    // Конец построения документа

    $('.target_doc>*').css('display', 'none');
    $('.target_doc_' + toLang).css('display', 'flex');
}

function generate_document_blood_research(data) { //let regex = my_str.replace(/ .(.+)\./g, '');
    console.log('Получение результата. Анализ крови');

    //console.log(data);
    let fromLang = $('#from_lang option:selected').val();
    let toLang = $('#to_lang option:selected').val();
    let toDoc = $('.target_doc_' + toLang);
    console.log(toDoc);
    
    // Дефолтный масив, якобы полученный с сервера, из которого строится документ
    // Массив и построение документа анализа крови
    let arrBlood = new Map([
		['name_tools', data['name_tools']['new']],
		['doctor', data['doctor']['val']],
		['patient', data['patient']['new']],
		['date', data['date']['val']],
		['erythrocytes', data['erythrocytes']['new']],
		['hemoglobin', data['hemoglobin']['new']],
		['leukocytes', data['leukocytes']['new']],
		['hematocritis', data['hematocritis']['new']],
		['mch', data['mch']['new']],
		['mcv', data['mcv']['new']],
		['mchc', data['mchc']['new']],
		['neutrophiles_p', data['neutrophiles_p']['new']],
		['eosiophiles_p', data['eosiophiles_p']['new']],
		['basophiles_p', data['basophiles_p']['new']],
		['monocytes_p', data['monocytes_p']['new']],
		['lymphocytes_p', data['lymphocytes_p']['new']],
		['neutrophiles_a', data['neutrophiles_a']['new']],
		['eosiophiles_a', data['eosiophiles_a']['new']],
		['basophiles_a', data['basophiles_a']['new']],
		['monocytes_a', data['monocytes_a']['new']],
		['lymphocytes_a', data['lymphocytes_a']['new']],
		['platelets', data['platelets']['new']],
		['prothrombin', data['prothrombin']['new']],
		['inr', data['inr']['new']],
		['ppt', data['ppt']['new']],
		['glycemia', data['glycemia']['new']],
		['hplc', data['hplc']['new']],
		['urin_acid', data['urin_acid']['new']],
		['total_cholesterol', data['total_cholesterol']['new']],
		['hdl', data['hdl']['new']],
		['esr', data['esr']['new']],
        
		['norm_erythrocytes', data['norm_erythrocytes']['new']],
		['norm_hemoglobin', data['norm_hemoglobin']['new']],
		['norm_leukocytes', data['norm_leukocytes']['new']],
		['norm_hematocritis', data['norm_hematocritis']['new']],
		['norm_mch', data['norm_mch']['new']],
		['norm_mcv', data['norm_mcv']['new']],
		['norm_mchc', data['norm_mchc']['new']],
		['norm_neutrophiles_p', data['norm_neutrophiles_p']['new']],
		['norm_eosiophiles_p', data['norm_eosiophiles_p']['new']],
		['norm_basophiles_p', data['norm_basophiles_p']['new']],
		['norm_monocytes_p', data['norm_monocytes_p']['new']],
		['norm_lymphocytes_p', data['norm_lymphocytes_p']['new']],
		['norm_neutrophiles_a', data['norm_neutrophiles_a']['new']],
		['norm_eosiophiles_a', data['norm_eosiophiles_a']['new']],
		['norm_basophiles_a', data['norm_basophiles_a']['new']],
		['norm_monocytes_a', data['norm_monocytes_a']['new']],
		['norm_lymphocytes_a', data['norm_lymphocytes_a']['new']],
		['norm_platelets', data['norm_platelets']['new']],
		['norm_prothrombin', data['norm_prothrombin']['new']],
		['norm_inr', data['norm_inr']['new']],
		['norm_ppt', data['norm_ppt']['new']],
		['norm_glycemia', data['norm_glycemia']['new']],
		['norm_hplc', data['norm_hplc']['new']],
		['norm_urin_acid', data['norm_urin_acid']['new']],
		['norm_total_cholesterol', data['norm_total_cholesterol']['new']],
		['norm_hdl', data['norm_hdl']['new']],
		['norm_esr', data['norm_esr']['new']],
	]);

    // Построение документа
    toDoc.find('TL').html(arrBlood.get('name_tools'));
    toDoc.find('DM VAL').html(arrBlood.get('doctor'));
    toDoc.find('PAT VAL').html(arrBlood.get('patient'));
    toDoc.find('DAT VAL').html(arrBlood.get('date'));
    toDoc.find('N2 SN1 PCL').html(arrBlood.get('erythrocytes'));
    toDoc.find('N2 SN2 PCL').html(arrBlood.get('hemoglobin'));
    toDoc.find('N2 SN3 PCL').html(arrBlood.get('leukocytes'));
    toDoc.find('N2 SN4 PCL').html(arrBlood.get('hematocritis'));
    toDoc.find('N2 SN5 PCL').html(arrBlood.get('mch'));
    toDoc.find('N2 SN6 PCL').html(arrBlood.get('mcv'));
    toDoc.find('N2 SN7 PCL').html(arrBlood.get('mchc'));
    toDoc.find('N3 SN2 PCL').html(arrBlood.get('neutrophiles_p'));
    toDoc.find('N3 SN3 PCL').html(arrBlood.get('eosiophiles_p'));
    toDoc.find('N3 SN4 PCL').html(arrBlood.get('basophiles_p'));
    toDoc.find('N3 SN5 PCL').html(arrBlood.get('monocytes_p'));
    toDoc.find('N3 SN6 PCL').html(arrBlood.get('lymphocytes_p'));
    toDoc.find('N4 SN2 PCL').html(arrBlood.get('neutrophiles_a'));
    toDoc.find('N4 SN3 PCL').html(arrBlood.get('eosiophiles_a'));
    toDoc.find('N4 SN4 PCL').html(arrBlood.get('basophiles_a'));
    toDoc.find('N4 SN5 PCL').html(arrBlood.get('monocytes_a'));
    toDoc.find('N4 SN6 PCL').html(arrBlood.get('lymphocytes_a'));
    toDoc.find('N5 SN1 PCL').html(arrBlood.get('platelets'));
    toDoc.find('N6 SN2 PCL').html(arrBlood.get('prothrombin'));
    toDoc.find('N6 SN3 PCL').html(arrBlood.get('inr'));
    toDoc.find('N6 SN4 PCL').html(arrBlood.get('ppt'));
    toDoc.find('N7 SN2 PCL').html(arrBlood.get('glycemia'));
    toDoc.find('N7 SN3 PCL').html(arrBlood.get('hplc'));
    toDoc.find('N7 SN4 PCL').html(arrBlood.get('urin_acid'));
    toDoc.find('N7 SN5 PCL').html(arrBlood.get('total_cholesterol'));
    toDoc.find('N7 SN6 PCL').html(arrBlood.get('hdl'));
    toDoc.find('N7 SN7 PCL').html(arrBlood.get('esr'));
    
    toDoc.find('N2 SN1 FK').html(arrBlood.get('norm_erythrocytes'));
    toDoc.find('N2 SN2 FK').html(arrBlood.get('norm_hemoglobin'));
    toDoc.find('N2 SN3 FK').html(arrBlood.get('norm_leukocytes'));
    toDoc.find('N2 SN4 FK').html(arrBlood.get('norm_hematocritis'));
    toDoc.find('N2 SN5 FK').html(arrBlood.get('norm_mch'));
    toDoc.find('N2 SN6 FK').html(arrBlood.get('norm_mcv'));
    toDoc.find('N2 SN7 FK').html(arrBlood.get('norm_mchc'));
    toDoc.find('N3 SN2 FK').html(arrBlood.get('norm_neutrophiles_p'));
    toDoc.find('N3 SN3 FK').html(arrBlood.get('norm_eosiophiles_p'));
    toDoc.find('N3 SN4 FK').html(arrBlood.get('norm_basophiles_p'));
    toDoc.find('N3 SN5 FK').html(arrBlood.get('norm_monocytes_p'));
    toDoc.find('N3 SN6 FK').html(arrBlood.get('norm_lymphocytes_p'));
    toDoc.find('N4 SN2 FK').html(arrBlood.get('norm_neutrophiles_a'));
    toDoc.find('N4 SN3 FK').html(arrBlood.get('norm_eosiophiles_a'));
    toDoc.find('N4 SN4 FK').html(arrBlood.get('norm_basophiles_a'));
    toDoc.find('N4 SN5 FK').html(arrBlood.get('norm_monocytes_a'));
    toDoc.find('N4 SN6 FK').html(arrBlood.get('norm_lymphocytes_a'));
    toDoc.find('N5 SN1 FK').html(arrBlood.get('norm_platelets'));
    toDoc.find('N6 SN2 FK').html(arrBlood.get('norm_prothrombin'));
    toDoc.find('N6 SN3 FK').html(arrBlood.get('norm_inr'));
    toDoc.find('N6 SN4 FK').html(arrBlood.get('norm_ppt'));
    toDoc.find('N7 SN2 FK').html(arrBlood.get('norm_glycemia'));
    toDoc.find('N7 SN3 FK').html(arrBlood.get('norm_hplc'));
    toDoc.find('N7 SN4 FK').html(arrBlood.get('norm_urin_acid'));
    toDoc.find('N7 SN5 FK').html(arrBlood.get('norm_total_cholesterol'));
    toDoc.find('N7 SN6 FK').html(arrBlood.get('norm_hdl'));
    toDoc.find('N7 SN7 FK').html(arrBlood.get('norm_esr'));
    // Конец построения документа

    $('.target_doc>*').css('display', 'none');
    $('.target_doc_' + toLang).css('display', 'flex');
}

function generate_document_urine_research(data) { //let regex = my_str.replace(/ .(.+)\./g, '');
    console.log('Получение результата');

    //console.log(data);
    let fromLang = $('#from_lang option:selected').val();
    let toLang = $('#to_lang option:selected').val();
    let toDoc = $('.target_doc_' + toLang);

    // Дефолтный масив, якобы полученный с сервера, из которого строится документ
    let arrUrina = new Map([
		['name_tools', data['name_tools']['new']],
		['doctor', data['doctor']['val']],
		['patient', data['patient']['new']],
		['date', data['date']['val']],
		['ur_color', data['ur_color']['new']],
		['ur_view', data['ur_view']['new']],
		['ur_ph', data['ur_ph']['new']],
		['ur_density', data['ur_density']['new']],
		['ur_protein', data['ur_protein']['new']],
		['ur_glicosurium', data['ur_glicosurium']['new']],
		['ur_ketones', data['ur_ketones']['new']],
		['ur_hemoglobin', data['ur_hemoglobin']['new']],
		['ur_pus', data['ur_pus']['new']],
		['ur_gpigments', data['ur_gpigments']['new']],
		['ur_urobilinogen', data['ur_urobilinogen']['new']],
		['ur_nitrites', data['ur_nitrites']['new']],
		['ur_sediment', data['ur_sediment']['new']],
        
		['norm_ur_color', data['norm_ur_color']['new']],
		['norm_ur_view', data['norm_ur_view']['new']],
		['norm_ur_ph', data['norm_ur_ph']['new']],
		['norm_ur_density', data['norm_ur_density']['new']],
		['norm_ur_protein', data['norm_ur_protein']['new']],
		['norm_ur_glicosurium', data['norm_ur_glicosurium']['new']],
		['norm_ur_ketones', data['norm_ur_ketones']['new']],
		['norm_ur_hemoglobin', data['norm_ur_hemoglobin']['new']],
		['norm_ur_pus', data['norm_ur_pus']['new']],
		['norm_ur_gpigments', data['norm_ur_gpigments']['new']],
		['norm_ur_urobilinogen', data['norm_ur_urobilinogen']['new']],
		['norm_ur_nitrites', data['norm_ur_nitrites']['new']],
	]);

    toDoc.find('TL').html(arrUrina.get('name_tools'));
    toDoc.find('DM VAL').html(arrUrina.get('doctor'));
    toDoc.find('PAT VAL').html(arrUrina.get('patient'));
    toDoc.find('DAT VAL').html(arrUrina.get('date'));
    toDoc.find('N2 SN1 FCL').html(arrUrina.get('ur_color'));
    toDoc.find('N2 SN2 FCL').html(arrUrina.get('ur_view'));
    toDoc.find('N2 SN3 FCL').html(arrUrina.get('ur_ph'));
    toDoc.find('N2 SN4 FCL').html(arrUrina.get('ur_density'));
    toDoc.find('N2 SN5 FCL').html(arrUrina.get('ur_protein'));
    toDoc.find('N2 SN6 FCL').html(arrUrina.get('ur_glicosurium'));
    toDoc.find('N2 SN7 FCL').html(arrUrina.get('ur_ketones'));
    toDoc.find('N2 SN8 FCL').html(arrUrina.get('ur_hemoglobin'));
    toDoc.find('N2 SN9 FCL').html(arrUrina.get('ur_pus'));
    toDoc.find('N2 SN10 FCL').html(arrUrina.get('ur_gpigments'));
    toDoc.find('N2 SN11 FCL').html(arrUrina.get('ur_urobilinogen'));
    toDoc.find('N2 SN12 FCL').html(arrUrina.get('ur_nitrites'));
    toDoc.find('N3 SN1 FCL').html(arrUrina.get('ur_sediment'));
    
    toDoc.find('N2 SN1 PCL').html(arrUrina.get('norm_ur_color'));
    toDoc.find('N2 SN2 PCL').html(arrUrina.get('norm_ur_view'));
    toDoc.find('N2 SN3 PCL').html(arrUrina.get('norm_ur_ph'));
    toDoc.find('N2 SN4 PCL').html(arrUrina.get('norm_ur_density'));
    toDoc.find('N2 SN5 PCL').html(arrUrina.get('norm_ur_protein'));
    toDoc.find('N2 SN6 PCL').html(arrUrina.get('norm_ur_glicosurium'));
    toDoc.find('N2 SN7 PCL').html(arrUrina.get('norm_ur_ketones'));
    toDoc.find('N2 SN8 PCL').html(arrUrina.get('norm_ur_hemoglobin'));
    toDoc.find('N2 SN9 PCL').html(arrUrina.get('norm_ur_pus'));
    toDoc.find('N2 SN10 PCL').html(arrUrina.get('norm_ur_gpigments'));
    toDoc.find('N2 SN11 PCL').html(arrUrina.get('norm_ur_urobilinogen'));
    toDoc.find('N2 SN12 PCL').html(arrUrina.get('norm_ur_nitrites'));

    $('.target_doc>*').css('display', 'none');
    $('.target_doc_' + toLang).css('display', 'flex');
}

// Get translate data from server
function get_translate_from_server(data) {
    console.log('Send data to translate');

    $.ajax({
        url: '/dismeto/requests.php',
        type: "POST",
        data: data,
        success: function (data) {
            console.log('Get data from server');
            console.log(data);
            try {
                data = JSON.parse(data);
                //console.log(data);
                generate_document(data)
            } catch (e) {
                preloaderHide();
            }

            preloaderHide();
        },

        error: function (msg) {
            console.log('ERR: ');
            console.log(msg);

            preloaderHide();
        }
    });
}

// Select document in menu
$('#select_doc').change(function () {
    document.location.href = $('#select_doc').val();
});

// Select 1st language for translate
$('#from_lang').change(function () {
    let fromLang = $('#from_lang option:selected').val();
    select_lang_from(fromLang);
});

// Translate
$('#btn_to_lang').click(function () {
    preloaderShow();
    let data = get_lang_from_data();

    //generate_document(data);
    get_translate_from_server(data);
});
