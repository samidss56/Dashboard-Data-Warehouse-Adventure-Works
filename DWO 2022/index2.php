<?php
include 'koneksi.php';

$query = mysqli_query($conn, "SELECT * from contact_employee");
$r  = mysqli_fetch_array($query);

while ($row = mysqli_fetch_array($query)) {
    echo '<tr>
			<td>' . $row['contact_id'] . '</td>
			<td>' . $row['name'] . '</td>
			<td>' . $row['phone'] . '</td>
			<td>' . $row['email'] . '</td>
			<td>' . $row['gender'] . '</td>
		</tr>';
}
echo '
	</tbody>
</table>';
