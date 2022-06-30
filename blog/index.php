<?php 
    include('vendor/autoload.php');

    use Gjun\Blog\Test;
    use Gjun\Blog\Config\DB;


    // echo Gjun\Blog\Test::go();

    // echo Test::go();

    // echo Gjun\Blog\Config\DB::connect();
    echo DB::connect();