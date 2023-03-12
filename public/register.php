<?php

require "../src/includes/dbconnect.php";

session_start();
if( isset($_SESSION['user_id']) ){
    header("Location: /");
}

// $_SESSION['page'] = 'register';

$error ='';
$errors = [];



if(isset($_POST['register'])){
    if(strlen($_POST['name'])< 3)
    $errors[] = 'Name is empty or too short';

    if(strlen($_POST['surname'])< 3)
    $errors[] = 'Surname is empty or too short';

    if(strlen($_POST['email'])< 3)
    $errors[] = 'email is empty or too short';

    if(strlen($_POST['password1'])< 6)
    $errors[] = 'password is empty or too short';

    if($_POST['password1'] !== $_POST['password2'])
    $errors[] = 'Password has to be the same';
   
    if(count($errors)=== 0){
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password1'], PASSWORD_BCRYPT);
        $role = 
        $message = '';
        $sql = 'INSERT INTO users (name,surname, email, password) VALUES (:name, :surname,:email, :password)';
        $query = $pdo->prepare($sql);
        $query->bindParam('name', $name);
        $query->bindParam('surname', $surname);
        $query->bindParam('email', $email);
        $query->bindParam('password', $password);
            if($query->execute()) {
                $message = "Successfully created your account";
                header('Location: login.php');
            } else {
                $message = "A problem occurred creating your account";
            }
          
          } 
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
<div class="container">
        <div class="wrapper">
            <?php if(isset($error)) echo '<p>'.$error.'</p>';?>
            <?php 
                if(count($errors)) {
                    echo '<ul>';
                    foreach($errors as $error){
                        echo '<li>'.$error.'</li>';
                    }
                    echo '</ul>';
                }
            ?>
            <div class="form">
                <form id="login" name="Login/Register"action="register.php" method="POST">
                    <input type="text" id="name" name="name" placeholder="Enter your name"/>
                    <input type="text" id="surname" name="surname" placeholder="Enter your surname"/>
                    <input type="text" id="email" name="email" placeholder="Enter your email"/>
                    <p id="email-label"></p>
                    <input type="text" id="password" name="password1" placeholder="Enter your Password"/>
                    <p id="password-label"></p>
                    <input type="text" id="password" name="password2" placeholder="Enter your Password again"/>
                    <button type="submit" name="register">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
</body>
</html>