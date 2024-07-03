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
                <h3>PHP Laravel Developer</h3>
        <button class="open-modal-btn" data-modal-id="modal6">Details</button>
        <button class="open-modal-btn" data-modal-id="modal4">Salary</button>
       
                
        <div id="modal6" class="modal">
            <div class="modal-content">
                <span class="close" data-modal-id="modal6">&times;</span>
                

             <mp>
                 <h3>Job Description</h3>
                 <p>Praella Private Limited is hiring Shopify Developers with professional software development experience, for which required details are mentioned below. In this role, you will be expected to set-up the environments & develop the Shopify theme. If you are a technology expert, then you are willing to learn and work on new technologies also.</p>
                 <h3>Objectives of the Role:</h3>
                 <ul>

                    <li>Perform tasks accurately and up to our quality standard</li>
                    <li>Develop standard code that can serve as the foundation of future projects</li>
                    <li>Build personalized and customized features for customers</li>
                    <li>Create user focused experiences through mockups provided</li>
                 </ul>
                 <h4>About the Role:</h4>
                 <ol type="i">
                    <li>Expert-level knowledge of HTML, CSS, Javascript and Shopify Liquid templating language.</li>
                    <li>Maintain/document working knowledge of current infrastructure and recommend future trends.</li>
                    <li>Generate custom–tailored Shopify themes for Shopify plus clients.</li>
                    <li>Proficiency in working with various Shopify JS APIs (storefront, AJAX Cart, Sections, etc.)</li>


                 </ol>
                 <h4>Skills:</h4>
                 <ul>
                    <li> Proficient in HTML & CSS(including Responsive and Mobile-First Design), JavaScript Frameworks and Libraries, Shopify, React(optional).</li>
                    <li>Extensive experience with version control system (GIT)</li>
                    <li>The ability to debug and solve problems along with the ability to communicate fluently is essential</li>
                 </ul>
                 <h4>  <b> Experience:</b>  2-5 years of relevant industry experience</h4>

               <h4>   <b> Qualification:</b> B.E/B.Tech/B.Sc [(C.S.E)/I.T], M.C.A, M.Sc (I.T)</h4>
               <h4><b>Experience:</b></h4>
               <ul>

                <li>  E-Commerce website development: 2 years (Required)</li>
                <li>Shopify: 2 years (Required)</li>
                <li>HTML/CSSS, JavaScript: 2 years (Required)</li>
               </ul>
           
           
             </mp>
                
                

            </div>
        </div>
                              <p>Praella Private Limited,Katargam, Surat, Gujarat </p>
                <a href="add-new.php">Apply</a>
            </li>

        </pm>     

                                          <!--  1. Add modal here -->

            <div id="modal4" class="modal">
                <div class="modal-content">
                    <span class="close" data-modal-id="modal4">&times;</span>
                <p>201-300 employees · Information Technology & Services</p>
                    <h4><b>Pay</b></h4>
                    <p>₹40,000 - ₹1,00,000 a month</p>
                    <h4><b>Job type</b></h4>
                    <p>Full-time</p>
                    <h4><b>Shift and schedule</b></h4>
                    <p>Day shift:
                        Monday to Friday</p>
                        <h4><b>Education:</b></h4> <p>Bachelor's (Preferred)</p>  <h4><b>Ability to Relocate:</b></h4> <p>Katargam, Surat, Gujarat: Relocate before starting work (Required)</p>
                </div>
            </div>
    
                  <!--.................................... 2.job listings here ....................................-->

             

            <li class="job-listing">
                <h3>Python Full Stack Developer</h3>
        <button class="open-modal-btn" data-modal-id="modal5">Detail</button>
        <button class="open-modal-btn" data-modal-id="modal3">Salary</button>

                
       
           <div id="modal5" class="modal">
            <div class="modal-content">
                <span class="close" data-modal-id="modal5">&times;</span>
               <h4>Responsibilities:</h4>
               <p><b>Develop robust and scalable web applications using PHP frameworks (such as Laravel, shopify, Magento or CodeIgniter) and other related technologies.</b></p>
                <ul>
                    <li>Write clean, well-structured, and maintainable code while adhering to coding standards and best practices.</li>
                    <li>Collaborate with cross-functional teams to understand project requirements, provide technical expertise, and deliver high-quality solutions.</li>
                    <li>Conduct code reviews to ensure code quality, performance, and security.</li>
                    <li>Optimize application performance and troubleshoot any issues or bugs that arise.</li>
                    <li>Stay up-to-date with the latest trends and advancements in PHP development and related technologies</li>
                    <li>Mentor and provide guidance to junior developers, sharing your knowledge and expertise</li>
                <li>Collaborate with third-party APIs and integrate them into web applications as required</li>
                </ul>
                <h4>Requirements:</h4>
                <ul>

                    <li>Bachelor's degree in Computer Science, Software Engineering, or a related field. Equivalent work experience will also be considered.</li>
                    <li>Proven experience as a PHP Developer, with a strong portfolio of web applications and projects</li>
                    <li>Expertise in PHP frameworks such as Laravel, Symfony, or CodeIgniter.</li>
                    <li>Solid understanding of web development technologies, including HTML, CSS, JavaScript, and MySQL.</li>
                    <li>Experience with Agile/Scrum methodologies is desirable</li>
                    <li>A passion for learning and staying updated with emerging technologies and industry trends</li>
                    <li>If you are a highly motivated PHP Developer looking for an exciting opportunity to contribute to innovative web development projects, we would love to hear from you.</li>
                </ul>
            </div>

        </div>
                    <p><b>Stackholic Infotech,
                        Piplod, Surat, Gujarat</b></p>
                                    <!-------------- 2number. modal ---------------->
                 
                         
      <div id="modal3" class="modal">
    <div class="modal-content">
        <span class="close" data-modal-id="modal3">&times;</span>
       <h4>Job Description:</h4>
       <p><b>We are seeking an experienced and talented PHP Developer to join our dynamic development team. As a PHP Developer, you will be responsible for the design, development, and maintenance of high-quality web applications using PHP frameworks and technologies. You will collaborate with cross-functional teams, including designers, product managers, and other developers, to deliver exceptional solutions that meet our clients' needs</b></p>
   
      <h4>Salary Details</h4>
      <p>150-200 employees · Information Technology & Services</p>
      <h4><b>Pay</b></h4>
      <p><b>₹60,000 - ₹1,00,000 a month</b></p>
      <h4><b>Job type</b></h4>
      <p>Permanent: Full-time</p>  <h4>Benefits & Perks</h4> <p>Paid time off</p> <h4><b>Location</b></h4> <p>Stackholic Infotech
        Piplod, Surat, Gujarat</p> <h4>Job Types: Full-time, Permanent</h4> <h4>Supplemental pay types:</h4><ul><li>Yearly bonus</li> <h4>Ability to Relocate:</h4> <li>Stackholic Infotech
            Piplod, Surat, Gujarat</li> <h4>Speak with the employer</h4> <p>+91 9016639283</p></ul>
   
    </div>
          </div>
   
                <a href="add-new.php">Apply</a>
            </li>

                <!-- ...........................3.job listings here............................................. -->
         
                                    <li class="job-listing">
                                        <h3>AngularJS Developer</h3>
                                <button class="open-modal-btn" data-modal-id="modal1">Details</button>
                                <button class="open-modal-btn" data-modal-id="modal2">Salary</button>
                        
                                        
                               
                                   <div id="modal1" class="modal">
                                    <div class="modal-content">
                                        <span class="close" data-modal-id="modal1">&times;</span>
                                        <h4>Job details</h4>
                                        <b>
                                        <h4><b>Benefits</b></h4><p>Pulled from the full job description</p><ul><li>Flexible schedule</li> <li>Paid time off</li> <li>Work from home</li></ul>
                                       <h4>benefits</h4>
                                        <b>We are seeking a skilled AngularJS Developer to join our dynamic and innovative development team. The successful candidate will be responsible for building and enhancing web applications using AngularJS, collaborating with cross-functional teams to define, design, and ship new features, and maintaining high code quality standards.</b>
                                        <ul>
                                            <h4>
                                                Responsibilities:
                                            </h4>
                                            <b>
                                                <li>Experience with Angular 2+ is a plus.</li>
                                                <li>Familiarity with agile development methodologies.</li>
                                                <li>Knowledge of build tools such as Webpack or Grunt</li> <li>Experience with unit testing and end-to-end testing frameworks.</li>
                                            </b>
                                             </b>
                                        </ul>

                                    </div>
                                </div>
                          <p>ExhiByte Solution,Surat, Gujarat</p>
                                                            <!------- 3. modal ---------------------->
                                         
                                                 
                              <div id="modal2" class="modal">
                            <div class="modal-content">
                                <span class="close" data-modal-id="modal2">&times;</span>
                                <h4>Job details</h4>
                                <p>20-50 employees · Information Technology & Services</p>
                                <h4>Job type</h4> <b>Full-time</b> <h4>Shift and schedule</h4> <ol type="I"> <li>Weekend availability</li>  <li>Morning shift</li>  <li>Day shift</li> <li>
                                    Monday to Friday</li></ol> <h4>Location</h4> <b>Surat, Gujarat</b>  
                                    <h4>Job Type: Full-time</h4>   <b>Salary: ₹20,000.00 - ₹400,000.00 per month</b>
                                    <h4>Supplemental pay types:</h4>
                                    <ul>

                                        <li>Joining bonus</li>
                                        <li>Overtime pay</li>
                                    </ul>
                                    <h4>Education:</h4> <ul><li>Bachelor's (Preferred)</li>
                                    
                                    <h4><b>Experience:</b></h4>
                                    <li>total work: 1 year (Required)</li>
                                    <li>software development: 1 year (Preferred)</li>
                                    <li>Angular: 1 year (Required)</li>
                                    <h4>Ability to Commute:</h4>
                                    <li>Surat Gujarat (Required)</li> <h4>Ability to Relocate:</h4> <li>Surat, Surat, Gujarat: Relocate before starting work Required</li> 
                                    </ul>
                            </div>
                                  </div>
                           
                                        <a href="add-new.php">Apply</a>
                                    </li>
                <!-- ...........................4.job listings here............................................. -->
                        
                <li class="job-listing">
                    <h3>Fresher Web Developer</h3>
            <button class="open-modal-btn" data-modal-id="modal7">Details</button>
            <button class="open-modal-btn" data-modal-id="modal8">Salary</button>
    
                    
           
               <div id="modal7" class="modal">
                <div class="modal-content">
                    <span class="close" data-modal-id="modal7">&times;</span>
                    <h3>Location</h3>
                    <p>WebContrive Technologies Pvt. Ltd.
                        Katargam, Surat, Gujarat</p>
                    <h4>Responsibilities :</h4>
                    <ul>
                        <li>Develop pixel perfect, Mobile responsive, Cross-browser compatible and S.E.O. friendly HTML/CSS for all pages.</li>
                        <li>Get HTML/CSS pages to be confirmed from concerned person/client and give them to the web developer for business logic integration.</li> <li>Training + Job Opportunity for Fresher to build career</li>
                        <li>BCA, BE, MCA, Diploma, BscIT, MscIT candidate can apply for this position</li> 
                        <h4>Responsibilities and Duties</h4> 
                        <ol type="1">
                            <li>Design and develop Odoo(OpenERP) apps(new module development, customization, Theme integration)</li>
