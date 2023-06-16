<?php
include 'koneksi.php';
$query = mysqli_query($conn, "SELECT count(product_id) as jumlah FROM product");
$r  = mysqli_fetch_array($query);
echo $r['jumlah']; ?>

<br>
<?php
$query = mysqli_query($conn, "SELECT count(store_id) as jumlah FROM store");
$r  = mysqli_fetch_array($query);
echo $r['jumlah'];
?>

<br>
<?php
$query = mysqli_query($conn, "SELECT count(contact_id) as jumlah FROM contact_employee");
$r  = mysqli_fetch_array($query);
echo $r['jumlah'];
?>

<br>
<?php
$query = mysqli_query($conn, "SELECT count(ship_id) as jumlah FROM shipmethod");
$r  = mysqli_fetch_array($query);
echo $r['jumlah'];
?>

<br>
<?php
$query = mysqli_query($conn, "SELECT count(contact_id) as jumlah FROM contact_employee");
$r  = mysqli_fetch_array($query);
echo $r['jumlah'];
?>

<br>
<?php
$query = mysqli_query($conn, "SELECT sum(sub_total) as total FROM fakta_penjualan");
$r  = mysqli_fetch_array($query);
echo $r['total'];
?>

<br>
<?php
$query = mysqli_query($conn, "SELECT sum(order_qty) as total FROM fakta_penjualan");
$r  = mysqli_fetch_array($query);
echo $r['total'];
?>