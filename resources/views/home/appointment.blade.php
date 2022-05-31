<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Kanun - Law Firm Website Template</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Law Firm Website Template" name="keywords">
        <meta content="Law Firm Website Template" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@1,600;1,700;1,800&family=Roboto:wght@400;500&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{asset('assets')}}/css/style.css" rel="stylesheet">
    </head>

    <body>
        <div class="wrapper">
            <!-- Top Bar Start -->
            <div class="top-bar">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="logo">
                                <a href="index.html">
                                    <h1>Kanun</h1>
                                    <!-- <img src="img/logo.jpg" alt="Logo"> -->
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="top-bar-right">
                                <div class="text">
                                    <h2>8:00 - 9:00</h2>
                                    <p>Opening Hour Mon - Fri</p>
                                </div>
                                <div class="text">
                                    <h2>+123 456 7890</h2>
                                    <p>Call Us For Free Consultation</p>
                                </div>
                                <div class="social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->

            <!-- Nav Bar Start -->
            <div class="nav-bar">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                        <a href="#" class="navbar-brand">MENU</a>
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav mr-auto">
                                <a href="{{ route('home') }}" class="nav-item nav-link active">Home</a>
                                <a href="{{ route('about') }}"  class="nav-item nav-link active">About</a>
                                <a href="{{ route('service') }}" class="nav-item nav-link">Practice</a>
                                <a href="{{ route('team') }}" class="nav-item nav-link">Attorneys</a>
                                <a href="{{ route('portfolio') }}" class="nav-item nav-link">Case Studies</a>
                                <div class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                                    <div class="dropdown-menu">
                                        <a href="{{ route('blog') }}" class="dropdown-item">Blog Page</a>
                                        <a href="{{ route('single') }}" class="dropdown-item">Single Page</a>
                                    </div>
                                </div>
                                <a href="{{ route('contact') }}" class="nav-item nav-link active">Contact</a>
                            </div>
                            <div class="ml-auto">
                                <a class="btn" href="{{ route('appointment') }}">Get Appointment</a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- Nav Bar End -->

            <!-- benim yerim -->

            <!-- Contact Start -->
            <div class="contact">
                <div class="container">
                    <div class="section-header">
                        <h2>Get Appointment</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="contact-info">
                                <div class="contact-item">
                                    <i class="fa fa-map-marker-alt"></i>
                                    <div class="contact-text">
                                        <h2>Location</h2>
                                        <p>123 Street, New York, USA</p>
                                    </div>
                                </div>
                                <div class="contact-item">
                                    <i class="fa fa-phone-alt"></i>
                                    <div class="contact-text">
                                        <h2>Phone</h2>
                                        <p>+012 345 67890</p>
                                    </div>
                                </div>
                                <div class="contact-item">
                                    <i class="fa fa-envelope"></i>
                                    <div class="contact-text">
                                        <h2>Email</h2>
                                        <p>info@example.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="contact-form">
                                @include('home.messages')
                                <form id="checkout-form" action="{{route("storeappointment")}}" class="clearfix" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" class="input" name="Law" placeholder="Law" required="required" /> (civil,education,cyber,family,business,criminal)
                                    </div>

                                    <div class="form-group">
                                        <input type="tel" pattern="[0-9]{10}" class="input" name="Phone" placeholder="Phone number" required="required" /> (+90) 123 456 78 90
                                    </div>
                                    <div class="form-group">
                                        <input type="text" pattern="[0-9]{2}" class="input" name="Time"  placeholder="Time" required="required" /> 8-16(45min. per appointment)
                                    </div>
                                    <div class="form-group">
                                        <textarea type="text" class="input" name="Subject" placeholder="Explain problem shortly for preliminary research" required="required" ></textarea>
                                    </div>


                                    <div class="form-group">
                                        <input class="input" type="submit" value="Send Message"  />
                                    </div>
                                    <!--  <div>
                                          <button class="btn" type="submit">Send Message</button>
                                      </div>
                                      -->
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>





          <!-- Newsletter Start -->
<div class="newsletter">
    <div class="container">
        <div class="section-header">
            <h2>Subscribe Our Newsletter</h2>
        </div>
        <div class="form">
            <input class="form-control" placeholder="Email here">
            <button class="btn">Submit</button>
        </div>
    </div>
</div>
<!-- Newsletter End -->


<!-- Footer Start -->
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="footer-about">
                    <h2>About Us</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque eu lectus a leo tristique dictum nec non quam. Suspendisse convallis, tortor eu placerat rhoncus, lorem quam iaculis felis, sed eleifend lacus neque id eros. Integer convallis volutpat neque
                    </p>
                </div>
            </div>
            <div class="col-md-6 col-lg-8">
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="footer-link">
                            <h2>Services Areas</h2>
                            <a href="">Civil Law</a>
                            <a href="">Family Law</a>
                            <a href="">Business Law</a>
                            <a href="">Education Law</a>
                            <a href="">Immigration Law</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="footer-link">
                            <h2>Useful Pages</h2>
                            <a href="">About Us</a>
                            <a href="">Practices</a>
                            <a href="">Attorneys</a>
                            <a href="">Case Studies</a>
                            <a href="">FAQs</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="footer-contact">
                            <h2>Get In Touch</h2>
                            <p><i class="fa fa-map-marker-alt"></i>123 Street, New York, USA</p>
                            <p><i class="fa fa-phone-alt"></i>+012 345 67890</p>
                            <p><i class="fa fa-envelope"></i>info@example.com</p>
                            <div class="footer-social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-youtube"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container footer-menu">
        <div class="f-menu">
            <a href="">Terms of use</a>
            <a href="">Privacy policy</a>
            <a href="">Cookies</a>
            <a href="">Help</a>
            <a href="">FQAs</a>
        </div>
    </div>
    <div class="container copyright">
        <div class="row">
            <div class="col-md-6">
                <p>&copy; <a href="https://htmlcodex.com/law-firm-website-template">HTML Codex</a>, All Right Reserved.</p>
            </div>
            <div class="col-md-6">
                <p>Designed By <a href="https://htmlcodex.com">HTML Codex</a></p>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
</div>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/isotope/isotope.pkgd.min.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>
</body>
</html>
