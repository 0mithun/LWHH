<?php

function print_number(){
    static $num;
    if($num >27)return;
    if($num==null) $num =1;
    echo $num." "; 
    $num+=2;
    print_number();
}

print_number();