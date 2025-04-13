<?php
$indexed_array = [225, 'Dreams', 'Glass', 30, 25, 1, 'Globe'];

$associative_array = array(
    '0' => 'Couch',
    'Ice' => 'India',
    '6' => 'Box',
    'Trip' => 'Range'
);
echo "Indexed array:<br>";
print_r($indexed_array);
echo "<br>";
echo "Associative array:<br>";
print_r($associative_array);
$arr3=array_merge($indexed_array,$associative_array);
echo "<br>";
echo "Merged array:<br>";
print_r($arr3);
echo "<br>";
echo "3rd value from indexed array:".$indexed_array[2]."<br>";
echo "value for key 'Ice'=>".$associative_array['Ice'];
?>
