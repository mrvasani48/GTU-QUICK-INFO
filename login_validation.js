  function validateuserid()
  {   
  var userid= document.getElementById("user_id").value;
  
  if(isNaN(userid))
   { 
           alert("please enter number not string");
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
   else if( userid=="")
   {
       alert("userid can't be blank");
       document.getElementById("user_id").focus();
       document.getElementById("user_id").select();
       return false;
   }
 
}

function validatepassword()
{
    var password = document.getElementById("password").value;
  if(password == "")
   {
       alert("password can't be blank");
       document.getElementById("password").focus();
       document.getElementById("password").select();
       return false;
   }
  else if(password.length<6){  
    alert("Password must be at least 6 characters long.");  
    return false;  
    }  
    else if(password.length>15){  
        alert("Password length must not exceed 15 characters");  
        return false;  
        }  
     
}