<li>Develop web applications</li> <li>Advantage for candidate who has knowledge of Odoo UI, APPS</li> <li>Work together with senior developers to design,development and testing</li>
<li>Good Communication and code understanding Skills is a must</li> <li> HTML5, Bootstrap, JavaScript, CSS and Jquery understanding</li> <li>Basic Understanding of Oops Concepts Self Motivated and a willingness to learn new things</li>
<li>Should willing to learn Odoo & Open Source ERP System.</li> <li>Should have quick grasping skills</li>

                        </ol>
                        <h4>Speak with the employer</h4> <b>+91 6357412890</b>
                    </ul>
                </div>
            </div>
      <p>WebContrive Technologies Pvt. Ltd.
        Katargam, Surat, Gujarat</p>
                                        <!------------ 4. modal -------------------->
                     
                             
          <div id="modal8" class="modal">
        <div class="modal-content">
            <span class="close" data-modal-id="modal8">&times;</span>
             <h4>Salary details</h4>
             <p>201-250 employees · Information Technology & Services</p>
             <h4>Pay</h4> <b>₹10,000 - ₹40,000 a month</b> <h4>Job type</h4> <b>Full-time</b> <h4>Shift and schedule</h4> <p>Day shift</p>

             <ul>
                <li>Job Type: Full-time</li> <li>Pay: ₹10,000.00 - ₹40,000.00 per month</li>       <p>Schedule:</p><li>Day shift</li> <h4>Education</h4> <li>Bachelor's (Preferred)</li> <h4>Experience:</h4> <li>.NET: 1 year (Preferred)</li> <li>total work: 1 year (Preferred)</li> <li>Java: 1 year (Preferred)</li>
                <h4>Ability to Commute:</h4> <li>WebContrive Technologies Pvt. Ltd.
                    Katargam, Surat, Gujarat</li>   <h4>Ability to Relocate:</h4> <li>
                        Katargam, Surat, Gujarat</li> 
                        <h4>Speak with the employer
                            +91 8780596299</h4>
             </ul>
        </div>
              </div>
       
                    <a href="add-new.php">Apply</a>
                </li>
            
                <!-- .....................................5.job listings here............................................. -->


                <li class="job-listing">
                    <h3>Python developer</h3>
            <button class="open-modal-btn" data-modal-id="modal9">Details</button>
            <button class="open-modal-btn" data-modal-id="modal10">Salary</button>
    
                    
           
               <div id="modal9" class="modal">
                <div class="modal-content">
                    <span class="close" data-modal-id="modal9">&times;</span>
                  <h4>Location</h4> <p>Crawlapps Technologies Pvt. Ltd,
                    Surat, Gujarat</p> <h4>Benefits</h4> <ol type="1">

