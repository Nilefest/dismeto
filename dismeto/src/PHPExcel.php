<?php
/**
 * This file is part of DISMETO package.
 */

namespace DLL\DISMETO;

require 'PHPSpreadsheet/autoload.php';
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

/**
 * Class DISMETO
 * Main class in project
 * 
 * @author Nilefest <nikitaleo777333@gmail.com>
 * @package DLL\DISMETO
 */
class PHPExcel
{
    private $dir_upload = DISMETO_DIR . '/uploads';
    private $file_path = '';
        
     /**
     * Create a new PHPExcel
     */
    public function __construct($file_name) {
        $this->file_path = $this->dir_upload . $file_name;
    }
    
     /**
     * Read data from file
     * 
     * @return array - data by format: [sheet_n][row_n][cell_n]
     */
    public function readFile(){
        $data = [];
        
        $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($this->file_path);
        
        $sheet_data = [];
        $sheet_count = $spreadsheet->getSheetCount();
        for($sheet_n = 0; $sheet_n < $sheet_count; $sheet_n++){
            $worksheet = $spreadsheet->setActiveSheetIndex($sheet_n);
            
            $lang_list = [];
            $row_n = 0;
            foreach ($worksheet->getRowIterator() as $row) {
                $row_data = [];
                
                $cellIterator = $row->getCellIterator();
                $cellIterator->setIterateOnlyExistingCells(FALSE);
                foreach ($cellIterator as $cell){
                    if($cell->getValue())
                        $row_data[] = $cell->getValue();
                }
                
                if($row_data)
                    $sheet_data[] = $row_data;
                $row_n++;
            }
            
            if($sheet_data)
                $data[] = $sheet_data;
        }
        
        return $data;
    }
    
     /**
     * Test write data to file
     * 
     * @exit
     */
    public function write_test(){
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1', 'Hello World !');

        $writer = new Xlsx($spreadsheet);
        $writer->save('hello world' . time() . '.xlsx');
        
        exit('Test write data to file .xlsx. Rezult: SUCCESS');
    }
}