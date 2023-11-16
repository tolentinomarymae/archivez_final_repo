<template>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    
    <body data-spy="scroll" data-target=".fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        
        <!-- Image Logo -->
        <a class="navbar-brand logo-image" href="index.html"><img src="./landingpagejs/images/archivez3.png" alt="alternative"></a>
        
        <!-- Mobile Menu Toggle Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation" style="color: #000;">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-times"></span>
        </button>
        <!-- end of mobile menu toggle button -->

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#header">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#services">Key Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#testimonials">How to Use</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#contact">Contact</a>

                </li>
                

            </ul>
            
        </div>
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->


    <!-- Header -->
    <header id="header" class="header" >
        <div class="header-content">
            <div class="container" style="background-color: transparent; width: 500vw; height: 50vh; margin-bottom: 11vh;" >
                <div class="row" >
                    <div class="col-lg-6"  >
                        <div class="text-container">
                        
                            <h1 style="font-size: 6vw"><span class="turquoise">ARCHIVEZ</span></h1><br>
                            <h6>Where ideas thrive and knowldge resides, your <span class="turquoise">research journey </span>begins here!</h6>
                           
                            <div class="dropdown">
                                <button class="dropbtn">Log In</button>
                                <div class="dropdown-content">
                                    <router-link to="/adminlogin">Admin</router-link>
                                    <router-link to="/instructorlogin">Instructor</router-link>
                                    <router-link to="/studentlogin">Student</router-link>
                                </div>
                                </div>
                        </div> <!-- end of text-container -->
                    </div> <!-- end of col -->
                    <div class="col-lg-6">
                        <div class="image-container">
                            <img class="img-fluid svg-image" src="./landingpagejs/images/details-2-office-team-work.svg" alt="alternative">
                        </div> <!-- end of image-container -->
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of header-content -->
    </header> <!-- end of header -->
    <!-- end of header -->





    <!-- Services -->
    <div id="services" class="cards-1">
        <div class="container" style="background-color: transparent; width: 500vw; margin-top: 12vh; height: 100%; "  >
            <div class="row">
                <div class="col-lg-12">
                    <h2>Key Features of  <span class="turquoise">ARCHIVEZ</span></h2>
                    <p class="p-heading p-large">We empower students, teachers, and research instructors to collaborate and excel in their academic journey</p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">

                    <!-- Card -->
                    <div class="card">
                        <img class="card-image" src="./landingpagejs/images/icon1.svg" alt="alternative">
                        <div class="card-body">
                            <h4 class="card-title">Effortless Document Submission</h4>
                            <p>Simplify your research paper submission process with our user-friendly system</p>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <img class="card-image" src="./landingpagejs/images/icon2.svg" alt="alternative">
                        <div class="card-body">
                            <h4 class="card-title">Real-Time Evaluation</h4>
                            <p>Receive instant feedback from research instructors and improve your research work</p>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <img class="card-image" src="./landingpagejs/images/icon3.svg" alt="alternative">
                        <div class="card-body">
                            <h4 class="card-title">Knowledge Preservation</h4>
                            <p>Preserve valuable research papers and scholarly works, ensuring the longevity of academic knowledge</p>
                        </div>
                    </div>
                    <!-- end of card -->
                    
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-1 -->
    <!-- end of services -->


    <!-- Details 1 -->
    <div id="about" class="basic-1" >
        <div class="container" style="background-color: transparent; width: 500vw; margin-top: 20vh; height: 100%; margin-bottom: 20vh; ">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <h2>About <span class="turquoise">ARCHIVEZ</span></h2>
                        <h6>ARCHIVEZ is your dedicated platform for streamlined research paper management.
                            We're committed to academic excellence, making research submission and collaboration effortless for students, teachers, and research instructors. 
                            Our mission is to preserve knowledge, maintain academic integrity, and foster a vibrant research community. 
                            Join us in shaping the future of academic collaboration.</h6><br><br><br> <br>                       
                            
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <div class="image-container">
                        <img class="img-fluid svg-image" src="./landingpagejs/images/details-1-office-worker.svg" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
    <!-- end of details 1 -->




    <!-- Testimonials -->
    <div id="testimonials" class="slider-2">
        <div class="container" style="width: 500vw; margin-top: 15vh; height: 100%; margin-bottom: 20vh; ">
            <div class="row" >
                <div class="col-lg-6">
                    <div class="image-container">
                        <img class="img-fluid svg-image" src="./landingpagejs/images/testimonials-2-men-talking.svg" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <h2>Instructions</h2>

                    <!-- Card Slider -->
                    <div class="slider-container">
                        <div class="swiper-container card-slider">
                            <div class="swiper-wrapper">
                                
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <div class="card-body">
                                            <p class="testimonial-author">Ongoing Learning and Support</p>
                                            <p class="testimonial-text">1. Access resources, tutorials, and guides on proper research methodologies, citation practices, and plagiarism awareness in the Resource Library. <br>
                            2. Contact our support team for any assistance or inquiries you may have.</p>
                                            <br><br><br>
                                            <a class="btn-solid-reg page-scroll" href="#">Documentation</a>
                                        </div>
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
        
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <div class="card-body">
                                            <p class="testimonial-author">User Registration and Login</p>
                                            <p class="testimonial-text">1. Visit the Archivez website and click on the "Register" button. <br>
                                                                        2. Upload your research paper or thesis in your preferred format (e.g., PDF, Word).<br>
                                                                        3. Click "Submit" to upload your work.</p>
                                            <br><br><br>
                                            <a class="btn-solid-reg page-scroll" href="#">Documentation</a>
                                        </div>
                                    </div>        
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
        
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                        <div class="card-body">
                                            <p class="testimonial-author">Document Submission</p>
                                            <p class="testimonial-text">1. Fill in the document details, including the title, authors, keywords, and publication date. <br>
                                                                        2. Fill in your details, choose your role (student, teacher, or research instructor), and create a secure password. <br>
                                                                        3. Once registered, log in using your credentials.</p>
                                            <br><br>
                                            <a class="btn-solid-reg page-scroll" href="#">Documentation</a>
                                        </div>
                                    </div>        
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
                               
                            </div> <!-- end of swiper-wrapper -->
        
                            <!-- Add Arrows -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <!-- end of add arrows -->
        
                        </div> <!-- end of swiper-container -->
                    </div> <!-- end of slider-container -->
                    <!-- end of card slider -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of slider-2 -->
    <!-- end of testimonials -->

    <!-- Contact -->
    <div id="contact" class="form-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Contact Information</h2>
                    <ul class="list-unstyled li-space-lg">
                        <li class="address">Don't hesitate to give us a call or send us a contact form message</li>
                        <li><i class="fas fa-map-marker-alt"></i>Mindoro State University Calapan City Campus</li>
                        <li><i class="fas fa-phone"></i><a class="turquoise" href="tel:003024630820">+639 2725 96258</a></li>
                        <li><i class="fas fa-envelope"></i><a class="turquoise" href="mailto:office@evolo.com">archivez@gmail.com</a></li>
                    </ul>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="map-responsive">
                        <iframe src="hgle.com/maps/embed?pb=!1m18!1m12!1m3!1d3881.3989617203433!2d121.1596461118314!3d13.387604805564546!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33bceed6e29309c7%3A0x963e2dc010195599!2sMindoro%20State%20University%2C%20Calapan%20City%20Campus!5e0!3m2!1sen!2sph!4v1698821453409!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                    
                    </div>
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    
                    <!-- Contact Form -->
                    <form id="contactForm" data-toggle="validator" data-focus="false">
                        <div class="form-group">
                            <input type="text" class="form-control-input" id="cname" required>
                            <label class="label-control" for="cname">Name</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control-input" id="cemail" required>
                            <label class="label-control" for="cemail">Email</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control-textarea" id="cmessage" required></textarea>
                            <label class="label-control" for="cmessage">Your message</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group checkbox">
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control-submit-button">SUBMIT MESSAGE</button>
                        </div>
                        <div class="form-message">
                            <div id="cmsgSubmit" class="h3 text-center hidden"></div>
                        </div>
                    </form>
                    <!-- end of contact form -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of form-2 -->
    <!-- end of contact -->


    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="footer-col">
                        <h4>About ARCHIVEZ</h4>
                        <p>A Multiplatform Research Repository Management System with Real-Time Review and Evaluation</p>
                    </div>
                </div> <!-- end of col -->
                <div class="col-md-4">
                    <div class="footer-col middle">
                        <h4>Important Links</h4>
                        <ul class="list-unstyled li-space-lg">
                            <li><a href="#">Support & FAQs</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                                <li><a href="#">Feedback & Inquiries</a></li>
                                <li><a href="#">Join Our Team</a></li>
                        </ul>
                    </div>
                </div> <!-- end of col -->
                <div class="col-md-4">
                    <div class="footer-col last">
                        <h4>Social Media</h4>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-facebook-f fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-twitter fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-google-plus-g fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-instagram fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-linkedin-in fa-stack-1x"></i>
                            </a>
                        </span>
                    </div> 
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of footer -->  
    <!-- end of footer --></body>
    </html>
