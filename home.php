<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

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

    <!-- slider start  -->
     <section class="slider-sec">
        <img src="Images/carousel1.jpg" alt="" id="image">
        <div class="slider-text">
            <h1 id="text-change">Health Is Wealth</h1>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quam, odio.</p>
        </div>
     </section>
     <!-- slider end   -->

    <!-- about section start  -->
     <section class="welcome">
        <div class="images-container" data-aos="fade-in" data-aos-duration="100">
            <img src="Images/sec1-1.jpg" alt="Image1" class="img1">
            <div class="img-sub-box">
                <img src="Images/sec1-2.jpg" alt="Image2">
                <img src="Images/sec1-3.jpg" alt="Image3">
            </div>
        </div>
        <div class="text-container" data-aos="fade-in">
            <h3>Welcome to Yoga Studio</h3>
            <p>“What hurts today makes you stronger tomorrow.”</p>
            <p>We are offering internationally certified 200 Hour Yoga Teacher Training in Rishikesh and 300 hour yoga teacher training in Rishikesh, India - Join us to have such life-transforming experience in The world capital of Yoga in Rishikesh.</p>
            <p>Zogin is a great place for those who are in search of the ancient practice and true essence of yoga, meditation, health, peace and learning the art of creating a class to teach safely. We are passionate about adjustments and mainly focus on the alignment of the asanas.</p>
            <a href="about.php" class="btn">More about us</a>
        </div>
     </section>
     <!-- about section end  -->

    <!-- Aspects section start -->
      <section class="services bg-color" data-aos="slide-up" data-aos-duration="200">
        <h1 class="heading-title">Aspects of Yoga</h1>
        <p class="para-style"> Yoga is the evolution of the mind consciously and practice of Yama, Niyama, Asana, <br> Pranayama, Mantra, Meditation, Mudras, etc</p>
        <div class="box-container">
            <div class="box">
                <img src="Images/services-1.png.webp" alt="">
                <h3>Asana</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error id cum, eligendi accusamus dolores libero?</p>
            </div>
            <div class="box">
                <img src="Images/services-2.png.webp" alt="">
                <h3>Meditation</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error id cum, eligendi accusamus dolores libero?</p>
            </div>
            <div class="box">
                <img src="Images/services-3.png.webp" alt="">
                <h3>Mudra</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error id cum, eligendi accusamus dolores libero?</p>
            </div>
            <div class="box">
                <img src="Images/services-4.png.webp" alt="">
                <h3>Bandhas</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error id cum, eligendi accusamus dolores libero?</p>
            </div>
            <div class="box">
                <img src="Images/services-5.png.webp" alt="">
                <h3>Philosophy</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error id cum, eligendi accusamus dolores libero?</p>
            </div>
            <div class="box">
                <img src="Images/services-6.png.webp" alt="">
                <h3>Pranayama</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error id cum, eligendi accusamus dolores libero?</p>
            </div>
        </div>
      </section>
      <!-- Aspects section end  -->
    
    <!-- video-content section   -->
     <section class="video-content bg-color" data-aos="fade-right" data-aos-duration="400">
        <div class="video-container-box">
            <div class="video-img-box" style="background:url(Images/video-img1.jpg) no-repeat">
                </div>
                <div class="video-btn2">
                    <div class="play"></div>
                </div>
                <div class="clip">
                    <video controls>
                        <source src="videos/video2.mp4" type="video/mp4">
                    </video>
                    <b class="close-icon">
                        <i class="fa fa-times"></i>
                    </b>
                </div>
            <div class="container-text">
                <h3>Watch Video</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, quo officia sapiente veniam in velit?</p>
                <a href="hours100.php">Explore More</a>
            </div>
        </div>
      </section>
     <!-- video-content end  -->

    <!-- courses section start  -->
        <section class="course-card section bg-color">
            <h1 class="heading-title">Our Courses</h1>
            <p class="para-style">Rishikesh is blessed with this Yogic culture and is a perfect setting to immerse oneself in it. <br> Our Yoga Teaching provides students with a lot of interactive sessions </p>    
            <div class="box-container">
                <div class="box-container" data-aos="fade-left" data-aos-duration="300">
                    <div class="box">
                        <div class="image-box">
                            <img src="Images/beginners.jpg" alt="">
                        </div>
                        <div class="content">
                            <h3>Beginners Yoga Retreats</h3>
                            <p>Retreat Fee: $360 Or ₹25000</p>
                            <p>Basic Hatha Yoga classes</p>
                            <p>Duration: 3 Days</p>
                            <p>Certification: Beginner Yoga Retreat</p>
                            <div class="content-btn">
                                <a href="Enroll-form.php" class="card-btn">Enroll Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <div class="image-box">
                            <img src="Images/hours100.jpg" alt="" >
                        </div>
                        <div class="content">
                            <h3>100 Hour Yoga Teacher Training in Rishikesh</h3>
                            <p>Course Fee: INR 29000 / 350 USD</p>
                            <p>Yoga Style: Hatha Yoga</p>
                            <p>Duration: 7 Days</p>
                            <p>Certification: RYT 100</p>
                            <div class="content-btn">
                                <a href="Enroll-form.php" class="card-btn">Enroll Now</a>
                            </div>                       
                        </div>
                    </div>
                    <div class="box">
                        <div class="image-box">
                            <img src="Images/hours200.jpg" alt="">
                        </div>
                        <div class="content">
                            <h3>200 Hour Yoga Teacher Training in Rishikesh</h3>
                            <p>Course Fee: INR 50500 / $610 USD</p>
                            <p>Yoga Style: Hatha Yoga</p>
                            <p>Duration: 14 Days</p>
                            <p>Certification: RYT 200</p>
                            <div class="content-btn">
                                <a href="Enroll-form.php" class="card-btn">Enroll Now</a>
                            </div>                       
                        </div>
                    </div>
                </div>
            </div>
      </section>
      <!-- courses section end  -->


    <!-- gallery section start  -->
     <div class="gallery-wrapper" data-aos="slide-up" data-aos-duration="100">
        <h3 class="heading-title">Our Gallery</h3>
        <p class="para-style">This is the beautiful yogi and yoginis that have shared their journey and growth with
            <br> us. Take a look!</p>
        <div class="gallery-container">
            <div>
                <img src="Images/gallery1.jpg" alt="">
            </div>
            <div>
                <img src="Images/gallery2.jpg" alt="">
            </div>
            <div>
                <img src="Images/gallery3.jpg" alt="">
            </div>
            <div>
                <img src="Images/gallery4.jpg" alt="">
            </div>
            <div>
               <img src="Images/gallery5.jpg" alt="">
            </div>
            <div>
                <img src="Images/gallery6.jpg" alt="">
            </div>
            <div>
                <img src="Images/gallery7.jpg" alt="">
            </div>
            <div>
                <img src="Images/gallery8.jpg" alt="">
            </div>
        </div>
     </div>
     <!-- gallery section end  -->

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

        let videoBtn = document.querySelector('.video-btn2');
        let clip = document.querySelector('.clip');
        let close = document.querySelector('.close-icon');
        let video = document.querySelector('video');
        videoBtn.onclick = () => {
            videoBtn.classList.add('active');
            clip.classList.add('active');
            video.play();
            video.currentTime = 0;
        }
        close.onclick = () => {
            videoBtn.classList.remove('active');
            clip.classList.remove('active');
            video.pause();
        }

        const imageContainer = document.getElementById('image');
        let imageArray = ['Images/carousel1.jpg','Images/carousel2.jpg','Images/carousel3.jpg']; // array of image URLs
        let currentIndex1 = 0;
        
        setInterval(() => {
          imageContainer.classList.remove('fade-in-active');
          imageContainer.classList.add('fade-in');
          
          setTimeout(() => {
            imageContainer.src = imageArray[currentIndex1];
            imageContainer.classList.remove('fade-in');
            imageContainer.classList.add('fade-in-active');
            currentIndex1 = (currentIndex1 + 1) % imageArray.length; // cycle through the array
          }, 500); // wait for fade-out to complete
        }, 5000); // cha
        
        
        const textContainer = document.getElementById('text-change');
        let textArray = ["Health Is Wealth","Join Yoga Studio","Get Fit, Feel Happy"]; // array of texts to cycle through
        let currentIndex2 = 0;
        
        setInterval(() => {
          textContainer.textContent = textArray[currentIndex2];
          currentIndex2 = (currentIndex2 + 1) % textArray.length; // cycle through the array
        }, 5000); // change text every 3 seconds
     </script>
     <script src="js/script.js"></script>
     <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
     <script>
        AOS.init();
     </script>
</body>
</html>