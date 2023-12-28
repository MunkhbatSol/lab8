<?php
function temp($value) {
    return $value * 2;
}

$originalValue = 5;
$result = temp($originalValue);

echo "Original value: $originalValue<br>";
echo "Result: $result";
?>
