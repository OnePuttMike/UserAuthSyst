<?php

$username = 'oneputtd_MikeGar';
$dsn = 'mysql:host=127.0.0.1; dbname=oneputtd_register';
$password ='3xXx8484$$';


try{
    //create an instance of the PDO class with the required parameters
    $db = new PDO($dsn, $username, $password);

    //set pdo error mode to exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //display success message
    //echo "Connected to the register database";

}catch (PDOException $ex){
    //display error message
    echo "Connection failed ".$ex->getMessage();
}