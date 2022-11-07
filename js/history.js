"use strict"



function toggleMenu () {  
    const navbar = document.querySelector('.navbar');
    const burger = document.querySelector('.burger');
    burger.addEventListener('click', (e) => {    
      navbar.classList.toggle('show-nav');
    });    
  }
toggleMenu();

const body = document.querySelector('body');
const toggle = document.getElementById('toggle');
toggle.onclick = function(){
    toggle.classList.toggle('active')
    body.classList.toggle('body')
}


/* --------------------------------- slider ---------------------------------*/

let img__slider = document.getElementsByClassName('img__slider');
// console.log(img__slider);

let etape = 0;

let nbr__img = img__slider.length;

let precedent = document.querySelector('.precedent');
let suivant = document.querySelector('.suivant');

function enleverActiveImages(){
    for(let i = 0 ; i < nbr__img ; i++){
        img__slider[i].classList.remove('active');
    }
}

suivant.addEventListener('click', function(){
    etape++;
    if(etape >= nbr__img){
        etape = 0;
    }
    enleverActiveImages();
    img__slider[etape].classList.add('active');
})

precedent.addEventListener('click', function(){
    etape++;
    if(etape < 0){
        etape = nbr__img - 1;
    }
    enleverActiveImages();
    img__slider[etape].classList.add('active');
})

setInterval(function(){
    etape++;
    if(etape >= nbr__img){
        etape = 0;
    }
    enleverActiveImages();
    img__slider[etape].classList.add('active');
}, 3000)

/* --------------------------------- slider ---------------------------------*/
/* --------------------------------- dark-mode ---------------------------------*/

const btnToggle = document.querySelector('.btn-toggle');

if(localStorage.getItem('darked')){
    let darked = JSON.parse(localStorage.getItem('darked'))
    console.log(typeof darked)
    if (!darked){
        document.body.classList.add('light')
        document.body.classList.remove('dark')
        console.log('whuite')
    } else {
        document.body.classList.add('dark')
        document.body.classList.remove('light')
        document.getElementById('toggle').classList.add('active')
    }
}

btnToggle.addEventListener('click',()=> {
    const body = document.body;
    if (body.classList.contains('dark')){
        body.classList.add('light')
        body.classList.remove('dark')
        localStorage.setItem('darked', JSON.stringify(false))
    } else if (body.classList.contains('light')){
        body.classList.add('dark')
        body.classList.remove('light')
        localStorage.setItem('darked', JSON.stringify(true))
    }
})



/* --------------------------------- dark-mode ---------------------------------*/