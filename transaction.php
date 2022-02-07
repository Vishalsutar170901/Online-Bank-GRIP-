<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction</title>
    <link rel="stylesheet" href="css\style_transaction.css">
</head>
<body>
<div class="list">
        <h1>TRANSACTION HISTORY</h1>
        <table>
            <table class="transferhistory" border="3" align="center" cellspacing="7">
                <tr>
                    <th class="table-h">USER ID</th>
                    <th class="table-h">NAME</th>
                    <th class="table-h">AMOUNT</th>
                    <th class="table-h">DESCRIPTION</th>
                    <th class="table-h">TRANSFERED TO</th>
                </tr>
                <?php
                        error_reporting(0);
                        include("test.php");
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
                                <td>".$result['amount']."</td>
                                <td>".$result['descript']."</td>
                                <td>".$result['transfer']."</td>
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
    </div>
    <div class="btn"><a id ="goback" href="bank.php"><center><button>&#8592 GO TO HOME</button></a></div></center>
    <footer class="copyright">
            <p>
       
            </p> 
            <p>
                GRIP The Sparks Foundation.
            </p>
    </footer> 
</body>
</html>