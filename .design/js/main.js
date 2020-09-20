const toggleMenuBtn = document.querySelector('#toggle-menu');
const nav = document.querySelector('#nav');
const Nav = document.querySelector('Nav');
var prevScrollpos = window.pageYOffset;
const popup = document.querySelector('#popup');
const loader = document.querySelector('#loader');


function toggleMenu() {
    nav.classList.toggle('hide');
    console.log("this is children", toggleMenuBtn.children);
    var arr = toggleMenuBtn.children;
    for (let i = 0; i < arr.length; i++) {
        arr[i].classList.toggle('d-none');
    }
}
let xOffSet = window.scrollY;


window.onscroll = function() {
    var currentScrollPos = window.pageYOffset;
    if (currentScrollPos < 500) {
        document.getElementById("navbar").style.top = "0";
    } else if (prevScrollpos > currentScrollPos) {
        document.getElementById("navbar").style.top = "0";
    } else {
        document.getElementById("navbar").style.top = "-84px";
    }
    prevScrollpos = currentScrollPos;
}







//tooltip copy


var currentTooltip = null;

function copieText(event) {
    //alert("text copied !");
    var parent = event.target.parentNode;
    var myInput = parent.querySelector('.Text_to_copy');
    //var copyText = document.getElementById("myInput");
    console.log(parent);
    myInput.select();
    document.execCommand("copy");
    var tooltip = event.target.querySelector("span");
    console.log(tooltip);
    //var tooltip = document.getElementById("myTooltip");
    tooltip.innerHTML = "Copied !";
    currentTooltip = tooltip;

}

function outFunc() {
    if (currentTooltip != null)
        currentTooltip.innerHTML = "Clik to copy";
}
//end


function closePopup(e) {
    popup.classList.add('hide');
}
showPopup('this is a message', 'title', 'head title');

function showPopup(message, bodyTitle, title = 'message', action = null) {
    popup.querySelector('#head-title').innerHTML = title;
    popup.querySelector('#body-title').innerHTML = bodyTitle;
    popup.querySelector('#message').innerHTML = message;
    if (action !== null) {
        popup.querySelector('#action').href = action;
    }

    popup.classList.remove('hide');

}

function makeResponsive() {
    console.log('working here...');
    if (window.innerWidth < 600) {
        document.querySelector('#logo-lg').classList.add('d-none');
        document.querySelector('#logo-sm').classList.remove('d-none');
    } else {
        document.querySelector('#logo-sm').classList.add('d-none');
        document.querySelector('#logo-lg').classList.remove('d-none');
    }
}


window.onload = ui;

function ui() {
    toggleMenuBtn.addEventListener('click', toggleMenu);
    document.querySelectorAll('.copy').forEach(element => {
        element.addEventListener('click', copieText, false);
        element.addEventListener('mouseout', outFunc);
    });

    popup.querySelectorAll('.close-popup').forEach(element => {
        element.addEventListener('click', closePopup);
    });

    window.addEventListener('resize', makeResponsive);
    makeResponsive();
    loader.classList.add('hide');
}