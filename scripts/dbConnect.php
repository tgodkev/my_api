<?php

$mysqli = new mysqli("localhost", "root", "", "api");

if($mysqli -> connect_error){
    die("connection failed". $mysqli->connect_error);
}
