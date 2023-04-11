<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST')
            $email = $_POST['Email'];
            $nop = $_POST['Password'];

            $servername = "localhost";
            $username = "root";
            $dbpassword = "";
            $database = "registeration";
            # create a connection
            $con = mysqli_connect($servername, $username, $dbpassword, $database);

            # die if connection was unsuccessful
            if (!$con) {
                die("Sorry we failed to connect");
            } else {
                echo "Connection Established<br><br>";
            }

            # create a table in the DB
            $sql = "INSERT INTO signin values('$email','$nop')";
            $result = mysqli_query($con, $sql);

            if ($result) {
                echo "Row inserted in table successfully.";
            } else {
                echo "Row not inserted in table succesfully because of this error ---> " . mysqli_error($con);
            }
?>