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
    <div id="a">
        <div id="sign-up">
            <div id="z">
                <div id="head">
                    <h2 align="center">&nbsp;gujrat technological university&nbsp;</h2>
                </div>
                <div class="container">
                    <form class="form1" method="GET" action="regisration.php">
                        <div class="i">
                            <label>User id : </label>&nbsp;
                            <input onchange="useridvalidate()" name="usrid" id="user_id" type="text"
                                placeholder="Enrollment no">
                        </div>
                        <br><br>
                        <div class="i">
                            <label>email : </label>&nbsp;
                            <input type="text" id="femail" name="email" onchange="oneemailvalidate()"
                                placeholder="email">
                        </div>
                        <br><br>
                        <div class="i">
                            <label>password : </label>&nbsp;
                            <input type="password" id="password1" name="pass" onchange="passvalidate()"
                                placeholder="password1 ">
                        </div>
                        <br><br>
                        <div class="i">
                            <label>confirm password : </label>&nbsp;
                            <input type="password" onchange="confirmpassvalidate()" id="password2"
                                placeholder="confirm password">
                        </div>
                        <br><br>
                        <div class="i">
                            <label>full-name : </label>&nbsp;
                            <input type="text" onchange="fullnamevalidate()" name="fname" id="fulname"
                                placeholder="full name">
                        </div>
                        <br><br>
                        <div class="i">
                            <label> date of birth : </label>&nbsp;
                            <input type="date" name="bdate" id="date">
                        </div>
                        <br><br>
                        <div class="i">
                            <label>xender : </label>&nbsp;&nbsp;
                            <label class="x">
                                <input type="radio" name="xender" id="xender" value="male" required> male
                                <input type="radio" name="xender" id="xender" value="female" required> female
                                <input type="radio" name="xender" id="xender" value="other" required> other
                            </label>
                        </div>
                        </label><br> <br>
                        <div>
                            <input type="checkbox" required id=""> i accept the <a class="first1" href="term.php">
                                terms of use </a>& <a class="first1" href="#">privacy policy</a>
                        </div><br><br>
                        <div align="center">
                            <input class="first1" type="submit" name="submit" value="signup" id="button">
                        </div>

                        <p>alrady have an account ?<a class="first1" href="login_page.php">login here</a> </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<?php ?>