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
        <h1> Jobvista.in</h1>
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



                  <!--.................................... 1.job listings here ....................................-->

            <li class="job-listing">

                <h3>Dotnet Full stack Developer</h3>
        <button class="open-modal-btn" data-modal-id="modal6">Details</button>
        <button class="open-modal-btn" data-modal-id="modal4">Salary</button>
       
                
        <div id="modal6" class="modal">
            <div class="modal-content">
                <span class="close" data-modal-id="modal6">&times;</span>
                

             <mp>
                <h4>About the job</h4> 
                <ol>
                    <li>TCS Hiring Dot Net Full Stack Developer.</li> <li>Location - Bengaluru, Hyderabad</li><li>Experience - 5 to 8 Years</li> <h4>Job Description</h4> <p>JOB DESCRIPTION: Full Stack developer (Angular & .Net Core)</p>
                    <ol>

                        <li>Senior (5+ experience) Full stack developer with Angular & .Net Core</li> <li>Strong proficiency with Angular, JavaScript and Typescript and good understanding of web markup, including HTML5, CSS3, JSON, JQuery, AJAX, Bootstrap</li> <li>Demonstrated Angular (9 or higher versions) experience in developing maintainable, scalable, cross-browser code that is a delight to experience on any device.</li>
                        <li>Strong proficiency in .Net Core, C#, APIs</li> <li> Specialized technical knowledge of the SQL technologies</li> <li> Understanding the nature of asynchronous programming and its quirks and workarounds</li> <li>Have hands-on experience in a wide range of authentication and authorization technologies.</li> <li>Proficient understanding of code versioning tools, such as ADO/GIT and CI/CD</li>
                        <li>Understanding of Azure Cloud services, Kubernetes, Dockers.</li>  <h4>Overview</h4> <p>A purpose-led organization that is building a meaningful future through innovation, technology, and collective knowledge. We're #BuildingOnBelief.</p> 
                        <p>
                            A part of the Tata group, India's largest multinational business group, TCS has over 500,000 of the world’s best-trained consultants in 46 countries. The company generated consolidated revenues of US $22.2 billion in the fiscal year ended March 31, 2021, and is listed on the BSE (formerly Bombay Stock Exchange) and the NSE (National Stock Exchange) in India.</p>
                            <b>TCS' proactive stance on climate change and award-winning work with communities across the world have earned it a place in leading sustainability indices such as the MSCI Global Sustainability Index and the FTSE4Good Emerging Index.</b>
                    </ol>
                </ol>
               
            <h4>About</h4> <p>A purpose-led organization that is building a meaningful future through innovation, technology, and collective knowledge. We're #BuildingOnBelief. A part of the Tata group, India's largest multinational business group, TCS has over 500,000 of the world’s best-trained consultants in 46 countries</p>
         <h4>location</h4>
         <p>TCS Hiring Dot Net Full Stack Developer.
            Vadodara, Gujarat, India</p>
             </mp>
                
                

            </div>
        </div>
                              <p>Tata Consultancy Services Vadodara, Gujarat,  Telangana, India
                                </p>
                <a href="add-new.php">Apply</a>
            </li>

        </pm>     

            <!--  1. Add more job listings here -->

            <div id="modal4" class="modal">
                <div class="modal-content">
                    <span class="close" data-modal-id="modal4">&times;</span>
                    
                       <h4>JOB Details</h4>
                   <ol>
