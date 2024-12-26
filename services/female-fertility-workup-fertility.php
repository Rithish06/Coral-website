<?php 
    $current_page = end(explode("/", $_SERVER['REQUEST_URI']));
    $random_val   = rand();
?>
<?php include('/layout/submitForm.php');?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>  Female Fertility Workup - Coral Advanced Fertility</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content=" female fertility workup, female fertility assessment, Coral Advanced Fertility, reproductive health" name="keywords">
    <meta content="Get a detailed female fertility workup at Coral Advanced Fertility, where we assess reproductive health and plan personalized treatments in Bangalore." name="description">

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
           Female Fertility Workup
       </div>
   </div>
</div>

<div class="container ">
    <div class="row my-5">
        <h1 class="h1-color">Fertility In Female</h1>
        <p class="text-format">
            Infertility means not being able to get pregnant after at least 
            one year of trying (or 6 months if the woman is over age 35). 
            If a woman keeps having miscarriages, it is also called infertility.
            Female infertility can result from age, physical problems, hormone
            problems, and lifestyle or environmental factors.
            <br />
            As age progresses, fertility decreases. Especially in women,
            fertility decreases at an alarming rate after 35yrs of age.
        </p>
    </div>
    
    <div class="row my-5">
        <h2 class="h1-color">Causes of Male Infertility</h2>
        <p class="text-format my-2">
           Conceiving a healthy baby depends on a number of factors, including
           healthy sperm. In fact, male infertility is the second biggest issue
           after a woman’s age so it’s important to understand how the male
           reproductive system works. The most common causes of male infertility
           are called:
        </p>
        <div class="pl-3">
            <ul class="text-format">
                <li>Hormonal Blood Tests- They are done at varying times of the menstrual cycle. They are- Serum FSH, LH, E2, AMH, TSH, Prolactin.</li>
                <li>Oligospermia, where few sperm cells are produced.</li>
                <li>Hysterosalpingography (HSG)- A procedure done to know the patency of the tubes. It can be done with or without anaesthesia.</li>
                <li>Ultrasound (2D/3D)- done to evaluate the uterus, tubes and ovaries. Usually a transvaginal USG is done as it has a better resolution.</li>
                <li>Hysteroscopy/Laparoscopy- These are the minimally invasive procedures, done under anaesthesia, to evaluate the pelvic organs. We can obtain a live image of the organs and make a definite diagnosis.</li>
            </ul>
        </div>
    </div>
    
    <div class="row my-5">
        <h2 class="h1-color">Female Fertility Treatment</h2>
        <p class="text-format my-2">
           Fertility treatment aims to help the women to bear child naturally or
           through assisted reproduction. The various options available for the
           woman at Kangaroo Care Fertility are-
        </p>
        <div class="pl-3">
            <ul class="text-format">
                <li>Ovulation Induction</li>
                <li> Intrauterine Insemination (IUI)</li>
                <li>In-vitro Fertilization (IVF)</li>
                <li>Intracytoplasmic Sperm Injection (ICSI)</li>
                <li>Laparoscopy & Hysteroscopy</li>
            </ul>
        </div>
    </div>
    
    
</div>

<?php include_once('/home/sangeetha1/public_html/layout/footer.php'); ?>