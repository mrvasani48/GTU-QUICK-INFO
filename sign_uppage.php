<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign-up</title>
    <link rel="stylesheet" href="sign_uppage.css">
    <script type="text/javascript" src="sign_uppage_validation.js"></script>
</head>
<body> 
        <div id="all">
            <div id="head">
            <h2>gujrat technological university</h2>
            <span></span>
            <h2></h2>
        </div>
        <form class="form1" method="GET" action="regisration.php">
             
            <label>User id : </label><span id="Userid">
               <input onchange="useridvalidate()" name="usrid" id="user_id" type="text" placeholder="Enrollment no"></span><br><br>

            <label>email : </label><span id="email1">
                <input  type="text" id="femail" name="email"  onchange="oneemailvalidate()"  placeholder="email"></span><br><br>
 
            <label>password : </label>
            <input type="password"id="password1" name="pass" onchange="passvalidate()" placeholder="password1 "><br><br>

            <label> confirm password : </label><span id="password">
                <input type="password" onchange="confirmpassvalidate()" id="password2"placeholder="confirm password"></span><br><br>

            <label>full-name : </label>
            <input type="text" onchange="fullnamevalidate()" name="fname" id="fulname" placeholder="full name"><br><br>

            <label>
                date of birth : <input type="date" name="bdate"  id="date">
            </label><br><br>
            <label>
                xender : <br><label id="allname"  >
                <input type="radio" name="xender" id="xender" value="male"  required> male 
               <input type="radio" name="xender" id="xender" value="female" required > female
               <input type="radio" name="xender" id="xender" value="other" required >  other
            </label>
            </label><br>    <br>
            <div>
            <input type="checkbox" required  id=""> i accept the <a href="term.html"> terms of use </a>& <a href="#">privacy policy</a>
            </div><br>
            <input type="submit"  name="submit" value="signup" id="button">
            <br>
            <p>alrady have an account ?<a href="login_page.php">login here</a> </p>
        </form>
    </div>

</body>
</html>
<?php ?>