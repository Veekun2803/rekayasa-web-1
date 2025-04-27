<?php
// Variabel JSON
$json_buah = '{"apel":5,"jeruk":8,"mangga":3}';

// Decode ke PHP Array
$arr_buah = json_decode($json_buah, true);

// Akses nilai dari array
echo $arr_buah["apel"];   // Output: 5
echo $arr_buah["jeruk"];  // Output: 8
echo $arr_buah["mangga"]; // Output: 3
?>
