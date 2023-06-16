<?php
require('koneksi.php');

$sql = "SELECT c.customer_id as id, sum(p.order_qty) as jumlah
        from customer c , fakta_pengiriman p
        where c.customer_id = p.customer_id 
        group by c.customer_id ASC LIMIT 3";
$result = mysqli_query($conn, $sql);

$hasil = array();

while ($row = mysqli_fetch_array($result)) {
    array_push($hasil, array(
        "name" => $row['id'],
        "total" => $row['jumlah']
    ));
}

$datacustomer = json_encode($hasil);