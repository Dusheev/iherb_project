<?php
session_start();
require "includes/common.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Fetch the user_id from the session or wherever it's stored
    $user_id = $_SESSION['user_id'];

    // Validate and sanitize input
    $card_number = mysqli_real_escape_string($con, $_POST['card_number']);
    $expiry_date = mysqli_real_escape_string($con, $_POST['expiry_date']);
    $cvv = mysqli_real_escape_string($con, $_POST['cvv']);
    

    // Insert data into the 'payment' table using prepared statement
    // Insert data into the 'payment' table using prepared statement
    $query = "INSERT INTO payment(`user_id`, `card_number`, `expiry_date`, `cvv`) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_prepare($con, $query);

    // Bind parameters
    mysqli_stmt_bind_param($stmt, "isss", $user_id, $card_number, $expiry_date, $cvv);


    mysqli_stmt_close($stmt);

}

mysqli_close($con);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>iHERB</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    <link href='https://fonts.googleapis.com/css?family=Delius Swash Caps' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Andika' rel='stylesheet'>
    <link rel="stylesheet" href="style11.css">
</head>
<body>
<!--header -->
 <?php
include 'includes/header_menu.php';
include 'includes/check-if-added.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Payment Method</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        h2 {
            color: #333;
        }

        label {
            display: block;
            margin: 10px 0 5px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <h2>Add Payment Method</h2>

    <label for="card_number">Card Number:</label>
    <input type="text" name="card_number" required>

    <label for="expiry_date">Expiry Date:</label>
    <input type="text" name="expiry_date" placeholder="MM/YYYY" required>

    <label for="cvv">CVV:</label>
    <input type="text" name="cvv" required>

    <input type="submit" value="Add Payment Method">
</form>

</body>
</html>

