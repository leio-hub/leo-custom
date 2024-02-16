//Slick Slider

jQuery(document).ready(function($) {
    $('.pics').slick({
        slidesToShow: 4,
        slidesToScroll: 4,
        autoplay: true,
        autoplaySpeed: 2000,
    });
});

//==========================================================================
//Magnetic Button JS
const circleButton = document.querySelectorAll('.round-btn');

circleButton.forEach(circleBtn => {
    circleBtn.addEventListener('mousemove', (e) => {
        const position = circleBtn.getBoundingClientRect();
        const x = e.clientX - position.left - position.width / 2;
        const y = e.clientY - position.top - position.height / 2;

        circleBtn.style.transform = `translate(${x * 0.6}px, ${y * 0.6}px)`;
        circleBtn.children[0].style.transform = `translate(${x * 0.5}px, ${y * 0.5}px)`;

    });

    circleBtn.addEventListener('mouseout', () => {
        circleBtn.style.transform = `translate(0px, 0px)`;
        circleBtn.children[0].style.transform = `translate(0px, 0px)`;
    
    });
   
});

const listButtons = document.querySelectorAll('.list-btn');
listButtons.forEach(listButton => {
    listButton.addEventListener('mousemove', (e) => {
        const position = listButton.getBoundingClientRect();
        const x = e.clientX - position.left - position.width / 2;
        const y = e.clientY - position.top - position.height / 2;

        listButton.style.transform = `translate(${x * 0.5}px, ${y * 0.5}px)`;
        listButton.children[0].style.transform = `translate(${x * 0.1}px, ${y * 0.1}px)`;

    });

    listButton.addEventListener('mouseout', () => {
        listButton.style.transform = `translate(0px, 0px)`;
        listButton.children[0].style.transform = `translate(0px, 0px)`;
    });
});

//===============================================================================================================
//GSAP


let currentScroll = window.pageYOffset;
let isScrollingDown = true;
let tween = gsap.to("#header-title", {
    xPercent: isScrollingDown ? -100 : 100, // Initial direction based on scrolling down
    repeat: -1,
    duration: 25,
    ease: "linear"
}).totalProgress(0.5);

gsap.set("#marqueeContainer", {xPercent: -50});

window.addEventListener("scroll", function() {
    let newScroll = window.pageYOffset;
    let isScrollingUp = newScroll < currentScroll;

    if (isScrollingUp) {
        // Scrolling up
        if (isScrollingDown) {
            // If direction changed from down to up, reverse
            isScrollingDown = false;
            tween.vars.xPercent = 100; // Change direction to right
            tween.timeScale(-1);
        }
    } else {
        // Scrolling down
        if (!isScrollingDown) {
            // If direction changed from up to down, reverse
            isScrollingDown = true;
            tween.vars.xPercent = -100; // Change direction to left
            tween.timeScale(1);
        }
    }
    
    currentScroll = newScroll;
});


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
//=======================================================
//Smooth Scroll
const lenis = new Lenis()

lenis.on('scroll', (e) => {
  console.log(e)
})

function raf(time) {
  lenis.raf(time)
  requestAnimationFrame(raf)
}

requestAnimationFrame(raf)

//===============================================================
//Barba JS

function pageTransition() {
    let tl = gsap.timeline();
    console.log(tl)


    tl.to(".transition", {
        duration: 1,
        scaleY: 1,
        transformOrigin: "bottom",
        ease: "power4.inOut",
    });

    tl.to(".transition", {
        duration: 1,
        scaleY: 0,
        transformOrigin: "top",
        ease: "power4.inOut",
    });
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
    sync: true, // Corrected typo
    transitions: [{
        async leave(data) {
            const done = this.async();

            pageTransition();
            await delay(1200); // Adjusted delay to match the animation duration
            done();
        },
    }]
});


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