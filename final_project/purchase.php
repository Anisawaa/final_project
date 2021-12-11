<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Inventory Data</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head>

<?php
include "config.php";
// Melakukan query pada tabel kategori agar proses memasukkan buku bagian kategori semakin mudah
$query = "SELECT * from biodata";
$data = mysqli_query($conn, $query);
?>

<body>
    <div class="container">
            <h1>Submit Biodata</h1>
            <form action="purchase_action.php">
                <div class="modal-body">
                    <?php
                    if ($row = mysqli_fetch_assoc($data)) {
                    ?>
                        <div class="form-group">
                            <label for="fullname">Full Name</label>
                            <input type="text" class="form-control" id="fullname" name="fullname">
                        </div>

                        <div class="form-group">
                            <label for="NIK">NIK</label>
                            <input type="text" class="form-control" id="NIK" name="NIK">
                        </div>

                        <div class="form-group">
                            <label for="DOB">DOB</label>
                            <input type="date" class="form-control" id="DOB" name="DOB">
                        </div>

                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" id="address" name="address">
                        </div>

                        <div class="form-group">
                            <label for="phonenumber">Phone Number</label>
                            <input type="text" class="form-control" id="phonenumber" name="phonenumber">
                        </div>

                        <div class="form-group">
                            <label for="car_id">Car ID</label>
                            <select class="form-control" id="car_id" name="car_id">
                                    <option value="Car 1">Car 1</option>
                                    <option value="Car 2">Car 2</option>
                                    <option value="Car 3">Car 3</option>
                                    <option value="Car 4">Car 4</option>
                                    <option value="Car 5">Car 5</option>
                             </select>
                        </div>
                        <button class="btn btn-success">Submit</button>
                    <?php
                    }
                    ?>
                </div>
            </form>
        </div>
</body>

</html>