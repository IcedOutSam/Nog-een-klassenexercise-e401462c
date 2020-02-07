<?php
echo "Wie zitten er aan jouw tafel";
$namen = readline();
$nament = explode(" ", $namen);

foreach ($nament as $key => $value) {
echo  $value . PHP_EOL;
}
  ?>
