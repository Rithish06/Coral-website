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
    <img src="/assets/images/water-molecules-with-copyspace-science-or-medical-2022-12-16-21-55-17-utc.png" />
   <div class="overlay">
       <div class="overlay-content h1 text-white text-bold">
           Meet Our Team
       </div>
   </div>
</div>
<div class="doctors my-5 py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10 ">
                <div class="row bg-white rounded">
                    <div class="col-md-6 p-0">
                        <img src="assets/images/Dr-Sangeetha.png">
                    </div>
                    <div class="col-md-6 p-5">
                        <h1>DR. SANGEETHA M.J</h1>
                        <br />
                        <h6>MBBS, DNB, DGO, FRM,</h6>
                        <h6>Diploma Reproductive Medicine (Germany) </h6>
                        <h6>Laparoscopic Surgeon </h6>
                        <h6>Obstetrician and Gynecologist, Fertility Specialist </h6>
                        <h6>Director & Chief Consultant </h6>
                        <br />
                        <div class="dr-info">
                             <span class="fs-6">
                                 Address &nbsp;: &nbsp;&nbsp; #1/1, 4th floor, above ICICI Bank,
                                 NEW BEL Road, R.M.V. 2nd Stage
                                 Bengaluru-560094 
                            </span>
                            <br /> <br /> <br />
                             <span class="fs-6">
                                 Email &nbsp;: &nbsp;&nbsp;  Info@coraladvancedfertility.com
                            </span>
                            <br /> <br /> <br />
                            <span class="fs-6">
                                 Phone &nbsp;: &nbsp;&nbsp;  +91 6364223969 / +91 9845639969
                            </span>
                            
                        </div>
                    </div>
                    
                    
                </div>
            </div>
            <div class="col-md-2"></div>
            
    
        </div>
    </div>
</div>

<div class="pinfo">
    <div class="container">
        <div class="row">
            <div class="col-md-3 pt-5 my-5">
                <div class="choose-us-card">
                    <i class="fas fa-user-injured"></i>
                    <span class="h1 text-white">500+</span> <br />
                    <span class="fs-6 text-white">Patients Every Day</span>
                </div>
                
            </div>
            <div class="col-md-3 pt-5 my-5">
                <div class="choose-us-card">
                    <i class="fas fa-user-md"></i>
                    <span class="h1 text-white">200+</span> <br />
                    <span class="fs-6 text-white">Qualified Doctors</span>
                </div>
            </div>
            <div class="col-md-3 pt-5 my-5">
                <div class="choose-us-card">
                    <i class="fas fa-hand-holding-usd"></i>
                    <span class="h1 text-white">10+</span> <br />
                    <span class="fs-6 text-white">Years Experience</span>
                </div>
            </div>
            <div class="col-md-3 pt-5 my-5">
                <div class="choose-us-card">
                    <i class="fas fa-stethoscope"></i>
                    <span class="h1 text-white">220+</span> <br />
                    <span class="fs-6 text-white">Diagnosis Verity</span>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include_once('./layout/footer.php'); ?>