<?php
session_start();
if(!isset($_SESSION['Student_Number'])){
    header('location:index.html');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Connecting Ghishing</title>
    <link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
</head>
<body>
    <!--Nav-starts-->
    <header class="header_area">
        <div class="main-menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="Home.php"><img src="./static/logo.png" alt="logo">Ghishing</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <div class="mr-auto"></div>
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="Home.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#cv">CV</a>
                        </li>
                     
                        <li class="nav-item">
                            <a class="nav-link" href="#bf">Bio Data</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#bf">Foot Print</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#ev">Events</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#su">Subscribe</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Services
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="#ser">Semester Result</a>
                                <a class="dropdown-item" href="#ser">Class Time Table </a>
                                <a class="dropdown-item" href="#ser">Check Your BMI </a>
                              </div>
                          </li>
                           <li class="nav-item">
                            <a class="nav-link" href="logout.php">Logout</a>
                        </li>
                        <li class="nav-item dropdown">
                            </div>
                        </div>

                    </ul>
                </div>
            </nav>
        </div>
    </header>

        <!--End-->
        <!--Home starts-->
        <main class="site-main">
        <section class="about-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="about-image">
                            <img src="./static/a.jpg" alt="About us" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 about-title">
                    <center>
                        <h2 class="text-uppercase pt-5">
                            <span>Hi There</span>
                        
                        </h2>
                        <div class="paragraph py-4 w-75">
                           
                            <p class="para">
                                    I have waited so long to have you among us. At last, the time has come. 
                                    I am most delightfully welcoming you to join my page!
                                    You are a wonderful person with a wonderful view of life. 
                                    Your companionship is always an opportunity to learn. A warm welcome to you to join my page!
                                    Life seldom gives a chance to know someone who can influence us so deeply.
                                 I’m lucky to have the opportunity to meet you!
                            </p>
                       
                        </div>
                    </center>
                    </div>
             
                </div>
                
            </div>
        </section>
        <hr>
        <center><div class="welcome"> <audio controls ><source src="welcome .mp3"></audio></div></center>
        <!--Cv-->
        <hr>
        <section class="section-1">
            <div class="container text-center">
                <h1 id="cv">Curriculum vitae</h1>
              <div class="row">
                <div class="col-md-6 col-12">
                  <div class="pray">
                    <img src="./static/2.jpg" alt="Pray" class="" />
                  </div>
                </div>
                <div class="col-md-6 col-12">
                  <div class="panel text-left">
                    <h1>Mr. Dhendup Ghishing</h1>
                    <p class="pt-4">
                        I am a hardworking and ambitious individual with a great passion in programming and coding. 
                        I am currently in my second semester of BsCIT at Gylpozhing Collage Of Informatation And Techonology. 
                        I have pretty small skills, enabling me to effectively code few beginner's webpage.
                         I am seeing a part-time position in the industry in which I can put into practice my knowledge and experience,
                          ultimately benefiting the operations of the organisation that I work for.
                    </p>
                  </div>
                </div>
                <div class="btm">
                <div class="site-buttons">
                    <div class="text-center">
                     <button type="button" class="btn button secondary-button text-uppercase"><a href="cv.html"> Full Curriculum vitae</a></a></button>
                    </div>
                </div>
            </div>
              </div>
            </div>
          </section>
        </main>
          
      <!--Bio Data and footprint-->
      <br><br><br><br>
      <section class="section-2 container-fluid p-0">
        <div class="cover">
          <div class="overlay"></div>
          <div class="content text-center">
            <h1 id="bf"> Bio Data And Footprint </h1>
            <p>
              It seems Unknown untill We Known the Bio Of eacherother, 
              Have a loook bellow!
            </p>
          </div>
        </div>
        <div class="container-fluid text-center">
          <div class="numbers d-flex flex-md-row flex-wrap justify-content-center">
            <div class="rect">
              <h1>Bio Data</h1>
              <p> I'm Dhendup Ghishing<br> From BsCIT<br> Enrollmnet Number: 12190048<br>
                Cid Number: 10304002200 <br> House number: Ga-4-123<br>
            </p>
            </div>
            <div class="rect">
              <h1>FootPrint</h1>
              <p>
                District: Dagana<br> Geog: Goshi<br>
                Country : Bhutan<br>
                Village: Dagapela, Middle Goshi<br>
                Drungkhang:DrukjeGang Tsheza<br>
            </p>
            </div>
            <div class="rect">
              <h1>Education</h1>
              <p>Early learning: Home(1999-2006) <br> Primary school: Ballaygang(2006-12)        
            University: Gyalpozhing College of Information and Techonology
            <br>Lower and High School: Drukjegang (2013-2018)<br>
            </p>
            </div>
            <div class="rect">
              <h1>Current Status</h1>
              <p>Current College: GCIT<br>Current Address: Thimphu, Olakha,Kitab Automobile Workshop
            <br> Due to pamdemic, studying Online since 20<sup>th</sup> may, 2020  
        </p>
            </div>
          </div>
        </div>
      </section>
      <!--End of bio and footprint-->
      <!--Events-->
      <br><br><br>
      <main>
      <section class="container">
        <div class="site-content" id="ev">
            <div class="posts">
                <div class="post-content" data-aos="zoom-in" data-aos-delay="200">
                    <div class="post-image">
                        <div>
                            <img src="./static/event2.jpg" class="img" alt="blog1">
                        </div>
                        <div class="post-info flex-row">
                            <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;July 14, 2019</span>
                        
                        </div>
                    </div>
                    <div class="post-title">
                        <a href="#">Student Of GCIT praying before the programs begin</a>
                        <p>On 14th of July 2019, student and staff of GCIT offered butter lamp and prayed for peace and happiness on the of 
                            name Dorji Gyetshe!
                        
                        </p>
                        <button class="btn post-btn">Read More &nbsp; <i class="fas fa-arrow-right"></i></button>
                    </div>
                </div>
                <hr>
                <div class="post-content" data-aos="zoom-in" data-aos-delay="200">
                    <div class="post-image">
                        <div>
                            <img src="./static/event1.jpg" class="img" alt="blog1">
                        </div>
                        <div class="post-info flex-row">
                        
                            <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;January 16, 2019</span>
                            <span>7 Commets</span>
                        </div>
                    </div>
                    <div class="post-title">
                        <a href="#">Visit of His Eminence Lhalung Sungtrul Rinpoche </a>
                        <p>GCIT marked the 2nd Foundation day on 1st November 2019, 
                            commemorating the 11th Coronation day of His Majesty the King 
                            in the presence of His Eminence Lhalung Sungtrul Rinpoche
                        </p>
                        <button class="btn post-btn">Read More &nbsp; <i class="fas fa-arrow-right"></i></button>
                    </div>
                </div>
                <hr>
                <div class="post-content" data-aos="zoom-in" data-aos-delay="200">
                    <div class="post-image">
                        <div>
                            <img src="./static/event3.jpg" class="img" alt="blog1">
                        </div>
                        <div class="post-info flex-row">
                            
                            <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;Feb 21,2019</span>
                            
                        </div>
                    </div>
                    <div class="post-title">
                        <a href="#">His Majesty’s 40th Birthday</a>
                        <p>On this most joyous occasion of His Majesty’s 40th Birthday, the family
                             of Gyalpozhing College of Information Technology,Mongar would like to join the nation 
                             in offering our deepest respect, heartfelt felicitation and prayers, and genuine  
                             gratitude to His Majesty The Druk Gyalpo.
                        </p>
                        <button class="btn post-btn">Read More &nbsp; <i class="fas fa-arrow-right"></i></button>
                    </div>
                </div>
                <hr>
                <div class="post-content" data-aos="zoom-in" data-aos-delay="200">
                    <div class="post-image">
                        <div>
                            <img src="./static/queen.jpg" class="img" alt="blog1">
                        </div>
                        <div class="post-info flex-row">
                            
                            <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;June 5, 2019</span>
                           
                        </div>
                    </div>
                    <div class="post-title">
                        <a href="#">Birth Anniversary of Her Majesty The Gyaltsun 
                            Jetsun Pema Wangchuk</a>
                        <p>To commemorate the 30th Birth Anniversary of Her Majesty The Gyaltsun 
                            Jetsun Pema Wangchuk, the family of Gyalpozhing College of Information 
                            Technology offers our prayers and best wishes for the long life and good health.
                        </p>
                        <button class="btn post-btn">Read More &nbsp; <i class="fas fa-arrow-right"></i></button>
                    </div>
                </div>
            </div>
            <aside class="sidebar">
                <div class="popular-post">
                    <h2>Popular Event</h2>
                    <div class="post-content" data-aos="flip-up" data-aos-delay="200">
                        <div class="post-image">
                            <div>
                                <img src="./static/event5.jpg" class="img" alt="blog1">
                            </div>
                            <div class="post-info flex-row">
                                <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;May 14,
                                    2019</span>
                    
                            </div>
                        </div>
                        <div class="post-title">
                            <a href="#">Miss Namgay Zam with Student of GCIT</a>
                        </div>
                    </div>
                    <div class="post-content" data-aos="flip-up" data-aos-delay="300">
                        <div class="post-image">
                            <div>
                                <img src="./static/event6.jpg" class="img" alt="blog1">
                            </div>
                            <div class="post-info flex-row">
                                <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;Jan 14,
                                    2019</span>
                                
                            </div>
                        </div>
                        <div class="post-title">
                            <a href="#">Sulthan Trying His best To Impress  Audience</a>
                        </div>
                    </div>
                    <div class="post-content" data-aos="flip-up" data-aos-delay="400">
                        <div class="post-image">
                            <div>
                                <img src="./static/event7.jpg" class="img" alt="blog1">
                            </div>
                            <div class="post-info flex-row">
                                <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;Apr 14,
                                    2019</span>
                               
                            </div>
                        </div>
                        <div class="post-title">
                            <a href="#"> Lost In Program </a>
                        </div>
                    </div>
                    <div class="post-content" data-aos="flip-up" data-aos-delay="500">
                        <div class="post-image">
                            <div>
                                <img src="./static/event9.jpg" class="img" alt="blog1">
                            </div>
                            <div class="post-info flex-row">
                                <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;Aug 14,
                                    2019</span>
                                
                            </div>
                        </div>
                        <div class="post-title">
                            <a href="#">Filled with happiness</a>
                        </div>
                    </div>
                    <div class="post-content" data-aos="flip-up" data-aos-delay="600">
                        <div class="post-image">
                            <div>
                                <img src="./static/event10.jpg" class="img" alt="blog1">
                            </div>
                            <div class="post-info flex-row">
                                <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;Jan 14,
                                    2019</span>
                               
                            </div>
                        </div>
                        <div class="post-title">
                            <a href="#">President Of Gcit with staffs</a>
                        </div>
                    </div>
                    <div class="post-content" data-aos="flip-up" data-aos-delay="400">
                        <div class="post-image">
                            <div>
                                <img src="./static/event11.jpg" class="img" alt="blog1">
                            </div>
                            <div class="post-info flex-row">
                                <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;Jan 14,
                                    2019</span>
                              
                            </div>
                        </div>
                        <div class="post-title">
                            <a href="#">President Of Gcit with group of student</a>
                        </div>
                    </div>
                    <div class="post-content" data-aos="flip-up" data-aos-delay="400">
                        <div class="post-image">
                            <div>
                                <img src="./static/12.jpg" class="img" alt="blog1">
                            </div>
                            <div class="post-info flex-row">
                                <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;Jan 14,
                                    2019</span>
                            </div>
                        </div>
                        <div class="post-title">
                            <a href="#">His Majesty’s 40th Birthday</a>
                        </div>
                    </div>
                    <div class="post-content" data-aos="flip-up" data-aos-delay="400">
                        <div class="post-image">
                            <div>
                                <img src="./static/13.jpg" class="img" alt="blog1">
                            </div>
                            <div class="post-info flex-row">
                                <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;feb 21st, 
                                    2019</span>
                            </div>
                        </div>
                        <div class="post-title">
                            <a href="#">Celebration of His Majesty’s 40th Birthday</a>
                        </div>
                    </div>
                </div>
            </aside>
        </div>
    </section>
</main>

      <!--End of event -->
      <!--Message area-->

<main class="site-main">
    <section class="subscribe-us-area">
        <div class="container subscribe" id="su">
            <div class="row">
                <div class="col-lg-12 text-center subscribe-title">
                    <h4 class="text-uppercase">Hi There, If you need any assistance, I'm always Here</h4>
                    <p class="para">A fact never went into partnership with a miracle. Truth scorns the assistance of wonders. 
                        A fact will fit every other fact in the universe, and that is how you can tell whether it is or is not a fact. 
                        A lie will not fit anything except another lie.
                       </p>
                </div>
            </div>
            <div class="d-sm-flex justify-content-center">
                <form class="w-50">
                    <div class="row d-flex flex-row flex-wrap">
                        <div class="col input-textbox">
                            <input type="text" id="txtemail" class="form-control" placeholder="Email">
                        </div>
                        <div class="col">
                            <div class="btn-submit">
                                <button type="submit" class="btn btn-success float-right">subscribe Us</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>
<!--Services-->
<main>
    <section class="section-2 container-fluid p-0">
        <div class="purchase text-center" id="ser">
          <h1>This could be our First Services</h1>
          <p>
            No one is useless in this world who lightens the burdens of another
          </p>
          <div class="cards">
            <div class="d-flex flex-row justify-content-center flex-wrap">
              <div class="card">
                <div class="card-body">
                  <div class="title">
                    <h5 class="card-title">Result</h5>
                  </div>
                  <p class="card-text">
                    On clicking the "Get Result" take you to the result page of GCIT
                  </p>
                  <div class="pricing">
                    <a href="index.php" class="btn btn-dark px-5 py-2 primary-btn mb-5">Get Result</a>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <div class="title">
                    <h5 class="card-title">Time Table</h5>
                  </div>
                  <p class="card-text">
                    On clicking "See Time Table" will display the time Table of BsCIT
                  </p>
                  <div class="pricing">
                    <a href="Timetable.html" class="btn btn-dark px-5 py-2 primary-btn mb-5">See Time Table</a>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <div class="title">
                    <h5 class="card-title">BMI</h5>
                  </div>
                  <p class="card-text">
                    If want to chech your BMI then click on "Check your BMI"
                  </p>
                  <div class="pricing">
                    
                    <a href="bmi.html" class="btn btn-dark px-5 py-2 primary-btn mb-5">Check Your BMI</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
</main>
<!-- footer-->
<footer class="footer">
    <div class="container">
        <div class="about-us" data-aos="fade-right" data-aos-delay="200">
            <h2>About Me</h2>
            <p>I am Dhendup Ghishing from Dagapela currently studying in Gyalpozhing college of Informatation and Techonology
                And I am pursuing degree in BscIT.
            </p>
        </div>
        <div class="newsletter" data-aos="fade-right" data-aos-delay="200">
            <h2>Connect Me </h2>
            
            <div >
            	<p>Mail me through: 12190048.gcit@rub.edu.bt </p>
                
            </div>
        </div>
        <div class="instagram" data-aos="fade-left" data-aos-delay="200">
            <h2>Sister Collage </h2>
            <div class="flex-row">
                <a href="https://www.rub.edu.bt/index.php/en/" style="text-decoration: none; color: black;"> Royal University of Bhutan</a>
            </div>
            <div class="flex-row">
             <a href="https://www.gcit.edu.bt/"style="text-decoration: none; color: black;"> Gyalpozhing College</a>
            </div>
            <div class="flex-row">
                <a href="https://www.cst.edu.bt/"style="text-decoration: none; color: black;"> College Of Science And Techonology</a>
               </div>
               <div class="flex-row">
                <a href="http://www.gcbs.edu.bt/"style="text-decoration: none; color: black;">Gedu College of Business and Studies</a>
               </div>
               <div class="flex-row">
                <a href="http://www.cnr.edu.bt/"style="text-decoration: none; color: black;">CNR</a>
               </div>
               <div class="flex-row">
                <a href="https://www.jnec.edu.bt/en/"style="text-decoration: none; color: black;">JNEC</a>
               </div>
        </div>
        <div class="follow" data-aos="fade-left" data-aos-delay="200">
            <h2>Follow us</h2>
            <p>Let us be Social</p>
            <div>
                <a href="https://www.facebook.com/" style="color: yellow;"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.facebook.com/"style="color: yellow;"><i class="fab fa-twitter"></i></a>
                <a href="https://www.instagram.com/"style="color: yellow;"><i class="fab fa-instagram"></i></a>
                <a href="https://www.youtube.com/"style="color: yellow;"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
    </div>
    <div class="move-up">
        <span><i class="fas fa-arrow-circle-up fa-2x"></i></span>
    </div>
</footer>
<!--The end-->
        
<script type="text/javascript">

$(document).ready(function () {
    // click to scroll top
    $('.move-up span').click(function () {
        $('html, body').animate({
            scrollTop: 0
        }, 1000);
    })


});



</script>
</body>
</html>