<?php
    $connection = mysqli_connect("localhost", "root", "", "crud");

  $query = mysqli_query($connection, "SELECT * FROM user");
?>

<html>
<head>
    <title>Crud Operation</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
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
                        <table class="table table-responsive-md" style="font-size: 12px;">
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
                                // while ($row = mysqli_fetch_assoc($query)) {
                                foreach ($query as $row) {
                             ?>
                            <tr>
                                <td><?php echo $count++; ?></td>
                                <td><?php echo $row["Name"]; ?></td>
                                <td><?php echo $row["Phone"]; ?></td>
                                <td><?php echo $row["Email"]; ?></td>
                                <td><?php echo $row["Address"]; ?></td>
                                <td><a href="edit_user.php?uid=<?php echo $row["userID"]; ?>" class="btn btn-sm btn-Primary">Edit</a></td>
                                <td><a href="delete_user.php?uid=<?php echo $row["userID"]; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this record?')" >Delete</a></td>
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


<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js" ></script>
</body>
</html>