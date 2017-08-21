<?php
//Connection data
$server = "localhost";
$db_name = "hngintern";
$username = "root";
$password = "";

//Database connection
$connect = mysqli_connect($server, $username, $password, $db_name);
 
if(!$connect){
    die("Connection to the datatbase failed".mysqli_connect_error());
}

//Queries
$query = "SELECT * FROM test WHERE id=1";
$data = mysqli_query($connect, $query);
$data = mysqli_fetch_object($data);

//Fetched data
$name = $data->name;
$company = $data->company;
$today = date('Y-m-d');
$created = $data->created_at;
$interval = $data->created_at - $today;

//Output
echo "<center><h3>Hi, I am ".$name.
    " and I am an ".$company.
    ".</h3>This is my first task from ".$interval.
    " day(s) ago</center>";

?>
