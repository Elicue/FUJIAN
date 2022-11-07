"use strict"

/* --------------------------------- modal ---------------------------------*/

let togg1 = document.getElementById("togg1");
let bg_modal = document.querySelector(".bg_modal");
let close = document.querySelector(".close");

togg1.addEventListener("click",function(){
    bg_modal.style.display = "block"
})

close.addEventListener("click",function(){
    bg_modal.style.display = "none"
})

let inputBox = document.querySelector('.inputBox');
console.log(inputBox);
/* --------------------------------- modal ---------------------------------*/
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
/* --------------------------------- password ---------------------------------*/

function getPassword(){

    var chars = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()_+?><:{}[]"
    var passwordLength = 14;
    var password = "";

    for (var i=0; i<passwordLength; i++){
        var randomNumber = Math.floor(Math.random()* chars.length);
        password += chars.substring(randomNumber,randomNumber+1);
    }
    document.getElementById("password").value = password;
    alertBox.innerHTML = "New Password Copied: <br>" + password;
    storage.Password = password
    localStorage.setItem('form', JSON.stringify(storage))
}

var alertBox = document.querySelector('.alertBox')

function copyPassword(){
    var copyPassText = document.getElementById("password");
    copyPassText.select();
    copyPassText.setSelectionRange(0,9999);
    document.execCommand("copy");
    alertBox.classList.toggle('active');
    setTimeout(function(){
        alertBox.classList.toggle('active');
    },2000)
}

/* --------------------------------- password ---------------------------------*/
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
/* --------------------------------- local ---------------------------------*/

let storage = {}
let formName = document.querySelector('form input[placeholder = "Name"]')
let formFirstName = document.querySelector('form input[placeholder = "First name"]')
let formMail = document.querySelector('form input[placeholder = "mail"]')
let formPassword = document.querySelector('form input[placeholder = "Password"]')

let inputs = [formName, formFirstName, formMail, formPassword]
// inputs.forEach(input => {
//     input.addEventListener()
// })
inputs.forEach(input => {
    console.log(input)
    if(JSON.parse(localStorage.getItem('form'))[input.attributes.placeholder.value]){
        input.value = JSON.parse(localStorage.getItem('form'))[input.attributes.placeholder.value]
    }
    
})

window.addEventListener('keyup', function(){
    inputs.forEach(input => {
        console.log(input.attributes.placeholder.value)
        storage[input.attributes.placeholder.value] = input.value
        console.log(storage)
        localStorage.setItem('form', JSON.stringify(storage))
    })
})

console.log(formName)



/* --------------------------------- local ---------------------------------*/