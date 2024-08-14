<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

        <!-- Font awesome CDN  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Custom Css file link  -->
        <link rel="stylesheet" href="Css/style.css">

        <!-- Aos library link  -->
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<body>
    <!-- header section start  -->
        <section class="header section">
            <a href="home.php" class="logo">Yoga Studio</a>
            <nav class="navbar">
                <li><a href="home.php">Home</a></li>
                <li><a href="about.php">About us</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle">Classes</a>
                    <ul class="dropdown-menu">
                        <li><a href="hours100.php">100 Yoga Teacher Training Course</a></li>
                        <li><a href="hours200.php">200 Yoga Teacher Training Course</a></li>
                   </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle">Schedule</a>
                    <ul class="dropdown-menu dropdown-width">
                        <li><a href="schedule100.php">100 YTTC Yoga Classes</a></li>
                        <li><a href="schedule200.php">200 YTTC Yoga Classes</a></li>
                    </ul>
                </li>
                <li><a href="contact.php">Contact</a></li>
                <li class="dropdown user-btn">
                <a href="#" class="dropdown-toggle"><i class="fa fa-user"></i></a>
                <ul class="dropdown-menu" style="width:110px">
                    <li><a href="admin.php">Admin</a></li>
                    <li><a href="user-login.php">Log-in</a></li>
                    <li><a href="logout.php">Log-out</a></li>
                </ul>
            </li>
            </nav>
            <div id="menu-btn" class="fa fa-bars"></div>
        </section>
     <!-- header section end  -->

     <div class="heading">
        <img src="Images/contact-us.jpg" alt="">
        <h1>Contact us</h1>
        <p>
        <a href="home.php">Home</a>/Contact us</p>
     </div>


    <!-- contact-form section start  -->
     <section class="contact-container bg-color">
        <div class="form">
            <div class="contact-info">
                <h3 class="title">Let's get in touch</h3>
                <p class="text">Welcome to Serenity Yoga Studio, where we offer a peaceful and serene environment for you to practice yoga. Our studio is equipped with state-of-the-art equipment and amenities, including showers, lockers, and free Wi-Fi. Our experienced instructors will guide you through a variety of classes, from gentle and restorative to challenging and dynamic. From beginners to advanced practitioners, we have a class that suits your needs. Join us for a class today and experience the benefits of yoga for yourself!</p>
                <div class=" info">
                    <a href="#"> <i class="fa fa-phone"></i> +123-456-7890 </a>
                    <a href="#"> <i class="fa fa-map-marker"></i> 34 Street Name, City Name Here, United States </a>
                    <a href="#"> <i class="fa fa-envelope"></i>info@yourdomain.com </a>
                </div>
            </div>
            <div class="contact-form">
                <span class="circle one"></span>
                <span class="circle two"></span>

                <form action="home.php">
                    <h3 class="title">Contact us</h3>
                    <div class="input-container">
                        <input type="text" name="name" class="input">
                        <label for="">Username</label>
                        <span>Username</span>
                    </div>
                    <div class="input-container">
                        <input type="email" name="email" class="input">
                        <label for="">Email</label>
                        <span>Email</span>
                    </div>
                    <div class="input-container">
                        <input type="tel" name="phone" class="input">
                        <label for="">Phone</label>
                        <span>Phone</span>
                    </div>
                    <div class="input-container textarea">
                       <textarea name="message" class="input"></textarea>
                        <label for="">Leave Comment</label>
                        <span>Leave Comment</span>
                    </div>
                    <input type="submit" value="Send" class="form-btn">
                </form>
            </div>
        </div>
     </section>
     <!-- contact-form section end  -->

    <!-- Map section start  -->
     <section class="map" data-aos="fade-right">
        <iframe style="height:100%;width:100%;border:0;" frameborder="0"src="https://www.google.com/maps/embed/v1/place?q=Trinetra+yogashala&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe>
     </section>
     <!-- Map section end  -->
    <!-- footer section start  -->
        <section class="footer-sec">
         <div class="box-container">
            <div class="box">
                <h3>Quick Links</h3>
                <a href="home.php"> <i class="fa fa-angle-right"></i> Home</a>
                <a href="about.php"> <i class="fa fa-angle-right"></i> About Us</a>
                <a href="hours100.php"> <i class="fa fa-angle-right"></i> 100 hours YTTC classes</a>
                <a href="hours100.php"> <i class="fa fa-angle-right"></i> 200 hours YTTC classes</a>
                <a href="schedule100.php"> <i class="fa fa-angle-right"></i> 100 hours YTTC schedule</a>
                <a href="schedule200.php"> <i class="fa fa-angle-right"></i> 200 hours YTTC schedule</a>
            </div>
            <div class="box">
                <h3>Extra Links</h3>
                <a href="#"> <i class="fa fa-angle-right"></i>FAQs</a>
                <a href="#"> <i class="fa fa-angle-right"></i>Privacy policy</a>
                <a href="#"> <i class="fa fa-angle-right"></i>Terms of use</a>
            </div>
            <div class="box">
                <h3>Contact info</h3>
                <a href="#"> <i class="fa fa-phone"></i> +123-456-7890 </a>
                <a href="#"> <i class="fa fa-map-marker"></i> 34 Street Name, City Name Here, United States </a>
                <a href="#"> <i class="fa fa-envelope"></i>info@yourdomain.com </a>

            </div>
            <div class="box">
                <h3>Follow us</h3>
                <a href=""><i class="fa fa-facebook"></i>facebook</a>
                <a href=""><i class="fa fa-twitter"></i>twitter</a>
                <a href=""><i class="fa fa-instagram"></i>instagram</a>
                <a href=""><i class="fa fa-linkedin"></i>linkedin</a>
            </div>
        </div>
        <div class="credit">
           &copy; copyright &copy;2024 All rights reserved | This templete is made &#9825; by <span class="credit-name">Arpita Tandon</span>
        </div>
      </section>
      <!-- footer section end  -->


    <!-- Custom Js file link  -->
     <script>
        let menu = document.querySelector('#menu-btn');
        let navbar = document.querySelector('.header .navbar');

        menu.onclick = () =>{
            menu.classList.toggle('fa-times');
            menu.classList.toggle('fa-bars');
            navbar.classList.toggle('active');
        }

        window.onscroll = () =>{
            menu.classList.remove('fa-times');
            navbar.classList.remove('active');
        }
        
        const inputs = document.querySelectorAll(".input")

        function focusFunc(){
          let parent = this.parentNode;
          parent.classList.add("focus");
        }

        function blurFunc(){
          let parent = this.parentNode;
          if(this.value == ""){
            parent.classList.remove("focus");
          }
        }

        inputs.forEach((input) =>{
          input.addEventListener('focus', focusFunc);
          input.addEventListener('blur', blurFunc);
          
        })
     </script>
     <script src="js/script.js"></script>
     <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
     <script>
        AOS.init();
     </script>
</body>
</html>