<?php
include_once 'config.php';

if(isset($_POST['btn-save']))
{
 // variables for input data
     $fullname = $_POST['fullname'];
      $NIK = $_POST['NIK'];
      $DOB = $_POST['DOB'];
      $address = $_POST['address'];
      $phonenumber = $_POST['phonenumber'];
      $carname = $_POST['carname'];
    // variables for input data

 // sql query for inserting data into database
 
$sql_query="INSERT INTO biodata (`fullname`,`NIK`,`DOB`,`address`,`phonenumber`,`carname`) VALUES('".$fullname."','".$NIK."','".$DOB."','".$address."','".$phonenumber."','".$carname."')";
 // sql query for inserting data into database
 
 // sql query execution function
 if(mysqli_query($conn,$sql_query))
 {
  ?>
  <script type="text/javascript">
  alert('biodata added Successfully ');
  window.location.href='indexcrud.php';
  </script>
  <?php
 }
 else
 {
  ?>
  <script type="text/javascript">
  alert('error occured while inserting your data');
  </script>
  <?php
 }
 // sql query execution function
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add New Biodata</title>
<link rel="stylesheet" href="stylecrud.css" type="text/css" />
</head>
<body>
<center>

<div id="header">
 <div id="content">
        <label>Add New Biodata</a></label>
    </div>
</div>
<div id="body">
 <div id="content">
    <form method="post" enctype="multipart/form-data" >
    <table align="center">
    <tr>
    <td align="center"><a href="indexcrud.php">Return</a></td>
    </tr>



      <tr>
    <td>
    <input type="text" class="form-control" id="fullname" name="fullname" required placeholder="Fullname">
    </td>
    </tr>
    <tr>
    <td>
    <input type="number" class="form-control" id="NIK" name="NIK" required placeholder="NIK">
    </td>
    </tr>
    <tr>
    <td>
    <input type="text" class="form-control" id="DOB" name="DOB" required placeholder="DOB">
    </td>
    </tr>
    <tr>
    <td>
    <input type="text" class="form-control" id="address" name="address" required placeholder="Address">
    </td>
    </tr>
    <tr>
    <td>
    <input type="number" class="form-control" id="phonenumber" name="phonenumber" required placeholder="Phonenumber">
    </td>
    </tr>
    <tr>
    <td>
<select class="form-control" id="carname" name="carname">
<option value="Rush">Rush (250 M)</option>
<option value=" Vios"> Vios (260,5 M)</option>
<option value=" Camry"> Camry (630 M)</option>
<option value=" Supra GR"> Supra GR (2,15 B)</option>
<option value=" Terios"> Terios (205 M)</option>
</select>
</td>
    </tr>
  



    <tr>
    <td><button type="submit" name="btn-save"><strong>SAVE</strong></button></td>
    </tr>
    </table>
    </form>
    </div>
</div>

</center>
</body>
</html>