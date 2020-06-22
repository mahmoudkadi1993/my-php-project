<?php

 $message="";
 if(isset($_POST['delet'])){
 
 $folder = 'files';
 
//Get a list of all of the file names in the folder.
$files = glob($folder . '/*');
 
//Loop through the file list.
foreach($files as $file){
    //Make sure that this is a file and not a directory.
    if(is_file($file)){
        //Use the unlink function to delete the file.
        unlink($file);
           $type = "success";
        $message = "تم الحذف بنجاح";
    }
}}
 foreach(glob('./files/*.csv') as $filename2){

 }
if (isset($_POST["import"])) {
           $fileName = $_FILES["file"]["tmp_name"];
    if ($_FILES["file"]["size"] > 0) {
           $insertId=move_uploaded_file($_FILES["file"]["tmp_name"], "files/" . $_FILES['file']['name']);
           if (! empty($insertId)) {
               $type = "success";
           foreach(glob('./files/*.csv') as $filename2);
             $message = "CSV Data Imported into the Database";
           } 
           else
           {
               $type = "error";
$message = "Problem in Importing CSV Data";
            }
        
    }}

?>
<!DOCTYPE html>
<html>

<head>


  <link rel="stylesheet" href="main.css">

<script src="jquery-3.2.1.min.js"></script>

<style>
body {
    font-family: Arial;
    width: 550px;
}

.outer-scontainer {
    background: #F0F0F0;
    border: #e0dfdf 1px solid;
    padding: 20px;
    border-radius: 2px;
}

.input-row {
    margin-top: 0px;
    margin-bottom: 20px;
}

.btn-submit {
    background: #333;
    border: #1d1d1d 1px solid;
    color: #f0f0f0;
    font-size: 0.9em;
    width: 100px;
    border-radius: 2px;
    cursor: pointer;
}

.outer-scontainer table {
    border-collapse: collapse;
    width: 100%;
}

.outer-scontainer th {
    border: 1px solid #dddddd;
    padding: 8px;
    text-align: left;
}

.outer-scontainer td {
    border: 1px solid #dddddd;
    padding: 8px;
    text-align: left;
}

#response {
    padding: 10px;
    margin-bottom: 10px;
    border-radius: 2px;
    display: none;
}

.success {
    background: #c7efd9;
    border: #bbe2cd 1px solid;
}

.error {
    background: #fbcfcf;
    border: #f3c6c7 1px solid;
}

div#response.display-block {
    display: block;
}
</style>

</head>

<body>
    <h2>Import CSV file into Mysql using PHP</h2>

    <div id="response"
        class="<?php if(!empty($type)) { echo $type . " display-block"; } ?>">
        <?php if(!empty($message)) { echo $message; } ?>
        </div>
    <div class="outer-scontainer">
        <div class="row">

            <form class="form-horizontal" action="" method="POST"
                name="frmCSVImport" id="frmCSVImport"
                enctype="multipart/form-data">
                <div class="input-row">
                    <label class="col-md-4 control-label">Choose CSV
                        File</label>              <label for="file">Select .CSV file to Import</label>
                    <input accept=".csv" name="file" type="file" class="form-control">
                    <button type="submit" id="submit" name="import"
                        class="btn-submit">Import</button>
			 <input type="submit" class="btn-danger" name="delet" id="delet" value="DELETE WHOLE DATA"/>
                   

                </div>

            </form>

        </div>
               <?php
  
          if (($handle = fopen("$filename2", "r")) !== false) {

                ?>
            <table id=''>
            <thead>
                <tr>
                    <th>Barcode</th>
<th>description</th>
<th>price</th>
<th>percent</th>
                    <th>WARD</th>
                   
                </tr>
            </thead>
<?php
                $i = 0;
                 while (($data = fgetcsv($handle,1000, ";")) !== false) {$i++;
                   if($i <= 100) {
                    ?>
                    
                <tbody>
                <tr>
                    <td><?php  echo $data[0]; ?></td>
               <td><?php echo $data[1]; ?></td>
               <td><?php echo $data[2]; ?></td>
               <td><?php echo $data[3]; ?></td>
			                 <td><?php  echo $data[4]; ?></td>
           
       
                </tr>
                    <?php
                }}
                ?>
                </tbody>
        </table>
        <?php } ?>
    </div>

</body>

</html>