<?php
$row = 1;
if (($handle = fopen("read.csv", "r")) !== FALSE) {
?>
<table border='0' cellpadding="4" cellspacing="1">
<?php 
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $num = count($data);               
		?>
		<tr <?php if($row==1){echo "style='font-weight:bold; background-color:#CCCCCC'";} else {echo "style='background-color:#DDDDDD'";} ?> style="background-color:#DDDDDD">
		<?php 
        for ($c=0; $c < $num; $c++) {            
			?>
			<td><?php echo $data[$c]; ?></td>
			<?php 			
        }		
		?>
		</tr>
		<?php 
		 $row++;
	}
    fclose($handle);
	?>
</table>
	<?php 
}
?>
