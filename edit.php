<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<?php include './database/connection.php'; ?>

<body>
    <?php include 'navbar.php';
    $id = $_REQUEST['id'];

    $findsql = "SELECT * FROM user WHERE id='$id'";

    $result = mysqli_query($conn, $findsql);

    $row = mysqli_fetch_assoc($result);
    // print_r($row);

    if (isset($_POST['submit'])) {

        $email = $_POST['email'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $mobile = $_POST['mobile'];

        // print_r($_POST);

        $updatesql = "UPDATE user SET lastname='$email',firstname='$fname',email='$email',mobile='$mobile'  WHERE id=$id";


        if (mysqli_query($conn, $updatesql)) {
            echo '
            <div class="container">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                update successfully
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            </div>
            ';
        } else {
            echo '
            <div class="container">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    error
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
            ';
            echo "Error updating record: " . mysqli_error($conn);
        }
    }



    ?>

    <div class="container">
        <div class="py-5">
            <div class="col-8 m-auto">
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="name1" class="form-label">First Name</label>
                        <input type="text" name="fname" value="<?php echo $row['firstname']; ?>" class="form-control" id="name1">
                    </div>
                    <div class="mb-3">
                        <label for="name1" class="form-label">Last Name</label>
                        <input type="text" name="lname" value="<?php echo $row['lastname']; ?>" class="form-control" id="name1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" name="email" value="<?php echo $row['email']; ?>" class="form-control" id="exampleInputEmail1">
                    </div>
                    <div class="mb-3">
                        <label for="mobile" class="form-label">Mobile Number</label>
                        <input type="text" name="mobile" value="<?php echo $row['mobile']; ?>" class="form-control" id="mobile">
                    </div>
                    <input type="submit" name="submit" class="btn btn-primary mt-3" value="update">
                </form>
            </div>
        </div>
    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>