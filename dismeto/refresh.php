<?php
require_once __DIR__ . '/_scripts.php';

if($_GET['seed']){
    // Upload data
    $dismeto->refresh(1);
}
else{
    // Celar DB and create empty tables
    $dismeto->refresh();
    
    // Test data
    $dismeto->test('createFullDocument');
}
