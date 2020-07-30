<?php
require_once("dbConnect.php");
session_start();
$_SESSION["code"] = $_POST["code"];



// $result = mysqli_query($link, "select name,code from `gamekits` where code='{$_POST["code"]}'");
// $row = mysqli_fetch_assoc($result);
// $_SESSION["code"]= $row["code"];

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
    <link rel=stylesheet type="text/css" href="css/翻牌GAME intro.css">

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

        <div class="container my-3">
            <div class="row">
                <!-- game expalination -->
                <div class="gameInto col-6 offset-3">
                    <div>
                        <p class="text-center"> 遊戲說明 </p>
                        <!-- <span class="text-right" type="button" data-toggle="modal" data-target="#exampleModalCenter">
                            排行榜
                        </span> -->
                    </div>
                    <div>

                        <span>
                            1.遊戲開始前請先選擇困難度。<br>
                            2.選擇兩張卡牌，若卡牌不同，則卡牌覆合。 <br>
                            3.配對所有牌組，挑戰最速傳說 <br></span>
                        <a class="btn btn-info my-3" href="翻牌GAME on easy.php">簡單模式</a></button>
                        <a class="btn btn-danger my-3" href="翻牌GAME on.php">困難模式</a></button>
                    </div>

                </div>
                <!-- Button trigger modal -->


                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                ...
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Button trigger modal -->

        <button type="button" style="width: 1px;" data-toggle="modal" data-target="#exampleModal">

        </button>

        <!-- Modal -->
        <form method="post" action="" class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="m-2 text-center">
                        <span class="modal-title text-dark" id="exampleModalLabel">跪求老司機</span>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="m-2">
                        Code: <input name="code" type="text">
                        <span>uuddllrrAB</span>
                    </div>
                    <div class="modal-footer m-2">
                        <button type="submit" class="btn btn-info">發車囉</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>

</html>