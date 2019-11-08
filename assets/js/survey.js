//this is the method to update the comment section
function post(){
        
      var sName = document.forms["commentForm"]["Name"].value; 
      var sCom = 
          document.getElementsByName("Comment")[0].value; 



    console.log(document.getElementById("commenTa"));
  

        if(sName==""){

        sName="Anonymous"

       
        
    }   
    if(sCom==""){
           console.log("hi");
       }
    else{
           var P =document.createElement("p");
           P.innerHTML="<p style='color:#F5EDDA; font-family:Verdana; position:relative; left:50px; font-size:16px;'>From: "+sName+"\n"+sCom+"</p>";
//           document.body.append(P);
           document.getElementById("content").appendChild(P);
           
       }
     
}
//this is a demo and will bbe deleted when we put stuff into the database
function dem(){
    
    sTest=["john","jerry","Anonymous"];
    sComt=["I Loved It","Boring","hgfjhfyhvh"]
    for(i=0;i<sTest.length;i++){
    var P =document.createElement("p");
    P.innerHTML="<p style='color:#F5EDDA; font-family:Verdana; position:relative; left:50px; font-size:16px;'>From: "+sTest[i]+"\n"+sComt[i]+"</p>";

    document.getElementById("content").appendChild(P);
    }
}