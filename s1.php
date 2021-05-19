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
    
</body>
</html>



<?php
  include_once 'dbh.inc.php';

$pytanie = $_POST['pytanie'];
$odp1 = $_POST['odp1'];
$odp2 = $_POST['odp2'];  
$odp3 = $_POST['odp3'];  
$odp4 = $_POST['odp4'];  
$poprawnaodp = $_POST['fo'];

$random1 = substr(number_format(time() * rand(),0,'',''),0,10);

$targetDir = "uploads/";
$fileName = $random1 . basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath);


$sql = "INSERT INTO odpowiedzi (pytanie, odpowiedz1, odpowiedz2, odpowiedz3, odpowiedz4, poprawna, zdjecie)
VALUES ('$pytanie', '$odp1', '$odp2', '$odp3', '$odp4', '$poprawnaodp', '$fileName')";

if ($conn->query($sql) === TRUE) {
  echo "<div class='contener napis'>";
  echo "Dziekuje za dodanie pytania!";
  echo "</div>";
} else {
  echo "<div class='contener napis'>";
    echo "Błąd dodawania! Skontaktuj się z administracją!";
    echo "</div>";
}

$conn->close();