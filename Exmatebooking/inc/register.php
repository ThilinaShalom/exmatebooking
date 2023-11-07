<?php
// Retrieve form data
$name = isset($_POST['name']) ? $_POST['name'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$contactNumber = isset($_POST['contactNumber']) ? $_POST['contactNumber'] : '';
$address = isset($_POST['address']) ? $_POST['address'] : '';
$pincode = isset($_POST['pincode']) ? $_POST['pincode'] : '';
$dateOfBirth = isset($_POST['dateOfBirth']) ? $_POST['dateOfBirth'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';

// Validate and sanitize the data as per your requirements

// Connect to the database
$servername = "localhost";
$username = "shalom";
$password = "123";
$dbname = "users";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and execute the SQL statement
$stmt = $conn->prepare("INSERT INTO register (name, email, contact_number, address, pincode, date_of_birth, password) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssiss", $name, $email, $contactNumber, $address, $pincode, $dateOfBirth, $password);
$stmt->execute();

// Check if the insertion was successful
if ($stmt->affected_rows > 0) {
    // Registration successful
    echo "Registration successful. You can now login.";
} else {
    // Registration failed
    echo "Registration failed. Please try again.";
}

session_start();

// Retrieve form data and other code...

// Check if the insertion was successful
if ($stmt->affected_rows > 0) {
    // Registration successful
    $_SESSION['registration_success'] = true;
} else {
    // Registration failed
    $_SESSION['registration_success'] = false;
}

$stmt->close();
$conn->close();

// Redirect to the home page after 30 seconds
header("refresh:2;url=rooms.php");
exit;


$stmt->close();
$conn->close();
?>
