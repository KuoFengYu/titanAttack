<?php

// $serverName = "localhost";
// $userName = "root";
// $password = "";
// $databaseName = "db_attachOnTitan";

// $link = mysqli_connect($serverName, $userName, $password);
// mysqli_select_db($link, $databaseName);

require_once("dbConnect.php");
$result = mysqli_query($link, "select Name,Time,updatetime from `playerlist2` order by CHAR_LENGTH(Time) asc,Time,Id limit 0,10");



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="_css/bootstrap.min.css">
    <script src="_js/jquery.min.js"></script>
    <script src="_js/popper.min.js"></script>
    <script src="_js/bootstrap.min.js"></script>
    <link rel=stylesheet type="text/css" href="css/翻牌GAME result2.css">

</head>

<body>
    <div class="row">
        <!-- navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark col-12 ">
            <a class="navbar-brand position-relative" style="width: 8.333%;" href="Attack_on_Titan_mainPage.php"><img src="img/web/logo.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="falFse" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offset-2 collapse navbar-collapse col-6 " id="navbarSupportedContent">
                <ul class="navbar-nav m-auto col-12">
                    <li class="nav-item m-auto">
                        <a class="nav-link" href="Attack_on_Titan_mainPage.php">Home </a>
                    </li>
                    <li class="nav-item m-auto">
                        <a class="nav-link" href="Attack_on_Titan_storyPage.php">Story</a>
                    </li>
                    <li class="nav-item m-auto">
                        <a class="nav-link " href="Attack_on_Titan_rolePage.php">Character</a>
                    </li>
                    <li class="nav-item m-auto">
                        <a class="nav-link  active" href="翻牌GAME intro.php">Game</a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- gameArea -->
        <div class="container my-2 text-center position-relative">
            <div id="content"></div>
            <p class="text-center text-white">排行榜 (簡單)</p>
            <?php
            $result = mysqli_query($link, "select Name,Time, updatetime from `playerlist2` order by Id DESC LIMIT 1");
            while ($row = mysqli_fetch_assoc($result)) : ?>
                <p class="text-white"> <?= $row["Name"] . "的時間為: " . $row["Time"] . "s" ?> </p>
                <p id="myTime" class="text-hide"> <?= $row["Time"] ?> </p>
            <?php endwhile; ?>

            <table class="table table-striped table-light">
                <thead>
                    <tr>

                        <th scope="col">Rank</th>
                        <th scope="col">Name</th>
                        <th scope="col">Time (s)</th>
                        <th scope="col">Update Time</th>
                    </tr>
                </thead>
                <tbody>

                    <?php $i = 1;
                    $result = mysqli_query($link, "select Name,Time, updatetime from `playerlist2` order by CHAR_LENGTH(Time) asc,Time,Id limit 0,10");
                    while ($row = mysqli_fetch_assoc($result)) : ?>
                        <tr>
                            <td><?php
                                if ($i <= 3) {
                                    echo '<img class="align-middle" style="height:50px;" src="img/獎牌/Medal' . $i . '.png">';
                                } else {
                                    echo $i;
                                }
                                $i = $i + 1;
                                ?></td>
                            <td><?= $row["Name"] ?></td>
                            <td><?= $row["Time"] ?></td>
                            <td><?= $row["updatetime"] ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>

    </div>
    <script>
        // console.log($("#myTime").text());
        var myTime = parseInt($("#myTime").text());
        var item = '<img class="fixed-top " id="winPic" src="img/gameresult/winner2.jpg" alt="">'
        if (myTime <= parseInt($("tr:nth-child(3) td:nth-child(3)").text())) {
            (function() {
                $("body").append(item);
                setTimeout(function() {
                    $("#winPic").remove()
                }, 1500);
                $("#content").append('<div id="winRole"class="d-flex position-absolute"><img style="height:100px;" src="img/web/指標向上1.png"><span class="text-light text-left"  style="font-size:12px">成績不錯唷~<br>有加入調查兵團的潛力</span></div>');
            })()
        }
    </script>

</body>

</html>