
/*
Slick Slider
*/

function sideBarClose(){
    var roundBtn = document.querySelector('.round-btn');
        if (roundBtn) {
            roundBtn.addEventListener('click', function() {
                var url = roundBtn.dataset.url;
                handleButtonClick(url);
                console.log('clicked')
            });
        }

    let burgerButton = document.getElementById("burger-button");
        window.onscroll = function() {scrollFunction()};
        
            function scrollFunction() {
                if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
                    burgerButton.style.transform = "scale(1)";
                    console.log('scrolling')
                } else {
                    burgerButton.style.transform = "scale(0)";
                }
                
            }


    // let body = document.body;
    let sideBar = document.querySelector(".sidebar");
    let sideBarClose = document.getElementById("close-button");
    burgerButton.addEventListener('click', function() {
        sideBarClose.style.display = "block";
        sideBar.style.transform = "scaleX(1)";
        burgerButton.style.display = "none";
        // document.html.classList.add('no-scroll');
        document.html.classList.add('no-scroll');
    });

    sideBarClose.addEventListener('click', function(){
        sideBar.style.transform = "scaleX(0)";
        sideBarClose.style.display = "none";
        burgerButton.style.display = "block";
        html.classList.remove('no-scroll');
        body.classList.remove('no-scroll');
    });
};

function handleButtonClick(url) {
    pageTransitionOldPageEnd();
    setTimeout(function() {
        window.location.href = url;
    }, 1400);
}
function initializeAnimations(){

jQuery(document).ready(function($) {
    $('.pics').slick({
        slidesToShow: 5,
        slidesToScroll: 5,
        autoplay: true,
        autoplaySpeed: 2000,
    });
});

/*
Burger Buttons JS
*/
var listItems = document.querySelectorAll('.list');
listItems.forEach(function (item) {
    item.addEventListener('mousemove', function (event) {
        var tooltip = item.querySelector('.tooltip1');
        var rect = tooltip.getBoundingClientRect();
        tooltip.style.left = (event.clientX - rect.width / 2) + 'px';
        tooltip.style.top = (event.clientY - rect.height / 2) + 'px'; 
    });
});

const AboutButton = document.querySelectorAll('.round-btn');
const ListButton = document.querySelectorAll('.list-btn');
const menuBurger = document.querySelectorAll('.burger-button');
const topBar = document.querySelector('.top-bar');
const menuButtons = topBar.querySelectorAll('li');


function applyEffect(circleButtons, hoverX, hoverY, itemHoverX, itemHoverY) {
    circleButtons.forEach(circleButton => {
        circleButton.addEventListener('mousemove', (e) =>{
            let boundingRect = circleButton.getBoundingClientRect();
            const Posx = e.clientX - boundingRect.left;
            const Posy = e.clientY - boundingRect.top;

            gsap.to(circleButton, {
                x: (Posx - boundingRect.width / 4) * hoverX,
                y: (Posy - boundingRect.width / 3) * hoverY,
                duration: 0.8,
                ease: 'power3.out',
            });

        circleButton.querySelectorAll('*').forEach(child => {
            gsap.to(child, {
                x: (Posx - boundingRect.width / 2) * itemHoverX,
                y: (Posy - boundingRect.width / 3) * itemHoverY,
                duration: 0.1,
                ease: 'power3.out',
                });
            });
        });

        circleButton.addEventListener('mouseout', () =>{
            gsap.to(circleButton, {
                x: 0,
                y: 0,
                duration: 0.8,
                ease: 'elastic.out(5,0.8)'
            });

            circleButton.querySelectorAll('*').forEach(child => {
                gsap.to(child, {
                    x: 0,
                    y: 0,
                    duration: 0.1,
                    ease: 'power3.out',
                });
            });
        });
    });
}

applyEffect(AboutButton, 0.6, 0.7, 0.4, 0.3 );
applyEffect(ListButton, 0.5, 0.5, 0.2, 0.2);
applyEffect(menuBurger, 1, 1, 0.2, 0.2);
applyEffect(menuButtons, 0.4, 0.4);
//===============================================================================================================
/*
GSAP 
*/
let currentScroll = window.pageYOffset;
let isScrollingDown = true;
let textScroll = gsap.to("#header-title", {
    xPercent: isScrollingDown ? -100 : 100, // Initial direction based on scrolling down
    repeat: -1,
    duration: 25,
    ease: "linear"
}).totalProgress(0.1);
console.log("is scrolling")

gsap.set("#marqueeContainer", {xPercent: -50});
gsap.registerPlugin(ScrollTrigger)
const splitTypes = document.querySelectorAll('.first-text')
    splitTypes.forEach((char,i) => {   
        const text = new SplitType(char,{types:'chars'})
            gsap.from(text.chars,{
                    scrollTrigger:{
                        trigger: char,
                        start: '-20% 80%',
                        end: 'top 30%',
                        scrub: false,
                        markers: false,
                        toggleActions: 'restart none none none'
                                },
                        scaleY: 0,
                        stagger: 0.003,
                        duration: 0.3,
                        transformOrigin: 'bottom',
                })
            })
            let scrubScroll2 = gsap.to('.scrub-box2',{
                scrollTrigger:{
                    trigger:'.scrubcontainer',
                    scrub: true,
                    markers: false, 
                    end: "100%",
                },
                xPercent: isScrollingDown ? -100 : 100,
            });
            let scrubScroll = gsap.to('.scrub-box',{
                scrollTrigger:{
                    trigger:'.scrubcontainer',
                    scrub: true,
                    markers: false, 
                    end: "bottom"
                },
                xPercent: isScrollingDown ? 100 : - 100,
            })

window.addEventListener("scroll", function() {
    let newScroll = window.pageYOffset;
    let isScrollingUp = newScroll < currentScroll;

    if (isScrollingUp) {
        // Scrolling up
        if (isScrollingDown) {
            // If direction changed from down to up, reverse
            isScrollingDown = false;
            textScroll.vars.xPercent = 100; // Change direction to right 
            scrubScroll.vars.xPercent = -100; // Change direction to right
            scrubScroll2.vars.xPercent = 100; // Change direction to left
            textScroll.timeScale(-1);
        }
    } else {
        // Scrolling down
        if (!isScrollingDown) {
            // If direction changed from up to down, reverse
            isScrollingDown = true;
            textScroll.vars.xPercent = -100; // Change direction to left
            scrubScroll.vars.xPercent = 100; // Change direction to left
            scrubScroll2.vars.xPercent = -100; // Change direction to right
            textScroll.timeScale(1);
        }
    }
    
    currentScroll = newScroll;
});
    }

