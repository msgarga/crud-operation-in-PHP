<?php
    $connection = mysqli_connect("localhost", "root", "", "crud");

  $query = mysqli_query($connection, "SELECT * FROM user");
?>

<html>
<head>
    <title>Crud Operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
<div  class="container-fluid">
    <div class="row">
        <?php include 'inc/header.php'; ?>
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-sm-1 mt-4">
                   <div class="card">
                       <div class="card-header">User Report</div>
                       <div CLASS="card-body">
                        <table class="table" style="font-size: 12px;">
                            <tr>
                                <th>SN</th>
                                <th>Name</th>
                                <th>Phone No.</th>
                                <th>Email</th>
                                <th>Home Address</th>
                                <th>Action</th>
                                <th>Action</th>
                            </tr>
                            <?php 
                                $count = 1;
                                foreach ($query as $row) {
                             ?>
                            <tr>
                                <td><?php echo $count++; ?></td>
                                <td><?php echo $row["Name"]; ?></td>
                                <td><?php echo $row["Phone"]; ?></td>
                                <td><?php echo $row["Email"]; ?></td>
                                <td><?php echo $row["Address"]; ?></td>
                                <td><a href="edit_user.php" class="btn btn-sm btn-Primary">Edit</a></td>
                                <td><a href="delete_user.php" class="btn btn-sm btn-danger">Delete</a></td>
                            </tr>
                        <?php } ?>
                            
                        </table>
                           
                       </div>
                   </div>
                </div>

            </div>




            <div

        </div>




    </div>

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>
</html>