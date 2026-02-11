<?php
$arrayBuah[0] = 'apple';
$arrayBuah[1] = 'orange';
$arrayBuah[2] = 'grape';
$arrayBuah[3] = 'durian';
$arrayBuah[4] = 'banana';
$arrayBuah[5] = 'water melon';

echo "<select>";
$jmlData = count($arrayBuah);
for ($i=0; $i < $jmlData; $i++) { 
    echo "<option>". $arrayBuah[$i]."<br>";
}
echo"</select>";

$arrayAvg = [
    [
        "name" => 'Iron man',
        "age" => 45,
        "color" => 'red',
    ],
        [
        "name" => 'hulk',
        "age" => 100,
        "color" => 'green',
    ],
        [
        "name" => 'capt america',
        "age" => 90,
        "color" => 'red x blue',
    ],
];

foreach ($arrayAvg as $data) {
    echo "name :" .$data['name']. "<br>";
    echo "age :" .$data['age']. "<br>";
    echo "color :" .$data['color']. "<br>";
}
?>