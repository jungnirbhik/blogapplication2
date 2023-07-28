<?php
 session_start();
   include("connection.php");
   if(isset($_POST['submit']));{
  if($_SERVER["REQUEST_METHOD"]=="POST"){

  
  $username =$_POST['username'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $repassword=$_POST['repassword'];



 if($username && $email && $password && $repassword  ){
    $insertquery="INSERT into user (username,email,password,repassword) values('$username','$email','$password','$repassword')";
    $result =mysqli_query($conn,$insertquery);
    if($result){
        echo"You have successfully registered";

    }
    else{
      echo"you have a error while registering";

    }
    header("Location:login.php");
        exit();
    } else {
       
        header("Location:login.php?error=1");
        exit();
    }
    
  }
}

?>
