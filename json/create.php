<?php

    require_once('config.php');

    $nama_wisata= $_POST['nama_wisata'];
    $alamat_wisata= $_POST['alamat_wisata'];
    $tiket_wisata= $_POST['tiket_wisata'];

    $query =  "INSERT INTO wisata(nama_wisata, alamat_wisata, tiket_wisata) VALUES ('$nama_wisata','$alamat_wisata','$tiket_wisata)";
   
    $sql = mysqli_query($db_connect, $query);

    if ($sql){
        $result = array();
        while ($row = mysqli_fetch_array($sql)) {
            array_push($result, array(
                'id wisata' => $row['id_wisata'],
                'nama wisata' => $row['nama_wisata'],
                'alamat wisata' => $row['alamat_wisata'],
                'tiket wisata' => $row['tiket_wisata'],
            ));
        }

        echo json_encode (array('Daftar Wisata' => $result));
    }
    

?>