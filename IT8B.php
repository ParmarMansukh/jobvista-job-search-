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
                <h3>Software Specialist</h3>
        <button class="open-modal-btn" data-modal-id="modal6">Details</button>
        <button class="open-modal-btn" data-modal-id="modal4">Salary</button>
       
                
        <div id="modal6" class="modal">
            <div class="modal-content">
                <span class="close" data-modal-id="modal6">&times;</span>
                

             <mp>
               <h4>About the job</h4> <hr>
              
              <h4>Responsibilities</h4>
              <ul>

                <li> Must have strong technical hands-on expertise in Installation, Configuration, Administration, Implementation of Elastic search , talend and Grafana.</li>
                <li>Must have strong hands on experience in building business dashboards and data pipe using talend / other ETL tools , Grafana and elasticsearch</li>
                <li>Maintenance of ElasticSearch cluster including monitoring of nodes performance, reallocating shards, etc</li>
                <li>Working with Elastic Search API’s (for Data extraction)</li>
                <li>Writing ElasticSearch Aggregation Queries</li>
                <li>Provide recommendations and design optimal configurations for large-scale deployments.</li>
                <li>Automation the installation and configuration of ELK stack using Puppet</li>
                <li>Collaborate with Infra and dev engineers to design, develop and optimize Kibana visualizations.</li>
                <li> Answer questions around ElasticSearch, Kibana and Logstash</li>
              </ul><hr>
              <ol type="1">
                <h4>Technical Requirements</h4>
<li> Design and implement highly scalable ELK (ElasticSearch, Logstash, and Kibana) stack and ElastiCache solutions</li>
<li> Grafana: Create different visualization and dashboards according to the Client needs</li>
<li> Should be able to work with API, shards etc. in Elasticsearch.</li>
<li> Architecting data structures using Elastic Search and ElastiCache</li>
<li> Query languages and writing complex queries with joins that deals with a large amount of data</li>
<li>End to end Low-level design, development, administration, and delivery of ELK based reporting solutions</li>
<li> Etrong exposure to writing talend queries.</li>
<li>Elastic query for data Analysis</li>
<li> Creating Elasticsearch index templates.</li>
<li> Index life cycle management</li>
<li>Strong expertise in Python scripting</li>
<li> Strong experience in installing and configuring ELK on bare metal and clouds (GCP, AWS & AZURE)</li>
<li> Strong experience in using Elastic search Indices, Elastic search APIs, Kibana Dashboards, Log stash and Log Beats</li>
<li>Good experience in using or creating plugins for ELK like authentication and authorization plugins</li>
<li>Experience in provisioning automation frameworks such as Kubernetes or docker
    , Experience working with JSON</li>
