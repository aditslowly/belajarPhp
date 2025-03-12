<?php

// Single Quote

echo "Nama : ";
echo "Aditya Prasetyo";
echo "\n";


/* Selain Single Quote
kita juga bisa menggunakan double quote.
Salah satu kelebihan menggunakan double quote adalah,
kita menggunakan escape sequence untuk beberapa hal, seperti: 
\n untuk ENTER dan \t untuk TAB untuk double quote dan lain lain;
*/

echo "Nama : ";
echo "Aditya Prasetyo";
echo "\n";

echo "Nama : ";
echo "Aditya\t Prasetyo\t";
echo "\n";


/* 
    Multiline String;
    untuk multiline string, 
    kita dapat menggunakan fitur bawaan dari PHP yaitu Heredoc dan Nowdoc
*/
 
 /* DISCLAIMER!! UNTUK echo <<<ADIT itu bisa diubah menjadi keinginan kalian
    dengan syarat pada akhir string kalian masukkan lagi echo <<<ADIT itu dibagian bawah, Contoh:
    
    echo <<<LUNAR
    this is just testing hhahaha
    LUNAR; <- seperti ini! Code ini hanya untuk Heredoc seperti dibawah
 */;
 
 // Heredoc code seperti dibawah
 echo <<<ADIT
 hai perkenalkan nama aku adit, aku berasal dari POLITAP
 nah sekarang kita lagi belajar pemrograman php dasar
 ADIT;

 // Nowdoc code seperti dibawah ini
 echo <<<'ADIT'
 Hai semua perkenalkan nama aku adit, aku berasal dari politap
 nah sekarang kita lagi belajar pemrograman php dasar
 ADIT;

 // HARAP BACA !!!!
 /* DISCLAIMER!!!
    untuk code NowDoc hampir sama dengan Heredoc cumen yang membedakan
    adalah pada Nowdoc itu tidak memiliki kemampuan parsing seperti Heredoc atau Double Quote

    PARSING => PROSES MEMBACA, MENGANALISIS, DAN MENGUBAH KODE MENJADI BENTUK
    YANG DAPAT DI EKSEKUSI OLEH MESIN PHP
 */