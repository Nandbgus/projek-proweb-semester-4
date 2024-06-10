<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator</title>
</head>
<body>
<?php
if(isset($_POST['operator'])) {
    $bil1 = $_POST['bil1'];
    $bil2 = $_POST['bil2'];
    $operator = $_POST['operator'];
    $nilai = "";

    switch ($operator) {
        case 'plus' :
            $nilai = $bil1 + $bil2;
            break;
        case 'min' :
            $nilai = $bil1 - $bil2;
            break;
        case 'multiple' :
            $nilai = $bil1 * $bil2;
            break;
        case 'divide' :
            $nilai = $bil1 / $bil2;
            break;
    } 
}
?>
<form action="" method="post">
    <input type="text" name="bil1" placeholder="Masukkan bilangan 1">
    <input type="text" name="bil2" placeholder="Masukkan bilangan 2">
    =
    <input type="text" value="<?php echo $nilai ?>">
    
    <br>
    <input type="submit" name="operator" value="plus">
    <input type="submit" name="operator" value="min">
    <input type="submit" name="operator" value="multiple">
    <input type="submit" name="operator" value="divide">
</form>






</body>
</html>