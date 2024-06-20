<?php
    $root = mysqli_connect("localhost", "root", "", "gym_management");
    if(isset($_POST['submit'])){
        $cardNumber = mysqli_real_escape_string($root, $_POST['card_number']);
        $expDate = mysqli_real_escape_string($root, $_POST['expiration_date']);
        $cvv = mysqli_real_escape_string($root, $_POST['cvv']);
        $cardHolder = mysqli_real_escape_string($root, $_POST['card_holder_name']);
        $amount = mysqli_real_escape_string($root, $_POST['amount']);

        $select = mysqli_query($root, "SELECT * FROM deluxe_membership WHERE 
                    card_number = '$cardNumber' AND 
                    expiration_date = '$expDate' AND
                    cvv = '$cvv' AND
                    card_holder	= '$cardHolder' AND
                    amount = '$amount'
                      ") or die('query failed');
        if(mysqli_num_rows($select) > 0){
            $messageError[] = 'User already exist';
        }else{
            mysqli_query($root, "INSERT INTO deluxe_membership
                        (card_number, 
                        expiration_date,
                        cvv,
                        card_holder,
                        amount) VALUES 
                        ('$cardNumber',
                         '$expDate',
                         '$cvv',
                         '$cardHolder',
                         '$amount')") or die('query failed');
           
        // Redirect to home.php with a query parameter
        header("location: home.php?subscriptionExpired2=true");
        exit(); // Make sure to exit after the header redirect
            
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/payment3css.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deluxe Payment</title>
</head>
<body>

<form method="post">
    <!-- Payment Information -->
    <label for="card_number">Card Number:</label>
    <input type="text" id="card_number" name="card_number" pattern="\d{16}" placeholder="1234 5678 9012 3456" required>

    <label for="expiration_date">Expiration Date:</label>
    <input type="text" id="expiration_date" name="expiration_date" pattern="(0[1-9]|1[0-2])\/\d{2}" placeholder="MM/YY" required>

    <label for="cvv">CVV:</label>
    <input type="text" id="cvv" name="cvv" pattern="\d{3}" placeholder="123" required>

    <label for="card_holder_name">Cardholder Name:</label>
    <input type="text" id="card_holder_name" name="card_holder_name" required>

    <!-- Membership Type -->
    <label for="membership_type">Membership Type:</label>
    <select id="membership_type" name="membership_type">
        <option value="deluxe">Deluxe</option>
    </select>

    <!-- Payment Amount -->
    <label for="amount">Amount:</label>
    <input type="text" id="amount" name="amount" placeholder="Enter amount" required>

    <input type="submit" class="submit-btn" onclick="authenticate()" name="submit"></input>
</form>

</body>
</html>