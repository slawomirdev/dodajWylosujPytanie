<?php
    include_once 'dbh.inc.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Egzamin</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
<div class="blok">
<form action="s1.php" method="POST" enctype="multipart/form-data">
<label for="pytanie">Zadaj pytanie</label>
<input type="text" name="pytanie" required>
<label for="odp1">Odpowiedz A</label>
<input type="text" name="odp1" required>
<label for="odp2">Odpowiedz B</label>
<input type="text" name="odp2" required>
<label for="odp3">Odpowiedz C</label>
<input type="text" name="odp3" required>
<label for="odp4">Odpowiedz D</label>
<input type="text" name="odp4" required>
<label for="fo">Która Odpowiedź jest poprawna?</label>
<div class="check">
<input type='radio' name='fo' value="A" checked>A
<input type='radio' name='fo' value="B">B
<input type='radio' name='fo' value="C">C
<input type='radio' name='fo' value="D">D
</div>
<input type="file" name='file'>
<input type="submit" name='submit'>
</div>

</form>






    
</body>
</html>