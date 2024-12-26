<?php 
    $current_page = end(explode("/", $_SERVER['REQUEST_URI']));
    $random_val   = rand();
?>
<?php include('/layout/submitForm.php');?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>IVF, ICSI, IMSI Treatments - Coral Advanced Fertility</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content=" IVF Bangalore, ICSI, IMSI, Coral Fertility, advanced fertility treatments" name="keywords">
    <meta content=" Receive advanced IVF, ICSI, and IMSI treatments at Coral Advanced Fertility, offering high success rates with expert care." name="description">

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
<div class="banner">
    <img src="/assets/images/Rectangle 17331.png" />
   <div class="overlay">
       <div class="overlay-content h1 text-white text-bold">
           Gamete & Embryo freezing
       </div>
   </div>
</div>
<div class="container">
    <div class="box row my-5 px-3 py-5">
        <h1 class="h1-color">
            INTRA-CYTOPLASMIC SPERM INJECTION (ICSI)
        </h1>
        <p class="text-format">
            ICSI was introduced as a clinical level improvement to conventional
            IVF treatments. It involves carefully selecting only one single
            sperm of the best quality for injection into an egg to achieve
            fertilisation
            <br />
            <br />
            This procedure is done using a high precision technique called
            ‘micromanipulation’. The resulting embryo is then transferred back
            into the uterus to continue its development as with a normal
            pregnancy.
        </p>
        
        <h1 class="h1-color mt-3">
            WHY?
        </h1>
        <p class="text-format">
            ICSI is recommended when there is severe male factor infertility,
            including low sperm concentration, poor motility, blockages in the
            male reproductive tract or where there is a desire to get pregnant
            after having had a vasectomy. It may also be advised when the female
            has a very low yield of eggs during egg retrieval so as to directly
            improve the chances of fertilisation by clinical intervention. Your
            IVF London consultant may also recommend this enhanced procedure if
            a previous IVF treatment has resulted in a low fertilisation rate of
            eggs.
        </p>
        
         <h1 class="h1-color mt-3">
            HOW?
        </h1>
        <p class="text-format">
            The woman will be required to undergo ovarian stimulation to prepare
            her eggs for collection as in a traditional IVF treatment plan. The
            sperm from the male partner will then be processed, washed and
            inspected in our laboratory to select only one sperm which will then
            be carefully injected into a retrieved egg. The aim is to inject the
            most normal looking sperm with good progressive movement into each
            mature egg.  In cases of surgically retrieved sperm ICSI or IMSI may
            be recommended to achieve fertilization.
            <br />
            <br />
            Our embryologists will closely monitor the fertilization procedure
            and the developing embryos in preparation for embryo transfer back
            into the woman’s uterus. Any surplus good quality embryos can be
            frozen for future use.
        </p>
        
    </div>
    
    <div class="box row my-5 px-3 py-5">
        <h1 class="h1-color">
            INTRACYTOPLASMIC MORPHOLOGICALLY SELECTED SPERM INJECTION (IMSI)
        </h1>
        <p class="text-format">
           Similar to the ICSI procedure, this is an enhanced assessment of the
           sperm which uses a far greater magnifying power. By being able to
           select only the sperm without any morphological alterations called
           ‘vacuoles’  can increase the chances of successful fertilization and
           normal embryo development. It can also decrease any likelihood of
           miscarriage. IMSI has shown to improve chances of pregnancy in
           couples whereby the male has a high level of DNA fragmentation index
           in the sperm.
        </p>
        
        <h1 class="h1-color mt-3">
            WHY?
        </h1>
        <p class="text-format">
           IMSI is recommended when there is severe male factor infertility
           including known morphology factors and also where previous ICSI
           treatment has been unsuccessful.
        </p>
        
         <h1 class="h1-color mt-3">
            HOW?
        </h1>
        <p class="text-format">
            Similar to ICSI, the woman must first be stimulated with medications
            to prepare for an egg retrieval procedure. The ejaculated or
            surgically retrieved sperm is washed and prepared prior to
            conducting the IMSI procedure within our laboratory. Our
            embryologist will conduct an inspection and selection of one single
            sperm of the best quality using a high powered inverted microscope.
            Each mature egg is injected with a single best quality (non
            -vacuolated/least vacuolated) sperm to achieve fertilization.
        </p>
        
    </div>
    
     <div class="box row my-5 px-3 py-5">
        <h1 class="h1-color">
            WHAT ARE THE SIDE-EFFECTS/RISKS?
        </h1>
        <p class="text-format">
           Fertilisation rates following ICSI/IMSI can be high, but
           unfortunately not all fertilised eggs will develop into healthy
           embryos. Depending on the woman’s age, some of the eggs may be
           abnormal and therefore fertilisation may result in an abnormal embryo
           . It is rare that any eggs, sperm or resultant embryos are damaged in
           the procedure although some of the eggs may be very fragile and may
           not be able to sustain the micromanipulation procedure leading to
           disintegration. The HFEA site also acknowledges that there may be a
           risk of long term health issues for children conceived using IVF with
           ICSI as the sperm used in the procedure may not have otherwise
           fertilized an egg naturally, although, as yet, there is no conclusive
           evidence.
           <br />
           <br />
           It is important for you and your partner to discuss the ICSI risks
           and benefits with our Consultant as they can provide information
           that’s specific to your personal fertility history. By obtaining a
           better understanding of ICSI risks and how they may impact you and
           your family, can help you make an informed decision on whether or not
           to pursue this particular course of fertility treatment.
        </p>
    </div>
    
</div>

<?php include_once('/home/sangeetha1/public_html/layout/footer.php'); ?>