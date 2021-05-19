
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<script src="https://cdn.lordicon.com//libs/frhvbuzj/lord-icon-2.0.2.js"></script>

</body>
</html>

<?php
include_once 'dbh.inc.php';



$odpteraz = $_POST['go'];
$odpzbazy = $_POST['odpowiedz'];

if($odpteraz == $odpzbazy){
    echo "<div class='contener napis'>";
    echo "Odpowiedź poprawna!";
    echo "<lord-icon
    src='https://cdn.lordicon.com//lupuorrc.json'
    trigger='loop'
    colors='primary:#121331,secondary:#08a88a'
    style='width:250px;height:250px'>
</lord-icon>";
    echo "</div>";
} else {
    echo "<div class='contener napis n1'>";
    echo "Odpowiedz '$odpteraz' jest błedna!";
    echo "</div>";
    echo "<br>";
    echo "<div class='contener napis n2'>";
    echo "Poprawna odpowiedź to '$odpzbazy'.";
    echo "</div>";
    echo "<div class='contener napis'>";
    echo "<lord-icon
    src='https://cdn.lordicon.com//dzllstvg.json'
    trigger='loop'
    colors='primary:#121331,secondary:#08a88a'
    style='width:250px;height:250px'>
</lord-icon>";
echo "</div>";
}