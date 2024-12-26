
<?php 
    $current_page = end(explode("/", $_SERVER['REQUEST_URI']));
    $random_val   = rand();
?>
<?php include('/layout/submitForm.php');?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title> Male Fertility Workup - Coral Advanced Fertility</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content=" male fertility workup, male fertility assessment, Coral Advanced Fertility, reproductive health" name="keywords">
    <meta content="Coral Advanced Fertility offers comprehensive male fertility workup services, assessing reproductive health for effective treatment in Bangalore.." name="description">

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
<div id="overlay"></div>

<div id="myDialog">
  <span class="close" onclick="closeDialog()">&times;</span>
  <img src="assets/images/ivf-offer.jpg" class="dialog" alt="Banner Image">
</div>
<style>
  #myDialog {
    display: none;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 80%;
    max-width: 500px;
    /* background: white;
    border: 1px solid #ccc;
    box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.3); */
    padding: 20px;
    z-index: 1000;
  }
  
  #myDialog img {
    width: 520px;
    /* height: 300px; */
  }
  
  #myDialog .close {
       /* float: right; */
       font-size: 52px;
    cursor: pointer;
    color: white;
    display: flex;
    justify-content: flex-end;
    /* align-items: flex-end; */
    margin-right: -114px;
  }
  
  #overlay {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
    z-index: 999;
  }
</style>
<script>
    // Automatically open the dialog when the page loads
       // Automatically open the dialog when the page loads
    window.onload = function() {
      openDialog();
    };
    function openDialog() {
      document.getElementById("myDialog").style.display = "block";
      document.getElementById("overlay").style.display = "block";
    }

    function closeDialog() {
      document.getElementById("myDialog").style.display = "none";
      document.getElementById("overlay").style.display = "none";
    }
    };
</script>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
    <script>
        // Show the modal on page load
        document.addEventListener('DOMContentLoaded', function() {
            var myModal = new bootstrap.Modal(document.getElementById('popupModal'), {
                keyboard: false
            });
            myModal.show();
        });
    </script>
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
<div class="banner">
    <img src="/assets/images/Rectangle 17331.png" />
   <div class="overlay">
       <div class="overlay-content h1 text-white text-bold">
           Male Fertility Workup
       </div>
   </div>
</div>

<div class="container my-5">
    <div class="row my-5">
        <h1 class="h1-color">Fertility In Men</h1>
        
        <div class="col-md-8 mt-3">
            <p>
                Male infertility isn't spotlighted nearly as much as it should be. The truth is, the male partner plays as much of a role in a couple's ability to conceive as the female partner. Male infertility could be caused by several factors, including erectile dysfunction, age-related subfertility and low sperm motility. However, with the right medical intervention, male infertility can be effectively managed and treated. On Cloudnine, our expertly designed treatment protocols can help you and your partner expand your family in the best way possible.
    
                    A treatment programme on Cloudnine is normally divided into
                    three key stages but may differ based on your background, health
                    and medical history.
            </p>
        </div> 
        
        <div class="col-md-4 text-cemter mt-3">
            <img src="/assets/images/services/2021flat_187.jpg" style="width: 350px;" />
        </div>
    </div>
    <div class="row my-5">
        <h2 class="h1-color">Causes of Male Infertility</h2>
        <h6 class="text-format">Conceiving a healthy baby depends on a number of factors, including healthy sperm. In fact, male infertility is the second biggest issue after a woman’s age so it’s important to understand how the male reproductive system works. The most common causes of male infertility are called:
        </h6>
        <div class="pl-3">
            <ul class="text-format">
                <li>Azoospermia, no sperm cells are produced.</li>
                <li>Oligospermia, where few sperm cells are produced.</li>
                <li>Teratospermia, where a high proportion of sperm is abnormally shaped.</li>
                <li>Blocked or absent vas deferens</li>
                <li>Vas deferens is the tube that transports the sperm from the testes</li>
                <li>Genetic condition such as cystic fibrosis or chromosomal abnormality.</li>
                <li>High sperm DNA fragmentation that can affect a sperm's ability to fertilise an egg.</li>
                <li>Sperm antibodies that can interfere with sperm motility and fertilisation.</li>
            </ul>
        </div>
        <div class="my-2">
            <h2 class="h1-color">Consultation</h2>
            <p class="text-format">
                Every treatment programme  is thoughtfully designed keeping you and your partner in mind, with your combined medical history, financial inclination and long-term goals forming the fulcrum for a personalised treatment plan. In line with this, your treatment programme will open with you and your partner being invited in for a consultation with a fertility specialist. In this consultation, your specialist will review your medical details, spotlight areas of concern and recommend potential paths to fertility.
            </p>
        </div>
        
        <div class="my-2">
            <h2 class="h1-color">Initial Fertility Screening</h2>
            <h6 class="text-format">
                Your consultation will be followed by a detailed fertility screening composed of tests that will be tailored to your medical profile. A guest typically undergoes the following screening tests, although these may vary from case to case:
            </h6>
            <div class="pl-3">
                <ul class="text-format">
                    <li>Basic Tests</li>
                    <li>Basic blood work up</li>
                    <li>Semen analysis</li>
                    <li>Hormonal assay</li>
                    <li>Hysterosalpingogram (HSG) for tubal evaluation</li>
                    <li>Diagnostic hystero laparoscopy (if HSG results are abnormal)</li>
                    <li>Special Tests, In Select Cases</li>
                    <li>Sperm DFI</li>
                    <li>3D scan</li>
                    <li>Detailed evaluation of male partner (scan, hormonal assay, chromosomal analysis)</li>
                     <li>Gene X-pert plus</li>
                </ul>
            </div>
        </div>
        
        <div class="my-2">
            <h2 class="h1-color">Treatment Recommendation & Implementation</h2>
            <span class="h6 text-format">
                Your treatment plan may comprise a single fertility procedure or a combination of fertility routines. Some of these are mentioned below:
            </span>
            <div class="pl-3">
                <ul class="text-format">
                    <li>Ovulation induction and cycle monitoring</li>
                    <li>Intrauterine insemination (IUI)</li>
                    <li>In vitro fertilisation (IVF)</li>
                    <li>Intracytoplasmic sperm injection (ICSI)</li>
                    <li>Physiological intracytoplasmic sperm injection (PICSI)</li>
                    <li>Micro testicular sperm extraction (micro TESE)</li>
                    <li>Preimplantation genetic screening (PGS)/Preimplantation genetic diagnosis (PGD)</li>
                    <li>Time lapse embryo monitoring</li>
                    <li>Endometrial receptivity test (ERA)</li>
                    <li>Laser assisted hatching (LAH)</li>
                    <li>Frozen embryo transfer (FET)</li>
                    <li>Third-party reproduction, including surrogacy</li>
                </ul>
            </div>
        </div>
        
    </div>
</div>
<?php include_once('/home/sangeetha1/public_html/layout/footer.php'); ?>