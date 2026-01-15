<?php
$suhu = -200;
if($suhu>30 && $suhu<100){
    $hasil = "Cuaca panas";
}elseif($suhu<30 && $suhu>0){
    $hasil = "Cuaca dingin";
}else{
    $hasil = "Cuaca extreme";
}
echo $hasil;
?>
