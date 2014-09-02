<?php
function namaAnda() {
    return "Rahmat Awaludin";
}

function bisa($nama) {
    echo "Anda pasti bisa Laravel, $nama!\n";
}

// bisa(namaAnda());

$nama = function() {
    return "Rahmat Awaludin";
};

bisa($nama());
