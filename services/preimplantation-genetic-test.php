<?php 
    $current_page = end(explode("/", $_SERVER['REQUEST_URI']));
    $random_val   = rand();
?>
<?php include('/layout/submitForm.php');?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Preimplantation Genetic Test (PGT) - Coral Advanced Fertility</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="PGT, Preimplantation Genetic Test, genetic screening, Coral Advanced Fertility" name="keywords">
    <meta content="Coral Advanced Fertility offers Preimplantation Genetic Test (PGT) to ensure healthy pregnancies by screening embryos for genetic conditions." name="description">

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
           Preimplantation Genetic Test
       </div>
   </div>
</div>
<div class="container ">
    
    
    <div class="row my-5">
        <h1 class="h5 text-format">
            Preimplantation genetic testing (PGT) is a pair of twin procedures that check for genetic defects in embryos created through in vitro fertilisation (IVF) technology. The PGT umbrella is composed of preimplantation genetic screening (PGS) and preimplantation genetic diagnosis(PGD)
        </h1>
    </div>
    
    <div class="row box px-5 py-5 my-5">
        <h1 class="h1-color">
            PREIMPLANTATION GENETIC TESTING
        </h1>
        <p class="text-format">
           PGS is a method that screens embryos of chromosomally normal genetic parents, for structural or numerical chromosomal anomalies.
        </p>
        
        <h2 class="h1-color mt-4">
            PREIMPLANTATION GENETIC DIAGNOSIS
        </h2>
        <p class="text-format">
           PGD is performed to trace potential embryonic defects in couples where one or both partners have a known genetic abnormality. The procedure is capable of detecting sex-linked disorders, single gene defects and chromosomal disorders.
        </p>
        
    </div>
    
     <div class="row box px-5 py-5 my-5">
        <span class="h1 h1-color">
            ADVANTAGES OF PREIMPLANTATION GENETIC TESTING TECHNOLOGY
        </span>
        
        <h2 class="h1 h1-color">ELIMINATION OF GENETIC PREDISPOSITION</h2>
        <p class="text-format">
           PGT works like a sieve, eliminating embryos that carry unfavourable chromosomal properties. It is especially useful for couples who want to prevent existing genetic conditions from being passed on.
        </p>
        
        <h2 class="h1-color mt-4">
            PRACTICAL DECISION MAKING
        </h2>
        <p class="text-format">
           Genetic testing is commonly favoured over conventional post-conception diagnostic procedures which often entail difficult decision making surrounding potential pregnancy termination.
        </p>
        
    </div>
    
    
</div>

<?php include_once('/home/sangeetha1/public_html/layout/footer.php'); ?>