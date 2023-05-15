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

let TxtType = function(el, toRotate, period) {
    this.toRotate = toRotate;
    this.el = el;
    this.loopNum = 0;
    this.period = parseInt(period, 10) || 2000;
    this.txt = '';
    this.tick();
    this.isDeleting = false;
};

TxtType.prototype.tick = function() {
    let i = this.loopNum % this.toRotate.length;
    let fullTxt = this.toRotate[i];

    if (this.isDeleting) {
    this.txt = fullTxt.substring(0, this.txt.length - 1);
    } else {
    this.txt = fullTxt.substring(0, this.txt.length + 1);
    }

    this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

    let that = this;
    let delta = 150 - Math.random() * 100;

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
    let elements = document.getElementsByClassName('typewrite');
    for (let i=0; i<elements.length; i++) {
        let toRotate = elements[i].getAttribute('data-type');
        let period = elements[i].getAttribute('data-period');
        if (toRotate) {
          new TxtType(elements[i], JSON.parse(toRotate), period);
        }
    }
    // INJECT CSS
    let css = document.createElement("style");
    css.type = "text/css";
    css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
    document.body.appendChild(css);
};

let container1 = document.getElementById('cont1');
let firtElement = document.getElementsByTagName("iframe")[0];
let elementRemove;

btnTestimonials.addEventListener('click', (e) => {
    if (firtElement != undefined) {
        elementRemove = firtElement;
        firtElement.classList.add("remove")
        setTimeout(() => {
            elementRemove.remove();
            
        }, 500);
        
    }
    if (container1.lastElementChild != undefined) {
        container1.lastElementChild.classList.add("remove")
        setTimeout(() => {
            container1.lastElementChild.remove();
            
        }, 500);
    }
    else{
        initYouTubeVideos()
        btnTestimonials.style.display = "none"
    }

});

  /*
   * Light YouTube Embeds by @labnol
   * Credit: https://www.labnol.org/
   */

  function labnolIframe(div) {
    let iframe = document.createElement('iframe');
    iframe.setAttribute('src', 'https://www.youtube.com/embed/' + div.dataset.id + '?autoplay=1');
    iframe.setAttribute('frameborder', '0');
    iframe.setAttribute('allowfullscreen', '1');
    iframe.setAttribute('allow', 'accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture');
    div.parentNode.replaceChild(iframe, div);
    btnTestimonials.style.display = "flex"
  }
  let TestimonialsList = [
      {id:"TEaPfxIRkX0",thumbnail:"https://i.ytimg.com/vi/TEaPfxIRkX0/maxresdefault.jpg?sqp=-oaymwEmCIAKENAF8quKqQMa8AEB-AH-CYAC0AWKAgwIABABGFkgXShlMA8=&rs=AOn4CLCZyXRmsFgf0EcLsQ82vFUOcEOWzQ"},
      {id:"iqrVfYrKyNQ",thumbnail:"https://i.ytimg.com/vi/iqrVfYrKyNQ/maxresdefault.jpg?sqp=-oaymwEmCIAKENAF8quKqQMa8AEB-AH-CYAC0AWKAgwIABABGGUgZShlMA8=&rs=AOn4CLBILxZ8zfC4S8zgJe4M2Dg4f--6WA"},
      {id:"-UtwwdyWJcA",thumbnail:"https://i.ytimg.com/vi/-UtwwdyWJcA/sddefault.jpg?sqp=-oaymwEmCIAFEOAD8quKqQMa8AEB-AH-CYAC0AWKAgwIABABGH8gWCgeMA8=&rs=AOn4CLC-CWILTR5bA7M610B6WwoiE51Hmw"},
      {id:"0UkG_PYBTZ8",thumbnail:"https://i.ytimg.com/vi/0UkG_PYBTZ8/maxresdefault.jpg?sqp=-oaymwEmCIAKENAF8quKqQMa8AEB-AH-CYAC0AWKAgwIABABGGUgVihDMA8=&rs=AOn4CLBUKZDts_ZjpLbbtXvRhweom_m4Xg"},
      {id:"mDo9M0vqOUI",thumbnail:"https://i.ytimg.com/vi/mDo9M0vqOUI/maxresdefault.jpg?sqp=-oaymwEmCIAKENAF8quKqQMa8AEB-AH-CYAC0AWKAgwIABABGFUgWShlMA8=&rs=AOn4CLB3rUHwdHu9Uih2fuOMCyKwikqHew"},
      {id:"Tg0MgZdSb0Q",thumbnail:"https://i.ytimg.com/vi/Tg0MgZdSb0Q/maxresdefault.jpg?sqp=-oaymwEmCIAKENAF8quKqQMa8AEB-AH-CYAC0AWKAgwIABABGGUgWSg8MA8=&rs=AOn4CLD7bBfdsGG49K01QOEEVxRhqg82dQ"},
      {id:"fMHOIfCyRZg",thumbnail:"https://i.ytimg.com/vi/fMHOIfCyRZg/sddefault.jpg?sqp=-oaymwEmCIAFEOAD8quKqQMa8AEB-AH-CYAC0AWKAgwIABABGGUgWihSMA8=&rs=AOn4CLAKpNloXqKN8xWSXlgmFzrWmNMiew"},

  ]

  function initYouTubeVideos() {

    let playerElements = document.getElementsByClassName('youtube-player');
    for (let n = 0; n < TestimonialsList.length; n++) {
      //let videoId = playerElements[n].dataset.id;
      let div = document.createElement('div');
      div.setAttribute('data-id', TestimonialsList[n].id);
      let thumbNode = document.createElement('img');
      thumbNode.src = TestimonialsList[n].thumbnail.replace('ID', TestimonialsList[n].id);
      div.appendChild(thumbNode);
      let playButton = document.createElement('div');
      playButton.setAttribute('class', 'play');
      div.appendChild(playButton);
      div.onclick = function () {
        labnolIframe(this);
      };
      playerElements[0].appendChild(div);
    }
  }

  document.addEventListener('DOMContentLoaded', initYouTubeVideos);