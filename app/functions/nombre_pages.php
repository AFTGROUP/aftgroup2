
<?php

function nombre_pages($nombreDePages){

$nb_price = 0;
if ($nombreDePages >= 1 && $nombreDePages <= 5) {
 $nb_price = 0;
} elseif ($nombreDePages == 6) {
 $nb_price = 10000;
} elseif ($nombreDePages == 7) {
 $nb_price = 20000;
} elseif ($nombreDePages == 8) {
 $nb_price = 30000;
} elseif ($nombreDePages == 9) {
 $nb_price = 40000;
}
elseif ($nombreDePages == 10) {
 $nb_price = 50000;
}
else {
 $nb_price = 60000;
}

return $nb_price;
}
