<?php
// open the csv file in write mode
$fp = fopen('readwrite.csv', 'w');

// read csv file
if (($handle = fopen("read.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {                      
        // write csv file
		fputcsv($fp, $data);       	
	}
    fclose($handle);
	fclose($fp);
	
	echo "CSV File Written Successfully!";
}
?>
