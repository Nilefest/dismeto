<?php
/**
 * This file is part of DISMETO package.
 */

namespace DLL\DISMETO;

require_once 'Translit/autoload.php';
require_once __DIR__ . '/PHPExcel.php';
require_once __DIR__ . '/DISMETO/DB.php';
require_once __DIR__ . '/Stemmer.php';
require_once __DIR__ . '/Translator.php';
require_once __DIR__ . '/DISMETO/Document.php';

/**
 * Class DISMETO
 * Main class in project
 * 
 * @author Nilefest <nikitaleo777333@gmail.com>
 * @package DLL\DISMETO
 */
class DISMETO
{
    private $config = [];
    private $db = null;

     /**
     * Create a new DISMETO
     */
    public function __construct() {
        $this->config = parse_ini_file("DISMETO/config.ini", true);
        
        $this->db = new DB($this->config['db_config'], $this->config['tables']);
    } 
    
    /**
     * Get project version
     *
     * @return string
     */
    public function version(){
        return $this->config['data']['version'];
    }
    
    /**
     * Refresh and clear all data
     * 
     * @param bool $default_data 0 - clear and create new tables, 1 - insert default data
     * @return true
     */
    public function refresh($seeder = false){
        if(!$seeder){
            print_r($this->db->dump());
        }
        else{
            // seeds
        }
        
        return true;
    }
    
    /**
     * Testing different functions  
     *
     * @param $operation - test`s type name
     * @exit
     */
    public function test($operation = 'noname'){
        
        require_once __DIR__ . '/DISMETO/Testing.php';
        $test = new Testing($this->db);
        
        switch($operation){
            case 'translateSimple': 
                $test->translateSimpleTest();
                break;
            case 'translateData': 
                $test->translateDataTest();
                break;
            case 'createEmptyDocument': 
                $test->createEmptyDocumentTest();
                break;
            case 'createFullDocument': 
                $test->createFullDocumentTest();
                break;
            case 'deleteDocument': 
                $test->deleteDocumentTest();
                break;
            default:
                exit('Not found Test: ' . $operation);
        }
        
        exit('--- End test ---');
    }
    
    /**
     * Translate Data from request by client
     *
     * @param $source - lang from
     * @param $target - lang to
     * @param $data - array with data for translate from form
     * @return array $rezult
     */
    public function translateData($source, $target, $data){
        $tr = new Translator($this->db);
        $rezult = $tr->translateData($source, $target, $data);
        
        return $this->colToKey($rezult, 'name');
    }
    
    
    /**
     * Transform array. Value from column set to key
     *
     * @param $array - array fo transform
     * @param $col_for_key - column`s name for key
     * @return array $rezult
     */
    private function colToKey($array, $col_for_key){
        $array_new = [];
        foreach($array as $row){
            $array_new[$row[$col_for_key]] = $row;
        }
        return $array_new;
    }
}