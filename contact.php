
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">


    <style>
           body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

.contact-container {
    max-width: 600px;
    margin: 50px auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

form {
    display: flex;
    flex-direction: column;
}
a{
  margin: 3px auto;
  margin-left: 34px;
  

    
}
label {
    margin-bottom: 8px;
}

input, textarea {
    padding: 10px;
    margin-bottom: 16px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

button {
    background-color: #4caf50;
    color: #fff;
    padding: 12px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

button:hover {
    background-color: #45a049;
}

@media screen and (max-width: 600px) {
    .contact-container {
        margin: 20px;
    }
}
#submit{
            width: 110px;
            margin-right: 20px;
            font-size: 16px;
           }
        

        #reset{
            width:110px;
            background-color:red;
            font-size: 16px;
           }
        

        
        .con
        {
            display: flex;
            font-size:20px;
            max-width:400px;
            width:100px;
            
        }
        
        .success{
    width: 200px;
    text-align: center;
    margin-top: 20px;
    
    color: whitesmoke;
    background-color:rgb(44,158,24);

        }
        .alert{background-color:rgb(252,59,59);
                max-width:400px;
                width: 200px;
                text-align: center;
                margin-top: 20px;
               color: whitesmoke;
        }
        h2{
   text-align: center; 
            
        }
    </style>
</head>
<body>
<section class="py-5">
    <div class="container">
        <div class="card rounded-0 card-outline card-purple shadow px-4 px-lg-5 mt-5">
            <div class="row">
            <div class="card-body">

                <h2>Contact Form</h2>
                <!-- Contect page -->
                <div class="contact-container">
        <form id="contact-form" action="" method="post">
            <!-- <h2>Contact Us</h2> -->
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="5" required></textarea>
   <div class="con">
            <button type="submit" id="submit" name="send">Submit</button>
            <button type="reset" name="reset" id="reset">Reset</button>
    
            <a href="check.php" class="btn btn-warning" tabindex="-1" role="button" aria-disabled="true">Back</a>
            </div>
        </form>


    </div>
           
           
           
            </div>
            </div>
        </div>
    </div>
    
</section> 

<script>

    
let SubmitBtn=document.querySelector("button")
SubmitBtn.addEventListener("click",showMsg);

  function showMsg(){
   alert(" Massage Send")
   
    alert(" Successful")

  
  }



      </script>


</body>
</html>


