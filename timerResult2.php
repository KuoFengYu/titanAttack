<?php

require_once("dbConnect.php");

if (isset($_POST["nameEasy"]) && $_POST["mytimerEasy"]) {
    $sql = "INSERT INTO `playerlist2` (`Name`, `Time`) VALUES
('{$_POST["nameEasy"]}', {$_POST["mytimerEasy"]});";
    // echo $sql;
    mysqli_query($link, $sql);
};
header("location:翻牌GAME result2.php");