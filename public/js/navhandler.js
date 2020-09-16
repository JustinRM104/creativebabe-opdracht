let logo = document.getElementById('websiteLogo');
let menuButton = document.getElementById('menuButton');
let menuOpen = false;
let hovering = false;

function toggleMenu(toggle) {
    let content = document.getElementsByClassName("hamburgerButton");

    if (toggle) {
        for (i = 0; i < content.length; i++) {
            content[i].style.display = "block";
        }
    }
    else {
        for (i = 0; i < content.length; i++) {
            content[i].style.display = "none";
        }
    }
}

function adjustLogo(toggle) {
    if (toggle && logo.id == "websiteLogo") {
        logo.id = "websiteLogoSmall";
    }
    else if (!toggle && logo.id == "websiteLogoSmall") {
        logo.id = "websiteLogo";
    }
}

function checkScrollingPosition(y) {
    if (y > 0) { adjustLogo(true); }
    else { adjustLogo(false); }
}

window.addEventListener('scroll', function() {
    checkScrollingPosition(window.scrollY);
});

menuButton.parentElement.addEventListener('mouseenter', function(e) { hovering = true; });
menuButton.parentElement.addEventListener('mouseleave', function(e) { hovering = false; });

document.body.addEventListener('click', function() {
    if (!hovering && menuOpen) {
        menuOpen = false;
        toggleMenu(false);
    }
});

menuButton.addEventListener('click', function() {
    if (menuOpen) {
        menuOpen = false;
        toggleMenu(false);
    }
    else {
        menuOpen = true;
        toggleMenu(true);
    }
});

checkScrollingPosition(window.scrollY);