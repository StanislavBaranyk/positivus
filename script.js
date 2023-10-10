var caseSlider = tns({
    container: '#case-slider',
    items: 3,
    nav: false,
    controls: false,
    responsive: {

        0 :{
            items: 1,
            gutter: 20,
        },
        430: {
            fixedWidth: 350,
        }
    }
});

var testimonialsSlider = tns({
    container: '#testimonials-slider',
    items: 5,
    speed: 500,
    slideBy: 1,
    navAsThumbnails: true,

    controlsText: [`<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
  <g opacity="0.3">
    <path d="M22 13.5C22.8284 13.5 23.5 12.8284 23.5 12C23.5 11.1716 22.8284 10.5 22 10.5L22 13.5ZM0.939341 10.9393C0.353554 11.5251 0.353554 12.4749 0.93934 13.0607L10.4853 22.6066C11.0711 23.1924 12.0208 23.1924 12.6066 22.6066C13.1924 22.0208 13.1924 21.0711 12.6066 20.4853L4.12132 12L12.6066 3.51472C13.1924 2.92893 13.1924 1.97918 12.6066 1.3934C12.0208 0.807611 11.0711 0.807611 10.4853 1.3934L0.939341 10.9393ZM22 10.5L2 10.5L2 13.5L22 13.5L22 10.5Z" fill="white"/>
  </g>
</svg>`,`<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
  <path d="M2 10.5C1.17157 10.5 0.5 11.1716 0.5 12C0.5 12.8284 1.17157 13.5 2 13.5L2 10.5ZM23.0607 13.0607C23.6464 12.4749 23.6464 11.5251 23.0607 10.9393L13.5147 1.3934C12.9289 0.807613 11.9792 0.807613 11.3934 1.3934C10.8076 1.97919 10.8076 2.92893 11.3934 3.51472L19.8787 12L11.3934 20.4853C10.8076 21.0711 10.8076 22.0208 11.3934 22.6066C11.9792 23.1924 12.9289 23.1924 13.5147 22.6066L23.0607 13.0607ZM2 13.5L22 13.5L22 10.5L2 10.5L2 13.5Z" fill="white"/>
</svg>`],

    responsive:  {
        0: {
            items: 1,
            gutter: 50,
        },
        430: {
            fixedWidth: 330,
        },
        992: {
            fixedWidth: 606,
            center: true,

        }
    }


});


let smallNav = document.getElementById('small-nav');

let smallNavActivated = document.getElementById('activatedSmallNavBtn');

smallNavActivated.addEventListener('click', () => {

    if (smallNavActivated.classList.contains('activated-nav')) {

        smallNavActivated.classList.add('remove-nav');
        smallNavActivated.classList.remove('activated-nav');

        document.body.classList.add('overflow-h');

        smallNav.style.right = '0'
    } else if (smallNavActivated.classList.contains('remove-nav')) {
        smallNavActivated.classList.add('activated-nav');
        smallNavActivated.classList.remove('remove-nav');

        document.body.classList.remove('overflow-h');

        smallNav.style.right = '-100%'
    }
})


let accordionItemOne = document.getElementById('accordion-itemOne');
let accordionItemTwo = document.getElementById('accordion-itemTwo');
let accordionItemThere = document.getElementById('accordion-itemThere');
let accordionItemFour = document.getElementById('accordion-itemFour');
let accordionItemFive = document.getElementById('accordion-itemFive');
let accordionItemSix = document.getElementById('accordion-itemSix');

let accordionBtnOne = document.getElementById('btn-itemOne');
let accordionBtnTwo = document.getElementById('btn-itemTwo');
let accordionBtnThere = document.getElementById('btn-itemThere');
let accordionBtnFour = document.getElementById('btn-itemFour');
let accordionBtnFive = document.getElementById('btn-itemFive');
let accordionBtnSix = document.getElementById('btn-itemSix');

accordionBtnOne.addEventListener('click', () => {
    accordionItemTwo.classList.remove('green-accordion');
    accordionItemThere.classList.remove('green-accordion');
    accordionItemFour.classList.remove('green-accordion');
    accordionItemFive.classList.remove('green-accordion');
    accordionItemSix.classList.remove('green-accordion');



    if (!accordionItemOne.classList.contains('green-accordion')) {
        accordionItemOne.classList.add('green-accordion')
    }
    else if (accordionItemOne.classList.contains('green-accordion')) {
        accordionItemOne.classList.remove('green-accordion');
    }
})

