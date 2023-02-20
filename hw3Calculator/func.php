<?php

function doo($POST) {
    if (!empty(is_numeric($_POST["a"])))  {
        if(is_numeric($_POST["b"]))  {
            switch ($_POST["suma"]){
                case '0':
                    $summa = $_POST["a"] + $_POST["b"];
                    break;
                case '1':
                    $summa = $_POST["a"] - $_POST["b"];
                    break;
                case '2':
                    $summa = $_POST["a"] * $_POST["b"];
                    break;
                case '3':
                    if ($_POST["b"] !== '0'){
                    $summa = $_POST["a"] / $_POST["b"];
                    }else {
                        $summa = "нельзя делить на ноль";
                    };
                    break;
                default:
                    $summa = "виберите знак";
                    break;
            }
        }else {
            $summa = "укажите два значения";
        };    
    }else {
        $summa = "укажите два значения";
    };    
    return  $summa;
};


?>