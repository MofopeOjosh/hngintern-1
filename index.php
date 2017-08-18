<?php
$server = "localhost";
$db_name = "hngintern";
$username = "root";
$password = "";

$connect = mysqli_connect($server, $username, $password, $db_name);

if(!$connect){
    die("Connection to the datatbase failed".mysqli_connect_error());
}

$query = "SELECT * FROM test WHERE id=1";
$data = mysqli_query($connect, $query);
$data = mysqli_fetch_object($data);

$name = $data->name;
$company = $data->company;
$today = date('Y-m-d');
$created = $data->created_at;
$interval = $data->created_at - $today;
// $interval = $today->diff($data->created_at)->format("%a");


echo "<center><h3>Hi, I am ".$name.
    " and I am an ".$company.
    ".</h3>This is my first task from ".$interval.
    " day(s) ago</center>";

?>