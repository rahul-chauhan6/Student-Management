






<?php
// include "regconnection.php";
error_reporting(0);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<style>
 h1{
     text-align:center;
     text-transform: uppercase;
     font-weight: bold;
     text-shadow: 4px 4px gray;
     padding: 15px;
     font-size: 70px;
 }
 body{
 background-image: url('image/lg.jpg');
            background-repeat: no-repeat;
            background-size: 100%;
    }
#mobtn{
    margin-top: 170px;
    width: 100px;
    margin-right: 170px;

}

    </style>

</head>
<h1 >welcome Admin panel</h1>

<body>



    <div class="container text-center">
    <button class="btn btn-danger" data-target="#mymodal"  id="mobtn" data-toggle="modal">login</button>
    <div class="modal fade" id="mymodal">
    <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
    <h3>login here</h3>
    <button class="close" type="button" data-dismiss="modal">&times;</button>
    </div>
    <!-- here start modal body -->
    <div class="modal-body">
    
    <form action="index.php" method="POST">
                    <label for="user">Username</label>
                    <input type="text" name="user" class="form-control" placeholder="Enter username">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Enter your password">
                    <br>
                    <input type="submit" name="submit" class="btn btn-success ">

                </form>
    
    
    </div>
    <!-- here modal footer -->
    <div class="modal-footer">
    <button type="button" class="close" data-dismiss="modal">close</button>
    
    </div>
    <!-- here footer is finised -->
    </div>


    
    </div>
    
    
    
    
    </div>
        <!-- <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4 justify-content-center"> -->

               
<!-- <div class="col-md-4"></div>


            </div>
        </div>
    </div> -->



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
<?php
if(isset($_POST['submit'])){
    $name=$_POST['user'];
    $password=$_POST['password'];
    $con = mysqli_connect("localhost","root","","rcdatabase");
    $sq="SELECT * FROM alogin where `name`='$name' AND `password`='$password'";
    $my=mysqli_query($con,$sq);
    $res=mysqli_num_rows($my);
    echo $res;
    if($res>0)
    {
        session_start();
        $_SESSION['id']=$name;
        header('location:login.php');
        // echo "done";
    }
    else{
        echo("  invalid user name and password");
    }
}





?>