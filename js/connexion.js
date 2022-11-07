"use strict"

const passField = document.getElementById("mdp");
    const showBtn = document.querySelector("span ion-icon");
    showBtn.onclick = (()=>{
        if(passField.type === "password"){
        passField.type = "text";
        showBtn.classList.add("hide-btn");
        }else{
        passField.type = "password";
        showBtn.classList.remove("hide-btn");

    }
});