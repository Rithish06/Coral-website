<?php 
session_start();

?>
<div class="container" style="padding:0; margin:0;">
    <div class="row mobile-layout">
     
        <div class="col-md-12">
            <?php if(!empty($_POST) && isset($_POST['contact-form']) && strlen($success_message) > 0){ ?>
                <div class="alert alert-success" role="alert">
                   <?php echo $success_message;  ?>
                
                </div>
            <?php } else if(!empty($_POST) && isset($_POST['contact-form']) && strlen($error_message)> 0) { ?>
                <div class="alert alert-danger" role="alert">
                     <?php echo $error_message;  ?>
                
                </div>
            <?php }  ?>
            <div class="contact-us-div py-3 px-5">
               
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