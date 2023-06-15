<?php
require('koneksi.php');

$sql = "SELECT s.ship_id , s.name ship_name, count(s.ship_id) as frekuensi
        FROM shipmethod s, fakta_pengiriman p
        WHERE s.ship_id = p.ship_id 
        GROUP BY s.ship_id";
$result = mysqli_query($conn, $sql);

$hasil = array();

while ($row = mysqli_fetch_array($result)) {
    array_push($hasil, array(
        "name" => $row['ship_name'],
        "total" => $row['frekuensi']
        
    ));
}

$data6 = json_encode($hasil);
