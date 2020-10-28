<?php

$insert = false;
if(isset($_POST['name']))
{
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";
    // $databaseName = "";

    // Create a database connection
    $connection = mysqli_connect($server, $username, $password); // $databaseName

    // Check for connection success
    if(!$connection)
    {
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connecting to the database";

    // Collect post variables
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $other = $_POST['other'];

    // `database name`.`table name`
    $sql = "INSERT INTO `photography`.`photography` (`name`, `age`, `gender`, `email`, `phone`, `other`, `date`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$other', current_timestamp());";
    // echo $sql;

    // Execute the query
    if($connection->query($sql) == true)
    {
        // echo "Successfully inserted";

        // Flag for successful insertion
        $insert = true;
    }
    else
    {
        echo "ERROR: $sql <br> $connection->error";
    }

    // Close the database connection
    $connection->close();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Silent Eyes Photography Contest</title>
    <link href="logo.png" rel="icon" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Philosopher:ital@1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <img class="bg" src="bg.jpg" alt="Silent Eyes">
    <div class="container">
        <h1>Welcome to Silent Eyes Photography Contest</h1>
            <br>
        <p>Enter your details and submit this form to confirm your participation in the contest.</p>
            <br>

    <?php

        if($insert == true){
        echo "<p class='submitMsg'><b>Thanks for submitting your form. We are happy to see your submission. We'll contact you if you're in.</b></p>";
        }
    ?>
            <br>
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your Age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <input type="phone" name="phone" id="phone" placeholder="Enter your whatsapp number">
            <textarea name="other" id="other" cols="30" rows="10" placeholder="Describe about yourself"></textarea>
            <button class="btn">Let's Capture</button>
        </form>
    </div>

    <script type="text/javascript" src="index.js"></script>
    
</body>
</html>
