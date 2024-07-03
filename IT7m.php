<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Job Listings</title>
</head>

<style>

body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
}

header {
    background-color: #333;
    color: #fff;
    padding: 20px 0;
    text-align: center;

}

nav {
    display: flex;
    justify-content: center;
    background-color: #555;
    padding: 10px 0;
}

nav ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
}

nav ul li {
    display: inline;
    margin-right: 20px;
}

nav ul li a {
    text-decoration: none;
    color: #fff;
    font-weight: bold;
    font-size: 16px;
    transition: color 0.3s;
}

nav ul li a:hover {
    color: #ffcc00;
}

section.main-content {
    margin: 20px;
 
}



footer {
    background-color: #333;
    color: #fff;
    padding: 10px;
    text-align: center;
    position: fixed;
    bottom: 0;
    width: 100%;
}

/* New Styles for Job Listings Page */
ul.job-listings {
    list-style: none;
    padding: 0;
}

.job-listing {
    border: 1px solid #ddd;
    border-radius: 8px;
    margin-bottom: 10px;
    padding: 10px;
    background-color: #f9f9f9;
    
}


.job-listing h3 {
    color: #333;
    margin-bottom: 15px;
    margin-top: 10px;
}

.job-listing p {
    color: #555;
    margin-bottom: 10px;
}

.job-listing .details {
    display: flex;
    justify-content: space-between;
}

.job-listing .details span {
    color: #888;
}

.job-listing a {
    color: #ffcc00;
    text-decoration: none;
    font-weight: bold;
    
}

.job-listing a:hover {
    text-decoration: underline;
    color: #e69900;
}

/*  moda
*/
footer {
    background-color: #333;
    color: #fff;
    padding: 10px;
    text-align: center;
    position: fixed;
    bottom: 0;
    width: 100%;
}
              
.modal {
    display: none;
  position: fixed;
  z-index: 1;
  left: 0;
  top: 0;
  height: 100%;
  width: 100%;
  overflow: auto;
  background-color: rgba(0, 0, 0, 0.5);
    
}

.modal-content {
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    position: absolute;
    top: 50%;
    left: 30%;
   
    width: 80%;
    max-width: 800px;
    border: 2px solid red;
    box-shadow:  0 0 20px red;
    border-left: 3px solid rgb(0, 238, 255);
    border-right: 3px solid rgb(247, 0, 185);
    border-bottom: 3px solid orange;
    border-radius: 12px;
}
.modal-content:hover{
    box-shadow:  0 0 20px rgb(0, 76, 240);


}

.close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
    cursor: pointer;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

form {
    display: flex;
    flex-direction: column;
}

label {
    margin-bottom: 5px;
}




input {
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
}

input[type="submit"] {
    background-color: #ffcc00;
    color: #333;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
}

input[type="submit"]:hover {
    background-color: #e69900;
}
.main-content{

    margin: 12px 90px;
}
ul{

    justify-content: center;
    align-items: center;
}
li{
    color: black;
}
/*

li::marker{
        content: '🕉🙏🕉..';
    }
*/

