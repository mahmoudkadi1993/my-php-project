<?php
$conn=mysqli_connect("localhost","id13991774_mk","IMQ1R7jx*3s(-QOr","id13991774_search");
$db=mysqli_select_db($conn,'id13991774_search');

if(isset($_POST['fnum'])){
    $text = $_POST['fnum'];
}
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


if(isset($_POST['add']))
{
    $sqll = "SELECT * FROM `emp` WHERE barcode='$text'";

$res= mysqli_query($conn ,$sqll);


while($row=mysqli_fetch_array($res))
{
	$price=0;
    $price=$row['price'];
	$per=0;
	$per=$row['percent'];
	$r=$price * $per;
	$s= $row['describtion'];
	$b= $row['barcode'];
	$w= $row['ward'];

}}}
?>
<head>
  <link rel="stylesheet" href="main.css">
</head>
<body>
<div class="container"><div class="row">
<div class="col-sm">
<?php	echo "<h5 class='display-1'>$r<h5>";?>
	</div>
	 <div class="w-100"></div>
	<div class="col-sm">
	<?php echo "<h5 class='display-5'>$s<h5>";?>
	</div>
		 <div class="w-100"></div>
		<div class="col-sm">
	<?php echo "<h5 class='display-5'>$b<h5>";?>
	</div>
	</div>
			 <div class="w-100"></div>
		<div class="col-sm">
	<?php echo "<h5 class='display-5'>$w<h5>";?>
	</div>
	</div>
	</div>
	
<head>
<meta name="viewport" content="width=500,height=500 initial-scale=1">
  <link rel="stylesheet" href="main.css">
</head>
<form method="post">
<br/>

<br/>
<div class="container">
  <div class="row">
    <div class="col"><input value="" type="text" style="width:100%" class="form-control"  name="fnum"/><hr/></div>
    <div class="col">ادخل الباركود </div>
    <div class="w-100"></div>
    <div class="col"><input type="submit"  class="btn btn-success" name="add" value="بحث"/></div>
    <div class="col"></div>
  </div>
</div>
</form>
</body>