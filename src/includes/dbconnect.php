<?php

    try {
        $pdo = new PDO("mysql:host=localhost;dbname=ecommerce", "root" , "");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }




// $sql = 'INSERT INTO users (name, email, password) VALUES (:name, :email, :password)';
//         $query = $pdo->prepare($sql);
//         $query->bindParam('name', $name);
//         $query->bindParam('email', $email);
//         $query->bindParam('password', $password);
// $sql = 'INSERT INTO users (name, surname, email, password) VALUES (?, ?, ?, ?)';
// $query = $pdo->prepare($sql);
// $query->execute([ 'admin', 'admin', 'ardiani@gmail.com', '123456']);

// $stm = $pdo->query('SELECT * FROM users');
// while($row = $stm->fetch()){
//     echo $row[1];
// }

// $stm = $pdo->prepare('UPDATE users SET password=? WHERE email = ?');
// $stm->execute(['54321', 'admin@gmail.com']);
// echo 'done';

// include '../classes/Database.php';

// class dbconnect {
//     private $mysqli;


//     public function __construct(){
//         $db = Database::getInstance();
//         $this->mysqli = $db->getConnection();
//     }
    
//     public function create($table, $data){
//         $sql = "INSERT INTO '".$table."' SET ";
        
//         if(count($data)){
//             $count = 1;
        

//             foreach($data as $column => $value){
//                 if(count($data) > $count){
//                     $sql .= "'".$column."'='".$this->mysqli->real_escape_string($value)."',";
//                 } else {
//                     $sql .= "'".$column."'='".$this->mysqli->real_escape_string($value)."'";
//                 }
//                 $count++;
//             }
//         }
//         return $this->mysqli->query($sql) ? true : $this->mysqli->error;
//     }
// }

// $crud = new dbconnect;
// $crud->create('users', ['name' => 'admin', 'surname'=> 'admin', 'email'=>'ardiani@gmail.com', 'password'=> '123456', 'role'=> 'admin']); 