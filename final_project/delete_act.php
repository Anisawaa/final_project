<?php
    include "config.php";
    $NIK = $_GET['NIK'];
    if($_GET['delete'] == 1){
 
        $query = "DELETE FROM biodata WHERE NIK = '$NIK'";
        
        $cek = mysqli_query($conn, $query);
        
        if($cek != false){
            echo "<script> alert('Item Deleted!');
            window.location.href = 'database.php';
            </script>";
        }
        else{
            echo "<script> alert('Delete Failed!');
            window.location.href = 'database.php';
            </script>";
        }
    }
    else{
        echo "<script>
        window.location.href = 'database.php';
        </script>";
    }
?>