<?php
//Code to verify the website
$verify_token = $_GET['hub_verify_token'];
if (isset($verify_token)) {
 $challenge = $_GET['hub_challenge'];
 if ($verify_token == "verification_token") {
 print $challenge;
 } elseif ($verify_token != "verification_token") {
 print 'Error, wrong validation token';
 }
}
//Code to process requests
$postData = file_get_contents('php://input');
$postData = preg_replace('/"id":(\d+)/', '"id":"$1"', $postData); //Important - to prevent ID becoming a float

if( !function_exists('ceiling') )
{
    function ceiling($number, $significance = 1)
    {
        return ( is_numeric($number) && is_numeric($significance) ) ? (ceil($number/$significance)*$significance) : false;
    }
}
foreach(glob('./files/*.csv') as $filename2){

 }
$file = $filename2;
if(getMessage($postData)){
$searchfor = getMessage($postData);
    
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
   sendMessage(getSender($postData), "سعر القطعة: ".$s);
     sendMessage(getSender($postData), "وصف القطعة: ".$describtion);
        
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
     sendMessage(getSender($postData), "سعر القطعة: ".$s);
         sendMessage(getSender($postData), "وصف القطعة: ".$describtion);
        
         }}
        }
            fclose($file1);
             if($s==0)
              sendMessage(getSender($postData), "يرجى ادخال الباركود بشكل صحيح");
}
         
    

function getMessage($input){
 $postdata = json_decode($input);
 return $postdata->entry[0]->messaging[0]->message->text;
}
function getSender($input){
 $postdata = json_decode($input);
 return $postdata->entry[0]->messaging[0]->sender->id;
}
function sendMessage($recipient, $textMessage) {
$token ="" ;
 $json = '{
 "recipient":{"id":"' . $recipient . '"},
 "message":{
 "text":"' . $textMessage . '"
 }
}';
$options = array(
 'http' => array(
 'method' => 'POST',
 'content' => $json,
 'header' => "Content-Type: application/json\r\n" .
 "Accept: application/json\r\n"
 )
 );
 
 $url = 'https://graph.facebook.com/v7.0/me/messages?access_token=' . $token;
 $context = stream_context_create($options);
 $result = file_get_contents($url, false, $context);
 return $json;
}
?>