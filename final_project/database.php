<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Database <?= $_GET['NIK'] ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="navbar.css">
</head>

<body>
    
    <div class="header">
            <h1>Biodata</h1>
        </div>

            <?php
        if(!empty($_SESSION['username'])){
            echo "<a href='Login.php'><button class='sign-in'>Login</button></a>";
        }
        ?>
    </div>
    


    <?php
        // Melakukan koneksi dengan database
        include "config.php";
        $query = "SELECT * FROM biodata";
        $data = mysqli_query($conn, $query);
        
        if(isset($_GET['NIK'])){
            $nik = $_GET['NIK'];
            $query = "SELECT * FROM biodata WHERE NIK='$nik'";
            $data = mysqli_query($conn, $query);
        }else{
            $query = "SELECT * FROM biodata";
            $data = mysqli_query($conn, $query);
        }
    ?>

    <div class="mt-2 container">

        <a href="purchase.php"><button class="btn btn-success">
                Add++
            </button></a>

    </div>
    <div class="container text-center">
        <div class="head">
            <h1>Biodata</h1>
        </div>
        <div class="main">
            <table class="table">
                <thead>
                    <th>Full Name</th>
                    <th>NIK</th>
                    <th>DOB</th>
                    <th>Address</th>
                    <th>Phone Number</th>
                    <th>Car ID</th>
                </thead>
                <tbody>
                    <?php
                    while ($row = mysqli_fetch_assoc($data)) {
                    ?>
                        <tr>
                            <td><?= $row['fullname'] ?></td>
                            <td><?= $row['NIK'] ?></td>
                            <td><?= $row['DOB'] ?></td>
                            <td><?= $row['address'] ?></td>
                            <td><?= $row['phonenumber'] ?></td>
                            <td><?= $row['car_id'] ?></td>
                            <td>
                                <form action="update.php" class="m-1">
                                    <button class="btn btn-warning">Update</button>
                                    <input type="hidden" name="NIK" value="<?= $row['NIK'] ?>">
                                </form>
                                <form action="delete.php">
                                    <button class="btn btn-danger">Delete</button>
                                    <input name="NIK" type="hidden" value="<?= $_GET['NIK'] ?>">
                                </form>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>  
    </body>
</html>