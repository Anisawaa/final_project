<!DOCTYPE html>
<html lang="en">

    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="keywords"
    content="Finding the best car insurance company for you, Insurance and investing for your many sides, Finding the best car insurance company for you, The Best Insurance Companies for 2021, The Best Car Insurance Companies for 2021, Faq, Safe. Relaxing. Good to ride in. Subtly decorated., Contact Us">
  <meta name="description" content="">
  <meta name="page_type" content="np-template-header-footer-from-plugin">
  <title>Home</title>
  <link rel="stylesheet" href="nicepage.css" media="screen">
  <link rel="stylesheet" href="home2.css" media="screen">
  <script class="u-script" type="text/javascript" src="jquery-1.9.1.min.js" defer=""></script>
  <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
  <meta name="generator" content="Nicepage 4.0.6, nicepage.com">
  <link id="u-theme-google-font" rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i,800,800i%22%3E
  <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aguafina+Script:400%22%3E

  <script type="application/ld+json">{
        "@context": "http://schema.org/",
        "@type": "Organization",
        "name": "",
        "url": "/"
}</script>
  <meta name="theme-color" content="#ffd600">
  <meta property="og:title" content="home2">
  <meta property="og:type" content="website">
  <link rel="canonical" href="/">
    </head>

<?php
include "config.php";
$query = "SELECT * from biodata";
$data = mysqli_query($conn, $query);
?>

    <body>
        <div class="container">
            <h1>Update Biodata</h1>
            <form action="update_act.php">
                <div class="modal-body">
                    <?php
                    if ($row = mysqli_fetch_assoc($data)) {
                        //while($row = $review->fetch_object()){     $reviewId = $row->reviewId;     $reviewUser = $row->username;     $reviewMessage = $row->message;     $reviewRating = $row->rating;
                    ?>
                        <div class="form-group">
                            <label for="fullname">Full Name</label>
                            <input type="text" class="form-control" id="fullname" name="fullname" value="<?= $row['fullname'] ?>">
                        </div>

                        <div class="form-group">
                            <label for="DOB">DOB</label>
                            <input type="date" class="form-control" id="DOB" name="DOB" value="<?= $row['DOB'] ?>">
                        </div>

                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" id="address" name="address" value="<?= $row['address'] ?>">
                        </div>

                        <div class="form-group">
                            <label for="phonenumber">Phone Number</label>
                            <input type="text" class="form-control" id="phonenumber" name="phonenumber" value="<?= $row['phonenumber'] ?>">
                        </div>

                        <div class="form-group">
                            <label for="car_id">Car ID</label>
                            <input type="text" class="form-control" id="car_id" name="car_id" value="<?= $row['car_id'] ?>">
                        </div>
                        <button class="btn btn-success">Change</button>
                    <?php
                    }
                    ?>
                </div>
            </form>
        </div>
    </body>
</html>