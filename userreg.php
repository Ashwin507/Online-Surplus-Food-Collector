<html>
    <head>
        <link rel="stylesheet" href="bootstrap.css">
        <title>SUPPLIER</title>
              <?php
        
         
                if($_SERVER['REQUEST_METHOD']=="POST")
                 {
                     $mr1=$_POST['USERNAME'];
                     $mr7=$_POST['PASSWORD'];
                     $mr2=$_POST['PHONE_NO'];
                       $mr6=$_POST['AADHAAR_NO'];    
                       $mr4=$_POST['EMAIL_ID'];
                        $mr5=$_POST['ADDRESS'];
                        $mr8=$_POST['place'];
                        $mr3=$_POST['gender'];
                     
                     $Servername="localhost";
                         $DbUsername="root";
                         $DbPassword="";
                         $DbNAME="surplusfood";
                         
                      $con=new mysqli($Servername,$DbUsername,$DbPassword,$DbNAME);
                         
                         
                         $qry="INSERT INTO `user`(`USERNAME`, `PASSWORD`, `PHONE_NO`, `AADHAAR_NO`, `EMAIL_ID`, `ADDRESS`, `place`, `GENDER`) VALUES ('$mr1','$mr7','$mr2','$mr6','$mr4','$mr5','$mr8','$mr3')";
                       $res=  $con->query($qry);
                       if($res===TRUE){
                           echo "<script>alert(' Registered successfully')</script>";
                             echo "<script> window.location.href='index.html' </script>"; 
                       }
                
                   else {
    			 echo $con->error;
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
  height:1250px;
  margin: 20px;
  max-width: 600px;
  padding: 16px;
background-image: linear-gradient(to top , graytext , white)
}
input[type=text], input[type=password] {
  width:200%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}
input[type=number], input[type=password],input[type=email] {
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
                <h1 align="center"><a href="#" class="text-dark" style="font-family:Showcard Gothic ;">SUPPLIER</a></h1><br><br>
<form method="post">
    <div class="form-group">
<label for="name">NAME</label>
<input type="text" name="USERNAME" class="form-control" placeholder="ENTER NAME" required><br><br>
<label for="phone">PHONE NUMBER</label>
<input type="number" class="form-control" name="PHONE_NO" placeholder="ENTER  PHONE NUMBER" required><br><br>
<label for="name">GENDER</label><br> 
MALE<input type="radio"  name="gender" value="male" required>&nbsp&nbsp&nbsp&nbsp&nbsp;
FEMALE<input type="radio"  name="gender" value="female" required><br><br>

<label for="name">EMAIL ID</label>
<div style="width:530px;" class="input-group mb-3">
    <div  class="input-group-prepend">
        <span class="input-group-text" id="basic">For eg: abc@gmail.com</span> 
                </div>
    <div class="input-group mb-3">
        <input type="email" class="form-control" id="name" name="EMAIL_ID"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"  placeholder=" ENTER EMAIL ID" aria-describedby="basic" required><br><br> 
    </div></div>



<label for="name">ADDRESS</label>
<input type="text" class="form-control" name="ADDRESS" placeholder=" ENTER ADDRESS" required><br><br>
 <label for="name">Place</label>
<div style="width:530px;" class="input-group mb-3">
         
          <div class="input-group mb-3">
              <select style="width:530px;"  name="place" class="form-control">
              <option value="-select-">-select-</option>
              <option value="Kayamkulam">Kayamkulam</option>
              <option value="Mavelikara">Mavelikara</option>
              <option value="Chengannur">Chengannur</option>
              <option value="Chertala">Chertala</option>
              <option value="Haripad">Haripad</option>
              <option value="Karuvata">Karuvata</option>
              <option value="Kalavoor">Kalavoor</option>
              <option value="Nooranad">Nooranad</option>
              <option value="Puthupally">Puthupally</option>
              
              
            </select>
          </div>
        </div>




<label for="phone">AADHAAR NUMBER</label>
<input type="number" class="form-control" name="AADHAAR_NO"placeholder="ENTER  AADHAAR NUMBER" required><br><br>
<label for="pass">CREATE PASSWORD</label>
<input type="password" id="pass"  name="PASSWORD" class="form-control"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"  title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"  placeholder=" ENTER PASSWORD" required><br><br>
<input type="submit"  href="user.php" class="btn btn-info"  value="REGISTER" class="text-danger"><b></b>
    </div>
</form>  
 </div>
 </div>
 </div>
    </head>
</html>
