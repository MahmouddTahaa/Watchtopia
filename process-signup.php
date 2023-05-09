<?php

// -NAME VALIDATION- checking if the name input field is empty
if (empty($_POST["name"])) {
  die("Name is Required");
}

// -EMAIL VALIDATION- 
if (! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
  die("Please Enter a Valid Email Address");
}

// -PASSWORD VALIDATION- checking if the password length is at least 8 characters long
if (strlen($_POST["password"]) < 8) {
  die("Password must be at least 8 Characters");
}
// checking if the password has at one letter
if (! preg_match("/[a-z]/i", $_POST["password"])) {
  die("Password must contain One Letter");
}
// checking if the password has at one digit
if (! preg_match("/[0-9]/i", $_POST["password"])) {
  die("Password must contain One Number");
}
// checking if the 2 password input fields are the same 
if ($_POST["password"] != $_POST["password_confirmation"]) {
  die("Passwords must match");
}

// -HASHING (encrypting) the PASSWORD-
$password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);


// -CONNECTING TO THE DATABASE-
$mysqli = require __DIR__ . "/database.php";

// SQL statement to be excuted
$sql = "INSERT INTO user (name, email, password_hash)
        VALUES (?, ?, ?)";

// -INITIALIZING THE CONNECTION-
$stmt = $mysqli->stmt_init();

// -CHECKING IF THERE'S AN ERROR IN THE SQL SYNTAX-
if (! $stmt->prepare($sql)) {
    die("SQL error: " . $mysqli->error);
}

// -BINDING THE INPUT VALUES TO THE PLACEHOLDERS IN THE SQL STATEMENT-
$stmt->bind_param("sss",
                  $_POST["name"],
                  $_POST["email"],
                  $password_hash);

// -EXCUTING THE SQL STATEMENT-
if ($stmt->execute()) {
  header("Location: ./index.php");
  exit;
}

// if there's an error, and its number is 1062 then the entered email is already in the database (duplicate entry)
else {    
  if ($mysqli->errno === 1062) {
      die("Email is already taken");
  } else {
      die($mysqli->error . " " . $mysqli->errno);
  }
}

?>