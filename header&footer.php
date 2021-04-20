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
                 
            </Nav>
      </div>      
</header>

</body>
</html>