//=======================================================
function pageTransitionOldPageEnd() {
    let tl = gsap.timeline();

    
    tl.to(".transitionOut", {
        duration: 1,
        scaleY: 1,
        transformOrigin: "bottom",
        ease: "power4.inOut",
    });

    tl.to(".transitionOut", {
        duration: 1,
        scaleY: 0,
        transformOrigin: "top",
        ease: "power4.inOut",
    });
    
}

function pageTransitionNewPageStart() {
    let tl = gsap.timeline();

    
}

function delay(n) {
    n = n || 0;
    return new Promise((done) => {
        setTimeout(() => {
            done();
        }, n);
    });
}

barba.init({
    sync: true, 
    transitions: [{
        async enter(data) {
            initializeAnimations();
            pageTransitionNewPageStart();   
            sideBarClose();
        },
        async leave(data) {
            const done = this.async();
            pageTransitionOldPageEnd();
            await delay(1000);
            done();    
        }, 
        async after(data){
            await delay(1000);
            ScrollTrigger.refresh();
        },
        
    }]
});
window.addEventListener('load', initializeAnimations);
sideBarClose();

/*
Smooth Scroll
*/
// const lenis = new Lenis()

// lenis.on('scroll', (e) => {

// })

// function raf(time) {
// lenis.raf(time)
// requestAnimationFrame(raf)
// }

// requestAnimationFrame(raf)

//===============================================================
//Display Menu Name
document.addEventListener('DOMContentLoaded', function() {
    var menuItems = document.querySelectorAll('.topmenu .menu-item');

    menuItems.forEach(function(item) {
        item.addEventListener('click', function(event) {
            var displayMenuName = document.getElementById('menuTitleDisplay');
            displayMenuName.innerHTML = item.textContent.trim();
            console.log(displayMenuName)
        });
    });
});




