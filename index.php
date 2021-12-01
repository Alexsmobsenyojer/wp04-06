<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
error_reporting(E_ERROR | E_PARSE);

require_once "vendor/autoload.php";
$animal[0] = new Croc("Pepa", true, 69);
$animal[1] = new Croc("FlatFuck", true, 75);
$animal[2] = new Mungus("Purple", true, true);
$animal[3] = new Mungus("Mushie", false, false);
$animal[4]= new CapuchinMonke("Spiderman", true, true);
$animal[5] = new CapuchinMonke("Harambe", false, false);
$animal[6]= new CapuchinMonke("Frank", true, true);
for ($i=0; $i < count($animal); $i++) { 
 echo "Jméno:" .  $animal[$i]->getName()."Nohy ANO/NE:". $animal[$i]->getLegs()."  " ;
}
?>
</body>
</html>