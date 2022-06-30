
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="bootstrap.css">
        <title>GUEST LOGIN</title>
         <?php
              session_start();
                    if($_SERVER['REQUEST_METHOD']=="POST")
                      {
                         $vr1=$_POST['guest_name'];
                         $vr2=$_POST['password'];
                         
                         $Servername="localhost";
                         $DbUsername="root";
                         $DbPassword="";
                         $DbNAME="surplusfood";
                      
                      
                         $con=new mysqli($Servername,$DbUsername,$DbPassword,$DbNAME);
                         
                         
                         $qry="SELECT `id`, `guest_name`, `EMAIL`, `PHONE`, `password`, `food_req`, `quantity` FROM `guest` WHERE `guest_name`='$vr1' AND `password`='$vr2'";
                         
                         $res=$con->query($qry);
                         
                         
                         if($res->num_rows>0)
                         {
                             
                             while($row=$res->fetch_assoc())
                             {
                              echo "ID".   $ID=$row["id"];
                                 $_SESSION["gid"]=$ID;
                                 
                                echo "<script> window.location.href='guestnav.php' </script> ";
                                 
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
                <h1 align="center"><a href="#" class="text-dark">GUEST</a></h1><br><br>
<form method="POST">
    <div class="form-group">
<label for="uname"> GUEST NAME</label>
<input type="text" id="uname" name="guest_name" class="form-control" placeholder="ENTER GUEST NAME" required><br><br>
<label for="pass">PASSWORD</label>
<input type="password" id="pass"  name="password" class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"  title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"  placeholder=" ENTER PASSWORD" required><br><br>

<input type="submit" value="LOGIN" class="btn btn-success"><br><br>
<label> NO ACCOUNT  YET !    CREATE ONE </label><br>
<a href="guestd.php" class="btn btn-danger" class="text-danger" role="button">REGISTER</a>
 </div>
</form>  
 </div>
                </div>    
            </div>
     
        
    </body>
    
</html>





