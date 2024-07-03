<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
             .dp{
  background-color: #ff6a00;
  margin-left:99px;
  text-align: center;
  border: 1px solid white;
  border-radius: 50%;
  height: 20px;
  width: 20px;
  padding: 1px;
  position: absolute;
        }


        .box{

background-color: #ff6a00;
border: 2px solid red;
width: 290px;
margin-top: 250px;
margin-left: 600px;
text-align: center;
background: linear-gradient(#a619f8,#00f2fe,pink,deeppink,red);
border-top:3px solid red;
border-left: 3px solid rgb(39, 4, 233);
  border-bottom: 3px solid rgba(1, 226, 12, 0.808);
  border-right: 3px solid rgb(230, 6, 129);
  border-radius: 12px;
  box-shadow: 0 0 0 30px red;

  
  


        }
        .box:hover{

background: linear-gradient(green,darkred,deeppink,darkgoldenrod);
box-shadow: 0 0 0 30px black;



        }
    </style>
</head>
<body>
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
    <div class="dp">A</div> 
<br>
    <h2><?php  echo $name;  ?></h2>
    <h2><?php  echo $email;  ?></h2>



</div>
<?php } }?>

</body>
</html>