<?php 

$aplikasi[1] = 'gtakademik';
$aplikasi[2] = 'gtFinansi';
$aplikasi[3] = 'gtPerizinan';
$aplikasi[4] = 'eCampuz';
$aplikasi[5] = 'eVoiz';


$index = 1;
while($index <= count($aplikasi)){
    echo $aplikasi[$index]."<br>";
    $index++;
}
?>