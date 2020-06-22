<?php


$botToken = "";

	$website = "https://api.telegram.org/bot".$botToken;

$web = "https://api.telegram.org/file/bot".$botToken;



$update = file_get_contents('php://input');

$update = json_decode($update, TRUE);



$chatID = $update['message']['from']['id'];

$name = $update['message']['from']['first_name'];

$text = $update['message']['text'];

$agg = json_encode($update,JSON_PRETTY_PRINT);

if( !function_exists('ceiling') )
{
    function ceiling($number, $significance = 1)
    {
        return ( is_numeric($number) && is_numeric($significance) ) ? (ceil($number/$significance)*$significance) : false;
    }
}



function sendMessage($chatID,$text)
{
	
	$url = $GLOBALS[website]."/sendMessage?chat_id=$chatID&text=".urlencode($text);
	file_get_contents($url);
}
 foreach(glob('./files/*.csv') as $filename2){

 }
$file = $filename2;
if($text){
$searchfor = $text;
    
 $file1 = @fopen($file, "r");
        while (($column = fgetcsv($file1, 10000, ";")) !== FALSE)
        {
         if ($column[0]==$searchfor) {
            $barcode = "";
            if (isset($column[0])) {
                $barcode = $column[0];
                
            }
            $barcode2 = "";
            if (isset($column[1])) { 
                $barcode2=  $column[1];
                 }
                   $describtion = "";
            if (isset($column[2])) { 
                $describtion=  $column[2];
                 }
                      $price = "";
            if (isset($column[3])) {
                $price = $column[3];
            }
            $percent = "";
            if (isset($column[4])) {
                $percent = $column[4];
            }
            $ward = "";
            if (isset($column[5])) {
                $ward = $column[5];
            }
               $rseed= "";
            if (isset($column[6])) {
                $rseed = $column[6];
            }
                  $r=$price;
        $p=$percent;
            $s=ceiling($r*$p,100);
    sendMessage($chatID,"سعر القطعة  $s ل.س");
        sendMessage($chatID,"وصف القطعة $describtion");
        
            }
            
        }
        if($s==0)
        {   fclose($file1);
        $file1 = @fopen($file, "r");
        while (($column = fgetcsv($file1, 10000, ";")) !== FALSE)
        {
         if ($column[1] ==$searchfor) {
           $barcode = "";
            if (isset($column[0])) {
                $barcode = $column[0];
                
            }
            $barcode2 = "";
            if (isset($column[1])) { 
                $barcode2=  $column[1];
                 }
                   $describtion = "";
            if (isset($column[2])) { 
                $describtion=  $column[2];
                 }
                      $price = "";
            if (isset($column[3])) {
                $price = $column[3];
            }
            $percent = "";
            if (isset($column[4])) {
                $percent = $column[4];
            }
            $ward = "";
            if (isset($column[5])) {
                $ward = $column[5];
            }
               $rseed= "";
            if (isset($column[6])) {
                $rseed = $column[6];
            }
                  $r=$price;
        $p=$percent;
                $s=ceiling($r*$p,100);
    sendMessage($chatID,"سعر القطعة  $s ل.س");
        sendMessage($chatID,"وصف القطعة $describtion");   
        
         }}
        }
            fclose($file1);
           if($s==0)
            sendMessage($chatID,"مرحبا $name يرجى ادخال باركود بشكل صحيح ");
         
    

    
}

    switch($text)

{


		case"/start":

		sendMessage($chatID,"مرحبا $name اهلا بك مع بوت نمبرون ");

			sendMessage($chatID,"الرجاء ادخال الباركود");

		break;
    
}
?>
