<?php
    
   $name=$_POST['name'];
   $email=$_POST['email'];
   //$image=$_POST['image'];


    //echo $name;
    //echo $email;
    //echo $image;
    $server="localhost:3306";
    $username="root";
    $password="";
    $dbname="back";

    $conn=mysqli_connect($server,$username,$password,$dbname);
    if(!$conn) {
    	echo 'connection failure';
    }

    $sql="INSERT INTO info (name,email) values ('".$name."','".$email."')";
    
    $response=mysqli_query($conn,$sql);
    if($response) {
    	echo 'data stored successfully';
    } else {
    	echo 'not stored';
    }

?>
