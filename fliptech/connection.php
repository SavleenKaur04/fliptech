<?php      
    $host = 'localhost';  
    $user = 'root';  
    $password = '';  
    $db_name = 'fliptech';  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die(mysqli_connect_error());  
    }  
?> 