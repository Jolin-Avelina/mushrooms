<?php
$file = fopen('database/data/test_data.csv',"r");
print_r(fgetcsv($file));
fclose($file);
