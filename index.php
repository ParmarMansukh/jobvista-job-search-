




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
<style>
  body{
    background-image: url('bgcolor/bg5.jpeg');
    background-size: cover;
    background-repeat:no-repeat ;
  }

    /* padding: .........................styleshit................................................3px; */




/* *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
} */
body{
    color: white;
    background-color: black;
    margin: 0px 45px 0px 45px;
   
}
nav{
    padding: 4px;
    /* justify-content: center; */
    /* display: flex; */
    /* background-color: rgba(255, 0, 0, 0.295); */
    background-color: #710202b5;
    margin: 5px 2px 2px 2px;
    height: 35px;
    border: 1px solid white;
    border-radius: 13px;
}
.navel{
  margin-left: 10%;
    color: white;
    text-decoration: none;
}


.sbtn{
  cursor: pointer;
  transition: 0.4s;
  height: 35px;
  border-radius: 8px;
  width: 148px;
  padding: 1px;
  background-color: #48ff00;
  
  font-size: 19px;
  color: white;
  /* margin-left: 210px; */
margin: 1px -302px 1px 230px;

}

.sbtn:hover{
  
  background-color: #1100fcc2;

}

.search-icon{
  border-radius: 40px;
height: 25px;
width: 18px;
margin: 7px 0px 0px 246px;
position: absolute;
}


#slides{
	position: relative;
	height: 378px;
	padding: 0px;
	margin: 0px;
	list-style-type: none;
}

.slide{
	position: absolute;
	left: 0px;
	top: 0px;
	width: 100%;
	height: 100%;
	opacity: 0;
	z-index: 1;

	-webkit-transition: opacity 1s;
	-moz-transition: opacity 1s;
	-o-transition: opacity 1s;
	transition: opacity 1s;
}

.showing{
	opacity: 1;
	z-index: 2;
}


.controls{
	display: none;
}


/*
non-essential styles:
just for appearance; change whatever you want
*/

.slide{
	font-size: 40px;
	/* padding: 40px; */
	box-sizing: border-box;
	background: #333;
	color: #fff;
  
  background-size: cover;
}

.slide:nth-of-type(1){
	background-color: red;
  background-image: url('IT home/bangur.png');
}

.slide:nth-of-type(2){
	background-color: orange;
  background-image: url('IT home/hedrabad.png');
}

.slide:nth-of-type(3){
  background-color: green;
  background-image: url('IT home/gold1.jpeg');
  height: 380px;
}
.slide:nth-of-type(4){
  background-color: green;
  background-image: url('IT home/home38.jpeg');
  height: 380px;
}
.slide:nth-of-type(5){
  background-color: green;
  background-image: url('IT home/home22.jpeg');
  height: 380px;
}
.slide:nth-of-type(6){
  background-color: green;
  background-image: url('IT home/home7.jpeg');
  height: 380px;
}
.slide:nth-of-type(7){
  background-color: green;
  background-image: url('IT home/hedrabad.png');
  height: 380px;
}


.controls{
  /* background: #333;
  color: #fff;
  border: none;
  /* padding: 20px 0px; */
  /* font-size: 20px;
  cursor: pointer;
  border: 2px solid #fff;
  margin: 10px 0px 0px 10px;
  width: 70px;
  height: 20px;
  border-radius: 10px;  */


  background: #333;
  color: #fff;
  border: none;
  /* padding: 20px 0px; */
  /* font-size: 20px; */
  cursor: pointer;
  border: 2px solid #fff;
  margin: 96px 0px 0px 10px;
  width: 26px;
  height: 25px;
  border-radius: 10px;
}

.controls:hover,
.controls:focus{
  background: #eee;
  color: #333;
}

.container{
  height: fit-content;
  /* height: auto; */

  border-radius: 10px;
  margin: 17px 80px 0px 86px;

  /* border-radius: 10px; */
  border: 2px solid white;
}



.buttons{
margin: 303px 0px 0px 453px;
  position: absolute;
  left: 0px;
  top: 0px;
  z-index: 10;
  font-size: 0px;
}




 .country-box{
  background-color: #333;
}

.country-arry{
   display: flex;
  
 }


 .flag{
  height: 94px;
    width: 138px;
  
  /* height: 83px;
  width: 93px; */
  border-radius: 10px;
 }
 .cuntry-card{
  border-radius: 10px;
  /* margin: 14px; */
  margin-left:29px ;
  margin-top: 4px;
  margin: 33px;
  

 }

 .cuntry-name{
    color: rgb(255, 255, 255);
    position: absolute;
    margin: -101px 2px 2px 0px;
    font-size: 20px;
    /* opacity: 1; */
    border-radius: 10px;
    background-color: #333;
    opacity: 0;
    align-items: center;
    justify-content: center;
   
    padding-top: 27px;
    padding-left: 42px;
    height: 69px;
    width: 94px;
}
a{
  color: white;
  text-decoration: none;
}


