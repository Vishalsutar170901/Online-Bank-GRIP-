<!DOCTYPE html>
<?php  
include("connection.php");
error_reporting(0);
?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
    
        <title>The sparks foundation bank</title>
    </head>
    <body class="background" id="home">
            <nav class="navbar  h-nav ">
                <ul class="navlist v-class">
                    <div class="logo"><img src="images\Bank.png" alt="logo"></div>
                    <p class="text-big">Welcome, to Online Bank!</p>
                 
                    <li><a href="#home">Home</a></li>
                    <li><a href="cstmlist.php">Customer list</a></li>
                    <li><a href="transfermoney.php">Transfer Money</a></li>
                    <li><a href="transaction.php">Transaction History</a></li>
                    <li><a href="Aboutus.html">About creater</a></li>
                
<li>
<marquee style="font-family:Vardana; color:white" bgcolor="white" direction="up" height="150" width="250" >
<img src="data:image/jpeg;base64,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" alt="LinkedIn" />

</marquee>
</li>

                </ul>
                <div class="burger">
                    <div class="line"></div>
                    <div class="line"></div>
                    <div class="line"></div>
                </div>
                
            </nav>
            <section class= " firstsection" >
                <div class="box-main">
                    <div class="firsthalf">
                      
                        <p class="text-small"></p>
                      

                    </div>
                </div>
            </section><hr>
            
            <br>
        
        <section >
            <li>
            <div class="one-t" >
                <img id="transfermoney" height ="300px" width="300px" src="images\Tm.png" alt="Transfer money">
                    <div><a href="transfermoney.php"><button class="main-button">Transfer Money</button></a></div>
            </div></li>
            <li>
            <div class="one-t">
                <img id="history" height ="300px" width="300px" src="images\Th.jpg" alt="Transfer list">
                    <div><a href="transaction.php"><button class="main-button">View Transfer History</button></a></div>
            </div></li>
            <li>
            <div clas="one-t">
                <img id="customerlist" height ="300px" width="300px" src="images\bc.jpg" alt="customerr list">
                     <div><a href="cstmlist.php"><button class="main-button">show customer list</button></a></div>
                    
            </div></li>
           
        </section>
        <br><br><br><br>
        <hr>

       
        <html>
<head>
<style type="text/css">
#shareicons img {
width: 80px;
padding: 30px;
display: inline;
}

</style>
</head>
<body class="background" id="home">
           
<center>

<div id="shareicons">
<body class="background" id="home">
            <nav class="navbar  h-nav ">
                <ul class="navlist v-class">
                   
                   
<li>
<a href="https://accounts.google.com/signin/v2/identifier?service=mail&flowName=GlifWebSignIn&flowEntry=ServiceLogin">
<img src="https://simplesharebuttons.com/images/somacro/email.png" alt="Email"/>
</a></a></li>
<li>
<a href="https://www.facebook.com/login/" target="_blank">
<img src="https://simplesharebuttons.com/images/somacro/facebook.png" alt="Facebook" />
</a></li>
<li>
<a href="https://www.google.com/" target="_blank">
<img src="https://simplesharebuttons.com/images/somacro/google.png"   alt="Google" />
</a></li>
<li>
<a href="https://www.linkedin.com/in/vishal-sutar-933b84203" target="_blank">
<img src="https://simplesharebuttons.com/images/somacro/linkedin.png" alt="LinkedIn" />
</a></li>





</ul>
</center>
</div>
<br>
<br>
<footer>
<h4 style="background-color:darkgray;">
</h4></footer>
</body>
</html>
    </body>
</html>
