let paragraph1 = document.getElementById('paragraph1');
let paragraph2 = document.getElementById('paragraph2');

let paragraph1ppc = document.getElementById('paragraph1ppc');
let paragraph2ppc = document.getElementById('paragraph2ppc');

let paragraph1d = document.getElementById('paragraph1d');
let paragraph2d = document.getElementById('paragraph2d');

let img =  document.getElementById("img-service")
let btnReadmore =  document.getElementById("btn-readmore")

let title = document.getElementById("title")
let titleppc = document.getElementById("titleppc")
let titled = document.getElementById("titled")



document.addEventListener('click', e =>{
    if (e.target.matches("#Property-Management")) {
        title.innerHTML = "Property Management Associate"
        paragraph1.innerHTML = "Keep your daily operational tasks highly organized with property focussed administrative strategies.";
        paragraph1.classList.toggle('fadeInRight');
        paragraph2.innerHTML = "Associate with a full-time Property Manager optimizes the day-to-day challenges that come with owning a real estate investment property. ";
        paragraph2.classList.toggle('fadeInRight');
    }
    if (e.target.matches("#LeasingSpecialist")) {
        title.innerHTML = "Leasing Specialist"
        paragraph1.innerHTML = "Assist landlords and property managers in finding qualified tenants for their properties and help those looking for viewing tours, lease terms, and price negotiations.";
        paragraph1.classList.toggle('fadeInRight');
        paragraph2.innerHTML = "Be known as a top-performing Realtor. Collaborate with a full-time leasing Specialist to provide personalized customer service to your clients.";
        paragraph2.classList.toggle('fadeInRight');
    }
    if (e.target.matches("#MaintenanceCoordinator")) {
        title.innerHTML = "Maintenance Coordinator"
        paragraph1.innerHTML = "Take care of your general upkeep of equipment and facilities, including preventative maintenance and contracting service providers.";
        paragraph1.classList.toggle('fadeInRight');
        paragraph2.innerHTML = "Associate with a full-time Maintenance coordinator to optimize your maintenance budget and keep operations running smoothly.";
        paragraph2.classList.toggle('fadeInRight');
    }
    if (e.target.matches("#LeadManager")) {
        title.innerHTML = "Lead Manager"
        paragraph1.innerHTML = "Improve the lead generation journey at each stage to sustain profitability, customer engagement, and brand loyalty via various marketing channels.";
        paragraph1.classList.toggle('fadeInRight');
        paragraph2.innerHTML = "Get in your team a full-time Lead Manager to prevent loss of leads and maintain your revenue growing. ";
        paragraph2.classList.toggle('fadeInRight');
    }
    if (e.target.matches("#ExecutiveAssistant")) {
        title.innerHTML = "Executive Assistant"
        paragraph1.innerHTML = "Solve regular duties like scheduling, reviewing, prioritizing, and answering emails, placing follow-up calls, and organizing documents.";
        paragraph1.classList.toggle('fadeInRight');
        paragraph2.innerHTML = "Get a full-time Executive Associate to maximize your time and attend to your daily tasks efficiently. ";
        paragraph2.classList.toggle('fadeInRight');
    }
    if (e.target.matches("#OperationsManager")) {
        title.innerHTML = "Operations Manager"
        paragraph1.innerHTML = "Optimize operational tasks by managing resources such as personnel, equipment, and materials to ensure the company’s goal achievement.        ";
        paragraph1.classList.toggle('fadeInRight');
        paragraph2.innerHTML = "A business that can manage its operations can drive effective growth. Team up with a full-time Operations Manager and accelerate the competitive standing of the company within the existing market. ";
        paragraph2.classList.toggle('fadeInRight');
    }
    if (e.target.matches("#Bookkeeper")) {
        title.innerHTML = "Bookkeeper"
        paragraph1.innerHTML = "Supervise financial data by ensuring the precise maintenance of books on accounts payable and receivable, payroll processing, and daily financial reconciliations.";
        paragraph1.classList.toggle('fadeInRight');
        paragraph2.innerHTML = "Mistakes are costly and your numbers are key to success. Associate with a full-time bookkeeper and ensure your books are up-to-date and efficiently organized. ";
        paragraph2.classList.toggle('fadeInRight');
    }
    if (e.target.matches("#ProjectManager")) {
        title.innerHTML = "Project Manager"
        paragraph1.innerHTML = "Optimize your work processes and improve performance quality with project planning and timeline creation to identify project risks and manage team tasks efficiently.";
        paragraph1.classList.toggle('fadeInRight');
        paragraph2.innerHTML = "Associate with a full-time Project Manager and make sure your projects are integrally planned, developed, implemented, controlled, and closed.";
        paragraph2.classList.toggle('fadeInRight');
    }
    if (e.target.matches("#Dataanalyst")) {
        title.innerHTML = "Data analyst"
        paragraph1.innerHTML = "Monitor your company's movements in the Real Estate market and make effective decisions to guide your overall strategy.        ";
        paragraph1.classList.toggle('fadeInRight');
        paragraph2.innerHTML = "Include a full-time Data Analyst in your team to take informed decisions in your business and improve customer experience.";
        paragraph2.classList.toggle('fadeInRight');
    }
    if (e.target.matches("#TransactionCoordinator")) {
        title.innerHTML = "Transaction Coordinator"
        paragraph1.innerHTML = "Simplify your selling and buying process with our end-to-end contracts management solution that covers everything from paperwork filling to escrow. ";
        paragraph1.classList.toggle('fadeInRight');
        paragraph2.innerHTML = "Partner with a full-time Transaction Coordinator to reduce potential delays in Real Estate processes and to bring top-quality client care. ";
        paragraph2.classList.toggle('fadeInRight');
    }
    if (e.target.matches("#socialMediaManager")) {
        title.innerHTML = "Social Media Manager"
        paragraph1.innerHTML = "Share high-quality digital materials and build a professional public image that meets your goals with a specialized Social Media Manager";
        paragraph1.classList.toggle('fadeInRight');
        paragraph2.innerHTML = "By incorporating social media engaging methods and strategic multimedia content  you will attract more audience and succeed. <br><br>Start nurturing your online presence with us!";
        paragraph2.classList.toggle('fadeInRight');
    }
    if (e.target.matches("#MarketingCoordinator")) {
        title.innerHTML = "Marketing Coordinator"
        paragraph1.innerHTML = "Are you tired of handling many tasks, from social media to event planning at once in your real estate business?";
        paragraph2.innerHTML = "Partner with a Marketing coordinator to build a strong brand identity on multiple marketing channels with creative strategies to attract new clients and boost your growth efficiently.";
        paragraph1.classList.toggle('fadeInRight');
        paragraph2.classList.toggle('fadeInRight');
        
    }
    if (e.target.matches("#GraphicDesigner")) {
        title.innerHTML = "Graphic Designer"
        paragraph1.innerHTML = "Launch and optimize PPC (Pay per click) Campaigns. Track KPIs to evaluate performance and increase better ROI.";
        paragraph2.innerHTML = "PPC experts, ensure effective budget investment for successful results, they captivate the appropriate audience to maximize the results of a paid advertising campaign online.";
        paragraph1.classList.toggle('fadeInRight');
        paragraph2.classList.toggle('fadeInRight');
        
    }
    if (e.target.matches("#Copywriter")) {
        title.innerHTML = "Copywriter"
        paragraph1.innerHTML = "Write attractive marketing and communication copies to persuade readers in different digital formats and platforms.";
        paragraph2.innerHTML = "Include a full-time Copywriter in your team to optimize your content and create copies for social media, brochures, manuals, E-mail, web, and more. Include a full-time Copywriter in your team to optimize your content and create copies for social media, brochures, manuals, E-mail, web, and more. ";
        paragraph1.classList.toggle('fadeInRight');
        paragraph2.classList.toggle('fadeInRight');
        
    }
    if (e.target.matches("#SEOSEM")) {
        title.innerHTML = "SEO/SEM"
        paragraph1.innerHTML = "Expand your online reach with organic techniques and create a powerful impact in the Digital world. ";
        paragraph2.innerHTML = "Improve your website’s visibility in search engine result pages by ensuring all web elements are properly optimized  for a better user experience <br><br>Boost your business online with our Specialized SEO/SEM Services!";
        paragraph1.classList.toggle('fadeInRight');
        paragraph2.classList.toggle('fadeInRight');
        
    }
    if (e.target.matches("#WebDevelopment")) {
        title.innerHTML = "Web Developer"
        paragraph1.innerHTML = "Develop the full potential of your website with efficient optimization, customization, and traffic control.        ";
        paragraph2.innerHTML = "Web Developers specialize in providing efficient and functional services to elevate your business so you can easily showcase your properties and attract more potential buyers.<br><br>Associate with a real estate-focused web developer and give your business a competitive edge.        ";
        paragraph1.classList.toggle('fadeInRight');
        paragraph2.classList.toggle('fadeInRight');
        
    }
    if (e.target.matches("#PPC")) {
        title.innerHTML = "PPC (Pay per click)"
        paragraph1.innerHTML = "Make a smart move towards boosting your sales by investing in launching and optimizing Pay Per Click advertising campaigns.";
        paragraph2.innerHTML = "Our experts will precisely target the audience to meet your campaign's goals and track it to improve the final results.<br><br>PPC specialists ensure strategic budget investment to captivate the appropriate public and take your business to the next level! ";
        paragraph1.classList.toggle('fadeInRight');
        paragraph2.classList.toggle('fadeInRight');
        
    }
    if (e.target.matches("#VideoEditor")) {
        title.innerHTML = "Video Editor"
        paragraph1.innerHTML = "Capture your audience with high-quality videos, make your listings shine, and impress potential clients.";
        paragraph2.innerHTML = "Our Video Editors create exceptional videos on different formats and for various marketing channels to accomplish your expectations and showcase your business goals using a combination of animations, effects, music, and other multimedia elements.<br><br>Get into your team a talented Video Editor and start creating stunning real estate videos now!";
        paragraph1.classList.toggle('fadeInRight');
        paragraph2.classList.toggle('fadeInRight');
        
    }
    if (e.target.matches("#ISA")) {
        title.innerHTML = "Inside Sales Associate"
        paragraph1.innerHTML = "Create an efficient sales process with a lead generation-oriented associate, and attend your clients’ database while cultivating lasting relationships. ";
        paragraph2.innerHTML = "Ensure potential customers make informed decisions, find the right home or property, and handle all negotiations with prospects.<br><br>Partner with our Inside Sales Associates and drive cost-effective investment in your business!";
        paragraph1.classList.toggle('fadeInRight');
        paragraph2.classList.toggle('fadeInRight');
        
    }
    if (e.target.matches("#AppointmentSetter")) {
        title.innerHTML = "Appointment Setter"
        paragraph1.innerHTML = "Optimize your business results and save time by identifying buyer personas and nurturing your existing leads.  ";
        paragraph2.innerHTML = "Connect potential buyers and sellers to increase your sales opportunities with streamlined processes and experience a more efficient and profitable business.<br><br>Partner with our expert Appointment Setters and increase your revenue faster!    ";
        paragraph1.classList.toggle('fadeInRight');
        paragraph2.classList.toggle('fadeInRight');
        
    }
    if (e.target.matches("#SalesCoordinator")) {
        title.innerHTML = "Sales Coordinator"
        paragraph1.innerHTML = "Coordinate the sales team by managing schedules, filing important documents, and communicating relevant information to reach your business goals.";
        paragraph2.innerHTML = "With a sales coordinator on board, you'll have the expertise needed to stay ahead of the competition and ensure success in an ever-evolving industry. <br><br>Associate with our Sales Coordinators and maximize your Revenue now!        ";
        paragraph1.classList.toggle('fadeInRight');
        paragraph2.classList.toggle('fadeInRight');
        
    }
    if (e.target.matches("#Recruiters")) {
        title.innerHTML = "Recruiters for Real Estate Agents"
        paragraph1.innerHTML = "Grow your real estate business by recruiting qualified agents to join your team with personalized attention and goal-oriented recruitment parameters.        ";
        paragraph2.innerHTML = "As a busy real estate agent, you might not have hours to sift through resumes, interview candidates, and negotiate salaries. That's where a recruiter comes in.<br><br>Attract and retain top talent while saving time and resources with our expert recruiters!        ";
        paragraph1.classList.toggle('fadeInRight');
        paragraph2.classList.toggle('fadeInRight');
        
    }
    if (e.target.matches("#LeadsProspectors")) {
        title.innerHTML = "Leads Prospector"
        paragraph1.innerHTML = "Are you trying to have a constant supply of prospects? Grow your revenue by generating qualified leads and converting them into high-value sales.";
        paragraph2.innerHTML = "Develop an efficient database of potential prospects from all over the US and create custom filters by location, demographics and buying preferences in order to find your ideal customer.<br><br> Stop wasting time and money on outdated methods to find potential clients. Associate with our Leads Prospector now and close deals faster!";
        paragraph1.classList.toggle('fadeInRight');
        paragraph2.classList.toggle('fadeInRight');
        
    }
    if (e.target.matches("#CircleProspecting")) {
        title.innerHTML = "Circle Prospectors"
        paragraph1.innerHTML = "Reach new clients and expand your customer database by efficiently monitoring prospects and tracking their interests.        ";
        paragraph2.innerHTML = "Our powerful strategies allows you to easily identify potential clients in your targeted market, giving you the edge over your competitors.<br><br>Accelerate fruitful deals with our specialized Circle Prospectors .        ";
        paragraph1.classList.toggle('fadeInRight');
        paragraph2.classList.toggle('fadeInRight');
        
    }
    if (e.target.matches("#ZillowLeadsProspectors")) {
        title.innerHTML = "Zillow Leads Prospector"
        paragraph1.innerHTML = "Are you looking to optimize your closing transactions?";
        paragraph2.innerHTML = "Having a reliable title company by your side can save you time, money, and headaches. They assist you with title searches, ensure clear property ownership, and manage all aspects of the closing process.<br><br>Don't risk your business's success! Close your transactions quickly and efficiently. Trust our specialized Title Companies to maximize your Results!  ";
        paragraph1.classList.toggle('fadeInRight');
        paragraph2.classList.toggle('fadeInRight');
        
    }
    if (e.target.matches("#TitleCompanies")) {
        title.innerHTML = "Title Companies"
        paragraph1.innerHTML = "Create an efficient sales process with a lead generation-oriented associate, and attend your clients’ database while cultivating lasting relationships. ";
        paragraph2.innerHTML = "Ensure potential customers make informed decisions, find the right home or property, and handle all negotiations with prospects.<br><br>Partner with our Inside Sales Associates and drive cost-effective investment in your business!";
        paragraph1.classList.toggle('fadeInRight');
        paragraph2.classList.toggle('fadeInRight');
        
    }
    if (e.target.matches("#DigitalPhotoTouchUps")) {
 
        paragraph1.innerHTML = "Elevate your content with stunning Real Estate photography that captivates your audience.";
        paragraph2.innerHTML = "Photo Editors provides efficient digital image editing according to your expectations.";
        paragraph1.classList.toggle('fadeInRight');
        paragraph2.classList.toggle('fadeInRight');
        
    }
    if (e.target.matches("#fractional")) {

        paragraph1.innerHTML = "Optimize your marketing plan with PPC campaigns, email systems, SEO strategies, and web development solutions.";
        paragraph2.innerHTML = "";
        paragraph1.classList.toggle('fadeInRight');
        paragraph2.classList.toggle('fadeInRight');
        btnReadmore.classList.add('active');
    }
    if (e.target.matches("#social-media-management")) {
        paragraph1.innerHTML = "Create strategic content and convert it into a recognizable brand on social media.";
        paragraph2.innerHTML = "Nurture your online presence with a full-time Social Media Specialist. Share High-Quality digital materials and Build a professional public image that meets your goals.";
        paragraph1.classList.toggle('fadeInRight');
        paragraph2.classList.toggle('fadeInRight');
        btnReadmore.classList.remove('active');
    }
    if (e.target.matches("#mk-cordination")) {
        paragraph1.innerHTML = "Manage your brand's reputation and develop complete content plans and marketing strategies across different digital platforms.";
        paragraph2.innerHTML = "Take into your team a full-time Marketing Coordinator to keep your overall marketing plan succeeding.";
        paragraph1.classList.toggle('fadeInRight');
        paragraph2.classList.toggle('fadeInRight');
        btnReadmore.classList.remove('active');
    }
    if (e.target.matches("#Copywriter")) {
        

        paragraph1.innerHTML = "We create compelling copy for your website, social media, email marketing, advertisements, and other marketing materials.";
        paragraph2.innerHTML = "Our specialists provide a research-based copy that resonates with your audience and inspires them to engage with your brand.";
        title.innerHTML = "Copywriter"
        title.classList.toggle('fadeInRight');
        title.classList.toggle('fadeInRight');
        paragraph1.classList.toggle('fadeInRight');
        paragraph2.classList.toggle('fadeInRight');
    
    }
    if (e.target.matches("#ContentCalendar")) {
        
        title.innerHTML = "Content Calendar"
        paragraph1.innerHTML = "Designed to help you plan, organize, and schedule your content in advance. ";
        paragraph2.innerHTML = "Keep your social media content consistent, relevant and timely. Boost engagement, increase brand awareness, and drive conversions.";

        title.classList.toggle('fadeInRight');
        paragraph1.classList.toggle('fadeInRight');
        paragraph2.classList.toggle('fadeInRight');
    
    }
    if (e.target.matches("#SocialMediaMonitoring")) {
        
        title.innerHTML = "Social Media Monitoring"
        paragraph1.innerHTML = "We help you monitor your social media accounts and hashtags to gain insights into your audience and identify potential opportunities.";
        paragraph2.innerHTML = "Receive reports and data-driven recommendations to help you optimize your social media strategy, increase engagement, and improve your brand reputation.";       

        title.classList.toggle('fadeInRight');
        paragraph1.classList.toggle('fadeInRight');
        paragraph2.classList.toggle('fadeInRight');
    
    }
    if (e.target.matches("#GraphicDesign")) {
        paragraph1.innerHTML = "Create innovative designs to support your business ideas and improve your brand's image.";
        paragraph2.innerHTML = "Get into your team a talented full-time Graphic Designer to create professional graphics for social media, events, and printed material for all your needs in business.";
        paragraph1.classList.toggle('fadeInRight');
        paragraph2.classList.toggle('fadeInRight');
        btnReadmore.classList.remove('active');
    }
   
    switch (e.target.id) {
        case "ExecutiveAssociate":
            paragraph1.innerHTML = "Solve regular duties like scheduling, reviewing, prioritizing, and answering emails, placing follow-up calls, and organizing documents.";
            paragraph2.innerHTML = "Get a full-time Executive Associate to maximize your time and attend to your daily tasks efficiently.";
            paragraph1.classList.toggle('fadeInRight');
            paragraph2.classList.toggle('fadeInRight');

            break;
        case "DataAnalyst":
            paragraph1.innerHTML = "Monitor your company's movements in the Real Estate market and make effective decisions to guide your overall strategy.";
            paragraph2.innerHTML = "Include a full-time Data Analyst in your team to take informed decisions in your business and improve customer experience.";
            paragraph1.classList.toggle('fadeInRight');
            paragraph2.classList.toggle('fadeInRight');

            break;
        case "TransactionCoordinator":
            paragraph1.innerHTML = "Simplify your selling and buying process with our end-to-end contracts management solution that covers everything from paperwork filling to escrow. ";
            paragraph2.innerHTML = "Partner with a full-time Transaction Coordinator to reduce potential delays in Real Estate processes and to bring top-quality client care.";
            paragraph1.classList.toggle('fadeInRight');
            paragraph2.classList.toggle('fadeInRight');

            break;
         case "ProjectManager":
            paragraph1.innerHTML = "Optimize your work processes and improve performance quality with project planning and timeline creation to identify project risks and manage team tasks efficiently.";
            paragraph2.innerHTML = "Associate with a full-time Project Manager and make sure your projects are integrally planned, developed, implemented, controlled, and closed.";
            paragraph1.classList.toggle('fadeInRight');
            paragraph2.classList.toggle('fadeInRight');

            break;
         case "Bookkeeper":
            paragraph1.innerHTML = "Supervise financial data by ensuring the precise maintenance of books on accounts payable and receivable, payroll processing, and daily financial reconciliations.";
            paragraph2.innerHTML = "Mistakes are costly and your numbers are key to success. Associate with a full-time bookkeeper and ensure your books are up-to-date and efficiently organized. ";
            paragraph1.classList.toggle('fadeInRight');
            paragraph2.classList.toggle('fadeInRight');

            break;
        case "OperationsManager":
            paragraph1.innerHTML = "Optimize operational tasks by managing resources such as personnel, equipment, and materials to ensure the company’s goal achievement.";
            paragraph2.innerHTML = "A business that can manage its operations can drive effective growth. Team up with a full-time Operations Manager and accelerate the competitive standing of the company within the existing market. ";
            paragraph1.classList.toggle('fadeInRight');
            paragraph2.classList.toggle('fadeInRight');

            break;
        case "PropertyManagementAssociate":
            paragraph1.innerHTML = "Keep your daily operational tasks highly organized with property focussed administrative strategies.";
            paragraph2.innerHTML = "Associate with a full-time Property Manager optimizes the day-to-day challenges that come with owning a real estate investment property.";            
            
            paragraph1.classList.toggle('fadeInRight');
            paragraph2.classList.toggle('fadeInRight');

            break;
         case "LeasingSpecialist":
            paragraph1.innerHTML = "Assist landlords and property managers in finding qualified tenants for their properties and help those looking for viewing tours, lease terms, and price negotiations.";
            paragraph2.innerHTML = "Be known as a top-performing Realtor. Collaborate with a full-time leasing Specialist to provide personalized customer service to your clients. ";            
            paragraph1.classList.toggle('fadeInRight');
            paragraph2.classList.toggle('fadeInRight');

            break;
         case "MaintenanceCoordinator":
            paragraph1.innerHTML = "Take care of your general upkeep of equipment and facilities, including preventative maintenance and contracting service providers.";
            paragraph2.innerHTML = "Associate with a full-time Maintenance coordinator to optimize your maintenance budget and keep operations running smoothly. ";            
            paragraph1.classList.toggle('fadeInRight');
            paragraph2.classList.toggle('fadeInRight');

            break;  
         case "LeadManager":
            paragraph1.innerHTML = "Improve the lead generation journey at each stage to sustain profitability, customer engagement, and brand loyalty via various marketing channels.";
            paragraph2.innerHTML = "Get in your team a full-time Lead Manager to prevent loss of leads and maintain your revenue growing.";            
            paragraph1.classList.toggle('fadeInRight');
            paragraph2.classList.toggle('fadeInRight');

            break; 
        case "CircleProspectors":
            paragraph1.innerHTML = "Reach new clients and expand your customer database by efficiently monitoring prospects";
            paragraph2.innerHTML = "Begin conversations that lead to transactions with a full-time Circle Prospector specialized in accelerating fruitful deals.";           

            paragraph1.classList.toggle('fadeInRight');
            paragraph2.classList.toggle('fadeInRight');

            break; 

           case "TitleCompanies":
            paragraph1.innerHTML = "Are you looking to optimize your closing transactions?  make deals happen efficiently with powerful solutions in the process.";
            paragraph2.innerHTML = "Take in your team a Title Company Associate to provide a better performance and maximize results.";
            paragraph1.classList.toggle('fadeInRight');
            paragraph2.classList.toggle('fadeInRight');

            break;
            case "AppointmentSetter":
                paragraph1.innerHTML = "Optimize your business results and Save time by identifying your buyer personas and nurturing your existing leads. ";
                paragraph2.innerHTML = "Associate with a full-time Appointment Setter to connect potential buyers and sellers to increase your sales opportunities.";
                paragraph1.classList.toggle('fadeInRight');
                paragraph2.classList.toggle('fadeInRight');
    
                break;
            case "LeadsProspector":
                paragraph1.innerHTML = "Are you trying to have a constant supply of prospects? Associate with a full-time Leads Prospector and accelerate your growth.";
                paragraph2.innerHTML = "Grow your revenue by generating qualified leads and converting them into high-value sales.";
                paragraph1.classList.toggle('fadeInRight');
                paragraph2.classList.toggle('fadeInRight');
    
                break;
             case "ZillowLeadsProspector":
                paragraph1.innerHTML = "Want to sell more properties? Associate with a talented full-time Zillow Lead Prospector to save time and sell more.";
                paragraph2.innerHTML = "Maximize your visibility to potential buyers and get a consistent flow of clients. Provide your clients ideal information to guarantee successful appointments. ";
                paragraph1.classList.toggle('fadeInRight');
                paragraph2.classList.toggle('fadeInRight');
    
                break;
             case "Recruiters":
                paragraph1.innerHTML = "Grow your real estate team by recruiting qualified agents to join to your Real Estate team.";
                paragraph2.innerHTML = "Let a full-time Recruiter take your business to the next level bringing to your team talented Real Estate professionals. ";
                paragraph1.classList.toggle('fadeInRight');
                paragraph2.classList.toggle('fadeInRight');
    
                break;
             case "SalesCoordinator":
                paragraph1.innerHTML = "Coordinate the sales team by managing schedules, filing important documents, and communicating relevant information to reach your business goals.";
                paragraph2.innerHTML = "Associate with a full-time Sales Coordinator to maximize your Revenue and stay active in the market. ";
                paragraph1.classList.toggle('fadeInRight');
                paragraph2.classList.toggle('fadeInRight');
    
                break;
             case "InsideSalesAssociate":
                paragraph1.innerHTML = "Create an efficient sales process with a lead generation-oriented associate, and attend your clients’ database while cultivating lasting relationships.";
                paragraph2.innerHTML = "Sales are the most vital aspect of running a successful business. Partner with a full-time Inside Sales Associate and drive cost-effective investment.";
                paragraph1.classList.toggle('fadeInRight');
                paragraph2.classList.toggle('fadeInRight');
    
                break;
            case "Customizedstrategy":
                titleppc.innerHTML= "Customized strategy and ad copy creation"
                paragraph1ppc.innerHTML = "s";
                paragraph2ppc.innerHTML = "s";
                titleppc.classList.toggle('fadeInRight');
                paragraph1ppc.classList.toggle('fadeInRight');
                paragraph2ppc.classList.toggle('fadeInRight');
    
                break;
             case "ContinuesOptimization":
                titleppc.innerHTML= "Continues Optimization"
                paragraph1ppc.innerHTML = "c";
                paragraph2ppc.innerHTML = "c";
                titleppc.classList.toggle('fadeInRight');
                paragraph1ppc.classList.toggle('fadeInRight');
                paragraph2ppc.classList.toggle('fadeInRight');
    
                break;
             case "ResultsReporting":
                titleppc.innerHTML= "Results Reporting"
                paragraph1ppc.innerHTML = "r";
                paragraph2ppc.innerHTML = "r";
                title.classList.toggle('fadeInRight');
                paragraph1ppc.classList.toggle('fadeInRight');
                paragraph2ppc.classList.toggle('fadeInRight');
    
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
