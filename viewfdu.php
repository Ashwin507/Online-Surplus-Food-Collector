<?php
session_start();
include './usernav.php';
$Servername="localhost";
$DbUsername="root";
$DbPassword="";
$DbNAME="surplusfood";

// Create connection
 $conn=new mysqli($Servername,$DbUsername,$DbPassword,$DbNAME);
 
 
 // Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
 $id=$_SESSION["id"];
   $sql = "SELECT `FOOD_DETAILS`, `type`, `qty`, `ADDED_DATE`, `EXPIRY_DATE`, `STATUS` FROM `food_details` WHERE USERID= $id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   echo "<br><table class='table table-hover'><tr><th>FOOD DETAILS</th><th>TYPE</th><th>QUANTITY</th><th>ADDED DATE</th><th>EXPIRY DATE</th><th>STATUS</th></tr>";
// output data of each row
    while($row = $result->fetch_assoc())
            {
       $STATUS=$row["STATUS"];
       if($STATUS==0)
       {
           $st="Processing";
       }
       else  if($STATUS==1)
       {
           $st="Approved";
       }
       else{
       
           $st="Rejected";
       }
       
       
       
        echo "<tr><td>".$row["FOOD_DETAILS"]."</td><td>".$row["type"]."</td><td>".$row["qty"]."</td><td>".$row["ADDED_DATE"]."</td><td>".$row["EXPIRY_DATE"]."</td><td>".$st."</td></tr>";
    }
    echo "</table>";
} else {
    echo "No Food Details";
}
$conn->close();
?>
 
 
 
 
 
 
 
 
 
 
 
 
 
 
