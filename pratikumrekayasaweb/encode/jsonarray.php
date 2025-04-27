<?php
// Membuat array
$buah = array("apel" => 5, "jeruk" => 8, "mangga" => 3);

// Encode array ke format JSON
$json_buah = json_encode($buah);

// Tampilkan hasil JSON
echo $json_buah;
?>