<li>Knowledge of scripting languages like JavaScript, Python, PowerShell, etc</li>
                
              </ol>
              <h5>Microland Limited
                Microland is “Making digital happen” – allowing technology to do more and intrude less.
                
                IT Services and IT Consulting Bangalore, Karnataka</h5>
           <hr>
             </mp>
                
                

            </div>
        </div>
                              <p>Microland Limited · Bengaluru, Karnataka, India</p>
                <a href="add-new.php">Apply</a>
            </li>

        </pm>     

            <!--  1. Add more job listings here -->

            <div id="modal4" class="modal">
                <div class="modal-content">
                    <span class="close" data-modal-id="modal4">&times;</span>
                    <p>200-00 employees · Information Technology & Services</p>
                    <h4><b>Pay</b></h4>
                    <p>₹80,000 - ₹1,00,000 a month</p>
                    <h4><b>Job type</b></h4>
                <b>1,001-5,000 employees · IT Services and IT Consulting</b>
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
                            <p>Company size</p> <li>1,001-5,000 employees · IT Services and IT Consulting</li> <p>Headquarters</p> <li>Bangalore, Karnataka</li>
                            <p>Founded</p> <li>2004</li> <p>Specialties</p> <li>Travel and Transportation, Banking and Financial Services, Insurance, Healthcare, Public Sector, Business Process Solutions, Media, ERP, Manufacturing, Business Process Management, SAP, Metaverse, Digital Services, Cloud and Infrastructure Management Services, Artificial Intelligence, Machine Learning, Data & Analytics, and Data Science</li>
                        </ul>
                        
                        <hr>
                        <p>Bangalore, Karnataka </p> <hr>

                </div>
            </div>
    
                  <!--.................................... 2.job listings here ....................................-->

             

            <li class="job-listing">
                <h3> Sr. Staff Digital Engineer</h3>
        <button class="open-modal-btn" data-modal-id="modal5">Detail</button>
        <button class="open-modal-btn" data-modal-id="modal3">Salary</button>

                
       
           <div id="modal5" class="modal">
            <div class="modal-content">
                <span class="close" data-modal-id="modal5">&times;</span>
              
                  <h4>About the job</h4>
                 <hr>
                 <b>Description</b>
                 <p>Millions of people experience Synaptics every day. Our technology impacts how people see, hear, touch, and engage with a wide range of IoT applications -- at home, at work, in the car or on the go.</p>
                <p>Synaptics is looking for a Staff Digital Engineer to join our dynamic and growing WPD organization. You will be responsible to drive the SoC verification in the Wi-Fi 6/7 domain. You will provide technical leadership and expertise in the latest verification methodologies as well as Wi-Fi domain.</p>
                 <hr>
                 <h4>Job Duties</h4>

               
                 <ul>

                    <li>Technically mentor and lead a team of verification engineers on the Block/Sub-System/SoC Verification</li>
                    <li>Drive decisions on methodologies to be adopted for verification</li>
                    <li>Drive the methodology for digital only, analog-digital verification environment, emulation platform as well as portability of block level TB/tests to SoC level</li>
                    <li> Architect the testbench and develop in UVM or Formal based verification approaches</li>
                    <li>Define test plan, tests, and verification methodology for block / chip level verification</li>
                    <li>Collaborate with design team on test plans, closure of code, and functional coverage</li>
                    <li>Partner with analog co-sim and software team in enabling top level chip verification aspects and developing end-to-end scenarios</li>
                    <li>Support post-silicon verification activities of the products working with design, product evaluation and applications engineering team</li>
                 </ul>
<hr><hr>

        <h4>Competencies</h4>

        <ol type="A">
            <li>Verification experience with UVM and constrained random, coverage-based verification approaches</li>
            <li>Strong fundamentals in CPU architecture, Host interfaces like (PCIe, SDIO etc.), Bus interconnects specially AXI/ACE/AHB/APB.</li>
            <li>Deep knowledge of assertion-based verification methods</li>
            <li>Ability to communicate complex, interactive design concepts clearly</li>
            <li>Proactive, self-starter, able to work independently in a fast-paced environment to complete projects on time with minimal guidance</li>
            <li>Well organized with strong attention to detail; proactively ensures work is accurate</li>
            <li>Positive attitude and work ethic; unafraid to ask questions and explore new ideas</li>
            <li>Resourceful and able to solve highly complex problems through adaptation of existing technology and development of new technology with a deep understanding of product architecture</li>
            <li>Excellent verbal and written communication that is clear, concise, and compelling</li>
            <li>Ability to work within a diverse team and mentor developing team members
            </li>
            
        </ol>
        <hr><hr>

        <h3> Qualifications </h3>
        <ol type="1">
            <li>Bachelor’s degree (Master’s preferred) in Computer Engineering, Communication, Electrical/Electronic Engineering or related field, or equivalent</li>
            <li>12+ years of experience in design verification including leading design verification project teams</li>
            <li>Proven track record as SoC DV lead of verifying logic designs/blocks/IP/SoC into high volume production</li>
            <li>No travel required</li>
        </ol> <hr>

            </div>

        </div>
                    <p><b>Synaptics Incorporated · Bengaluru East, Karnataka, India  </b></p>
                                    <!-- 2number. modal -->
                 
                         
      <div id="modal3" class="modal">
    <div class="modal-content">
        <span class="close" data-modal-id="modal3">&times;</span>
      
      <h4>Salary Details</h4>
      <p>21-50 employees · Information Technology & Services</p>
      <h4>Synaptics Incorporated · Bengaluru East, Karnataka, India</h4>
      <h4><b>Pay</b></h4>
      <p><b>₹50,000 - ₹1,00,000 a month</b></p>
      <b>1,001-5,000 employees · Semiconductor Manufacturing</b>
      <p>On-site  Full-time  Entry level</p>
      <h4><b>Job type</b></h4>
      <hr>
      <h4>Overview</h4>
      <p>Noventiq (Noventiq Holdings plc) is a leading global solutions and services provider in digital transformation and cybersecurity, headquartered in London. The company enables, facilitates, and accelerates digital transformation for its customers’ businesses, connecting 80,000+ organizations across all sectors with a vast selection of best-in-class IT vendors, alongside its own services and solutions.</p>
