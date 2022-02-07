<!DOCTYPE html>
<?php  
include("connect.php");
error_reporting(0);
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\style_cstm.css">
    <title>CUSTOMER LIST</title>
</head>
<body>
    <div class="list">
        <h1>CUSTOMER LIST</h1>
        <table>
            <table class="transferhistory" border="3" align="center" cellspacing="7">
                <tr>
                    <th class="table-h">USER ID</th>
                    <th class="table-h">NAME</th>
                    <th class="table-h">EMAIL</th>
                    <th class="table-h">BALANCE</th>
                    <th class="table-h">TRANSFER</th>
                </tr>
                <?php
                        error_reporting(0);
                        include("connect.php");
                        $query = "SELECT * FROM transferhistory";
                        $data = mysqli_query($conn,$query);
                        $total = mysqli_num_rows($data);
                       
                        if($total!=0)
                        {
                            $result = mysqli_fetch_assoc($data);
                            while($result=mysqli_fetch_assoc($data)){
                                echo "
                                <tr>
                                <td>".$result['userid']."</td>
                                <td>".$result['username']."</td>
                                <td>".$result['email']."</td>
                                <td>".$result['amount']."</td>
                                <td><a href='transfermoney.php'><input type = 'submit' value = 'send money'
                                id = 'sendmoney' ></td>
                                </tr>";
                            }
                            
                        }
                        else
                        {
                            echo "no records found!";
                        }
        ?>
        </table>
       
    </div>
    <div class="btn"><a id ="goback" href="bank.php"><button>&#8592 GO BACK</button></a></div>
    <footer class="copyright">
            <p>
        
            </p> 
            <p>
                GRIP The Sparks Foundation.
            </p>
    </footer> 
</body>

</html>