<?php
require_once("dbConnect.php");
$result = mysqli_query($link, "select episode,episodeNum,season,titleCH,imgSrc from `attack_on_titan_episode`");

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/bootstrap.min.css">
    <script src="_js/jquery.min.js"></script>
    <script src="_js/popper.min.js"></script>
    <script src="_js/bootstrap.min.js"></script>
    <link rel=stylesheet type="text/css" href="css/Attack_on_Titan_storyPage.css">
</head>
</head>

<body id="top">
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
                        <a class="nav-link  active" href="Attack_on_Titan_storyPage.php">Story</a>
                    </li>
                    <li class="nav-item m-auto">
                        <a class="nav-link" href="Attack_on_Titan_rolePage.php">Character</a>
                    </li>
                    <li class="nav-item m-auto">
                        <a class="nav-link" href="翻牌GAME intro.php">Game</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="col-10 m-auto ">
            <div class="text-center">
                <a class="text-danger text-light m-3" href="#" onclick=" slideChange(1)">Introduction</a>
                <a class="text-danger text-light m-3" href="#" onclick=" slideChange(2)">Season 1</a>
                <a class="text-danger text-light m-3" href="#" onclick=" slideChange(3)">Season 2</a>
                <a class="text-danger text-light m-3" href="#" onclick=" slideChange(4)">Season 3</a>
            </div>
            <div class="tabContents">
                <div class="tabSlide active" id="tab1">
                    <img src="img/web/storyIntro_scene.png" alt="">
                    <div class="p-5">
                        《進擊的巨人》的故事描述，百年前世界莫名出現神秘的巨人怪物，不斷殘忍食人，人類幾乎無法與之對抗，最後人類建造了三道寬 3 公尺、高 50
                        公尺的高聳圍牆，百年來未有巨人攻破，人們漸漸習慣牆內的生活，麻木於和平，害怕冒險與改變，直到 845 年，最外層的瑪利亞之牆，被身高超過 60m 的超大型巨人，踢破城牆，無數巨人湧入城鎮，10
                        歲的艾連，親眼見到母親被巨人一口咬碎的慘劇，艾連發誓要消滅所有巨人。
                    </div>


                </div>
                <div class="tabSlide" id="tab2">
                    <img src="img/web/storySeason1_scene.jpg" alt="">
                    <div class="p-5">
                        艾爾文帶領的巨人大群向鎧甲巨人襲擊。在宛如地獄般的景象中，調查兵團設法成功奪回了艾倫。但是，鎧甲巨人向躲避的士兵們投擲其他巨人。5年前的那一天，埃倫和三笠因為受到衝擊而落馬，出現在他們面前的是吃了艾倫的母親·卡羅拉的巨人。為了用自己的手解决與仇人的因緣，艾倫想成為巨人戰鬥……。
                    </div>
                    <div class="d-flex flex-wrap">
                        <?php
                        $result = mysqli_query($link, "select episode,episodeNum,season,titleCH,imgSrc from `attack_on_titan_episode`");
                        while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) : ?>
                            <?php if ($row["season"] == "1") : ?>
                                <div class=" text-dark">
                                    <div class="card m-2">
                                        <img class="card-img-top " src="<?= $row["imgSrc"]; ?>" alt="Card image cap">
                                        <div class="card-body">
                                            <p class="text-center">
                                                <?= $row["episode"] . "." . $row["titleCH"]; ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    </div>
                </div>
                <div class="tabSlide" id="tab3">
                    <img src="img/web/storySeason2_scene.jpg" alt="">
                    <div class="p-5">
                        牆外的真相和巨人的真面目明了了。得知此事的歷史和兵團幹部們做出了一個決斷。然後艾倫想著牆外……。
                    </div>
                    <div class="d-flex flex-wrap">
                        <?php
                        $result = mysqli_query($link, "select episode,episodeNum,season,titleCH,imgSrc from `attack_on_titan_episode`");
                        while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) : ?>
                            <?php if ($row["season"] == "2") : ?>
                                <div class=" text-dark">
                                    <div class="card m-2">
                                        <img class="card-img-top" src="<?= $row["imgSrc"]; ?>" alt="Card image cap">
                                        <div class="card-body">
                                            <p class="card-text text-center">
                                                <?= $row["episode"] . "." . $row["titleCH"]; ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    </div>
                </div>
                <div class="tabSlide" id="tab4">
                    <img src="img/web/storySeason3_scene.jpg" alt="">
                    <div class="p-5">


                        牆外的真相和巨人的身份被揭示出來。知道這一點後，歷史和軍團的高管就做出了決定。艾倫在想在牆外...
                    </div>
                    <div class="d-flex flex-wrap">
                        <?php
                        $result = mysqli_query($link, "select episode,episodeNum,season,titleCH,imgSrc from `attack_on_titan_episode`");
                        while ($row = mysqli_fetch_assoc($result)) : ?>
                            <?php if ($row["season"] == "3") : ?>
                                <div class=" text-dark">
                                    <div class="card m-2">
                                        <img class="card-img-top" src="<?= $row["imgSrc"]; ?>" alt="Card image cap">
                                        <div class="card-body">
                                            <p class="card-text text-center">
                                                <?= $row["episode"] . "." . $row["titleCH"]; ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
            <div id="pointup">
                <a href="#top">
                    <img style="height:50px ;" src="img/web/upIcon.svg" alt="">
                    <img src="img/web/指標向上1.png" style="width: 35%;" alt="">
                </a>
            </div>
        </div>
        <script>
            // var tabSlide = document.querySelectorAll(".tabSlide");
            var tabSlide = document.getElementsByClassName("tabSlide");

            console.log(tabSlide);

            function slideChange(i) {
                $(".tabSlide").removeClass('active');
                $(`#tab${i}`).addClass('active');
            };
        </script>
    </div>

</body>

</html>