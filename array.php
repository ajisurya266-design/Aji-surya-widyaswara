<?php
$arrayBuah[0] = 'apple' ;
$arrayBuah[1] = 'orang' ;
$arrayBuah[2] = 'grape' ;
$arrayBuah[3] = 'durian' ;
$arrayBuah[4] = 'banana' ;
$arrayBuah[5] = 'watermelon' ;

$jmlData = count($arrayBuah);
echo "<select>";
for ($i = 0; $i < $jmlData; $i++) {
    echo "<option>" .$arrayBuah[$i]."</option>";
}
echo "</select>";
?>