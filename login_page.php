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
  <div id="a">
    <div id="sign-in">
      <div id="head">
        <h2 align="center">GTU QUICK INFO</h2>
      </div>

      <dic class="container">
        <form class="form1" onsubmit="return validatepassword(),validateuserid()" action="login_page_validation.php">
          <div class="i"><label for="user">user id : </label>&nbsp;

            <input onchange="validateuserid()" type="text" name="user_id" id="user_id" placeholder="Enrollment no">
          </div><br>
          <div class="i">
            <label for="password">password : </label>&nbsp;

            <input type="password" name="password" placeholder="password" onchange="validatepassword()" id="password">
            
          </div>
          <span><?php if(isset($_GET['error'])){echo $_GET['error'];}?></span>

          <p id="first"><a href="#" class="first1"> forgot username / password ?</a> </p><br>

          <div align="center"> <input class="first1" type="submit" value="sign in"></div><br>

          
        </form>
        <div id="addac"><span>don't have an account ?
        <a class="first1" href="sign_uppage.html">sign up now</a></span>
        </div>
      </dic>



    </div>
  </div>
</body>

</html>