</style>
<body>
    <header>
        <h1>  IT COMPANY JOB</h1>
        <nav>
            <ul>
                <li><a href="home.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="index.php">Jobs</a></li>
                
            </ul>
        </nav>
    </header>

    <section class="main-content">
        <h2>Current Job Listings</h2>

 <pm>   

        <ul class="job-listings">
            <li class="job-listing">
                <h3>Developer</h3>
        <button class="open-modal-btn" data-modal-id="modal6">Details</button>
        <button class="open-modal-btn" data-modal-id="modal4">Salary</button>
       
                
        <div id="modal6" class="modal">
            <div class="modal-content">
                <span class="close" data-modal-id="modal6">&times;</span>
                

             <mp>
               <h4>About the job</h4> <hr>
               <ul> 
                <li>Job Title- PHP Developer</li>
                <li>Experience- 3-10 yrs</li>
                <li>Location- Hyderabad</li>
                <b>Job Description-</b>
                <h4>PHP JD – Key Skills</h4>
                <li>CakePHP Framework Proficiency: Strong understanding and hands-on experience with CakePHP framework, including its architecture, conventions, and best practices.</li>
                <li>PHP Development: Proficiency in PHP programming language, including OOP concepts, data structures, and design patterns relevant to CakePHP</li>
                <li>MVC Architecture: Thorough understanding of Model-View-Controller (MVC)</li> 
                <li>Database Management: Experience working with databases, especially MySQL, PostgreSQL, or other databases commonly used in CakePHP applications. Knowledge of database design and optimization is beneficial.</li>
                <li>HTML/CSS/JavaScript: Basic understanding of front-end technologies such as HTML, CSS, and JavaScript to work collaboratively with front-end developers and ensure seamless integration.</li>
                <li>Documentation and Communication: Strong communication skills to collaborate with cross-functional teams and the ability to create clear documentation for code, APIs, and processes.</li>
                <li>Problem-Solving Skills: The capability to analyze problems and provide efficient solutions within the CakePHP framework.</li>


               </ul> <hr>
               <h4>About the company</h4>
               <p>Coforge is a global digital services and solutions provider, that enables its clients to transform at the intersect of domain expertise and emerging technologies to achieve real-world business impact. A focus on very select industries, a detailed understanding of the underlying processes of those industries, and partnerships with leading platforms provides us with a distinct perspective. Coforge leads with its product engineering approach and leverages Cloud, Data, Integration,</p>

           <hr>
             </mp>
                
                

            </div>
        </div>
                              <p>Developer,
                                Wipro · Mumbai, Maharashtra, India</p>
                <a href="add-new.php">Apply</a>
            </li>

        </pm>     

            <!--  1. Add more job listings here -->

            <div id="modal4" class="modal">
                <div class="modal-content">
                    <span class="close" data-modal-id="modal4">&times;</span>
                   <p>201-500 employees · Information Technology & Services</p>
                    <h4><b>Pay</b></h4>
                    <p>₹80,000 - ₹1,00,000 a month</p>
                    <h4><b>Job type</b></h4>
                <b>10,001+ employees · IT Services and IT Consulting</b>
                    <p>Full-time</p>
                    <h4><b>Shift and schedule</b></h4>
                    <p>Day shift:
                        Monday to Friday</p>
                        <h4><b>Education:</b></h4> <p>Bachelor's (Preferred)</p>  <h4><b>Ability to Relocate:</b></h4>
                       
                       <hr> <ul>
                            
                            <p>Website</p>
                            <li>http://www.wipro.com</li>
                            <p>Industry</p>
                            <li>IT Services and IT Consulting</li>
                            <p>Company size</p> <li>10,001+ employees</li> <p>Headquarters</p> <li>Developer
                                Wipro · Mumbai, Maharashtra, India</li>
                            <p>Founded</p> <li>2004</li> <p>Specialties</p> <li>Travel and Transportation, Banking and Financial Services, Insurance, Healthcare, Public Sector, Business Process Solutions, Media, ERP, Manufacturing, Business Process Management, SAP, Metaverse, Digital Services, Cloud and Infrastructure Management Services, Artificial Intelligence, Machine Learning, Data & Analytics, and Data Science</li>
                        </ul>
                        
                        <hr>
                        <p>Developer
                            Wipro · Mumbai, Maharashtra, India </p> <hr>

                </div>
            </div>
    
                  <!--.................................... 2.job listings here ....................................-->

             

            <li class="job-listing">
                <h3> Technical Specialist - Data Engineer</h3>
        <button class="open-modal-btn" data-modal-id="modal5">Detail</button>
        <button class="open-modal-btn" data-modal-id="modal3">Salary</button>

                
       
           <div id="modal5" class="modal">
            <div class="modal-content">
                <span class="close" data-modal-id="modal5">&times;</span>
              
                  <h4>About the job</h4>
                  <p>Noventiq (Noventiq Holdings PLC) is a leading global solutions and services provider in digital transformation and cybersecurity, headquartered in London. The company enables, facilitates, and accelerates digital transformation for its customers’ businesses, connecting 80,000+ organizations across all sectors with a vast selection of best-in-class IT vendors, alongside its own services and solutions.</p>
                  <hr>
                  <ul>

                    <li>One of the largest SI’s in India with revenue close to 700M$ and growing to 900M$.</li>
                    <li>3500+ Employees in India for India.</li>
                    <li>Total 28 Offices in India across North, South, West & East.</li> <li>1000+ Resident Engineers across India.</li>
                    <li>2500+ technical resources in India for India.</li> <li>Technology partnerships with Top 3 Cloud Solution Providers, Top 3 Infrastructure companies, Top 10 Cybersecurity companies</li>
                    <li>Enviable customer base: 4 of Top 5 Banks, 3 of Top 5 IT companies, 3 of Top 5 BPO’s, 3 of Top 5 Pharma companies.</li>
                    <li>Largest partner to Microsoft with combined infeed of US$600M about 25% of Microsoft India revenues. 
                    </li>
               
               <hr>    
                <h4>What You'll Do

                    Data Pipeline Development: </h4>

                
                
                
                
                </ul>
                <ol type="1">
                    <li>Design, construct, and maintain efficient, scalable, and reliable data pipelines using Azure Data Factory and Azure Databricks.</li>
