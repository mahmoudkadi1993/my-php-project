<?php
$conn=mysqli_connect("localhost","id13991774_mk","IMQ1R7jx*3s(-QOr","id13991774_search");
$db=mysqli_select_db($conn,'id13991774_search');
if(!$conn)
{
    
    echo "not found";
}
else
{
    echo "success";
    
}

if(!$conn)
{
    echo "not found";
}
else
{

$sqll = "SELECT * FROM `emp`";

$res= mysqli_query($conn ,$sqll);
$num= mysqli_num_rows($res);
echo $num;
while($row=mysqli_fetch_array($res))
{
echo $row['barcode'];
echo "<br>";
echo $row['result'];
}
mysqli_close($conn);
}

?>