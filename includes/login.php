<?php
session_start();  // Start the session

// Database connection
$conn = new mysqli('localhost', 'root', '', 'ecommerce');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capture and sanitize input
    $email = $conn->real_escape_string($_POST['email']);
    $password = $_POST['password'];  // Assume the password is already hashed at registration

    // Prepare SQL statement to prevent SQL injection
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        
        // Verify the password
        if (password_verify($password, $row['password'])) {
            // Store user information in session
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['user_email'] = $row['email'];  // Optionally store more user info
            
            // Redirect to the homepage or another page
            header("Location: ../index.php");
            exit();
        } else {
            echo "Invalid password!";
        }
    } else {
        echo "No user found with this email!";
    }
    
    // Close statement
    $stmt->close();
}

// Close the database connection
$conn->close();
?>
