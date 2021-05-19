<?php
    include_once 'dbh.inc.php';

    $sql = "SELECT * FROM odpowiedzi;";
    $nowe = $conn->query($sql);
    $ilosc = mysqli_num_rows($nowe);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Egzamin</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
</head>
<body>
<div class="contener">
<div class="blok1">
<a href='dodaj.php'>
<lord-icon
    src="https://cdn.lordicon.com//mecwbjnp.json"
    trigger="loop"
    colors="primary:#121331,secondary:#08a88a"
    style="width:60px;height:60px">
</lord-icon>
</a>
<H1><a href='dodaj.php'>Dodaj pytanie do bazy</a></H1>
</div>
<div class="blok2">
<a href="odp.php">
<lord-icon
    src="https://cdn.lordicon.com//wloilxuq.json"
    trigger="loop"
    colors="primary:#121331,secondary:#08a88a"
    style="width:60px;height:60px">
</lord-icon>
</a>
<h1><a href="odp.php">Odpowiedz na losowe pytanie z bazy</a></h1>
</div>
<div>
<h1>Ilość pytań w bazie: <?php echo $ilosc;
?> </h1>
<h2>Pomóż ją nam powiększyć!</h2>
</div>
<div class="przyklad">
<h1>Przkładowe pytania:</h1>
<h2>Wskaż PRAWDZIWE stwierdzenie dla polecenia: CREATE TABLE IF NOT EXISTS ADRES(ulica VARCHAR(70) CHARACTER SET utf8)</h2>
<p class="zle1">A. Do tabeli nie można wprowadzać ulic zawierających w nazwie polskie znaki</p>
<p class="zle2">B. Klauzula CHARACTER SET utf8 jest obowiązkowa</p>
<p class="dobrze">C. IF NOT EXISTS stosuje się opcjonalnie, aby upewnić się, że brak w bazie danych takiej tabeli</p>
<p class="zle3">D. Rekordem tabeli nie może być 3 MAJA</p>


</div>
</div>

<script src="https://cdn.lordicon.com//libs/frhvbuzj/lord-icon-2.0.2.js"></script>
    
</body>
</html>