<p>40-50 employees · Information Technology & Services</p>
                    <li>On-site  Full-time  Mid-Senior level</li> <li>10,001+ employees · IT Services and IT Consulting</li>
                    <li>Skills: Full-Stack Development, Stack, +8 more</li> <li>See how you compare to 50 applicants. Try Premium for ₹0</li>
                  <li>Experience - 5 to 8 Years</li> <li>Job role - Dot Net Full Stack Developer</li>
                </ol>
               
                <h4>Company Details</h4>
                <ul>
                   <p>Website</p> <li>https://www.tcs.com/</li> <p>Industry</p> <li>IT Services and IT Consulting</li> <p>Company size</p> <li>10,001+ employees</li> <p>Headquarters</p> <li>Mumbai, Maharashtra</li> <p>Specialties</p><li>IT Services, Business Solutions, and Consulting</li>   <li>Salary:₹50,000 - ₹1,00,000 a month</li>

                </ul>
                <h4>Skills associated with the job post</h4>
                <ol type="1">
                    <li>.NET Core            </li> <li>.NET Framework</li> <li>AJAX</li> <li>Bootstrap (Framework)</li> <li>JSON</li> <li>TypeScript</li> <li>Application Programming Interfaces (API)</li>
                    
                </ol>

               
                </div>
            </div>
    
                  <!--.................................... 2.job listings here ....................................-->

             

            <li class="job-listing">
                <h3>Senior Software Engineer</h3>
        <button class="open-modal-btn" data-modal-id="modal5">Detail</button>
        <button class="open-modal-btn" data-modal-id="modal3">Salary</button>

                
       
           <div id="modal5" class="modal">
            <div class="modal-content">
                <span class="close" data-modal-id="modal5">&times;</span>
               <h4>About the job</h4> <b>Xylem, a leading global water technology company dedicated to solving the world’s most challenging water issues, is the leading global provider of efficient, innovative and sustainable water technologies improving the way water is used, managed, conserved and re-used. Our international team is unified in a common purpose: creating advanced technology and other trusted solutions to solve the world’s water challenges. We are committed to creating an organization of inclusion and diversity, where everyone feels involved, respected, valued and connected, and where everyone is free to bring their authentic selves and ideas.</b>
               <h4>Responsibilities</h4> 
               <ul>

                <li>Participate in Industry 4.0 implementation for Xylem Production facilities worldwide.</li> <li>Participate in the development process from definition to deployment</li>
             <li>Works closely with global team and ITC engineering team to meet project goals and deadlines.</li> <li>Participate in software design and testing with global team and ITC engineering teams</li> <li>Assist end users in the implementation of their specific software requirements</li> <li>Keep well informed of new features and products/services. Be proactive in understanding product/service roadmaps and the implications of new features with peer engineers or self-training.</li>
             <h4>Minimum Qualifications: Education, Experience, Skills, Abilities, License/Certification:</h4>
             <li>Engineering Degree in Electronics, Computer Science, Instrumentation & Control</li> <li>Minimum 5-7 years of professional experience in areas directly related to front end user experience and back-end services for large scale, high performance environment</li>
            <li>Experience in building data-driven web application</li> <li>Have in-depth understanding of application performance and scalability</li> <li>Experience with Cross-browser coding, testing, and debugging</li> <li>Experience with web application development using ASP.NET or JAVA</li> <li>Hands on experience working with JavaScript, HTML, CSS, and other UI technologies</li>
            <li>Working experience with MS SQL Database, Kepserver</li> <li>Working knowledge about DevOps</li> <li>Capable of working with cross functional teams</li>
            <li>Proficient with Word, Excel, PowerPoint and other communication tools</li> <li>Ability to manage multiple priorities effectively</li>
            <h4>Working Conditions</h4> <li>Electrical test labs, high voltage potentials.</li> <li>Pump controls & test machines and rooms, high voltage potentials, mechanical hazards</li> <li>(moving machinery), high temperature hazards hot metal, etc.…</li>
        </ul>
            

            </div>

        </div>
                    <p><b>Xylem · Vadodara, Gujarat, India</b></p>
                                    <!-- 2number. modal -->
                 
                         
      <div id="modal3" class="modal">
    <div class="modal-content">
        <span class="close" data-modal-id="modal3">&times;</span>
       <h4>About</h4> <p>Xylem is the global leader in advanced technologies, solutions and services that address the world’s biggest water challenges. We enable our customers to dramatically improve the way water and wastewater is used, managed, conserved, re-used and returned to nature</p>
       <h3>Salary</h3>
