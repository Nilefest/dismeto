<?php

/**
 * This file is part of DISMETO package.
 */

namespace DLL\DISMETO;

/**
 * Class Document
 *
 * @author Nilefest <nikitaleo777333@gmail.com>
 * @package DLL\DISMETO
 */
class Document
{
    private $db = null;
    
    public $setting = [];
    public $dictionary = [];
    
    /**
     * Class constructor.
     *
     * @param $db DB - object for connect with Database
     * @param $doc_id int|false - Document`s ID
     */
    function __construct ($db, $doc_id = false) {
        $this->db = $db;
        
        // get|create Document
        if($doc_id) $this->getSetting($doc_id);
        
        // get Dictionary
        $this->dictionary = $this->getDictionary();
    }
    
    /**
     * Create new Document
     *
     * @param $name string - Document`s name
     * @return Document this
     */
    public function create($name = 'New Document'){
        $sql = "INSERT INTO `" . $this->db->tables['documents'] . "` (`name`) VALUES (?)";
        $doc_id = $this->db->queryInsert($sql, [$name]);
        
        $this->setting = [
            'id' => $doc_id,
            'name' => $name,
        ];
        
        return $this;
        
    }
    
    /**
     * Delete this Document
     *
     * @return Document this
     */
    public function delete(){
        if(!isset($this->setting['id'])) return false;
        
        $sql = "DELETE FROM `" . $this->db->tables['dictionary'] . "` WHERE `doc_id` = ?";
        $this->db->queryInsert($sql, [$this->setting['id']]);
        
        $sql = "DELETE FROM `" . $this->db->tables['documents'] . "` WHERE `id` = ?";
        $this->db->queryInsert($sql, [$this->setting['id']]);
        
        return $this;
    }
    
    /**
     * Get Dataset`s Settings
     *
     * @param $doc_id int - Document`s ID
     * @return array Dataset`s Settings
     */
    private function getSetting($doc_id){
        $sql = "SELECT * FROM `" . $this->db->tables['documents'] . "` WHERE `id` = ?";
        $rezult = $this->db->querySelect($sql, [$doc_id]);
        
        if(!empty($rezult))
            $this->setting = $rezult[0];
        
        return $this->setting;
        
    }
    
    /**
     * Get Dataset`s Dictionary
     *
     * @return array Dataset`s Dictionary
     */
    private function getDictionary(){
        $sql = "SELECT * FROM `" . $this->db->tables['dictionary'] . "` WHERE `doc_id` = ?";
        $rezult = $this->db->querySelect($sql, [$this->setting['id']]);
        
        $this->dictionary = $rezult;
        
        return $this->dictionary;
    }
    
    /**
     * Delete old data and insert new for Dataset`s Dictionary
     *
     * @param $dictionary array - Dictionary`s data
     * @param $refresh bool - if need clean old data
     * @return array Dataset`s Dictionary
     */
    public function replenishDictionary($dictionary = [], $refresh = false){
        if($refresh){
            $sql = "DELETE FROM `" . $this->db->tables['dictionary'] . "` WHERE `doc_id` = ?";
            $this->db->queryInsert($sql, [$this->setting['id']]);
        }
        
        $new_dictionary = [];
        $sql = "INSERT INTO `" . $this->db->tables['dictionary'] . "` (`doc_id`, `lang`, `ngroup`, `stemma`, `value`) VALUES (?, ?, ?, ?, ?)";
        foreach($dictionary as $row){
            $data = [$this->setting['id'], 
                     $row['lang'], 
                     $row['ngroup'], 
                     $row['stemma'] . '', 
                     $row['value'] . ''];
            $data['id'] = $this->db->queryInsert($sql, $data);
            $new_dictionary[] = $data;
        }
        
        if($refresh)
            $this->dictionary = $new_dictionary;
        else 
            $this->dictionary = array_merge($this->dictionary, $new_dictionary);
        
        return $this->dictionary;
    }
    
    
    /**
     * Get data for Dataset`s Dictionary from file .xlsx
     *
     * @param $file_name string - file`s name form import
     * @return array Dictionary`s data
     */
    public function getDectionaryFromFile($file_name){
        $phpexcel = new PHPExcel($file_name);
        $data = $phpexcel->readFile();
        
        $dictionary = [];
        foreach($data as $sheet_n => $sheet_data){
            foreach($sheet_data as $row_n => $row_data){
                if($row_n > 0 && $row_data){
                   foreach($sheet_data[0] as $lang_n => $lang_data){
                        if(!isset($stemmers[$lang_data]))
                            $stemmers[$lang_data] = new Stemmer($lang_data);
                       
                        $dict_row = [
                            'ngroup' => $row_n,
                            'lang' => $lang_data,
                            'stemma' => $stemmers[$lang_data]->getStemmWords($row_data[$lang_n] . ''),
                            'value' => $row_data[$lang_n],
                        ];
                        $dictionary[] = $dict_row;
                    }
                }
            }
        }
        
        $this->dictionary = $dictionary;
        return $dictionary;
    }
}
