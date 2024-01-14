<?php

$stringa = 'Sopra la panca la capra campa,
sotto la panca la capra crepa.

Sopra la panca la capra campa,
sotto la panca la capra crepa.

Sopra la panca la capra campa,
sotto la panca la capra crepa.';

$parolaCensurata = trim($_GET['badword']);
$lunghezzaParolaCensurata = strlen($parolaCensurata);

$stringaCensurata = str_replace($parolaCensurata, "***", $stringa);
$ripetizioneBadword = substr_count($stringa, $parolaCensurata)

?>

<h1> Stringa proposta: </h1>
<p> <?php echo $stringa ?></p>
<p>La mia stringa è lunga: <?php echo strlen(trim($stringa)) ?> caratteri</p>

<h2>Scegli la parola da censurare</h2>

<form action="./index.php" method="GET" > 
    <label for="badword">Parola da censurare:</label>
    <input type="text" id="badword" name="badword">
</form>

<p>Parola da censurare = "<?php echo strtoupper($parolaCensurata) ?>" , Lunga <?php echo $lunghezzaParolaCensurata ?> caratteri, Ripetuta <?php echo $ripetizioneBadword ?> volte. </p>

<h1>Stringa censurata: </h1>
<p><?php echo $stringaCensurata ?></p>
<p>Nuova lunghezza stringa senza parole censurate: <?php echo strlen(trim($stringa)) - $ripetizioneBadword ?></p>



