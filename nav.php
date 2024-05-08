<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!--favicon-->
      <link rel="icon" type="image/x-icon" href="..//images/Screenshot_2024-04-29_072124-removebg-preview.png">

<!--bostrap-css--->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="style3.css">
    <link rel="stylesheet" href="style4.css">
    <link rel="stylesheet" href="style5.css"> 
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href='https://fonts.googleapis.com/css?family=Galada' rel='stylesheet'>

    <!-- link-start -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <!-- link-End -->
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cedarville+Cursive&display=swap" rel="stylesheet">
<!-- footer-fonts-style-->
<link href='https://fonts.googleapis.com/css?family=Cedarville Cursive' rel='stylesheet'>

</head>
<body>

<!--Nabar-start-->


    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
          <a class="navbar-brand"  href="#">PetsCare</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Logo</h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav  pe-3 ms-auto">
                <li class="nav-item">
                  <a class="nav-link mx-lg-2 active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link mx-lg-2" href="#">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link mx-lg-2" href="#">Service</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link mx-lg-2" href="#">portfo</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link mx-lg-2" href="#">contact</a>
                </li>
              </ul>
        <a href="shopping cart with user login/index.php" class="nav-cart">
            <i class="fa-solid fa-cart-shopping"></i>
           
               <a href="shopping cart with user login/login.php" class="nav-user">
                <i class="fa-solid fa-user"></i>
            </a>
  
      </nav>
    </header>
  
      <br>
      <br>
      <br>
      <br>
      <br>
     

<div class="slideshow-container">

  <div class="mySlides fade">
    <div class="numbertext"></div>
    <img src="pet1.jpg" style="width:100%">
  </div>
  
  <div class="mySlides fade">
    <div class="numbertext"></div>
    <img src="pet2.jpg" style="width:100%">
  </div>
  
  <div class="mySlides fade">
    <div class="numbertext"></div>
    <img src="pets3.jpg" style="width:100%">
  </div>

  
   

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>
  
  <br>
   <!-- Next and previous buttons -->
   <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
   <a class="next" onclick="plusSlides(1)">&#10095;</a>
 </div>
 <br>
  

  
  <script>
  let slideIndex = 0;
  showSlides();
  
  function showSlides() {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 1600); // Change image every 2 seconds
  }
  </script>
  <br>
  <br>
 <section>
  
            <div class = "image">
               <img src="puppy-png.jpg">
            </div>

            <div class = "content">
                <h2>About Us</h2>
                <span><!-- line here --></span>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nobis aspernatur voluptas inventore ab voluptates nostrum minus illo laborum harum laudantium earum ut, temporibus fugiat sequi explicabo facilis unde quos corporis!</p>
              
            
        </section><br><br>

        <!--About-us-->


<h2 style="text-align:center">Our Team</h2>

<div class="row">
  
  <div class="column">
    <div class="card">
      <img src="young-bearded-man-with-striped-shirt.jpg" alt="Jane" style="width:100%">
      <div class="container">
        <h2>Jane Doe</h2>
        <p class="title">CEO & Founder</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>jane@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="young-beautiful-woman-pink-warm-sweater-natural-look-smiling-portrait-isolated-long-hair.jpg" alt="Mike" style="width:100%">
      <div class="container">
        <h2>Mike Ross</h2>
        <p class="title">Art Director</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>mike@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="handsome-young-guy-with-glasses-posing.jpg" alt="John" style="width:100%">
      <div class="container">
        <h2>John Doe</h2>
        <p class="title">Designer</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>john@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>
<br>
<br>
<!--contact-us-start-->
<section class="home-contact">
        <div class="h-contact-text">
            <span>Support</span>
            <h3>support us for more information</h3>
            <a href="mailto:example@gmail.com">Contact Us</a>
        </div>
        <img class="contact-bg-right" src="adorable-illustration-kittens-playing-forest-generative-ai.png" />
        <img class="contact-bg-left" src="cat.jpg">
    </section>

    <br>
    <br>
    <!--contact-us-Endt-->

    <!--footer-start-->
    <footer>
        </div>
        <div class="footer-container">
            <div class="footer-company-box">
                <a href="mini.html" class="footer-logo">Pets_Care</a><br>
                <p>We will provide a good qulity of product and we will see how the people will like and thanks for purchasing a product.</p>
                <div class="footer-social">
                    <a href="https://www.youtube.com/redirect?event=channel_description&redir_token=QUFFLUhqbFpLNDl6cFpLbjY1MTN0TklTcXl1dFZaNmo1d3xBQ3Jtc0ttU2YzM3RVam9DQi1jem1qMGJXZEVFQmVVTlNkVlZTXzBackUyc0JSb1FTYkdVaTQ4OHVmUUk3Q3EweUY0N1dSODR4bmstSGt2LV9aekJkUjJCVGswYW81YWtOSkVyNGQ5V3VUU09JSHFNZWZWODl2QQ&q=http%3A%2F%2Fwww.facebook.com%2Ftseriesmusic"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="https://www.youtube.com/redirect?event=channel_description&redir_token=QUFFLUhqbVpsNXpOa09DS3BLRW4yeUxwNVMwZm1mbmZnQXxBQ3Jtc0ttODRCcGxXYWs1a2dWRG82LVVuZEdBdFY0VnU4YlRsdE1RcEhYaHdYSFVYV184Z3A3VE83X3Mza2xRT1JIb0VlMkVpUHp4STYyYTgwcDFXUExBXzF2VGIyZF82N2ZXMzlxQTNYSUZlT0FyVFQ0SzZpOA&q=https%3A%2F%2Finstagram.com%2Ftseries.official"><i class="fa-brands fa-instagram"></i></a>
                    <a href="https://www.youtube.com/playlist?list=PL095CA373D64B70C0"><i class="fa-brands fa-youtube"></i></a>
                    <a href="https://www.youtube.com/redirect?event=channel_description&redir_token=QUFFLUhqblNHT09XVGU1NGotTFlfcmg1NHBnTHRnRnJUQXxBQ3Jtc0tuQWlfU0pWaXgxZHhHQ190U2hXTk9hMFltVTdueWtLM0xFVW5aS3VlcS14T3lvbmNHSFNVa2E0ZEpLZ2l6XzJYTTBMNW1PWXE3RGtzcG5GZFdxU3ZaQzAxdENVaGJ2UDBxZ0xBZm5zX1hsc2FaQm5oWQ&q=http%3A%2F%2Fwww.twitter.com%2Ftseries"><i class="fa-brands fa-twitter"></i></a>
                </div>
            </div>
            <div class="footer-link-box">
                <strong>Main Link's</strong>
                <ul>
                    <li><a href="mini.html">Home</a></li>
                    <li><a href="product_page.html">Product</a></li>
                    <li><a href="mailto:poojarydhanush769@gmail.com">Contact Us</li>
                    <li><a href="index.html">Services</a></li>
                    <li><a href="hot_products.html">Portfolio</a></li>
                </ul>
            </div>
            <div class="footer-link-box">
                <strong>External Link's</strong>
                <ul>
                    <li><a href="hot_products.html">Our Product's</a></li>
                    <li><a href="index.html">Privacy Policy</a></li>
                    <li><a href="mini.html">Disclaimer</a></li>
                    <li><a href="mini.html">Trem's and Condition's</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <span class="copyright">&#169; Copyright 2024  -Sakshith_k</span>
        </div>
    </footer>
    <br>
     <!--footer-Emd-->



  <script src="script.js"></script>
    <!--Bostrap-js-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>   

</body>
</html>