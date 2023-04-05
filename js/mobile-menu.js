const McButton = document.querySelector("#McButton");
const McBar1 = document.getElementById("McBar1");
const McBar2 = document.getElementById("McBar2");
const McBar3 = document.getElementById("McBar3");

const menu__container =  document.querySelector(".menu--items");



  McButton.addEventListener("click", function() {

    McButton.classList.toggle("active");
    McBar1.classList.toggle("active");
    McBar2.classList.toggle("active");
    //   McBar1.style.animationName = "menu-positivo";
    
    McBar3.classList.toggle("active");
    menu__container.classList.toggle("active");


  });