<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Harry Potter's fanpage</title>
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header>
    <nav class="navbar">
        <a href="index.html" class="no-decoration" accesskey="h" title="logo and branding of a website"><div class="brand-title"><img src="img/Harry-Potter-PNG-Free-Download.png" alt="Harry potter logo"> Harry Potter</div></a>
        <a href="#" class="toggle-button" title="button that will further serve as hamburger menu">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
        </a>
        <div class="navbar-links">
          <ul>
            <li><a href="index.html" title="Homepage link" accesskey="h">Home</a></li>
            <li><a href="about.html" title="Link to about us" accesskey="a">About</a></li>
            <li><a href="faculties.html" title="Link to the faculties page" accesskey="f">Faculties</a></li>
            <li><a href="characters.html" title="Link to characters page" accesskey="r">Characters</a></li>
            <li><a href="contacts.php" title="Link to contacts page" accesskey="c">Contact</a></li>
          </ul>
          </div>
          </nav>
</header>

 

<h1 class="headerH1">Contact</h1>

  <div class="contact-form">
        <h1>Contact us</h1>
    </div>
    <div class="contact-us">
       <form action="save.php" method="post">
           <input type="text" name="fname"   class="form-control" placeholder="Enter First Name"> <br>
           <input type="text" name="lname"  class="form-control" placeholder="Enter last Name"> <br>
           <input type="email" name="email"  class="form-control" placeholder="Enter Email"> <br>
           <textarea name="message" class="form-control" placeholder="Write your message/question" cols="30" rows="3"></textarea><br>
           <input type="submit" class="form-control submit" value="submit" >
       </form>
    </div>

    <section class="contact padding-3">
      <div class="container">
        <div class="row g-4">
          <div class="col-md">
            <h2 class="text-centered">Contact Info</h2>
            <ul>
              <li >
                <span >Main Location:</span> Strada Leona 35, Pavia
              </li>
              <li>
                <span>Contact Phone:</span> (+39) 344-4444
              </li>
              <li >
                <span>Student Phone:</span> (333) 333-3333
              </li>
              <li >
                <span>Contact Email:</span> 
                s.azamat0806@gmail.com
              </li>
              <li >
                <span>Student Email:</span>
                azamat.sydykov01@universitadipavia.it
              </li>
            </ul>
          </div>
         <img src="img/Harry-Potter-PNG-HQ-Photo.png" class="contactImg" alt="Harry Potter portrait image" >
        </div>
      </div>
    </section>


    <section class="newsletter text-light padding-3" >
        <div class="container">
            <div class='newsContent'>
                <h3>
                    Sign up for HP Newsletter
                </h3>
              <form action="newsletter.php" method="post">
                <div class="inputs news-input">
                    <input type="email" name="email" placeholder="Enter Email">
                    <input type="submit" value="Submit" class="submit">
                  </div>
                </form>
                
            </div>
        </div>
    </section>

  <footer>
    <div class="container">
      <p class="lead">Copyright &copy; 2023 Harry Potter fan</p>

      <a href="#" onclick="scrollToTop()" class="scroll-up" title="Link to the top of the page" accesskey="u">
        <img  src="img/scroll_to_top.png" alt="scrollToTop">
        </a>
    </div>
  </footer>


 <script src="js/script.js"></script>
</body>
</html>