<?php
// this is the connect string - pass this file where you need to work with db
    require "config.ini";
    $config = parse_ini_file('config.ini');
    $CONNECTION_STRING = new PDO('mysql:host=localhost;dbname=cmt', 'chris', 'password');
    //$config['password']