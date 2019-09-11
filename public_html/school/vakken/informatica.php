<html lang="en-us">
    <head>
        <?php
        define("DOCUMENT_ROOT", $_SERVER['DOCUMENT_ROOT']."/users/36523/public_html/");
        $pageName = "Computer Science";
        $cssfiles = array("fontawesome");
        $googleFonts = array("Roboto:300,400,500,700,900");
        require (DOCUMENT_ROOT . "php/headinformation.php");
        ?>
    </head>
    <body>
        <?php $sticky = true; include (DOCUMENT_ROOT."php/header.php"); ?> 
        <div class="content rdmbg">
            <div class="head centre">
                <h1>Computer Science</h1>
            </div>
            <div id="IN-Wrapper">
                <div class="maincontent">
                    <div class="card rdmbg-r shadow">
                        <h1> The site </h1>
                        <p> This site has been a great adventure. I started with some knowledge of HTML and CSS and built it to a, in my opinion, pretty site. My first
                            contact with HTML and CSS was in second grade. My Father and Mother got me a HTML and CSS book from Coder Dojo, a programming event I went to with my
                            classmates in the first grade. When I finished reading the book, I found it very confusing. Especially classes, I just didn't know how to use them. Now I use
                            them everyday. If I look back, I know I have improved a lot. You can click the button below to see one of my first sites.<br><br>

                            I have been putting my greatest effort and love in this site. I have used almost all the things you can use for your site: PHP, SQL, HTML, CSS and JS. Although I use PHP, everything
                            is written in HTML. The site is styled with CSS. This stands for Cascading Style Sheets. I even have my own template I use. This way, I can create new pages a lot easier than in the 
                            beginning. Javascript, or JS for short, is also used in this site. You won't see it, until you refresh this page a couple of times. Along the colour script, I also have a script that
                            is used for the <a href="../../about.php">About page</a>. It adjusts the height of the image to the text. This was a proces of trial and error. In the end, it was the browser that
                            broke the script... So if you are using Chrome Canary, my site may not work well.<br><br>

                            Besides, SQL is used in my login system. The only thing I haven't used is python. I really like python. It was the first programming language I
                            really understand. Looking back, I knew nothing but I enjoyed the python course I took. I recently came across a framework that uses python. 
                            When I create my next site, I really want to use that framework. I would be interesting to know how those things work.
                        </p>
                        <a class="nostyle" href="../../webcontent/oldWebsite">
                            <button class="btn rdmbgb"><i class="fas fa-globe-americas"></i> My Old Site</button>
                        </a>
                    </div>
                    <div class="card rdmbg-r shadow" id="IN-Homework">
                        <h1> Homework </h1>
                        <p> Even though I spent a lot of work into this site, I still had to make my homework. I don't really like homework, but the Computer Science
                            hoemwork was always fun to make. So here it is: The Answers of Chapter one and two. We haven't finished chapter three, so I haven't included that chapter. 
                        </p>
                        <a class="nostyle" href="../../webcontent/opdrachtenH1.pdf" target="_blank">
                            <button class="btn rdmbgb" id="IN-Btn1"><i class="fas fa-book"></i> Chapter 1</button>
                        </a>
                        <a class="nostyle" href="../../webcontent/opdrachtenH2.pdf" target="_blank">
                            <button class="btn rdmbgb" id="IN-Btn2"><i class="fas fa-book"></i> Chapter 2</button>
                        </a>
                    </div>
                </div>
                <div class="sidebar">
                    <div class="card rdmbg-r centre shadow">
                        <h2>PTA and PTB</h2>
                        <p> Click the button below to go to the
                            Computer Science section of the PTA instantly.
                        </p>
                        <button class="btn centre rdmbgb" onclick="window.open('https://www.groenehartscholen.nl/wp-content/uploads/sites/3/2019/04/PTA-PTB-2018-2019-cohort-4vwo-18-21.pdf#page=20','_blank')"> Show me that stuff</button>
                    </div>
                    <div class="card orangebg centre shadow">
                        <h2>The Book</h2>
                        <p> Computer Science has an online book. Click the button
                            to go to the online book.
                        </p>
                        <button class="btn centre orange" onclick="window.open('https://moodle.informatica-actief.nl', '_blank')"><i class="fas fa-book"></i> Online Book</button>
                    </div>
                    <div class="card greenbg centre shadow">
                        <h2>Study Guide</h2>
                        <p> The Study Guide of Computer Science is
                            very big. You want to check it out? Just click the
                            button below.
                        </p>
                        <button class="btn centre lightgreen" onclick="window.open('http://informatica.ghlyceum.nl/users/36523/webcontent/Informatica-Studieplanner-4VWO-2018-2019.pdf')"><i class="fas fa-book-open"></i> Study Guide</button>
                    </div>
                </div>
            </div>
        </div>     
        <?php include (DOCUMENT_ROOT."php/footer.php"); ?>
        <script src="../../js/randomBG.js"></script>
    </body> 
</html>