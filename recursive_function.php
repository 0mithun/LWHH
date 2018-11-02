<?php

function print_number(){
    $num =0;
    if($num >27){
       return;
    }
    if($num%2==1){
        echo $num." ";
    }
    print_number();
    $num++;
}

print_number();