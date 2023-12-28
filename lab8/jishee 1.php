<?php
function chunkify($inputArray, $chunkSize) {
    return array_chunk($inputArray, $chunkSize);
}

$inputArray = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$chunkSize = 3;

$result = chunkify($inputArray, $chunkSize);
print_r($result);
?>