<li>Develop and implement ETL (Extract, Transform, Load) processes and frameworks to automate the extraction, transformation, and loading of data from various sources into the data warehouse.</li>
<li>Ensure data quality and integrity throughout the data pipeline process.</li>


<hr>

<h4>Data Modeling And Warehousing</h4> 
<li>Develop and optimize data models to improve data accessibility and foster data-driven decision-making across the organization.</li>
<li>Construct and maintain data warehouses and data lakes, utilizing Azure SQL Database, Azure Synapse Analytics, or Azure Cosmos DB, ensuring optimal data storage and retrieval</li>
<li>Collaborate with business stakeholders to understand their data requirements and translate these into technical implementations</li>


                </ol>

                <hr>

                
                    <ul>
                        <h4>Data Integration</h4>

                        <li>Integrate disparate data sources into a unified system, ensuring consistency and availability of data.</li>
                        <li>Work with APIs, SQL, and other data delivery systems to collect and distribute data efficiently.</li>
                        <li>Implement best practices for data integration, data quality, and data cleansing.</li>
                    </ul>
                 <hr>
            </div>

        </div>
                    <p><b>Noventiq · Mumbai, Maharashtra, India </b></p>
                                    <!-- 2number. modal -->
                 
                         
      <div id="modal3" class="modal">
    <div class="modal-content">
        <span class="close" data-modal-id="modal3">&times;</span>
      
      <h4>Salary Details</h4>
      <p>15-20 employees · Information Technology & Services</p>
      <h4><b>Pay</b></h4>
      <p><b>₹50,000 - ₹1,00,000 a month</b></p>
      <b>5,001-10,000 employees · IT Services and IT Consulting</b>
      <p>On-site  Full-time  Entry level</p>
      <h4><b>Job type</b></h4>
      <hr>
      <h4>Overview</h4>
      <p>Noventiq (Noventiq Holdings plc) is a leading global solutions and services provider in digital transformation and cybersecurity, headquartered in London. The company enables, facilitates, and accelerates digital transformation for its customers’ businesses, connecting 80,000+ organizations across all sectors with a vast selection of best-in-class IT vendors, alongside its own services and solutions.</p>
<hr>

<ul>
    <p>Website</p>  <li>https://noventiq.com/</li>  <p>Industry</p> <li>IT Services and IT Consulting</li>
    <p>Company size</p> <li>5,001-10,000 employees</li> <p>Headquarters</p> <li>London, England</li>
    <p>Specialties</p> <li>Digital transformation, Cybersecurity, Information management, Modern hybrid infrastructure, Multi-cloud solutions, Future workplace solutions, Software engineering , Software development, Emerging markets IT provider, IT consultant, Data & Analytics, and AI</li>




