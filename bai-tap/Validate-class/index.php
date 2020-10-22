<?php
function ValidateClass($str){
    $pattern = "/^[C|A|P]{1}[0-9]{4}[G|H|I|K|L|M]$/";
    if (preg_match($pattern,$str)){
        echo "Class hop le ";
    }else{
        echo "Class khong hop le";
    }
}
ValidateClass("P0323A");