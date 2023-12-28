<?php
function checkbox_array($optionsArray, $selectedValues) {
    foreach ($optionsArray as $option) {
        $isChecked = (in_array($option, $selectedValues)) ? "checked" : "";
        echo "<input type='checkbox' name='myCheckbox[]' value='$option' $isChecked> $option<br>";
    }
}

$options = ["Option 1", "Option 2", "Option 3"];
$selectedOptions = ["Option 2", "Option 3"];

checkbox_array($options, $selectedOptions);
?>
