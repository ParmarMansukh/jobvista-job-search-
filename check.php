<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>

<style>

body{

    background-image: url('hedrabadu.png');
    background-size: cover;
    background-repeat: no-repeat;
    height:550px;
}

    .mp{
        text-align: center;
    
  background-color: black;
  max-width: 800px;
    
    margin:0 auto;
    padding:50px;
    box-shadow: rgba(13, 13, 224, 0.2) 0px 7px 29px 0px;
    box-shadow: 0 0 190px red;
   text-align: center;
  
        
    }

    .mp:hover{
        box-shadow: 0 0 290px rgba(9, 238, 21, 0.788);


    }
    a{
        margin: 12px;
    }

    


header {
    background-color: #333;
    color: #fff;
    padding: 10px 0;
    text-align: center;
   width: 100%;

}

h1{

  margin-left:-175px ; 
  
}

nav {
    display: flex;
    justify-content: center;
    background-color: #710202b5;
  
    padding: 10px 0;

}

nav ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
}

nav ul li {
    display: inline;
    margin-right: 100px;
  
    
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
  

   a{
    text-decoration: none;

}
a:hover{
    box-shadow: 0 0 100px rgb(245, 6, 225);

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
</style>
<body>
    

 
<header>
        <h3> JOBVISTA.IN</h3>
        <nav>
            <ul>
                <li><a href="home.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="index.php">Jobs</a></li>
            
            </ul>
        </nav>
    </header>


    <div class="mp">  
    <a href="admin.php" class="btn btn-primary" tabindex="-1" role="button" aria-disabled="true">User information</a>

    <a href="2employee.php" class="btn btn-danger" tabindex="-1" role="button" aria-disabled="true">employee biodata</a>
    
    <a href="job add.php" class="btn btn-warning" tabindex="-1" role="button" aria-disabled="true">Job Add..</a>
    <a href="jobbedit.php" class="btn btn-primary" tabindex="-1" role="button" aria-disabled="true">Job Delete..</a>
    <a href="jobvista.php" class="btn btn-danger" tabindex="-1" role="button" aria-disabled="true">Home..</a>

   
</div>

<footer>
        <p>&copy;  JOBVISTA IT COMPANY JOB</p>
    </footer>

    
</body>
</html>