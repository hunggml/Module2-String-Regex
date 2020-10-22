<?php
function ValidateAccount($str){
    $pattern = "/^[_A-Za-z0-9]{6,}$/";
    if (preg_match($pattern,$str)){
        echo "Account hop le";
    }else{
        echo "Account khong hop le";
    }
}
ValidateAccount("12312");