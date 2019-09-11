<?php
    function multipleCheck(array $goodValues, $variable) {
        for($i = 0; $i < count($goodValues);$i++){
            if($goodValues[$i] == $variable) {
                return true;
            }
        }
        return false;
    }
?>

<!DOCTYPE html>
<html lang="en-us">
    <head>
    <?php
        define("DOCUMENT_ROOT", $_SERVER['DOCUMENT_ROOT']."/users/36523/public_html/");
        $pageName = "Dashboard";
        $cssfiles = array("fontawesome");
        $googleFonts = array("Roboto:300,400,700,900");
        include (DOCUMENT_ROOT."php/headinformation.php");
    ?>
    <style>
        :root {
            --grid-width: 400px;
        }
    </style>
    </head>
    <body>
<?php include "php/requireLogin.php" ?>  
<?php $sticky = false; include "php/header.php"?>
<div class="beigebg" id="Welcome">
    <div class="recttxt" id="welcomeTXT">
        <h1> Welcome back,<br> <?php echo $_SESSION["showname"]?></h1>
        <h2>Some things you can do while you are logged in:</h2>
    </div>
    <div class="grid g2" id="DB-grid">
        <?php if (multipleCheck(array("regular"), $_SESSION["role"])) {
            echo "<div class=\"whitebg grblock centre\"> <div class=\"grblock-text\">
            <h1>Nothing Seems here...</h1>
            <p>Content yet to be added, please come back another time. <br>
                <b>Update:</b> Soundboard is in the work. 
            </p> </div></div>
            <script>
            document.getElementById('DB-grid').classList.remove('g2');
            document.getElementById('DB-grid').classList.add('g1');
            </script>";
        } ?>
        <?php if (multipleCheck(array("premium", "admin"), $_SESSION["role"])) {
            echo "<div class=\"whitebg grblock centre\"> <div class=\"grblock-text\">
            <h1>Ciriculum Vitae</h1>
            <p>If you are looking for my CV, please click the button below to
                get access to my Ciriculum Vitae.
            </p> </div> <div class=\"grblock-btn\">
            <button onclick=\"window.location.href='https://drive.google.com/file/d/1YfYrjM35RLP-QYp6sZFagtISAJVESM3K/view?usp=sharing'\" class=\"black btn\">About me</button>
        </div></div>";
        } ?>
        <?php if (multipleCheck(array("premium", "admin"), $_SESSION["role"])) {
            echo "<div class=\"blackbg grblock centre\"> <div class=\"grblock-text\">
            <h1>Gallery</h1>
        <p> Check out my gallery full of foto's, plugins and stylesheets. Use them for a project you
            have been working on for a long time or just for fun! 
        </p> </div> <div class=\"grblock-btn\">
        <button class=\"disabled btn\"> Coming Soon </button>
    </div></div>";
        } ?>
        <?php if (multipleCheck(array("admin"), $_SESSION["role"])) {
            echo " <div class=\"blackbg grblock centre\"> <div class=\"grblock-text\">
            <h1>Create a new account</h1>
            <p>Click the link below to make a brand new user account for this website.</p> </div> <div class=\"grblock-btn\">
            <button onclick=\"window.location.href='php/login/register.php'\" class=\"white btn\">New Account</button>
        </div></div>";
        } ?>
        <?php if (multipleCheck(array("admin"), $_SESSION["role"])) {
            echo "<div class=\"whitebg grblock centre\"> <div class=\"grblock-text\">
            <h1>The Database</h1>
            <p>Click the button below to go the database
            of this specific server. 
            </p> <div class=\"grblock-btn\">
            <button onclick=\"window.location.href='http://".$_SERVER["SERVER_NAME"]."/phpmyadmin'\" class=\"black btn\">Database</button>
        </div></div></div>";
        } ?>
        </div>
    <div class="goBack">
        <h2>Just take me back to home</h2>
        <div class="goBack-btns">
            <button onclick="window.location.href='index.php'" class="black btn" id="goBack">Explore the whole site</button>
            <button onclick="window.location.href='php/login/logout.php'" class="red btn" id="Logout">Logout</button>
        </div>
    </div>
</div>
</body>
</html>