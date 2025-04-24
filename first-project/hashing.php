<?php

// Hashing for secure storage of sensitive data
$data = "hello world";
$salt = bin2hex(random_bytes(16)); // Generate a random salt
$pepper = "ASecretPepperString";
// Salt and pepper are stored securely and not hardcoded in production

$dataToHash = $data . $salt . $pepper;
$hash = hash('sha256', $dataToHash);

// If we have to verify whether the user input matches the hash, we repeat the process by taking new input with the same salt and pepper and compare the hashes.



// Hashing for password storage
$password = "my_secure_password";
$options = [
    'cost' => 12, // Cost factor for the algorithm
    'salt' => $salt // Use the same salt as above, if not provided, PHP will generate a random one
];
$hashedPassword = password_hash($password, PASSWORD_BCRYPT, $options);

// To verify the password, we can use password_verify function
$passwordInput = "my_secure_password"; // User input for password verification
$isPasswordValid = password_verify($passwordInput, $hashedPassword); // Verify the password