<p>201-500 employees · Information Technology & Services</p>
       <b>Salary:₹40,000 - ₹1,00,000 a month</b>
       <ul>
        <p>Website</p> <li>https://www.xylem.com/</li> <p>Industry</p> <li>Industrial Machinery Manufacturing</li> <p>Company size</p> <li>10,001+ employees</li> <p>Headquarters</p> <li>Washington, District of Columbia</li>
       <b>Specialties</b> <li>Water transport, treatment and testing, Water technology, Application solutions, Smart infrastructure, Smart metering solutions, Smart Cities, Infrastructure asset management, Stormwater management, Infrastructure analytics, and Digital Twins</li>
    
    </ul>
       
    </div>
          </div>
   
                <a href="add-new.php">Apply</a>
            </li>

                <!-- ................3.job listings here............................................. -->
         
                                    <li class="job-listing">
                                        <h3>Sitecore Developer</h3>
                                <button class="open-modal-btn" data-modal-id="modal1">Details</button>
                                <button class="open-modal-btn" data-modal-id="modal2">Salary</button>
                        
                                        
                               
                                   <div id="modal1" class="modal">
                                    <div class="modal-content">
                                        <span class="close" data-modal-id="modal1">&times;</span>
                                        <h4>Job details</h4>
                                        <h4>About the job</h4> <p>At Horizontal Digital, we hold ourselves to one key belief: You're only as good as your worst customer experience. This mantra is what drives our digital consultancy to think beyond the easy answers and instead create websites, apps, portals and other experiences that solve customer needs for Fortune 500 companies in intuitive and empathetic ways. And we make this lofty standard a reality by fusing strategy, data, design and technology together to arrive at solutions that set the bar higher for everyone.
                                            We use these values to fuel superior results:</p>
                                            <h4>What you'll do: </h4>
                                            <ul>
                                                <li>Develop new .NET based functionalities and applications in Visual Studio</li>
                                                <li>Work for customers. In our office, or on-site in their office
                                                    
                                                </li>
                                                <li>Experience with design pattern is a plus </li> <li>Full development lifecycle experience </li>
                                                <h4>Who you are: </h4> <li> Accurately estimate the scale and scope of projects</li> <li> Ensure all solutions are documented and meet design requirements</li> <li> Lead and mentor other developers</li> <li>Architect custom solutions and maintain applications for our clients</li>

                                            </ul>
                                            <ol type="A">
                                               <h4>What you bring: </h4> <li> Education - bachelor's degree</li> <li> Minimum 2+ years of work experience and hands on experience on MVC 5.0 related projects</li> <li> Preference will be given to candidates who have any CMS knowledge</li>
                                               <li> Minimum of 2+ years of experience working on Sitecore</li>

                                            </ol>
                                        
                                       

                                    </div>
                                </div>
                          <p>Horizontal Digital · Vadodara, Gujarat, India</p>
                                                            <!-- 3. modal -->
                                         
                                                 
                              <div id="modal2" class="modal">
                            <div class="modal-content">
                                <span class="close" data-modal-id="modal2">&times;</span>
                                <h4>Salary details</h4>
                                <p>450-550 employees · Information Technology & Services</p>
<h4>About</h4>
                               <p>Horizontal Digital is an experience forward consultancy that invests in understanding the needs, wants and ambitions of customers through the data they provide — data that is unlocked across every digital experience and engagement. We use this data to meet customers in the right moment</p>
                               <h4>Overview</h4> <p>Horizontal Digital is an experience forward consultancy that invests in understanding the needs, wants and ambitions of customers through the data they provide — data that is unlocked across every digital experience and engagement. We use this data to meet customers in the right moment, at the right time, on the right channel. And we amplify these moments with precise strategies, technologies and creative approaches to maximize their value.</p>
                               <p>Founded in 2003, we are a certified Minority Business Enterprise that proudly invests in diversity and growth of our in-house talent as well as our local communities through charitable and on-site volunteer efforts.</p>
                               <ul>