.cuntry-name:hover{
  border: 2px solid white;
  opacity: 1;
  background-color: #33333382;
  cursor: pointer;
  box-shadow: 1px 0px 20px 2px rgb(255 255 255 / 54%);
}
.flag:hover{
  background-color: #333;
 }

 

 .b-logo{
  border-radius: 40px;
      height: 30px;
      width: 30px;
      position: absolute;
      /* margin: 0px 0px 0px 7px; */
 }

 .b-name{
  margin: 0px 0px 0px 37px;
  font-size: 19px;
 }

 .country-arry{
  display: flex;
  flex-wrap: wrap;
  margin-top: 10px;
  margin-left: 85px;
 }

    

    /* padding: .........................styleshit................................................3px; */



  .pop-lab{
    border-right: 2px solid;
    border-bottom: 1px solid;
    border-top: 1px solid;
    /* padding: 3px; */
    border-radius: 10px;
    width: 181px;
    height:34px ;
    margin: -41px -67px 0px 4px;
    background-color: rgba(58, 58, 100, 0.378);
    padding: 1px 1px 1px 43px;
    box-shadow: 1px 0px 11px 0px rgb(255 255 255 / 54%)
  }
  .poplap-img{
    height: 36px;
    width: 36px;
    /* background-color: black; */
      border-radius: 100%;
      border: 2px solid white;
      /* background: none; */
      margin: 2px 2px 2px 2px;
    }
    
    .worldmap_icon{
      border-radius: 40px;
    height: 21px;
    width: 21px;
    position: absolute;
    margin: 5px 0px 0px 89px;
    }
    

    .worldmap_icon-btn{
  cursor: pointer;
  transition: 0.4s;
  height: 27px;
  border-radius: 8px;
  width: 148px;
  padding: 1px;
  background-color: #0000af7a;
  color: white;
margin: 1px 1px 1px 75px;

}

.worldmap_icon-btn:hover{
  cursor: pointer;
  background-color: #0000aff3;
}

.cat1{
  display: flex;
  /* overflow: wrap; */
  /* flex-wrap: wrap; */
}
.cat2{
  display: flex;
  /* flex-wrap: wrap; */
}
.categories{
  margin-left: 150px;
}
.box{
  justify-content: center;
  text-align: center;
  align-items: center;
  margin: 32px;
  height: 150px;
    width: 175px;
  border-radius: 10px;
  transition: transform 0.5s;
}
.box:hover{
  height: 147px;
  width: 172px;
  cursor: pointer;
  border: 3px solid rgb(247, 20, 216);
  border-top: 3px solid rgb(0, 248, 33);
  border-bottom: 3px solid rgb(38, 0, 255);
  box-shadow: 1px 0px 20px 2px rgba(10, 239, 255, 0.54);
  
}


.cat-tit{
  margin-top: 53px;
  font-size: 24px;
  font-weight: bold;
  font-family: 'Times New Roman', Times, serif;
}
#redius{
  margin: 2px;
}
.b1{
  background-image: url('bgcolor/bg6.jpeg');
  background-size:cover;
  background-repeat:no-repeat ;
  background-position:center;
  color: #000000;
  
  
}
.b2{
  background-image: url('logo company/logo15.jpeg');
  background-size:cover;
  background-repeat:no-repeat ;
  background-position:center;
  color: #000000;

  
}
.b3{
  background-image: url('bgcolor/bg1.jpeg');
  background-size:cover;
  background-repeat:no-repeat ;
  background-position:center;
  color: #ff07ea;

  
}
.b4{
  background-image: url('logo company/logo17.jpeg');
  background-size:cover;
  background-repeat:no-repeat ;
  background-position:center;
  color: #000000;
  
}
.b5{
  background-image: url('logo company/logo18.jpeg');
  background-size:cover;
  background-repeat:no-repeat ;
  background-position:center;
  color: #000000;

  
}
.b6{
  background-image: url('logo company/logo1.png');
  background-size:cover;
  background-repeat:no-repeat ;
  background-position:center;
  color: black;

  
}
.b7{
  background-image: url('logo company/logo47.jpeg');
  background-size:cover;
  background-repeat:no-repeat ;
  background-position:center;
  color: black;

  
}
.b8{
  background-image: url('logo company/logo11.jpeg');
  background-size:cover;
  background-repeat:no-repeat ;
  background-position:center;
  color: white;

  
}