<hr>

<ul>
    <p>Website</p>  <li>https://www.synaptics.com/</li> 
     <p>Industry</p>
      <li>IT Services and IT Consulting</li>

    <p>Company size</p> 
    <li>1,001-5,000 employees</li>
     <p>Headquarters</p>
      <li>London, England</li>
    <p>Specialties</p>
     <li>Digital transformation, Cybersecurity, Information management, Modern hybrid infrastructure, Multi-cloud solutions, Future workplace solutions, Software engineering , Software development, Emerging markets IT provider, IT consultant, Data & Analytics, and AI</li>




</ul> <hr>
      
    </div>
          </div>
   
                <a href="add-new.php">Apply</a>
            </li>

                <!-- ................3.job listings here............................................. -->
         
                                    <li class="job-listing">
                                        <h3>Digital Engineering Sr. Engineer</h3>
                                <button class="open-modal-btn" data-modal-id="modal1">Details</button>
                                <button class="open-modal-btn" data-modal-id="modal2">Salary</button>
                        
                                        
                               
                                   <div id="modal1" class="modal">
                                    <div class="modal-content">
                                        <span class="close" data-modal-id="modal1">&times;</span>
                                        <h4>About the job</h4>
                                        <ul>
                                <h4>Experience Range: 4-10 Years </h4>
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
                                </ul>  <hr>  

                                           

                                    </div>
                                </div>
                          <p>Launch by NTT DATA · Bengaluru East, Karnataka, India</p> 
                                                            <!-- 3. modal -->
                                         
                                                 
                              <div id="modal2" class="modal">
                            <div class="modal-content">
                                <span class="close" data-modal-id="modal2">&times;</span>
                                <h4>Salary Details</h4>
                                <p>400-505 employees · Information Technology & Services</p>
      <h4><b>Pay</b></h4>
      <p><b>₹50,000 - ₹80,000 a month</b></p>
                               
      <ul>

        <li>On-site  Full-time  Mid-Senior level</li>
        <li>1,001-5,000 employees · IT Services and IT Consulting</li> <hr>

       <h4>Overview</h4>
       <p>Launch by NTT DATA exists to help our clients strategize, ship, and scale provocative digital experiences that connect with your customers and drive growth. We attract dissatisfied, yet optimistic technology leaders who know they must take smart risks to create top-line revenue producing digital products and platforms and want a go-to partner to challenge their team at every step</p>
       <p>We provide continuous teams that know your world. We value shipped software over bloated slideware. We promise to professionally challenge you and not simply take orders from you. We will help you act boldly while understanding the complexities of your enterprise. We will never pitch you a one-size-fits-all solution... ever. </p>


       <p>Website</p> 
       <li>https://launch.nttdata.com/</li>
       <p>Industry</p>

       <li>IT Services and IT Consulting</li>
       <p>Company size</p>
       <li>1,001-5,000 employees</li>
       <p>Specialties</p>
       <li>innovation management, customer & user experience, rapid product validation, and platform delivery</li>
      </ul>
      <hr>
      <h4>Digital Engineering Sr. Engineer
        Launch by NTT DATA · Bengaluru East, Karnataka, India</h4>
                            </div>
                                  </div>
                           
                                        <a href="add-new.php">Apply</a>
                                    </li>
                <!-- ................4.job listings here............................................. -->
                        
                <li class="job-listing">
                    <h3>Sr. Full Stack (Web) Programmer/Developer</h3>
            <button class="open-modal-btn" data-modal-id="modal7">Details</button>
            <button class="open-modal-btn" data-modal-id="modal8">Salary</button>
    
                    
           
               <div id="modal7" class="modal">
                <div class="modal-content">
                    <span class="close" data-modal-id="modal7">&times;</span>
                   
                   <h4>About the job</h4> <hr>
         <h4>Qualifications</h4>
         <ol type="1">

            <li>BE/Btech</li>
            <li>Experience - 9 to 12 years</li>
            <li>Full stack programmer</li>
            <li>Programming language – MERN Stack, Java, Javascript, python</li>
            <li>Experience with multiple databases (including DynamoDB, MySQL and NoSQL)</li>
            <li>Experience with Cloud AWS (Mandatory), Azure and/or Google Cloud</li>
            <li>Strong Knowledge and Experience using: Rich HTML5 apps experience usingHTML5
                CSS3
                ReactNative is a big Plus</li>
            <li></li>
         </ol> <hr>

         <ul>
            <h4>Preferred Qualifications: </h4>
            <li>Proficient in UNIX/Linux</li>
            <li>Knowledge / experience in JavaScript frameworks such as ReactJS or Node/Express or jQuery or Angular</li>
            <li>Knowledge / experience in Python, PHP or other scripting languages</li>
            
         </ul>
