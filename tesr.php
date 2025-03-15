<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $errors = [];

  
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $confirm_password = htmlspecialchars($_POST['confirm_password']);


    if (empty($name) || empty($email) || empty($password) || empty($confirm_password)) {
        $errors['fields'] = "All fields are required.";
    }

    if ($password != $confirm_password) {
        $errors['password'] = "Passwords do not match.";
    }

    if (empty($errors)) {
        echo "<h2>Form Submitted Successfully!</h2>";
        echo "<p><strong>Name:</strong> $name</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Password:</strong> $password</p>";
      
    } else {
      
        echo "<h2>Form Submission Failed!</h2>";
        foreach ($errors as $error) {
            echo "<p>$error</p>";
        }
    }
}
?>
