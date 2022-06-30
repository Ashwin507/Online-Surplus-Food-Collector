<html>
    <head>
        <link rel="stylesheet" href="bootstrap.css">
        <title>RECEIVER</title>
              <?php
        
         
                if($_SERVER['REQUEST_METHOD']=="POST")
                 {
                     
                   
                     $gname=$_POST['guest_name'];
                     $email=$_POST['EMAIL'];
                     $pl=$_POST['pl'];
                      $phone=$_POST['PHONE'];
                        $password=$_POST['password'];
                         $food=$_POST['food_req'];
                        $qnty=$_POST['quantity'];
                       
                        
                         
                         
                         
                        
                      
                     
                     $Servername="localhost";
                         $DbUsername="root";
                         $DbPassword="";
                         $DbNAME="surplusfood";
                         
                      $con=new mysqli($Servername,$DbUsername,$DbPassword,$DbNAME);
                         
                         
                       
                        $qry="INSERT INTO `guest`(`guest_name`,`EMAIL`,`place`,`PHONE`,`password`, `food_req`, `quantity`) VALUES ('$gname','$email','$pl','$phone','$password','$food','$qnty')";
                         $res=$con->query($qry);
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
  height:1200px;
  margin: 20px;
  max-width: 600px;
  padding: 16px;
background-image: linear-gradient(to top ,black, white)
}
input[type=text], input[type=password],input[type=number]{
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
                <h1 align="center"><a href="#"  style="font-family:Showcard Gothic ;" class="text-dark">RECEIVER</a></h1><br><br>
<form method="post">
    <div class="form-group">
<label for="name">NAME</label>
<input type="text" name="guest_name" class="form-control" placeholder="ENTER NAME" required><br><br>
<label for="phone">PHONE NUMBER</label>
<input type="number" class="form-control" name="PHONE" placeholder="ENTER  PHONE NUMBER" required><br><br>


<label for="name">EMAIL ID</label>
<div  style="width:530px;" class="input-group mb-3">
    <div class="input-group-prepend">
        <span class="input-group-text" id="basic">For eg: abc@gmail.com</span> 
                </div>
    <div class="input-group mb-3">
        <input type="email" class="form-control" id="name" name="EMAIL" placeholder=" ENTER EMAIL ID" aria-describedby="basic" required><br><br> 
    </div></div>
<label for="State">State</label>
<div style="width:530px;" class="input-group mb-3">
         
          <div class="input-group mb-3">
              <select  style="width:530px;" id="State" name="pl" class="form-control">
              <option value="-select-">-select-</option>
              <option value="Kayamkulam">Kayamkulam</option>
               <option value="Thiruvalla">Thiruvalla</option>
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

<label for="pass">CREATE PASSWORD</label>
<input type="password" id="pass"  name="password" class="form-control"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"  title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"  placeholder=" ENTER PASSWORD" required><br><br>
<label for="phone">FOOD REQUIRED</label>
<input type="text" class="form-control" name="food_req" placeholder="ENTER  FOOD DETAILS" required><br><br>
<label for="phone">QUANTITY</label>
<input type="number" class="form-control" name="quantity" placeholder="ENTER THE QUANTITY" required><br><br>
<input type="submit" value="SUBMIT" class="btn btn-danger">
    </div>
</form>  
 </div>
 </div>
 </div>
     </body>
</html>
