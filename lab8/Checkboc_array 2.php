<?php
function checkbox_array2($optionsArray, $selectedValues) {
    foreach ($optionsArray as $option) {
        $isChecked = (in_array($option, $selectedValues)) ? "checked" : "";
        echo "<label><input type='checkbox' name='myCheckbox[]' value='$option' $isChecked> $option</label><br>";
    }
}

$options = ["Option 1", "Option 2", "Option 3"];
$selectedOptions = ["Option 2", "Option 3"];

checkbox_array2($options, $selectedOptions);
?>
