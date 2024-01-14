<?php

$stringa = 'Sopra la panca la capra campa,
sotto la panca la capra crepa.

Sopra la panca la capra campa,
sotto la panca la capra crepa.

Sopra la panca la capra campa,
sotto la panca la capra crepa.';

$parolaCensurata = $_GET['badword'];

?>

<h1> Stringa proposta: </h1>
<p> <?php echo $stringa ?></p>
<p>La mia stringa è lunga: <?php echo strlen(trim($stringa)) ?> caratteri</p>

<h2>Scegli la parola da censurare</h2>

<form action="./index.php" method="GET" > 
    <label for="badword">Parola da censurare:</label>
    <input type="text" id="badword" name="badword">
</form>

<p>parola da censurare = <?php echo $parolaCensurata ?></p>


