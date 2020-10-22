<?php
function ValidateEmail($str){
    $Pattern = "/^[A-Za-z0-9]+[A-Za-z0-9]*@[A-Za-z0-9]+(\.[A-Za-z0-9]+)$/";
    if (preg_match($Pattern,$str)){
        echo "Hop le";
    }else{
        echo "khong hop le";
    }
}
ValidateEmail("Hung123@gmail.com");