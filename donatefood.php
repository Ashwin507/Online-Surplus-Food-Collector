
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="bootstrap.css">
        <title>DONATE FOOD</title><br>
        
<?php
session_start();
    include './usernav.php';
                if($_SERVER['REQUEST_METHOD']=="POST")
                 {
                     
              
                     $food=$_POST['food'];
                     $type=$_POST['type'];
                     $qnty=$_POST['qnty'];
                     $date=$_POST['dates'];
                     $expiry=$_POST['expiry'];
                    
                       
                         $id=$_SESSION["id"];
                      
                     
                     $Servername="localhost";
                         $DbUsername="root";
                         $DbPassword="";
                         $DbNAME="surplusfood";
                         
                      $con=new mysqli($Servername,$DbUsername,$DbPassword,$DbNAME);
                         
                         
                         $qry="INSERT INTO `food_details`(`USERID`, `FOOD_DETAILS`, `type`, `qty`, `ADDED_DATE`,`EXPIRY_DATE`) VALUES ('$id','$food','$type','$qnty','$date','$expiry')";
                       $res=  $con->query($qry);
                       if($res===TRUE){
                           echo "<script>alert('Food Donated successfully')</script>";
                             echo "<script> window.location.href='viewfdu.php' </script>"; 
                       }
                
                   else {
    			 echo $con->error;
 			}
                 }
    ?>             
                         
      

       <body>

        <h1><a href="#" class="text-success">DONATE FOOD</a></h1><br><br>
        <div class="container">
            <div class="col col-sm-6">        <div class="row">       
                      
<form method="POST">
    <div class="form-group"> 
<!--        <label for="uname">USER ID</label>
        <input type="number" id="uname" name="user" class="form-control" placeholder="ENTER THE ID"><br><br>-->
<label for="uname">FOOD DETAIL</label>
<input type="text" id="uname" name="food" class="form-control" placeholder="ENTER THE FOOD DETAILS"><br><br>
<label for="pass">ADDED DATE</label>
<input type="date" id="pass"  name="dates" class="form-control" <?php echo "min=".'"'.date('Y-m-d').'"'; ?> ><br><br> 
<label for="pass">EXPIRY DATE</label>
<input type="date" id="pass"  name="expiry" class="form-control" <?php echo "min=".'"'.date('Y-m-d').'"'; ?>><br><br> 
<label for="pass">QUANTITY</label>
<input type="number" id="pass"  name="qnty" class="form-control" placeholder="ENTER THE QUANTITY"><br><br> 
 <label for="name">TYPE</label><br> 
 VEG&nbsp;&nbsp;&nbsp;<input type="radio"  name="type" value="VEG">&nbsp&nbsp&nbsp&nbsp&nbsp;
 NON-VEG&nbsp;<input type="radio"  name="type" value="NON-VEG" ><br><br>
 <input type="submit" value="DONATE" class="btn btn-success"><br>
    </div>
</form>  
 </div>
                </div>    
            </div>
     
        
    </body>
       </head>
 
</html>
