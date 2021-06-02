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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
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


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>
</html>