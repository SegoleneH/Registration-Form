
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $first_name = $_POST["first-name"];
    $last_name = $_POST["last-name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Display the submitted data
    echo "Name: " . $first_name . $last_name;
    echo "Email: " . $email . "<br>";
    echo "Message: " . $message . "<br>";
}
?>