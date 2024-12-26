<?php 
    $current_page = end(explode("/", $_SERVER['REQUEST_URI']));
    $random_val   = rand();
?>
<?php include('/layout/submitForm.php');?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title> IUI Treatment in Bangalore - Coral Advanced Fertility</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="IUI Bangalore, infertility treatment, Coral Fertility, IUI success" name="keywords">
    <meta content="Coral Advanced Fertility provides effective IUI treatment in Bangalore, offering personalized care to increase your chances of conception." name="description">

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
           IUI Intrauterine Iinsemination
       </div>
   </div>
</div>

<div class="container ">
    <div class="row my-5">
        <h1 class="h1-color">WHAT IS INTRAUTERINE INSEMINATION?</h1>
        <p class="text-format">
            Intrauterine insemination (IUI) is a procedure that promises to bring the sperm and the egg closer together than would typically be possible in natural circumstances. It is a process in which concentrated motile sperm collected from the male partner are injected directly into the female partner's uterus. By timing the procedure to coincide with ovulation, IUI attempts to bring the sperm and the egg near each other, resulting in a potential union. IUI is a favourable treatment, especially in cases where the male partner has been diagnosed with low sperm reserves, or the female partner suffers from endometriosis or ovulatory dysfunction.
        </p>
    </div>
    
    <div class="row my-5">
        <h2 class="h1-color h1">Steps of IUI Treatment</h2>
        <ul class="text-format my-3 mx-3">
            <li>Ovarian stimulation with certain medications</li>
            <li>Processing of semen sample and the concentrated sperm sample is provided for insertion</li>
            <li>Carefully timed insertion of the processed semen sample into the uterus around the time of ovulation</li>
            <li>
                Tracking of ovulation by serial transvaginal scans to aid the process of IUI
            </li>
            <li>
                Confirm pregnancy by a simple urine pregnancy test, 2 weeks after IUI
            </li>
        </ul>
        <p>
            We aim at personalized care and cater to result-oriented services. Being one of the best IUI fertility treatment centers in  Bangalore is renowned for its remarkable ability to combine clinical excellence with compassionate care, enveloping every couple with medical, emotional, and psychological support. We have state-of-art fertility services providing the best quality and comprehensive care to couples.
        </p>
    </div>
    
    <div class="box my-3 px-3 py-3">
        <div class="row my-2 mx-2 py-2">
            <h2 class="h1-color">For Whom IUI is Suitable</h2>
            <p class="text-format">
                Couple with unexplained infertility. Women with PCOS, Mild-moderate Endometriosis, Anovulatory cycles, men with certain seminal abnormalities are benefited with IUI.
            </p>
        </div>
        
        <div class="row my-2 mx-2 py-2">
            <h2 class="h1-color">Insemination With Donor</h2>
            <p class="text-format">
               Donor sperms can be used in men with poor sperm quality or quantity. Even in cases of certain genetic diseases, donor sperms can be used for IUI.
            </p>
        </div>
        <div class="row my-2 mx-2 py-2">
            <h2 class="h1-color">Cost of IUI</h2>
            <p class="text-format">
              IUI is one of the simple forms of assisted reproduction. It costs very less when compared to IVF.
            </p>
        </div>
    </div>
    
    <div class="box my-3 px-3 py-3">
        <div class="row my-2 mx-2 py-2">
            <h2 class="h1-color">WHAT ARE THE RISKS OF INTRAUTERINE INSEMINATION?</h2>
            <p class="text-format">
                The risks associated with intrauterine insemination (IUI) are minimal. The few risks that do exist stem from the ovulation-inducing medications prescribed before the routine, rather than the IUI process itself.
            </p>
        </div>
        
        <div class="row my-2 mx-2 py-2">
            <h2 class="h1-color">MULTIPLE BIRTHS</h2>
            <p class="text-format">
               The fertility medications administered during an IUI cycle sometimes stimulate the ovaries to produce more than one egg. If both eggs are fertilised, it could be a case of multiple births.
            </p>
        </div>
        <div class="row my-2 mx-2 py-2">
            <h2 class="h1-color">Cost of IUI</h2>
            <p class="text-format">
              IUI could also potentially lead to hot flashes, mood swings, headaches and nausea. However, these symptoms are almost always mild, receding soon after a course of medication is withdrawn. If performed inadequately, IUI could herald serious complications, such as ovarian hyperstimulation syndrome and ovarian cysts. On Cloudnine, we personalise every IUI procedure in keeping with a guest's medical record. We assess every minute medical detail before prescribing even a simple treatment.
            </p>
        </div>
    </div>
    
    
    
</div>

<?php include_once('/home/sangeetha1/public_html/layout/footer.php'); ?>