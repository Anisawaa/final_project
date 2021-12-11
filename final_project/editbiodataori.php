<?php
include_once 'config.php';

if(isset($_GET['edit_id']))
{
 $sql_query="SELECT * FROM biodata WHERE id=".$_GET['edit_id'];
 $result_set=mysqli_query($conn,$sql_query);
 $fetched_row=mysqli_fetch_array($result_set,MYSQLI_ASSOC);
}
if(isset($_POST['btn-update']))
{
 // variables for input data
     
   $fullname = $_POST['fullname'];
          
   $NIK = $_POST['NIK'];
          
   $DOB = $_POST['DOB'];
          
   $address = $_POST['address'];
          
   $phonenumber = $_POST['phonenumber'];
          
   $carname = $_POST['carname'];
        // variables for input data

 // sql query for update data into database
  $sql_query="UPDATE biodata SET `fullname`='$fullname',`NIK`='$NIK',`DOB`='$DOB',`address`='$address',`phonenumber`='$phonenumber',`carname`='$carname' WHERE id=".$_GET['edit_id'];

 // sql query for update data into database
 
 // sql query execution function
 if(mysqli_query($conn,$sql_query))
 {
  ?>
  <script type="text/javascript">
  alert('biodata updated successfully');
  window.location.href='indexcrud.php';
  </script>
  <?php
 }
 else
 {
  ?>
  <script type="text/javascript">
  alert('error occured while updating data');
  </script>
  <?php
 }
 // sql query execution function
}
if(isset($_POST['btn-cancel']))
{
 header("Location: indexcrud.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit Biodata</title>
<link rel="stylesheet" href="stylecrud.css" type="text/css" />
</head>
<body>
<center>

<div id="header">
 <div id="content">
        <label>Edit Biodata</a></label>
    </div>
</div>

<div id="body">
 <div id="content">
    <form method="post" enctype="multipart/form-data">
    <table align="center">
    <tr>
    <td>
    <input type="text" value="<?php echo $fetched_row['fullname'] ?>" class="form-control" id="fullname" name="fullname">
</td>
    </tr>
  <tr>
    <td>
    <input type="number" value="<?php echo $fetched_row['NIK'] ?>" class="form-control" id="NIK" name="NIK">
</td>
    </tr>
  <tr>
    <td>
    <input type="text" value="<?php echo $fetched_row['DOB'] ?>" class="form-control" id="DOB" name="DOB">
</td>
    </tr>
  <tr>
    <td>
    <input type="text" value="<?php echo $fetched_row['address'] ?>" class="form-control" id="address" name="address">
</td>
    </tr>
  <tr>
    <td>
    <input type="number" value="<?php echo $fetched_row['phonenumber'] ?>" class="form-control" id="phonenumber" name="phonenumber">
</td>
    </tr>
  <tr>
    <td>
<select class="form-control" id="carname" name="carname">
<option value="Rush" <?php if($fetched_row['carname'] == "Rush"){ echo "selected"; } ?> >Rush</option>
<option value=" Vios" <?php if($fetched_row['carname'] == " Vios"){ echo "selected"; } ?> > Vios</option>
<option value=" Camry" <?php if($fetched_row['carname'] == " Camry"){ echo "selected"; } ?> > Camry</option>
<option value=" Supra GR" <?php if($fetched_row['carname'] == " Supra GR"){ echo "selected"; } ?> > Supra GR</option>
<option value=" Terios" <?php if($fetched_row['carname'] == " Terios"){ echo "selected"; } ?> > Terios</option>
</select>
</td>
    </tr>
      <tr>
    <td>
    <button type="submit" name="btn-update"><strong>UPDATE</strong></button>
    <button type="submit" name="btn-cancel"><strong>Cancel</strong></button>
    </td>
    </tr>
    </table>
    </form>
    </div>
</div>

</center>
</body>
</html>