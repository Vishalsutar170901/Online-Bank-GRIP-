<!DOCTYPE html>
<?php  
include("test.php");
// error_reporting(0);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\style_transfer.css">
    <title>TRANSFER MONEY</title>
</head>
<body>
<form class="form-bg" action="" method="POST">
                <h1> TRANSFER MONEY </h1><br>
                <div id="user">
                    <h2 class="name">user id</h2>
                        <input type="text" name="userid" placeholder="USER ID" required>
                </div><br>

                <div>
                    <h2 class="name">user name</h2>
                        <input type="text" name="username" placeholder="USER NAME"  required>
                </div><br>
                <div>
                    <h2 class="name">amount</h2>
                        <input type="number" name="amount" placeholder="AMOUNT" required>
                </div><br>
                <div>
                    <h2 class="name">description</h2>
                        <input type="text" name="descript" placeholder="DESCRIPTION" required>
                </div><br>

                <div>
                        <h2 class="name">transfer to</h2>
                        <select name="transfer" required>
                            <option selected hidden value="">user name</option>
                            <option value="Yash">Yash</option>
                            <option value="Onkar">Onkar</option>
                            <option value="Affaf">Affaf</option>
                            <option value="sukesh">sukesh</option>
                            <option value="Vilas">Vilas</option>
                            <option value="Virat">Virat</option>
                            <option value="Rohit">Rohit</option>
                            <option value="sainath">sainath</option>
                            <option value="Aftab">Afatb</option>
                            <option value="Akash">Akash</option>
                        </select>
                    
                </div><br>

                <div class="send-money">
                    <button type="submit" name="submit">SEND MONEY</button>
                </div>
            </form>
            <div class="btn-align"> 
                <a href="cstmlist.php"><button  class="btn"> &#8592 go back</button></a>
            </div>
            <div class="btn-align ,btn-al">
            <a href="transaction.php"><button  class="btn-two">  View Transaction History &#8594</button></a>
            </div>
            
            <footer class="copyright">
            <p>
           
            </p> 
            <p>
                GRIP The Sparks Foundation.
            </p>
    </footer> 
</body>
</html>
<?php
if(isset($_POST['submit'])){

    $ui =$_POST['userid'];
    $un =$_POST['username'];
    $am =$_POST['amount'];
    $pc =$_POST['descript'];
    $pn =$_POST['transfer'];
        if($ui!="" && $un!="" &&  $am!="" && $pc!="" && $pn!=""){

    $query = "INSERT INTO transferhistory VALUES('$ui','$un','$am','$pc','$pn')";
    $data = mysqli_query($conn,$query);

    if($data){
        echo '<script>alert("TRANSACTION SUCCESSFULL!");
        </SCRIPT>';
    }
}
    else{
        echo "failed to insert into db";
    }
}
?>