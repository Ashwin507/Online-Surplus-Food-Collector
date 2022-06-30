<?php
    include './adminnav.php';
    ?>
<html>
    <head>
        <link rel="stylesheet" href="bootstrap.css">
        <title></title>
            <body>
                      <div class="container">
        <div class="row">       
            <div class="col col-sm-6">
                <h1><a href="#" class="text-success"> SEARCH</a></h1><br><br>
<form method="POST">
    <div class="form-group">
        <label>ENTER FOOD TYPE</label>
        
        <select name="TYPE" class="form-control">
            <option value="veg">VEG</option>
            <option value="nonveg">NON VEG</option>
        </select>
      
       
       
       
    <br><br>
<input type="submit" value="SEARCH" class="btn btn-success"><br>
 </div>
</form>  
 </div>
                </div>    
                      </div>       
     
        
    </body>
    
</html>  
<?php
   
    
                    if($_SERVER['REQUEST_METHOD']=="POST")
                      {                     
    $vr1=$_POST['TYPE']; 
    
    
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

$sql = " SELECT `ID`, `USERID`, `FOOD_DETAILS`, `type`, `qty`, `ADDED_DATE`, `EXPIRY_DATE`, `STATUS` FROM `food_details` WHERE `type`='$vr1'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<br><table class='table table-hover'><tr><th>FOOD DETAILS</th><th>QUANTITY</th></tr>";
// output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["FOOD_DETAILS"]."</td><td>".$row["qty"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

                      
$conn->close();
                      }
?>