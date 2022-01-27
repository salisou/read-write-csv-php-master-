<?php
$list = array (
    'aaa,bbb,ccc,dddd',
    '123,456,789',
    '"aaa","bbb"'
);

$fp = fopen('file.csv', 'w');

foreach ($list as $line) {	
    fputcsv($fp, split(',', $line));
}

fclose($fp);

echo "CSV File Written Successfully!";
?>
