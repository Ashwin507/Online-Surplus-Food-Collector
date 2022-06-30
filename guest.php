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

$sql = "SELECT `id`, `guest_name`, `EMAIL`, `PHONE`, `password`, `food_req`, `quantity` FROM `guest`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<br><table class='table table-hover'><tr><th>GUEST NAME</th><th>PHONE</th><th>FOOD REQUIRED</th><th>QUANTITY</th></tr>";
// output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["guest_name"]." </td><td>".$row["PHONE"]."</td><td>".$row["food_req"]."</td><td>".$row["quantity"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>