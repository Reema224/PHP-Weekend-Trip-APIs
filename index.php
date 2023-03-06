<?php
	// include 'index.html';
header('Access-Control-Allow-Origin:*');
    // Get email and password from request body
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validate email and password
    $emailValid = validateEmail($email);
    $passwordValid = validatePassword($password);
// Define function to validate password
function validatePassword($password) {
    // Check if password contains at least 8 characters, one special character and at least one upper case letter
    $regex = '/^(?=.*[!@#$%^&*(),.?":{}|<>])(?=.*[A-Z]).{8,}$/';
    return preg_match($regex, $password);
}

// Define function to validate email
function validateEmail($email) {
    // Check if email matches the email format
    $regex = '/^[^@\s]+@[^@\s]+\.[^@\s]+$/';
    return preg_match($regex, $email);
}

// Check if request is POST
// Return true if email and password are valid, false otherwise
    $response = array('valid' => ($emailValid && $passwordValid));
    echo json_encode($response);












?>