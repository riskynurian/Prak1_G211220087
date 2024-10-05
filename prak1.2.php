<?php
// Variabel JSON
$jsonData = '{
    "nama": "Risky Nurian Syaputra",
    "nim": "G.211.22.0087",
    "matkul": "Rekayasa Web",
    "alamat": {
        "kota": "Kab.Semarang",
        "negara": "Indonesia"
    }
}';

// Decode JSON menjadi PHP Object
$object = json_decode($jsonData);

// Akses nilai dari PHP Object
echo "Nama: " . $object->nama . "\n";
echo "Nim: " . $object->nim . "\n";
echo "Matkul: " . $object->matkul . "\n";
echo "Kota: " . $object->alamat->kota . "\n";

?>