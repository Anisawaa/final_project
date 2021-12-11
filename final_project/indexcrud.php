<?php
include_once 'config.php';


if(isset($_GET['delete_id']))
{
 $sql_query="DELETE FROM biodata WHERE id=".$_GET['delete_id'];
 mysqli_query($conn,$sql_query);
 header("Location: $_SERVER[PHP_SELF]");
}
if(isset($_GET['changestatus_id']))
{
 $sql_query="UPDATE biodata SET `status`='".$_GET['status']."' WHERE id=".$_GET['changestatus_id'];
 mysqli_query($conn,$sql_query);
 header("Location: $_SERVER[PHP_SELF]");
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
  <script type="text/javascript">
function edt_id(id)
{
  window.location.href='editbiodata.php?edit_id='+id;
}
function view_id(id)
{
  window.location.href='viewbiodata.php?view_id='+id;
}
function delete_id(id)
{
 if(confirm('Sure to Delete ?'))
 {
  window.location.href='indexcrud.php?delete_id='+id;
 }
}
function changestatus_id(id,status)
{
  window.location.href='indexcrud.php?changestatus_id='+id+'&status='+status;
}
</script>
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
    <label>Biodata</a></label>
    </div>
</div>

<div id="body">
 <div id="content">
    <table align="center"class="table table-striped"> 
    <tr>
    <th colspan="5"><a href="addbiodata.php">Add Biodata</a></th>
    </tr>
    <th>No.</th>
    <th>Full Name</th>
   
    <th colspan="3">Actions</th>
    </tr>
    <?php
 $sql_query="SELECT * FROM biodata";
 $result_set=mysqli_query($conn,$sql_query);
 $i=1;
 while($row=mysqli_fetch_row($result_set))
 {
  ?>
        <tr>
        <td align="center" ><?php echo $i; ?></td>
        <td align="center" > <a href="javascript:view_id('<?php echo $row[0]; ?>')"> <?php echo $row[1]; ?> </a> </td>
        <?php if($row[count($row)-1]==1) { ?>
        <align="center"><a href="javascript:changestatus_id('<?php echo $row[0]; ?>',0)"></a>
        <?php } else { ?>
        <align="center"><a href="javascript:changestatus_id('<?php echo $row[0]; ?>',1)"></a>
        <?php } ?>
  <td align="center"><a href="javascript:edt_id('<?php echo $row[0]; ?>')">Edit</a></td>
        <td align="center"><a href="javascript:delete_id('<?php echo $row[0]; ?>')">Delete</a></td>
        </tr>
        <?php
       $i++;  
 }
 ?>
    </table>
    </tr>
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