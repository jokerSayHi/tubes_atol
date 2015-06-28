<table>
	<tr>
		<th>ID</th>
		<th>Nama Kelurahan</th>
		<th>Kecamatan</th>
	</tr>
	<?php
	foreach ($kel as $key => $value) {
		$kec = Kecamatan::find($value->id_kecamatan);
		echo "<tr>";
		echo "<td>" . $value->id_kelurahan . "</td>";
		echo "<td>" . $value->nama_kelurahan . "</td>";
		echo "<td>" . $kec->nama_kecamatan . "</td>";
		echo "</tr>";
	}
	?>
</table>
<div>
	<?php echo $kel->links(); ?>
</div>