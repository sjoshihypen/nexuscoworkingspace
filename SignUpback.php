<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST')
            $Name = $_POST['Name'];
            $Email = $_POST['Email'];
            $Password = $_POST['Password'];
            $Confirm_Password = $_POST['Confirm_Password'];

            $servername = "localhost";
            $username = "root";
            $dbpassword = "";
            $database = "booking";
            # create a connection
            $con = mysqli_connect($servername, $username, $dbpassword, $database);

            # die if connection was unsuccessful
            if (!$con) {
                die("Sorry we failed to connect");
            } else {
                echo "Connection Established<br><br>";
            }

            # create a table in the DB
            $sql = "INSERT INTO Signup_info values('$Name','$Email','$Password','$Confirm_Password')";
            $result = mysqli_query($con,$sql);
            // $num = mysqli_num_rows($result);
            if ($result) {
                echo "Signup successfully.";
            } 
            else {
                echo "Invaild Credential---> " . mysqli_error($con);
            }
?>