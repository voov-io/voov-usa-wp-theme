let paragraph1 = document.getElementById('paragraph1');
let paragraph2 = document.getElementById('paragraph2');
let img =  document.getElementById("img-service")



document.addEventListener('click', e =>{
    if (e.target.matches("#socialMedia")) {
 
        paragraph1.innerHTML = "Increase your audience engagement and attract new leads by staying active on Social Media.";
        paragraph1.classList.toggle('fadeInRight');
        paragraph2.innerHTML = "Social Media Specialists, create valuable digital content and monitor various marketing channels according to your goals.";
        paragraph2.classList.toggle('fadeInRight');
        img.src= templateUrl+"/images/seoforrealstate.webp";
        img.classList.toggle('fadeInTop');
    }
    if (e.target.matches("#seo")) {
 
        paragraph1.innerHTML = "Expand your online reach with astute organic techniques and create a powerful impact in the Digital world.";
        paragraph2.innerHTML = "SEO Associates are key in web & content development, they understand the online searching process and develop strategic positioning methods.";
        img.src= templateUrl+"/images/seoforrealstate.webp";
    }
    if (e.target.matches("#ppc")) {
 
        paragraph1.innerHTML = "Launch and optimize PPC (Pay per click) Campaigns. Track KPIs to evaluate performance and increase better ROI.";
        paragraph2.innerHTML = "PPC experts, ensure effective budget investment for successful results, they captivate the appropriate audience to maximize the results of a paid advertising campaign online.";
        img.src= templateUrl+"/images/seoforrealstate.webp";
    }
    if (e.target.matches("#sem")) {
 
        paragraph1.innerHTML = "Increase your web visibility in search engine results pages by deep tracking and analysis.";
        paragraph2.innerHTML = "SEM Specialists covers a wide variety of duties such as web marketing, web analytics, content strategy planning, link building, and keyword strategy.";
        img.src= templateUrl+"/images/seoforrealstate.webp";
    }
    if (e.target.matches("#videoeditor")) {
 
        paragraph1.innerHTML = "Capture your audience with high-quality videos. Tell a story with animations, effects, and music.";
        paragraph2.innerHTML = "Video Editors provides a  complete and exceptional audio-visual product according to your goals.";
        img.src= templateUrl+"/images/seoforrealstate.webp";
    }
    if (e.target.matches("#mkcordinator")) {
 
        paragraph1.innerHTML = "Develop an efficient content plan for your marketing strategy.";
        paragraph2.innerHTML = "Marketing Coordinators will help you to organize and run integral marketing plans, create promotional events and build your personal brand.";
        img.src= templateUrl+"/images/seoforrealstate.webp";
    }

})
