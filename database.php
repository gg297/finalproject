<?php
ini_set('display_errors','On');
error_reporting(E_ALL);
$servername = "sql2.njit.edu";
$username = "gg297";
$password = "IKgzb60IH";

$fname = $_POST['fname']; 
$lname = $_POST['lname'];
$email = $_POST['email'];
$phone = $_POST['tel'];
$bday = $_POST['bday'];
$gender = $_POST['gender'];
$pass = $_POST['psw'];
$pass1=password_hash("$pass", PASSWORD_BCRYPT);
try {
    $conn= new PDO("mysql:host=$servername;dbname=anm56", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
    echo "<br>"; 
    $sql= $conn->prepare("INSERT INTO accounts (fname, lname, email, phone, birthday, gender, password) VALUES ('$fname', '$lname', '$email', 
                                                 '$phone','$bday', '$gender', '$pass1')"); 
   $sql->execute();
  // $results=$sql->fetchAll();

    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>