<?php
    include 'config.php';
    session_start();


$check = mysqli_query($root, "SHOW DATABASES LIKE 'gym_management'");
if (mysqli_num_rows($check) == 0) {
    mysqli_query($root, "CREATE DATABASE IF NOT EXISTS gym_management");
}
mysqli_select_db($root, "gym_management");

$sql = "CREATE TABLE IF NOT EXISTS signUp_user (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL
)";

// Execute the query to create the table
if (mysqli_query($root, $sql)) {
    echo "";
} else {
    echo "Error creating table: " . mysqli_error($root) . "\n";
}


$sqlMembership = "CREATE TABLE IF NOT EXISTS basic_membership (
    id INT AUTO_INCREMENT PRIMARY KEY,
    card_number VARCHAR(16) NOT NULL,
    expiration_date VARCHAR(5) NOT NULL,
    cvv VARCHAR(3) NOT NULL,
    card_holder VARCHAR(255) NOT NULL,
    amount INT(100) NOT NULL
)";

if (mysqli_query($root, $sqlMembership)) {
    echo "";
} else {
    echo "Error creating table basic_membership: " . mysqli_error($root) . "\n";
}

$sqlMembershipPremium = "CREATE TABLE IF NOT EXISTS premium_membership (
    id INT AUTO_INCREMENT PRIMARY KEY,
    card_number VARCHAR(16) NOT NULL,
    expiration_date VARCHAR(5) NOT NULL,
    cvv VARCHAR(3) NOT NULL,
    card_holder VARCHAR(255) NOT NULL,
    amount INT(100) NOT NULL
)";

if (mysqli_query($root, $sqlMembershipPremium)) {
    echo "";
} else {
    echo "Error creating table basic_membership: " . mysqli_error($root) . "\n";
}

$sqlMembershipDeluxe = "CREATE TABLE IF NOT EXISTS deluxe_membership (
    id INT AUTO_INCREMENT PRIMARY KEY,
    card_number VARCHAR(16) NOT NULL,
    expiration_date VARCHAR(5) NOT NULL,
    cvv VARCHAR(3) NOT NULL,
    card_holder VARCHAR(255) NOT NULL,
    amount INT(100) NOT NULL
)";

if (mysqli_query($root, $sqlMembershipDeluxe)) {
    echo "";
} else {
    echo "Error creating table basic_membership: " . mysqli_error($root) . "\n";
}





if (isset($_POST['signUp'])) {
    $newUsername = mysqli_real_escape_string($root, $_POST['newUsername']);
    $newpassword = mysqli_real_escape_string($root, $_POST['newPassword']);

    $select = mysqli_query($root, "SELECT * FROM signUp_user WHERE username = '$newUsername' AND password = '$newpassword' ") or die ('query failed');

    if (mysqli_num_rows($select) > 0) {
        echo '<script>alert("User already exists");</script>';
    } else {
        mysqli_query($root, "INSERT INTO signUp_user (username, password) VALUES ('$newUsername', '$newpassword')") or die('query failed');
        echo '<script>alert("Thank you for filling up proceed to Sign in!");</script>';
    }
}

if (isset($_POST['signIn'])) {
    $username = mysqli_real_escape_string($root, $_POST['username']);
    $password = mysqli_real_escape_string($root, $_POST['password']);

    $select = mysqli_query($root, "SELECT * FROM signUp_user WHERE username ='$username' AND password= '$password' ") or die ('query failed'); 
    if (mysqli_num_rows($select) > 0){
        $row = mysqli_fetch_assoc($select);
        $_SESSION["user_id"] = $row['id'];
        header("location: home.php");
        exit();
    } else {
        echo '<script>alert("Incorrect Try again");</script>';
    }
}

// Close the connection
mysqli_close($root);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/design.css">
    <title>Registration Form</title>
</head>
<body>
    <div class="login-wrapper">
        <div class="form-box">
        <div class="button-box">
            <div id="btn"></div>
            <button type="button" class="toggle-btn" onclick="login()">Sign In</button>
            <button type="button" class="toggle-btn" onclick="signup()">Sign Up</button>
        </div>
        <form id="login" class="input-group" method="post">
            <input type="text" id="username" name="username" class="input-field" placeholder="Enter Username" required>
            <input type="password" id="password" name="password" class="input-field" placeholder="Enter Password" required>
            <input type="checkbox" class="check-box"><span>Remember Password</span>
            <button type="submit" class="submit-btn" name="signIn">Log in</button>
        </form>
        <form id="signup" class="input-group" method="post">
            <input type="text" class="input-field" placeholder="Username" required name="newUsername">
            <input type="email" class="input-field" placeholder="Email" required >
            <input type="text" class="input-field" placeholder="Password" required name="newPassword">
            <input type="checkbox" class="check-box"><span>I agree to the terms & conditions</span>
            <button type="submit" class="submit-btn" name="signUp">Sign Up</button>
        </form>
    </div>
</div>


<script>
    var x = document.getElementById("login");
    var y = document.getElementById("signup");
    var z = document.getElementById("btn");

    function signup(){
        x.style.left = "-400px";
        y.style.left = "50px";
        z.style.left = "110px";
    }
    function login(){
        x.style.left = "50px";
        y.style.left = "450px";
        z.style.left = "0px";
    }
    function button(){
        x.style.left = "-400px";
        y.style.left = "50px";
        z.style.left = "110px";
    }
</script>
</body>
</html>