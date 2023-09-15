<?php

$name = $email = $phone = $date = $time = $message = "";
$successMessage = $errorMessage = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $phone = test_input($_POST["phone"]);
    $date = test_input($_POST["date"]);
    $time = test_input($_POST["time"]);
    $message = test_input($_POST["message"]);


    $currentDate = date("Y-m-d");
    if ($date <= $currentDate) {
        $errorMessage = "Please choose a date in the future.";
    } else {

        $successMessage = "Appointment booked successfully!";
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Appointment Booking</title>
</head>
<body>
    <h2>Book an Appointment</h2>

    <?php
    

    if ($successMessage !== "") {
        echo "<p style='color: green;'>$successMessage</p>";
    }

    
    if ($errorMessage !== "") {
        echo "<p style='color: red;'>$errorMessage</p>";
    }
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="name">Name:</label>
        <input type="text" name="name" required><br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" required><br><br>

        <label for="phone">Phone:</label>
        <input type="text" name="phone" required><br><br>

        <label for="date">Date:</label>
        <input type="date" name="date" required><br><br>

        <label for="time">Time:</label>
        <input type="time" name="time" required><br><br>

        <label for="message">Message (optional):</label><br>
        <textarea name="message" rows="4" cols="50"></textarea><br><br>

        <input type="submit" value="Book Appointment">
    </form>
</body>
</html>
