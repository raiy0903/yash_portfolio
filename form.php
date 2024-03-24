<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    // Process the data (you can modify this part based on your needs)
    
    // For demonstration purposes, let's just print the data
    echo "Name: $name <br>";
    echo "Email: $email <br>";
    echo "Phone: $phone <br>";
    echo "Message: $message <br>";
} else {
    // Redirect to the form page if accessed directly without submitting the form
    header("Location: index.html");
    exit();
}
?>
