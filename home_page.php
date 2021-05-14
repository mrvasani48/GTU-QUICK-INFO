<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gtu Quick Info</title>
    <link rel="stylesheet" href="gallery.css">
    <link rel="stylesheet" href="second_nav.css">
    <link rel="stylesheet" href="introductionv.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="cources.css">
    <link rel="stylesheet" href="event.css">
    <link rel="stylesheet" href="news.css">
    <link rel="stylesheet" href="circular.css">
    <link rel="stylesheet" href="newheader.css" />
    <link rel="stylesheet" href="acdamic_page.css" />
   
</head>
<body>   

<div class="container1">
        <div class="box1" >
            <img  id="image" src="logo.jpg" height="150px" width="150px"></img>  
        </div>

        <div class="box2">
             <div class="box2in1">

                 <div id="headingh1">GTU QUICK INFO</div>

                 <div  id="userlogin">
                    <a style="text-decoration: none;" href="login_page.php">
                        <img id="image" src="user.jpeg" height="70px" width="70px">
                         </img><br>
                        <spna id="logintext">     <?php if(isset($_GET['succes'])){echo $_GET['succes'];} else {echo("login");}?>
                        </spna>
                     </a>
                 </div>

             </div>

             <div class="box2in2">
                <a class="pnav active"  id="active" href="home_page.php">Home</a>
                <a class="pnav" href="about_gtu.php">About Gtu</a>
                <a class="pnav" href="circular_page.php">Circular</a>
                <a class="pnav" href="acadamic_page.php">Acadamic</a>
                <a class="pnav" href="#">Stu. Zone</a>
                <a class="pnav" href="result_page.php">Result</a>
                <a class="pnav" href="cources_page.php">Cources</a>
                <a class="pnav" href="#">career</a>
                <a class="pnav" href="#">student corner</a>
             </div>
        </div>
    </div>
         
    <section id="gallery">
        <div id="photosgallery" style="margin-top: 20px;">
            <img id="one" src="https://www.gtu.ac.in/SliderImages/images/Final_Slider_Women'sDayCelebration2M8A8918.jpg" height="300px" width="270px"></img> 
            <img id="two" src="https://www.gtu.ac.in/SliderImages/images/Final_Slider_2M8A7065.jpg" height="300px" width="270px"></img> 
            <img id="three" src="https://www.gtu.ac.in/SliderImages/images/repub_1.jpg" height="300px" width="270px"></img> 
            <img id="four" src="https://www.gtu.ac.in/SliderImages/images/repub_2.jpg" height="300px" width="270px"></img> 
            </div>
     <!--    <div >
            <ul style="list-style-type:none;" id="slidegallery">
            <li id="flt" style="text-decoration: none;" ><a href="#"><</a></li>
            <li id="flt" ><a href="#">*</a></li>
            <li id="flt" ><a href="#">*</a></li>
            <li id="flt" ><a href="#">*</a></li>
            <li id="flt" ><a href="#">*</a></li>
            <li id="flt" ><a href="#">></a></li>
            </ul>
          </div>-->
    </section><br><br>
    <section id="nav2">
            <Nav id="navsec">
                  <a id="fd" class="snav"  href="#">Reports</a>
                  <a class="snav"  href="#">Gallery</a>
                  <a class="snav"  href="#">Impo. Link</a>
                  <a class="snav"  href="#">Admission</a>
                  <a class="snav"  href="#">International</a>
                  <a class="snav"  href="#">E-Education</a>
                  <a class="snav"  href="#">Online Payment</a>
                  <a class="snav"  href="#">Download</a>
        
            </Nav>
    </section>
 <section id="intvideo" >
       <div>
       <iframe id="video" width="660" height="360" src="https://www.youtube.com/embed/GQiYDvhSVGA" title="YouTube video player" frameborder="2" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
             
              </source>
</div>
<div>       
              </video>
              <div id="introtext">
              <h3 >
              <span id="wlcm">welcome to </span><br>
              <span  id="gtu">
              Gujrat technological University of Ahmedabad 
              </span>
              </h3>
              <p style="font-size:20px; margin-bottom:50px;" >
              I hope you are safe and following norms of social distancing as a precautionary measure of covid-19. We have seen many drastic changes in the duration of January to May 2020. For GTU, the year 2020 started on a very positive note by organizing 9th annual convocation at Mahatma Mandir in the presence of Shri Amit Shah, Hon’ble Home Minister of India. His gracious presence motivated thousands of students.
              </p>
              <div><button><a style="text-decoration:none;" href="intro_readmore.php">Read More</a></button></div>
           </div>
