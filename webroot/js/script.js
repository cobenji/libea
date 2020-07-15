/*Header*/

let header = document.querySelector('header')
let buttonBurger = document.querySelector('.icon-burger span')
let nav = document.querySelector('nav')

let statNav = 0

buttonBurger.addEventListener('click', () => {
    //event.preventDefault();
    if (statNav == 0) {
        header.classList.add("header-toggle")
        statNav++
        console.log('nav visible')
    } else {
        header.classList.remove("header-toggle")
        statNav = 0
        console.log('nav caché')
    }
})

nav.addEventListener('click', () => {
    header.classList.remove("header-toggle")
})



//header changement

let logoHeader = document.querySelector(".header-logo img")

window.onscroll = function() {scrollFunction()}

function scrollFunction() {
    if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
        logoHeader.classList.add('display')

    } else {
        logoHeader.classList.remove('display')
    }
}






//Play an animation back on second click

let iconMenu = document.querySelector('.icon-burger span');

let animationMenu = bodymovin.loadAnimation({
    container: iconMenu,
    renderer: 'svg',
    loop: false,
    autoplay: false,
    path: "https://libea.me/js/anim/burger-menu.json"
});

let directionMenu = -1;
iconMenu.addEventListener('click', playMenu());

function playMenu (){
    animationMenu.setDirection(directionMenu);
    animationMenu.play();
    directionMenu = -directionMenu;
}



let ctaModalContact = document.querySelectorAll('.cta-modal-contact');
let modalContact = document.querySelector('#modal-contact');
let statModal = 0


function disableModalContact(){
    modalContact.classList.remove("modal-toggle")
    statModal = 0
}

function toggleModalContact(){
    modalContact.classList.add("modal-toggle")
    statModal++

}

ctaModalContact.forEach(none => {
    none.addEventListener('click', () => {
        event.preventDefault();
        if (statModal == 0) {
            toggleModalContact()
        } else {
            disableModalContact()
        }
    });
});





let isInViewport = function (elem) {
    let bounding = elem.getBoundingClientRect();
    return (
        bounding.top >= 0 &&
        bounding.left >= 0 &&
        bounding.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        bounding.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
};




let landQu = document.querySelector('.moContact');


if(document.body.clientWidth >= 1024) {

    window.addEventListener('scroll', () => {
        if (isInViewport(landQu)) {
            toggleModalContact()
        } else {
            disableModalContact()
        }
    });

}


