<?php 
session_start();

$success_message = "";
$error_message = "";

if(!empty($_POST) && isset($_POST['contact-form'])){
   
   if( $_SESSION['captcha_code'] !== $_POST['captcha_code']) {
       $error_message = "Please enter valid captcha.";
       $success_message = "";
   } else {
        // var_dump($_SESSION); var_dump($_POST);
        $subject = $_POST['First_Name']." has submitted query from coraladvaancefertility.";
        
        $toEmail = "Info@coraladvancedfertility.com";
        
        $comment = $_POST['Comment'];
        
        
        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    
        // More headers
        $headers .= 'From: Info@coraladvancedfertility.com' . "\r\n";
        //$headers .= 'Cc: myboss@example.com' . "\r\n";
        
        $html = "
            
            <html>
                <head></head>
                <body>
                    <div style='padding-left: 10px;font-size: 16px;'> 
                        <div style=''>
                            Hi Sangeetha, 
                        </div>
                        <br /> <br />
                        <div style='padding-left: 20px'> 
                            Name &nbsp;: &nbsp; ".$_POST['First_Name']." 
                        </div style='padding-left: 50px'>
                        <br /> 
                        <div style='padding-left: 20px'> 
                            Email &nbsp;: &nbsp; ".$_POST['Email']." 
                        </div>
                        <br /> 
                        <div style='padding-left: 20px'> 
                            Comment &nbsp;: &nbsp; ".$_POST['Comment']." 
                        </div>
                        
                        <br /> 
                        <div > 
                            With Regards,<br />
                            
                        </div>
                    </div>
                </body>
            </html>
        ";
        
        mail($toEmail, $subject, $html, $headers);
       $success_message = "We received your query. We will contact you soon!!";
       $error_message = "";
   }
   
   
}
?>