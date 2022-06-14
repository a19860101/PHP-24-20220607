<?php
    // for
    for($i=0;$i<10;$i++){
        echo $i;
        echo '<br>';
    }

    //while
    $j = 0;
    while($j < 10){
        echo $j;
        $j++;
    }
    echo '<br>';
    //foreach 陣列迴圈
    $a = ['apple','banana','cat','dog'];
    // for($i=0;$i<4;$i++){
    //     echo $a[$i];
    // }
    
    // 陣列迭代
    foreach($a as $data){
        echo $data;
    }
    $b = [
        'name' => 'John',
        'mail' => 'john@gmail.com',
        'phone' => '0987878878'
    ];
    echo '<br>';
    foreach($b as $key => $value){
        echo "{$key}:{$value}";
        echo '<br>';
    }
