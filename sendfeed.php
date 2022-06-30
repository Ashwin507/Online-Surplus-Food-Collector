
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="bootstrap.css">
        <title>FEEDBACK</title>
         <?php
              
         SESSION_start();
        
          $UserId=$_SESSION["gid"];                       

                    if($_SERVER['REQUEST_METHOD']=="POST")
                      {
                       
                         $feed=$_POST['feed'];  
                         
                         $Servername="localhost";
                         $DbUsername="root";
                         $DbPassword="";
                         $DbNAME="surplusfood";
                      $con=new mysqli($Servername,$DbUsername,$DbPassword,$DbNAME);
                         
         $qry="INSERT INTO `feedback`( `guest-id`, `feedback`) VALUES ('$UserId','$feed')";
                         
         $res=  $con->query($qry);
                       
         if($res===TRUE){
            echo "<script>alert('Feedback uploaded successfully')</script>";
            }
//       else {
//             echo $con->error;
//            }
                       
                       
        }
                      
                         
        ?> 
         <style>
.container {
  position: absolute;
  right: 0;
  border-radius:30px; 
  top:100px;
  left:400px;
  height:450px;
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
  width: 205%;
  opacity: 0.9;
}

</style>


    </head>
     <body background="tester.jpg">
         <div class="container">
            <div class="row">
                <div class="col col-sm-6">
            <form method="post">
                
                    <h2>Feedback</h2><br>
<!--                    <input type="text" class="form-control"  placeholder="To" name="to" style="width:550px;">-->
                   
                    <?php
                         $Servername="localhost";
                         $DbUsername="root"; 
                        $DbPassword="";
                         $DbNAME="surplusfood";
                      
                      
                         $con=new mysqli($Servername,$DbUsername,$DbPassword,$DbNAME);
                         
                         
                       

?><br>
<textarea rows=4 cols=5 id="msg" class="form-control" name="feed" style="width:550px;" placeholder="Type Your Feedback"></textarea><br>
                    <input type="submit" value="submit" class="btn btn-outline-primary">       
                                 
                
            </form>
                </div>

        
    </body>
    
</html>



