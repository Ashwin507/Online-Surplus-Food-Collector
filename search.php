
<html>
    <head>
        <link rel="stylesheet" href="bootstrap.css">
        <title>USER</title>
        <?php
    include './adminnav.php';
    ?>
                
            <body>
                      <div class="container">
        <div class="row">       
            <div class="col col-sm-6">
                <h1><a href="#" class="text-success">SEARCH</a></h1><br><br>
<form method="POST">
    <div class="form-group">
<label for="uname">ENTER THE NAME OF USER : </label>
 <input type="text" id="uname" name="phone" class="form-control" placeholder="ENTER USERNAME"><br><br>
 <input type="submit" value="SEARCH" name="but" class="btn btn-success"><br>
 </div>
</form>  
 </div>
                </div>    
            </div>
     
        
    </body>
    
</html>  
        <?php
   
    
                    if(isset($_POST["but"]))
                      {
                         $vr1=$_POST['phone'];
                      
                         
                         $Servername="localhost";
                         $DbUsername="root";
                         $DbPassword="";
                         $DbNAME="surplusfood";
                      
                      
                         $con=new mysqli($Servername,$DbUsername,$DbPassword,$DbNAME);
                         
                         $qry="SELECT `USER_ID`, `USERNAME`, `PASSWORD`, `PHONE_NO`, `AADHAAR_NO`, `EMAIL_ID`, `ADDRESS`, `GENDER` FROM `user` WHERE `USERNAME`='$vr1' ";
                                           $res=$con->query($qry);
                         
                         
                         if($res->num_rows>0)
                         {
                                   echo "<table class='table'>";
                             while($row=$res->fetch_assoc())
                             {
                                 $USERNAME=$row["USERNAME"];
                                  $AADHAAR_NO=$row["AADHAAR_NO"];
                                   $EMAIL_ID=$row["EMAIL_ID"];
                                    $ADDRESS=$row["ADDRESS"];
                                     $GENDER=$row["GENDER"];
                                       $PHONE=$row["PHONE_NO"];
                                    
                              
                                    echo "<tr> <td>NAME </td> <td>$USERNAME </td></tr><tr><td>AADHAAR_NO</td><td>$AADHAAR_NO</td></tr><tr><td>EMAIL_ID</td><td>$EMAIL_ID</td></tr><tr> <td>PHONE NUMBER </td> <td>$PHONE </td></tr><tr><td>GENDER</td><td>$GENDER</td></tr>";
                                
                                 
                                 
                             }

                             echo "</table>";                             
                         }
                         else{
                             echo "<script> alert('Invalid Credentials') </script> ";
                         }
                         
                         
                         
                      }
                         
                         
                      
    ?>