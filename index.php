<?php
function namaAnda() {
    return "Budi Gunawan";
}

function bisa($nama) {
    echo "Anda pasti bisa Laravel, $nama!\n";
}

// bisa(namaAnda());

$nama = function() {
    return "Budi Gunawan";
};

bisa($nama());
