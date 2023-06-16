<?php
require('koneksi.php');

$sql = " SELECT p.product_name nama_produk, 
        SUM(f.order_qty) AS total
        FROM product p, fakta_penjualan f
        WHERE p.product_id = f.product_id 
        GROUP BY nama_produk";
$result = mysqli_query($conn, $sql);

$hasil = array();

while ($row = mysqli_fetch_array($result)) {
    array_push($hasil, array(
        "name" => $row['nama_produk'],
        "total" => $row['total']
    ));
}

$data5 = json_encode($hasil);
