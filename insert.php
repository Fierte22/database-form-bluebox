<?php
include"connect.php";

if(isset($_POST['Submit'])){
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];

     $insert="INSERT INTO `box` VALUES('','$Email','$Password')";
     $query=mysqli_query($conn,$insert);
     if($query==true){
        echo"successfully login";
     }else{
        echo"failed login";
     }
}
?>