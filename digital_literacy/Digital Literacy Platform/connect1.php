<?php
    $name= $_POST['name'];
    $email= $_POST['email'];
    $passwd= $_POST['password'];

    $conn= new mysqli('localhost','root','','digi_lit');
    if ($conn->connection_status){
        die(mysqli_error($conn));
    }else{
        echo 'connected';
    }
    /*if ($conn){
        echo "Connection succesful";
    }else{
        die(mysqli_error($conn));
    }*/
?>
