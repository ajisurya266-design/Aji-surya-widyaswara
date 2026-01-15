<?php
$jenis='vip';$lama=6;
if($jenis=='vip'){
    $harga=200000;
}elseif($jenis=='biasa'){
    $harga=150000;
}else{
    $harga=400000;
}
$total=$harga*$lama;
if($lama > 5)$diskon=$total*0.1;
    else $diskon=0;
$bayar=$total-$diskon;
echo "Jenis : $jenis<br>";
echo "Lama inap : $lama hari<br>";
echo "Total : Rp $total<br>";
echo "Diskon : Rp $diskon<br>";
echo "Total Bayar : Rp $bayar<br>";
?>