.toptitle{
  border-radius: 8px;
  margin: 168px 2px 2px 117px;
  padding: 3px;
  height: fit-content;
  width: fit-content;
background-color: #0000008c;
}
.toptitle2{
  border-radius: 8px;
  margin: 168px 2px 2px 267px;
  padding: 3px;
  height: fit-content;
  width: fit-content;
background-color: #000000;
}

.navel:hover{
color: blue;
}



                  /*          marque img  8*/



.firstsec {
        padding: 9px;
        background-color: #333333ae;
        height: 80vh;
        margin-top: 1px;
        color: whitesmoke;
        border-radius: 12px;
      }

      .fflag {
        margin: 8px 2px 2px 35px;
        border-radius: 10px;
        height: 74px;
        width: 103px;
      }

      .fsec {
        margin: -82px 1px 1px 176px;
        color: white;
        position: absolute;
        display: flex;
        flex-direction: column;
        height: 58px;
        width: 156px;

        font-size: 19px;
      }
      .hr {
        margin: -82px 2px 2px 155px;
        width: 3px;
        position: absolute;
        height: 76px;
        color: red;
        background-color: red;
      }

      .conttt {
        margin-top: 9px;
        height: 247px;
        /* width:645px; */
        overflow: hidden;
        /* margin: 3px; */
        /* padding: 5px; */
        display: grid;
        /* place-items: center; */
        /* background: linear-gradient(rgba(5, 166, 5, 0.577),rgba(255, 255, 0, 0.551),rgba(255, 0, 0, 0.667)); */
        
   
      }

      .imgsi {
        height: 200px;
        border-radius: 10px;
        width: 230px;
        transition: transform 1s;
        
      }
      .imgsi:hover {
        cursor: pointer;
      
        border-radius: 10px;
        transform: translateZ(-10px);
      }

      .slide-conttt {
        /* transition: 0.1s; */
        display: flex;
        width: calc(240px * 17);
        animation: scroll 8s linear infinite;
      }
      .slide-conttt:hover {
        animation-play-state: paused;
      }
      @keyframes scroll {
        0% {
          transform: translateX(-10px);
        }
        /* 20%{
          transform: translateX(0);
        }
        0%{
          transform: translateX(0);
        } */
        100% {
          /* transform: translateX(calc(-250px *9)); */
          transform: translateX(-250px);
        }
      }

      .slideimggg {
        height: 250px;
        width: 227px;
        display: flex;
        align-items: center;
        padding: 9px;
        perspective: 100px;
      }

      .turist-logo {
        margin: 2px 2px 2px 2px;
        border-radius: 30px;
        height: 39px;
        width: 39px;
        border: 1px solid white;
      }
      .turist-lab {
        padding: 3px;
        border-radius: 10px;
        /* border: 2px solid white; */
        width: 108px;
        margin: -43px 0px 0px 44px;
        background-color: #3a3a64;
      }
      .msec {
        margin-top: 3px;
      }
      .font25{
        font-size: 25px;
      }
    
</style>
</head>
<body>
  <nav>
    <img class="b-logo" src="logo company/logo enleg.jpeg" alt="">
    <a class="navel b-name" href="#">JobVista</a>
    <a class="navel home" href="home.html">HOME</a>
    <a class="navel home" href="about.html">ABOUT</a>
    <a class="navel home" href="list job.php">JOB</a>
    

    <a class="navel about" href="inde.php">LOGIN OUT</a>
    



    <!-- <img class="worldmap_icon" src="worldmap_icon.jpg" alt=""> -->
    <!-- <button class="worldmap_icon-btn">world map</button> -->

    <img class="search-icon" src="bgcolor/black sea.png" alt="">
<button class="sbtn" type="submit"><a href="spage.php">search </a></button>

</nav>



  <div class="container">
    <ul id="slides" style="margin: 2px;">
  

       <li class="slide showing"> <a href="IT8B.php"><h6 class="toptitle">IT Comapny Bengaluru </h6></a> </li>
     
      <li class="slide"><a href="IT6HY.php"><h6 class="toptitle">IT Company Hyderabad </h6></a></li>
      <li class="slide"><a href="IT4s.php"><h6 class="toptitle2">IT Company Surat</h6></a></li>
      <li class="slide"><a href="IT3g.php"><h6 class="toptitle2">IT Company Gandhinagar </h6></a></li>
      <li class="slide"><a href="ITa2.php"><h6 class="toptitle2">IT Company  Ahmedabad</h6></a></li>
      <li class="slide"><a href="IT7m.php"><h6 class="toptitle2">IT Company Mumbai </h6></a></li>
      <li class="slide"><a href="IT5v.php"><h6 class="toptitle2">IT Company  Vadodara  </h6></a></li>
      




    </ul>
    <div class="buttons">
      <button class="controls" id="previous">&lt;</button>
  
      <button class="controls" id="pause">&#10074;&#10074;</button>
  
      <button class="controls" id="next">&gt;</button>
    </div>
  </div>
  <br>
 <hr>
 <br>
 <div class="categories">
  <div class="cat1">

    <a href="IT3g.php " class="box b1"><div class="cat-tit">Developer</div></a>
    <a href="IT3g.php" class="box b2"><div class="cat-tit">Software Engineer</div></a>
    <a href="IT3g.php" class="box b3"><div class="cat-tit">Web Developer</div></a>
    <a href="ITa2.php" class="box b4"><div class="cat-tit">ReactJS Developer</div></a>
  </div>
