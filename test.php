<?php

require('./db_connection.php');


if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    $username = $_POST['username'];
    $phoneNumber = $_POST['phoneNumber'] ;
    $address = $_POST['address'] ;
    $email = $_POST['email'] ;
    $password = $_POST['password'] ;
    $sql = "INSERT INTO users (userName, email , password , phoneNumber, Adress, id_roles_fk) 
            VALUES ('$username', '$email', '$password', '$phoneNumber', '$address',2)"; 
    if ($conn->query($sql) === TRUE) {
        header("Location: login.php");
        exit;
    } else {
        echo "Erreur : " . $conn->error;
    }

}

?>