</ul> <hr>
      
    </div>
          </div>
   
                <a href="add-new.php">Apply</a>
            </li>

                <!-- ................3.job listings here............................................. -->
         
                                    <li class="job-listing">
                                        <h3>Solutions Architect, India</h3>
                                <button class="open-modal-btn" data-modal-id="modal1">Details</button>
                                <button class="open-modal-btn" data-modal-id="modal2">Salary</button>
                        
                                        
                               
                                   <div id="modal1" class="modal">
                                    <div class="modal-content">
                                        <span class="close" data-modal-id="modal1">&times;</span>
                                        <h4>About the job</h4>
                                        <ul>
                                <h4>Experience Range: 4-10 Years </h4>

                                            <li>Dear Candidate</li> <li>Greetings from TCS!!!</li>
                                            <p>TCS has been a great pioneer in feeding the fire of young techies like you. We are a global leader in the technology arena and there's nothing that can stop us from growing together.
                                                @TCS is hiring for skill MSBI Developer for Chennai/Kochi/Ahmedabad/Trivandrum location, please find the below JD</p>
                                       <li>Role: MSBI Developer/Power Bi</li> <li>Technical Skill: Experience in MSBI Stack (SSIS, SSRS, SSAS Multidimensional /Tabular) </li>
                                    
                                       <hr>
                                            </ul> <hr>

                                            <h4>Desired Competencies (Technical/Behavioral Competency) 
                                                Must-Have</h4>
                                                <ul>
                                                    <li>Strong experience in data analysis, data alignment across multiple applications, heterogeneous data identification, data transformation activities </li>
                                                    <li>Strong understanding of database concepts such as referential integrity and data alignment, table partitions, data import-export mechanisms, data transfer and transformation mechanisms </li>
                                                    <li>Strong development experience in SQL, SQL Server Reporting Services (SSRS), SQL Server Integration Services (SSIS) and SQL Server Analysis Services</li>
                                                    <li>Expertise in Advanced SQL and proven experience in performance optimization of SQL/OLAP queries </li>

                                                    <li>End to end working experience in design, develop and deliver in Microsoft data warehousing </li>
                                                    <li>Strong data modelling experience in creating OLTP, OLAP Dimensional models and curated DataMarts </li>
                                                    <h4>Good-to-Have </h4>
                                                    <li>Any proven experience to improve any of the existing business process with the technical solution in data space </li>
                                                    <li>Migrated BI solutions from On Premise to IaaS (Infrastructure as service) and then to PaaS (Platform as Service)</li>
                                                </ul>
                                       <h4>Tata Consultancy Services · Hyderabad, Telangana, India</h4>

                                    </div>
                                </div>
                          <p>SecurityScorecard · Mumbai, Maharashtra, India</p> <hr>
                                                            <!-- 3. modal -->
                                         
                                                 
                              <div id="modal2" class="modal">
                            <div class="modal-content">
                                <span class="close" data-modal-id="modal2">&times;</span>
                                <h4>Salary Details</h4>
                                <p>51-100 employees · Information Technology & Services</p>
      <h4><b>Pay</b></h4>
      <p><b>₹50,000 - ₹80,000 a month</b></p>
                                <h4>Experience Range: 4-10 Years </h4> <hr>
                                <h4>About</h4>
                                <p>SecurityScorecard makes the world a safer place by transforming the way companies understand, improve and communicate cybersecurity risk to their boards, employees, and vendors. SecurityScorecard is listed as a free cyber tool and service by the U.S. Cybersecurity & Infrastructure Security Agency (CISA). Every organization has the universal right to its trusted and transparent Instant SecurityScorecard rating</p>
                                <ul>

                                    <li>Hybrid  Full-time  Mid-Senior level</li>
                                    <li>501-1,000 employees · Data Security Software Products</li>
                                    <li>Skills: Data Modeling, SQL Server Analysis Services (SSAS), </li>
                                    <p>Website</p> <li>https://securityscorecard.com</li>
                                    <p>Industry</p> <li>IT Services and IT Consulting</li>
                                    <p>Company size</p> <li>10,001+ employees</li> <p>Specialties</p>
                                    <li>IT Services, Business Solutions, and Consulting</li>
                                    <li>SecurityScorecard · Mumbai, Maharashtra, India</li>
                                    <li>Company size:
                                        501-1,000 employees</li>
                                </ul>  <hr><hr>
                                
                            </div>
                                  </div>
                           
                                        <a href="add-new.php">Apply</a>
                                    </li>
                <!-- ................4.job listings here............................................. -->
                        
                <li class="job-listing">
                    <h3>Java Specialist</h3>
            <button class="open-modal-btn" data-modal-id="modal7">Details</button>
            <button class="open-modal-btn" data-modal-id="modal8">Salary</button>
    
                    
           
               <div id="modal7" class="modal">
                <div class="modal-content">
                    <span class="close" data-modal-id="modal7">&times;</span>
                   
                   <h4>About the job</h4>

                   <p>
                    Hexaware Technologies is hiring Java Fullstack Developers !!</p>
                    <ul>
                        <li>Location: Pune/ Mumbai/ Chennai</li>
                        <li>Experience: 5-12+yrs</li><li>Mandate Skills: Java ,Spring boot, Angular/React</li> <hr>
                    </ul>

                    <p>Job Description:

                        Experience: 5+yrs
                        Mandate Skills: Java ,Spring boot, Angular/React</p>
                        <ul>

                            <li>Responsible to build high-performance, logic-intensive, web-based enterprise software.</li>
                            <li>The candidate should work closely with Product and other Engineering teams in executing towards common goals</li>
                      <li>Perform code reviews and participate in suggesting and supporting coding methodologies.</li>
                      <li>Progressive experience in Application Architecture, Design and Development of Web Applications and Server side components.</li>
                      <li>Perform technical operations with Continuous Integration (CI) / Continuous Deployment (CD) tools such as Jenkins, Pipelines and Git/GitHub</li>
                      <li>Nice to have Kotlin experience or exposure.</li>
                      <li>Nice to have-Typescript/Angular</li>
                      <li>MCA/equivalent masters in computers is a must.</li>
                      <li>Location- Chennai, Mumbai, Pune,</li>
                      
                      
                        </ul>
                </div>
            </div>
             <p>Hexaware Technologies · Mumbai, Maharashtra, India · </p>
                                        <!-- 4. modal -->
                     
                             
          <div id="modal8" class="modal">
        <div class="modal-content">
            <span class="close" data-modal-id="modal8">&times;</span>
             <h4>Salary details</h4>
             <p>201-300 employees · Information Technology & Services</p>
             <h4>Pay</h4> 
             
             <ul>
                <li>Hybrid  Full-time  Mid-Senior level</li>
                <li>10,001+ employees · IT Services and IT Consulting</li>
      <p><b>₹50,000 - ₹80,000 a month</b></p>
      <li></li>
             </ul>

             <ul>
                  <p>Website</p>
                  <li>http://www.hexaware.com</li> <b>Phone</b> <li>8919861349</li> <b>Industry</b> <li>Information Technology & Services</li>
                  <b>Company size</b> <li>11-50 employees</li> <b>Headquarters</b> <li>Aarushi Infotech · Hyderabad, Telangana, India</li> <b>Founded</b> <li>2012</li>
             </ul>
        </div>
              </div>
       
                    <a href="add-new.php">Apply</a>
                </li>
            
                <!-- ................5.job listings here............................................. -->


                <li class="job-listing">
                    <h3>Senior Software Engineer</h3>
            <button class="open-modal-btn" data-modal-id="modal9">Details</button>
            <button class="open-modal-btn" data-modal-id="modal10">Salary</button>
    
                    
           
               <div id="modal9" class="modal">
                <div class="modal-content">
                    <span class="close" data-modal-id="modal9">&times;</span>
                  <h4>About the job</h4>
                  <p>We are hiring for Senior Java AEM Developer to join our fastest growing team</p> <b>Tech stack:-</b>
                  <p>Backend: Java, Spring Boot, Postgres, Test Containers</p>
                  <b>Mandatory: Java, Adobe Experience Manager (Adobe Cloud)</b>
                  <p>Adobe Experience Manager (AEM) is built on a rich open-source software stack that exposes many Java APIs for use during development. This article explores the major APIs and when and why they should be used.</p>
                  <h4>Min requirements :-</h4>
                  <b>Backend: Java, Spring Boot, Postgres, Test Containers</b>
                  <ul>
                    <li> Must currently or most recently worked in and served in AEM Development role and capacity, involved in the integration of AEM. </li>
                    <li>Minimum of 3 years’ of direct hands-on experience working with AEM 6.x web content management systems </li>
                    <li> Minimum of 3 years' of demonstrated experience in the development, integration, implementation and deployment of AEM foundational concepts and components</li>
                    <li> Must possess a solid understanding with demonstrated experience using all of Adobe AEM building blocks, including templates, components, dialogs, widgets, etc., as well as the AEM development and deployment processes.</li>
                    <li> Expertise in Adobe Experience Manager related technologies: OSGi, Java Content Repository, Apache Sling, HTL</li>
                    <li><b> Min of 2+ years of J2EE development experience required </b></li>
                  </ul> <hr>
  <h4>About Us</h4>


  <p>Grid Dynamics is a leading provider of technology consulting, agile co-creation, scalable engineering and data science services for Fortune 500 corporations undergoing digital transformation.</p>
               
