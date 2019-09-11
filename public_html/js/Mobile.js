function closeMobileNav() {
    a = document.getElementsByClassName("mobileNav")
    for(i=0; i < a.length; i++) {
        a[i].style.width = "0px";
        a[i].style.boxShadow = "none";
    }
    document.getElementById("mobileNavOpacity").style.display = "none";
    document.getElementById("mobileNavOpacity").style.backgroundColor = "rgba(0, 0, 0, 0)";
}

function openMobileNav(x, objectName, position) {
    x = x + "px";
    a = document.getElementById(objectName);
    b = document.getElementById("mobileNavOpacity");
    if(position == "left") {
        a.style.right = "unset";
        a.style.left = 0;
    }
    if (window.matchMedia("(max-width: " + (x + 50) + "px)").matches) {
        a.style.width = "100%";
    } else {
        a.style.width = x;
        a.style.boxShadow = "-12px 0px 8px 0 rgba(0, 0, 0, 0.2), -12px 0px 20px 10px rgba(0, 0, 0, 0.19);";
    }
    b.style.display = "block";
    b.style.backgroundColor = "rgba(0, 0, 0, 0.5)";
    b.addEventListener("click", closeMobileNav, false);
}