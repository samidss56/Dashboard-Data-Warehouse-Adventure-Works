<?php
require('koneksi.php');

$sql1 = "SELECT s.store_name nama_toko, 
        s.city city,
        t.bulan as bulan, 
        sum(fp.sub_total) as penjualan 
        FROM store s, fakta_penjualan fp, time t 
        WHERE s.city = city AND  s.store_id = fp.store_id AND t.time_id = fp.time_id 
        GROUP BY nama_toko, bulan";

$result1 = mysqli_query($conn, $sql1);

$penjualan = array();

while ($row = mysqli_fetch_array($result1)) {
    array_push($penjualan, array(
        "penjualan" => $row['penjualan'],
        "bulan" => $row['bulan'],
        "kategori" => $row['nama_toko'],
        "name" => $row['city']
    ));
}

$data2 = json_encode($penjualan);
