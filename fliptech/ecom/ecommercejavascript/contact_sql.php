<?php      
    include('../../connection.php');  
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $msg=$_POST['msg'];
    $sql = "INSERT INTO 'feedback' ('name', 'phone', 'email', 'msg') VALUES ('$name', '$phone', '$email', '$msg')";  
    $result = mysqli_query($con, $sql); 

    echo "<script>alert('Feedback Submitted Successfully');</script>";


?> 