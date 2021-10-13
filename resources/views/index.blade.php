<!DOCTYPE html>
<html lang="en">
<head>

<title>Educational Resilience Program</title>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

<link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css')  }}">
<link rel="stylesheet" href="{{asset('assets/css/owl.carousel.css') }}">
<link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css') }}">

<!-- MAIN CSS -->
<link rel="stylesheet" href="{{asset('assets/css/templatemo-style.css') }}">

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

<!-- PRE LOADER -->
<section class="preloader">
     <div class="spinner">
          <span class="spinner-rotate"></span>               
     </div>
</section>
<section class="navbar custom-navbar navbar-fixed-top" role="navigation">
     <div class="container">

          <div class="navbar-header">
               <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
               </button>
               <a href="#" class="navbar-brand">EducationalResilience Program</a>
          </div>
          <div class="collapse navbar-collapse">
               <ul class="nav navbar-nav navbar-nav-first">
                    <li><a href="#top" class="smoothScroll">Home</a></li>
                    <li><a href="#about" class="smoothScroll">About</a></li>
                    <li><a href="#news" class="smoothScroll">News and Events</a></li>
                    <li><a href="{{ route('login') }}" class="smoothScroll">Login</a></li>
                    <li><a href="{{ route('masterlogin') }}" class="smoothScroll">Master Account</a></li>
                    <li><a href="{{ route('championlogin') }}" class="smoothScroll">Champion Account</a></li>
               </ul>
          </div>
     </div>
</section>
<section id="home">
     <div class="row">
          <div class="owl-carousel owl-theme home-slider">
               <div class="item item-first">
                    <div class="caption">
                         <div class="container">
                              <div class="col-md-6 col-sm-12">
                                   <h1>Teaching resources Center</h1>
                                   <h3>Our teaching resources center is designed to assisting teachers with teaching materials that have been prepared in line with National curriculum for secondary schools in Rwanda.</h3>
                                   <a href="#feature" class="section-btn btn btn-default smoothScroll">Discover more</a>
                              </div>
                         </div>
                    </div>
               </div>

               <div class="item item-second">
                    <div class="caption">
                         <div class="container">
                              <div class="col-md-6 col-sm-12">
                                   <h1>Start your journey with our materials</h1>
                                   <h3>This platfoarm is built and run by teachers who have been teaching in Rwandan schools long time ago. It is designed to meet the requirement for quality education in Rwanda.</h3>
                                   <a href="#courses" class="section-btn btn btn-default smoothScroll">Explore more</a>
                              </div>
                         </div>
                    </div>
               </div>

               <div class="item item-third">
                    <div class="caption">
                         <div class="container">
                              <div class="col-md-6 col-sm-12">
                                   <h1>Efficient teaching Methods</h1>
                                   <h3>We focus on good practices of teaching in Rwanda and abroad</h3>
                                   <a href="#contact" class="section-btn btn btn-default smoothScroll">Let's chat</a>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>
</section>
<section id="about">
     <div class="container">
          <div class="row">

               <div class="col-md-6 col-sm-12">
                    <div class="about-info">
                         <h2>Start your journey to a better teaching resources to boost quality of education to a better future citizens</h2>

                         <figure>
                              <span><i class="fa fa-users"></i></span>
                              <figcaption>
                                   <h3>Professional Teachers</h3>
                                   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ipsa voluptatibus.</p>
                              </figcaption>
                         </figure>

                         <figure>
                              <span><i class="fa fa-certificate"></i></span>
                              <figcaption>
                                   <h3>International Certifications</h3>
                                   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ipsa voluptatibus.</p>
                              </figcaption>
                         </figure>

                         <figure>
                              <span><i class="fa fa-bar-chart-o"></i></span>
                              <figcaption>
                                   <h3>Free for 3 months</h3>
                                   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ipsa voluptatibus.</p>
                              </figcaption>
                         </figure>
                    </div>
               </div>

               <div class="col-md-offset-1 col-md-4 col-sm-12">
                    <div class="entry-form">
                         <form action="#" method="post">
                              <h2>Want to learn with Us?</h2>
                              <input type="text" name="full name" class="form-control" placeholder="Full name" required="">

                              <input type="email" name="email" class="form-control" placeholder="Your email address" required="">

                              <input type="password" name="password" class="form-control" placeholder="Your password" required="">

                              <button class="submit-btn form-control" id="form-submit">Sign Up to Get started</button>
                         </form>
                    </div>
               </div>

          </div>
     </div>
