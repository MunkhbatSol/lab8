<?php
function select_array($optionsArray, $selectedValue) {
    echo "<select name='mySelect'>";
    foreach ($optionsArray as $option) {
        $isSelected = ($option == $selectedValue) ? "selected" : "";
        echo "<option value='$option' $isSelected>$option</option>";
    }
    echo "</select>";
}

$options = ["Option 1", "Option 2", "Option 3"];
$selectedOption = "Option 2";

select_array($options, $selectedOption);
?>
