<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rahul chauhan</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css"/>

<!-- here we using the bootstrap datatables cdn liks -->

    <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.0/css/jquery.dataTables.css">
   <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.0/css/jquery.dataTables_themeroller.css">
   <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.7.1.min.js"></script>
   <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.0/jquery.dataTables.min.js"></script>


    <script>
        
    $(document).ready(function () {
  $('#myTable').DataTable();
});
    </script>
<style>
h3{
    background-color: black;
    text-align: center;
    font-weight: bold;
    text-transform: uppercase;
    text-shadow: gray;
    padding: 15px;
    color: white;
}
h3:hover{
    background-image:linear-gradient(green ,red) ;
    padding: 20px;
}

</style>
   


</head>
<h3 class="text-center shadow-lg bg-green rounded">student information</h3>

<body>
   
        <table id="myTable" class="display table table-striped" cellspacing="0" width="100%">
    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>First-Name</th>
            <th>Last-Name</th>
            <th>course</th>
            <th>Email</th>
            <th>mobile</th>
            <th>Operation</th>
            <th>Operation</th>
            
        </tr>
    </thead> 
    <tbody>
        <?php
            $con=mysqli_connect("localhost","root","","rcdatabase");
            $query="SELECT * FROM `rcdata`";
            $run=mysqli_query($con,$query);
            while($data=mysqli_fetch_array($run))
            {
        ?>
        <tr>
            <td><?php echo $data['id'];?></td>
            <td><?php echo $data['firstname'];?></td>
            <td><?php echo $data['lastname'];?></td>
            <td><?php echo $data['course'];?></td>
            <td><?php echo $data['email'];?></td>
            <td><?php echo $data['mobile'];?></td>

<!-- Trigger the modal with a button -->

            <td> <a href="update.php?id=<?php echo $data ['id']; ?> " class="btn btn-success"  >update</a></td>
            <td> <a href="delete.php?id=<?php echo $data['id'];?>" class="btn btn-danger" >delete</a></td>
        </tr>
        <?php
            }
            ?>
        
     </tbody>
  </table>      

</body>

</html>