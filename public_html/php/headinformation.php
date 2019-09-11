<?php
//--------------------------------// CUSTOMIZABLE VARIABLES //--------------------------------//
define("ROOT", "https://informatica.ghlyceum.nl/users/36523/");                                        // Define the Root of your server

define("websiteName", "36523");                                                     // Define your name
define("websiteNameConnector", "-" );                                               // And connector that connects the site name, and the page name

$standardPageName = true                                                            // Define if the standardPageName module is turned on or off. 
;                                                                                   // This module gets the name of the document and makes that as the page name.

define("standardFavicon", ROOT."pictures/favicon.png");                             // Define the standard Favicon. Only PNG's are currently supported.

define("standardCSS", array(                                                        // Define the CSS you 
    "https://use.fontawesome.com/releases/v5.6.1/css/all.css",
    ROOT."css/template.css",                                                        // want to have included
    ROOT."css/custom.css",                                                          // at all times.
    ROOT."css/header.css",
));
//--------------------------------//   END OF CUSTOMIZING   //--------------------------------//

//--------------------------------//   Variable Defining   //--------------------------------//
$css = "";
$js = "";
$fonts = "";
$websitePreTitle = websiteName." ".websiteNameConnector." ";

if(!isset($cssFiles)) {
    $cssFiles = array();
}


//--------------------------------//   Website Name   //--------------------------------//

if($standardPageName === true){
    if(!isset($pageName)) {
        $pageNameTemp = explode("/", $_SERVER["PHP_SELF"]);
        $pageName = ucfirst(basename(end($pageNameTemp), '.php'));
    }
}

//--------------------------------//   Favicon   //--------------------------------//
if(isset($favicon)) {
    $faviconType = explode(".", $favicon);
    switch ($faviconType[1]) {
        case "jpg":
        $faviconType = "<link rel=\"icon\" href=\"$favicon\" type=\"image/jpg\">";
        break;
        case "png":
        $faviconType = "<link rel=\"icon\" href=\"$favicon\" type=\"image/png\">";
        break;
        case "ico":
        $faviconType = "<link rel=\"icon\" href=\"$favicon\" type=\"image/x-icon\">";
        break;
        case "gif":
        $faviconType = "<link rel=\"icon\" href=\"$favicon\" type=\"image/gif\">";
        break;
        default:
        die("$faviconType[1] is not a supported extension, please convert the image to a JPEG, PNG, ICO or GIF.");
    }
} else {
    $faviconType = "<link rel=\"icon\" href=\"".standardFavicon."\" type=\"image/png\">";
}


//--------------------------------// CSS //--------------------------------//
if(in_array("Font Awesome", $cssFiles)){
    unset($cssFiles[array_search("Font Awesome", $cssFiles)]);
    array_unshift($cssFiles, "https://use.fontawesome.com/releases/v5.6.1/css/all.css");
}

foreach(standardCSS as $value) {
    array_push($cssFiles, $value);
}
array_unique($cssFiles);

foreach($cssFiles as $value) {
    $css .= "<link href=\"$value\" rel=\"stylesheet\">";
}

//--------------------------------// Google Fonts & Normal Fonts//--------------------------------//
if(isset($googleFonts) && is_array($googleFonts)){
    for($i = 0; $i < count($googleFonts);$i++){
        $googleFonts[$i] = str_ireplace(" ","+",$googleFonts[$i]);
    }
    $googleFonts = join("|",$googleFonts);
    $fonts .= "<link href=\"https://fonts.googleapis.com/css?family=$googleFonts\" rel=\"stylesheet\">";
} elseif (isset($googleFonts)) {
    $fonts .= "<link href=\"https://fonts.googleapis.com/css?family=$googleFonts\" rel=\"stylesheet\">";
}
if(isset($customFontURL)){
    foreach($customFontURL as $value)
    $fonts .= "<link href=\"$value\" rel=\"stylesheet\">";
}

//--------------------------------// JS //--------------------------------//
if(isset($jsFiles)){
    foreach($jsfiles as $value) {
        if($value == "jquery") {
            $js = $js + "<script src=\"https://code.jquery.com/jquery-3.3.1.min.js\"></script>";
        } else {
            $js = $js + "<script src=\"$value\"></script>";
        }
    }
}

//--------------------------------// Finalizing //--------------------------------//
echo 
"<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<title>$websitePreTitle$pageName</title>
$faviconType
$css
$fonts
$js
"
; 
?>