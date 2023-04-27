let dropdown1 = document.getElementById('dropdown1');
let dropdowninfo1 = document.getElementById('dropdown-info1')

let dropdown2 = document.getElementById('dropdown2');
let dropdowninfo2 = document.getElementById('dropdown-info2')

let dropdown3 = document.getElementById('dropdown3');
let dropdowninfo3 = document.getElementById('dropdown-info3')

let highlighter = document.getElementById('highlighter');

let btnTestimonials = document.getElementById('next-btn-testimonials')
let testimonialscontainer =  document.getElementById('img-container')
let iconDrowpdown = document.querySelector('.icon-dropdown');
let iconDrowpdown2 = document.querySelector('#icon-dropdown2');
let iconDrowpdown3 = document.querySelector('#icon-dropdown3');

dropdown1.addEventListener('click',(e)=>{
    changeheight()
    dropdowninfo1.classList.toggle('active');
    dropdowninfo2.classList.remove('active');
    dropdowninfo3.classList.remove('active');
    iconDrowpdown.classList.toggle('rotated')
})
dropdown2.addEventListener('click',(e)=>{
    changeheight()
    dropdowninfo2.classList.toggle('active');
    dropdowninfo1.classList.remove('active');
    dropdowninfo3.classList.remove('active');
    iconDrowpdown2.classList.toggle('rotated')
})
dropdown3.addEventListener('click',(e)=>{
    changeheight();
    dropdowninfo3.classList.toggle('active');
    dropdowninfo1.classList.remove('active');
    dropdowninfo2.classList.remove('active');
    iconDrowpdown3.classList.toggle('rotated')
})

let changeheight = () => {
    if (dropdowninfo1.classList.contains("active") || dropdowninfo2.classList.contains("active") || dropdowninfo3.classList.contains("active")) {
        highlighter.classList.add('active');
    }
    highlighter.classList.toggle('active');
    
} 
/*text animation in main title img*/

var TxtType = function(el, toRotate, period) {
    this.toRotate = toRotate;
    this.el = el;
    this.loopNum = 0;
    this.period = parseInt(period, 10) || 2000;
    this.txt = '';
    this.tick();
    this.isDeleting = false;
};

TxtType.prototype.tick = function() {
    var i = this.loopNum % this.toRotate.length;
    var fullTxt = this.toRotate[i];

    if (this.isDeleting) {
    this.txt = fullTxt.substring(0, this.txt.length - 1);
    } else {
    this.txt = fullTxt.substring(0, this.txt.length + 1);
    }

    this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

    var that = this;
    var delta = 150 - Math.random() * 100;

    if (this.isDeleting) { delta /= 2; }

    if (!this.isDeleting && this.txt === fullTxt) {
    delta = this.period;
    this.isDeleting = true;
    } else if (this.isDeleting && this.txt === '') {
    this.isDeleting = false;
    this.loopNum++;
    delta = 500;
    }

    setTimeout(function() {
    that.tick();
    }, delta);
};

window.onload = function() {
    var elements = document.getElementsByClassName('typewrite');
    for (var i=0; i<elements.length; i++) {
        var toRotate = elements[i].getAttribute('data-type');
        var period = elements[i].getAttribute('data-period');
        if (toRotate) {
          new TxtType(elements[i], JSON.parse(toRotate), period);
        }
    }
    // INJECT CSS
    var css = document.createElement("style");
    css.type = "text/css";
    css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
    document.body.appendChild(css);
};

let container2 = document.getElementById('cont2');

btnTestimonials.addEventListener('click', (e) => {
    let firtElement = document.getElementsByTagName("iframe")[0];
    let elementRemove = firtElement;
    firtElement.classList.add("remove")
    setTimeout(() => {
        container2.appendChild(elementRemove)
        
    }, 500);


});