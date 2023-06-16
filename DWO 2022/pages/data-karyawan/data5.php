<?php
require('koneksi.php');

$sql = "SELECT gender, 
        count(gender) AS total,
        (count(gender) / (SELECT count(gender) FROM contact_employee)) * 100 AS 'persentase'
        FROM contact_employee  
        WHERE contact_id = contact_id GROUP BY gender";
$result = mysqli_query($conn,$sql);

$hasil = array();

while ($row = mysqli_fetch_array($result)) {
    array_push($hasil,array(
        "gender"=>$row['gender'],
        "total"=>$row['total'],
        "y"=>$row['persentase']
    ));
}

$data5 = json_encode($hasil);

?>