<?php
$servername="localhost";
$u_name="root";
$pass="";
$dbname="tsp_bank";

$conn = mysqli_connect($servername,$u_name,$pass,$dbname);
if($conn){
    //echo "connection successfull";

}
else{
    echo "connection failed!".mysqli_connect_error();
}
?>
