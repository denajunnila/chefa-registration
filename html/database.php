<?php

function my_showarr($my_array){
    // Returns <pre>-formatted array to echo
    return '<pre>'.print_r($my_array, true).'</pre>';
    }
    
function db_error() {
    $connection = db_connect();
    return mysqli_error($connection);
    }
    
function db_connect() {
    // Define connection as a static variable, to avoid connecting more than once 
    static $connection;

    // Try and connect to the database, if a connection has not been established yet
    if(!isset($connection)) {
        // Load configuration as an array. Use the actual location of your configuration file
        $config = parse_ini_file('../config.ini'); 
        // Try and connect to the database
        $connection = mysqli_connect($config['servername'], $config['username'], $config['password'], $config['dbname']);
        }
    
    // If connection was not successful, handle the error
    if($connection === false){
        //return mysqli_connect_error();
        $error = db_error();
        // Send the error to a log file or email to admin??
        }
    return $connection;
}

function db_query($query) {
    // Connect to the database
    $connection = db_connect();
    
    // Query the database
    $result = mysqli_query($connection,$query);
    
    return $result;
}

$result = db_query('SELECT * FROM registrations where 1');

if($result === false){
    // Handle failure - log the error?
} else {
    // Fetch all rows in an array
    $rows = array();
    while($row=mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
}
