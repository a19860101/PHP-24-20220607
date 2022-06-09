<?php
    $drinks = ['熟成紅茶','麗春紅茶','太妃紅茶','胭脂紅茶'];

    $beans = [
        'name' => '阿拉比卡',
        'area' => '高海拔',
        'shape'=> '圓形'
    ];


    // count() 計算陣列數量

    // echo count($drinks);
    // echo count($beans);

    // implode() 陣列->字串
    // echo implode('@@@',$drinks); 
    // echo implode('@@@',$beans); 

    // explode() 字串->陣列
    // $s = '拿鐵,美式,卡布奇諾';
    // $s_array = explode(',',$s);
    // print_r($s_array);

    // extract() 解構

    // echo $beans['name'];
    // echo $beans['area'];
    // echo $beans['shape'];

    extract($beans);
    echo $name;
    echo $area;
    echo $shape;

    // compact() 緊湊
    $coffee = '拿鐵';
    $price = '120';
    $brand = '星巴克';
    // $c = [$coffee, $price, $brand];
    // $c = compact('coffee','price','brand');
    $c = [
            'coffee' => $coffee,
            'price' => $price,
            'brand' => $brand
    ];

    print_r($c);