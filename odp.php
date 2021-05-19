<?php
include_once 'dbh.inc.php';







$sql = "SELECT * FROM odpowiedzi;";
$nowe = $conn->query($sql);
$ilosc = mysqli_num_rows($nowe);

$los = rand(1, $ilosc);


$pytanie = "SELECT pytanie, odpowiedz1, odpowiedz2, odpowiedz3, odpowiedz4, poprawna, zdjecie FROM odpowiedzi WHERE id='$los'";
$result = $conn->query($pytanie);

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

  <div class="box2"></div>
  <div class="box">
<?php

if ($result->num_rows > 0) {
  
  while($row = $result->fetch_assoc()) {
    $imageURL = 'uploads/'.$row["zdjecie"];
    echo "<div class='blok4'>";
    echo "Pytanie: " . $row["pytanie"]. " <br> A: " . $row["odpowiedz1"]. " <br> B: " . $row["odpowiedz2"]. " <br> C: " . $row["odpowiedz3"]. " <br> D: " . $row["odpowiedz4"]. "<br>";
    echo "</div>";
  
?>

<div class="zdjecie">
<img src="<?php echo $imageURL; ?>" alt="" />
</div>
<?php }

} else {
  echo "Błąd";
}

?>





<form action="s2.php" method="POST">
  <div class='blok5'>
<label for="go">Która Odpowiedź jest poprawna</label>
<input type='radio' name='go' value="A" checked>A
<input type='radio' name='go' value="B">B
<input type='radio' name='go' value="C">C
<input type='radio' name='go' value="D">D
</div>
<?php

$pytanie = "SELECT poprawna FROM odpowiedzi WHERE id='$los'";
$result = $conn->query($pytanie);

if ($result->num_rows > 0) {
  
    while($row = $result->fetch_assoc()) {
      echo "<input type='hidden' name='odpowiedz' value=".$row['poprawna'].">";
    // echo "Poprawna: " . $row["poprawna"]."";
    }
  } else {
    echo "Błąd";
  }
?>
<div class="blok4">
<input type="submit" name='guzik2'>
</div>

</form>

</div>
<?php
$conn->close();

?>



    
</body>
</html>

