<?php
/**
 * This file is part of DISMETO package.
 */

namespace DLL\DISMETO;

require_once ('GoogleTranslate/autoload.php');
use \Dejurin\GoogleTranslateForFree;

/**
 * Class Stemmer
 * 
 * @author Nilefest <nikitaleo777333@gmail.com>
 * @package DLL\DISMETO
 */
class Translator
{
    private $db = null;
    private $google = false;
    private $stemmer = false;
    
    public function __construct($db) {
        $this->db = $db;
    
        $this->google = new GoogleTranslateForFree();
    }
    
     /**
     * Translate string
     * 
     * @param $source - lang from
     * @param $target - lang to
     * @param $text - text for translate
     * @return string - translated string
     */
    public function translate($source, $target, $text = ''){
        if($target == 'ua') $target = 'uk';
        
        $stemmer = new Stemmer($source);
        
        $stemm_words = $stemmer->getStemmWords($text . '');
        
        $sql = "SELECT * FROM `" . $this->db->tables['dictionary'] . "` WHERE `stemma` = ?";
        $rezult = $this->db->querySelect($sql, [$stemm_words]);
        if(!$rezult)
            return $this->translateByGoogle($source, $target, $text);
        //print_r($rezult);echo "\n";
        
        $sql = "SELECT * FROM `" . $this->db->tables['dictionary'] . "` WHERE `lang` = ? AND `ngroup` = ?";
        $rezult = $this->db->querySelect($sql, [$target, $rezult[0]['ngroup']]);
        if(!$rezult)
            return $this->translateByGoogle($source, $target, $text);
        
        return $rezult[0]['value'];
    }
    
     /**
     * Translate string with Google Translate
     * 
     * @param $source - lang from
     * @param $target - lang to
     * @param $text - text for translate
     * @return string - translated string
     */
    public function translateByGoogle($source, $target = 'en', $text = ""){
        if($target == 'ua') $target = 'uk';
        
        $attempts = 5;
        $result = $this->google->translate($source, $target, $text, $attempts);
//        $result = "#$result#";
        //echo "$source - $target\n $result \n\n";
        return $result . ' ';
    }
    
     /**
     * Transform string to translit
     * 
     * @param $text - text for translit
     * @return string - translited string
     */
    public function translit($text = ""){
        $rezult = \URLify::transliterate($text);
        
        return $rezult . ' ';
    }
    
     /**
     * Translate or transform big data from form
     * Add in source data new item 'new' with translated text
     * 
     * @param $source - lang from
     * @param $target - lang to
     * @param $data - array with data for translate from form
     * @return array - translated data
     */
    public function translateData($source, $target = 'en', $data = []){
        if($target == 'ua') $target = 'uk';
        
        foreach($data as $key => $value){
            //$value['type'] = 'translate-google';
            //$data[$key]['new'] = '>';
            $data[$key]['new'] = $this->getNewValue($source, $target, $value);
            
        }
        return $data;
    }
    
     /**
     * Translate or transform one item by big data from form
     * Function can: translate simple data, translate complex data, translate by google, translit text, transform date
     * 
     * @param $source - lang from
     * @param $target - lang to
     * @param $value - array with item-data by big-data for translate from form
     * @return string - translated string
     */
    private function getNewValue($source, $target = 'en', $value = ""){
        switch($value['type']){
            case 'translate': // translate in full 
                return $this->translate($source, $target, $value['val']);
                break;
            case 'translate-complex':
                return $this->translateByGoogle($source, $target, $value['val']);
                //return $this->translateComplex($source, $target, $value['val']);
                break;
            case 'translate-google': // translate with google
                return $this->translateByGoogle($source, $target, $value['val']);
                break;
            case 'translit': // only translite
                return $this->translit($value['val']);
                break;
            case 'date': // date
                return date('d.m.Y', strtotime($value['val']));
                break;
            default: // none -  return the original 
                return $value['val'];
        }
    }
    
     /**
     * Translate complex data
     * Function do: normalize data, translate number-data, tanslate other text
     * 
     * @param $source - lang from
     * @param $target - lang to
     * @param $str - source string for translate
     * @return string - translated string
     */
    private function translateComplex($source, $target = 'en', $str = ''){
        // Norma
        $str = trim($str);
        $str = preg_replace('/ – /', '', $str);
        $str = preg_replace('/ - /', '', $str);
        $str = preg_replace('/ - /', '', $str);

        $str = preg_replace('/\s+/', ' ', $str); // remove spaces
        $str = preg_replace('/\.+/', '.', $str); // remove more .
        $str = preg_replace('/\.+,/', '.,', $str);  // remove more . with ,

        // Explode by numbers
        $numbers = preg_match_all('/(\d+[.,]?\d)\s\S*\s?/', $str, $match);
        $array = [];
        foreach($match[0] as $word_num){
            $str_temp = trim(substr($str, 0, strpos($str, $word_num)));

            $array[] = ['type' => 'translate', 'val' => $str_temp];
            $array[] = ['type' => 'translate-google', 'val' => trim($word_num)];

            $str = substr($str, strpos($str, $word_num) + strlen($word_num) - 1);
        }
        $array[] = ['type' => 'translate', 'val' => $str];

        // Translate
        $new_str = "";
        foreach($array as $complex_word){
            $new_str .= $this->getNewValue($source, $target, $complex_word) . ' ';
        }

        return $new_str;
    }
}
