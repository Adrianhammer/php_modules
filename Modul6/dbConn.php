<?php


$db = mysqli_connect("localhost", "root", "123", "medlemmer");


if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}



?>