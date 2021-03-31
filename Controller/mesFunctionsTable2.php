<?php

function afficherTableau($rows, $headers) {
		?>

		<table border="1">
		    <tr>
		    <?php foreach ($headers as $header): ?>
		        <th><?php echo $header; ?></th>
		    <?php endforeach; ?>
		    </tr>

			<?php foreach ($rows as $row): ?>
			    <tr>
			    <?php for ($k = 0; $k < count($headers); $k++): ?>
			    	<?php if ($k == 0){ ?>
			    		<td><?php echo '<a href=formReserv.php?id='.$row[$k].' >'.$row[$k].'</a>'; ?></td>
			    	<?php } else { ?>
			    		<td><?php echo $row[$k]; ?></td>
			    	<?php } ?>
			        
			    <?php endfor; ?>
			    </tr>
			<?php endforeach; ?>

		</table>
		<?php

}
function afficherTableau1($rows, $headers) {
	?>

	<table border="1">
		<tr>
		<?php foreach ($headers as $header): ?>
			<th><?php echo $header; ?></th>
		<?php endforeach; ?>
		</tr>

		<?php foreach ($rows as $row): ?>
			<tr>
			<?php for ($k = 0; $k < count($headers); $k++): ?>
					<td><?php echo $row[$k]; ?></td>	
			<?php endfor; ?>
			</tr>
		<?php endforeach; ?>

	</table>
	<?php

}

function getHeaderTable() {
	$headers = array();
	$headers[] = "Id reserv";
	$headers[] = "Id user";
	$headers[] = "nom_reserv";
	$headers[] = "date";
	$headers[] = "type";
	return $headers;
}
function getHeaderTable1() {
	$headers = array();
	$headers[] = "nom_reserv";
	$headers[] = "date";
	$headers[] = "type";
	return $headers;
}


?>





 