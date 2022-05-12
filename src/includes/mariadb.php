<?php
include_once("config.php");

function connectDB(){
    global $db; //hogy a függvényen belül is látszódjon
    $con = new mysqli($db['host'], $db["user"], $db["pass"], $db["name"]); //config php ból hozzuk át
    if($con -> connect_error){
        die("Hiba a kapcsolódás sikertelen");
    }
    return $con;
}
