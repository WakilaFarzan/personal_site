

<?php

$id = $_GET['id'];

include_once('connection.php');

$query = "DELETE FROM `project`.`registration` WHERE `registration`.`id` = $id";

mysqli_query($link, $query);

header('location:list.php');