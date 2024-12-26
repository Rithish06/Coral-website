<?php

session_start();

$appointment_error_message = "";
$appointment_success_message = "";
       
if(!empty($_POST) && isset($_POST['appointment-form-submit'])){ 
    
    if( $_SESSION['captcha_code'] !== $_POST['captcha_code']) {
       $appointment_error_message = "Please enter valid captcha.";
       $appointment_success_message = "";
    } else { 
        $name           = $_POST['Name'];
        $date           = $_POST['date'];
        $mobile         = $_POST['mobile'];
        $time           = $_POST['time'];
        $department     = $_POST['department'];
        
        
        $subject = $name." has booked an apppointment from coraladvaancefertility.";
        
        $toEmail = "Info@coraladvancedfertility.com";
        
        
        
        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    
        // More headers
        $headers .= 'From: Info@coraladvancedfertility.com'. "\r\n";
        //$headers .= 'Cc: myboss@example.com' . "\r\n";
        
        $html = "<html>
                <head></head>
                <body>
                    <div style='padding-left: 10px;font-size: 16px;'> 
                        <div style=''>
                            Hi Sangeetha, 
                        </div>
                        <br /> <br />
                        <div style='padding-left: 20px'> 
                            Name &nbsp;: &nbsp; ".$name." 
                        </div style='padding-left: 50px'>
                        <br /> 
                        <div style='padding-left: 20px'> 
                            Mobile &nbsp;: &nbsp; ".$mobile." 
                        </div>
                        <br /> 
                        <div style='padding-left: 20px'> 
                            Date &nbsp;: &nbsp; ".$date." 
                        </div>
                         <br /> 
                         <div style='padding-left: 20px'> 
                            Time &nbsp;: &nbsp; ".$time." 
                        </div>
                        <br /> 
                         <div style='padding-left: 20px'> 
                            Department &nbsp;: &nbsp; ".$department." 
                        </div>
                        <br />
                         <br />
                        <div > 
                            With Regards,<br />
                            
                        </div>
                    </div>
                </body>
            </html>
        ";
        
       mail($toEmail, $subject, $html, $headers);
       $appointment_error_message = "";
       $appointment_success_message = "Received your request. We will contact you soon for your appointment";
    }
    

}

?>
<div class="page-banner py-5">
 <div class="container">
  <div class="row text-white">
   <h2 class="h1 text-center">Book an appointment</h2>
   <div class="row">
       <div class="col-md-12">
            <?php if(!empty($_POST) && isset($_POST['appointment-form-submit']) && strlen($appointment_success_message) > 0){ ?>
                <div class="alert alert-success" role="alert">
                   <?php echo $appointment_success_message;  ?>
                
                </div>
            <?php } else if(!empty($_POST) && isset($_POST['appointment-form-submit']) && strlen($appointment_error_message)> 0) { ?>
                <div class="alert alert-danger" role="alert">
                     <?php echo $appointment_error_message;  ?>
                
                </div>
            <?php }  ?>
       </div>
   </div>
   <div>
    <form class="appointment-form" method="post">
  <div class="form-row row">
    <div class="form-group col-md-6 my-3 px-5">
      <label for="inputEmail4" class="fs-5 mb-2">Name</label>
      <input type="text" name="Name" class="form-control" id="inputEmail4" placeholder="Enter your name" required>
    </div>
    <div class="form-group col-md-6 my-3 px-5">
      <label for="" class="fs-5 mb-2">Enter Date</label>
      <input type="date" name="date" class="form-control" id="inputPassword4" placeholder="Enter Your Date" required>
    </div>
    <div class="form-group col-md-6 my-3 px-5">
      <label for="" class="fs-5 mb-2">Enter Mobile</label>
      <input type="number" name="mobile" class="form-control" id="inputPassword4" placeholder="Enter Your Mobile Number" required>
    </div>
    <div class="form-group col-md-6 my-3 px-5">
      <label for="" class="fs-5 mb-2">Enter Query</label>
      <input type="text" name="department" class="form-control" id="inputPassword4" placeholder="Select Your Query" >
    </div>
     <div class="form-group col-md-6 my-3 px-5">
      <label for="" class="fs-5 mb-2">Enter Time</label>
      <input type="text" name="time" class="form-control" id="inputPassword4" placeholder="Select the Time" required>
    </div>
    <div class="form-group col-md-6 my-3 px-5">
      <label for="" class="fs-5 mb-2">Enter Captcha</label>
      <div class="row">
          <div class="col-4"> 
            <img src="lib/captcha/captcha.php?rand=<?php echo $random_val; ?>" id='appointmentcaptchaimg' style="width: 150px; height: auto;">
            <br />
            
          </div>
          <div class="col-8">
              <input type="text" class="form-control" id="inputPassword4" placeholder="Enter captcha" name="captcha_code" required >
          </div>
          
      </div>
        <br />
        Can't read the image? click <a href='javascript: refreshCaptcha("appointmentcaptchaimg");'>here</a> to refresh.</td>
    </div>
  </div>
  <div class="text-center my-5">
   <button type="submit"  class="btn btn-primary btn-white btn-lg" name="appointment-form-submit">Book Appointment</button>
  </div>
  
</form>
   </div>
  </div>
 </div>
</div>