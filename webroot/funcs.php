<?php
function username_clean(){
    $input = $_POST["username"];
    $rg = preg_grep("/^[A-Za-z0-9_]{1,15}$/", array($input));
    foreach ($rg as $match) {
        return $match;
    }
    return '';
}

?>