<p>Website</p> 
                                <li>http://horizontaldigital.com</li> <p>Industry</p> <li>Information Technology & Services</li> <p>Company size</p> <li>201-500 employees</li>
                               <li>On-site  Full-time  Entry level</li> <li>201-500 employees · Information Technology & Services</li>
                            </ul>
                               <h4>Locations</h4> <p>MSP
                                1660 MN-100, 200, St Louis Park, MN 55416, US, Vadodara, Gujarat, India</p>
       <b>Salary:20,000 - ₹40,000 a month</b>

   <ol type="1"> 
    <h4>Skills associated with the job</h4>
    <li>Problem Solving</li> <li>.NET Framework</li> <li>Business Requirements</li> <li>Cascading Style Sheets (CSS)</li>
    <li>Communication</li>
    <li>Content Management Systems (CMS)</li>
    <li>Model-View-Controller (MVC)</li>

   </ol>
                            </div>
                                  </div>
                           
                                        <a href="add-new.php">Apply</a>
                                    </li>
                <!-- ................4.job listings here............................................. -->
                        
                <li class="job-listing">
                    <h3>Dotnet Developer</h3>
            <button class="open-modal-btn" data-modal-id="modal7">Details</button>
            <button class="open-modal-btn" data-modal-id="modal8">Salary</button>
    
                    
           
               <div id="modal7" class="modal">
                <div class="modal-content">
                    <span class="close" data-modal-id="modal7">&times;</span>
                    <h3>About the job</h3> 
                    <ul>
                        <li>Net Core, .Net Standard, .Net Framework specifically the C# language</li> <li>Proficient in Entity Framework Core, LINQ, Web APIs, SOLID principles</li> <li>Sound Knowledge with Containers, GIT, Swagger/Postman</li> <li>Knowledge of Architecture and Design Patterns. Microservice</li>
                   <li>Should have Knowledge of unit tests.</li>
                   
                   
                    </ul>
                    <h4>Responsibilities</h4> <p>Develop features across multiple subsystems within our applications, including collaboration in requirements definition, prototyping, design, coding, testing and deployment.</p> <p>Provide engineering support (when necessary) to our technical operations staff when they are building, deploying, configuring and supporting systems for customers.</p>
                   <p>Participate with the engineering and operations teams to define plans for standardizing, scaling and enhancing our products and the services utilized to deploy/install/release those products</p>
                   <h4>Qualifications</h4>
                   <ul>

                    <li>Bachelor's degree in Computer Science or relevant field</li> <li>1+ years of experience working with .NET or relevant experiences</li> <li>Experience developing web-based applications in C#, HTML, JavaScript, ASP, or .NET</li>
                    <li>Experience working with MS SQL Server Knowledge of practices and procedures for full software design life cycle</li>
                   </ul>
                     
                </div>
            </div>
      <p>Nexus infotech · Vadodara, Gujarat, India </p>
                                        <!-- 4. modal -->
                     
                             
          <div id="modal8" class="modal">
        <div class="modal-content">
            <span class="close" data-modal-id="modal8">&times;</span>
            <p>250-300 employees · Information Technology & Services</p>
            <h4>About</h4> 
            <p>nexus infotech is leading web development, digital marketing and mobile app development service provider in Nagpur.</p>
             <h4>Salary details</h4>
             <p>₹100,000/yr - ₹510,000/yr  On-site  Full-time  Executive</p> <ul>
                <li>1-10 employees · Higher Education
                </li>

                <p>Website</p> <li>https://nexusinfotech123.weebly.com/</li> <p>Industry</p> <li>Higher Education</li> <p>Company size</p> <li>0-1 employees</li><p>Headquarters</p> <li>Nagpur, Maharashtra</li>
                <h4>Locations</h4>
                <li>Primary
                    NIT Complex
                    Sita Buldi Market Road, Nagpur, Maharashtra 440012, IN</li>
             </ul>
             

       <b>Salary:₹40,000 - ₹1,00,000 a month</b>
            
        </div>
              </div>
       
                    <a href="add-new.php">Apply</a>
                </li>
            
                <!-- ................5.job listings here............................................. -->


                <li class="job-listing">
                    <h3>Front End Developer</h3>
            <button class="open-modal-btn" data-modal-id="modal9">Details</button>
            <button class="open-modal-btn" data-modal-id="modal10">Salary</button>
    
                    
           
               <div id="modal9" class="modal">
                <div class="modal-content">
                    <span class="close" data-modal-id="modal9">&times;</span>
                  <h4>Location</h4> <p>Vadodara, Gujarat, India</p> <h4>Benefits</h4> <ol type="1">
                    <h3>About the job</h3> 
                    <ul>
                        <li>Net Core, .Net Standard, .Net Framework specifically the C# language</li> <li>Proficient in Entity Framework Core, LINQ, Web APIs, SOLID principles</li> <li>Sound Knowledge with Containers, GIT, Swagger/Postman</li> <li>Knowledge of Architecture and Design Patterns. Microservice</li>
                   <li>Should have Knowledge of unit tests.</li>
                   
                   
                    </ul>
                    <h4>Responsibilities</h4> <p>Develop features across multiple subsystems within our applications, including collaboration in requirements definition, prototyping, design, coding, testing and deployment.</p> <p>Provide engineering support (when necessary) to our technical operations staff when they are building, deploying, configuring and supporting systems for customers.</p>
                   <p>Participate with the engineering and operations teams to define plans for standardizing, scaling and enhancing our products and the services utilized to deploy/install/release those products</p>
                   <h4>Qualifications</h4>
                   <ul>

                    <li>Bachelor's degree in Computer Science or relevant field</li> <li>1+ years of experience working with .NET or relevant experiences</li> <li>Experience developing web-based applications in C#, HTML, JavaScript, ASP, or .NET</li>
                    <li>Experience working with MS SQL Server Knowledge of practices and procedures for full software design life cycle</li>
                   </ul>


                </div>
            </div>
      <p>Potenz Technology,Vadodara, Gujarat, India</p>
                                        <!-- 5. modal -->
                     
                             
          <div id="modal10" class="modal">
        <div class="modal-content">
            <span class="close" data-modal-id="modal10">&times;</span>
            <p>70-100 employees · Information Technology & Services</p>
            <h4>About</h4> 
            <p>nexus infotech is leading web development, digital marketing and mobile app development service provider in Nagpur.</p>
             <h4>Salary details</h4>
             <p>₹100,000/yr - ₹510,000/yr  On-site  Full-time  Executive</p> <ul>
                <li>1-10 employees · Higher Education
                </li>

                <p>Website</p> <li>https://nexusinfotech123.weebly.com/</li> <p>Industry</p> <li>Higher Education</li> <p>Company size</p> <li>0-1 employees</li><p>Headquarters</p> <li>Nagpur, Maharashtra</li>
                <h4>Locations</h4>
                <li>Primary
                    NIT Complex
                    Sita Buldi Market Road, Nagpur, Maharashtra 440012, IN</li>
             </ul>
             

       <b>Salary:₹40,000 - ₹1,00,000 a month</b>


        </div>
              </div>
       
                    <a href="add-new.php">Apply</a>
                </li>



                <!-- ................6.job listings here............................................. -->

                <li class="job-listing">
                    <h3>Web Developer</h3>
            <button class="open-modal-btn" data-modal-id="modal11">Details</button>
            <button class="open-modal-btn" data-modal-id="modal12">Salary</button>
    
                    
           
               <div id="modal11" class="modal">
                <div class="modal-content">
                    <span class="close" data-modal-id="modal11">&times;</span>
                    <h4>Job details</h4>
                    <h4>About the job</h4> <p>At Horizontal Digital, we hold ourselves to one key belief: You're only as good as your worst customer experience. This mantra is what drives our digital consultancy to think beyond the easy answers and instead create websites, apps, portals and other experiences that solve customer needs for Fortune 500 companies in intuitive and empathetic ways. And we make this lofty standard a reality by fusing strategy, data, design and technology together to arrive at solutions that set the bar higher for everyone.
                        We use these values to fuel superior results:</p>
                        <h4>What you'll do: </h4>
                        <ul>
                            <li>Develop new .NET based functionalities and applications in Visual Studio</li>
                            <li>Work for customers. In our office, or on-site in their office
                                
                            </li>
                            <li>Experience with design pattern is a plus </li> <li>Full development lifecycle experience </li>
                            <h4>Who you are: </h4> <li> Accurately estimate the scale and scope of projects</li> <li> Ensure all solutions are documented and meet design requirements</li> <li> Lead and mentor other developers</li> <li>Architect custom solutions and maintain applications for our clients</li>

                        </ul>
                        <ol type="A">
                           <h4>What you bring: </h4> <li> Education - bachelor's degree</li> <li> Minimum 2+ years of work experience and hands on experience on MVC 5.0 related projects</li> <li> Preference will be given to candidates who have any CMS knowledge</li>
                           <li> Minimum of 2+ years of experience working on Sitecore</li>

                        </ol>
                    
                   

             
              

           
                </div>
            </div>
      <p>Vama Communications Pvt. Ltd.Bodakdev, Vadodara, Gujarat, India</p>
                                        <!-- 6. modal -->
                     
                             
          <div id="modal12" class="modal">
        <div class="modal-content">
            <span class="close" data-modal-id="modal12">&times;</span>
            <h4>Salary details</h4>
             <p>201-500 employees · Information Technology & Services</p>

            <h4>About</h4> 
            <p>nexus infotech is leading web development, digital marketing and mobile app development service provider in Nagpur.</p>
             <h4>Salary details</h4>
             <p>₹100,000/yr - ₹510,000/yr  On-site  Full-time  Executive</p> <ul>
                <li>1-10 employees · Higher Education
                </li>

                <p>Website</p> <li>https://nexusinfotech123.weebly.com/</li> <p>Industry</p> <li>Higher Education</li> <p>Company size</p> <li>0-1 employees</li><p>Headquarters</p> <li>Nagpur, Maharashtra</li>
                <h4>Locations</h4>
                <li>Primary
                    NIT Complex
                    Sita Buldi Market Road, Nagpur, Maharashtra 440012, IN</li>
             </ul>
             

       <b>Salary:₹40,000 - ₹1,00,000 a month</b>
       
       

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
                   <h5></h5>
                </div>
            </div>
      
                                        <!-- 3. modal -->
                     
                             
          <div id="modal12" class="modal">
        <div class="modal-content">
            <span class="close" data-modal-id="modal12">&times;</span>
            <h4>Salary details</h4>
             


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
