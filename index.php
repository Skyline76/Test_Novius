<?php ?>
<!DOCTYPE html>
<html>
<head>
	<title>Novonut</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="shortcut icon" href="assets/img/donut.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>
<body onload="initClick();">

<div id="container">
    <div id="nav">
        <div id="nav-right">
            <div id="logo">
                <img src="assets/img/novonut.png">
            </div>
            <div id="donut-select-small">
                <ul>
                    <li><a href="http://robinforest.fr" target="_blank">donut1</a></li>
                    <li><a href="http://robinforest.fr" target="_blank">donut2</a></li>
                    <li><a href="http://robinforest.fr" target="_blank">donut3</a></li>
                </ul>
            </div>
        </div>
        <div id="nav-bar">
            <div id="nav-up">
                <div id="donut-select">
                    <ul>
                        <li><a href="http://robinforest.fr" target="_blank">donut1</a></li>
                        <li><a href="http://robinforest.fr" target="_blank">donut2</a></li>
                        <li><a href="http://robinforest.fr" target="_blank">donut3</a></li>
                    </ul>
                </div>
                <div id="menu-button">
                    <a href="CV_ROBIN_BATARD_FOREST.pdf" download><img src="assets/img/menudonutdl.png"></a>
                </div>
                <div id="infos">
                    <ul>
                        <li><a href="http://robinforest.fr" target="_blank">Nos Donuts</a></li>
                        <li><a href="http://robinforest.fr" target="_blank">Glassages</a></li>
                        <li><a href="http://robinforest.fr" target="_blank">Contact</a></li>
                        <li><a href="http://robinforest.fr" target="_blank">Infos pratiques</a></li>
                    </ul>
                </div>
                <div id="contact">
                    <i class="fab fa-twitter"></i>
                    <i id="fb" class="fab fa-facebook"></i>
                    <button><b><a href="http://robinforest.fr" target="_blank">RESERVER</a><b></button>
                </div>
            </div>
            <div id="menu">
                <ul>
                    <li><a href="http://robinforest.fr" target="_blank">Menu</a></li>
                    <li><a href="http://robinforest.fr" target="_blank">Donut du mois</a></li>
                    <li><a href="http://robinforest.fr" target="_blank">Rendez-vous</a></li>
                    <li><a href="http://robinforest.fr" target="_blank">Promos</a></li>
                    <li><a href="http://robinforest.fr" target="_blank">Vos préférés</a></li>
                </ul>
            </div>
        </div> 
    </div>
    <div class="carousel">
        <div class="css-carousel">
            <img class="css-img" src="assets/img/donutslide3.png">
            <img class="css-img" src="assets/img/donutslide.png">
            <img class="css-img" src="assets/img/donutslide2.png">
        </div>
    </div>
    <div id="booking">
        <div class="nice-title">
            <h3>Réservati<span>o</span>n</h3>
        </div>
        <div id="carousel-book">
            <div id="css-carousel-book">
            </div>
            <div id="arrow-right">
                <i class="fas fa-angle-right"></i>
            </div>
            <div id="arrow-left">
                <i class="fas fa-angle-left"></i>
            </div>
        </div>
        
    </div>
</div>

</body>

<script src="js/script.js"></script>

</html>