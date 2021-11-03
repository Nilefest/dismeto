<?php
/**
 * This file is part of DISMETO package.
 */

namespace DLL\DISMETO;

if(!defined("STEMMER_DIR")) define("STEMMER_DIR", __DIR__ . '/Stemmer');

require_once STEMMER_DIR . '/wamania/php-stemmer/StemmerFactory.php';
use Wamania\Snowball\StemmerFactory;

/**
 * Class Stemmer
 * 
 * @author Nilefest <nikitaleo777333@gmail.com>
 * @package DLL\DISMETO
 */
class Stemmer
{
    private $stemmer = null;
    
     /**
     * Create a new Stemmer
     * 
     * @param $lang - stemmer`s language
     */
    public function __construct($lang = 'en') {
        if($lang == 'uk') $lang = 'ua';
        
        $this->stemmer = StemmerFactory::create($lang);
    }
    
     /**
     * Get Stemm`s words by source  string
     * 
     * @param $str - source string
     * @return string - stemm`s words
     */
    public function getStemmWords($str){
        $str = preg_replace("/(?![.=$'€%-])\p{P}/u", "", $str);
        
        preg_match_all('~(\w+)~', $str, $matches);

        $words = explode(' ', $str);
        $stem_str = "";
        foreach($words as $word)
            $stem_str .= $this->stemmer->stem($word) . ' ';
        
        return $stem_str;
    }
}
