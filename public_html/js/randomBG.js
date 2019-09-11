var bgC = document.getElementsByClassName("rdmbg");
var bgCr = document.getElementsByClassName("rdmbg-r");
var bgCbuttonr = document.getElementsByClassName("rdmbgb-r");
var bgCbutton = document.getElementsByClassName("rdmbgb");
var bgCline = document.getElementsByClassName("rdmbgl");

var cssClass = ["beigebg", "whitebg", "blackbg"] // Set the CSS classes of the backgrounds
var cssClassr = ["whitebg", "blackbg", "whitebg"]
var cssButton = ["white-r", "black-r", "white-r"]
var cssButtonr = ["black", "white", "black"]

function randomBackground() {
    var e = Math.floor((Math.random() * cssClass.length));
    while (bgC.length > 0) {
        bgC[0].classList.add(cssClass[e])
        bgC[0].classList.remove("rdmbg");
    }
    while (bgCr.length > 0) {
        bgCr[0].classList.add(cssClassr[e]);
        bgCr[0].classList.remove("rdmbg-r");
    };
    while(bgCbutton.length > 0) {
        bgCbutton[0].classList.add(cssButton[e]);
        bgCbutton[0].classList.remove("rdmbgb");
    };
    while(bgCbuttonr.length > 0) {
        bgCbuttonr[0].classList.add(cssButtonr[e]);
        bgCbuttonr[0].classList.remove("rdmbgb-r");
    };
    while (bgCline.length > 0) {
        bgCline[0].style.borderBottomColor = cssButtonr[e];
        bgCline[0].classList.remove("rdmbgl");
        console.log("done");
    }
};
if(bgC.length !== 0) {
    randomBackground()
};