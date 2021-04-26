
<?php
 
$connection = mysqli_connect("localhost", "root", "mysql", "uts_ws") or die("Error " . mysqli_error($connection));

$file = simplexml_load_file("wisatawan.xml");
 
echo '<b><center>Data Wisatawan Harian</b> <br>';
foreach ($file as $key => $value) {
    echo $i . "<br />";
    echo "Id Wisatawan : " . $value->id_wisatawan . "<br>";
    echo "Nama Wisatawan : " . $value->nama_wisatawan . "<br>";
    echo "Asal Wisatawan : " . $value->asal_wisatawan . "<br>";
    echo "Email Wisatawan : " . $value->email_wisatawan . "<br>";
    echo "Sosmed Wisatawan : " . $value->sosmed_wisatawan . "<br>";

    $sql = "INSERT into wisatawan(id_wisatawan,nama_wisatawan,asal_wisatawan,email_wisatawan,sosmed_wisatawan) VALUES($value->id_wisatawan, $value->nama_wisatawan,$value->asal_wisatawan,$value->'email_wisatawan,$value->sosmed_wisatawan)";
    
    mysqli_query($connection, $sql); 

}
mysqli_close($connection);
?>
