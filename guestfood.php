<?php
include './guestnav.php';
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

$sql = "SELECT g.guest_name, fd.FOOD_DETAILS, c.`quantity`, c.`date` FROM `collector` c JOIN food_details fd ON fd.ID=c.`foodid` JOIN guest g on g.id=c.`guestId`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<br><table class='table table-hover'><tr><th>GUEST NAME</th><th>FOOD DETAILS</th><th>QUANTITY</th><th>DATE</th></tr>";
// output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["guest_name"]."</td><td>".$row["FOOD_DETAILS"]." </td><td>".$row["quantity"]."</td><td>".$row["date"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>
 
 
 
 
 
 
 
 
 
 
 
 
 
 