<hr>

<ol type="A">
    <h4>Job responsibilities: </h4>
    <li>Participate in project development from conception to completion</li>
    <li>Be a sole developer or part of a team as necessary</li>
    <li> Communicate proactively and collaborate with teammates</li>
    <li> Work in both native and cross-platform environments</li>
    <li> Work in a fast-paced environment without compromising quality </li>
    <li>Websites and backend services for Automotive Applications.</li>
    <li>Integration experience to back-end database or transactional systems</li>
</ol>
                   <hr>
                      
                        
                </div>
            </div>
             <p>Akkodis · Bengaluru, Karnataka, India · </p>
                                        <!-- 4. modal -->
                     
                             
          <div id="modal8" class="modal">
        <div class="modal-content">
            <span class="close" data-modal-id="modal8">&times;</span>
             <h4>Salary details</h4>
             <p>30-50 employees · Information Technology & Services</p>
             <h4>Pay</h4> 
             <hr>  
             <ul>
                <li>Hybrid  Full-time  Mid-Senior level</li>
                <li>10,001+ employees · IT Services and IT Consulting</li>
      <p><b>₹90,000 - ₹100,000 a month</b></p>
      
             
                  <p>Website</p>
                  <li>http://www.akkodis.com</li> <b>Phone</b> <li>8919861349</li> <b>Industry</b> <li>Information Technology & Services</li>
                  <b>Company size</b> <li>11-50 employees</li> <b>Headquarters</b> <li>Akkodis · Bengaluru, Karnataka, India ·</li> <b>Founded</b> <li>2012</li>
             </ul>
        </div>
              </div>
       
                    <a href="add-new.php">Apply</a>
                </li>
            
                <!-- ................5.job listings here............................................. -->


                <li class="job-listing">
                    <h3>Process Developer - PTP-CPG048334</h3>
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
<h4>Bengaluru, Karnataka, India (On-site)</h4>


