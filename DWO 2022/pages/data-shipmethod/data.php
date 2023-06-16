<?php
require('koneksi.php');

$sql = "SELECT p.product_name product,
        s.name ship_name,
        count(order_qty) as frekuensi, 
        from fakta_pengiriman fp, shipmethod s, product p
        where s.ship_id=fp.ship_id=p.product_id";

$result = mysqli_query($conn, $sql);

$hasil = array();

while ($row = mysqli_fetch_array($result)) {
    array_push($hasil, array(
        "name" => $row['product'],
        "total" => $row['frekuensi']
    ));
}

$data = json_encode($hasil);
?>