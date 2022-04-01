
<?php
$str=$_GET['input'];
$len=strlen($str);
$str2=null;
for($i=0;$i<$len;$i++){

        echo $str[$i] . "-" . $i.",";

}

?>





<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task1</title>
</head>
<body>
<title>Your input please</title>
<form action="">
<input type="text" name="input">
<input type="submit" name="submit">
</form>
</body>
</html>