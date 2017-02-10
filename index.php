<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>

<head>
  <meta http-equiv="content-type" content="text/html;charset=utf-8">
  <title>Php Calendar</title>
  <link rel="stylesheet" type="text/css" media="screen" href="calendar.css">
</head>

<body>

<?php
    include("calendar.php");
	$calendar = new Calendar();
    echo $calendar->show();
?>

</body>

</html>
