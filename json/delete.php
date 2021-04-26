<?php

    require_once('config.php');
    parse_str(file_get_contents('php://input'), $value);

    $id_wisata = $value['id_wisata'];

    $query =  "DELETE FROM wisata WHERE id_wisata='$id_wisata' ";
   
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