<?php include_once('./layout/header.php'); ?>
<div id="overlay"></div>

<div id="myDialog">
  <span class="close" onclick="closeDialog()">&times;</span>
  <img src="assets/images/laser-treatment.jpeg" class="dialog" alt="Banner Image">
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
<div class="cotinaer">
  <div class="col-md-12 home-banner">
   <img src="assets/images/Capture.PNG">
  </div>
</div>
<!-- Content -->
<div class="container my-5">
  <h2 class="text-center"> Our Services </h2>
 <div class="row">
  <div class="col-md-3 mb-5 maternity-cards">
     <div class="" style="width: 18rem;" onclick="location.href='/services/male-fertility-workup-fertility'">
       <img class="card-img-top" src="assets/images/services/male-sign.svg" alt="Card image cap">
       <div class="card-body">
         <h5 class="card-text text-center"> <a href="/services/male-fertility-workup-fertility"> Male Fertility workup </a></h5>
       </div>
    </div>
  </div>
  <div class="col-md-3 mb-5 maternity-cards">
     <div class="" style="width: 18rem;" onclick="location.href='/services/female-fertility-workup-fertility'">
       <img class="card-img-top" src="assets/images/services/gynecology-icon-6.jpg" alt="Card image cap">
       <div class="card-body">
         <h5 class="card-text text-center"><a href="/services/female-fertility-workup-fertility"> Female Fertility workup </a> </h5>
       </div>
    </div>
  </div>
  <div class="col-md-3 mb-5 maternity-cards">
     <div class="" style="width: 18rem;" onclick="location.href='/services/IUI-intrauterine-insemination'">
       <img class="card-img-top" src="assets/images/services/IUI.png" alt="Card image cap">
       <div class="card-body">
        <h5 class="card-text text-center"> <a href="/services/IUI-intrauterine-insemination"> IUI - intrauterine insemination </a></h5>
       </div>
    </div>
  </div>
  <div class="col-md-3 mb-5 maternity-cards">
     <div class="" style="width: 18rem;" onclick="location.href='/services/IVF-ICSI-IMSI'">
       <img class="card-img-top" src="assets/images/services/ivf.png" alt="Card image cap">
       <div class="card-body">
        <h5 class="card-text text-center"><a href="/services/IVF-ICSI-IMSI">IVF, ICSI, IMSI, etc.</a></h5>
       </div>
    </div>
  </div>
  <div class="col-md-3 mb-5 maternity-cards">
     <div class="" style="width: 18rem;" onclick="location.href='/services/gamete-and-embryo-freezing'">
       <img class="card-img-top" src="assets/images/services/embryo-freezing.png" alt="Card image cap">
       <div class="card-body">
        <h5 class="card-text text-center"><a href="/services/gamete-and-embryo-freezing">Gamete & Embryo freezing</a></h5>
       </div>
    </div>
  </div>
  <div class="col-md-3 mb-5 maternity-cards">
     <div class="" style="width: 18rem;" onclick="location.href='/services/fertility-preservation'">
       <img class="card-img-top" src="assets/images/services/fertility_preservation.png" alt="Card image cap">
       <div class="card-body">
        <h5 class="card-text text-center"><a href="/services/fertility-preservation">Fertility preservation</a></h5>
       </div>
    </div>
  </div>
  <div class="col-md-3 mb-5 maternity-cards">
     <div class="" style="width: 18rem;" onclick="location.href='/services/preimplantation-genetic-test'">
       <img class="card-img-top" src="assets/images/services/PGT.png" alt="Card image cap">
       <div class="card-body">
         <h5 class="card-text text-center"><a href="/services/preimplantation-genetic-test">Preimplantation genetic test</a></h5>
       </div>
    </div>
  </div>
  <div class="col-md-3 mb-5 maternity-cards">
     <div class="" style="width: 18rem;" onclick="location.href='/services/fertility-enhancing-surgeries-hysteroscopy-Laparoscopy'">
       <img class="card-img-top" src="assets/images/services/fertility_under.png" alt="Card image cap">
       <div class="card-body">
         <h5 class="card-text text-center"><a href="/services/fertility-enhancing-surgeries-hysteroscopy-Laparoscopy">Fertility enhancing surgeries- <br /> Hysteroscopy/Laparoscopy</a></h5>
       </div>
    </div>
  </div>
 </div> 
