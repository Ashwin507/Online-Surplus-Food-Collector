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
$sql = "

SELECT g.guest_name,c.feedback FROM `feedback` c JOIN guest g on g.id=c.`guest-id` ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<br><table class='table table-hover'><tr><th>Name</th><th>feedback</th></tr>";
// output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["guest_name"]." </td><td>".$row["feedback"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>
 
 
 
 
 
 
 
 
 
 
 
 
 
 
