<?php
require 'config.ini';
$config = parse_ini_file('config.ini');
$CONNECTION_STRING = new PDO('mysql:host=localhost;dbname=music', $config['username'], $config['password']);
