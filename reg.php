<?php
include 'regconnection.php';


?>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css\reg.css">
    <title>
    </title>
    <link rel="stylesheet" href="#">
    <style>
    body{
 background-image: url('image/lp.jpg');
            background-repeat: no-repeat;
            background-size: 100%;
    }
    #error{
        color: red;
        font-size: 12px;
        
    }

    #lerror{
        color: red;
        font-size: 12px;
        
    }

    #cerror{
        color: red;
        font-size: 12px;
        
    }

    #eerror{
        color: red;
        font-size: 12px;
        
    }

    #perror{
        color: red;
        font-size: 12px;
        
    }
    #merror{
        color: red;
        font-size: 12px;
        
    }


    </style>
    <h1 class="font-size=5px"><a style="float: right; text-decoration:none;" <button type="onclick"  href="http://localhost/PHPPROJECT/login.php">HOME</button></a></h1>

</head>

<body>

    <div class="container"><marquee direction="left"   behavior="alternate" >
        <h2 class="text-center">Enter your Details Here</h2>
        </marquee>
        <div class="row">
            <div class="col-md-4  col-sm-4"></div>
            <div class="col-md-4 col-sm-4">
                <form action="reg.php" method="POST" class="form-group" name="register" onsubmit="return validate()">

                    <label for="firstname">Firstname</label>
                    <input type="text" name="firstname" class="form-control"  placeholder="Enter First Name"require><br>
                    <p id="error"></p>
                    <label for="lastname">Lastname</label>
                    <input type="text" name="lastname" class="form-control" placeholder="Enter Last Name" require><br>
                    <p id="lerror"></p>
                    <label for="course">Course</label>
                    <input type="text" name="course" class="form-control"  placeholder=" Enter course" require><br>
                    <p id="cerror"></p>
                    <label for="email">E-mail</label>
                    <input type="email" name="email" class="form-control" placeholder="Enter E-mail " require><br>
                    <p id="eerror"></p>
                   
                    
                    <label for="mobile">Mobile-Number</label>
                    <input type="text" name="mobile" class="form-control" placeholder="Enter Mobile Number" require><br>
                    <p id="merror"></p>
                    <input type="submit" name="submit" class="btn btn-success text-center">

                </form>
            </div>
            <div class="col-md-4  col-sm-4"></div>
        </div>

    </div>
    </div>

    <?php
    if (isset($_POST['submit'])) {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $course = $_POST['course'];
        $email = $_POST['email'];
        
        $mobile = $_POST['mobile'];
        $sql = "INSERT INTO rcdata(firstname,lastname,course,email,mobile)VALUES('$firstname','$lastname','$course','$email','$mobile')";
        $res = mysqli_query($con, $sql);

        if ($res) {
            echo "successfully register";
        } else {
            echo "here something problem to parasign data to databases";
        }
    }
    ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        function validate() {
            var fullname = document.register.firstname.value;
            var email = document.register.email.value;
            var lastname = document.register.lastname.value;
           
            var course = document.register.course.value;
            var mobile=document.register.mobile.value;
            if (fullname == null || fullname == "") {
                document.getElementById("error").innerHTML="First Name can't be empty";
                return false;
            } else if (lastname == null || lastname == "" || lastname.length<5 || lastname.length>12) {
                document.getElementById("lerror").innerHTML="Last Name can't be empty";
                return false;
            } else if (course == null || course == "") {
                document.getElementById("cerror").innerHTML="course Name can't be empty";
                return false;
            } else if (email == null || email == "") {
                document.getElementById("eerror").innerHTML="Email Name can't be empty";
                return false;

           
            } else if (mobile==null || mobile=="" || mobile.length>10) {
                document.getElementById("merror").innerHTML="Mobile number can't be empty";
                return false;
            }
            else{
                alert("before submiting check your details correctly");
            }

        }
    </script>
</body>

</html>