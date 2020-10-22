<?php
function ValidatePhoneNumber($str){
    $pattern = "/^\([0-9]{2}\)+-\([0][0-9]{9}\)$/";
    if (preg_match($pattern,$str)){
        echo "sdt hop le";
    }else{
        echo "sdt khong hop le";
    }
}
ValidatePhoneNumber("(83)-(0978489648)");