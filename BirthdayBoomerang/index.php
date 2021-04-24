<?php
  $con=mysqli_connect('localhost','root','', 'birthday_wishes');
  $query="select name, abs(year(current_date)-year(dob)) as age from friends where month(current_date)=month(dob) AND day(current_date)=day(dob)";
  $connvar=mysqli_query($con, $query);
  $count=mysqli_num_rows($connvar);
?>
<?php
$bgimage = "bg.jpg";
?>
<html>
    <head>
    	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<style type="text/css">
    		body {
    			background-image: url('<?php echo $bgimage;?>'); 
    			background-size: cover; 
    			background-repeat: no-repeat; 
    			background-position:fixed 
    		}
    	</style> 
        <title>Birthday Boomerang</title>
        <link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">
    </head>

	<body align="center" style="margin-top:60px; font-size:24px; font-family: 'Noto Sans JP', sans-serif;">
        <h1 align ="center" style="color: #03203C;">MY BIRTHDAY BOOMERANG</h1>
        <p style="color: #6A1B4D; font-size:26px;"><?php echo $count." Birthdays Today ";?></p>
        <table border="1" align="center" cellpadding="10" cellspacing="0">
        <thead bgcolor="deeppink">
        <tr>
        <td>Today's Birthday</td>
        <td>Age </td>
        </tr>
        </thead>
        <tbody>
        <?php
        while($row=mysqli_fetch_array($connvar)):
        ?>
        <tr>
        	<td><?php echo $row['name']; ?></td>
        	<td><?php echo "<b>" .$row['age']."</b>". " years old"; ?></td>
        </tr>
        <?php endwhile; ?>
        </tbody>
        </table>
	</body>
</html>