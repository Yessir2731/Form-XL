<?php
// Plain text password
$password = 'admin123';

// Hash the password
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// Output the hashed password to see what it looks like
echo $hashedPassword;
?>