</section>
<section id="news">
     <div class="container">
          <div class="row">

               <div class="col-md-12 col-sm-12">
                    <div class="section-title">
                         <h2>Our Teachers <small>Meet Professional Teachers</small></h2>
                    </div>
               </div>

               <div class="col-md-3 col-sm-6">
                    <div class="team-thumb">
                         <div class="team-image">
                              <img src="{{asset('assets/images/author-image1.jpg')}}" class="img-responsive" alt="">
                         </div>
                         <div class="team-info">
                              <h3>Mark Wilson</h3>
                              <span>I love Teaching</span>
                         </div>
                         <ul class="social-icon">
                              <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                              <li><a href="#" class="fa fa-twitter"></a></li>
                              <li><a href="#" class="fa fa-instagram"></a></li>
                         </ul>
                    </div>
               </div>

               <div class="col-md-3 col-sm-6">
                    <div class="team-thumb">
                         <div class="team-image">
                              <img src="{{asset('assets/images/author-image2.jpg')}}" class="img-responsive" alt="">
                         </div>
                         <div class="team-info">
                              <h3>Catherine</h3>
                              <span>Education is the key!</span>
                         </div>
                         <ul class="social-icon">
                              <li><a href="#" class="fa fa-google"></a></li>
                              <li><a href="#" class="fa fa-instagram"></a></li>
                         </ul>
                    </div>
               </div>

               <div class="col-md-3 col-sm-6">
                    <div class="team-thumb">
                         <div class="team-image">
                              <img src="{{asset('assets/images/author-image3.jpg')}}" class="img-responsive" alt="">
                         </div>
                         <div class="team-info">
                              <h3>Jessie Ca</h3>
                              <span>I like Online Courses</span>
                         </div>
                         <ul class="social-icon">
                              <li><a href="#" class="fa fa-twitter"></a></li>
                              <li><a href="#" class="fa fa-envelope-o"></a></li>
                              <li><a href="#" class="fa fa-linkedin"></a></li>
                         </ul>
                    </div>
               </div>

               <div class="col-md-3 col-sm-6">
                    <div class="team-thumb">
                         <div class="team-image">
                              <img src="{{asset('assets/images/author-image4.jpg')}}" class="img-responsive" alt="">
                         </div>
                         <div class="team-info">
                              <h3>Andrew Berti</h3>
                              <span>Learning is fun</span>
                         </div>
                         <ul class="social-icon">
                              <li><a href="#" class="fa fa-twitter"></a></li>
                              <li><a href="#" class="fa fa-google"></a></li>
                              <li><a href="#" class="fa fa-behance"></a></li>
                         </ul>
                    </div>
               </div>

          </div>
     </div>
