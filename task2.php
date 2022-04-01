<?php

$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,'https://jsonmock.hackerrank.com/api/movies/search/?Title=spiderman&page=1');
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
$result=curl_exec($ch);
$r=json_decode($result,false);
//print_r($r->data[9]->Title);
$i=0;
$count=0;
while(1){
    if(empty($r->data[$i]->Title)){
        break;
    }
    else{
        $str[]=$r->data[$i]->Title;
    }
    $count=$i++;
}

//print_r($str);
sort($str);

$clength = $count;
for($x = 0; $x < $clength; $x++) {
    echo $str[$x];
    echo "<br>";
}



curl_close($ch);

?>