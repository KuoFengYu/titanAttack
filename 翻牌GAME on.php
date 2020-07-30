<?php
session_start();
if ($_SESSION["code"] == "uuddllrrAB") {
    echo '<script>' . '(function VVV() {
    $(".mycardBegin").addClass("flipByTime")' . ';' .
        'setTimeout(function() {
        $(".mycardBegin").removeClass("flipByTime")' . ';' .
        '}, 2500);})()' . '</script>';
}
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
    <link rel=stylesheet type="text/css" href="css/翻牌GAME on.css">
</head>

<body>
    <div class="row">

        <!--  navbar && timeer -->
        <nav class="navbar navbar-expand-lg navbar-dark col-12">
        <a class="navbar-brand" href="Attack_on_Titan_mainPage.php"><img src="img/web/logo.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="falFse" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class=" offset-2 collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto col-6">
                    <li class="nav-item m-auto">
                        <a class="nav-link" href="Attack_on_Titan_mainPage.php">Home</a>
                    </li>
                    <li class="nav-item m-auto">
                        <a class="nav-link" href="Attack_on_Titan_storyPage.php">Story</a>
                    </li>
                    <li class="nav-item m-auto">
                        <a class="nav-link " href="Attack_on_Titan_rolePage.php">Character</a>
                    </li>
                    <li class="nav-item m-auto active">
                        <a class="nav-link active" href="翻牌GAME intro.php">Game</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto col-6">
                    <li>
                        <span name="time" class="offset-1 text-danger" id="showSec">Time:</span>
                    </li>
                </ul>
            </div>
        </nav>


        <!-- post data -->
        <form class="text-center" id="nickName" method="post" action="timerResult.php">
            <div class="m-auto">
                <input type="hidden" id="mytimer" name="mytimer" type="text" value="">
                請輸入暱稱: <br> <input type="text" name="name">
                <input class=" col-4 btn btn-dark" type="submit" value="確定送出">
            </div>
        </form>


        <!-- gameArea -->

        <section class="col-5 cardGame mx-auto my-1">
            <!-- card area--12 cards-->
            <div class="myCard mycardBegin" data-cardName="No1">
                <img class="frontSide" src="img/巨人/無垢巨人/無垢1.jpg">
                <img class="backSide" src="img/卡牌/卡牌封面1.jpg">
            </div>
            <div class="myCard mycardBegin" data-cardName="No1">
                <img class="frontSide" src="img/巨人/無垢巨人/無垢1.jpg">
                <img class="backSide" src="img/卡牌/卡牌封面1.jpg">
            </div>
            <div class="myCard mycardBegin" data-cardName="No2">
                <img class="frontSide" src="img/巨人/無垢巨人/無垢2.jpg">
                <img class="backSide" src="img/卡牌/卡牌封面1.jpg">
            </div>
            <div class="myCard mycardBegin" data-cardName="No2">
                <img class="frontSide" src="img/巨人/無垢巨人/無垢2.jpg">
                <img class="backSide" src="img/卡牌/卡牌封面1.jpg">
            </div>
            <div class="myCard mycardBegin" data-cardName="No3">
                <img class="frontSide" src="img/巨人/無垢巨人/無垢3.jpg">
                <img class="backSide" src="img/卡牌/卡牌封面1.jpg">
            </div>
            <div class="myCard mycardBegin" data-cardName="No3">
                <img class="frontSide" src="img/巨人/無垢巨人/無垢3.jpg">
                <img class="backSide" src="img/卡牌/卡牌封面1.jpg">
            </div>
            <div class="myCard mycardBegin" data-cardName="No4">
                <img class="frontSide" src="img/巨人/無垢巨人/無垢4.png">
                <img class="backSide" src="img/卡牌/卡牌封面1.jpg">
            </div>
            <div class="myCard mycardBegin" data-cardName="No4">
                <img class="frontSide " src="img/巨人/無垢巨人/無垢4.png">
                <img class="backSide" src="img/卡牌/卡牌封面1.jpg">
            </div>
            <div class="myCard mycardBegin" data-cardName="No5">
                <img class="frontSide" src="img/巨人/無垢巨人/無垢5.jpg">
                <img class="backSide" src="img/卡牌/卡牌封面1.jpg">
            </div>
            <div class="myCard mycardBegin" data-cardName="No5">
                <img class="frontSide " src="img/巨人/無垢巨人/無垢5.jpg ">
                <img class="backSide" src="img/卡牌/卡牌封面1.jpg">
            </div>
            <div class="myCard mycardBegin" data-cardName="No6">
                <img class="frontSide " src="img/巨人/無垢巨人/無垢6.jpg ">
                <img class="backSide" src="img/卡牌/卡牌封面1.jpg">
            </div>
            <div class="myCard mycardBegin" data-cardName="No6">
                <img class="frontSide " src="img/巨人/無垢巨人/無垢6.jpg ">
                <img class="backSide" src="img/卡牌/卡牌封面1.jpg">
            </div>
            <div class="myCard mycardBegin" data-cardName="No7">
                <img class="frontSide" src="img/巨人/無垢巨人/無垢7.jpeg">
                <img class="backSide" src="img/卡牌/卡牌封面1.jpg">
            </div>
            <div class="myCard mycardBegin" data-cardName="No7">
                <img class="frontSide" src="img/巨人/無垢巨人/無垢7.jpeg">
                <img class="backSide" src="img/卡牌/卡牌封面1.jpg">
            </div>
            <div class="myCard mycardBegin" data-cardName="No8">
                <img class="frontSide" src="img/巨人/無垢巨人/無垢8.jpg">
                <img class="backSide" src="img/卡牌/卡牌封面1.jpg">
            </div>
            <div class="myCard mycardBegin" data-cardName="No8">
                <img class="frontSide " src="img/巨人/無垢巨人/無垢8.jpg ">
                <img class="backSide" src="img/卡牌/卡牌封面1.jpg">
            </div>
            <div class="myCard mycardBegin" data-cardName="No9">
                <img class="frontSide" src="img/巨人/無垢巨人/無垢9.jpg">
                <img class="backSide" src="img/卡牌/卡牌封面1.jpg">
            </div>
            <div class="myCard mycardBegin" data-cardName="No9">
                <img class="frontSide " src="img/巨人/無垢巨人/無垢9.jpg ">
                <img class="backSide" src="img/卡牌/卡牌封面1.jpg">
            </div>
            <div class="myCard mycardBegin" data-cardName="No10">
                <img class="frontSide" src="img/巨人/無垢巨人/無垢10.jpg">
                <img class="backSide" src="img/卡牌/卡牌封面1.jpg">
            </div>
            <div class="myCard mycardBegin" data-cardName="No10">
                <img class="frontSide " src="img/巨人/無垢巨人/無垢10.jpg">
                <img class="backSide" src="img/卡牌/卡牌封面1.jpg">
            </div>

        </section>
    </div>
    <script>
        var myCard = document.querySelectorAll(".myCard")


        // function for clicking to filp card
        // only two cards could be fliped
        var flag = false;
        var stopFlip = false;
        var firstCard;
        var secondCard;
        var timeFlag;
        var sec = 0;
        var count = 0;

        // set timer
        (function start() {
            timeFlag = setInterval(timer, 1000);
        })()

        function timer() {
            sec += 1;
            // console.log(sec);
            document.getElementById('showSec').innerText = `Time:${sec}sec`;
            console.log(sec);
            return sec;
        }

        (function shuffle() {
            myCard.forEach(x => {
                a = Math.floor(Math.random() * 13);
                x.style.order = a;
            })
        })()

        function flipCard() {
            // console.log(`stopFlip= ${stopFlip} flag= ${flag}`);
            if (stopFlip) return;
            this.classList.add('flip');
            if (flag != true) {
                firstCard = this;
                flag = true;
                return;
            } else {
                secondCard = this;
                flag = false
                stopFlip = true;
                console.log(`stopFlip= ${stopFlip} flag= ${flag}`);
            }

            match()

            console.log(count)
            if (count == 10) {
                clearInterval(timeFlag);

                time = document.getElementById('showSec').innerText;
                console.log(time);
                console.log(sec);

                console.log($('#showSec'));
                var elem = document.getElementById("mytimer");
                elem.value = sec;
                document.getElementById("nickName").style.display = "flex";
            }
        }


        // judge if these two card matched each other
        // if match remain rotateY and remove click(),if not remove class

        function match() {
            if (firstCard.getAttribute("data-cardName") == secondCard.getAttribute("data-cardName")) {
                firstCard.removeEventListener('click', flipCard);
                secondCard.removeEventListener('click', flipCard);
                flag = false;
                stopFlip = false;
                count = count + 1
            } else {
                setTimeout(() => {
                    firstCard.classList.remove('flip');
                    secondCard.classList.remove('flip');
                    flag = false;
                    stopFlip = false;
                    // console.log(`stopFlip= ${stopFlip} flag= ${flag}`);
                }, 800)
            }
        }
        myCard.forEach(e => e.addEventListener('click', flipCard));

        // (function VVV() {
        //     $(".mycardBegin").addClass('flipByTime');
        //     setTimeout(function() {
        //         $(".mycardBegin").removeClass('flipByTime');
        //     }, 5000);
        // })();
        
    </script>

    <?php

    session_start();
    echo $_SESSION["code"];
    if ($_SESSION["code"] == "uuddllrrAB") {
        echo '<script>' . '(function VVV() {
    $(".mycardBegin").addClass("flipByTime")' . ';' .
            'setTimeout(function() {
        $(".mycardBegin").removeClass("flipByTime")' . ';' .
            '}, 2500);})()' . '</script>';
    }

    ?>



</body>

</html>