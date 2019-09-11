<?php

function getAge($birthDate) {
//explode the date to get month, day and year, NOTE: get array
$birthDate = explode("-", $birthDate);
//get age from date or birthdate REVISED FORM
$age = (date("md", mktime(0, 0, 0, $birthDate[1], $birthDate[0], $birthDate[2])) > date("md") 
        ? ((date("Y") - $birthDate[2]) - 1) 
        : (date("Y") - $birthDate[2]));
return $age;
}
?>
<!-- This is the about page, abbrevation AB -->
<html lang="en-us">
    <head>
        <?php
        $pageName = "About";
        $googleFonts = array("Roboto:100,300,400,900","Montserrat:300","Open Sans:300,400,700");
        $cssFiles = array("Font Awesome", "css/index.css", "css/custom.css", "css/template.css");
        include "php/headinformation.php";
        ?>
        <style>
            :root {
                --pictextrow-height: 300px;
                --grid-width: 440px;
                --grid-column-gap: 40px;
                --grid-row-gap: 100px;
            }
        </style>
    </head>

    <body>
        <?php $sticky = true; require "php/header.php" ?>
        <div class="content">
            <div class="blackbg">
                <div class="wrapper">
                    <div class="recttxt">
                        <h1> Something about me </h1>
                        <h2> Just a bunch of things you might not know about me. </h2>
                        <p> I am Joachim Dekker. I am <?php echo getAge("30-08-2003")?> years old and I live in The Netherlands. 
                            As you might have already seen, I really like English so I wrote my website in English.
                            If you scroll down, you will unveal a lot of cool little things about me, you might not know. </p>
                    </div>
                </div>
            </div>
            <div class="whitebg">
                <div class="pictext-column">
                    <div class="pictext-row whitebg">
                        <div class="pictext-row-text heightAdjustMaster">
                            <h1> Volleyball </h1>
                            <p>
                                Volleyball is the sport I play. I really like playing it. It helps me leaving the <i>world of school and stress </i> behind.
                                The sport is pretty simple, you just try to smash and let the ball touch the opponents ground.
                                I won't say I am good, as I've played it for one year now, but I keep working on a better technique.
                            </p>
                        </div>
                        <div class="pictext-row-img-wrapper heightAdjustChild">
                            <div class="pictext-row-img" id="AB-Pic1"></div>
                        </div>
                    </div>
                    <div class="pictext-row whitebg">
                        <div class="pictext-row-img-wrapper pictext-row-img-left heightAdjustChild">
                            <div class="pictext-row-img" id="AB-Pic2"></div>
                        </div>
                        <div class="pictext-row-text heightAdjustMaster">
                            <h1> Building Websites </h1>
                            <p>
                                I really like building Websites. It's my thing and I try to do it everyday. When I am building my Websites, I try to
                                keep it as homemade as posible: This means I don't use external libraries such as jquery, or Bootstrap for CSS. Because of
                                this, I have a lot of homemade things like my own template, a custom made PHP plugin for head information. I am planning on making a
                                seperate page for all this stuff, so the public can use it too! Aside, one of my jobs is to build websites. I am currently working on 
                                the webpage of my uncle. Unfortunately, the page isn't ready for public yet.
                            </p>
                        </div>
                        <div class="pictext-row-img-wrapper pictext-row-img-left-mobile">
                            <div class="pictext-row-img" id="AB-Pic2"></div>
                        </div>
                    </div>
                    <div class="pictext-row whitebg">
                        <div class="pictext-row-text heightAdjustMaster">
                            <h1>School</h1>
                            <p>
                                Off course I don't really like going to school. Contrariwise I love Informatica, it's the subject I always look forward to.
                                As for now, I am a member of 4V1. In my opinion, it is one of the best classes ever. Because I am in the forth grade, I get
                                a lot of more homework. If you want to see my homework for Informatica, please click the button below or go to the page via the
                                navigation bar.
                            </p>
                        </div>
                        <div class="pictext-row-img-wrapper heightAdjustChild">
                            <div class="pictext-row-img" id="AB-Pic3"></div>
                        </div>
                    </div>
                </div>
            </div>
            <script src="js/heightadjust.js"></script>
            <div class="head centre beigebg">
                <h1>Me and my Friends</h1>
            </div>
            <!--div class="personShower beigebg" id="AB-personShower"-->
            <div class="grid g3 beigebg" id="AB-personShower">
                    <!--div class="grblock">
                        <div class="person blackbg">
                            <div class="img shadow" id="AB-Pic5"></div>
                            <h1>Marit</h1>
                            <h2>The friend</h2>
                            <p> This is Marit, one of my friends.
                                She is <?php echo getAge("14-01-2004")?> years old. The things she likes to do are watching movies and series
                                and playing volleyball. She is in my team.
                            <p class="centre"> <b>Description in one word:</b> <i>Nice</i> </p>
                        </div>
                    </div-->
                    <div class="grblock">
                        <div class="person blackbg">
                            <div class="img shadow" id="AB-Pic4"></div>
                            <h1>Joachim Dekker</h1>
                            <h2>The Creator</h2>
                            <p> Hi, it's me! My name is Joachim Dekker and I
                                am the creator of this website. I am <?php echo getAge("30-08-2003")?> years old and I really like reading books,
                                playing volleyball and computergames and programming websites.</p>
                            <p class="centre"> <b>Says this a lot:</b> <i>I think I failed this test</i> </p>
                        </div>
                    </div>
                    <div class="grblock">
                        <div class="person blackbg">
                            <?php
                            if($_SESSION) ?>
                            <div class="img shadow" id="AB-Pic6"></div>
                            <h1>Thijs Boerefijn</h1>
                            <h2>The Bugfixer</h2>
                            <p> This is Thijs, he is one of my friends. Thijs helps me with my website. Well.. I help him with his website and in return,
                                he checks my code for stupid faults. Thijs is <?php echo getAge("23-12-2002")?> years old and he likes gaming (with me) and
                                playing volleyball.</p>
                            <p class="centre" id="AB-personThijs"> <b>Favourite colour:</b> <i>Blue</i> </p>
                        </div>
                    </div>
            </div>
            <!--/div-->
        </div>
        <?php include "php/footer.php" ?>
    </body>
</html>	