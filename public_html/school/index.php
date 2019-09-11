<html lang="en-us">
    <head>
        <?php
        define("DOCUMENT_ROOT", $_SERVER['DOCUMENT_ROOT']."/users/36523/public_html/");
        $pageName = "School";
        $cssFiles = array("Font Awesome");
        $googleFonts = array("Roboto:300,400,700,900","Open Sans:300,400,700");
        include (DOCUMENT_ROOT."php/headinformation.php");
        ?>
        <style>
            :root {
                --grid-width: 300px;
                --grid-gap: 80px;
            }
        </style>
    </head>
    <body>
        <?php $sticky = false; include (DOCUMENT_ROOT."php/header.php"); ?>
        <div class="imageHead beigeBG" id="SI-Head">
            <div class="imageHeadImage" id="SI-Pic1"></div>
            <div class="imageHeadText whitebg">
                <h1>School</h1>
                <h2>The Gate to the Future</h2>
                <p>
                    On this page, you can select a subject I have or had during my schooltime.
                    Just click on the button of the subject you want to know more about to go there.
            </div>
        </div>
        <div class="grid g3" id="SI-Picker">
            <div class="grblock centre" id="SI-Picker-Quizlet">
                <div class="head">
                    <h1>Quizlet</h1>
                </div>
                <p> My second and third grade language tests are documented here. I mean, almost all of them and you can study them too!
                    Click on the link below to learn more.
                </p>
                <button class="btn black">Higher my grades</button>
            </div>
            <div class="grblock centre blackbg" id="SI-Picker-Informatica">
                <h1>Informatica</h1>
                <h2>In English </h2>
                <p> Check out the subject where it all came from: Informatica. It is
                    in my opinion the best subject of the world! Click the button below to
                    take a look at the study guide and learn more about my site.  </p>
                    <button class="btn black" onclick="window.location.href = 'vakken/informatica.php'">Take me there!</button>
                    <button class="btn lightgreen" onclick="window.open('http://informatica.ghlyceum.nl/users/36523/webcontent/Informatica-Studieplanner-4VWO-2018-2019.pdf')"><i class="fas fa-book-open"></i> Study Guide</button>
            </div>
            <div class="grblock centre beigebg">
                <h1>PTA and PTB</h1>
                <h2>In dutch</h2>
                <p> Click the download button below to take a look at
                    the PTA and PTB of our school. It is document where you can
                    find a lot of the upcoming tests and the weight of them. </p>
                <button class="btn black" onclick="window.open('https://www.groenehartscholen.nl/wp-content/uploads/sites/3/2018/09/PTA-PTB-2018-2019-cohort-4vwo-18-21.pdf','download')"><i class="fas fa-file-download"></i> Download here</button>
            </div>
        </div>
        <?php include (DOCUMENT_ROOT."php/footer.php");?>
    </body> 
</html>