<p>We work in close collaboration with our clients on digital transformation initiatives that span strategy consulting, early prototypes, and enterprise-scale delivery of new digital platforms. We help organisations become more agile and create innovative digital products and experiences using deep expertise in emerging technology, top global engineering talent, lean software development practices, and a high-performance product culture.</p>
<h4>Noventiq · Mumbai, Maharashtra, India</h4>


</div>
            </div>
      <p>Noventiq · Mumbai, Maharashtra, India</p>
                                        <!-- 5. modal -->
                     
                             
          <div id="modal10" class="modal">
        <div class="modal-content">
            <span class="close" data-modal-id="modal10">&times;</span>
            <p>100-120 employees · Information Technology & Services</p>
           <h4>Pay</h4> <b> Min of 2+ years of J2EE development experience required </b> 
           <h4>Pay</h4> <b> ₹156,000/yr - ₹180,000/yr  On-site  Full-time  Entry level</b> 

           <ul>
            <li>On-site  Full-time  Mid-Senior level</li>
            <b>1,001-5,000 employees · IT Services and IT Consulting</b> <hr>
            <h4>Overview</h4>
            <p>Grid Dynamics is a leading provider of technology consulting, agile co-creation, and scalable engineering and data science services for Fortune 1000 corporations undergoing digital transformation. We work in close collaboration with our clients on digital transformation initiatives that span strategy consulting, early prototypes, and enterprise-scale delivery of new digital platforms. We help organizations become more agile and create innovative digital products and experiences using deep expertise in emerging technology, top global engineering talent, lean software development practices, and a high-performance product culture.</p> <hr>
            <b>Website</b> <li>http://www.griddynamics.com</li> <b>Industry</b> <li>IT Services and IT Consulting</li> 
            <p>Company size</p>  <li>1,001-5,000 employees</li> 
            <p>Specialties
