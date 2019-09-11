<?php if(isset($_SESSION["JDSite956_loggedin"]) && $_SESSION["JDSite956_loggedin"] === true){
    echo "wtf";
} ?>
<!DOCTYPE html>
<html lang="en-us">
    <head>
        <?php
            $pageName = "Home"; 
            $googleFonts = array("Roboto:100,300,400,900","Montserrat:300","Roboto Mono:400","Open Sans:300,400,700");
            $cssFiles = array("Font Awesome", "css/index.css","css/template.css");
            include "php/headinformation.php";
        ?>
    </head>
    <body>
        <?php $sticky = true; require "php/header.php" ?>
        <div class="content">
            <div class="welcome-sign">
                <div class="wrapper">
                    <div class="text-border">
                        <h1>WELCOME</h1>
                        <p>to this beautiful website of Joachim Dekker<br>about Joachim Dekker</p>
                    </div>
                </div>
            </div>

            <div class="break"></div>

            <div class="beigebg" id="about">
                <div class=wrapper>
                    <div class="prepare">
                        <div class="recttxt whitebg shadow">
                            <h1> This is me!</h1>
                            <h2> I am Joachim and I love coding</h2>
                            <p>
                            Hi! I am a young man that loves coding. This is the first <i>professional</i> website I have ever built.
                            My site has a lot of features you can try. Unfortunately due to privacy, some features are locked and need a password
                            to use. However, a couple of things you can check out are:
                            </p>
                            <div class="list">
                                <ul>
                                    <li>My Biography</li>
                                    <li>My Computer Science homework</li>
                                    <li>Projects I am working on
                                        <ul>
                                            <li>Note that each of these projects can be converted into a premium, password protected page at all times.</li>
                                        </ul></li>
                                    <li>My Quizlet profile!</li>
                                </ul>
                            </div>
                            <p>If you want to have access to Premium sections of this website, please contact me at <a href=mailto:36523@youscope.nl>36523@youscope.nl</a></p>
                        </div>    
                    </div>
                </div>
            </div>
            <div class="blackbg" id="projects">
            <div class="wrapper">
                <div class="head">
                    <h1>Projects</h1>
                    <h3>I have been working on some things lately...</h3>
                    <p> 
                    I really love code, so I am constantly experiencing with new things. These <i>things</i> are what I call projects. 
                    Beneath this section, you can see a couple of the biggest projects I am working on right now.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="column-3 column">
                    <div class="icon">
                        <i class="fas fa-server"></i>
                    </div>
                    <h2>Log in</h2>
                    <p> 
                        I have been trying to create a login system. For now, it is working.
                        The system features <i>roles</i>, good <i>password encryption</i> and <i>auto login</i>!
                        With the login system, I can create a lot of things, such as my CV on my website.
                        But I really want to create a system that can work with one time login codes.
                    </p>
                </div>
                <div class="column-3 column">
                    <div class="icon">
                            <i class="fas fa-compact-disc"></i>
                    </div>
                    <h2>Soundboard</h2>
                    <p>
                        A soundboard. Every website has to have some sound, right? So I want to create
                        a soundboard. I already got the sounds and the code. I just have to finish the CSS and that's it.
                        <br><i>Note</i>: The soundboad is only accesible with an account. This is due to all new privacy laws...
                    </p>
                </div>
                <div class="column-3 column">
                    <div class="icon">
                        <i class="fas fa-align-center"></i>
                    </div>
                    <h2>My Website</h2>
                    <p>
                        It maybe sounds simple, but it isn't. When I deliver my website to the web, I want it to be perfect.
                        This means it has to be responsive, every device has to read it. The next point is interactive. I love animating,
                        so my site must be full of animations.
                    </p>
                </div>
            </div>
        </div>

        <div class="whitebg" id="quote">
                <div class="quotetitle">
                    <span>Inspirational Quote </span>
                </div>
                <div class="quote">
                    <i class="fas fa-quote-left" id="startquote"></i>
                    <p>If internet explorer is brave enough to ask you to be the default browser, you're brave enough to ask out that girl</p>
                    <i class="fas fa-quote-right" id="endquote"></i>
                </div>
            </div>
        </div>
    </div>
    <?php include "php/footer.php" ?>
        </div>
    </body>
</html>