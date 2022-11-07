"use strict"
/* --------------------------------- dark-mode ---------------------------------*/

const btnToggle = document.querySelector('.btn-toggle');

btnToggle.addEventListener('click',()=> {
    const body = document.body;
    if (body.classList.contains('dark')){
        body.classList.add('light')
        body.classList.remove('dark')
    } else if (body.classList.contains('light')){
        body.classList.add('dark')
        body.classList.remove('light')
    }
})

/* --------------------------------- dark-mode ---------------------------------*/
/* --------------------------------- navbar ---------------------------------*/

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

/* --------------------------------- navbar ---------------------------------*/