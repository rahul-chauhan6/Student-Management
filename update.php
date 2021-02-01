<?php
include'regconnection.php';

// For Fetching Data
error_reporting(0);
$id = $_GET['id'];
$sql = "SELECT * FROM `rcdata` where id=$id";
$result = mysqli_query($con,$sql);
$arr = mysqli_fetch_array($result);


if(isset($_POST['submit'])){
    $ids = $_POST['id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $course = $_POST['course'];
    $email=$_POST['email'];
   
    $mobile = $_POST['mobile'];

    $qry = "UPDATE `rcdata` SET firstname='$fname', lastname='$lname',course='$course',email='$email',mobile='$mobile' where id=
    $ids";
    $res = mysqli_query($con,$qry);
    echo $ids;
    if($res==true){
        header('location:display.php');
    }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Update Page</title>
  </head>
  <body>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

   
<!-- Trigger the modal with a button -->
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">UPDATE</button>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">UPDATE HERE</h4>
      </div>
      <div class="modal-body">
      <!-- HERE START UPDATE MODAL BODY -->
        

      <form action="update.php" method="POST">
            <div class="form-group">
                <label for="fname"></label>
                <input type="text" name="fname" value="<?php echo $arr['firstname']; ?>" placeholder="Enter First Name" class="form-control">  
                <input type="hidden" name="id" id="id" value="<?php echo $arr['id']; ?>">         
            </div>
            <div class="form-group">
                <label for="lname"></label>
                <input type="text" name="lname" value="<?php echo $arr['lastname']; ?>" placeholder="Enter Last Name" class="form-control">           
            </div>
            <div class="form-group">
                <label for="course"></label>
                <input type="text" name="course" value="<?php echo $arr['course']; ?>" placeholder="Enter Course" class="form-control">           
            </div>
            <div class="form-group">
                <label for="email"></label>
                <input type="email" name="email" value="<?php echo $arr['email']; ?>" placeholder="Enter Course" class="form-control">           
            </div>
            
            <div class="form-group">
                <label for="mobile"></label>
                <input type="tel" name="mobile" value="<?php echo $arr['mobile']; ?>" placeholder="Enter Mobile" class="form-control">           
            </div>
            <button class="btn btn-primary" type="submit" name="submit">Update</button>
        </form>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>



    <!-- Body Start Here
    <h1 class="text-center my-4">Update details</h1>
    <div class="row">
    <div class="col-md-4 col-lg-4">
    
    </div>
    
    <div class="col-md-4 col-lg-4 bg-warning" style="padding:50px;"> -->
        
    <!-- </div>
    <div class="col-md-4 col-lg-4">
    
    </div>
    
    </div> -->

  </body>
</html>