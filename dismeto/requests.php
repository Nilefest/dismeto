<?php
require_once __DIR__ . '/_scripts.php';

if(isset($_POST['op'])){
    if($_POST['op'] == 'translate_from_form'){
        
        $source = $_POST['lang_from'];
        $target = $_POST['lang_to'];
        $data = $_POST['data'];
        
        $rezult = $dismeto->translateData($source, $target, $data);
        
        echo json_encode($rezult);
        exit();
    }
    
    exit('Not found oparation or not enough data: ' . $_POST['op']);
}

/*

URL: [domain]/dismeto/requests.php
Data type: POST

# Сan already handle such requests:


*/