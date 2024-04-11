<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
  $fname=$_POST['FName'];
  $mname=$_POST['MName'];
  $lname=$_POST['LName'];
  $username=$_POST['Email'];
  $password=$_POST['Password'];
  $contact=$_POST['Contact'];

  $conn=mysqli_connect("localhost","root","","ecom");

  if(!$conn){
    die("Connection failed".mysqli_connect_error());
  }  
}
$query= "INSERT INTO user (FName,MName,LName,Email,Password,Contact) VALUES('$fname','$mname','$lname','$username','$password','$contact')";

  if(mysqli_query($conn, $query)){
    header("Location: Login.html");
    echo "Signup Successful";
  }
  else{
    echo "Error".$sql."<br>".mysqli_error($conn);
  }
  $conn->close();
?>;