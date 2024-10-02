<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    
    <style>
        body{
            background-image: url(letter-s-cube-3d-box-600nw-693536233.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }
        *{
            box-sizing: border-box;
            font-family: sans-serif;
        }
        form{
            max-width: 300px;
            padding: 5px;
            border: 5px solid rgb(0, 110, 255);
            margin: 80px auto;
            box-sizing: border-box;
            text-align: center;
            font-family: sans-serif;
            border-radius: 12px;
        }
        input{
            width: 100%;
            height: 50px;
            padding: 9px;
            border: 5px solid rgb(6, 114, 255);
            margin: 0px auto;
            font-family: sans-serif;
        }
        .a{
            width: 49%;
            padding: 9px;
            border: 3px solid lightgray;
            margin: 0px;
            color: white;
            background-color: rgb(231, 23, 23);
            font-family: sans-serif;
        }
        .b{
            width: 49%;
            padding: 9px;
            border: 3px solid lightgray;
            margin: 0px;
            color: white;
            background-color: rgb(42, 221, 42);
            font-family: sans-serif;
        }
        h2{
            border-bottom: 1px solid lightgrey;
        }
        .b:hover{
            transform: scale(0.9);
            cursor: grabbing;
        }
        .a:hover{
            transform: scale(0.9);
            cursor: grabbing;
        }
    
    </style>
</head>
<body>
    <div class="ac">
        <form action="" method="POST">
            <h2>Login</h2>
            <label>Email</label><br>
            <input type="email" name="Email"  placeholder="Enter Your Email" required><br><br>
            <label>Password</label><br>
            <input type="password" name="Password"  placeholder="Enter Your Password" required><br><br>
            <button type="reset" class="a">Clear</button>
            <button type="submit" class="b" name="Submit">Submit</button>
        </form>
    </div>
</body>
</html>


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