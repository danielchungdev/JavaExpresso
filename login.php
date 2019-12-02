<?php
    session_start();

    $path = './';
    require $path.'../../dbConnect.inc';
    

    if(!empty($_POST['email']) && !empty($_POST['psw']) ){
        $email=$_POST['email'];
         
        $pass=$_POST['psw'];
        
        $stmt=$mysqli->prepare("SELECT password FROM accountDb WHERE userEmail=?");
        $stmt->bind_param("s",$email);
        $stmt->execute();
        $stmt->bind_result($res);
		$stmt->fetch();
        if (password_verify($_POST['psw'], $res)) {
            $_SESSION['login']=true;
            $_SESSION['email']=$email;
                session_name($_POST['email'].'s');
			header('Location: survey.php');
        }
        else{
            
                
        }
       $stmt->close();
    }

    session_destroy(); 
         
     
?>
<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Login</title>
        <link rel="stylesheet" href="asset/css/styles.css">
        <script src="assets/js/formVal.js"></script>
    </head>
    <body>
         <div class="container">
            <h2>Login</h2>
            <p>Please fill in this form to login</p>

            <form name="logForm" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" onsubmit="return logVal()" >
                <label for="email"><b>Email</b></label>
                <input type="text" placeholder="Enter Email" name="email" />
                <br>
                <br>
                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw"/>
                <br>
                <br>
                <input type="submit" name="Submit"/>
            </form>
        </div>
        
    </body>
</html>