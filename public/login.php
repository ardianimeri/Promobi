<?php>
$host="localhost";
$user="root";
$password="";
$db="users";

$data=mysqli_connect($host, $user, $password, $db);
if($data === false){
    die("connection error");
}

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $email=$_POST["email"];
    $password=$_POST["password"];

    $sql="select * from login where email='".$email."' AND password='".$password."'";
}

$result=mysqli_query($data, $sql);

$row=mysqli_fetch_array($result);

if($row["usertype"]=="user"){
    echo "user";
}
elseif($row["usertype"]=="admin"){
    echo "admin";
}
else{
    echo "email or password incorrect";
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Register</title>
    <link rel="stylesheet" href="/src/assets/css/login.css"> 
    
</head>
<body>
    <!-- <div class="container">
        <h1 class="label">User Login</h1>
        <form class="login-form" action="">
            <div class="label-2">Email or Phone Number</div>
            <input type="text" placeholder="Email or Phone Number" name="" id="email">
             <div class="email-error">Please fill up your Email or Phone Number</div> 
            <div class="label-3">Password</div>
            <input type="password" placeholder="Password" name="" id="password">
             <div class="password-error">Please fill up your Password</div> 
            <button type="submit">Login</button>
        </form>
    </div> -->
    <div class="container">
        <div class="wrapper">
            <div class="form">
                <form id="login" name="Login/Register"action="index.html" method="POST">
                        <input type="text" id="email" name="email" placeholder="Enter your email"/>
                        <p id="email-label"></p>
                        <input type="text" id="password" name="password" placeholder="Enter your Password"/>
                        <p id="password-label"></p>
                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
<script src="/src/assets/js/form-validation.js"></script> 
</html>