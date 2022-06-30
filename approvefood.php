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

$sql = "SELECT `ID`, `USERID`, `FOOD_DETAILS`, `type`, `qty`, `ADDED_DATE`, `EXPIRY_DATE`, `STATUS` FROM `food_details` WHERE `STATUS`=0";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<br><form method='POST'> <table class='table table-hover'><tr><th>FOOD DETAILS</th><th>TYPE</th><th>QUANTITY</th><th>ADDED DATE</th><th>EXPIRY DATE</th><th>STATUS</th></tr>";
// output data of each row
    while($row = $result->fetch_assoc()) {
        
        $id=$row["ID"];
        echo "<tr><td>".$row["FOOD_DETAILS"]."</td><td>".$row["type"]."</td><td>".$row["qty"]."</td><td>".$row["ADDED_DATE"]."</td><td>".$row["EXPIRY_DATE"]."</td><td>".$row["STATUS"]."</td>"
                . ""
                . "<td> <Button name='aprbut' value='$id' class='btn btn-success'> Approve </Button>  </td> <td> <Button name='regbut' value='$id'  class='btn btn-warning'>Reject </Button>  </td>  </tr>";
    }
    echo "</table> </form> ";
} else {
    echo "0 results";
}
$conn->close();



if(isset($_POST['aprbut']))
{
    
   $id=$_POST['aprbut'];
   
   
$Servername="localhost";
$DbUsername="root";
$DbPassword="";
$DbNAME="surplusfood";

// Create connection
 $conn=new mysqli($Servername,$DbUsername,$DbPassword,$DbNAME);
 
 $sql = "UPDATE `food_details` SET `STATUS`=1 WHERE `ID`=$id";
$result = $conn->query($sql);
if($result===TRUE)
{
    echo "<script> alert('Succesfully Updated') </script>"; 
     echo "<script> window.location.href='approvefood.php' </script>"; 
    
    
}
 else{
      echo "<script> alert('Error in Updation') </script>"; 
 }
   
    
}
if(isset($_POST['regbut']))
{
    
   $id=$_POST['regbut'];
   
   
$Servername="localhost";
$DbUsername="root";
$DbPassword="";
$DbNAME="surplusfood";

// Create connection
 $conn=new mysqli($Servername,$DbUsername,$DbPassword,$DbNAME);
 
 $sql = "UPDATE `food_details` SET `STATUS`=-1 WHERE `ID`=$id";
$result = $conn->query($sql);
if($result===TRUE)
{
    echo "<script> alert('Succesfully Updated') </script>"; 
     echo "<script> window.location.href='approvefood.php' </script>"; 
    
    
}
 else{
      echo "<script> alert('Error in Updation') </script>"; 
 }
   
    
}

?>



 