</div>
</section>
   <h1 style="text-align:center; clear:left; clear:right; ">cources</h1>
    <section id="cources">
         
                 <div id="cources1">
                     <img id="couresimg" src="https://www.gtu.ac.in/SliderImages/images/Final_Slider_Women'sDayCelebration2M8A8918.jpg" height="200px" width="200px">
                     <p id="couresname" ><a id="csnm" href="#">Diploma Engineering</a></p>
               </div>
               <div id="cources1">
                     <img id="couresimg" src="https://www.gtu.ac.in/SliderImages/images/Final_Slider_Women'sDayCelebration2M8A8918.jpg" height="200px" width="200px">
                     <p id="couresname" ><a id="csnm" href="#">Diploma Pharmacy</a></p>
               </div>
               <div id="cources1">
                     <img id="couresimg" src="https://www.gtu.ac.in/SliderImages/images/Final_Slider_Women'sDayCelebration2M8A8918.jpg" height="200px" width="200px">
                     <p id="couresname" ><a id="csnm" href="#">Bachelor of Engineering</a></p>
               </div>
               <div id="cources1">
                     <img id="couresimg" src="https://www.gtu.ac.in/SliderImages/images/Final_Slider_Women'sDayCelebration2M8A8918.jpg" height="200px" width="200px">
                     <p id="couresname" ><a id="csnm" href="#">Bachelor of Pharmacy</a></p>
               </div>

               <div id="cources1">
                     <img id="couresimg" src="https://www.gtu.ac.in/SliderImages/images/Final_Slider_Women'sDayCelebration2M8A8918.jpg" height="200px" width="200px">
                     <p id="couresname" ><a id="csnm" href="#">Bachelor of Architecture</a></p>
               </div>
             
               <div id="cources1">
                     <img id="couresimg" src="https://www.gtu.ac.in/SliderImages/images/Final_Slider_Women'sDayCelebration2M8A8918.jpg" height="200px" width="200px">
                     <p id="couresname" ><a id="csnm" href="#">Bachelor of Hotel Management and Catering Technology</a></p>
               </div>
               <div id="cources1">
                     <img id="couresimg" src="https://www.gtu.ac.in/SliderImages/images/Final_Slider_Women'sDayCelebration2M8A8918.jpg" height="200px" width="200px">
                     <p id="couresname" ><a id="csnm" href="#">Master of Engineering</a></p>
               </div>
               <div id="cources1">
                     <img id="couresimg" src="https://www.gtu.ac.in/SliderImages/images/Final_Slider_Women'sDayCelebration2M8A8918.jpg" height="200px" width="200px">
                     <p id="couresname" ><a id="csnm" href="#">Master of Computer Applications</a></p>
               </div>
               <div id="cources1">
                     <img id="couresimg" src="https://www.gtu.ac.in/SliderImages/images/Final_Slider_Women'sDayCelebration2M8A8918.jpg" height="200px" width="200px">
                     <p id="couresname" ><a id="csnm" href="#">Master of Business Management</a></p>
               </div>
               <div id="cources1">
                     <img id="couresimg" src="https://www.gtu.ac.in/SliderImages/images/Final_Slider_Women'sDayCelebration2M8A8918.jpg" height="200px" width="200px">
                     <p id="couresname" ><a id="csnm" href="#">Master of Pharmacy</a></p>
               </div>
               <div id="cources1">
                     <img id="couresimg" src="https://www.gtu.ac.in/SliderImages/images/Final_Slider_Women'sDayCelebration2M8A8918.jpg" height="200px" width="200px">
                     <p id="couresname" ><a id="csnm" href="#">Master in Applied Management</a></p>
               </div>
               <div id="cources1">
                     <img id="couresimg" src="https://www.gtu.ac.in/SliderImages/images/Final_Slider_Women'sDayCelebration2M8A8918.jpg" height="200px" width="200px">
                     <p id="couresname" ><a id="csnm" href="#">Master in Technology Management</a></p>
               </div>
               <div id="cources1">
                     <img id="couresimg" src="https://www.gtu.ac.in/SliderImages/images/Final_Slider_Women'sDayCelebration2M8A8918.jpg" height="200px" width="200px">
                     <p id="couresname" ><a id="csnm" href="#">Master in Pharmacy Management</a></p>
               </div>
               <div id="cources1">
                     <img id="couresimg" src="https://www.gtu.ac.in/SliderImages/images/Final_Slider_Women'sDayCelebration2M8A8918.jpg" height="200px" width="200px">
                     <p id="couresname" ><a id="csnm" href="#">Master of Philosophy</a></p>
               </div>
               <div id="cources1" >
                     <img id="couresimg" src="https://www.gtu.ac.in/SliderImages/images/Final_Slider_Women'sDayCelebration2M8A8918.jpg" height="200px" width="200px">
                     <p id="couresname" ><a id="csnm" href="#">Doctor of Philosophy</a></p>
               </div>
              
                  
    </section>
       
    <section >
            <h1 id="eventh1" align="center">Event</h1>
          
                 <div id="event1">
                  <a id="eventanchor"     href="#"  target=""  rel="noopener noreferrer"  >
                   <img id="eventimage" height="200px" width="200px"  src="all.jpg" alt="this is image " />
                   <div id="eventname">gtu covecation</div>
                     </a>
             <div>
    </section>
    <br><br>
    
    <section>
    <h1 align="center">Notifications </h1>
    <div class="alnewsgride">
            <div class="items1">
                        <div class="textitems1" > <a style="text-decoration:none;" href="#"> revised Online Midsemester Exam Schedule SSBCOM  III Apr.....</a></div> 
                        <div style=" background-color:orange; text-align: center;"><a class="viewall"href="#">view all </a></div>
            </div>
            <div class="items1">
                        <div class="textitems1" > <a style="text-decoration:none;" href="#"> revised Online Midsemester Exam Schedule SSBCOM  III Apr.....</a></div> 
                        <div style=" background-color:orange; text-align: center;"><a class="viewall"href="#">view all </a></div>
            </div>
            <div class="items1">
                        <div class="textitems1" > <a style="text-decoration:none;" href="#"> revised Online Midsemester Exam Schedule SSBCOM  III Apr.....</a></div> 
                        <div style=" background-color:orange; text-align: center;"><a class="viewall"href="#">view all </a></div>
            </div>
            <div class="items1">
                        <div class="textitems1" > <a style="text-decoration:none;" href="#"> revised Online Midsemester Exam Schedule SSBCOM  III Apr.....</a></div> 
                        <div style=" background-color:orange; text-align: center;"><a class="viewall"href="#">view all </a></div>
            </div>
            <div class="items1">
                        <div class="textitems1" > <a style="text-decoration:none;" href="#"> revised Online Midsemester Exam Schedule SSBCOM  III Apr.....</a></div> 
                        <div style=" background-color:orange; text-align: center;"><a class="viewall"href="#">view all </a></div>
            </div>
            <div class="items1">
                        <div class="textitems1" > <a style="text-decoration:none;" href="#"> revised Online Midsemester Exam Schedule SSBCOM  III Apr.....</a></div> 
                        <div style=" background-color:orange; text-align: center;"><a class="viewall"href="#">view all </a></div>
            </div>
            <div class="items1">
                        <div class="textitems1" > <a style="text-decoration:none;" href="#"> revised Online Midsemester Exam Schedule SSBCOM  III Apr.....</a></div> 
                        <div style=" background-color:orange; text-align: center;"><a class="viewall"href="#">view all </a></div>
            </div>
            <div class="items1">
                        <div class="textitems1" > <a style="text-decoration:none;" href="#"> revised Online Midsemester Exam Schedule SSBCOM  III Apr.....</a></div> 
                        <div style=" background-color:orange; text-align: center;"><a class="viewall"href="#">view all </a></div>
            </div>
            <div class="items1">
                        <div class="textitems1" > <a style="text-decoration:none;" href="#"> revised Online Midsemester Exam Schedule SSBCOM  III Apr.....</a></div> 
                        <div style=" background-color:orange; text-align: center;"><a class="viewall"href="#">view all </a></div>
            </div>
            <div class="items1">
                        <div class="textitems1" > <a style="text-decoration:none;" href="#"> revised Online Midsemester Exam Schedule SSBCOM  III Apr.....</a></div> 
                        <div style=" background-color:orange; text-align: center;"><a class="viewall"href="#">view all </a></div>
            </div>
           
      </div>     
           
    </section>  
    <br><br> 

<section>
 <h1 align="center">Circular</h1>
 <div class="circulargride">
         <div class="circularitems1">
                     <div class="circulartextitems1" > <a style="text-decoration:none;" href="https://s3-ap-southeast-1.amazonaws.com/gtusitecirculars/uploads/SKM_36721042317030_340223.pdf">ELECTIVE SUBJECT’S ENTRY FOR B. PHARM SEM-8 (REGULAR) (SUMMER - 2021)   </a></div> 
                     <div style=" background-color:orange; text-align: center;"><a class="circularviewall"href="circular_page.php">view all </a></div>
         </div>
       
   </div>     
        
 </section>  
<br><br>
 
 <footer id="footer">
          <div id="d1footer">
            <img  width="170" id="logofooter" height="170" src="logo.jpg" alt="gtu" ></img>
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