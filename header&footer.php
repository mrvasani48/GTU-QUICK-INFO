<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gtu Quick Info</title>
    
    <style>
        .header {
    background-color: rgb(255, 140, 0,0.7);
    width: 100%;
    height: 180px;
    box-sizing: border-box;
    margin-top: -50px;
   }

   .fleft
   {
      float: left;
   }
   #logo
   {
   margin: 15px;  
   border-radius: 7px;
   }
   #headingh1
   {
      text-align: center;
      font-size: 90px;
      margin-bottom:10.57px;
   }
   #navhead
   {
    height: 50px;
    display: flex; 
    }
    .pnav{
     text-decoration: none;
     border: 1px solid black;
     vertical-align: middle;
     overflow: hidden;    
     line-height: 3;
     align-items: center;
     flex-wrap: nowrap;
     flex-direction: row ;
     flex-grow:1;
      flex-shrink: 1;
      text-align: center;
      border-radius: 5px;
      justify-content: space-between;
      margin-left: 5px;
      margin-right: 5px; 
    }

    .pnav:hover{
     background-color: rgb(245, 245, 245);
    }
  
        </style>






        <style>
            #footer {
    background-color: #fc952c;
    width: 100%;
    height: 230px;
    box-sizing: border-box;
    align-items: center;
    display: flex;
    flex-direction: row;
    display: grid;
    grid-template-columns: 20% 40% 40%;
}
#d1footer{
          width: 200px;
          align-content: center;
          margin: 10px;
        
}

#d2footer{
            height: 200px;
            width: 750px;
}

#d2h{
    margin-top: 60px;
    margin-left: 40px;
    font-size: 200%
}

#d3footer{
    margin-left: 30px;
}

.contact{
    margin-top: -10px;
    margin-bottom: -9px;
    text-transform: capitalize;
}
#logofooter
{
    border-radius: 5px;
}
#copyright
{
    text-transform: capitalize;
    float: left;
    margin-top: 0%;
    color: cornsilk;
}
#lastnav
{
    background-color: rgb(103, 103, 241);
    
}
#term{
    text-transform: capitalize;
    text-decoration:none ;
    color: cornsilk;
    padding-left: 300px;
}
#gtuweb{
    text-transform: capitalize;
    text-decoration:none ;
    color: cornsilk;
    text-align:right ;
    padding-left: 300px;

}
#loc
{
    text-align:center ;
    padding-left: 20%;
}
            </style>
    <script src="home_page.js"></script>
</head>

<body>      
<header class="header"> 
       <div > 
         <img id="logo"  class="fleft" src="image/logo.jpg" height="150px" width="150px"></img>  
       </div>  
      <div >      
            <h1 id="headingh1">GTU QUICK INFO</h1>
            <Nav id="navhead" >
                  <a class="pnav" href="home_page.php">Home</a>
                  <a class="pnav" href="#">About Gtu</a>
                  <a class="pnav" href="#">Circular</a>
                  <a class="pnav" href="#">Acadamic</a>
                  <a class="pnav" href="#">Stu. Zone</a>
                  <a class="pnav" href="#">Result</a>
                  <a class="pnav" href="#">Cources</a>
                  <a class="pnav" href="#">Other</a>
                  <a class="pnav" href="#">Contact Us</a>
                  <a class="pnav" href="#" ">login_page</a>
            </Nav>
      </div>      
</header>
         
<br>
<br>
<br>

<br>
<br>
<br>
<br>
<br>
<br><br>

<br>
<br>






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
                       <span id="number"  style="font-size: 15px; color:blue;">079-23267521/570</span><br>
                       <a id="mail"  href="mailto:registrar@gtu.ac.in"> registrar@gtu.ac.in</a>   
              </div>

    </footer>
             <nav id="lastnav">
             <p id="copyright">Copyright © 2020  Gujrat Technological University .   All Rights Reserved.</p>
             <a href="#" target="_blank" id="term" rel="noopener noreferrer">Term & Condition</a>
             <a href="home_page.php" target="_blank" id="gtuweb" rel="noopener noreferrer">Gtu Quick Info</a>
            </nav>   
</body>
</html>