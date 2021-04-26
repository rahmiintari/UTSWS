<?php

    Header('Content-type: text/xml');

    $connection = mysqli_connect("localhost", "root", "mysql", "uts_ws") or die("Error " . mysqli_error($connection));
        $xml = new SimpleXMLElement('<xml/>');

        $sql = "select * from wisata ";
            $result = mysqli_query($connection, $sql) or die("Error " . mysqli_error($connection));

            while ($row = mysqli_fetch_assoc($result)) {

                $track = $xml->addChild('wisata');
                $track->addChild('id_wisata', $row['id_wisata']);
                $track->addChild('nama_wisata', $row['nama_wisata']);
                $track->addChild('alamat_wisata', $row['alamat_wisata']);
                $track->addChild('tiket_wisata', $row['tiket_wisata']);
                
}

            print($xml->asXML());

        mysqli_close($connection);
?>