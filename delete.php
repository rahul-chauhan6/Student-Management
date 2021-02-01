<?php
include 'regconnection.php';
$id = $_GET['id'];
$query = "DELETE FROM rcdata WHERE id = '$id'";
$data=mysqli_query($con,$query);
if($data){
    ?>
        <script> 
            alert("Record Deleted Successfully");
            location.replace("display.php");
        </script>;
    <?php
}else{
    echo"something went wrong ";
}


?>