accordionBtnTwo.addEventListener('click', () => {
    accordionItemOne.classList.remove('green-accordion');
    accordionItemThere.classList.remove('green-accordion');
    accordionItemFour.classList.remove('green-accordion');
    accordionItemFive.classList.remove('green-accordion');
    accordionItemSix.classList.remove('green-accordion');



    if (!accordionItemTwo.classList.contains('green-accordion')) {
        accordionItemTwo.classList.add('green-accordion')
    }
    else if (accordionItemTwo.classList.contains('green-accordion')) {
        accordionItemTwo.classList.remove('green-accordion');
    }
})

accordionBtnThere.addEventListener('click', () => {
    accordionItemOne.classList.remove('green-accordion');
    accordionItemTwo.classList.remove('green-accordion');
    accordionItemFour.classList.remove('green-accordion');
    accordionItemFive.classList.remove('green-accordion');
    accordionItemSix.classList.remove('green-accordion');



    if (!accordionItemThere.classList.contains('green-accordion')) {
        accordionItemThere.classList.add('green-accordion')
    }
    else if (accordionItemThere.classList.contains('green-accordion')) {
        accordionItemThere.classList.remove('green-accordion');
    }
})

accordionBtnFour.addEventListener('click', () => {
    accordionItemOne.classList.remove('green-accordion');
    accordionItemTwo.classList.remove('green-accordion');
    accordionItemThere.classList.remove('green-accordion');
    accordionItemFive.classList.remove('green-accordion');
    accordionItemSix.classList.remove('green-accordion');



    if (!accordionItemFour.classList.contains('green-accordion')) {
        accordionItemFour.classList.add('green-accordion')
    }
    else if (accordionItemFour.classList.contains('green-accordion')) {
        accordionItemFour.classList.remove('green-accordion');
    }
})

accordionBtnFive.addEventListener('click', () => {
    accordionItemOne.classList.remove('green-accordion');
    accordionItemTwo.classList.remove('green-accordion');
    accordionItemThere.classList.remove('green-accordion');
    accordionItemFour.classList.remove('green-accordion');
    accordionItemSix.classList.remove('green-accordion');



    if (!accordionItemFive.classList.contains('green-accordion')) {
        accordionItemFive.classList.add('green-accordion')
    }
    else if (accordionItemFive.classList.contains('green-accordion')) {
        accordionItemFive.classList.remove('green-accordion');
    }
})

accordionBtnSix.addEventListener('click', () => {
    accordionItemOne.classList.remove('green-accordion');
    accordionItemTwo.classList.remove('green-accordion');
    accordionItemThere.classList.remove('green-accordion');
    accordionItemFour.classList.remove('green-accordion');
    accordionItemFive.classList.remove('green-accordion');



    if (!accordionItemSix.classList.contains('green-accordion')) {
        accordionItemSix.classList.add('green-accordion')
    }
    else if (accordionItemSix.classList.contains('green-accordion')) {
        accordionItemSix.classList.remove('green-accordion');
    }
})


let contactContactBtnOne = document.getElementById('say-hi');
let contactContactBtnTwo = document.getElementById('get-quote');

contactContactBtnOne.addEventListener('click', () => {
    if (!contactContactBtnOne.classList.contains('active-form-btn')) {

        contactContactBtnOne.classList.add('active-form-btn');

        contactContactBtnTwo.classList.remove('active-form-btn')
    }
})

contactContactBtnTwo.addEventListener('click', () => {
    if (!contactContactBtnTwo.classList.contains('active-form-btn')) {

        contactContactBtnTwo.classList.add('active-form-btn');

        contactContactBtnOne.classList.remove('active-form-btn')
    }
})

function checkWindowWidth() {
    const windowWidth = window.innerWidth;
    const breakpoint = 992; // Ширина, при якій акордеон буде відкритим
    const btnItemOne = document.getElementById('btn-itemOne');

    if (windowWidth >= breakpoint) {
        // Виконуємо клік на кнопці акордеону, якщо ширина вікна більша або рівна breakpoint
        btnItemOne.click();
    }
}

// Викликаємо функцію при завантаженні сторінки
window.addEventListener('load', checkWindowWidth);

// Викликаємо функцію при зміні розміру вікна
window.addEventListener('resize', checkWindowWidth);


