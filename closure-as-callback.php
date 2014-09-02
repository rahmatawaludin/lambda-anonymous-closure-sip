<?php
$minimal = 75;
$dataNilai = [
    ["nama"=>"Agus", "nilai"=>90],
    ["nama"=>"Deni", "nilai"=>80],
    ["nama"=>"Budi", "nilai"=>40],
    ["nama"=>"Bayu", "nilai"=>75],
];

array_walk($dataNilai, function($siswa) use ($minimal) {
    echo "Siswa : " . $siswa['nama'] . "\n";
    echo "Nilai : " . $siswa['nilai'] . "\n";
    echo "Status : ";
    if ($siswa['nilai'] >= $minimal) {
        echo "Lulus\n\n";
    } else {
        echo "Tidak Lulus\n\n";
    }
});
