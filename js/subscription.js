"use strict"

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
/* --------------------------------- star ---------------------------------*/

const btn = document.querySelector("button");
const post = document.querySelector(".post");
const widget = document.querySelector(".star-widget");
const editBtn = document.querySelector(".edit");
btn.onclick = ()=>{
    widget.style.display = "none";
    post.style.display = "block";
    
    editBtn.onclick = ()=>{
        widget.style.display = "block";
        post.style.display = "none";
    }
}

const rate_labels = document.querySelectorAll('.star-widget > label')
let hidden_input = document.querySelector('#rate')
console.log(hidden_input.value)


let total = 1;
rate_labels.forEach(label => {
    label.addEventListener('click', function(){
        hidden_input.value = label.attributes.for.value.split('')[label.attributes.for.value.split('').length - 1];
    })
})

/* --------------------------------- star ---------------------------------*/
/* --------------------------------- prix ---------------------------------*/

let articles = document.querySelectorAll('.subscription .container .content input');
let prixTxt = document.querySelector('.subscription .container .prix p');
console.log(prixTxt)
let prixTotal = 0;

articles.forEach(article => {
    article.addEventListener('click', function(){
        if(article.checked){
            prixTotal += parseFloat(article.nextElementSibling.firstChild.nextSibling.innerHTML)
        } else {
            prixTotal -= parseFloat(article.nextElementSibling.firstChild.nextSibling.innerHTML)
        }
        prixTxt.innerHTML = prixTotal;
        console.log(prixTxt)
    })
})

/* --------------------------------- prix ---------------------------------*/