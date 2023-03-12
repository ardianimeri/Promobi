<?php
require '../src/includes/dbconnect.php';

session_start();

if( isset($_SESSION['user_id']) ){
    header("Location: /");
}
$error = '';
$errors = []; 

if(isset($_POST['submit'])):
    if(strlen($_POST['email'])< 3)
        $errors[] = 'email is empty or too short';
    if(strlen($_POST['password'])< 6)
        $errors[] = 'password is empty or too short';
    
    if(count($errors)=== 0){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $message = '';
        $query = $pdo->prepare('SELECT id,name,email,password FROM users WHERE email = :email');
        $query->bindParam(':email', $email);
        $query->execute();
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

        $user = $query->fetch();
    }
    
    if(count($user) > 0 && password_verify($password, $user['password'])){

        $_SESSION['user_id'] = $user['id'];
        $_SESSION['name'] = $user['name'];
        header ("Location: ../src/pages/Homepage.html");
    } else {
        $message = 'Sorry, those credentials do not match';
    }

endif;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Register</title>
    <link rel="stylesheet" href="/Promobi/src/assets/css/login.css"> 
    
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
                <form id="login" name="Login/Register"action="login.php" method="POST">
                        <input type="text" id="email" name="email" placeholder="Enter your email"/>
                        <p id="email-label"></p>
                        <input type="text" id="password" name="password" placeholder="Enter your Password"/>
                        <p id="password-label"></p>
                    <button onclick="validateEmail()" type="submit" name="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
<script src="../src/assets/js/form-validation.js"></script>
</html>