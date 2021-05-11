<?php
session_start();
include "connection.php";
?>

<style type="text/css">
<?php
include "style2.css";
?>
</style>

<html>
    <head>
      <meta charset="utf-8">
        <link rel="icon" href="icon.ico" type="image/ico">
        <link rel="stylesheet" type="text/css" href="style2.css">
        <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'></link>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Add | My Birthday Reminder</title>
        <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">
    </head>

<header>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script> 
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script type="text/javascript" src="script.js"></script>
</header>

<body>

  <div class="modify" align="center">
    <div>
      <div>
        <center><h1>Add new Birthdays here</h1></center>
<br>
      </div>
      <div>
        <div>
                    <div>
                        <form action="" name="form1" method="post">
                            <div>
                                <div>
                                    <label for="name">Name : </label>
                                    <input type="text" name="name" required pattern="[A-Za-z ]+" title="This field is required">
                                </div>
<br><br>
                                <div>
                                    <label for="city">City : </label>
                                    <input type="text" name="city" required pattern="[A-Za-z ]+" title="This field is required">
                                </div>
<br><br>
                                <div>                         
                                    <label for="birthday">Date of Birthday : </label>
                                    <input type="date" name="dob" id="birthday" required title="This field is required">
                                </div>
<br><br>
                                <div>
                                    <label>Email : </label>
                                    <input type="text" name="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}" title="This field is required">
                                </div>
<br><br>
                            <div>
                                <button class="button" type="submit" name="submit1">Add Birthday</button>
                            </div>
                        </form>
                    </div>
                </div>
      </div>

    </div>   
    </div>

<?php
if(isset($_POST["submit1"]))
{
    $count=0;
    $sqlemail="select * from birthdays where email='$_POST[email]'";
    $res=mysqli_query($link,$sqlemail) or die(mysqli_error($link));
    $count=mysqli_num_rows($res);

    if ($count>0) {
        echo '<script type="text/javascript">check2();</script>';
    } else {
        $sql="insert into birthdays values
            (NULL, '$_POST[name]', '$_POST[city]', '$_POST[dob]', '$_POST[email]')";
        mysqli_query($link,$sql) or die(mysqli_error($link));

          echo '<script type="text/javascript">check1();</script>';
    }
}
?>
</body>

</html>