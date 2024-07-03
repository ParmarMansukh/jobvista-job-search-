<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>User Dashboard</title>
</head>


<style>


body{
    padding:50px;


   
}
.container{
    max-width: 600px;
    /* background-color:#2f0000c7; */
background: linear-gradient(#a619f8,#00f2fe,pink,deeppink,red);

    margin:0 auto;
    padding:50px;
    box-shadow: rgba(13, 13, 224, 0.2) 0px 7px 29px 0px;
    box-shadow: 0 0 90px red;
   text-align: center;



}

.container:hover{
box-shadow: 0 0 1000px rgb(33, 9, 252);
    

   
    
   

}
.form-group{
    margin-bottom:30px;
}
h1{
    color:black;
    
}






/* .......................modal style........ */


:root {
  --modal-duration: 1s;
  --modal-color: #0e20e9ba;
}

body {
  font-family: Arial, Helvetica, sans-serif;
  background: #000000;
  font-size: 17px;
  line-height: 1.6;
  display: flex;
  height: 100vh;
  align-items: center;
  justify-content: center;
  /* background-image: url('IT home/bangur.png'); */
}

.button {
  background: #c21616;
  padding: 0.50em 1em;
  color: #fff;
  border: 0;
  border-radius: 5px;
  cursor: pointer;
}

.button:hover {
  background: #3876ac;
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
  margin: 10% auto;
  width: 60%;
  box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 7px 20px 0 rgba(0, 0, 0, 0.17);
  animation-name: modalopen;
  animation-duration: var(--modal-duration);
}

.modal-header h2,
.modal-footer h3 {
  margin: 0;
}

.modal-header {
  background: var(--modal-color);
  padding: 15px;
  color: #fff;
  border-top-left-radius: 5px;
  border-top-right-radius: 5px;
}

.modal-body {
  padding: 10px 20px;
  color: white;
  /* background: #00042eba; */
  background: #2f0000c7;



}

.modal-footer {
  background: var(--modal-color);
  padding: 10px;
  color: #fff;
  text-align: center;
  border-bottom-left-radius: 5px;
  border-bottom-right-radius: 5px;
}

.close {
  color: #ccc;
  float: right;
  font-size: 30px;
  color: #fff;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

@keyframes modalopen {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}
a{
    text-decoration: none;
    color: white;

}
a:hover{
	color: rgba(226, 2, 2, 0.897);
    font-size: 22px;
    
}

.modal-btn{
  height:20px;
}


/* profile is........................... */
.dp{

  
  margin-left:99px;
  text-align: center;
  color:black;
  border-radius: 50%;
  height: 30px;
  width: 30px;
  padding: 1px;
  margin-bottom:100px;
  position: absolute;
  font-size:15px;
        }


        .box{

background-color: #ff6a00;
width: 500px;
height:210px;
margin-left: 150px;
text-align: center;
background: linear-gradient(#a619f8,#00f2fe,pink,deeppink,red);

  border-radius: 12px;
  color:black;
  

  
  


        }
        .box:hover{

/* background: linear-gradient(green,darkred,deeppink,darkgoldenrod); */





        }

        .font{
          font-size:19px;
        }
.top{
  margin-top:30px;
  font-size:25px;
}

</style>
<body>
    <div class="container">
        <h1> Jobvista.in  </h1>
        
        <a href="logout.php" class="btn btn-warning font" style= height:46px;width:95px;>Logout</a>
    <button id="modal-btn" class="button">Your Profile</button>
        
        

    </div>


  

   


<!-- modal.................................... -->
<div id="my-modal" class="modal">
    <div class="modal-content">
      <div class="modal-header">
        <span class="close">&times;</span>
        

          <h2 class="cen">Your Profile</h2>
        
      </div>
      <div class="modal-body">
      <?php
        $sn = "localhost";
        $un = "root";
        $ps = "";
        $dbname = "database";
        
        
         $conn = mysqli_connect($sn,$un,$ps,$dbname);

    $sql = "SELECT * FROM `users` LIMIT 1 ";

    // $conn = new mysqli('localhost','root','','eblocks');
    $result = mysqli_query($conn,$sql);

    if (mysqli_num_rows($result) > 0){

    

    while($row = mysqli_fetch_assoc($result)){ 
      $name = $row['fullname'];
      $email = $row['email'];
    
 
    
        
        
?>

    <div class="box">
    <div class="dp">  jobvista.in</div> 
<br>

    <h2 class="top"><?php  echo $name;  ?></h2>
    <h2 class="top"><?php  echo $email;  ?></h2>



</div>
<?php } }?>

      </div>
      <div class="modal-footer">
        <a href="index.php">..</a>
      </div>
    </div>
  </div>

   

  <script>


// Get DOM Elements
const modal = document.querySelector('#my-modal');
const modalBtn = document.querySelector('#modal-btn');
const closeBtn = document.querySelector('.close');

// Events
modalBtn.addEventListener('click', openModal);
closeBtn.addEventListener('click', closeModal);
window.addEventListener('click', outsideClick);

// Open
function openModal() {
  modal.style.display = 'block';
}

// Close
function closeModal() {
  modal.style.display = 'none';
}

// Close If Outside Click
function outsideClick(e) {
  if (e.target == modal) {
    modal.style.display = 'none';
  }
}

  </script>                 
    
</body>
</html>


