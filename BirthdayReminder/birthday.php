<?php
session_start();
include "connection.php";
?>

<?php
  $query="select name,city,email, abs(year(current_date)-year(dob)) as age from birthdays where month(current_date)=month(dob) AND day(current_date)=day(dob)";
  $connvar=mysqli_query($link, $query);
  $count=mysqli_num_rows($connvar);
?>
<?php
$bgimage = "bg1.jpg";
?>
<html>
    <head>
    	<meta charset="utf-8">
        <link rel="icon" href="icon.ico" type="image/ico">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<style type="text/css">
    		body {
    			background-image: url('<?php echo $bgimage;?>'); 
    			background-size: cover; 
    			background-repeat: no-repeat; 
    			background-position:fixed 
    		}
    	</style> 
        <title>My Birthday Reminder</title>
        <link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">
    </head>

<header>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script> 
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script type="text/javascript" src="script.js"></script>
</header>

	<body align="center" style="margin-top:60px; font-size:24px; font-family: 'Noto Sans JP', sans-serif;">
        <h1 align ="center" style="color: #03203C;">My Birthday Reminder</h1>
        <p style="color: #6A1B4D; font-size:26px;"><?php echo $count." Birthdays Today ";?></p>
        <table border="1" align="center" cellpadding="10" cellspacing="0">
        <thead bgcolor="#FF6666">
        <tr>
        <td>Birthday Buddy</td>
        <td>Lives in </td>
        <td>Age </td>
        <td>Email </td>
        <td>Task </td>
        </tr>
        </thead>
        <tbody>
        <?php
        while($row=mysqli_fetch_array($connvar)):
        ?>
        <?php
        $body="Wish you a Happy Birthday \n \t\t- From Gudi Varaprasad";
        ?>
        <tr>
        	<td><?php echo $row['name']; ?></td>
            <td><?php echo $row['city']; ?></td>
            <td><?php echo "<b>" .$row['age']."</b>". " years old"; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td>
                <?php
                echo "<form method='post'><input name='submit1' type='submit' value='Send Wishes' target='_blank'></form>";
                ?>
<?php
if(isset($_POST["submit1"]))
{
    $email=$row['email'];
    $subject = 'HAPPY BIRTHDAY';
    $body="\n Wish you a very Happy Birthday \n\n \t\t- From Gudi Varaprasad.";
    $headers = "From: gudi.varaprasad@gmail.com";
    //mail($email, $subject, $body, $headers);

    if (mail($email, $subject, $body, $headers)) {
        echo '<script type="text/javascript">checkmail1();</script>';
    } else {
        echo '<script type="text/javascript">checkmail2();</script>';
    }
}
?>
            </td>
        </tr>
        <?php endwhile; ?>
        </tbody>
        </table>
	</body>
</html>