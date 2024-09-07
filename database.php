<?php
    // Src: https://stackoverflow.com/a/7928917
    require_once '../../wp-config.php';
    
    $DB_HOST = DB_HOST;
    $DB_NAME = DB_NAME;
    $DB_USER = DB_USER;
    $DB_PASSWORD = DB_PASSWORD;
    $DB_CHARSET = DB_CHARSET;
    $DB_COLLATE = DB_COLLATE;

    $MySQLi = mysqli_connect($DB_HOST, $DB_USER, $DB_PASSWORD, $DB_NAME);
    if (!$MySQLi)
    {
    	die('Failed ! ' . mysqli_connect_error());
    	exit();
    }
