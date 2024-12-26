<?php 
    $current_page = end(explode("/", $_SERVER['REQUEST_URI']));
    $random_val   = rand();
?>
<?php include('/layout/submitForm.php');?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Fertility Preservation Services - Coral Advanced Fertility</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="fertility preservation, egg freezing Bangalore, sperm freezing, Coral Fertility" name="keywords">
    <meta content="Coral Advanced Fertility offers fertility preservation services, including egg and sperm freezing, to secure your future." name="description">

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
<div class="modal fade text-center" id="popupModal" tabindex="-1" aria-labelledby="popupModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="max-width:80%">
            <div class="modal-content">

                <div class="modal-body">
                    <img src="assets/images/ivf-offer.jpg" alt="Popup Image" style="width:50%;" class="img-fluid">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

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
           Fertility Preservation
       </div>
   </div>
</div>
<div class="container ">
    
    
    <div class="row my-5">
        <h1 class="h1-color">
            PREIMPLANTATION GENETIC TESTING
        </h1>
        <p class="text-format">
           Fertility preservation is the term used for interventions and
           procedures aiming at preserving the chance of having a baby when the
           fertility may be damaged by certain medical conditions or treatment
           for the same.
        </p>
    </div>
    
    <div class="row box px-5 py-5 my-5">
        <h1 class="h1-color">
            When is it advised
        </h1>
        <ul class="text-format">
          <li>
              In men, women or couple with cancer, who are undergoing treatment
              such as chemotherapy, radiotherapy or even surgery for the same.
              These treatments may be toxic for the eggs/sperms or may decrease
              the ovarian reserve in women or the sperm counts in men. So
              Fertility preservation is done in such conditions.
          </li>
          <li>
              Fertility preservation may be done in women/couple’s who want to
              postpone their pregnancy.
          </li>
        </ul>
        
        <h2 class="h1-color mt-4">
            What are the options for Fertility Preservation at Kangaroo Care Fertility
        </h2>
        <ul class="text-format">
           <li>
             We provide fertility preservation in the form of freezing eggs
             /embryos in women with serious illnesses such as cancer that will
             potentially risk damage to your eggs from chemotherapy,
             radiotherapy or other treatments, including surgery.
          </li>
          <li>
             We provide option for freezing eggs in women who are not ready to
             have a baby right now.
          </li>
          <li>
             We freeze sperms of men who have cancer or undergoing any treatment
             which is going to be lethal to the sperms.
          </li>
        </ul>
        
    </div>
    
     
    
    
</div>

<?php include_once('/home/sangeetha1/public_html/layout/footer.php'); ?>