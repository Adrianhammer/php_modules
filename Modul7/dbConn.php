<?php


$db = mysqli_connect("localhost", "root", "123", "memberdb");


if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}



?>