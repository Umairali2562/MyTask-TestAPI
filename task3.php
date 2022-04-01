<?php
if((isset($_POST['submit']))&&(isset($_POST['date']))) {
$date=$_POST['date'];
$page=$_POST['page'];
    echo "Page Number ".$page.":";
    echo "<br>";
    echo getstockData($date,$page);
    echo "<br>";
}
function getstockData($date,$page)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://jsonmock.hackerrank.com/api/stocks?date=$date&page=$page");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    $r = json_decode($result, false);
    $i = 0;
    $count = 0;
    if (empty($r->data[$i]->date)) {
        echo "No Data!!";
    } else {
        while (1) {
            if (empty($r->data[$i]->date)) {
                break;
            } else {
                //echo $date = $r->data[$i]->date;
                // echo "<br>";
                echo $open = "Open: " . $r->data[$i]->open;
                echo "<br>";
                echo $high = "High: " . $r->data[$i]->high;
                echo "<br>";
                echo $low = "Low: " . $r->data[$i]->low;
                echo "<br>";
                echo $close = "Close: " . $r->data[$i]->close;
            }
            $count = $i++;
        }
        /*for($i=0;$i<$count;$i++) {
            if ($count == null) {
                echo "No data.!!";

            } else {
                echo $date[$i];
                echo "<br>";
                echo $open[$i];
                echo "<br>";
                echo $high[$i];
                echo "<br>";
                echo $low[$i];
                echo "<br>";
                echo $close[$i];
                echo "<br>";
                curl_close($ch);
            }
        }*/
        curl_close($ch);
    }
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task 3</title>
</head>
<body>
<form action="" method="post">
    <b>Enter the Date :</b>
    <br>
    <input type="text" name="date">
    <br>
    <b>Enter the Page Number :</b>
    <br>
    <input type="text" name="page">
    <br>
    <input type="submit" name="submit">
</form>

</body>
</html>