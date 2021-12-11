<?php
    include "config.php";
    $fullname = $_GET['fullname'];
    $NIK = $_GET['NIK'];
    $DOB = $_GET['DOB'];
    $address = $_GET['address'];
    $phonenumber = $_GET['phonenumber'];
    $car_id = $_GET['car_id'];
    
    if(!empty($fullname) && !empty($NIK) && !empty($DOB) && !empty($address) && !empty($phonenumber) && !empty($car_id)){
        $query = "INSERT INTO biodata 
        (fullname, NIK, DOB, address, phonenumber, car_id) 
        values 
        ('$fullname', '$NIK', '$DOB', '$address', '$phonenumber', '$car_id')";
        $data = mysqli_query($conn, $query);

        if($data){
            header("location:home2.html");
        }
    }
    
?>