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
class Testing
{
    private $db = null;
    
    /**
     * Class constructor.
     *
     * @db DB - object for connect with Database
     * @doc_id int|false - Document`s ID
     */
    function __construct ($db) {
        $this->db = $db;
    }
    
    public function translateSimpleTest($source = 'ru', $target = 'ua', $text = false){
        if($text)
            $text = 'Ультразвуковое исследование Щитовидной железы';
        
        $tr = new Translator($this->db);
        $rezult = $tr->translate($source, $target, $text);
        
        echo "Testing: Simple translate. Rezult: <br>\n";
        echo 'Text: ' . $text;
        echo 'Translated: ' . $rezult;
        
        exit();
    }
    
    public function translateDataTest($source = 'ru', $target = 'ua'){
        if(!isset($data[$source]))
            exit('Not found test-data for lang: ' . $source);
        if(!isset($data[$target]))
            exit('Not found test-data for lang: ' . $target);
        
        $data = [
            'ru' => [
                ['key' => '1', 'type' => 'translate', 'val' => 'Ультразвуковое исследование'],
                ['key' => '2', 'type' => 'translate-complex', 'val' => 'Контрон СИГМА 210, ирис. Электронные линейный датчик 7,5 МГц и конвексный - 3,5 МГц'],
                ['key' => '3', 'type' => 'translit', 'val' => 'Амосов Ю. М.'],
                ['key' => '4', 'type' => 'translit', 'val' => 'Пупкин В. Н.'],
                ['key' => '5', 'type' => 'none', 'val' => '21321354315'],
                ['key' => '6', 'type' => 'date', 'val' => '2021-15-04'],
                ['key' => '7', 'type' => 'translate', 'val' => 'Щитовидная железа'],
                ['key' => '8', 'type' => 'translate-complex', 'val' => 'типичной формы и расположения, контуры ровные, чёткие, общий объём 12,3 куб см. (без объёма перешейка). Перешеек толщиной 4 мм., контуры ровные, эхоструктура однородная, изоэхогенная.'],
                ['key' => '9', 'type' => 'translate-complex', 'val' => 'размерами 52 х 21 х 13 мм., объёмом – 6,7 куб. см.., контуры ровные, чёткие, эхоструктура однородная, изоэхогенная.'],
                ['key' => '10', 'type' => 'translate-complex', 'val' => 'размерами 48 х 18 х 14 мм., объёмом - 5,6 куб. см, зхоструктура однородная, изоэхогенная, дополнительных образований не определяется.'],
                ['key' => '11', 'type' => 'translate-google', 'val' => 'Регионарные лимфатические узлы не визуализируются.'],
                ['key' => '12', 'type' => 'translate-google', 'val' => 'Эхоструктурные изменения не выявлены'],
            ],
            'ua' => [
                ['key' => '1', 'type' => 'translate', 'val' => 'Ультразвукове дослідження '],
                ['key' => '2', 'type' => 'translate-complex', 'val' => 'Контрон СИГМА 210, Ірис. Електронний лінійний датчик 7,5 МГц і конвексний-3,5 МГц'],
                ['key' => '3', 'type' => 'translit', 'val' => 'Амосов Ю. М.'],
                ['key' => '4', 'type' => 'translit', 'val' => 'Пупкін В. Н.'],
                ['key' => '5', 'type' => 'none', 'val' => '15684962'],
                ['key' => '6', 'type' => 'date', 'val' => '2021-15-04'],
                ['key' => '7', 'type' => 'translate', 'val' => 'Щитовидна залоза'],
                ['key' => '8', 'type' => 'translate-complex', 'val' => 'типової форми і розташування, контури рівні, чіткі, загальний обсяг 12,3 куб см. (без обсягу перешийка). Перешийок товщиною 4 мм., контури рівні, ехоструктура однорідна, ізоехогенная.'],
                ['key' => '9', 'type' => 'translate-complex', 'val' => "розмірами 52 х 21 х 13 мм., об'ємом – 6,7 куб. см.., контури рівні, чіткі, ехоструктура однорідна, ізоехогенна."],
                ['key' => '10', 'type' => 'translate-complex', 'val' => "розмірами 48 х 18 х 14 мм., об'ємом - 5,6 куб. см, зхоструктура однорідна, ізоехогенна, додаткових утворень не визначаєтьс11я."],
                ['key' => '11', 'type' => 'translate-google', 'val' => 'Регіонарні лімфатичні вузли не не візуалізуються.'],
                ['key' => '12', 'type' => 'translate-google', 'val' => 'Ехоструктурні зміни не виявлені'],
            ],
            'en' => [
                ['key' => '1', 'type' => 'translate', 'val' => 'ULTRASOUND OF THE THYROID'],
                ['key' => '2', 'type' => 'translate-complex', 'val' => 'KONTRON Sigma Iris 210. Electronic linear probe 7.5 MHz and convex - 3.5 MHz'],
                ['key' => '3', 'type' => 'translit', 'val' => 'Amosov U. M.'],
                ['key' => '4', 'type' => 'translit', 'val' => 'Pupkin V. N.'],
                ['key' => '5', 'type' => 'none', 'val' => '15684962'],
                ['key' => '6', 'type' => 'date', 'val' => '2021-05-14'],
                ['key' => '7', 'type' => 'translate', 'val' => 'Thyroid'],
                ['key' => '8', 'type' => 'translate-complex', 'val' => 'has typical shape and location, the contours are even, clear, the total volume is 12.3 cubic cm (without the volume of isthmus). The isthmus is 4 mm thick, the contours are even, the echostructure is homogeneous, isoechoic.'],
                ['key' => '9', 'type' => 'translate-complex', 'val' => 'measures 52 x 21 x 13 mm., Volume - 6.7 cubic cm., the contours are smooth, clear, the echostructure is homogeneous, isoechoic.'],
                ['key' => '10', 'type' => 'translate-complex', 'val' => 'measures 48 x 18 x 14 mm, volume - 5.6 cubic cm, the structure is homogeneous, isoechoic, no additional formations 11are detected.'],
                ['key' => '11', 'type' => 'translate-google', 'val' => 'Regional lymph nodes are not visualized.'],
                ['key' => '12', 'type' => 'translate-google', 'val' => 'Echostructural changes were not identified'],
            ],
            'es' => [
                ['key' => '1', 'type' => 'translate', 'val' => 'ULTRASOUND OF THE THYROID'],
                ['key' => '2', 'type' => 'translate-complex', 'val' => 'KONTRON Sigma Iris 210. Electronic linear probe 7.5 MHz and convex - 3.5 MHz'],
                ['key' => '4', 'type' => 'translit', 'val' => 'Pupkin V. N.'],
                ['key' => '13', 'type' => 'date', 'val' => '2021-05-14'],
                ['key' => '14', 'type' => 'none', 'val' => 'Italian'],
                ['key' => '15', 'type' => 'none', 'val' => '+155654213'],
                ['key' => '16', 'type' => 'none', 'val' => 'test@gmail.com'],
                ['key' => '5', 'type' => 'none', 'val' => '15684962'],
                ['key' => '6', 'type' => 'date', 'val' => '2021-05-14'],
                ['key' => '7', 'type' => 'translate', 'val' => 'Thyroid'],
                ['key' => '8', 'type' => 'translate-complex', 'val' => "ha una forma e posizione tipiche a contorni regolari. L'istmo ha uno spessore di 4 mm, i contorni sono regolari, l'ecostruttura è omogenea, isoecogena."],
                ['key' => '9', 'type' => 'translate-complex', 'val' => "misura 52 x 21 x 13 mm, volume - 6,7 cm3, i contorni sono uniformi, regolari  l'ecostruttura è omogenea, isoecogena."],
                ['key' => '10', 'type' => 'translate-complex', 'val' => 'misura 48 x 18 x 14 mm, volume - 5,6 cm3,  I contorni sono regolari ,  la struttura.  omogenea, isoecogena.'],
                ['key' => '11', 'type' => 'translate-google', 'val' => 'I linfonodi regionali non vengono visualizzati.'],
                ['key' => '12', 'type' => 'translate-google', 'val' => 'I cambiamenti ecostrutturali non sono rilevati. Non sono presenti  formazioni patologiche.'],
                ['key' => '3', 'type' => 'translit', 'val' => 'Amosov U. M.'],
            ],
        ];
        
        $tr = new Translator($this->db);
        $rezult = $tr->translateData($source, $target, $data[$source]);
        
        echo "Testing: Big translate. Rezult: <br>\n";
        echo 'Data after: <br>\n';
        print_r($rezult);
        
        exit();
    }
    
    public function createEmptyDocumentTest(){
        
        $doc = (new Document($this->db))->create();
        $dictionary = $doc->getDectionaryFromFile('/dictionary/test.xlsx');
        $dictionary = $doc->replenishDictionary($dictionary, true);
        
        echo "Testing: Create empty document. Rezult: <br>\n";
        echo 'Test data: <br>\n';
        print_r($dictionary);
        
        exit();
    }
    
    public function createFullDocumentTest(){
        
        $doc = (new Document($this->db))->create();
        $dictionary = $doc->getDectionaryFromFile('/dictionary/test.xlsx');
        $dictionary = $doc->replenishDictionary($dictionary, true);
        
        echo "Testing: Create full document. Rezult: <br>\n";
        echo 'Test data: <br>\n';
        print_r($dictionary);
        
        exit();
    }
    
    public function deleteDocumentTest($doc_id = 1){

        $doc = (new Document($this->db, $doc_id))->delete();
        
        echo "Testing: Delete document by ID $doc_id. Rezult: <br>\n";
        if($doc)
            echo 'SUCCESS';
        else
            echo 'NO';
        
        exit();
    }
}