</div>
            </div>
      <p>Bengaluru, Karnataka, India (On-site)</p>
                                        <!-- 5. modal -->
                     
                                               
          <div id="modal10" class="modal">
        <div class="modal-content">
            <span class="close" data-modal-id="modal10">&times;</span>
            <p>20-50 employees · Information Technology & Services</p>
           <h4>Pay</h4> <b> Min of 2+ years of J2EE development experience required </b> 
           <h4>Pay</h4> <b> ₹156,000/yr - ₹180,000/yr  On-site  Full-time  Entry level</b> 

           <ul>
            <li>On-site  Full-time  Mid-Senior level</li>
            <b>1,001-5,000 employees · IT Services and IT Consulting</b> <hr>
            <h4>Overview</h4>
            <p>Grid Dynamics is a leading provider of technology consulting, agile co-creation, and scalable engineering and data science services for Fortune 1000 corporations undergoing digital transformation. We work in close collaboration with our clients on digital transformation initiatives that span strategy consulting, early prototypes, and enterprise-scale delivery of new digital platforms. We help organizations become more agile and create innovative digital products and experiences using deep expertise in emerging technology, top global engineering talent, lean software development practices, and a high-performance product culture.</p> <hr>
            <b>Website</b> <li>http://www.Genpactcs.com</li> <b>Industry</b> <li>IT Services and IT Consulting</li> 
            <p>Company size</p>  <li>1,001-5,000 employees</li> 
            <p>Specialties
omnichannel, open source, catalog search, scalable systems, continuous integration & continuous delivery, CICD, application scalability, ecommerce, cloud services, Personalization, Oracle ATG, SOLR, SAP Hybris, qa automation, big data, release engineering, and devops</p> 

            <b>Headquarters:
                San Ramon, California</b>
      <p>Process Developer - PTP-CPG048334
        Genpact · Bengaluru, Karnataka, India</p>

           </ul>     
        </div>
              </div>
       
                    <a href="add-new.php">Apply</a>
                </li>



                <!-- ................6.job listings here............................................. -->

                <li class="job-listing">
                    <h3>Immediate Joiner | Java FullStack Developer|4-9years|Bangalore/Noida</h3>
            <button class="open-modal-btn" data-modal-id="modal11">Details</button>
            <button class="open-modal-btn" data-modal-id="modal12">Salary</button>

                    
           
               <div id="modal11" class="modal">
                <div class="modal-content">
                    <span class="close" data-modal-id="modal11">&times;</span>
                   <h4>Job details</h4> 
                   <h4>About the job</h4>
                   <h4>Developer|4-9years|Bangalore/Noida</h4>
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
      <p>Emids · Bengaluru, Karnataka, India </p>
                                        <!-- 6. modal -->
                     
                             
          <div id="modal12" class="modal">
        <div class="modal-content">
            <span class="close" data-modal-id="modal12">&times;</span>
            <h4>job Details</h4>
            <h4>Overview</h4>
            <p>ValueLabs is a global technology company specializing in Product Development, Data Technology, Design, and Consulting, powered by The Digital Flywheel™. Over the last 26 years, we have expanded to 26 locations, 7,000 associates, and 300 clients worldwide. Three-time winner of the prestigious Gold Stevie® Award for Employer of the Year (2021, 2022 and 2023), our focus on employees and clients has resulted in industry-leading Net Promoter Scores (NPS) of 80 and 90, respectively.</p> <hr>
           <p>201-500 employees · Information Technology & Services</p>
            <h4>Pay</h4>  <b>Up to ₹80,000 a month</b> <h4>Job type</h4> 
                <p>On-site  Full-time  Mid-Senior level</p>
                <p>1,001-5,000 employees · IT Services and IT Consulting</p>
<ul> <hr>

    <p>Website</p> <li>https://www.valuelabs.com/</li> <p>Industry</p> <li>IT Services and IT Consulting</li> <p>Company size</p> <li>1,001-5,000 employees · IT Services and IT Consulting</li>
    <p>Bangalore/Noida
        Emids · Bengaluru, Karnataka, India</p> <hr>
        <h4>Specialties</h4>
        <p>Software Services, Digital Solutions, Business Services, Quality Assurance / Testing, Infrastructure Engineering Services, Knowledge Process Outsourcing, Product Development, Digital Enablement, automation, AI/ML, Digital Transformation, and Software Developmen</p>


</ul> <hr>
              
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
