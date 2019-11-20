//this is the method to update the comment section
function post(){
        
      //var sName = document.forms["commentForm"]["Name"].value; 
      //var sName = document.forms["commentForm"]["commentTa"].value; 
      var sCom =  document.getElementsById("commentTa"); 



    console.log(document.getElementById("commenTa"));
  
//    if(sName==""){
//        document.getElementById("nameIn").val("Anonymous");
//        
//    }

    if(sCom.length==0){
        document.getElementById("commentTa").style.border = "thick solid #ff0000";
        
        console.log("is empty");
        return false;
       }
    else{
        console.log("isn't empty");
        return false;
           
       }
     
}
//this is a demo and will bbe deleted when we put stuff into the database
