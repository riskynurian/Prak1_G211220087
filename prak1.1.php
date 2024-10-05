<?php
// Membuat variabel array
$array = [
    "nama" => "Risky Nurian Syaputra",
    "nim" => "G.211.22.0087",
    "matkul" => "Rekayasa Web",
    "alamat" => [
        "kota" => "Kab.Semarang",
        "negara" => "Indonesia"
    ]
];

// Encode array ke format JSON
$json = json_encode($array);

// Menampilkan hasil encode
echo $json;
?>