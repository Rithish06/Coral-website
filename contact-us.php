
<?php include_once('./layout/header.php'); ?>
<head>
    <title>
    Contact Coral Advanced Fertility - Book Your Consultation
    </title>
    <meta name="description" content="Contact Coral Advanced Fertility to book your consultation and start your journey to parenthood with expert fertility care.">
    <meta name="keywords" content="contact Coral Advanced Fertility, book consultation, fertility care, Coral Fertility">
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
    <img src="/assets/images/telephone-contact-us-with-call-center-communicat-2023-01-12-05-53-27-utc.png" />
   <div class="overlay">
       <div class="overlay-content h1 text-white text-bold">
           Contact us
       </div>
   </div>
</div>

<div class="container">
    <div class="row my-5 py-5 px-5 mobile-layout">
        <div class="col-md-4">
            <div class="my-5">
                <h2 class="h1 mt-2"> Get in touch with us</h2>
                <span>We provide comprehansive fertility & women care.</span>
            </div>
            <div class="my-5">
                <h4 class="mb-2">Find us at</h4>
                <hr />
                #1/1, 4th floor, above ICICI Bank,
                 NEW BEL Road, R.M.V. 2nd Stage
                 Bengaluru-560094
            </div>
            
            <div class="mb-5">
                <h4 class="mb-2"> Reach out to us at</h4>
                 <!--
                <i class="fa fa-envelope"></i> &nbsp; Info@coraladvancedfertility.com 
                <br />
                <br />
                <i class="fas fa-phone-alt"></i>  &nbsp; +91 6364223969
                -->
                <img src="assets/images/contact-number.PNG" class="w-100" /> 
            </div>
            
        </div>
        <div class="col-md-8">
            <?php if(!empty($_POST) && isset($_POST['contact-form']) && strlen($success_message) > 0){ ?>
                <div class="alert alert-success" role="alert">
                   <?php echo $success_message;  ?>
                
                </div>
            <?php } else if(!empty($_POST) && isset($_POST['contact-form']) && strlen($error_message)> 0) { ?>
                <div class="alert alert-danger" role="alert">
                     <?php echo $error_message;  ?>
                
                </div>
            <?php }  ?>
            <div class="contact-us-div py-5 px-5">
                <h2> Contact Us</h2>
                 <form class="appointment-form" method="post">
                  <div class="form-row row">
                    <div class="form-group col-md-6 my-3">
                      
                      <input type="text" class="form-control" id="inputEmail4" placeholder="Enter your name" name="First_Name" required>
                    </div>
                    <div class="form-group col-md-6 my-3 ">
                      
                      <input type="email" class="form-control" id="inputPassword4" placeholder="Enter Your Email" name="Email"required >
                    </div>
                   
                    <div class="form-group col-md-12 my-3 ">
                      
                      <textarea  class="form-control"  placeholder="Your message" rows="7" name="Comment" required></textarea>
                    </div>
                    
                    <div class="form-group col-md-6 my-3 text-left">
                      
                      <img src="lib/captcha/captcha.php?rand=<?php echo $random_val;?>" id='captchaimg'>
                      <br />
                       Can't read the image? click <a href='javascript: refreshCaptcha();'>here</a> to refresh.
                    </div>
                    
                    
                    <div class="form-group col-md-6 my-3 ">
                     
                      <input type="text" class="form-control" id="inputPassword4" placeholder="Enter captcha" name="captcha_code" required >
                    </div>
                    
                    
                  </div>
                  <div class="form-group col-md-12 my-3 ">
                      
                      <input  type="checkbox" required> 
                      I agree to the pricacy policy
                    
                  </div>
                  <div class="text-center my-3">
                   <button type="submit" class="btn btn-primary btn-lg" name="contact-form">Submit</button>
                  </div>
                  
                </form>
            </div>
        </div>
    </div>
</div>
<?php include_once('./layout/book-a-meeting.php'); ?>
<?php include_once('./layout/footer.php'); ?>

