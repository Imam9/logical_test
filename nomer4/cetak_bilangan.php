<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak bilangan</title>
</head>
<body>
    <h3>Masukkan Bilangan yang ingin dicetak</h3>
    <form action="cetak_bilangan.php" method="post">
        <input type="number" name ="bilangan">
        <input type="submit" value ="cetak" name ="cetak">
    </form>
    <br>
    <br>
</body>
</html>



<?php


if(isset($_POST['cetak'])){
    $cetak = $_POST['bilangan'];
    for ($i=1 ; $i <= $cetak ; $i++) { 
        if($i % 3 == 0 && $i % 5 == 0){
             echo " FooBar";
        }else if($i % 3 == 0) {
             echo " Foo";
        }else if($i % 5 == 0) {
             echo " Bar";
        }else{
            echo " $i";
        }
     }
}


?>