</section>
<section id="courses">
     <div class="container">
          <div class="row">

               <div class="col-md-12 col-sm-12">
                    <div class="section-title">
                         <h2>Popular Courses <small>Upgrade your skills with newest courses</small></h2>
                    </div>

                    <div class="owl-carousel owl-theme owl-courses">
                         <div class="col-md-4 col-sm-4">
                              <div class="item">
                                   <div class="courses-thumb">
                                        <div class="courses-top">
                                             <div class="courses-image">
                                                  <img src="{{asset('assets/images/courses-image1.jpg')}}" class="img-responsive" alt="">
                                             </div>
                                             <div class="courses-date">
                                                  <span><i class="fa fa-calendar"></i> 12 / 7 / 2018</span>
                                                  <span><i class="fa fa-clock-o"></i> 7 Hours</span>
                                             </div>
                                        </div>

                                        <div class="courses-detail">
                                             <h3><a href="#">Social Media Management</a></h3>
                                             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </div>

                                        <div class="courses-info">
                                             <div class="courses-author">
                                                  <img src="{{asset('assets/images/author-image1.jpg')}}" class="img-responsive" alt="">
                                                  <span>Mark Wilson</span>
                                             </div>
                                             <div class="courses-price">
                                                  <a href="#"><span>USD 25</span></a>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div>

                         <div class="col-md-4 col-sm-4">
                              <div class="item">
                                   <div class="courses-thumb">
                                        <div class="courses-top">
                                             <div class="courses-image">
                                                  <img src="{{asset('assets/images/courses-image2.jpg')}}" class="img-responsive" alt="">
                                             </div>
                                             <div class="courses-date">
                                                  <span><i class="fa fa-calendar"></i> 20 / 7 / 2018</span>
                                                  <span><i class="fa fa-clock-o"></i> 4.5 Hours</span>
                                             </div>
                                        </div>

                                        <div class="courses-detail">
                                             <h3><a href="#">Graphic & Web Design</a></h3>
                                             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </div>

                                        <div class="courses-info">
                                             <div class="courses-author">
                                                  <img src="{{asset('assets/images/author-image2.jpg')}}" class="img-responsive" alt="">
                                                  <span>Jessica</span>
                                             </div>
                                             <div class="courses-price">
                                                  <a href="#"><span>USD 80</span></a>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div>

                         <div class="col-md-4 col-sm-4">
                              <div class="item">
                                   <div class="courses-thumb">
                                        <div class="courses-top">
                                             <div class="courses-image">
                                                  <img src="{{asset('assets/images/courses-image3.jpg')}}" class="img-responsive" alt="">
                                             </div>
                                             <div class="courses-date">
                                                  <span><i class="fa fa-calendar"></i> 15 / 8 / 2018</span>
                                                  <span><i class="fa fa-clock-o"></i> 6 Hours</span>
                                             </div>
                                        </div>

                                        <div class="courses-detail">
                                             <h3><a href="#">Marketing Communication</a></h3>
                                             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </div>

                                        <div class="courses-info">
                                             <div class="courses-author">
                                                  <img src="{{asset('assets/images/author-image3.jpg')}}" class="img-responsive" alt="">
                                                  <span>Catherine</span>
                                             </div>
                                             <div class="courses-price free">
                                                  <a href="#"><span>Free</span></a>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div>

                         <div class="col-md-4 col-sm-4">
                              <div class="item">
                                   <div class="courses-thumb">
                                        <div class="courses-top">
                                             <div class="courses-image">
                                                  <img src="{{asset('assets/images/courses-image4.jpg')}}" class="img-responsive" alt="">
                                             </div>
                                             <div class="courses-date">
                                                  <span><i class="fa fa-calendar"></i> 10 / 8 / 2018</span>
                                                  <span><i class="fa fa-clock-o"></i> 8 Hours</span>
                                             </div>
                                        </div>

                                        <div class="courses-detail">
                                             <h3><a href="#">Summer Kids</a></h3>
                                             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </div>

                                        <div class="courses-info">
                                             <div class="courses-author">
                                                  <img src="{{asset ('assets/images/author-image1.jpg')}}" class="img-responsive" alt="">
                                                  <span>Mark Wilson</span>
                                             </div>
                                             <div class="courses-price">
                                                  <a href="#"><span>USD 45</span></a>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div>

                         <div class="col-md-4 col-sm-4">
                              <div class="item">
                                   <div class="courses-thumb">
                                        <div class="courses-top">
                                             <div class="courses-image">
                                                  <img src="{{asset ('assets/images/courses-image5.jpg')}}" class="img-responsive" alt="">
                                             </div>
                                             <div class="courses-date">
                                                  <span><i class="fa fa-calendar"></i> 5 / 10 / 2018</span>
                                                  <span><i class="fa fa-clock-o"></i> 10 Hours</span>
                                             </div>
                                        </div>

                                        <div class="courses-detail">
                                             <h3><a href="#">Business &amp; Management</a></h3>
                                             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </div>

                                        <div class="courses-info">
                                             <div class="courses-author">
                                                  <img src="{{asset('assets/images/author-image2.jpg')}}" class="img-responsive" alt="">
                                                  <span>Jessica</span>
                                             </div>
                                             <div class="courses-price free">
                                                  <a href="#"><span>Free</span></a>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div>

                    </div>

               </div>
          </div>
     </section>

     <!-- FOOTER -->
     <footer id="footer">
          <div class="container">
               <div class="row">


                    <div class="col-md-4 col-sm-6">
                         <div class="footer-info">
                              <div class="section-title">
                                   <h2>Contact Info</h2>
                              </div>

                              <div class="copyright-text"> 
                                   <p>Copyright &copy; 2019 Company Name</p> 
                                   <p>Design: TemplateMo</p>
                              </div>
                         </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                         <div class="footer-info">
                              <div class="section-title">
                                   <h2>Contact Info</h2>
                              </div>
                              <address>
                                   <p>+250788....</p>
                                   <p><a href="mailto:youremail.co">hello@gmail.com</a></p>
                              </address>


                         </div>

                    </div>

               </div>
          </div>
     </footer>
     <script src="{{asset('assets/js/jquery.js')}}"></script>
     <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
     <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
     <script src="{{asset('assets/js/smoothscroll.js')}}"></script>
     <script src="{{asset('assets/js/custom.js')}}"></script>

</body>
</html>