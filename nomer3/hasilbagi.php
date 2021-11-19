<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak bilangan</title>
</head>
<body>
    <h3>Masukkan Bilangan yang ingin dibagi</h3>
    <form action="hasilbagi.php" method="post">
        <input type="number" name ="bilangan">
        <br>
        <br>
        <input type="number" name ="pembagi">
        <br>
        <br>
        <input type="submit" value ="cetak" name ="cetak">
    </form>
    <br>
    <br>
</body>
</html>



<?php 
if(isset($_POST['cetak'])){
    $bilangan = $_POST['bilangan'];
    $hasil = 0;
    $bagi = $_POST['pembagi'];
    
    $angka = 1;
    
    if($bilangan >= $bagi){
        for ($i=$bilangan; $i >= $bagi; $i--) { 
            $hasil = $bilangan - $bagi;
            $bilangan = $hasil;
            
            $data[$angka] = $bilangan;
            
            if($bilangan <= 0 ){
                break;
            }
            $angka+=1;
        }
    
        echo "hasilnya adalah ".count($data);
    }else{
        echo "bilangan yang di bagi harus lebih besar dengan bilangan pembagi";
    }
}






?>