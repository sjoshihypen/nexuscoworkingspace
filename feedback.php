<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $Name = $_POST['visitor_name'];
    $Phone = $_POST['visitor_phone'];
    $email = $_POST['visitor_email'];
    $nop = $_POST['total_adult'];
    $doi = $_POST['checkin'];
    $doo = $_POST['checkout'];
    $rp = $_POST['room_preference'];

    $servername = "localhost";
    $username = "root";
    $dbpassword = "";
    $database = "registeration";
    # create a connection
    $con = mysqli_connect($servername,$username,$dbpassword,$database);
    
    # die if connection was unsuccessful
    if(!$con) {
        die("Sorry we failed to connect");
    }
    else{
        echo "Connection Established<br><br>";
    }
    
    # create a table in the DB
    $sql = "INSERT INTO workspace_rooms values('$Name','$Phone','$email','$nop','$doi','$doo','$rp')";
    $result = mysqli_query($con,$sql);
    
    if($result) {
        echo "Row inserted in table successfully.";
    }
    else {
        echo "Row not inserted in table succesfully because of this error ---> " . mysqli_error($con);
    }
}
?>