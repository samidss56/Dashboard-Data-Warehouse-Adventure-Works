<?php
require('koneksi.php');

$sql1 = "SELECT s.name ship_name, 
        s.city city,
        t.bulan as bulan, 
        sum(fp.sub_total) as penjualan 
        FROM shipmethod s, fakta_pengiriman fp, time t 
        WHERE s.city = city AND  s.ship_id = fp.ship_id AND t.time_id = fp.time_id 
        GROUP BY ship_name, bulan";

$result1 = mysqli_query($conn, $sql1);

$penjualan = array();

while ($row = mysqli_fetch_array($result1)) {
    array_push($penjualan, array(
        "penjualan" => $row['penjualan'],
        "bulan" => $row['bulan'],
        "kategori" => $row['ship_name'],
        "name" => $row['city']
    ));
}

$data2 = json_encode($penjualan);
