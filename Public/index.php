<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/style.css">
</head>
<body>
    
    <header>
        <!-- <div id="ecusson" class="centre">Corantin SPEE</div>
        <nav class="navigation">
            <a class="navBtn centre" href="#home">Home</a>
            <a class="navBtn centre" href="#formation">Formations</a>
            <a class="navBtn centre" href="#experiences">Experiences/Jobs</a>
            <a class="navBtn centre" href="#portfolio">Port-folio</a>
            <a class="navBtn centre" href="#contact">Me contacter</a>
        </nav> -->
    </header>
    <?php
    require_once(__DIR__.'/../src/php/menu.php');
    require_once(__DIR__.'/../src/php/home.php');
    require_once(__DIR__.'/../src/php/formation.php');
    require_once(__DIR__.'/../src/php/experiences.php');
    require_once(__DIR__.'/../src/php/portfolio.php');
    require_once(__DIR__.'/../src/php/contact.php');?>
    <!-- <section id="home">
        <div class="sectionTitle">Qui suis-je ?</div>
        <div class="ligne maxwidth spaceevenly">
            <div class="caractere">
                <img src="/img/support.svg" alt="">
                <h2>Teamwork</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, fugiat commodi nesciunt optio suscipit quisquam! Doloribus quae aperiam hic aliquam nemo, aut accusamus sequi expedita numquam ipsa dolorem facere provident!</p>
            </div>
            <div class="caractere">
                <img src="/img/lightbulb.svg" alt="">
                <h2>Creativity</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, fugiat commodi nesciunt optio suscipit quisquam! Doloribus quae aperiam hic aliquam nemo, aut accusamus sequi expedita numquam ipsa dolorem facere provident!</p>
            </div>
            <div class="caractere">
                <img src="img/" alt="">
                <h2>Persistent</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, fugiat commodi nesciunt optio suscipit quisquam! Doloribus quae aperiam hic aliquam nemo, aut accusamus sequi expedita numquam ipsa dolorem facere provident!</p>
            </div>
        </div>
    </section> -->
    <!-- <section id="formation">
        <div class="sectionTitle">Formations</div>
            <div class="container">
                <div class="prev">
        	        <div class="arrow-left"></div>
                </div>
                <ul class="slider">
                    <li class="visible">
                        <img src="img/ynov.png" alt="" />
                        <p>27 rue raoul servant 69007</p>
                    </li>
                    <li >
                        <img src="img/lamache.jpg" alt="" />
                        <p>75 boulevard Jean XXIII 69008 Lyon</p>
                    </li>
                </ul>
                <div class="next">
        	        <div class="arrow-right"></div>
                </div>
            </div>    
    </section> -->
    <!-- <section id="experiences">
        <div class="sectionTitle">Experiences/Jobs</div>
    </section> -->
    <!-- <section id="portfolio">
        <div class="sectionTitle">Portfolio</div>
    </section> -->
    <!-- <section id="contact">
        <div class="ligne maxwidth spaceevenly">
            <div class="sectionTitle">Contact</div>
            <div class="social">
                <img src="/img/opened-email-envelope.svg">Envoyez un mail</a>
            </div>
            <div class="social">
                <img src="/img/smartphone-call.svg">0619485781</a></li>
            </div>
            <div class="social">
                <a  href="https://www.linkedin.com/in/corantin-spee-69950b11b/"><img src="/img/in.png" class="logo" ></a>
                <a  href=""><img src="/img/facebook.svg" class="logo"></a>   
            </div>
        </div>   
        </section> -->
<script src="app.js"></script>
</body>
</html>