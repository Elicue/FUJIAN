"use strict"

/* --------------------------------- dark-mode ---------------------------------*/

const btnToggle = document.querySelector('.btn-toggle');

if(localStorage.getItem('darked')){
    let darked = JSON.parse(localStorage.getItem('darked'))
    console.log(typeof darked)
    if (!darked){
        document.body.classList.add('light')
        document.body.classList.remove('dark')
        console.log('white')
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
/* --------------------------------- filter ---------------------------------*/

filterObjects("all");

function filterObjects(c){
    var x, i;
    x = document.getElementsByClassName("box");
    if (c == "all") c = "";
    for (i = 0; i < x.lenght; i++){
        removeClass(x[i], "show");
        if(x[i].className.indexOf(c) > -1) addClass(x[i], "show")
    }
}

function toggleAll(selecteur, className){
    document.querySelectorAll(selecteur).forEach(card => {
        card.classList.toggle(className)
    })
}

document.querySelectorAll('.filters input:not(:checked)').forEach(item => {
    toggleAll(`.container .${item.id}`, "hide")
})

document.querySelectorAll('.filters input').forEach(item => {
    item.addEventListener('change', function() {
        toggleAll(`.container .${item.id}`, "hide")
    })
})

/* --------------------------------- filter ---------------------------------*/
/* --------------------------------- btn ---------------------------------*/

const clck = document.querySelector('.clck');
const app = document.getElementById('app');

// onclick.addEventListener("click",function(){
//     app.style.display = "block"
// })

// onclick.addEventListener("click",function(){
//     app.style.display = "none"
// })


clck.addEventListener('click',()=> {
    if (app.style.display = "none"){
        app.style.display = "block"
    } else if (app.style.display = "block"){
        app.style.display = "none"
    }
})

/* --------------------------------- btn ---------------------------------*/