<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRATION FORM</title>
    <style>
        form{
            border: 1px solid gray;
            width: 300px;
            padding: 20px;
            margin-top: 200px;
            margin-left: 580px;
            background: linear-gradient(to right
            #16e042
            #ff8800
            #ff3b3b
            #0346fd
            );
        }
        input{
            width: 300px;
            height: 30px;
        }
        button{
            width: 310px;
            height: 40px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <form method="POST" action="">
        <h2>REGISTRATION FORM</h2>
        <label>Firstname</label><br>
        <input type="text" name="Firstname" placeholder="Firstname"><br><br>
        <label>Lastname</label><br>
        <input type="text" name="Lastname" placeholder="Lastname"><br><br>
        <label>Username</label><br>
        <input type="text" name="Username" placeholder="Username"><br><br>
        <label>Email</label><br>
        <input type="email" name="Email" placeholder="Email"><br><br>
        <label>Password</label><br>
        <input type="password" name="Password" placeholder="Password">
        <button type="submit" name="submit"><a href="movibox.html">submit</a></button>
    </form>
</body>
</html>

<?php
include"connect.php";

if(isset($_POST['submit'])){
    $Firstname=$_POST['Firstname'];    
    $Lastname=$_POST['Lastname'];    
    $Username=$_POST['Username'];    
    $Email=$_POST['Email'];    
    $Password=$_POST['Password'];
    
    $insert="INSERT INTO `shotgun` VALUES('','$Firstname','$Lastname','$Username','$Email','$Password')";
    $query=mysqli_query($conn,$insert);
    if($query==true){
        echo"data inserted";
    }
    else{
        echo"data not inserted";
    }
}
?>