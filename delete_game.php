<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

$id = $_GET['id'];

include 'connect.php';

$sql = "INSERT INTO `games`
(`game_id`, `game_name`, `game_price`, `game_cover`, `type_id`)
VALUES
('$game_id','$game_name','$game_price','$game_cover','$type_id')";

$result = mysqli_query($con, $sql);

if(!$result){
echo "error";
}else{
header("location: ../index.php");
exit;
}