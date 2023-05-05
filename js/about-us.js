let copySergio = document.getElementById('SergioCopy');
let copyKris = document.getElementById('KrisCopy');
let copyAhmed = document.getElementById('AhmedCopy');
let imgSergio = document.querySelector('[data-id="2b2b6e29"]');
let imgKris = document.querySelector('[data-id="579c416e"]');
let imgAhmed = document.querySelector('[data-id="2a1e424e"]');
let body =  document.querySelector('.elementor-page-591');

imgSergio.addEventListener('click', ()=>{
    copyKris.classList.remove('active')
    copyAhmed.classList.remove('active')
    copySergio.classList.toggle('active')
    body.classList.toggle("modal-open")
     
})

imgKris.addEventListener('click', ()=>{
    copySergio.classList.remove('active')
    copyAhmed.classList.remove('active')
    copyKris.classList.toggle('active')
    body.classList.toggle("modal-open")
})

imgAhmed.addEventListener('click', ()=>{
    copyKris.classList.remove('active')
    copySergio.classList.remove('active')
    copyAhmed.classList.toggle('active')
    body.classList.toggle("modal-open")
})

document.addEventListener('click', e => {
    if (e.target.matches('#SergioCopy')) {
        SergioCopy.classList.remove('active')
        body.classList.remove("modal-open")
    }
    if (e.target.matches('#KrisCopy')) {
        copyKris.classList.remove('active')
        body.classList.remove("modal-open")
    }
    if (e.target.matches('#AhmedCopy')) {
        copyAhmed.classList.remove('active')
        body.classList.remove("modal-open")
    }
})