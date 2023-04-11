<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $Quality_Score = $_POST['quality'];
    $Feedback_Txt = $_POST['suggestion'];

    $conn = mysqli_connect("localhost", "root", "", "booking");
    $query = "insert into feedback(Quality_Score, Feedback_Txt)values('$Quality_Score','$Feedback_Txt')";
    $result = mysqli_query($conn, $query);
    if ($result)
        echo 'Thank you for your feedback. We\'ll appreciate!';
    else
        die("Something terrible happened. Please try again. ");
}
?>