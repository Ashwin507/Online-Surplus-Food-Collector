
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="bootstrap.css">
        <title>COLLECTOR</title>
<?php
             
                   if($_SERVER['REQUEST_METHOD']=="POST")
                      {
                         $foodid=$_POST['foodid'];
                         $uname=$_POST['guestId'];
                         
                             $qty=$_POST['qty'];
                         
                         $Servername="localhost";
                         $DbUsername="root"; 
                        $DbPassword="";
                         $DbNAME="surplusfood";
                      
                      
                         $con=new mysqli($Servername,$DbUsername,$DbPassword,$DbNAME);
                         
               
                         $newqry="SELECT `qty` FROM `food_details` WHERE `ID`=$foodid";
                         
                            $res1=$con->query($newqry);
                         
                         
                         if($res1->num_rows>0)
                         {
                             
                             while($row1=$res1->fetch_assoc())
                             {
                                 $dbqty=$row1["qty"];
                                 
                                 
                                 if($dbqty>=$qty)
                                 {
                                    
                                          
                         
                         
                         $qry="INSERT INTO `collector`( `guestId`, `foodid`, `quantity`, `date`) VALUES ($uname,$foodid,$qty,now())";
                         
                         $res=$con->query($qry);
                         
                         
                         if($res===TRUE)
                         {
                 
                              $qry="UPDATE `food_details` SET `qty`=`qty`-$qty WHERE `ID`=$foodid";
                         
                         $res=$con->query($qry);
                             
                             
                             
          echo "<script> alert('Food Transferred Succesfully') </script> ";
            echo "<script> window.location.href='index.html' </script>"; 
                  

   
                             
                         }
                         else{
                             echo "<script> alert('Invalid Credentials') </script> ";
                         } 
                                     
                                     
                                     
                                 }
                                 else{
                                         echo "<script> alert('Required Quantity is NOT Available') </script> ";
      
                                     
                                 }
                                 
                                 
                                 
                                 
                         }
                         
                         
                             }
                         
                         
                         
                                            
                     }
        ?> 
         <style>
.container {
  position: absolute;
  right: 0;
  border-radius:30px; 
  top:100px;
  left:400px;
  height:550px;
  margin: 20px;
  max-width: 600px;
  padding: 16px;
background-image: linear-gradient(to top , lightseagreen , white)
}
input[type=text], input[type=password] {
  width:200%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}
.btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 200%;
  opacity: 0.9;
}

</style>


    </head>
     <body background="tester.jpg">
        <div class="container">
        <div class="row">       
            <div class="col col-sm-6">
                <h1><a href="#" class="text-dark">DONATION</a></h1><br><br>
<form method="POST">
    <div class="form-group" style="width:530px;">
<label for="uname">SELECT FOOD ITEM</label>
  <?php
   $Servername="localhost";
                         $DbUsername="root"; 
                        $DbPassword="";
                         $DbNAME="surplusfood";
                      
                      
                         $con=new mysqli($Servername,$DbUsername,$DbPassword,$DbNAME);
                         
                         
                         $qry="SELECT `ID`,`FOOD_DETAILS` FROM `food_details` WHERE `STATUS`=1 AND `qty`>0";
                         
                            $res=$con->query($qry);
                         
                         
                         if($res->num_rows>0)
                         {
                                      echo "<select name='foodid' class='form-control'>";
                             
                             while($row=$res->fetch_assoc())
                             {
                                 $ID=$row["ID"];
                                 
                                  $FOOD_DETAILS=$row["FOOD_DETAILS"];
                                  
                                  echo "<option value='$ID'> $FOOD_DETAILS </option>";
                                 
                         }
                         
                                  echo "</select>";
                         
                         
                             }

?>
<label for="pass">NAME</label>
<?php
   $Servername="localhost";
                         $DbUsername="root"; 
                        $DbPassword="";
                         $DbNAME="surplusfood";
                      
                      
                         $con=new mysqli($Servername,$DbUsername,$DbPassword,$DbNAME);
                         
                         
                         $qry="SELECT `id`, `guest_name` FROM guest";
                         
                            $res=$con->query($qry);
                         
                         
                         if($res->num_rows>0)
                         {
                                      echo "<select name='guestId' class='form-control'>";
                             
                             while($row=$res->fetch_assoc())
                             {
                                 $ID=$row["id"];
                                 
                                  $FOOD_DETAILS=$row["guest_name"];
                                  
                                  echo "<option value='$ID'> $FOOD_DETAILS </option>";
                                 
                         }
                         
                                  echo "</select>";
                         
                         
                             }

?>


<br><br>
<label for="uname">QUANTITY</label>
<input type="number" id="uname" name="qty" class="form-control" placeholder="ENTER QUANTITY" required><br><br>
<input type="submit" style="width:530px;" value="SUBMIT" name="but"class="btn btn-success"><br><br>

 </div>
</form>  
 </div>
                </div>    
            </div>
     
        
    </body>
    
</html>

