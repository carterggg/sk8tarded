<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>SK8TARDED | Contact</title>
<link rel="stylesheet" href="styles/css/bootstrap.min.css">
<link rel="stylesheet" href="styles/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="main.css">
<link rel="stylesheet" href="stylesheet.css" type="text/css" charset="utf-8" />
<link href="styles/simple-sidebar.css" rel="stylesheet">

</head>

<body class="contact-background">

    
<!-- Website content -->

<div class="container-fluid">
<div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="index.php">
                       <br>
                        <img src="images/layout/sk8tarded-white.png" class="img-responsive align-center" width="240px;">
                        
                    </a>
                </li>
                <li>
                   <br><br><br>
                    <a href="#">Shop</a>
                </li>
                <li>
                    <a href="#">Skateboardom</a>
                </li>
                <li>
                    <a href="contact.php">Contact</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 text-center">
                    <h2 class="section-heading">Contact</h2>
                    <h3 class="section-subheading text-muted">Lets talk skateboarding...</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">Send It</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

 
    <!-- /#wrapper -->
</div><!-- END OF Container-Fluid -->
<!-- END OF Website content -->

<!-- jQuery -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> 
<script src="js/main.js"></script>
<script src="js/bootstrap.min.js"></script>
   <script src="js/new/jquery.js"></script>
   
       <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>
    
    
</body>
</html>
