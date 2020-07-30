<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attack on Titan Role,</title>

    <link rel="stylesheet" href="_css/bootstrap.min.css">
    <script src="_js/jquery.min.js"></script>
    <script src="_js/popper.min.js"></script>
    <script src="_js/bootstrap.min.js"></script>
    <link rel=stylesheet type="text/css" href=" css/Attack_on_Titan_rolePage.css">
</head>


<body>
    <div class="rolePage row bg-info">
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
                        <a class="nav-link active" href="Attack_on_Titan_rolePage.php">Character</a>
                    </li>
                    <li class="nav-item m-auto">
                        <a class="nav-link" href="翻牌GAME intro.php">Game</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="container role col-8">

            <div class="row">
                <div class="myColumn m-auto text-center">
                    <img src="img/官網圖/role_eren.png" style="width:80%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
                    <span>Eren</span>
                </div>
                <div class="myColumn">
                    <img src="img/官網圖/role_sasha.png" style="width:80%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
                    <span>Sasha</span>
                </div>
                <div class="myColumn">
                    <img src="img/官網圖/role_armin.png" style="width:80%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
                    <span>Armin</span>
                </div>
                <div class="myColumn">
                    <img src="img/官網圖/role_mikasa.png" style="width:80%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
                    <span>Mikasa</span>
                </div>
                <div class="myColumn">
                    <img src="img/官網圖/role_erwin.png" style="width:80%" onclick="openModal();currentSlide(5)" class="hover-shadow cursor">
                    <span>Erwin</span>
                </div>
                <div class="myColumn">
                    <img src="img/官網圖/role_jean.png" style="width:80%" onclick="openModal();currentSlide(6)" class="hover-shadow cursor">
                    <span>Jean</span>

                </div>
                <div class="myColumn">
                    <img src="img/官網圖/role_krista.png" style="width:80%" onclick="openModal();currentSlide(7)" class="hover-shadow cursor">
                    <span>Krista</span>
                </div>
                <div class="myColumn">
                    <img src="img/官網圖/role_levi.png" style="width:80%" onclick="openModal();currentSlide(8)" class="hover-shadow cursor">
                    <span>Levi</span>
                </div>
                <div class="myColumn">
                    <img src="img/官網圖/role_connie.png" style="width:80%" onclick="openModal();currentSlide(9)" class="hover-shadow cursor">
                    <span>Connie</span>
                </div>
                <div class="myColumn">
                    <img src="img/官網圖/role_zoe.png" style="width:80%" onclick="openModal();currentSlide(10)" class="hover-shadow cursor">
                    <span>Zoe</span>
                </div>
            </div>
            <div id="myModal" class="modal">
                <span class="close cursor" onclick="closeModal()">&times;</span>
                <div class="modal-content">
                    <div class="mySlides position-relative text-left">
                        <!-- <div class="numbertext">1 / 10</div> -->
                        <img src="img/角色/slide/detail_eren.jpg" style="width:100%">

                        <span class="mySlidesContent position-absolute">
                            <p>Eren</p> 瀕死之際與其同父異母之兄吉克接觸，兩人的意識共同抵達艾爾迪亞人的「道路」交會的座標，之後成功發動了「地鳴」。
                        </span>
                    </div>
                    <div class="mySlides">
                        <!-- <div class="numbertext">2 / 10</div> -->
                        <img src="img/角色/slide/detail_sasha.jpg" style="width:100%">
                        <span class="mySlidesContent position-absolute">
                            <p>Sasha</p>第104期訓練兵團第9名畢業。
                            黑髮（動畫改成棕髮）馬尾的少女。出身貧寒，家裡專事打獵，反對在瑪利亞之牆遭破壞後，族人因進入森林的外人來搶奪土地和糧食而放棄打獵，對一族的狩獵傳統感到驕傲。
                        </span>

                    </div>
                    <div class="mySlides">
                        <!-- <div class="numbertext">3 / 10</div> -->
                        <img src="img/角色/slide/detail_armin.jpg" style="height:100%;">
                        <span class="mySlidesContent position-absolute">
                            <p>Armin</p> 本作第二男主角兼旁白， 艾連與米卡莎兒時的玩伴，名字為爺爺所取。十分膽小的金髮少年，幼年時曾多次被米卡莎、艾連所救，視他們為恩人以及親人。對牆外的世界抱有強烈的憧憬，而啟發艾連對於走出圍牆的渴望。
                        </span>

                    </div>
                    <div class="mySlides">
                        <!-- <div class="numbertext">4 / 10</div> -->
                        <img src="img/角色/slide/detail_mikasa.jpg" style="width:100%">
                        <span class="mySlidesContent position-absolute">
                            <p>Mikasa</p> 本作女主角，身為艾連的青梅竹馬，雙親死後，被葉卡夫婦收養，對艾連有異於尋常的執念和保護慾。
                            擁有優秀的戰鬥技術，被認為是百年難得一見的天才，伊安班長評價，一人的表現就足以抵過100名士兵。畢業後，為了和艾連一起行動加入調查兵團。
                        </span>

                    </div>
                    <div class="mySlides">
                        <!-- <div class="numbertext">5 / 10</div> -->
                        <img src="img/角色/slide/detail_erwin.jpg" style="width:100%">
                        <span class="mySlidesContent position-absolute">
                            <p>Erwin</p> 調查兵團第13任團長。擁有過人的判斷力以及指揮能力
                            。可以為了牆內全人類的生存，選擇捨棄100個同伴的性命，
                            是可以捨棄最重要的東西的人，雖然看似冷酷無情，但
                            正因如此才可以被以里維為首的部下們深深信賴。
                        </span>

                    </div>
                    <div class="mySlides">
                        <!-- <div class="numbertext">6 / 10</div> -->
                        <img src="img/角色/slide/detail_jean.jpg" style="width:100%">
                        <span class="mySlidesContent position-absolute">
                            <p>Jean</p> 第104期訓練兵團第6名畢業（成績於艾連之後）。進入訓練兵團初期以加入憲兵團為志願。
                            擅長充分運用立體機動裝置的性能，同期生經常向他請教。因背影與艾連十分相似，因而時常喬裝成艾連，被艾連嫌「那個馬臉跟我長的一點都不像」。

                        </span>

                    </div>
                    <div class="mySlides">
                        <!-- <div class="numbertext">7 / 10</div> -->
                        <img src="img/角色/slide/detail_krista.jpg" style="width:100%">
                        <span class="mySlidesContent position-absolute">
                            <p>Krista</p>第104期訓練兵團第10名畢業。
                            金髮大眼、身材嬌小的少女。在托洛斯特區攻防戰中與尤米爾同為訓練兵團第41班。在莎夏跑到只剩一口氣時，與尤米爾一同遞食物以及水給她。為萊納愛慕的對象。
                        </span>

                    </div>
                    <div class="mySlides">
                        <!-- <div class="numbertext">8 / 10</div> -->
                        <img src="img/角色/slide/detail_levi.jpg" style="width:100%">
                        <span class="mySlidesContent position-absolute">
                            <p>Levi</p> 調查兵團的兵長，同時是兵團特別作戰小組班長。
                            能力在米卡莎之上。身材不高（米卡莎稱之為「死矮子」）
                            卻擁有「人類最強的士兵」之稱號。斬擊時為一手正常持刀，
                            一手反手持刀。一瞬間便可以秒殺兩個巨人，
                        </span>

                    </div>
                    <div class="mySlides">
                        <!-- <div class="numbertext">9 / 10 </div> -->
                        <img src="img/角色/slide/detail_connie.jpg" style="width:100% height:100%;">
                        <span class="mySlidesContent position-absolute">
                            <p>Connie</p> 一開始以加入憲兵團為志願，但畢業當晚，被艾連的演說感動後改以加入調查兵團為志願。
                            平頭的小個子少年。平衡感良好，懂得在行動時加入一些小聰明。但頭腦運轉遲鈍，經常在作戰時判斷錯誤。

                        </span>

                    </div>
                    <div class="mySlides">
                        <!-- <div class="numbertext">10 / 10</div> -->
                        <img src="img/角色/slide/detail_zoe.jpg" style="height:100%;">
                        <span class="mySlidesContent position-absolute">
                            <p>Zoe</p> 調查兵團第四分隊長，對巨人有著意外的熱忱。
                            據其所說自己以前也是對吃掉同伴的巨人抱持著恨意，
                            但在某次作戰中踢開巨人的頭時，意外地發現巨人之軀體異常的輕，
                            對此深深抱持著疑問，並想找出其中的原因。
                        </span>

                    </div>
                    <a class="prev h1 text-primary" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next h1 text-primary" onclick="plusSlides(1)">&#10095;</a>
                </div>
                <div class="d-flex offset-1 col-10">
                    <div class="myColumn">
                        <img class="demo cursor" src="img/官網圖/role_eren.png" style="width:80%" onclick="currentSlide(1)">
                    </div>
                    <div class="myColumn">
                        <img class="demo cursor" src="img/官網圖/role_sasha.png" style="width:80%" onclick="currentSlide(2)">
                    </div>
                    <div class="myColumn">
                        <img class="demo cursor" src="img/官網圖/role_armin.png" style="width:80%" onclick="currentSlide(3)">
                    </div>
                    <div class="myColumn">
                        <img class="demo cursor" src="img/官網圖/role_mikasa.png" style="width:80%" onclick="currentSlide(4)">
                    </div>
                    <div class="myColumn">
                        <img class="demo cursor" src="img/官網圖/role_erwin.png" style="width:80%" onclick="currentSlide(5)">
                    </div>
                    <div class="myColumn">
                        <img class="demo cursor" src="img/官網圖/role_jean.png" style="width:80%" onclick="currentSlide(6)">
                    </div>
                    <div class="myColumn">
                        <img class="demo cursor" src="img/官網圖/role_krista.png" style="width:80%" onclick="currentSlide(7)">
                    </div>
                    <div class="myColumn">
                        <img class="demo cursor" src="img/官網圖/role_levi.png" style="width:80%" onclick="currentSlide(8)">
                    </div>
                    <div class="myColumn">
                        <img class="demo cursor" src="img/官網圖/role_connie.png" style="width:80%" onclick="currentSlide(9)">
                    </div>
                    <div class="myColumn">
                        <img class="demo cursor" src="img/官網圖/role_zoe.png" style="width:80%" onclick="currentSlide(10)">
                    </div>
                </div>


                <script>
                    function openModal() {
                        document.getElementById("myModal").style.display = "block";
                    }

                    function closeModal() {
                        document.getElementById("myModal").style.display = "none";
                    }
                    var slideIndex = 1;
                    showSlides(slideIndex);

                    function plusSlides(n) {
                        showSlides(slideIndex += n);
                    }

                    function currentSlide(n) {
                        showSlides(slideIndex = n);
                    }

                    function showSlides(n) {
                        var i;
                        var slides = document.getElementsByClassName("mySlides");
                        var dots = document.getElementsByClassName("demo");
                        var captionText = document.getElementById("caption");
                        if (n > slides.length) {
                            slideIndex = 1
                        }
                        if (n < 1) {
                            slideIndex = slides.length
                        }
                        for (i = 0; i < slides.length; i++) {
                            slides[i].style.display = "none";
                        }
                        for (i = 0; i < dots.length; i++) {
                            dots[i].className = dots[i].className.replace(" active", "");
                        }
                        slides[slideIndex - 1].style.display = "flex";
                        dots[slideIndex - 1].className += " active";
                        captionText.innerHTML = dots[slideIndex - 1].alt;
                    }
                </script>
            </div>
        </div>
    </div>
    </div>
</body>

</html>