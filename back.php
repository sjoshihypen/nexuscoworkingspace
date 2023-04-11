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
    $database = "booking";
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
    $sql = "INSERT INTO booking_info values('$Name','$Phone','$email','$nop','$doi','$doo','$rp')";
    $result = mysqli_query($con,$sql);
    
    if($result) {
        header("Location: Razorpayy/pay.php");
    }
    else {
        echo "Row not inserted in table succesfully because of this error ---> " . mysqli_error($con);
    }
}
?>