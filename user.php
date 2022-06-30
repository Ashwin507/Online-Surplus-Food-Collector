<html>
    <head>
        <link rel="stylesheet" href="bootstrap.css">
        <title>SUPPLIER</title>
        

        <?php
            session_start();  
                    if($_SERVER['REQUEST_METHOD']=="POST")
                      {
                         $vr1=$_POST['USERNAME'];
                         $vr2=$_POST['PASSWORD'];
                         
                         $Servername="localhost";
                         $DbUsername="root";
                         $DbPassword="";
                         $DbNAME="surplusfood";
                      
                      
                         $con=new mysqli($Servername,$DbUsername,$DbPassword,$DbNAME);
                         
                         
                       $qry="SELECT `USER_ID`, `USERNAME`, `PASSWORD`, `PHONE_NO`, `AADHAAR_NO`, `EMAIL_ID`, `ADDRESS`, `place`, `GENDER` FROM `user` WHERE `USERNAME`='$vr1' AND `PASSWORD`='$vr2'";
                         $res=$con->query($qry);
           
                    
                         
                         
                         if($res->num_rows>0)
                         {
                             
                             while($row=$res->fetch_assoc())
                             {
                                 $Id=$row["USER_ID"];
                                 $_SESSION["id"]=$Id;
                                 
                                 echo "<script> window.location.href='usernav.php' </script> ";
                                 
                             }
                             
                         }
                         else{
                             echo "<script> alert('Invalid Credentials') </script> ";
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
  height:700px;
  margin: 20px;
  max-width: 600px;
  padding: 16px;
background-image: linear-gradient(to top , black , white)
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
                <h1 align="center"><a href="#" class="text-dark">SUPPLIER</a></h1><br><br>
                <form method="POST">
    <div class="form-group">
<label for="uname">USERNAME</label>
<input type="text" id="uname" name="USERNAME" class="form-control" placeholder=" ENTER NAME" required><br><br>
<label for="pass">PASSWORD</label>
<input type="password" id="pass"  name="PASSWORD" class="form-control"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"  title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder=" ENTER PASSWORD" required><br><br>

<input type="submit" value="LOGIN" class="btn btn-primary"><br>
<label> NO ACCOUNT  YET !    CREATE ONE </label><br>
<a href="userreg.php" class="btn btn-warning" class="text-danger" role="button">CREATE AN ACCOUNT</a><br><br>
<a href="admin.php" class="btn btn-danger" class="text-danger" role="button">ADMIN LOGIN</a>
 </div>
</form>
 </div>
                </div>    
            </div>
     
        
    </body>
    
</html>  
      


