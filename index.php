<?php

$testo = 'ciao mi chiamo matteo';  
$testoCensurato = str_replace($_GET['censured'],'***', $testo);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
  <div>testo : <?php echo $testo ;?></div>
  <div>lunghezza testo : <?php echo strlen($testo) ;?> caratteri </div>
  <br>
  <div><?php echo $testoCensurato  ?></div>
  <div>lunghezza testo dopo censura : <?php echo strlen($testoCensurato) ;?> caratteri </div>
  
</body>
</html>