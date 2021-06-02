<?php
    $connection = mysqli_connect("localhost", "root", "", "crud");

    if (isset($_POST['btn_add_record'])){
        $name = $_POST['Name'];
        $Email = $_POST['Email'];
        $Phone = $_POST['Phone'];
        $Address = $_POST['Address'];

        $sql = mysqli_query($connection, "INSERT INTO user (Name, Phone, Email, Address) VALUES ('$name', '$Phone', '$Email', '$Address')");
        echo '<script> alert("Record Added Successfully")</script>';
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
                       <div class="card-header">Registration Form</div>
                       <div CLASS="card-body">
                           <form method="post">
                               <div class="form-group mb-3">
                                   <input type="text" name="Name" placeholder="Fullname" class="form-control">
                               </div>
                               <div class="form-group mb-3">
                                   <input type="number" name="Phone" placeholder="Phone Number" class="form-control">
                               </div>
                               <div class="form-group mb-3">
                                   <input type="email" name="Email" placeholder="Email Address" class="form-control">
                               </div>
                               <div class="form-group mb-3">
                                   <input type="Address" name="Address" placeholder="Home Address" class="form-control">
                               </div>

                               <div class="form-group mb-3">
                                   <button class="form-control btn btn-Primary" type="submit" name="btn_add_record">SUBMIT</button>
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