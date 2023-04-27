
    let dropdown1 = document.getElementById('dropdown1');
    let dropdowninfo1 = document.getElementById('dropdown-info1')
    
    let dropdown2 = document.getElementById('dropdown2');
    let dropdowninfo2 = document.getElementById('dropdown-info2')
    
    let dropdown3 = document.getElementById('dropdown3');
    let dropdowninfo3 = document.getElementById('dropdown-info3')
    
    let highlighter = document.getElementById('highlighter');
    
    let btnTestimonials = document.getElementById('next-btn-testimonials')
    let testimonialscontainer =  document.getElementById('img-container')
    let iconDrowpdown = document.querySelector('#icon-dropdown');
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
