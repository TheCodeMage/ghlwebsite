<?php
if(!defined('ROOT')){
    define("ROOT", "https://informatica.ghlyceum.nl/users/36523/");
}
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    if(!isset($_SESSION["JDSite956_loggedin"]) || $_SESSION["JDSite956_loggedin"] !== true){
        $login = "Login"; 
        } else {
        $login = $_SESSION["username"];
    } 
    echo 
"
<div id=\"headNavBar\">
<div id='mobileNavOpacity'></div>
<div class='mobileNav blackbg' id='interSiteNav'>
    <h1>Links to other sites</h1>
    
    <h2>Friends</h2>
    <div class='mobileSubNav'>
    <a href='https://informatica.ghlyceum.nl/users/36367'>Thijs Boerefijn</a> 
    <a href='https://informatica.ghlyceum.nl/users/36612'>Bj&ouml;rn Muilenburg</a> 
    <a href='https://informatica.ghlyceum.nl/users/36456'>Pepijn Verhagen</a> 
    <a href='https://informatica.ghlyceum.nl/users/36395'>Luuc Kastelijn</a> 
    </div>
    <h2>School</h2>
        <div class='mobileSubNav'>
        <a href='https://groenehart.magister.net'>Magister</a>
        <a href='https://groenehartscholen.zportal.nl'>Zermelo</a>
        <a href='https://www.groenehartscholen.nl/lyceum'>Groenehart Lyceum</a>
        </div>
</div>
<div class='mobileNav blackbg' id='mobileNav'>
    <h1>Joachim Dekker</h1>
    <a href='".ROOT."index.php'>Home</a>
    <a href='".ROOT."about.php'>About</a>
    <h2>School</h2>
        <div class='mobileSubNav'>
            <a href='".ROOT."school/vakken/informatica.php'>Computer Science</a> 
            <a href='https://quizlet.com/TheSchoolMage' id='MobileQuizlet'>Quizlet</a> 
        </div>
    <h2>Projects</h2>
        <div class='mobileSubNav'>
            <a href='".ROOT."test.php'>PHP Playground</a> 
        </div>
    <div class=\"mobileNavLogin\">
        <i></i>
        <a href='".ROOT."login'>$login</a>
    </div>
</div>
    <div class='topbar' id='top'>
        <div class='wrapper'>
            <img src='".ROOT."pictures/JDLogo.svg' onclick='openMobileNav(350, \"interSiteNav\", \"left\")' alt='logo' class=\"clickable\">
            <h1>Joachim Dekker</h1>
                <i class='fas fa-bars mobileNavOpener' id='mobileNavOpener' onclick='openMobileNav(300, \"mobileNav\")'></i>
        </div>
    </div>
    <nav class='top-navigation-bar' id='header'>
        <div class='wrapper'>
            <a href='".ROOT."index.php'>Home</a>
            <div class='subnav'>
                <button class='subnavbtn clickable' onclick=\"window.location.href = '".ROOT."school'\">School <i class='fa fa-caret-down'></i></button>
                <div class='subnav-content'>
                    <div class='wrapper'>
                        <a href='https://quizlet.com/TheSchoolMage' target='_blank' id='quizlet'>
                            <img src='".ROOT."pictures/quizletlogo.png' alt='Quizlet'>
                        </a>
                        <a href='".ROOT."school/vakken/informatica.php'>Computer Science</a>
                    </div>
                </div>
            </div>
            <a href='".ROOT."about.php'>About</a>
            <div class='subnav'>
                <button class='subnavbtn'>Projects <i class='fa fa-caret-down'></i></button>
                <div class='subnav-content'>
                    <div class='wrapper'>
                    <a href='https://informatica.ghlyceum.nl/users/36523'>Project X</a>
                    <a href='".ROOT."test.php'>PHP Playground</a>
                    </div>
                </div>
            </div>
            <a href='".ROOT."login' id='login'> 
            $login
            </a>
        </div>
    </nav>
<script src=\"".ROOT."js/Mobile.js\"></script>";
if(isset($sticky) && $sticky !== false ) {
    echo "<script src=\"".ROOT."js/stickynav.js\"></script>";
}
echo "</div>";
 ?>

