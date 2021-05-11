<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$link = mysqli_connect("localhost","root","");
mysqli_select_db($link,"birthday_wishes");
?>