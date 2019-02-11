<?php
if(isset($_POST['submit'])){
    $to = "hello@alishafiei.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $topic = $_POST['subject'];
    $subject = "Ali Shafiei Website Query";
    $subject2 = $topic." with Ali Shafiei";
    $message = $name . " wrote the following regarding $topic:" . "\n\n" . $_POST['message'];
    $message2 = "Dear ". $name . ",\n\n" . "Your message was received, I will contact you shortly."."\n\n"."Best regards,"."\n"."Ali Shafiei";

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    ?>
    <td width='80' style="text-align:center;">
      <?php
    echo "Thank you, ". $name . ". Your message was received, I will contact you shortly.";
    ?>
  </td>
<?php } ?>



<!DOCTYPE html>
<html lang="en">

  <head>

    <!-- Meta Tag -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- SEO -->
    <meta name="description" content="Web Development & Design, Virtual Reality Development, Game & Application Development.">
    <meta name="author" content="alishafiei">
    <meta name="url" content="http://www.alishafiei.com">
    <meta name="copyright" content="company name">
    <meta name="robots" content="index,follow">


    <title>Ali Shafiei</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon/favicon.ico">
    <link rel="apple-touch-icon" sizes="144x144" type="image/x-icon" href="images/favicon/apple-touch-icon.png">

    <!-- All CSS Plugins -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/plugin.css">

    <!-- Main CSS Stylesheet -->
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!-- Google Web Fonts  -->

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700">


    <!-- HTML5 shiv and Respond.js support IE8 or Older for HTML5 elements and media queries -->
    <!--[if lt IE 9]>
	   <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	   <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-120295849-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-120295849-1');
    </script>


 </head>

  <body>



	<!-- Preloader Start -->
    <div id="preloader">
	  <div class="loader"></div>
    </div>
    <!-- Preloader End -->


    <!-- Home & Menu Section Start -->
    <header id="home" class="home-section">

        <div class="header-top-area">
            <div class="container">
                <div class="row">

                    <div class="col-sm-3">
                        <div class="logo">
                            <a>Ali Shafiei</a>
                        </div>
                    </div>

                    <div class="col-sm-9">
                        <div class="navigation-menu">
                            <div class="navbar">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <div class="navbar-collapse collapse">
                                    <ul class="nav navbar-nav navbar-right">
                                        <li class="active"><a class="smoth-scroll" href="#home">Home <div class="ripple-wrapper"></div></a>
                                        </li>
                                        <li><a class="smoth-scroll" href="#about">About</a>
                                        </li>
                                        <li><a class="smoth-scroll" href="#portfolio">Portfolio</a>
                                        </li>
                                        <li><a class="smoth-scroll" href="#testimonials">Testimonials</a>
                                        </li>
                                        <li><a class="smoth-scroll" href="#services">Services</a>
                                        </li>
                                        <li><a class="smoth-scroll" href="#contact">Contact</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="home-section-background" data-stellar-background-ratio="0.6">
            <div class="display-table">
                <div class="display-table-cell">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <div class="header-text">
                                    <p>Hi, this is Ali.</p>
                                    <h2><span class="typing"></span></h2>

                                    <div class="margin-top-60">
                          <a class="button button-style button-style-icon fa fa-long-arrow-right smoth-scroll" href="#portfolio">View Portfolio</a>
                                  </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>
    <!-- Home & Menu Section End-->




    <!-- About Start -->
    <section id="about" class="about-section">
         <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="about-me section-space-padding">
                  <h2>a little about me.</h2>
                  <p>I am a software developer based in Dubai, UAE. I make applications, cook websites, serve video games, and build something out of nothing. During the past 5 years, I've built up an extensive skill-set in Virtual and Augmented reality development, working with small and big companies to deliver projects that were the first of their kind.
                    I am confident that I can help you build out your project, whether thats a website, an application, or a virtual/augmented reality platform. Lets get coding!</p>
                 </div>
              </div>
          </div>
       </section>
       <!-- About End -->


    <!-- Portfolio Start -->
    <section id="portfolio" class="portfolio section-space-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title">
                        <h2>My Portfolio.</h2>
                    </div>
                </div>
            </div>

            <div class="portfolio-inner">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="item">
                            <a href="images/portfolio/1.jpg" class="portfolio-popup" title="Somnium Space (VR Social Game)">
                                <img src="images/portfolio/1.jpg" alt="">
                            </a>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="item">
                            <a href="images/portfolio/2.jpg" class="portfolio-popup" title="Freefall (VR Sports Game)">
                                <img src="images/portfolio/2.jpg" alt="">
                            </a>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="item">
                            <a href="images/portfolio/3.jpg" class="portfolio-popup" title="Cloudpocalypse (Low-Poli Game)">
                                <img src="images/portfolio/3.jpg" alt="">
                            </a>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="item">
                            <a href="images/portfolio/4.jpg" class="portfolio-popup" title="VR Interior Design Platform">
                                <img src="images/portfolio/4.jpg" alt="">
                            </a>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="item">
                            <a href="images/portfolio/5.jpg" class="portfolio-popup" title="www.shiny.ae (Website)">
                                <img src="images/portfolio/5.jpg" alt="">
                            </a>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="item">
                            <a href="images/portfolio/6.jpg" class="portfolio-popup"  title="www.clio-jewellery.com (Website)">
                                <img src="images/portfolio/6.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center margin-top-50">
          <a class="button button-style button-style-dark button-style-icon fa fa-long-arrow-right smoth-scroll" href="#contact">Let's Discuss</a>
            </div>

     </section>
    <!-- Portfolio End -->



     <!-- Testimonial Start -->
     <section id="testimonials" class="testimonial-section section-space-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title">
                        <h2>Testimonials.</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="testimonial-carousel-list margin-top-20">

                  <div class="testimonial-word text-center">
                  <img src="images/testimonial/1.png" class="img-responsive" alt="">
                      <h2>Bijan Akbari</h2>
                      <p>I have worked with Ali on two complex projects and in both cases, the work was done on time, on budget, and with a high degree of professionalism.</p>
                  </div>

                    <div class="testimonial-word text-center">
                    <img src="images/testimonial/2.png" class="img-responsive" alt="">
                        <h2>Shayda Ja.</h2>
                        <p>Ali has done a fantastic job overall. Not only the site is to design, the process of launching was smooth, painless and the maintanence up to date has been great from his end.</p>
                    </div>

                   <div class="testimonial-word text-center">
                    <img src="images/testimonial/3.png" class="img-responsive" alt="">
                        <h2>Amirhossein Ardekani</h2>
                        <p>It has been a real pleasure working with Ali. He has been very professional and very clear in all communications, which I appreciate.</p>
                  </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial End -->

      <!-- statistics -->
      <section class="statistics-section section-space-padding bg-cover text-center" data-stellar-background-ratio="0.3">
         <div class="container">

            <div class="row">
             <div class="statistics-center">  <!-- This code will work at max-width: 767px -->

           <div class="col-md-3 col-sm-6">
            <div class="statistics">
              <div class="statistics-icon"><i class="fa fa-check-square-o color-1"></i>
              </div>
              <div class="statistics-content">
                <h5><span data-count="56" class="statistics-count">56</span></h5><span>Projects Done</span>
              </div>
            </div>
          </div>

          <div class="col-md-3 col-sm-6">
            <div class="statistics">
              <div class="statistics-icon"><i class="fa fa-smile-o color-3"></i>
              </div>
              <div class="statistics-content">
                <h5> <span data-count="48" class="statistics-count">48</span></h5><span>Happy Clients</span>
              </div>
            </div>
          </div>

          <div class="col-md-3 col-sm-6">
            <div class="statistics">
              <div class="statistics-icon"><i class="fa fa-hourglass-start color-5"></i>
              </div>
              <div class="statistics-content">
                <h5><span data-count="1834" class="statistics-count">1834</span></h5><span>Hours of Work</span>
              </div>
            </div>
          </div>

          <div class="col-md-3 col-sm-6">
            <div class="statistics">
              <div class="statistics-icon"><i class="fa fa-coffee color-4"></i>
              </div>
              <div class="statistics-content">
                <h5><span data-count="212" class="statistics-count">212</span></h5><span>Cups of Coffee</span>
              </div>
            </div>
            </div>

           </div>
         </div>
       </div>
    </section>
    <!-- statistics end -->




    <!-- Services Start -->
    <section id="services" class="services-section section-space-padding">
        <div class="container">
           <div class="row">
                <div class="col-sm-12">
                    <div class="section-title">
                        <h2>My Services.</h2>
                    </div>
                </div>
            </div>

            <div class="row">

              <div class="col-md-4 col-sm-6">
        				<div class="services-detail">
        					<i class="fab fa-html5 color-5 fa-3x"></i>
        					<h3>HTML5/CSS3</h3>
        					<hr>
                  <p>Beautiful websites designed using HTML5 and CSS3, along with other tools to give the customer what they need.</p>
        				</div>
        			</div>

              <div class="col-md-4 col-sm-6">
        				<div class="services-detail">
        					<i class="fab fa-php fa-3x color-6"></i>
        					<h3>PHP</h3>
        					<hr>
                  <p>Backend development of your platform, along with handling the necessary databases to get it up and running.</p>
        				</div>
        			</div>

            <div class="col-md-4 col-sm-6">
				<div class="services-detail">
					<i class="fab fa-searchengin fa-3x color-1"></i>
					<h3>SEO</h3>
					<hr>
          <p>Search Eng. Optimization helps your website rank higher in search engines like Google, giving your site more traffic.</p>
				</div>
			</div>

			<div class="col-md-4 col-sm-6">
				<div class="services-detail">
					<i class="fas fa-gamepad fa-3x color-2"></i>
					<h3>Game Development</h3>
					<hr>
          <p>Games are made using Unity and Unreal engines for all platforms including PC, mobile, and console.</p>
				</div>
			</div>

			<div class="col-md-4 col-sm-6">
				<div class="services-detail">
					<i class="fab fa-simplybuilt color-4 fa-3x"></i>
					<h3>VR/AR Development</h3>
					<hr>
					<p>VR and AR development is available for a variety of devices including the VIVE, Oculus and GearVR.</p>
				</div>
			</div>

            <div class="col-md-4 col-sm-6">
				<div class="services-detail">
					<i class="fa fa-support color-3"></i>
					<h3>Full Support</h3>
					<hr>
          <p>All services come with full and thorough support and maintenance for as long as the contract enables.</p>
				</div>
			</div>
            </div>
        </div>
    </section>
    <!-- Services End -->



    <!-- Call to Action Start -->
    <section class="call-to-action section-space-padding text-center">
       <div class="container">
         <div class="row">
           <div class="col-md-12">

             <h2>Are you looking for an online presence for your business?</h2>
             <div class="text-center margin-top-20">
          <a class="button button-style button-style-dark button-style-icon fa fa-long-arrow-right smoth-scroll" href="#contact">Get In Touch</a>
            </div>
            </div>
          </div>
         </div>
       </section>
       <!-- Call to Action End -->




    <!-- Contact Start -->
    <section id="contact" class="contact-us section-space-padding">
       <div class="container">
          <div class="row">
                <div class="col-sm-12">
                    <div class="section-title">
                        <h2>Contact Me.</h2>
                    </div>
                </div>
            </div>


           <div class="text-center margin-top-10 margin-bottom-50">
            <div class="row">

               <div class="col-md-4 col-sm-4">
                <div class="contact-us-detail">
                 <i href="tel:+971507051251" class="fa fa-mobile color-6"></i>
                  <p><a href="tel:+971507051251">+971 50 7051 251</a></p>
                 </div>
                </div>

               <div class="col-md-4 col-sm-4">
                <div class="contact-us-detail">
                 <i href="mailto:hello@alishafiei.com" class="fa fa-mail-reply color-5"></i>
                  <p><a href="mailto:hello@alishafiei.com">hello@alishafiei.com</a></p>
                 </div>
                </div>

               <div class="col-md-4 col-sm-4">
                <div class="contact-us-detail">
                 <i class="fa fa-clock-o color-3"></i>
                  <p>09:00 – 18:00</p>
                 </div>
                </div>

               </div>
              </div>


           <div class="col-md-12">

               <div class="row">
                  <form action="" method="post">

					  <div class="col-sm-6">

						<div class="form-group">
						  <input type="text" name="name" class="form-control" placeholder="Your Name">
						 </div>
                        </div>

                       <div class="col-sm-6">
					    <div class="form-group">
						 <input type="email" name="email" class="form-control" placeholder="Your Email">
						 </div>
                        </div>


                         <div class="col-sm-12">
						  <select name="subject" class="form-group form-control">
							<option value="" selected disabled>Subject</option>
							<option value="Website Design & Development">Website Design & Development</option>
							<option value="Virtual Reality Development">Virtual Reality Development</option>
							<option value="Augmented Reality Development">Augmented Reality Development</option>
              <option value="Application Development">Application Development</option>
							<option value="General Query">General Query</option>
						   </select>
                          </div>

                       <div class="col-sm-12">
					    <div class="textarea-message form-group">
					      <textarea name="message" class="textarea-message form-control" placeholder="Your Message" rows="5"></textarea>
						  </div>
                         </div>


                    <div class="text-center">
		   <button type="submit" class="button button-style button-style-dark button-style-icon fa fa-long-arrow-right text-center" name="submit" value="submit">Submit</button>
	                  </div>

                  </form>

				</div>
               </div>

       </div>

      <div class="margin-top-80">
       <ul class="social-icon">
         <li><a href="https://www.facebook.com/alireza021" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a></li>
         <li><a href="https://instagram.com/alirezashafieii" target="_blank" class="instagram"><i class="fa fa-instagram"></i></a></li>
         <li><a href="https://api.whatsapp.com/send?phone=+971507051251&text=Hi, I am contacting you through your website." target="_blank" class="whatsapp"><i class="fa fa-whatsapp"></i></a></li>
       </ul>
      </div>

     </section>
     <!-- Contact End -->




    <!-- Footer Start -->
    <footer class="footer-section">
        <div class="container">



            <div class="col-md-12 text-center">
               <p>© Copyright 2018 Ali Shafiei.</p>
               </div>


        </div>
    </footer>
    <!-- Footer End -->


    <!-- Back to Top Start -->
    <a href="#" class="scroll-to-top"><i class="fa fa-angle-up"></i></a>
    <!-- Back to Top End -->


    <!-- All Javascript Plugins  -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/plugin.js"></script>

    <!-- Main Javascript File  -->
    <script type="text/javascript" src="js/scripts.js"></script>


  </body>
 </html>
