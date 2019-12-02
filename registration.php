<?php
    $path = './';
    require $path.'../../dbConnect.inc';

    if(!empty($_POST['email']) && !empty($_POST['psw']) && !empty($_POST['pswR']) && passCheck() && eCheck()){
                  
        $email=$_POST['email'];
         
        $pass=$_POST['psw'];
      try{
        $pass=password_hash($_POST['psw'], PASSWORD_DEFAULT);
        $stmt=$mysqli->prepare("INSERT INTO accountDb (userEmail, password) VALUES(?,?)");
        $stmt->bind_param("ss",$email, $pass);
		$stmt->execute();
		$stmt->close();
      }catch(Exception $e){
          if($mysqli->errno === 1062) echo 'Duplicate entry';
      }
    }
    function passCheck(){
		if(strcmp($_POST['psw'],$_POST['pswR'])==0){
			return true;
		}else{
			return false;
		}
	}    
    function eCheck(){
        
        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            return false;
        }
         return true;
            
            

    
    }

?>
<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Registration</title>
        <link rel="stylesheet" href="asset/css/styles.css">
        <script src="asset/js/regVal.js"></script>
    </head>
    <body>
        


 <div class="container">
    <h2>Register</h2>
    <p>Please fill in this form to create an account.</p>

    <form name="regForm" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" onsubmit="return formval()" >

        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" />
        <br>
        <br>
        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw"/>
    
        <br>
        <br>
        <label for="psw-repeat"><b>Repeat Password</b></label>
        <input type="password" placeholder="Repeat Password" name="pswR" />
 

        <br>
        <br>
        <input type="submit" value="Submit"/>
        
        <br>
        <br>
        <p>Already have an account? <a style="color:#F5EDDA; " href="#">Sign in</a>.</p>

     </form>
    </div>
     
</body>
        
</html>
