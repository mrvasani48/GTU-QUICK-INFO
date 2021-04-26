<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gtu Quick Info</title> 
    <link rel="stylesheet" href="newheader.css" />
    <link rel="stylesheet" href="result_page.css" />
    <link rel="stylesheet" href="footer.css" />
</head>

<body>      
    <div class="container1">
        <div class="box1" >
            <img  id="image" src="image/logo.jpg" height="150px" width="150px"></img>  
        </div>

        <div class="box2">
             <div class="box2in1">

                 <div id="headingh1">GTU QUICK INFO</div>

                 <div  id="userlogin">
                    <a style="text-decoration: none;" href="login_page.php">
                        <img id="image" src="image/user.jpeg" height="70px" width="70px">
                         </img><br>
                        <spna id="logintext"> login
                        </spna>
                     </a>
                 </div>

             </div>

             <div class="box2in2">
                <a class="pnav"  href="home_page.php">Home</a>
                <a class="pnav" href="about_gtu.php">About Gtu</a>
                <a class="pnav " href="circular.php">Circular</a>
                <a class="pnav" href="acadamic_page.php">Acadamic</a>
                <a class="pnav" href="#">Stu. Zone</a>
                <a class="pnav active" href="result_page.php">Result</a>
                <a class="pnav" href="cources_page.php">Cources</a>
                <a class="pnav" href="#">career</a>
                <a class="pnav" href="#d3footer">Contact Us</a>
             </div>
        </div>
    </div>
    <br><br>
    <h1 align="center">Result</h1>
    <iframe class="resulti"  height="900px" width="1200" src="https://www.gturesults.in"  title="Iframe Example"></iframe>
 
    <br> <br> 
 <footer id="footer">
          <div id="d1footer">
            <img  width="170" id="logofooter" height="170" src="image/logo.jpg" alt="gtu" ></img>
          </div>
          <div id="d2footer">
                  <h3 id="d2h" >Gujrat Technological University<br><span id="loc">  Ahmedabad  </span></h3>
          </div>
              <div id="d3footer">
                  <h1 class="contact">contact us</h1>
                  <hr style="color:black;">
                  
                        <p>Address<br>
                              Gujarat Technological University<br>
                                Nr.Vishwakarma Government Engineering College Nr.Visat Three Roads, Visat - Gandhinagar Highway<br>
                               Chandkheda, Ahmedabad – 382424 - Gujrat</p>
                       <span id="number"  style="font-size: 15px; color:blue;">&#9742; 079-23267521/570</span><br>
                       <a id="mail"  href="mailto:registrar@gtu.ac.in">&#128231; registrar@gtu.ac.in</a>   
              </div>

    </footer>
             <nav id="lastnav">
             <p id="copyright">Copyright © 2020  Gujrat Technological University .   All Rights Reserved.</p>
             <a href="term.php" target="_blank" id="term" rel="noopener noreferrer">Term & Condition</a>
             <a href="https://www.gtu.ac.in/" target="_blank" id="gtuweb" rel="noopener noreferrer">Gtu Official website</a>
            </nav>   
</body>
</html>
<?php ?>