omnichannel, open source, catalog search, scalable systems, continuous integration & continuous delivery, CICD, application scalability, ecommerce, cloud services, Personalization, Oracle ATG, SOLR, SAP Hybris, qa automation, big data, release engineering, and devops</p> 

            <b>Headquarters:
                San Ramon, California</b>
      <p>Noventiq · Mumbai, Maharashtra, India</p>

           </ul>
        </div>
              </div>
       
                    <a href="add-new.php">Apply</a>
                </li>



                <!-- ................6.job listings here............................................. -->

                <li class="job-listing">
                    <h3>Front End Architect</h3>
            <button class="open-modal-btn" data-modal-id="modal11">Details</button>
            <button class="open-modal-btn" data-modal-id="modal12">Salary</button>
    
                    
           
               <div id="modal11" class="modal">
                <div class="modal-content">
                    <span class="close" data-modal-id="modal11">&times;</span>
                   <h4>Job details</h4> 
                   <h4>About the job</h4>
                   <p>Frontend Architect- React</p><p>Job Summary:</p>
                   <p>We are seeking a talented and experienced Frontend Architect to join our dynamic team. As a Frontend Architect, you will be responsible for designing and implementing scalable and efficient frontend architecture solutions. You will collaborate with cross-functional teams, including backend developers, UX/UI designers, and product managers, to deliver high-quality frontend solutions that align with business objectives.</p>
                  <hr>
                   <ul>
                   <h4>Responsibilities:</h4>
                   <li>- Develop and maintain a comprehensive frontend architecture strategy that supports scalability, performance, and maintainability.</li>
                  <li> Collaborate with stakeholders to understand business requirements and translate them into technical specifications and architectural designs.</li>
                  <li>- Lead the frontend development team, providing technical guidance, mentorship, and code reviews.</li>
                  <li> Drive the adoption of best practices, coding standards, and architectural patterns to ensure the delivery of high-quality frontend solutions.</li>
                  <li>Stay up-to-date with the latest frontend technologies, trends, and industry best practices, and apply them to improve our frontend architecture and development processes.</li>
                  <li>- Participate in the recruitment and selection process of frontend developers, ensuring the team is composed of top talent.</li>

