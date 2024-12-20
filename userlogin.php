<?php
require('./db_connection.php'); 

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    echo "hhhhhhhhhhhhhhh 3iyan";

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
               
                header("Location: index.php");
                exit;
            } else {
                
                echo "<script>alert('Invalid email or password');</script>";
            }
        }

        // Close the statement
        $stmt->close();
    } else {
        // Error preparing the query
        echo "<script>alert('Error processing request');</script>";
    }
}
?>