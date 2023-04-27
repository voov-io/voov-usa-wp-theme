let copySergio = document.getElementById('SergioCopy');
let copyKris = document.getElementById('KrisCopy');
let imgSergio = document.querySelector('[data-id="2b2b6e29"]');
let imgKris = document.querySelector('[data-id="579c416e"]');

imgSergio.addEventListener('click', ()=>{
    copySergio.style.display = "block";
    copyKris.style.display = "none";
})

imgKris.addEventListener('click', ()=>{
    copyKris.style.display = "block";
    copySergio.style.display = "none";
})