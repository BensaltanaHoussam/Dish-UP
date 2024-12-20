<?php
require('./db_connection.php'); 

if ($_SERVER["REQUEST_METHOD"] == "GET") {
 
    $email = $_GET['email'];
    $password = $_GET['password'];

    
    $sql = "SELECT * FROM users WHERE email = ? AND password = ?";

    if ($stmt = $conn->prepare($sql)) {
        // Bind the email parameter to the query
        $stmt->bind_param("ss", $email , $password);

        // Execute the statement
        $stmt->execute();

        // Store the result
        $result = $stmt->get_result();

        // Check if the user exists
        if ($result->num_rows > 0) {
            // Fetch the result (user data)
            $row = $result->fetch_assoc();

            if ($password == $row['password']) {

                if($row['id_roles_fk']== 1){

                    header("Location: ./admin_pages/index.php");

                }else{
                    header("Location: ./user_pages/index.php");
                    
                }
               
            
            } else {
                
                echo "<script>alert('Invalid email or password');</script>";
            }
        } else {
          
            header("Location: login.php");
        }

        $stmt->close();
    } else {
     
        echo "<script>alert('Error processing request');</script>";
    }
}
?>