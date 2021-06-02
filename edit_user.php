<?php
    $connection = mysqli_connect("localhost", "root", "", "crud");

    $uid = $_GET['uid'];
    $query = mysqli_query($connection, "SELECT * FROM user WHERE userID LIKE '{$uid}'");
    $row = mysqli_fetch_assoc($query);

    if (isset($_POST['btn_update_record'])){
        $name = $_POST['Name'];
        $Email = $_POST['Email'];
        $Phone = $_POST['Phone'];
        $Address = $_POST['Address'];

        $sql = mysqli_query($connection, "UPDATE user SET Name='$name', Phone='$Phone', Email='$Email', Address='$Address' WHERE userID LIKE '$uid' ");
        echo '<script> alert("Record Updated Successfully"); window.location="user_report.php" </script>';
    }
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
                <div class="col-md-4 offset-sm-4 mt-4">
                   <div class="card">
                       <div class="card-header">Edit User</div>
                       <div CLASS="card-body">
                           <form method="post">
                               <div class="form-group mb-3">
                                   <input type="text" name="Name" value="<?php echo $row["Name"]; ?>" class="form-control">
                               </div>
                               <div class="form-group mb-3">
                                   <input type="number" name="Phone" value="<?php echo $row["Phone"]; ?>" class="form-control">
                               </div>
                               <div class="form-group mb-3">
                                   <input type="email" name="Email" value="<?php echo $row["Email"]; ?>" class="form-control">
                               </div>
                               <div class="form-group mb-3">
                                   <input type="Address" name="Address" value="<?php echo $row["Address"]; ?>" class="form-control">
                               </div>

                               <div class="form-group mb-3">
                                   <button class="form-control btn btn-Primary" type="submit" name="btn_update_record">UPDATE</button>
                               </div>

                           </form>
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