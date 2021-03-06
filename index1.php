<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel="stylesheet" href="bubles.css">
  <link rel="stylesheet" href="tablesUsers.css">
  <link rel="stylesheet" href="style.css">
  <title>NoorAldenWebsite</title>
</head>

<body>

<button onclick="topFunction()" title="Gotop" id="myBtn">Go Top</button>
<style>

#myBtn {
  display:none;
  position:fixed;
  bottom:20px;
  right:30px;
  z-index:99;
  font-size:18px;
  border:none;
  outline:none;
  background-color:blue;
  color:white;
  cursor:pointer;
  padding:15px;
  border-radius:4px;
  transition:all 7s;
}

#myBtn:hover{
  background-color:#555;
}

</style>

<script>

var mybutton = document.getElementById("myBtn");

window.onscroll = function() {scrollFunction()} ;

function scrollFunction(){
    if(document.body.scrollTop || document.documentElement.scrollTop > 390 ){
      mybutton.style.display="block";
      
    }else{
      mybutton.style.display="none";
    }
}

function topFunction(){
	document.body.scrollTop = 0;
	document.documentElement.scrollTop = 0;
}

</script>


  <!-- Header -->
  <section id="header">
    <div class="header container">
      <div class="nav-bar">
        <div class="brand">
          <a href="#hero">
            <h1><span>N</span>OOR <span>A</span>LDEN</h1><h2><span>W</span>elcome <span> 
    <?php
require 'auth.php';
//الترحيب بلعضو
echo $_SESSION['username'];

?></span>
          </a>
        </div>
        <div class="nav-list">
          <div class="hamburger">
            <div class="bar"></div>
          </div>
          <ul>
            <li><a href="#hero" data-after="Home">Home</a></li>
            <li><a href="#services" data-after="Let's Chat">Let's Chat</a></li>
            <li><a href="#projects" data-after="Projects">Projects</a></li>
            <li><a href="#about" data-after="About">About</a></li>
            <li><a href="#sendforme" data-after="Contact">Contact</a></li>
            <li><a href="http://localhost/FULLSTACK/contact.php#projects" data-after="send">SendForMe</a></li>
            <li><a href="http://localhost/FULLSTACK/index.php" data-after="LogOUT">LogOUT</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- End Header -->


  <!-- Hero Section  -->
  <section id="hero">
    <div class="hero container">
      <div>
        <h1>Hello, <span></span></h1>
        <h1>My Name is <span></span></h1>
        <h1>NoorAlden <span></span></h1>
        <a href="#projects" type="button" class="cta">My-CV</a>
      </div>
    </div>
    <div id="boils-canvas">
       
       <div class="bubbles">
       
           <img src="bubble.png">
           <img src="bubble.png">        
           <img src="bubble.png">
           <img src="bubble.png">
           <img src="bubble.png">
           <img src="bubble.png">
       </div>
    
    </div>

  </section>

  
  <!-- End Hero Section  -->

  <!-- Service Section -->
  <section id="services">
    <div class="services container">
      <div class="service-top">
        <h1 class="section-title">P<span>h</span>p</h1>
        <p>The back-end is the part that you don't see on the site.<br> It is responsible for storing and organizing the data and making sure that everything in the front of the site works well.<br> The back-end communicates with the site's interface, sends and receives information, and then displays it on the site. ... Some of the well-known back-end languages ​​are Ruby, Java, PHP, Python, ASP.Net and Node.</p>
      </div>
      <div class="service-bottom">
        <div class="service-item" id="service-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/services.png" /></div>
          <h2>Front-end</h2>
          <p>This is the front end view that is displayed on the screen, and it can be used for any purpose.</p>
        </div>
        <div class="service-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/services.png" /></div>
          <h2>Full Stack</h2>
          <p>The complete programmer has the ability to get job tasks into job tasks,<br> develop job tasks, job tasks, job tasks at the UI level</p>
        </div>
        <div class="service-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/services.png" /></div>
          <h2>MySQL</h2>
          <p>MySQL, the most popular Open Source SQL database management system, is developed,distributed, and supported by Oracle Corporation.</p>
        </div>
        <div class="service-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/services.png" /></div>
          <h2>CSS3</h2>
          <p>Cascading Style Sheets Level 3 (CSS3) is the iteration of the CSS standard used in the styling and formatting of Web pages.<br> CSS3 incorporates the CSS2 standard with some changes and improvements.</p>
        </div>
      </div>
    </div>
  </section>
  <!-- End Service Section -->

  <!-- Projects Section -->
  <section id="projects">





  </section>
  <!-- End Projects Section -->

  <!-- About Section -->
  <section id="about">
    <div class="about container">
      <div class="col-left">
        <div class="about-img">
          <img src="banner.jpg" alt="img">
        </div>
      </div>
      <div class="col-right">
        <h1 class="section-title">About <span>me</span></h1>
        <h2>FullStack - Developer</h2>
       <p>I started my career in 2018 as a programming engineer in C#,algorithms and web development in core languages,<br>  html, css, jacascript and then I developed as a backend programmer using php and mysql and it was easy for me because the base was in the right shape and I have experience<br> with React In addition to the aesthetics of jquery ajax bootstrap. And I worked as a real job as a web developer in college, her name is smart with my friends Ron is an engineer and has been working for 5 years in a company with react.</p>
        <a href="#" class="cta">Download Resume</a>
      </div>
    </div>
  </section>
  <!-- End About Section -->

  <!-- Contact Section -->
  <section id="contact">
    <div class="contact container">
      <div>
        <h1 class="section-title">Contact <span>info</span></h1>
      </div>
      <div class="contact-items">
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/phone.png" /></div>
          <div class="contact-info">
            <h1>Phone</h1>
            <h2>0522799242</h2>
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/new-post.png" /></div>
          <div class="contact-info">
            <h1>Email</h1>
            <h2>Nooralden.12.n@gmail.com</h2>
            <h2>Grand.12.n@gmail.com</h2>
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/map-marker.png" /></div>
          <div class="contact-info">
            <h1>Address</h1>
            <h2>Israel, Taybee, banorama</h2>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- End Contact Section -->

  <!-- Footer -->
  <section id="footer">
    <div class="footer container">
      <div class="brand">
            <h1><span>N</span>OOR <span>A</span>LDEN</h1>
      </div>
      <h2>Your Complete Web Solution</h2>
      <div class="social-icon">
        <div class="social-item">
          <a href="https://www.facebook.com/zenkrem/"><img src="https://img.icons8.com/bubbles/100/000000/facebook-new.png" /></a>
        </div>
        <div class="social-item">
          <a href="https://www.instagram.com/nooralden.khalayle/"><img src="https://img.icons8.com/bubbles/100/000000/instagram-new.png" /></a>
        </div>
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/twitter.png" /></a>
        </div>
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/behance.png" /></a>
        </div>
      </div>
      <p>Copyright © 2021 Nooralden. All this Me = 2019-2021</p>
    </div>
  </section>
  <!-- End Footer -->
  <script type="text/javascript" src="app.js"></script>



</body>

</html>