<hr>
<h4>Requirements:</h4>
          <li>- Bachelor's degree in Computer Science, Software Engineering, or a related field (or equivalent experience).</li>
          <li> Proven experience as a Frontend Architect or similar role, with a strong focus on frontend development and architecture.</li>
          <li> In-depth knowledge of frontend technologies, including HTML, CSS, JavaScript, and modern JavaScript frameworks (e.g., React, Angular, Vue.js).</li>
          <li> Strong understanding of frontend architectural patterns, design principles, and best practices.</li>
          <li>Experience with frontend build tools, task runners, and package managers (e.g., Webpack, Gulp, npm).</li>
          <li>Excellent problem-solving and analytical skills, with the ability to propose innovative solutions to complex technical challenges</li>
          <li>Strong attention to detail and commitment to delivering high-quality work.</li>
          <li>- Experience in mentoring and guiding frontend developers.</li>
                
                
                
                </ul>
                  
                </div>
            </div>
      <p>Osource Global · Navi Mumbai, Maharashtra, India </p>
                                        <!-- 6. modal -->
                     
                             
          <div id="modal12" class="modal">
        <div class="modal-content">
            <span class="close" data-modal-id="modal12">&times;</span>
            <h4>job Details</h4>
            <h4>Overview</h4>
            <p>ValueLabs is a global technology company specializing in Product Development, Data Technology, Design, and Consulting, powered by The Digital Flywheel™. Over the last 26 years, we have expanded to 26 locations, 7,000 associates, and 300 clients worldwide. Three-time winner of the prestigious Gold Stevie® Award for Employer of the Year (2021, 2022 and 2023), our focus on employees and clients has resulted in industry-leading Net Promoter Scores (NPS) of 80 and 90, respectively.</p> <hr>
            <p>201-500 employees · Information Technology & Services</p>
            <h4>Pay</h4>  <b>Up to ₹30,000 a month</b> <h4>Job type</h4> 
                <p>On-site  Full-time  Mid-Senior level</p>
                <p>5,001-10,000 employees · IT Services and IT Consulting</p>
<ul> <hr>

    <p>Website</p> <li>https://www.valuelabs.com/</li> <p>Industry</p> <li>IT Services and IT Consulting</li> <p>Company size</p> <li>5,001-10,000 employees</li>
    <p>Osource Global · Navi Mumbai, Maharashtra, India</p> <hr>
        <h4>Specialties</h4>
        <p>Software Services, Digital Solutions, Business Services, Quality Assurance / Testing, Infrastructure Engineering Services, Knowledge Process Outsourcing, Product Development, Digital Enablement, automation, AI/ML, Digital Transformation, and Software Developmen</p>


</ul>
              
        </div>
              </div>
       
                    <a href="add-new.php">Apply</a>
                </li>

                <!-- ................7.job listings here............................................. -->

                <li class="job-listing">
                    <h3></h3>
           
                    
           
               <div id="modal11" class="modal">
                <div class="modal-content">
                    <span class="close" data-modal-id="modal11">&times;</span>
                  
                </div>
            </div>
      
                                        <!-- 3. modal -->
                     
                             
          <div id="modal12" class="modal">
        <div class="modal-content">
            <span class="close" data-modal-id="modal12">&times;</span>
            <h4>job Details</h4>

        </div>
              </div>
       
                    <a href="add-new.php">Apply</a>
                </li>





        </ul>
    </section>






    

    <footer>
        <p>&copy;  JOBVISTA IT COMPANY JOB</p>
    </footer>







    <script >
        document.addEventListener("DOMContentLoaded", function () {
            var openModalButtons = document.querySelectorAll(".open-modal-btn");
            
            openModalButtons.forEach(function (button) {
                button.addEventListener("click", function () {
                    var modalId = button.getAttribute("data-modal-id");
                    var modal = document.getElementById(modalId);
                    modal.style.display = "block";
                });
            });
        
            window.addEventListener("click", function (event) {
                if (event.target.classList.contains("modal")) {
                    event.target.style.display = "none";
                }
            });
        
            var closeButtons = document.querySelectorAll(".close");
            
            closeButtons.forEach(function (closeButton) {
                closeButton.addEventListener("click", function () {
                    var modalId = closeButton.getAttribute("data-modal-id");
                    var modal = document.getElementById(modalId);
                    modal.style.display = "none";
                });
            });
        });
        
        
        
            </script>
</body>
</html>
