<?php
echo $_POST["mytimer"];
echo $_POST["name"];


require_once("dbConnect.php");

if (isset($_POST["name"]) && $_POST["mytimer"]) {
    $sql = "INSERT INTO `playerlist` (`Name`, `Time`) VALUES
('{$_POST["name"]}', {$_POST["mytimer"]});";
    // echo $sql;
    mysqli_query($link, $sql);
    header("location:翻牌GAME result.php");
};


if (isset($_POST["nameEasy"]) && $_POST["mytimerEasy"]) {
    $sql = "INSERT INTO `playerlist2` (`Name`, `Time`) VALUES
('{$_POST["nameEasy"]}', {$_POST["mytimerEasy"]});";
    // echo $sql;
    mysqli_query($link, $sql);
    header("location:翻牌GAME result2.php");
};

