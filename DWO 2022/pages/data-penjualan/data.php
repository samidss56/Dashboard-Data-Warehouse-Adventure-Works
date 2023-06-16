<?php
require('koneksi.php');

$sql = "SELECT s.city city, 
        SUM(p.sub_total) AS total
        FROM store s, fakta_penjualan p 
        WHERE s.store_id = p.store_id 
        GROUP BY s.city";
$result = mysqli_query($conn, $sql);

$hasil = array();

while ($row = mysqli_fetch_array($result)) {
    array_push($hasil, array(
        "name" => $row['city'],
        "total" => $row['total']
    ));
}

$data = json_encode($hasil);
