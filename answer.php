<!DOCTYPE html>
<html>
<head>
	<title>تایید ثبت نظر</title>
</head>
<body style="background: green; direction: rtl;">
<?php 


$fname=$_POST["fname"];
$lname=$_POST["lname"];
$mail=$_POST["mail"];
$offers=$_POST["offer"];
$file=fopen("offers.txt", "w");
fwrite($file,">>>");
fwrite($file,$fname);
fwrite($file," ");
fwrite($file,$lname);
fwrite($file," >>> Email : ");
fwrite($file,$mail);
fwrite($file," >>> offers : ");
fwrite($file,$offers);
fwrite($file,'\n');
fclose($file);
 ?>
 <a href="kargah.html" style="font-family: none;">بازگشت به صفحه اصلی</a>
</body>
</html>