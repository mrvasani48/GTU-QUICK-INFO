function useridvalidate(){
    var userid= document.getElementById("user_id").value;
  
    if(isNaN(userid))
     { 
      alert("please enter number not a string");
      document.getElementById("user_id").focus();
      document.getElementById("user_id").select();
      return false;
     }
    else if(userid.length!==12)
     {
         alert("check your enrollment no\n please enter enroll. valid number");
         document.getElementById("user_id").focus();
         document.getElementById("user_id").select();
         return false;
     }
    else  if( userid == "")
     { 
         alert("call");
         alert("userid can't be blank");
         document.getElementById("user_id").focus();
         document.getElementById("user_id").select();
         return false;
     }
     else 
     {
     }
}

function oneemailvalidate(){
    var femail= document.getElementById("femail").value;
    var x=femail;  
    var atposition=x.indexOf("@");  
    var dotposition=x.lastIndexOf(".");
     if( femail == "")
     { 
         alert("please enter email adress");
         document.getElementById("femail").focus();
         document.getElementById("femail").select();
         return false;
     }
  
    else if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length){  
            alert("Please enter a valid e-mail address");  
                return false;  
     } 
     else{};
     
}
function passvalidate(){
    var pass1= document.getElementById("password1").value;
    /*var arr=[];
    arr[0]=pass1.search("@");
    arr[1]=pass1.search("#");
     arr[2]=pass1.search("$"); 
     arr[3]=pass1.search("%");
 
   if(arr[0]==-1 && arr[1]==-1 && arr[2]==-1 && arr[3]==-1)
   {
       alert("please use one speciale char @ ,# ,$ ,%");
       document.getElementById("password1").focus();
       document.getElementById("password1").select();
       return false;
   }*/
   if(pass1 == "")
   {
       alert("password can't be blank");
       document.getElementById("password").focus();
       document.getElementById("password").select();
       return false;
   }

   else if(pass1.length<6 )
   {
    alert("please at least 6 digit password");
    document.getElementById("password1").focus();
    document.getElementById("password1").select();
    return false;
   }
  else if(pass1.length>15)
   {
    alert("Password length must not exceed 15 characters");
    document.getElementById("password1").focus();
    document.getElementById("password1").select();
    return false;

   }
 else{ 
     return true;
 };
};


function confirmpassvalidate(){
    var pass1= document.getElementById("password1").value;
    var pass2= document.getElementById("password2").value;
    if( pass2 == "")
     { 
         alert("please enter conform password ");
         document.getElementById("password2").focus();
         document.getElementById("password2").select();
         return false;
     }
  
   else if(pass1 !== pass2){
        alert("passwprd is note same");  
        return false;
     }
     else{
         return true;
     }
}

function fullnamevalidate(){
    var fullname= document.getElementById("fulname").value;
 
   if(fullname == "")
   {
       alert("full name can't be blank");
       document.getElementById("fulname").focus();
       document.getElementById("fulname").select();
       return false;
   }

   else if(fullname.length<6 )
   {
    alert("please at least 6 digit full name");
    document.getElementById("fulname").focus();
    document.getElementById("fulname").select();
    return false;
   }
  else if(fullname.isString())
  {
      return true;
  }

 else{ 
     return true;
 };
};