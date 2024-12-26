<?php 
    $current_page = end(explode("/", $_SERVER['REQUEST_URI']));
    $random_val   = rand();
?>
<?php include('/layout/submitForm.php');?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Gamete & Embryo Freezing - Coral Advanced Fertility</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="gamete freezing, embryo freezing, fertility preservation, Coral Advanced Fertility" name="keywords">
    <meta content="Preserve your fertility with gamete and embryo freezing at Coral Advanced Fertility. Secure your future with advanced reproductive options." name="description">

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
    <div class="row box px-5 py-5 my-5">
        <h1 class="h1-color">
            What is Gamete & Embryo freezing?
        </h1>
        <p class="text-format">
          Embryo freezing is a procedure that allows people to store embryos for
          future use. A person can also freeze eggs, which are not fertilized.
          An embryo forms after fertilization and after the cells start to 
          divide.
          <br />
          The first successful pregnancy resulting from freezing a healthy
          embryo took place in 1980. The term Embryo means from the moment that
          cells divide after fertilization until the eight weeks of pregnancy.
          <br />
          Before freezing can take place, First, patients need to create 
          suitable embryos. First, the person will take hormone injections to
          produce more eggs. These eggs are retrieved under Transvaginal
          ultrasound guidance. A person may wish to freeze their eggs if she
          wants.
          <br />
          The eggs were fertilized by sperm IVF or ICSI technique, in the
          laboratory. After fertilization, embryos are kept in special culture
          media for 2 to 6 days in the incubator. Once the embryos reaches the
          blastocyst stage, the embryo transfer will be done. The surplus
          embryos are frozen for future use.
          <br />
          While freezing the biggest challenge is the water within the cells.
          When this water freezes, water crystals can form and burst the cell.
          This is the reason for the poor success rate in frozen embryo transfer.
          <br />
          Now, slow freezing is completely replaced by the vitrification method.
        </p>
    </div>
    
    <div class="row box px-5 py-5 my-5">
       <h2 class="h1 h1-color">Vitrification</h2>
        <p class="text-format">
          In this process, the embryologist vitrifies the cryoprotected Embryos
          so quickly that the water, molecules do not have time to form, Ice
          crystals. This helps to protect the embryos and ovum, increases their
          rate of survival during thawing. After freezing is complete, embryo’s
          are stored in liquid nitrogen.
        </p>
    </div>
    
    <div class="row box px-5 py-5 my-5">
       <h2 class="h1 h1-color">Success Rate Of Thawing Frozen Embryo</h2>
        <p class="text-format">
         The process of thawing a vitrified embryo after cryopreservation has a
         relatively high success rate and good chances of delivering healthy
         babies, no increase in development anomalies. Research showed that
         vitrification increases an embryo’s chances of survival, comparable
         with fresh transfer.
        </p>
    </div>

    <div class="row box px-5 py-5 my-5">
       <h2 class="h1 h1-color">How Long Can Embryos And Gametes Stay Frozen?</h2>
        <p class="text-format">
        In theory, frozen embryos or gametes can remain viable for any length
        of time.
        The embryo’s remain in sealed containers at a temperature of -321’F. At
        this temperature, no biological process such as aging can occur.
        The length of time that a person and the fees can store their embryos
        will be discussed in person.
        </p>
    </div>
</div>

<?php include_once('/home/sangeetha1/public_html/layout/footer.php'); ?>