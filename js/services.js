let paragraph1 = document.getElementById('paragraph1');
let paragraph2 = document.getElementById('paragraph2');
let img =  document.getElementById("img-service")
let btnReadmore =  document.getElementById("btn-readmore")



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
        paragraph1.classList.toggle('fadeInRight');
        paragraph2.classList.toggle('fadeInRight');
        img.classList.toggle('fadeInTop');
        
    }
    if (e.target.matches("#ppc")) {
 
        paragraph1.innerHTML = "Launch and optimize PPC (Pay per click) Campaigns. Track KPIs to evaluate performance and increase better ROI.";
        paragraph2.innerHTML = "PPC experts, ensure effective budget investment for successful results, they captivate the appropriate audience to maximize the results of a paid advertising campaign online.";
        img.src= templateUrl+"/images/seoforrealstate.webp";
        paragraph1.classList.toggle('fadeInRight');
        paragraph2.classList.toggle('fadeInRight');
        img.classList.toggle('fadeInTop');
        
    }
    if (e.target.matches("#sem")) {
 
        paragraph1.innerHTML = "Increase your web visibility in search engine results pages by deep tracking and analysis.";
        paragraph2.innerHTML = "SEM Specialists covers a wide variety of duties such as web marketing, web analytics, content strategy planning, link building, and keyword strategy.";
        img.src= templateUrl+"/images/seoforrealstate.webp";
        paragraph1.classList.toggle('fadeInRight');
        paragraph2.classList.toggle('fadeInRight');
        img.classList.toggle('fadeInTop');
        
    }
    if (e.target.matches("#videoeditor")) {
 
        paragraph1.innerHTML = "Capture your audience with high-quality videos. Tell a story with animations, effects, and music.";
        paragraph2.innerHTML = "Video Editors provides a  complete and exceptional audio-visual product according to your goals.";
        img.src= templateUrl+"/images/seoforrealstate.webp";
        paragraph1.classList.toggle('fadeInRight');
        paragraph2.classList.toggle('fadeInRight');
        img.classList.toggle('fadeInTop');
        
    }
    if (e.target.matches("#mkcordinator")) {
 
        paragraph1.innerHTML = "Develop an efficient content plan for your marketing strategy.";
        paragraph2.innerHTML = "Marketing Coordinators will help you to organize and run integral marketing plans, create promotional events and build your personal brand.";
        img.src= templateUrl+"/images/seoforrealstate.webp";
        paragraph1.classList.toggle('fadeInRight');
        paragraph2.classList.toggle('fadeInRight');
        img.classList.toggle('fadeInTop');
        
    }
    if (e.target.matches("#fractional")) {

        paragraph1.innerHTML = "Optimize your marketing plan with PPC campaigns, email systems, SEO strategies, and web development solutions.";
        paragraph2.innerHTML = "";
        img.src= templateUrl+"/images/seoforrealstate.webp";
        paragraph1.classList.toggle('fadeInRight');
        paragraph2.classList.toggle('fadeInRight');
        img.classList.toggle('fadeInTop');
        btnReadmore.classList.add('active');
    }
    if (e.target.matches("#social-media-management")) {
        paragraph1.innerHTML = "Create strategic content and convert it into a recognizable brand on social media.";
        paragraph2.innerHTML = "Nurture your online presence with a full-time Social Media Specialist. Share High-Quality digital materials and Build a professional public image that meets your goals.";
        img.src= templateUrl+"/images/seoforrealstate.webp";
        img.classList.toggle('fadeInTop');
        paragraph1.classList.toggle('fadeInRight');
        paragraph2.classList.toggle('fadeInRight');
        btnReadmore.classList.remove('active');
    }
    if (e.target.matches("#mk-cordination")) {
        paragraph1.innerHTML = "Manage your brand's reputation and develop complete content plans and marketing strategies across different digital platforms.";
        paragraph2.innerHTML = "Take into your team a full-time Marketing Coordinator to keep your overall marketing plan succeeding.";
        img.src= templateUrl+"/images/seoforrealstate.webp";
        img.classList.toggle('fadeInTop');
        paragraph1.classList.toggle('fadeInRight');
        paragraph2.classList.toggle('fadeInRight');
        btnReadmore.classList.remove('active');
    }
    if (e.target.matches("#copywriting")) {
        paragraph1.innerHTML = "Write attractive marketing and communication copies to persuade readers in different digital formats and platforms.";
        paragraph2.innerHTML = "Include a full-time Copywriter in your team to optimize your content and create copies for social media, brochures, manuals, E-mail, web, and more.";
        img.src= templateUrl+"/images/seoforrealstate.webp";
        img.classList.toggle('fadeInTop');
        paragraph1.classList.toggle('fadeInRight');
        paragraph2.classList.toggle('fadeInRight');
        btnReadmore.classList.remove('active');
    }
    if (e.target.matches("#GraphicDesign")) {
        paragraph1.innerHTML = "Create innovative designs to support your business ideas and improve your brand's image.";
        paragraph2.innerHTML = "Get into your team a talented full-time Graphic Designer to create professional graphics for social media, events, and printed material for all your needs in business.";
        img.src= templateUrl+"/images/seoforrealstate.webp";
        img.classList.toggle('fadeInTop');
        paragraph1.classList.toggle('fadeInRight');
        paragraph2.classList.toggle('fadeInRight');
        btnReadmore.classList.remove('active');
    }
   
    switch (e.target.id) {
        case "ExecutiveAssociate":
            paragraph1.innerHTML = "Solve regular duties like scheduling, reviewing, prioritizing, and answering emails, placing follow-up calls, and organizing documents.";
            paragraph2.innerHTML = "Get a full-time Executive Associate to maximize your time and attend to your daily tasks efficiently.";
            img.src= templateUrl+"/images/seoforrealstate.webp";
            img.classList.toggle('fadeInTop');
            paragraph1.classList.toggle('fadeInRight');
            paragraph2.classList.toggle('fadeInRight');

            break;
        case "DataAnalyst":
            paragraph1.innerHTML = "Monitor your company's movements in the Real Estate market and make effective decisions to guide your overall strategy.";
            paragraph2.innerHTML = "Include a full-time Data Analyst in your team to take informed decisions in your business and improve customer experience.";
            img.src= templateUrl+"/images/seoforrealstate.webp";
            img.classList.toggle('fadeInTop');
            paragraph1.classList.toggle('fadeInRight');
            paragraph2.classList.toggle('fadeInRight');

            break;
        case "TransactionCoordinator":
            paragraph1.innerHTML = "Simplify your selling and buying process with our end-to-end contracts management solution that covers everything from paperwork filling to escrow. ";
            paragraph2.innerHTML = "Partner with a full-time Transaction Coordinator to reduce potential delays in Real Estate processes and to bring top-quality client care.";
            img.src= templateUrl+"/images/seoforrealstate.webp";
            img.classList.toggle('fadeInTop');
            paragraph1.classList.toggle('fadeInRight');
            paragraph2.classList.toggle('fadeInRight');

            break;
         case "ProjectManager":
            paragraph1.innerHTML = "Optimize your work processes and improve performance quality with project planning and timeline creation to identify project risks and manage team tasks efficiently.";
            paragraph2.innerHTML = "Associate with a full-time Project Manager and make sure your projects are integrally planned, developed, implemented, controlled, and closed.";
            img.src= templateUrl+"/images/seoforrealstate.webp";
            img.classList.toggle('fadeInTop');
            paragraph1.classList.toggle('fadeInRight');
            paragraph2.classList.toggle('fadeInRight');

            break;
         case "Bookkeeper":
            paragraph1.innerHTML = "Supervise financial data by ensuring the precise maintenance of books on accounts payable and receivable, payroll processing, and daily financial reconciliations.";
            paragraph2.innerHTML = "Mistakes are costly and your numbers are key to success. Associate with a full-time bookkeeper and ensure your books are up-to-date and efficiently organized. ";
            img.src= templateUrl+"/images/seoforrealstate.webp";
            img.classList.toggle('fadeInTop');
            paragraph1.classList.toggle('fadeInRight');
            paragraph2.classList.toggle('fadeInRight');

            break;
        case "OperationsManager":
            paragraph1.innerHTML = "Optimize operational tasks by managing resources such as personnel, equipment, and materials to ensure the company’s goal achievement.";
            paragraph2.innerHTML = "A business that can manage its operations can drive effective growth. Team up with a full-time Operations Manager and accelerate the competitive standing of the company within the existing market. ";
            img.src= templateUrl+"/images/seoforrealstate.webp";
            img.classList.toggle('fadeInTop');
            paragraph1.classList.toggle('fadeInRight');
            paragraph2.classList.toggle('fadeInRight');

            break;
        case "TransactionCoordinator":
            paragraph1.innerHTML = "Simplify your selling and buying process with our end-to-end contracts management solution that covers everything from paperwork filling to escrow. ";
            paragraph2.innerHTML = "Partner with a full-time Transaction Coordinator to reduce potential delays in Real Estate processes and to bring top-quality client care.";
            img.src= templateUrl+"/images/seoforrealstate.webp";
            img.classList.toggle('fadeInTop');
            paragraph1.classList.toggle('fadeInRight');
            paragraph2.classList.toggle('fadeInRight');

            break;
         case "ProjectManager":
            paragraph1.innerHTML = "Optimize your work processes and improve performance quality with project planning and timeline creation to identify project risks and manage team tasks efficiently.";
            paragraph2.innerHTML = "Associate with a full-time Project Manager and make sure your projects are integrally planned, developed, implemented, controlled, and closed.";
            img.src= templateUrl+"/images/seoforrealstate.webp";
            img.classList.toggle('fadeInTop');
            paragraph1.classList.toggle('fadeInRight');
            paragraph2.classList.toggle('fadeInRight');

            break;  
        
    
        default:
            break;
    }

})
