<?php 
    $current_page = end(explode("/", $_SERVER['REQUEST_URI']));
    $random_val   = rand();
?>
<?php include('/layout/submitForm.php');?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Comprehensive Fertility Services at Coral Advanced Fertility Center</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="fertility services, IVF Bangalore, IUI treatments, Coral Fertility services" name="keywords">
    <meta content="Explore the full range of fertility services at Coral Advanced Fertility Center, including IVF, IUI, and more. Tailored treatments for every patient." name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css" integrity="sha512-rqQltXRuHxtPWhktpAZxLHUVJ3Eombn3hvk9PHjV/N5DMUYnzKPC1i3ub0mEXgFzsaZNeJcoE0YHq0j/GFsdGg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    <!-- Template Stylesheet -->
    <link href="https://coraladvancedfertility.com/css/style.css" rel="stylesheet">
</head>
<body>
<div style="position:relative;">
    <div id="mySidenav" class="sidenav">
        <a href="#" id="call" class="" data-bs-toggle="modal" data-bs-target="#contactModal">
            <i class="fa fa-phone-alt me-2"></i> 
            Contact Us
        </a>
    </div>
</div>

<div class="shadow-sm sticky-top" style="top: 0px;background: #ebfff5 0% 0% no-repeat padding-box;">
   <div class="container">
     <div class="row">
         <nav class="navbar navbar-expand-lg navbar-light p-lg-0">
          
             <a href="/" class="navbar-brand">
                 <img src="/assets/images/logo.png" />
             </a>
             <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
               <span class="navbar-toggler-icon"></span>
             </button>
          
        
             
           <div class="collapse navbar-collapse" id="navbarCollapse">
               <div class="navbar-nav">
                   <a href="/" class="nav-item nav-link <?php echo $current_page =='' ? 'active' :''  ?>">Home</a>
                   <a href="/doctors" class="nav-item nav-link <?php echo $current_page =='doctors' ? 'active' :''  ?>">Doctors</a>
                   <div class="nav-item dropdown">
                       <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Services</a>
                       <div class="dropdown-menu bg-light rounded-0 rounded-bottom m-0">
                           <a href="/services/male-fertility-workup-fertility" class="dropdown-item">
                               Male Fertility workup Fertility</a>
                              
                           </a>
                           <a href="/services/female-fertility-workup-fertility" class="dropdown-item">
                               Female Fertility workup Fertility</a>
                              
                           </a>
                           <a href="/services/IUI-intrauterine-insemination" class="dropdown-item">IUI - intrauterine insemination</a>
                           <a href="/services/IVF-ICSI-IMSI" class="dropdown-item">IVF, ICSI, IMSI, etc.</a>
                           <a href="/services/gamete-and-embryo-freezing" class="dropdown-item">Gamete & Embryo freezing</a>
                           <a href="/services/fertility-preservation" class="dropdown-item">
                            Fertility preservation
                           </a>
                           <a href="/services/preimplantation-genetic-test" class="dropdown-item">
                            Preimplantation genetic test
                           </a>
                           <a href="/services/fertility-enhancing-surgeries-hysteroscopy-Laparoscopy" class="dropdown-item">
                            Fertility enhancing surgeries- Hysteroscopy/Laparoscopy
                           </a>
                       </div>
                   </div>
                   <a href="/gallery" class="nav-item nav-link <?php echo $current_page =='gallery' ? 'active' :''  ?>">Gallery</a>
                   <a href="/about-us" class="nav-item nav-link <?php echo $current_page =='about-us' ? 'active' :''  ?>">About Us</a>
                   <a href="/contact-us" class="nav-item nav-link <?php echo $current_page =='contact-us' ? 'active' :''  ?>">Contact Us</a>
                   <a href="/faq" class="nav-item nav-link <?php echo $current_page =='faq' ? 'active' :''  ?>">FAQ's</a>
               </div>
           </div>
         
       </nav>
    </div> 
   </div>
 </div>