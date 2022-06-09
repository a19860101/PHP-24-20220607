<?php
    //function 函式

    function foo(){
        echo 'foo';
    }

    function test($name){
        echo "I am {$name}";
    }

    function total($price,$tax){
        echo $price * $tax;
    }

    function usToTw($money,$exc){
        return $money * $exc;
    }

    // echo usToTw(1999,29.2);
    // $final = usToTw(1999,29.3);
    // echo $final;

    // var_dump(total(100,1.05));
    var_dump(usToTw(1999,30));