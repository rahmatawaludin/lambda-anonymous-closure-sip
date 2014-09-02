<?php
$title = "Mas";
$nama = "Rahmat Awaludin";

function namaAnda($title, $nama) {
    return $title . ' ' . $nama;
}

function bisa($nama) {
    echo "Anda pasti bisa Closure, $nama!\n";
}

bisa(namaAnda($title, $nama));