</template>

<style scoped>
.navbar-toggler{
    color: black;
}
.navbar-nav a.nav-link {
  color: black; 
  text-decoration: none;
  padding: 10px 20px;
  transition: background-color 0.3s;
}

.navbar-nav a.nav-link:hover {
  color: turquoise; 
  
}

.navbar-nav a.nav-link.current {
  font-weight: bold; 
  color: turquoise;
}

    .dropdown {
      position: relative;
      display: inline-block;
    }

    .dropbtn {
      background-color: #00bfd8;
      color: white;
      padding: 10px;
      padding-left: 20px;
      padding-right: 20px;
      border: none;
      border-radius: 10px;
    }

    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f9f9f9;
      min-width: 160px;
      z-index: 1;
      
    }

    .dropdown-content a {
      padding: 10px;
      text-decoration: none;
      display: block;
      color: #333;
    }

    .dropdown-content a:hover {
      background-color: #ddd;
    }

    .dropdown:hover .dropdown-content {
      display: block;
    }


.svg-image {
  max-width: 100%; 
  height: auto;
}
@media (max-width: 768px) {
  .navbar-nav a.nav-link {
    padding: 5px 10px; 
  }

  .navbar-toggler {
    color: black;
  }

  .dropdown-content {
    min-width: 100px; 
  }
}

</style>