<?php
function sticky_form($inputName) {
    if (isset($_POST[$inputName])) {
        return $_POST[$inputName];
    }
    return "";
}

?>
<form method="post" action="">
    <input type="text" name="username" value="<?php echo sticky_form('username'); ?>">
    <input type="submit" value="Submit">
</form>
