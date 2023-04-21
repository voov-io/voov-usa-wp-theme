let paragraph1 = document.getElementById('paragraph1');
let paragraph2 = document.getElementById('paragraph2');
let img =  document.getElementById("img-service")
let btnReadmore =  document.getElementById("btn-readmore")
let title = document.getElementById("title")



document.addEventListener('click', e =>{
    if (e.target.matches("#socialMedia")) {
        title.innerHTML = "Social Media Specialist"
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
    if (e.target.matches("#WebDevelopment")) {
 
        paragraph1.innerHTML = "Develop the full potential of your website with efficient optimization, customization, and traffic control.";
        paragraph2.innerHTML = "Web Developer specializes in providing efficient and functional services to elevate your business.";
        img.src= templateUrl+"/images/seoforrealstate.webp";
        paragraph1.classList.toggle('fadeInRight');
        paragraph2.classList.toggle('fadeInRight');
        img.classList.toggle('fadeInTop');
        
    }
    if (e.target.matches("#EmailSystems")) {
 
        paragraph1.innerHTML = "Keep your client relationships strong & flourishing by always staying connected with Email Marketing";
        paragraph2.innerHTML = "Email Experts implements optimized solutions to send the right message to the right people at the best time.";
        img.src= templateUrl+"/images/seoforrealstate.webp";
        paragraph1.classList.toggle('fadeInRight');
        paragraph2.classList.toggle('fadeInRight');
        img.classList.toggle('fadeInTop');
        
    }
    if (e.target.matches("#DigitalPhotoTouchUps")) {
 
        paragraph1.innerHTML = "Elevate your content with stunning Real Estate photography that captivates your audience.";
        paragraph2.innerHTML = "Photo Editors provides efficient digital image editing according to your expectations.";
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
        

        paragraph1.innerHTML = "We create compelling copy for your website, social media, email marketing, advertisements, and other marketing materials.";
        paragraph2.innerHTML = "Our specialists provide a research-based copy that resonates with your audience and inspires them to engage with your brand.";
        img.src= templateUrl+"/images/seoforrealstate.webp";
        img.classList.toggle('fadeInTop');
        title.classList.toggle('fadeInRight');
        paragraph1.classList.toggle('fadeInRight');
        paragraph2.classList.toggle('fadeInRight');
    
    }
    if (e.target.matches("#ContentCalendar")) {
        
        title.innerHTML = "Content Calendar"
        paragraph1.innerHTML = "Designed to help you plan, organize, and schedule your content in advance. ";
        paragraph2.innerHTML = "Keep your social media content consistent, relevant and timely. Boost engagement, increase brand awareness, and drive conversions.";
        img.src= templateUrl+"/images/seoforrealstate.webp";
        img.classList.toggle('fadeInTop');
        title.classList.toggle('fadeInRight');
        paragraph1.classList.toggle('fadeInRight');
        paragraph2.classList.toggle('fadeInRight');
    
    }
    if (e.target.matches("#SocialMediaMonitoring")) {
        
        title.innerHTML = "Social Media Monitoring"
        paragraph1.innerHTML = "We help you monitor your social media accounts and hashtags to gain insights into your audience and identify potential opportunities.";
        paragraph2.innerHTML = "Receive reports and data-driven recommendations to help you optimize your social media strategy, increase engagement, and improve your brand reputation.";
        img.src= templateUrl+"/images/seoforrealstate.webp";
        img.classList.toggle('fadeInTop');
        title.classList.toggle('fadeInRight');
        paragraph1.classList.toggle('fadeInRight');
        paragraph2.classList.toggle('fadeInRight');
    
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
        case "PropertyManagementAssociate":
            paragraph1.innerHTML = "Keep your daily operational tasks highly organized with property focussed administrative strategies.";
            paragraph2.innerHTML = "Associate with a full-time Property Manager optimizes the day-to-day challenges that come with owning a real estate investment property.";
            img.src= templateUrl+"/images/seoforrealstate.webp";
            img.classList.toggle('fadeInTop');
            paragraph1.classList.toggle('fadeInRight');
            paragraph2.classList.toggle('fadeInRight');

            break;
         case "LeasingSpecialist":
            paragraph1.innerHTML = "Assist landlords and property managers in finding qualified tenants for their properties and help those looking for viewing tours, lease terms, and price negotiations.";
            paragraph2.innerHTML = "Be known as a top-performing Realtor. Collaborate with a full-time leasing Specialist to provide personalized customer service to your clients. ";
            img.src= templateUrl+"/images/seoforrealstate.webp";
            img.classList.toggle('fadeInTop');
            paragraph1.classList.toggle('fadeInRight');
            paragraph2.classList.toggle('fadeInRight');

            break;
         case "MaintenanceCoordinator":
            paragraph1.innerHTML = "Take care of your general upkeep of equipment and facilities, including preventative maintenance and contracting service providers.";
            paragraph2.innerHTML = "Associate with a full-time Maintenance coordinator to optimize your maintenance budget and keep operations running smoothly. ";
            img.src= templateUrl+"/images/seoforrealstate.webp";
            img.classList.toggle('fadeInTop');
            paragraph1.classList.toggle('fadeInRight');
            paragraph2.classList.toggle('fadeInRight');

            break;  
         case "LeadManager":
            paragraph1.innerHTML = "Improve the lead generation journey at each stage to sustain profitability, customer engagement, and brand loyalty via various marketing channels.";
            paragraph2.innerHTML = "Get in your team a full-time Lead Manager to prevent loss of leads and maintain your revenue growing.";
            img.src= templateUrl+"/images/seoforrealstate.webp";
            img.classList.toggle('fadeInTop');
            paragraph1.classList.toggle('fadeInRight');
            paragraph2.classList.toggle('fadeInRight');

            break; 
        case "CircleProspectors":
            paragraph1.innerHTML = "Reach new clients and expand your customer database by efficiently monitoring prospects";
            paragraph2.innerHTML = "Begin conversations that lead to transactions with a full-time Circle Prospector specialized in accelerating fruitful deals.";
            img.src= templateUrl+"/images/seoforrealstate.webp";
            img.classList.toggle('fadeInTop');
            paragraph1.classList.toggle('fadeInRight');
            paragraph2.classList.toggle('fadeInRight');

            break; 

           case "TitleCompanies":
            paragraph1.innerHTML = "Are you looking to optimize your closing transactions?  make deals happen efficiently with powerful solutions in the process.";
            paragraph2.innerHTML = "Take in your team a Title Company Associate to provide a better performance and maximize results.";
            img.src= templateUrl+"/images/seoforrealstate.webp";
            img.classList.toggle('fadeInTop');
            paragraph1.classList.toggle('fadeInRight');
            paragraph2.classList.toggle('fadeInRight');

            break;
            case "AppointmentSetter":
                paragraph1.innerHTML = "Optimize your business results and Save time by identifying your buyer personas and nurturing your existing leads. ";
                paragraph2.innerHTML = "Associate with a full-time Appointment Setter to connect potential buyers and sellers to increase your sales opportunities.";
                img.src= templateUrl+"/images/seoforrealstate.webp";
                img.classList.toggle('fadeInTop');
                paragraph1.classList.toggle('fadeInRight');
                paragraph2.classList.toggle('fadeInRight');
    
                break;
            case "LeadsProspector":
                paragraph1.innerHTML = "Are you trying to have a constant supply of prospects? Associate with a full-time Leads Prospector and accelerate your growth.";
                paragraph2.innerHTML = "Grow your revenue by generating qualified leads and converting them into high-value sales.";
                img.src= templateUrl+"/images/seoforrealstate.webp";
                img.classList.toggle('fadeInTop');
                paragraph1.classList.toggle('fadeInRight');
                paragraph2.classList.toggle('fadeInRight');
    
                break;
             case "ZillowLeadsProspector":
                paragraph1.innerHTML = "Want to sell more properties? Associate with a talented full-time Zillow Lead Prospector to save time and sell more.";
                paragraph2.innerHTML = "Maximize your visibility to potential buyers and get a consistent flow of clients. Provide your clients ideal information to guarantee successful appointments. ";
                img.src= templateUrl+"/images/seoforrealstate.webp";
                img.classList.toggle('fadeInTop');
                paragraph1.classList.toggle('fadeInRight');
                paragraph2.classList.toggle('fadeInRight');
    
                break;
             case "Recruiters":
                paragraph1.innerHTML = "Grow your real estate team by recruiting qualified agents to join to your Real Estate team.";
                paragraph2.innerHTML = "Let a full-time Recruiter take your business to the next level bringing to your team talented Real Estate professionals. ";
                img.src= templateUrl+"/images/seoforrealstate.webp";
                img.classList.toggle('fadeInTop');
                paragraph1.classList.toggle('fadeInRight');
                paragraph2.classList.toggle('fadeInRight');
    
                break;
             case "SalesCoordinator":
                paragraph1.innerHTML = "Coordinate the sales team by managing schedules, filing important documents, and communicating relevant information to reach your business goals.";
                paragraph2.innerHTML = "Associate with a full-time Sales Coordinator to maximize your Revenue and stay active in the market. ";
                img.src= templateUrl+"/images/seoforrealstate.webp";
                img.classList.toggle('fadeInTop');
                paragraph1.classList.toggle('fadeInRight');
                paragraph2.classList.toggle('fadeInRight');
    
                break;
             case "InsideSalesAssociate":
                paragraph1.innerHTML = "Create an efficient sales process with a lead generation-oriented associate, and attend your clients’ database while cultivating lasting relationships.";
                paragraph2.innerHTML = "Sales are the most vital aspect of running a successful business. Partner with a full-time Inside Sales Associate and drive cost-effective investment.";
                img.src= templateUrl+"/images/seoforrealstate.webp";
                img.classList.toggle('fadeInTop');
                paragraph1.classList.toggle('fadeInRight');
                paragraph2.classList.toggle('fadeInRight');
    
                break;
        
    
        default:
            break;
    }

})


// BEFORE AFTER FUNCTION

function beforeAfter() {
    document.getElementById("before_after").style.width =
  document.getElementById("before_after_slider").value + "%";
}
