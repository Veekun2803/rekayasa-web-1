<?php
// Variabel JSON
$json_buah = '{"apel":5,"jeruk":8,"mangga":3}';

// Decode ke PHP Object
$obj_buah = json_decode($json_buah);

// Akses nilai dari object
echo $obj_buah->apel;   // Output: 5
echo $obj_buah->jeruk;  // Output: 8
echo $obj_buah->mangga; // Output: 3
?>
