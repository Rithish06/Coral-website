<hr style="margin: 0;padding: 0;">
<!-- !Content -->
<footer class="">
 <!--<img src="/assets/images/footer.png">-->
 <div class="">
 <div class="container py-5 ">
  <div class="row">
    <div class="col-md-12"></div>
    <div class="col-md-12">
     <h2 class="pb-4">Contact Info</h2>
     <div class="row">
      <div class="col-md-12">
       <div class="row footer-row-info">
        <div class="col-md-4 my-3">
             <img src="/assets/images/contact-footer.PNG" />  
            <!-- 
            <span> <i class="fa fa-mobile"></i> 
            &nbsp;  Dr. Sangeetha M J  : +91 6364223969 <br />
            &nbsp;&nbsp;&nbsp;&nbsp;  Dr. Shivananda N D : +91 9945639969 <br />
            </span>
            -->
        </div>
        <div class="col-md-4 my-3">
            <img src="/assets/images/footer-email-3.PNG" />
            <!--
            <span><i class="fa fa-envelope"></i> &nbsp; Info@coraladvancedfertility.com</span>
             -->
        </div>
        <div class="col-md-4 my-3"><span><i class="fa fa-city"></i> &nbsp;
            #1/1, 4th floor, above ICICI Bank, 
            <br />
            &nbsp;&nbsp;&nbsp;&nbsp; NEW BEL Road, R.M.V. 2nd Stage
            <br />
            &nbsp;&nbsp;&nbsp;&nbsp; Bengaluru-560094
        </span></div>
       </div>
      </div>
      <!--
      <div class="col-md-12 mt-3 ">
       <div class="row footer-row-info">
        <div class="col-md-4"><span> <i class="fab fa-facebook-square"></i> &nbsp; mail@info.com</span></div>
        <div class="col-md-4"><span><i class="fab fa-instagram"></i> &nbsp; mail@info.com</span></div>
        <div class="col-md-4"><span><i class="fab fa-twitter-square"></i> &nbsp; mail@info.com</span></div>
       </div>
      </div>
      -->
     </div>
    </div>
  </div>
 </div>
</div>
</footer>

<!-- Modal -->
<div class=" modal fade" id="contactModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered  modal-lg">
    <div class="modal-content" >
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Contact Us</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body " style="padding:0; margin:0;" id="contact-form-body">
          Loading....
      </div>
    </div>
  </div>
</div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bs5-lightbox@1.8.3/dist/index.bundle.min.js"></script>
<script type='text/javascript'>
function refreshCaptcha(type="captchaimg"){
	var img = document.images[type];
	img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
}

    var contactModal     = document.getElementById('contactModal')
    var contactModalBody = document.getElementById('contact-form-body');

    contactModal.addEventListener('shown.bs.modal', function () {
      fetch('/layout/contact-us-form').then(function(data){
          return data.text()
      }).then(function(data){
          contactModalBody.innerHTML  = data;
      })
    })
</script>

</html>