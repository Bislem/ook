const toggleMenuBtn = document.getElementById('toggle-menu');
const nav = document.getElementById('nav');
const Nav = document.getElementsByTagName('Nav')[0];
var prevScrollpos = window.pageYOffset;
const popup = document.getElementById('popup');
const loader = document.getElementById('loader');


function toggleMenu() {
    nav.classList.toggle('hide');
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
    var myInput = parent.getElementsByClassName('Text_to_copy')[0];
    //var copyText = document.getElementById("myInput");
    myInput.select();
    document.execCommand("copy");
    var tooltip = event.target.getElementsByTagName("span")[0];
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

function showPopup(message, bodyTitle, title = 'message', action = null) {
    popup.getElementById('head-title').innerHTML = title;
    popup.getElementById('body-title').innerHTML = bodyTitle;
    popup.getElementById('message').innerHTML = message;
    if (action !== null) {
        popup.getElementById('action').href = action;
    }

    popup.classList.remove('hide');

}

function makeResponsive() {
    console.log('working here...');
    if (window.innerWidth < 600) {
        document.getElementById('logo-lg').classList.add('d-none');
        document.getElementById('logo-sm').classList.remove('d-none');
    } else {
        document.getElementById('logo-sm').classList.add('d-none');
        document.getElementById('logo-lg').classList.remove('d-none');
    }
}


window.onload = ui;

function ui() {
    toggleMenuBtn.addEventListener('click', toggleMenu);
    var copies = document.getElementsByClassName('copy');
    for (let i = 0; i < copies.length; i++) {
        copies[i].addEventListener('click', copieText, false);
        copies[i].addEventListener('mouseout', outFunc);
    };

    /*  popup.querySelectorAll('.close-popup').forEach(element => {
          element.addEventListener('click', closePopup);
      });*/

    window.addEventListener('resize', makeResponsive);
    makeResponsive();
    // loader.classList.add('hide');
}