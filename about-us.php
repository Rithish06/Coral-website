<?php include_once('./layout/header.php'); ?>
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
            var myModal = new bootstrap.Modal(document.getElementById('myDialog'), {
                keyboard: false
            });
            myModal.show();
        });
    </script>
<div class="banner">
    <img src="/assets/images/Rectangle 17331.png" />
   <div class="overlay">
       <div class="overlay-content h1 text-white text-bold">
           About Us
       </div>
   </div>
</div>

<!-- content -->
<div class="container my-5 about-us">
    <div class="row">
        <div class="col-md-6">
            <h2 class="h1 mb-5"> What we offer</h2>
            <h2> Welcome to our Advance Fertility & Maternity Care Center!</h2>
            <p class="mt-2 mb-3">
                At Advanced Fertility & Maternity Care, we undetstand that
                journey towrards paranethood can be flled with excitment, home,
                and sometimes Challenges.
                <br/>
                Out Dedicated team of medical professionals is here to provide
                you with compassion-nate care, advanced fertility treaments, and
                comprehensive maternity.
            </p>
            <h2>Our Mission</h2>
            <p class="mt-2">
                Put mission is to help individuals and couples achienve their dream of starting or expanding their families. We are comiteed to providing personalized evedince.
            </p>
        </div>
        <div class="col-md-6">
            <img src="/assets/images/Rectangle 17333.png">
        </div>
    </div>
</div>

<div class="container my-5">
    <div class="row our-services">
        <h2 class="text-center"> Our Services </h2>
        <div class="col-md-3 px-5 py-5">
            <div class="">
                <img src="/assets/images/noun-caesarean-5043089.png">
            </div>
             <h5 class="text-center mt-3">Labor and Delivery</h5>
        </div>
        <div class="col-md-3 px-5 py-5">
            <div class="">
                <img src="/assets/images/noun-bladder-2575062.png">
            </div>
            <h5 class="text-center mt-3">Bladder & Pelvic Floor Health</h5>
        </div>
        <div class="col-md-3 px-5 py-5">
            <div class="">
                <img src="/assets/images/noun-ivf-5537018.png">
            </div>
             <h5 class="text-center mt-3">IVF</h5>
        </div>
        <div class="col-md-3 px-5 py-5">
            <div class="">
                <img src="/assets/images/noun-pregnancy-1792120.png">
            </div>
             <h5 class="text-center mt-3">High-Risk Pregnency Test</h5>
        </div>
    </div>
</div>
<?php include_once('./layout/footer.php'); ?>