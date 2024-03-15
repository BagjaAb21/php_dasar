<?php
    /* 
    Pertemuan 2 - PHP Dasar
    Sintaks PHP

    Standar Output
    - echo, print
    - print_r
    - var_dump
    */

    // echo"Bagja Abdul Basith";
    // print "Bagja Abdul Basith";
    // print_r("Bagja Abdul Basith");
    //var_dump("Bagja Abdul Basith");

    // Penulisan sintaks PHP
    /* 
    1. PHP di dalam HTML
    2. HTML di dalam PHP
    */
    
    /* 
    A. variabel dan tipe data
    variabel =>  tidak boleh diawali dengan angka, tapi boleh mengandung angka
    */

    // $nama = "Bagja Abdul Basith";
    // echo "halo nama saya adalah $nama";
    // echo 'halo nama saya adalah $nama';

    /* 
    Operator
    Aritmatika
    + - * / %
    */

//echo 1 + 5; // 6

// atau bisa juga dengan cara membuat variabel

// $x = 1;
// $y = 6;

// echo $x + $y; // 7

/* 
penggabung string / concatenation / concat
. 
*/

// $nama_depan = "Bagja";
// $nama_belakang = "Abdul Basith";
// echo $nama_depan . " " . $nama_belakang; 

/* 
Assignment
=, +=, -=, *=, /=, %=, .=

*/
// $x = 1;
// $x += 5;

// echo $x; // 6

// $nama = "Bagja";
// $nama .= " ";
// $nama .= "Abdul Basith";
// 

/* 
Perbandingan
<, >, <=, >=, ==, !=
*/

// var_dump(1 == 5); // false
// var_dump(1 == "1"); // true

/* 
identitas
===, !==
*/
    // var_dump(1 === "1"); // false

/* 
Logika
&&, ||, !
*/

// $x = 30;

// var_dump( $x < 20 || $x % 2 == 0); // true
// var_dump( $x < 20 && $x % 2 == 0); // false

?>

<!-- <html>
    <head>
        <title>Belajar PHP</title>
    </head>
    <body>
        <h1>Halo, Selamat Datang <?php echo $nama; ?></h1>
        <p><?php echo "Ini adalah paragraf"; ?></p>
    </body>
</html> -->