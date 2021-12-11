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

<!DOCTYPE html>
<html style="font-size: 16px;">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="keywords" content="Yokohama Motors">
  <meta name="description" content="">
  <meta name="page_type" content="np-template-header-footer-from-plugin">
  <title>Account</title>
  <link rel="stylesheet" href="nicepage.css" media="screen">
  <link rel="stylesheet" href="login2.css" media="screen">
  <link rel="stylesheet" href="stylecrud.css" type="text/css" />
  <script class="u-script" type="text/javascript" src="jquery-1.9.1.min.js" defer=""></script>
  <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
  <meta name="generator" content="Nicepage 4.0.6, nicepage.com">
  <link id="u-theme-google-font" rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
  <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aguafina+Script:400">


  <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "Organization",
      "name": ""
    }
  </script>
  <meta name="theme-color" content="#ffd600">
  <meta property="og:title" content="login2">
  <meta property="og:type" content="website">

</head>

<body class="u-body">
  <header class="u-align-left u-black u-border-1 u-border-grey-25 u-clearfix u-header u-sticky u-sticky-9656 u-header"
    id="sec-fe27">
    <div class="u-clearfix u-sheet u-sheet-1">
      <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
        <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px; font-weight: 700;">
          <a class="u-button-style u-custom-active-border-color u-custom-active-color u-custom-border u-custom-border-color u-custom-borders u-custom-hover-border-color u-custom-hover-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link"
            href="#" style="padding: 2px 0px; font-size: calc(1em + 4px);">
            <svg>
              <use xlink:href="#menu-hamburger"></use>
            </svg>
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <defs>
                <symbol id="menu-hamburger" viewBox="0 0 16 16" style="width: 16px; height: 16px;">
                  <rect y="1" width="16" height="2"></rect>
                  <rect y="7" width="16" height="2"></rect>
                  <rect y="13" width="16" height="2"></rect>
                </symbol>
              </defs>
            </svg>

          </a>
        </div>
        <div class="u-custom-menu u-nav-container">
          <ul class="u-nav u-spacing-20 u-unstyled u-nav-1">
            <li class="u-nav-item"><a
                class="u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-nav-link u-text-active-palette-4-base u-text-hover-white u-text-palette-1-base"
                href="home2.html" style="padding: 10px;">Home</a>
            </li>
            <li class="u-nav-item"><a
                class="u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-nav-link u-text-active-palette-4-base u-text-hover-white u-text-palette-1-base"
                href="about2.html" style="padding: 10px;">About</a>
            </li>
            <li class="u-nav-item"><a
                class="u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-nav-link u-text-active-palette-4-base u-text-hover-white u-text-palette-1-base"
                href="products2.html" style="padding: 10px;">Catalogue</a>
            </li>
            <li class="u-nav-item"><a
                class="u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-nav-link u-text-active-palette-4-base u-text-hover-white u-text-palette-1-base"
                href="login.php" style="padding: 10px;">Account</a>
            </li>
            <li class="u-nav-item"><a
              class="u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-nav-link u-text-active-palette-4-base u-text-hover-white u-text-palette-1-base"
              href="indexcrud.php" style="padding: 10px;">Biodata</a>
          </li>
          </ul>
        </div>
        <div class="u-custom-menu u-nav-container-collapse">
          <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
            <div class="u-inner-container-layout u-sidenav-overflow">
              <div class="u-menu-close"></div>
              <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2">
                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="home2.html"
                    style="padding: 10px;">Home</a>
                </li>
                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="about2.html"
                    style="padding: 10px;">About</a>
                </li>
                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="products2.html"
                    style="padding: 10px;">Catalogue</a>
                </li>
                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="login2.html"
                    style="padding: 10px;">Account</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
        </div>
      </nav>
      <h1 class="u-align-center u-custom-font u-text u-text-1" spellcheck="false">Yokohama Motors</h1>
    </div>
  </header>

  <section class="u-align-center u-clearfix u-image u-shading u-section-1" data-image-width="1280"
    data-image-height="852" id="sec-dc8b">
    <div class="u-clearfix u-sheet u-sheet-1">
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
    </div>
  </section>

  <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-2012">
    <div class="u-clearfix u-sheet u-sheet-1">
      <p class="u-small-text u-text u-text-variant u-text-1" spellcheck="false"> © 2021 Yokohama Motors, Inc.</p>
    </div>
  </footer>
</body>

</html>