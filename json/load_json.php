<?php
    
$connection = mysqli_connect("localhost", "root", "mysql", "uts_ws") or die("Error " . mysqli_error($connection));

$split = explode ("\n", $json);

foreach ($split as $record){
    $row = json_decode($record, true);
    $id_wisata = $row['id_wisata'];
    $nama_wisata = $row['nama_wisata'];
    $alamat_wisata = $row['alamat_wisata'];
    $tiket_wisata = $row['tiket_wisata'];

    $sql = "INSERT into wisata(id_wisata,nama_wisata,alamat_wisata,tiket_wisata) VALUES($row->id_wisata, $row->nama_wisata,$row->alamat_wisata,$row->tiket_wisata)";

    mysqli_query($connection, $sql);
}

echo "Import data berhasil!!";
?>