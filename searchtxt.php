<?php
foreach(glob('./files/*.csv') as $file)

$searchfor = '1031254';
    
 $file1 = @fopen($file, "r");
        while (($column = fgetcsv($file1, 10000, ";")) !== FALSE) {
         if ($column[0] ==$searchfor) {     
            $barcode = "";
            if (isset($column[0])) {
                $barcode = $column[0];
                
            }
            $describtion = "";
            if (isset($column[1])) { 
                $describtion=  $column[1];
                 }
                      $price = "";
            if (isset($column[2])) {
                $price = $column[2];
            }
            $percent = "";
            if (isset($column[3])) {
                $percent = $column[3];
            }
            $ward = "";
            if (isset($column[4])) {
                $ward = $column[4];
            }
            }}

            echo   $barcode,  $describtion,$price,$percent;
         fclose($file1);
          
?>