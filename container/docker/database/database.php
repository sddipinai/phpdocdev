<?php
/*
 * Name: database.php 
 * Desc: PHP Login and Register system with PDO Connection
 */

// 1. Initialize connection Setup
define('HOST', 'localhost');     // Database host name     Ex: localhost
define('USER', 'phpsuper');      // Database user.         Ex: root     [ if your on local server ]
define('PASSWORD', 'L3tm31n$');  // Database user password Ex: foo1234$ [ If password is not set for user then keep it empty )
define('DATABASE', 'phpauth');   // Database name          Ex: mysql    [ The default database to use ]
function DB()
{
    try {
        $db = new PDO('mysql:host='.HOST.';dbname='.DATABASE.'', USER, PASSWORD);
        return $db;
    } catch (PDOException $e) {
        return "Error!: " . $e->getMessage();
        die();
    }
}
?>