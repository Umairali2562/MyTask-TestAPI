<?php

  if((isset($_POST['submit']))&&(isset($_POST['page']))&&(isset($_POST['name']))) {
     $name=$_POST['name'];
     $page=$_POST['page'];
    echo "Page Number ".$page.":";
    echo "<br>";
    echo getMovieTitles($name,$page);

  }

function getMovieTitles($name,$page)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://jsonmock.hackerrank.com/api/movies/search/?Title=$name&page=$page");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    $r = json_decode($result, false);


//print_r($r->data[9]->Title);
        $i = 0;
        $count = 0;
        while (1) {
            if (empty($r->data[$i]->Title)) {
                break;
            } else {
                $str[] = $r->data[$i]->Title;
            }
            $count = $i++;
        }
        if($count==null){
            echo "No data.!!";

        }
        else {
            sort($str);

            $clength = $count;

            for ($x = 0; $x < $clength; $x++) {
                echo $str[$x];
                echo "<br>";
            }

            curl_close($ch);
        }
}//end of the function
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task 2</title>
</head>
<body>

<form action="" method="POST">
<b>Enter Page Name: </b>
<input type="text" name="name">
<br>
<b>Enter Page Number </b>
<input type="text" name="page">
<br>
<input type="submit" name="submit">
<br>
</form>

</body>
</html>
