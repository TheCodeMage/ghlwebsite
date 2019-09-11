var divHeightMasterClasses = document.getElementsByClassName("heightAdjustMaster");
var divHeightChildClasses = document.getElementsByClassName("heightAdjustChild");
var maxHeight = window.getComputedStyle(document.documentElement).getPropertyValue('--pictextrow-height');
if(maxHeight == "") {
    console.error("No minimum height found, please insert the --pictextrow-height variable into your head by using the :root pseudo class.")
}
console.log(maxHeight);

if(divHeightChildClasses.length == divHeightMasterClasses.length) {
    heightAdjust();
} else {
    console.error("Invalid classlength: The amount of master classes is not equal to the amount of child classes. please check your code for any missing classes.")
}

function getFullHeight(x, borders, margin) {
    var a
    a = window.getComputedStyle(x, null).getPropertyValue("height")
    a = a + window.getComputedStyle(x, null).getPropertyValue("padding-top")
    a = a + window.getComputedStyle(x, null).getPropertyValue("padding-bottom")
    if(borders == true){
        a = a + window.getComputedStyle(x, null).getPropertyValue("border-top")
        a = a + window.getComputedStyle(x, null).getPropertyValue("border-bottom")
    } if(margin == true){
        a = a + window.getComputedStyle(x, null).getPropertyValue("margin-top")
        a = a + window.getComputedStyle(x, null).getPropertyValue("margin-bottom")
    }
    return a
}

function heightAdjust() {
    for(i=0; i < divHeightMasterClasses.length; i++) {
        if(window.getComputedStyle(divHeightMasterClasses[i], null).getPropertyValue("--pictext-width") == 1){
            divHeightChildClasses[i].style.height = maxHeight;
        } else {
            var x = window.getComputedStyle(divHeightMasterClasses[i], null).getPropertyValue("height");
            if(parseFloat(x) >= parseFloat(maxHeight)) {
                divHeightChildClasses[i].style.height = x;
            } else {
                divHeightChildClasses[i].style.height = maxHeight;
            }
        }
    }
}
window.onresize = heightAdjust;