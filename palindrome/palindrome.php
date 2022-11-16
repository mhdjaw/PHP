<?php
function palindrome ($mot) {
$inverse = strtolower(strrev($mot));
if (strtolower(str_replace(" " , "", $mot)) === strtolower(str_replace(" ", "",$inverse))) {
    echo ("True\n");
} else {
    echo ("False\n");
}
}
?>