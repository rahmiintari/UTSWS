<?php

    Header('Content-type: text/xml');

    $connection = mysqli_connect("localhost", "root", "mysql", "uts_ws") or die("Error " . mysqli_error($connection));
        $xml = new SimpleXMLElement('<xml/>');

        $sql = "select * from wisatawan ";
            $result = mysqli_query($connection, $sql) or die("Error " . mysqli_error($connection));

            while ($row = mysqli_fetch_assoc($result)) {

                $track = $xml->addChild('wisatawan');
                $track->addChild('id_wisatawan', $row['id_wisatawan']);
                $track->addChild('nama_wisatawan', $row['nama_wisatawan']);
                $track->addChild('asal_wisatawan', $row['asal_wisatawan']);
                $track->addChild('email_wisatawan', $row['email_wisatawan']);
                $track->addChild('sosmed_wisatawan', $row['sosmed_wisatawan']);
}

            print($xml->asXML());

        mysqli_close($connection);
?>