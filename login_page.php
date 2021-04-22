
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>sign-in</title>
    <link rel="stylesheet" href="login_page.css" />
   <script type="text/javascript" src="login_validation.js"></script>
  </head>
  <body>
        <div id="sign-in">
          <h1 id="head">sign-in</h1>
          <form  action="login_page_validation.php" method="GET">
               <label for="user">user id : </label>
               
               <input onchange="validateuserid()"type="text" name="user_id" id="user_id"  placeholder="Enrollment no"><br>  <br>

               <label for="password">password : </label>

                <input type="password" name="password"  placeholder="password" onchange="validatepassword()" id="password"><br>
                <span><?php if(isset($_GET['error'])){echo $_GET['error'];}?></span>
              <p id="first"><a href="#" class="first1" > forgot username / password ?</a> </p>

              <div align="center"> <input  type="submit"  value="sign in" ></div> 

              <div id="addac"> don't have an account ?</div>
            </form> 
              <div id="second" >  <a class="first1"   href="sign_uppage.php"  >sign up now</a> </div>
         
        </div>
      
  </body>
</html>
