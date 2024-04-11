<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){

    
    $username=$_POST['Email'];
    $password=$_POST['Password'];
  

    $conn=mysqli_connect("localhost","root","","ecom");
  
    if(!$conn){
      die("Connection failed".mysqli_connect_error());
    }
    $query= "SELECT *FROM user WHERE Email='$username' AND Password='$password' ";

    $result= $conn->query($query);

    if($result->num_rows> 0){
        header("Location: Homepage.html");
        echo "Successfull";
        exit();
    }else{
        echo "Invalid email or password.";
    }
    $conn->close();
}
?>