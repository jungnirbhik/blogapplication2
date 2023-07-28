<?php
session_start();
include("connection.php");

if(isset($_POST['Submit']));{
    if($_SERVER["REQUEST_METHOD"]=="POST"){

$title =$_POST['title'];
$description=$_POST['description'];
$image=$_FILES['image']['name'];


if($title && $description && $image){
  
    $query="SELECT * FROM user WHERE title ='$title'&& description ='$description' && image='$image'";
    $data=mysqli_query($conn,$query);
     if(!$data){
    die("Error:".mysqli_error($conn));
     }
   $numrows= mysqli_num_rows($data);
}

    $insertquery="insert into user(title,description,chooseimage) values('$title','$description','$image')";
    $result =mysqli_query($conn,$insertquery);
   
        if($result){
        
           
        echo"You have successfully submitted.";
        }
        else{
            echo"submission failed.";
        }
         header("Location:home.php");
    }
}
    


?>
