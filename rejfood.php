<?php
include './adminnav.php';
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

$sql = "SELECT `ID`, `USERID`, `FOOD_DETAILS`, `type`, `qty`, `ADDED_DATE`, `EXPIRY_DATE`, `STATUS` FROM `food_details`WHERE `STATUS`=-1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<br><table class='table table-hover'><tr><th>FOOD DETAILS</th><th>TYPE</th><th>QUANTITY</th></tr>";
// output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["FOOD_DETAILS"]."</td><td>".$row["type"]."</td><td>".$row["qty"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>
 
 
 
 
 
 
 
 
 
 
 
 
 
 