<li>Paid sick time</li> <li>Currently pursuing or recently completed a degree in Electronics, Communication, Computer Science, or a related field</li><li>Experience with Arduino, Raspberry Pi, and/or Python programming</li> <li>Experience with responsive and mobile-first design</li> <li>In-depth understanding of the entire web development process (design, development and deployment)</li>
<li>Optimise web performance for speed and scalability</li><li>Ability to work independently and in a team-oriented environment.</li> <li>Open to work in an Agile development environment</li> <li>Stay updated with frontend development trends and best practices.</li> <li>Familiarity with CMS such as WordPress, Webflow</li> <p>Salary: ₹50,000 per month</p>
                  </ol>
                  <h5>Schedule:

                    Day shift,
                    Monday to Friday</h5>
                </div>
            </div>
      <p>Crawlapps Technologies Pvt. Ltd,
        Surat, Gujarat</p>
                                        <!-- 5. modal -->
                     
                             
          <div id="modal10" class="modal">
        <div class="modal-content">
            <span class="close" data-modal-id="modal10">&times;</span>
            <p>10-30 employees · Information Technology & Services</p>
           <h4>Pay</h4> <p>₹50,000 a month</p> <h4>Job type</h4> <p>Fresher
            Internship</p> <h4>Shift and schedule</h4> <b>Day shift</b> <b>Job Types: Fresher, Internship
                Contract length: 6 months</b> <h4>Supplemental pay types:</h4> <ul>
                    <li>Commission pay</li> <li>Overtime pay</li> <li>Performance bonus</li> <h4>Education:</h4> <li>Bachelor's (Required)</li> <h4>Experience:</h4> <li>Python: 1 year (Preferred)</li>
                </ul>
        </div>
              </div>
       
                    <a href="add-new.php">Apply</a>
                </li>



                <!-- ................6.job listings here............................................. -->

                <li class="job-listing">
                    <h3>PHP Developer (Fresher)</h3>
            <button class="open-modal-btn" data-modal-id="modal11">Details</button>
            <button class="open-modal-btn" data-modal-id="modal12">Salary</button>
    
                    
           
               <div id="modal11" class="modal">
                <div class="modal-content">
                    <span class="close" data-modal-id="modal11">&times;</span>
                   <h4>Job details</h4> 
                   <h4>Job Title: Web Developer</h4> <b>A Web Developer,, is a professional responsible for designing, coding, and modifying websites or web applications according to a client's specifications.</b>
               <h4>Job Overview:</h4> 
               <b>We are seeking a skilled Web Developer to join our dynamic team. The ideal candidate will be responsible for designing, coding, and modifying websites, web applications from layout to function, according to the company's needs. The Web Developer will strive to create visually appealing and intuitive websites that meet clients expectations.</b>
               <h4>Responsibilities:</h4> <ol type="1"> 

                <li>Develop and maintain the website & web application projects ,ensuring its functionality and user-friendly design.</li> <li> Collaborate with the design team to implement visual elements into website designs</li> <li>Write well-designed, efficient, and clean code using programming languages such as HTML, HTML5</li> <ul> <li>CSS, JavaScript, Jquery, Bootstrap, PHP, React.Js and other relevant technologies</li></ul>
                 <li>Troubleshoot and debug issues.</li> <li> Update and manage website content, ensuring it is current and relevant.</li> <li> Implement content management systems (CMS) to facilitate content updates</li>
                 <li>Optimize websites for various devices and browsers.</li> <li> Ensure web applications are responsive and work seamlessly across different platforms</li>
                 <li>Collaborate with other team members, including designers and back-end developers, to implement and maintain website features.</li>
                 <li> Implement security measures to protect websites from cyber threats</li> <li> Monitor website performance, identify issues, and implement solutions to improve speed and efficiency</li> <li> Conduct thorough testing of websites to identify and fix bugs or other issues.</li>
                 <li>Perform usability and performance testing regularly.</li> <li>Keep abreast of industry trends and emerging technologies</li> <li> Create and maintain technical documentation related to website development and updates</li>
             
             
                </ol>
             <h4>Requirements:</h4>

                <ul>

                    <li>Responding to integration requests from front-end developers.</li>
                    <li>Conducting analysis of website and application requirements.</li>
                    <h4>Angular.</h4> <ul>
                        <li>Updating and altering application features to enhance performance</li>
                        <li> Knowledge of database systems (e.g., MySQL, MongoDB) and web server deployment.</li>
                        <li>Strong problem-solving skills and attention to detail</li> <h3>Qualifications:</h3> <b>BCA, MCA, B.Tech, M.Tech, Bsc(IT), Msc(IT) or equivalent certification</b>
                    </ul>
                </ul>
                </div>
            </div>
      <p>EC2 Consulting Solutions,
        Adajan, Surat, Gujarat</p>
                                        <!-- 6. modal -->
                     
                             
          <div id="modal12" class="modal">
        <div class="modal-content">
            <span class="close" data-modal-id="modal12">&times;</span>
            <h4>job Details</h4>
            <p>201-500 employees · Information Technology & Services</p>
            <h4>Pay</h4>  <b>₹12,000 - ₹18,000 a month</b> <h4>Job type</h4> <b>Permanent,
                Fresher,
                Full-time</b> <h4>Location</h4> <b>EC2 Consulting Solutions.
                    Adajan, Surat, Gujarat</b>
                <h4>Schedule:</h4> 
                <b>Day shift [ Monday to Saturday ]</b> <h4>Experience:</h4> <b> 0 to 3 years (Required)</b> <h4>Ability to Relocate:</h4> <b>Surat, Gujarat: Relocate before starting work (Preferred)</b>
                <b>Job Types: Full-time, Permanent, Fresher</b> <b>Salary: Up to ₹30,000.00 per month</b> <h4>Education:</h4> <p>Bachelor's (Preferred)</p>
                <h4>Experience:</h4> <b>CSS: 1 year (Preferred)</b> <p>PHP: 1 year (Preferred)</p> <h4>Ability to Relocate</h4> <b>Bodakdev, Ahmedabad, Gujarat: Relocate before starting work (Required)</b>
                <h4>Speak with the employer</h4> <b>+91 8780847292</b>

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
