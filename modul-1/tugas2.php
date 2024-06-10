<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi Nilai</title>
</head>
<body>
    <?php
    $hasil = "";    
if(isset($_POST['Konversi'])){
    $nilai = $_POST ['nilai'];
    if($nilai > 90 ){
        $hasil = "A";
    }elseif ($nilai > 70) {
        $hasil = "B";
    }elseif ($nilai > 50){
        $hasil = "C";
    }elseif($nilai > 30){
        $hasil = "D";   
    }
     else {
        $hasil = "E";
    }
}

    ?>


    <form action="" method="post">
        <input type="text" name="nilai">
        <input type="submit" name="Konversi" value="Konversi">
        <br>
 
        <input type="text" id="hasil" value="<?php echo $hasil ?>">
    </form>
</body>
</html>