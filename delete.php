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


    // print_r();

    // sql to delete a record
    $sql = "DELETE FROM user WHERE id=$id";

    if (mysqli_query($conn, $sql)) {
        header("Location: http://localhost/crud/");
        
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }

    ?>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>