</div>

<!--
<div class="container  my-5 text-white">
 <div class="row ">
  <div class="col-md-12">
   <div class="row page-banner">
    <div class="col-md-3 p-0" style="background-image: url(https://coraladvancedfertility.com/assets/images/c-section.PNG);background-repeat: no-repeat;background-size: cover;"></div>
     <div class="col-md-9  py-5">
       <h2 class="text-bold "> IVF </h2>
       <p class="pb-3">
        IVF stands for In Vitro Fertilization. It is a type of assisted repductuctive technology (ART) 
        used to help individuals or couples conceive a chile when other methods have been unsuccessful.
        IVF involeves fertilizing an egg with sperm outside the body, in a laboratory settings, and then 
        transferring the resulting embryo(s) into uterus.
       </p>
       <button class="btn btn-light btn-lg"> View More...</button>
     </div>
   </div>
  </div>
 </div>
</div>

<div class="page-banner">
 <div class="container">
  <div class="row">
   <h2 class="text-white text-center my-5">Our Doctors</h2>
   <div class="row text-white">
    <div class="col-md-6 mb-5 pb-5">
     <img src="assets/images/dr-alexa.PNG">
     <h2 class="text-center m-2" > DR Alexa </h2>
      <h2 class="text-center"> (TMBBS, DGO) </h2>
    </div>
    <div class="col-md-6 mb-5 pb-5">
     <img src="assets/images/dr-alex-1.PNG">
     <h2 class="text-center m-2"> DR Alexa </h2>
      <h2 class="text-center"> (TMBBS, DGO) </h2>
    </div>
   </div>
  </div>
 </div>
</div>
-->
<hr />
<div class="my-5">
 <div class="container">
  <div class="row">
   <h2 class="theme-text text-center my-5">Why Choose Us ?</h2>
   <div class="row text-black">
    <div class="col-md-6 mt-2 p-5">
    <div class="choose-us-card">
     <i class="fas fa-stethoscope"></i>
      <h2 class="pb-2"> Greate Acuracy</h2>
      <p class="fs-3"> 
        Take care of your body. It's the only place you have to liv. 
       You dare what you eat from your head down be have to live.
      </p>
    </div>
     
    </div>
    <div class="col-md-6 mt-2 p-5">
      <div class="choose-us-card">
      <i class="fas fa-user-tie"></i>
      <h2 class="pb-2"> Trusted & Nice </h2>
      <p class="fs-3"> 
        Take care of your body. It's the only place you have to liv. 
       You dare what you eat from your head down be have to live.
      </p>
    </div>
    </div>
    <div class="col-md-6 mt-2 p-5">
      <div class="choose-us-card ">
        <i class="fas fa-user-nurse"></i>
      <h2 class="pb-2"> Specialist Nurse </h2>
      <p class="fs-3"> 
        Take care of your body. It's the only place you have to liv. 
       You dare what you eat from your head down be have to live.
      </p>
    </div>
    </div>
    <div class="col-md-6 mt-2 p-5">
      <div class="choose-us-card">
       <i class="fas fa-syringe fa-rotate-270"></i>
      <h2 class="pb-2"> Specialist Medicine </h2>
      <p class="fs-3"> 
        Take care of your body. It's the only place you have to liv. 
       You dare what you eat from your head down be have to live.
      </p>
    </div>
    </div>
   </div>
  </div>
 </div>
</div>

<?php include_once('./layout/book-a-meeting.php'); ?>
<?php include_once('./layout/footer.php'); ?>