
<?php
    $path ='./';
    require $path.'./../../../../dbConnect.inc';
    // echo 'asdfjajsdfkjasdfh';
    // echo $_GET['lesson'];
    // echo $_GET['email'];
    // echo $_GET['comments'];
    // echo $_GET['experience'];
    // echo $_GET['satisfaction'];

 

    if(!empty($_POST['lesson']) && !empty($_POST['email']) && !empty($_POST['comments']) && !empty($_POST['experience']) && !empty($_POST['satisfaction'])){
           foreach($_POST['Lesson'] as $lessonList){
        $lesson .= $lessonList;
    }
        //$lesson = $_POST['lesson'];
        $email = $_POST['email'];
        $comments = $_POST['comments'];
        $experience = $_POST['experience'];
        $satisfaction = $_POST['satisfaction'];

        $header = "From: JavaExpresso@edu.com";
        
        $email_subject = "Java Express-O Survey Feedback";
        $email_body = "Email: $email\n";
        $email_body .= "Lessons: $lesson\n";
        $email_body .= "Experience: $experience\n";
        $email_body .= "Satisfaction: $satisfaction\n";
        $email_body .= "Comments: $comments\n";
        
        mail($email, $email_subject, $email_body, $header);
        $res = $mysqli-> query('select email from gEmails');

        if($res){
            //echo "working";
            while($rowholder = mysqli_fetch_array($res, MYSQLI_ASSOC)){
                $records[] = $rowholder;
            }
            if(mysqli_num_rows($res) > 0){
                foreach(array($records) as $this_row){
                    for($i = 0; $i <= 5;$i++){
                        mail($this_row[$i]['email'], $email_subject,$email_body);
                    }
                }
            }
        }
        else {
            //echo "not working";
        }
        
    }

?>

<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<title>Survey</title>
<link rel="stylesheet" href="styles.css">
 </head>
    
<script>
    function validate(){
        if(boxesChecked() == false || textFilled() == false){
            return false;
        }
        else{
            return true;
        }
    }
    
    function boxesChecked(){
        var numBox = document.getElementsByName("lesson").length;
        if(numBox <= 0 ){
            return false;
        }
        else{
            return true;
        }
    }
    
    function textFilled(){
        var nameField = document.getElementsByName("email");
        var commentField = document.getElementsByName("comments");
        var experienceField = document.getElementsByName("experience");
        var ratingField = document.getElementsByName("satisfaction");
        if(nameField == null || commentField == null || experienceField == null || ratingField == null){
           return false;
           }
        else{
           return true;
           }
    }
</script>
   
 <body>
     <h2>Survey</h2>
     <hr>
  <form name="survey" onsubmit="return validate()" action = "<?php $_SERVER['PHP_SELF']; ?>" method="POST">
       Enter your email:  <input type="text" id= "name" name="email">
        <p id="nameVal"></p>    
        What is your level of experience?:
  <input type="text" name="experience" value="">
  <br><br>

       
      <fieldset>
          
		<legend>
            What Lessons Did You Take?</legend>
		 <input type="checkbox" name="lesson[]" value="Loops "> Loops
        <input type="checkbox" name="lesson[]" value="Objects "> Objects
        <input type="checkbox" name="lesson[]" value="Prints "> Print Statements
        <input type="checkbox" name="lesson[]" value="Methods "> Methods
        <input type="checkbox" name="lesson[]" value="Variables "> Variables
        
          
	</fieldset>
        <br>
        Anything else you want to tell us?
          <br>
        <input type = "text" name = "comments" value = "">
      <br>
    Please rate your satisfaction from 1-10 :
      <br>
      <input type = "text" name = "satisfaction" value = "">
      <br>
    <input type="submit" name="submit"></input>
</form>
 
 </body>
  
</html>