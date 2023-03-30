let dropdown1 = document.getElementById('dropdown1');
let dropdowninfo1 = document.getElementById('dropdown-info1')

let dropdown2 = document.getElementById('dropdown2');
let dropdowninfo2 = document.getElementById('dropdown-info2')

let dropdown3 = document.getElementById('dropdown3');
let dropdowninfo3 = document.getElementById('dropdown-info3')

let highlighter = document.getElementById('highlighter');

dropdown1.addEventListener('click',(e)=>{
    changeheight()
    dropdowninfo1.classList.toggle('active');
    dropdowninfo2.classList.remove('active');
    dropdowninfo3.classList.remove('active');
})
dropdown2.addEventListener('click',(e)=>{
    changeheight()
    dropdowninfo2.classList.toggle('active');
    dropdowninfo1.classList.remove('active');
    dropdowninfo3.classList.remove('active');
})
dropdown3.addEventListener('click',(e)=>{
    changeheight();
    dropdowninfo3.classList.toggle('active');
    dropdowninfo1.classList.remove('active');
    dropdowninfo2.classList.remove('active');
})

let changeheight = () => {
    if (dropdowninfo1.classList.contains("active") || dropdowninfo2.classList.contains("active") || dropdowninfo3.classList.contains("active")) {
        highlighter.classList.add('active');
    }
    highlighter.classList.toggle('active');
    
} 

