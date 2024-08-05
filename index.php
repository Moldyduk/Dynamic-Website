<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Website</title>
    <link rel="stylesheet" href="Css/style.css"/>
</head>
<body>
   <section class="main">
    <nav>
        <a href="#" class="logo">
            <img src="Image/logo1.png" alt="img">
        </a>
        <ul>
        <li><a href="#" class="active">Home</a></li>
        <li><a href="#">Features</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
       </ul>
    </nav>
       <div class="main-heading">
       <h1>Create rspective with virtual reality</h1>
       <p>Discover the ultimate collection of captivating web design slogan ideas to make your brand stand out in the digital world.</p>
       <a class="main-btn" href="#">Contact</a>
       </div> 
          <!--Features -->
       <section class="features">
   <div class="feature-container">

   <div class="feature-box">
    <div class="f-img">
        <img src="Image/info-icon1.png"/>
      </div>
      <div class="f-text">
        <h2>Web Development</h2>
        <p>Unleashing Creative Designs with Every Click</p>
        <a href="#" class="main-btn">Check</a>
      </div>
   </div>

   <div class="feature-box">
    <div class="f-img">
        <img src="Image/info-icon2.png"/>
      </div>
      <div class="f-text">
        <h2>Software Development</h2>
        <p>Unleashing Creative Designs with Every Click</p>
        <a href="#" class="main-btn">Check</a>
      </div>
   </div>

   <div class="feature-box">
    <div class="f-img">
        <img src="Image/info-icon3.png"/>
      </div>
      <div class="f-text">
        <h2>App Development</h2>
        <p>Unleashing Creative Designs with Every Click</p>
        <a href="#" class="main-btn">Check</a>
      </div>
   </div>
   </div>
   </section>
   <!-- About -->
 

   <section class="about">
    <div class="about-img">
        <img src="Image/about.png" alt="img">
    </div>
    <div class="about-text">
        <h2>Designs That Make Your Heart Skip a Beat</h2>
        <p>Striking Designs That Resonate with Your Audience</p>
        <button class="main-btn" href="#">Read More..</button> 
    </div>
   </section>
  <!-- Contact -->
  <div class="container">
    <h2>Contact Me</h2>
    <form action="userinfo.php" method="post">
      <input type="text" name="Name" placeholder="Enter full name" required>
      <input type="email" name="Email" placeholder="Enter your email" required>
      <textarea name="Message" id="Message" placeholder="Message"></textarea>
      <button type="submit">Send</button>
    </form>
  </div>
</body>
</html>