<div class="cat2">

  <a href="IT3g.php" class="box b5"><div class="cat-tit">Java Developer</div></a>
  <a href="ITa2.php" class="box b6"><div class="cat-tit">Web Developer</div></a>
  <a href="ITa2.php" class="box b7"><div class="cat-tit">Python Developer</div></a>
  <a href="ITa2.php" class="box b8"><div class="cat-tit">Front End Developer</div></a>
</div>
</div>
 <br>  


<div class="country-container">
  <img class="poplap-img" src="logo company/logo enleg.jpeg" alt="">
  <h2 class="pop-lab">IT Company Job</h2>
  <br>
  <div class="country-arry">
    <div class="cuntry-card">
      <img class="flag" src="logo company/logo4.jpeg" alt="">
      <div class="cuntry-name"><b><a href="IT4s.php">PHP Laravel</a></b></div>
    </div>

   


    <div class="cuntry-card">
     <img class="flag" src="logo company/logo5.png" alt="">
      <div class="cuntry-name"><b> <a href="IT4s.php">Python Full Stack </a></b></div>
    </div>


    <div class="cuntry-card">
      <img class="flag" src="logo company/logo7.jpeg" alt="">
      <div class="cuntry-name"><b><a href="IT4s.php">Angular JS D</a></b></div>
    </div>


    <div class="cuntry-card">
      <img class="flag" src="logo company/logo24.jpeg" alt="">
      <div class="cuntry-name"><b><a href="IT4s.php">Fresher Web D</a></b></div>
    </div>

    <div class="cuntry-card">
      <img class="flag" src="logo company/logo11.jpeg" alt="">
      <div class="cuntry-name"><b><a href="IT3g.php">Java Developer</a></b></div>
    </div>

    <div class="cuntry-card">
      <img class="flag" src="logo company/logo13.jpg" alt="">
      <div class="cuntry-name"><b><a href="IT3g.php">Web Application D</a></b></div>
    </div>

    <div class="cuntry-card">
      <img class="flag" src="logo company/logo20.jpeg" alt="">
      <div class="cuntry-name"><b><a href="IT3g.php">.Net MVC Developers</a></b></div>
    </div>

    <div class="cuntry-card">
      <img class="flag" src="logo company/logo25.jpeg" alt="">
      <div class="cuntry-name"><b><a href="IT3g.php">Web Developer</a></b></div>
    </div>


    <div class="cuntry-card">
      <img class="flag" src="logo company/launchbynttdata_logo.jpeg" alt="">
      <div class="cuntry-name"><b><a href="IT8B.php">Software Specialist</a></b></div>
    </div>

    <div class="cuntry-card">
      <img class="flag" src="logo company/logo69bang.jpeg" alt="">
      <div class="cuntry-name"><b><a href="IT8B.php">Staff Digital Engineer</a></b></div>
    </div>

    </div>
</div>



 <!------------------------------------------IMG ----------------------------------------------------------------------------------------->



<div class="sec-sec">
  <div class="msec">
    <img class="turist-logo" src="logo company/logo enleg.jpeg" alt="" />
    <h3 class="turist-lab">.jobvista.in</h3>
  </div>

  <div class="conttt">
    <div class="slide-conttt">
      <div class="slideimggg">
        <a class="imgsi" href="IT3g.php">
          <img class="imgsi" src="bgcolor/Java.jpg" alt=""
        /></a>
      </div>
      <div class="slideimggg">
       <!-- <a href="/places/india/taj.html"> -->
       <a class="imgsi" href="IT4s.php">
         <img class="imgsi" src="bgcolor/php webdevlopment pm.jpg" alt="" />
       </a>
      </div>
      <div class="slideimggg">
        <a class="imgsi" href="ITa2.php">
          <img class="imgsi" src="bgcolor/react img.jpg" alt="" />
        </a>
        </div>
      <div class="slideimggg">
        <a class="imgsi" href="IT4s.php">
          <img class="imgsi" src="bgcolor/pyth.jpeg" alt="" />
        </a>
      </div>
      
    </div>
  </div>
</div>

  </body>
<script src="script.js"></script>
</html>