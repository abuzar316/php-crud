<div class="container">
    <div class="py-4">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

                <?php include './database/connection.php';

                $selectsql = "SELECT * FROM user";

                $result = mysqli_query($conn, $selectsql);

                // print_r(mysqli_fetch_assoc($result));

                // print_r(mysqli_num_rows($result));

                $row = mysqli_fetch_assoc($result);
                // print_r($row) ;

                // function showDetails($data)
                // {
                //     echo $data;
                // }

                if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                    while ($row = mysqli_fetch_assoc($result)) {

                        echo "<tr>";
                        echo  "<th>" . $row["id"] . "</th>"; //. " - Name: " . $row["firstname"] . " " . $row["lastname"] . "<br>";
                        echo  "<th>" . $row["firstname"] . "</th>";
                        echo  "<th>" . $row["lastname"] . "</th>";
                        echo  "<th>" . $row["email"] . "</th>";
                        echo  "<th>
                        <a class='btn btn-primary' href='edit.php?id=$row[id]'>edit</a>
                        <a class='btn btn-primary' href='delete.php?id=$row[id]'>Delete</a>
                        </th>";
                        echo "</tr>";
                    }
                } else {
                    echo "0 results";
                }
                ?>

            </tbody>
        </table>
    </div>
</div>

<script>
    function showDetails(data) {
        document.write(data);
    }
</script>