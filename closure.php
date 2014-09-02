<?php
$title = "Mas";
$nama = "Rahmat Awaludin";

function bisa($nama) {
    echo "Anda pasti bisa Closure, $nama!\n";
}

$nama = function() use ($title, $nama) {
    return $title . ' ' . $nama;
};

bisa($nama());
