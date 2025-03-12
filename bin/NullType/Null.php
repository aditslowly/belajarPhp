<?php
$name = "Adit";
$name = NULL;

$age = NULL;

echo "Nama : ";
echo $name;

// VARIABLE is_null() usage;

$name = "Adit"; /* JIka ada seperti ini atau ada variable name nya maka hasilnya false
                    Tapi jika variable name nya dihapus maka akan menghasilkan true
                */

echo "Is Name Null : ";
var_dump(is_null( $name ));
echo "\n";

/*
    Nah kalian juga bisa menghapus variable dengan cara menggunakan code UNSET
*/

$contoh = "Adit";
unset ($contoh);

echo $contoh; /* Lihat hasilnya akan merah atau error, karena variablenya sudah di hapus dengan code UNSET */

/* 
    Nah kalian juga bisa mengSet kembali variable yang telah kalian unset dengan code isset
*/

$contoh = "Adit";
unset ($contoh);

var_dump(isset($contoh));