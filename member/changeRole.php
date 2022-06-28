<?php
    include('function.php');

    changeRole($_REQUEST);

    header('location:member-list.php');