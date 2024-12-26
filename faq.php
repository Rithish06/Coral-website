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
          FAQ's
       </div>
   </div>
</div>

<div class="faq my-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4 heading nav-tabs" id="nav-tabs" role="tablist">
                <h2>Services </h2>
                <div class="active"><a class="active" href="#1a" data-bs-toggle="tab" role="tab">Bladder & Pelvic Floor Health</a></div>
                <div><a href="#2a" data-bs-toggle="tab" role="tab">Male Fetility</a></div>
                <div><a href="#3a"  data-bs-toggle="tab" role="tab">Labor & Delivery</a></div>
                <div><a href="#4a"  data-bs-toggle="tab" role="tab">IVF</a></div>
            </div>
            <div class="col-md-8 content ">
                <div class="tab-content clearfix">
        			  <div class="tab-pane active mt-3" id="1a" role="tabpanel" >
                          <div class="col-md-12 my-3 py-4">
                               <span class="h5 number">01</span> &nbsp;&nbsp;
                               <span class="h5">What is Peliv Floor?</span>
                               <br />
                              
                               <p class="fs-5 mx-5">
                                  The pelvic floor is group of muscles and tissues that form a hammock-like structure at the bottom of the pelvis. It supports the pelvic organs, including the bladder, uterus, and rectum.
                               </p>
                          </div>
                          
                          <div class="col-md-12 my-3 py-4">
                              <span class="h5 number">02</span> &nbsp;&nbsp;
                               <span class="h5">
                                What is the role of the pelvic floor muscles?
                               </span>
                               <br />
                             
                               <p class="fs-5 mx-5">
                                  The pelvic floor is muscles play a crucial role in bladder and bowel control, as well as sexual function. They help maintain continence, support the pelvic organs, and provide stability to the lower back and pelvis.
                               </p>
                          </div>
                          
                          <div class="col-md-12 my-3 py-4">
                              <span class="h5 number">03</span> &nbsp;&nbsp;
                               <span class="h5">
                                What are common bladder problems in women?
                               </span>
                               <br />
                              
                               <p class="fs-5 mx-5">
                                  Common bladder problems in women include urinary incotinence (leakage or urine), overactive bladder (frequent and urgent need to urinate), and urinary tract infections (UTIs).
                               </p>
                          </div>
                          
                          <div class="col-md-12 my-3 py-4">
                              <span class="h5 number">04</span> &nbsp;&nbsp;
                               <span class="h5">
                                What can I do maintain the healty bladder?
                               </span>
                                <br />
                              
                               <p class="fs-5 mx-5">
                                    To Maintain a healthy bladder, you can: 
                               </p>
                               
                             
                               <ol class="fs-5  mx-5">
                                   <li class="pb-3">
                                       Stay hydrated but avoide excessive fluid intake before bedtime.
                                   </li>
                                   <li class="pb-3">
                                       Practice good toilet habits, such as emptying your bladder completely and not delaying urination. 
                                   </li>
                                   <li>
                                       Maintain a healthy weight.
                                   </li>
                                   <li>
                                       Avoid or limit bladder irritants such as caffeine, alcohol, and spicy foods.
                                   </li>
                                   <li>
                                       Practice pelvic floor exercises to strengthen the muscles.
                                   </li>
                               </ul>
                          </div>
                          
                          <div class="col-md-12 my-3 py-4">
                              <span class="h5 number">05</span> &nbsp;&nbsp;
                               <span class="h5">
                                What are pelvic floor exercises and how do I do them?
                               </span>
                               <br />
                              
                               <p class="fs-5 mx-5">
                                 Pelvic floor exercises, also known as Kegel exercises, involve contracting and relaxing the pelvic floor muscles. To perofm them, imagine stopping the flow of urine midsream. Squeeze and lift the muscles in that area, hold for a few seconds and then relax. Repeat this several times a day.
                               </p>
                          </div>
                          
                          <div class="col-md-12 my-3 py-4">
                              <span class="h5 number">06</span> &nbsp;&nbsp;
                               <span class="h5">
                                When should I see healthcare provider about bladder or pelvic floor issues?
                               </span>
                               <br />
                               
                               <p class="fs-5 mx-5">
                                 You should consider seeing a healthcare provider if you experience persistent symptoms such as urinary incontinence, frequent unrination, pain during urination, plevic pain, or if your quality of life is affected by bladder or pelvic floor problems.
                               </p>
                          </div>
                          
                          
                	   </div>
                		<div class="tab-pane mt-3 " id="2a" role="tabpanel" >
                         <div class="col-md-12 my-3 py-4">
                              <span class="h5 number">01</span> &nbsp;&nbsp;
                               <span class="h5">
                                What is male fertility?
                               </span>
                               <br />
                              
                               <p class="fs-5 mx-5">
                                 Male fertility refers to man's ability to impregnate a woman and father a child. It depends on the quantity, quality and motility (movment) of his sperm.
                               </p>
                          </div>
                          
                          <div class="col-md-12 my-3 py-4">
                              <span class="h5 number">02</span> &nbsp;&nbsp;
                               <span class="h5">
                                What factors can affect male fertility?
                               </span>
                               <br />
                              
                               <p class="fs-5 mx-5">
                                 Several factors can imact male fertility, including age, health conditions (such as diabetes or infections), lifestyle choices  (smoking, excessive alcohol consumption, drug use), exposure to toxins, hormonal imbalances, obesity, certain medications, and genetic factors.
                               </p>
                          </div>
                          
                          <div class="col-md-12 my-3 py-4">
                              <span class="h5 number">03</span> &nbsp;&nbsp;
                               <span class="h5">
                                How common is male infertility?
                               </span>
                               <br />
                               
                               <p class="fs-5 mx-5">
                                Male infertility is relatively common. About 15% of couples worldwide face difficulties conceiving, and in approxmately 40% of these case, male factors contribute to infertility.
                               </p>
                          </div>
                          
                          <div class="col-md-12 my-3 py-4">
                              <span class="h5 number">04</span> &nbsp;&nbsp;
                               <span class="h5">
                                Can lifestyle choices affect male fertility?
                               </span>
                               <br />
                             
                               <p class="fs-5 mx-5">
                                Yes, certain lifestyle choices can have significant impact on male fertility. Tobacco smoking, excessive alcohol consumption, drug use (including anabolic steroids), obesity, poor diet, sedentary lifestyle and prolonged exposure to high temperatures ( such as hot tubs on saunas) can.
                               </p>
                          </div>
                          
                          <div class="col-md-12 my-3 py-4">
                              <span class="h5 number">05</span> &nbsp;&nbsp;
                               <span class="h5">
                                Can stress affect male fertility?
                               </span>
                               <br />
                               
                               <p class="fs-5 mx-5">
                                Yes, chronic stress can potentially affect male fertility. Stress hormones, such as cortisol, may disrupt hormone levels and sperm production. It is is recommended to manage stress through relaxation techniques, exercise and seeking support when needed.
                               </p>
                          </div>
                          
                          <div class="col-md-12 my-3 py-4">
                              <span class="h5 number">06</span> &nbsp;&nbsp;
                               <span class="h5">
                                How does age affect male fertility?
                               </span>
                               <br />
                              
                               <p class="fs-5 mx-5">
                                While women have well-known decline in fertility with age, men also experience changes. As men get older, sperm count, sperm mortility and semen volume may decrease and the risk of genetic abnormalities in sperm may increase. However, men can still father children well into their later.
                               </p>
                          </div>
                          
                          <div class="col-md-12 my-3 py-4">
                              <span class="h5 number">07</span> &nbsp;&nbsp;
                               <span class="h5">
                                Can sexually transmitted infections (STIs) impact male fertility?
                               </span>
                               <br />
                              
                               <p class="fs-5 mx-5">
                                Yes, certain STIs can affect male fertility. Infections like chlamydia or gonorrhea. If left untreated, can lead to conditions like epididymitis or prostatitis, which may cause scarring and blockages in the reprodcutive system, affecting sperm production and transport.
                               </p>
                          </div>
                          
                		</div>
                        
                        <div class="tab-pane" id="3a" role="tabpanel" >
                          <div class="col-md-12 my-3 py-4">
                              <span class="h5 number">01</span> &nbsp;&nbsp;
                               <span class="h5">
                                What is labor?
                               </span>
                               <br />
                              
                               <p class="fs-5 mx-5">
                                Labor is the process by which a baby is born. It involves the rhythmic contractions of the uterus that help to dilate the cervix and push the baby through the birth canal.
                               </p>
                          </div>
                          
                          <div class="col-md-12 my-3 py-4">
                              <span class="h5 number">02</span> &nbsp;&nbsp;
                               <span class="h5">
                                How do I know when I'm in labor?
                               </span>
                               <br />
                               
                               <p class="fs-5 mx-5">
                                Signs of labor can include regular contractions that become progressively stronger and closer together, a "bloody show"(mucus tinged with blood), rupture of the amniotic sac (water breaking), and a sensations of pressure or the baby moving down in the pelvis. If you're unsure, it's best to
                               </p>
                          </div>
                          
                          <div class="col-md-12 my-3 py-4">
                              <span class="h5 number">03</span> &nbsp;&nbsp;
                               <span class="h5">
                                How long does labor typically last?
                               </span>
                               <br />
                              
                               <p class="fs-5 mx-5">
                                Labor duration varies for each individual, In general, for first-time mothers, labor can last 12 to 24 hours or longer. For women who have given birth before, labor may be shorter, typically around 6 to 12 hours. However, it's important to note that labor lengths can vary widely and may be influenced by factors such as then woman's health, the baby's positions, and other individual.
                               </p>
                          </div>
                          
                          <div class="col-md-12 my-3 py-4">
                              <span class="h5 number">04</span> &nbsp;&nbsp;
                               <span class="h5">
                                How long does a typical labor and delivery last?
                               </span>
                               <br />
                              
                               <p class="fs-5 mx-5">
                                The length of labor and delivery can vary significantly. For first-time labor can last 12 to 8 hours on average. Subsequent labors are often shorter, typiecally lasting 6 to 8 hours. However, every woman's experience is unique, and labor duration can be influenced by.
                          </div>
                          
                          <div class="col-md-12 my-3 py-4">
                              <span class="h5 number">05</span> &nbsp;&nbsp;
                               <span class="h5">
                                What are the signs of labor?
                               </span>
                               <br />
                               
                               <p class="fs-5 mx-5">
                               Signs of labor may include regular contractions that increase in frequency and intensity, the rupture of the amniotic sac (water breaking), a bloody show (mucus tinged with blood), and the baby's movement shifting downward in pelvis.
                               </p>
                          </div>
                          
                          
                          <div class="col-md-12 my-3 py-4">
                              <span class="h5 number">06</span> &nbsp;&nbsp;
                               <span class="h5">
                                Can I have a natural birth without pain medication?
                               </span>
                               <br />
                              
                               <p class="fs-5 mx-5">
                                Yes, many women choose to have a natural birth without pain medication. Techniques such as breathng exercises, relaxation techniques, hydrotherapy, and movement can help manage pain during labor. It's important to discuss your preferences with your healthcare provider and have a
                               </p>
                          </div>
                          
        				</div>
        				<div class="tab-pane mt-3" id="4a" role="tabpanel" >
                             <div class="col-md-12 my-3 py-4">
                              <span class="h5 number">01</span> &nbsp;&nbsp;
                               <span class="h5">
                               What is IVF?
                               </span>
                               <br />
                               
                               <p class="fs-5 mx-5">
                               IVF, or Vitro Fertilization, is a type of assisted reproductive technology (ART) that involves the fertilization of an egg with sperm outside the body, in a laboratory setting. The tem "in vitro" means "in glass" referring to the laboratory dish where the fertilization take place. 
                               </p>
                          </div>
                          <div class="col-md-12 my-3 py-4">
                              <span class="h5 number">02</span> &nbsp;&nbsp;
                               <span class="h5">
                                   What medications are used during IVF?
                               </span>
                               <br />
                              
                               <p class="fs-5 mx-5">
                                   During the IVF process, various medications are used to support the different stages of treatment. Ovarian stimulation medications, such as Follicle-Stimulating Hormone (FSH), help stimulate the ovaries to produce multiple eggs. Gonadotropin-Releasing Hormone (GnRH) agonists or antagonists are used to regulate follicle development and prevent premature ovulation. Human Chorionic Gonadotropin (hCG) triggers the final maturation and release of eggs. Progesterone is administered to support the uterin lining for embryo implantation. The specific medications and dosages are tailored to each individual's needs. It's important to consult with fertility specialist who will  provide personalized guidance and monitoring throughout the IVF process.  
                               </p>
                          </div>
                          
                          <div class="col-md-12 my-3 py-4">
                              <span class="h5 number">03</span> &nbsp;&nbsp;
                               <span class="h5">
                                   Who can benefit from IVF?
                               </span>
                               <br />
                             
                               <p class="fs-5 mx-5">
                              IVF can help individuals or couples who have fertility issues such as blocked fallopian tubes, low sperm count, ovulation disorders, or unexplained infertility.
                               </p>
                          </div>
                          
                           <div class="col-md-12 my-3 py-4">
                              <span class="h5 number">04</span> &nbsp;&nbsp;
                               <span class="h5">
                                   How successful is IVF?
                               </span>
                               <br />
                              
                               <p class="fs-5 mx-5">
                              Success rates vary depending on several factors, including the woman's age, the quailty of eggs and sperm, the expertise of the fertility clinic and any underlying fertility issues. Sucess rates are typically higher for younger women. 
                               </p>
                          </div>
                          
                           <div class="col-md-12 my-3 py-4">
                              <span class="h5 number">05</span> &nbsp;&nbsp;
                               <span class="h5">
                                   How long does the IVF process take?
                               </span>
                               <br />
                               
                               <p class="fs-5 mx-5">
                                  The entier IVF process usually takes several weeks to complete. It involves ovarian stimulation, egg retrieval, fertilization, embryo culture, embryo transfer and subsequent monitoring for pregnancy. The specific timeline may vary depending on individual circumstances and the clinic's
                          </div>
                          
                           <div class="col-md-12 my-3 py-4">
                              <span class="h5 number">06</span> &nbsp;&nbsp;
                               <span class="h5">
                                   How much does IVF cost?
                               </span>
                               <br />
                              
                               <p class="fs-5 mx-5">
                                  The cost of IVF varies depending on factors such as geographic location, clinic reputation, specific treatments required, and any additional procedures or medications. It is recommended to inquire about the cost with the chosen fertility clinic.
                               </p>
                          </div>
                          
                		</div>
        		</div>
            </div>
            
        </div>
    </div>
</div>
<?php include_once('./layout/footer.php'); ?>