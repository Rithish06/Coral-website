
<!DOCTYPE html>

<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="title" content="">
  <link rel="icon" href="https://coraladvancedfertility.com/assets/img/favicon.png" type="image/x-icon" sizes="16x16">

  <!-- <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'> -->
  <!-- <link href="https://fonts.googleapis.com/css2?family=Rowdies:wght@300&display=swap" rel="stylesheet"> -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<!-- <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet"> -->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<!-- <link href="https://fonts.googleapis.com/css2?family=Caudex:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet"> -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,900;1,100;1,200;1,300;1,400;1,700&display=swap" rel="stylesheet">


  <link rel="stylesheet" href="https://coraladvancedfertility.com/assets/bootstrap/bootstrap.min.css">
  <link href="https://coraladvancedfertility.com/assets/icofont/icofont.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://coraladvancedfertility.com/assets/css/style.css">
  <link rel="stylesheet" href="https://coraladvancedfertility.com/assets/css/style1.css">
  <link rel="stylesheet" href="https://coraladvancedfertility.com/assets/css/hometheory.css">
  <link rel="stylesheet" href="https://coraladvancedfertility.com/assets/css/hometheorymedia.css">

  <link rel="stylesheet" href="https://coraladvancedfertility.com/assets/css/mediaQ.css">
  <link rel="stylesheet" type="text/css" href="https://coraladvancedfertility.com/assets/slick/slick.css">
  <link rel="stylesheet" type="text/css" href="https://coraladvancedfertility.com/assets/slick/slick-theme.css">

  <title>Coral</title>


</head>


<!-- <body onload="hideloader()" oncontextmenu="return false"> -->
  <body>
  <section id="navsticky">

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
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <nav>
            <div class="logo">
               <a href="https://coraladvancedfertility.com/"><img src="https://coraladvancedfertility.com/assets/img/logo.png" alt="Coral"></a> 
            </div>
            <input type="checkbox" id="click">
            <label for="click" class="menu-btn">
              <i class="fas fa-bars menu-btn"></i>
            </label>
            <ul id="nav_Links" class="ul_navbar">
              <li class="nav_after_ine"> <a href="https://coraladvancedfertility.com/">Home</a></li>
              <li class="nav_after_ine"> <a href="https://coraladvancedfertility.com/about">About Us</a></li>
              <li class="nav_after_ine"> <a href="https://coraladvancedfertility.com/why_coral">Why Coral</a></li>
              <li class="nav_after_ine"> <a href="https://coraladvancedfertility.com/treatment">Treatments</a></li>
               <!-- <li class="nav_after_ine"> <a href="#">Blogs</a></li> -->
              <li class="nav_after_ine"> <a class="cont_btn" href="https://coraladvancedfertility.com/contactus">Contact Us</a></li>
              <!-- <li class="nav_after_ine"><button type="submit" class="btn btn_submit_det" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Enquiry Now<img class="trecce_arrow_form" src="https://coraladvancedfertility.com/assets/img/arrow.png"></button>
</li> -->
              <li class="nav_after_ine"> <a class="cont_btn" href="#"><img class="hometheory_call_btn" src="https://coraladvancedfertility.com/assets/img/call_home.png" alt="">+916364223969</a></li>

            </ul>
          </nav>
        </div>
      </div>
    </div>
  </section><section>
  <img class="new_construction_gif" src="https://coraladvancedfertility.com/assets/img/evaluation_banner.jpg" alt="">

</section>
<section class="ivf_page">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>What is Male & Female Evaluation?</h1>
                <p>Male & Female Evaluation is a comprehensive process that involves in-depth assessments of both partners to identify any factors that may be affecting fertility. These evaluations are crucial for diagnosing potential obstacles, understanding underlying conditions, and developing personalized treatment plans. They encompass various diagnostic tests, medical history reviews, and consultations to provide a holistic view of each individual's reproductive health.</p>
                <h1>The Male & Female Evaluation Process:</h1>
                <ul>
                    <li>Initial Consultation</li>
                    <p>Your journey begins with a comprehensive consultation with our fertility specialists. During this discussion, we will explore your medical histories, any previous fertility concerns, and your family planning goals.</p>
                    <li>Medical History Review</li>
                    <p>Both partners will be asked to provide detailed medical histories, including any previous pregnancies, birth control methods used, lifestyle factors, and any known medical conditions that could affect fertility.</p>
                    <li>Physical Examinations</li>
                    <p>For female partners, a physical examination may be conducted to assess overall health, identify any gynaecological issues, and perform pelvic ultrasounds to examine the reproductive organs. For male partners, a physical examination and a semen analysis will be performed to assess sperm health and count.</p>
                    <li>Hormonal Analysis</li>
                    <p>Hormone levels are an essential part of fertility evaluation. Blood tests may be conducted to assess hormone levels in both partners, including follicle-stimulating hormone (FSH), luteinizing hormone (LH), estradiol, testosterone, and thyroid function.</p>
                    <li>Ovulatory Function</li>
                    <p>For female partners, ovulation assessment is essential. This may involve tracking basal body temperature, using ovulation predictor kits, or undergoing more advanced tests, such as progesterone blood tests or ultrasound monitoring.</p>
                    <li>Pelvic Imaging</li>
                    <p>To assess the condition of the female partner's reproductive organs, a pelvic ultrasound may be performed to examine the uterus, fallopian tubes, and ovaries.</p>
                    <li>Male Semen Analysis</li>
                    <p> A semen analysis is a crucial component of male evaluation. It assesses sperm count, motility, and morphology to determine overall sperm health and quality.</p>
                </ul>
              
                
            </div>
        </div>
    </div>
</section>








<footer>
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="abt_sanati_paragraph">
          <h6>About Coral</h6>
          <p>At Advanced Fertility & Maternity Care, we undetstand that journey towrards paranethood can be filled with excitment, home, and sometimes Challenges.</p>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="quick_links">
          <h6>Quick Liks</h6>
          <ul>
            <li><a href="https://coraladvancedfertility.com/index">Home</a></li>
            <li><a href="https://coraladvancedfertility.com/about">About Us</a></li>
            <li><a href="https://coraladvancedfertility.com/why_coral">Why Coral</a></li>
            <li><a href="https://coraladvancedfertility.com/treatment">Treaments</a></li>
            <li><a href="https://coraladvancedfertility.com/contactus">Contact Us</a></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="address">
          <h6>Our Address</h6>
        </div>
        <p> #1/1, 4th floor, above ICICI Bank,
          NEW BEL Road, R.M.V. 2nd Stage
          Bengaluru-560094</p>
        <p>Phone - +916364223969</p>
        <p>Email - info@coraladvancedfertility.com</p>
        <div class="socialmedia">
          <a href="https://www.facebook.com/profile.php?id=61556587766155" target="blank"><i class="fab fa-facebook-square fb"></i></a>
          <a href="https://www.instagram.com/coral_advanced_fertility/" target="blank"><i class="fab fa-instagram-square insta"></i></a>
          <a href="https://www.linkedin.com/" target="blank"><i class="fab fa-linkedin linked"></i></a>
          <a href="https://youtube.com/@coraladvancedfertility?si=nYEvYiDfJ-G2v9Ii" target="blank"><i class="fab fa-youtube-square you_tube"></i></a>
        </div>
      </div>
    </div>
  </div>
</footer>


<section class="bottom_footer">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div>
          <p>
            Copyrights © 2023. All Rights Reserved by Coral.


          </p>
        </div>
      </div>
      <div class="col-lg-4 text-center">
        <p class="design">
          Designed and Developed By <a href="" target="_blank">AT Team</a>
        </p>
      </div>
      <div class="col-lg-4 privacy">

        <div>
          <a href="https://coraladvancedfertility.com/privacy">Privacy Policy</a>
     
        </div>
      </div>
    </div>
  </div>
</section>


<div class=" container mobile_view">
  <span class="number_bg">
    <a href="tel:+916364223969" class="" target="_blank">
      <i class="fas fa-phone "></i>
      Call Now</a>
  </span>

  <span class="whatsapp_bg">
    <a href="https://api.whatsapp.com/send?phone=+916364223969&text=Hi%20I%20am%20interested%20in%20Coral%20Advance%20Fertitliy%20,pls%20call%20back%20and%20share%20the%20details." class="" target="_blank">
      <i class="fab fa-whatsapp "></i>
      Whatsapp</a>
  </span>
</div>






<a id="button"><i class="fas fa-chevron-up arrow_up"></i></a>

<div class="desktop_view">
  <!-- <a href="tel:+916364223969" class=" floatph" target="_blank">
    <i class="fas fa-phone my-floatp"></i>
  </a> -->
<a href="tel:+916364223969" class=" floatph" target="_blank">
    <!--<i class="fa fa-phone my-floatp"></i>-->
<img class="my-floatp" src="https://coraladvancedfertility.com/assets/img/call.png" alt="">
  </a>
  <a href="https://api.whatsapp.com/send?phone=+916364223969&text=Hi%20I%20am%20interested%20in%20Coral%20Advance%20Fertitliy%20,pls%20call%20back%20and%20share%20the%20details." class="float" target="_blank">
    <i class="fab fa-whatsapp my-float"></i>
  </a>
</div>

<script src="https://coraladvancedfertility.com/assets/js/bootstrap.min.js"></script>
<script src="https://coraladvancedfertility.com/assets/fontawesome/js/all.js"></script>
<script src="https://coraladvancedfertility.com/assets/js/Jquery.js"></script>
<script src="https://coraladvancedfertility.com/assets/js/popper.min.js"></script>
<script type="text/javascript" src="https://coraladvancedfertility.com/assets/slick/slick.min.js"></script>
<script src="https://coraladvancedfertility.com/assets/js/app.js"></script>

<script type="text/javascript">
  $(".box-video").click(function() {
    $('iframe', this)[0].src += "&amp;autoplay=1";
    $(this).addClass('open');
  });

  $(document).ready(function() {


    jQuery('.masood').click(function(e) {
      e.preventDefault();
      jQuery('.iframe_youtube_video1').attr('src', "https://www.youtube.com/embed/KBUyOSUCjQ8");
    });
    jQuery('.manish').click(function(e) {
      e.preventDefault();
      jQuery('.iframe_youtube_video2').attr('src', "https://www.youtube.com/embed/tNmmYRxj5Jg");

    });
    jQuery('.nagesh').click(function(e) {
      e.preventDefault();
      jQuery('.iframe_youtube_video3').attr('src', "https://www.youtube.com/embed/dMj7hjDeU08");

    });
    jQuery('.rama').click(function(e) {
      e.preventDefault();
      jQuery('.iframe_youtube_video4').attr('src', "https://www.youtube.com/embed/60zZi4yLgKY");

    });
    jQuery('.nagendra').click(function(e) {
      e.preventDefault();
      jQuery('.iframe_youtube_video5').attr('src', "https://www.youtube.com/embed/KOGXAny3skc");

    });
    jQuery('.pranav').click(function(e) {
      e.preventDefault();
      jQuery('.iframe_youtube_video6').attr('src', "https://www.youtube.com/embed/92tUIeFI6nw");

    });
    jQuery('.ramesh').click(function(e) {
      e.preventDefault();
      jQuery('.iframe_youtube_video7').attr('src', "https://www.youtube.com/embed/BynZq3bqpoU");

    });

    jQuery('.ramesh').click(function(e) {
      e.preventDefault();
      jQuery('.iframe_youtube_video8').attr('src', " https://www.youtube.com/embed/583Kg_irFkI");

    });
    jQuery('.ramesh').click(function(e) {
      e.preventDefault();
      jQuery('.iframe_youtube_video9').attr('src', "https://www.youtube.com/embed/LJytNJAdl0E");

    });

    jQuery('.ramesh').click(function(e) {
      e.preventDefault();
      jQuery('.iframe_youtube_video10').attr('src', "https://www.youtube.com/embed/_D8-YIy8tZk");

    });
    jQuery('.ramesh').click(function(e) {
      e.preventDefault();
      jQuery('.iframe_youtube_video11').attr('src', "https://www.youtube.com/embed/sssROSiFG7E");

    });

    // -------------------------------
    var btn = $('#button');

    $(window).scroll(function() {
      if ($(window).scrollTop() > 300) {
        btn.addClass('show');
      } else {
        btn.removeClass('show');
      }
    });

    btn.on('click', function(e) {
      e.preventDefault();
      $('html, body').animate({
        scrollTop: 0
      }, '300');
    });
    // ----------------------------------------
    // $(function() {
    //    $('#nav_Links').find('a').click(function(e) {
    //        e.preventDefault();
    //        $(this.hash).show().siblings().hide();
    //        $('#nav_Links').find('a').parent().removeClass('active')
    //        $(this).parent().addClass('active')
    //    }).filter(':first').click();
    // });

    // -----------------------------------------------------
    $('.for_slider').slick({
      autoplay: true,
      dots: true,
      autoplaySpeed: 2000,
      centerMode: true,
      infinite: true,
      arrows: false,
      slidesToShow: 3,
      slidesToScroll: 1,
      responsive: [

        {
          breakpoint: 768,
          settings: {
            arrows: false,
            slidesToShow: 1,
          }
        },
        {
          breakpoint: 480,
          settings: {
            arrows: false,
            slidesToShow: 1,
          }
        }
      ]
    });

    // ----------------------------------



    // ----------------------------------
    $('.slider').slick({
      autoplay: true,
      autoplaySpeed: 2000,
      infinite: true,
      slidesToShow: 3,
      slidesToScroll: 1,
      arrows: false,
      dots: true,

      responsive: [

        {
          breakpoint: 768,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,

          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,

          }
        }

      ]
    });


    // /////////////////////////////
    $('.branches2').slick({
      autoplay: true,
      dots: true,
      infinite: true,
      autoplay: true,
      arrows: false,
      autoplaySpeed: 2000,
      slidesToShow: 4,
      slidesToScroll: 1,


      responsive: [

        {
          breakpoint: 768,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
          }
        }

      ]
    });

    // -------------------------
    $('.brand_img').slick({
      autoplay: true,
      dots: true,
      infinite: true,

      arrows: false,
      autoplaySpeed: 2000,
      slidesToShow: 3,
      slidesToScroll: 1,


      responsive: [

        {
          breakpoint: 768,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            dots: false,
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            dots: false,
          }
        }

      ]
    });
    // ------------------------------------------------

    // ------------
    $(function() {
      var url = window.location.href;
      $("#nav_Links a").each(function() {

        if (url == (this.href)) {
          $(this).closest("li").addClass("active");

          $(this).closest("li").parent().parent().addClass("active");
        }
      });
    });



    // -------------------------------------------





    // ----------UTM CODE---------------------------



    function getQueryVariable(variable) {
      var query = window.location.search.substring(1);
      var vars = query.split("&");
      for (var i = 0; i < vars.length; i++) {
        var pair = vars[i].split("=");
        if (pair[0] == variable) {
          return pair[1];
        }
      }
      return (false);
    }
    jQuery(document).ready(function() {
      jQuery('form').find('input.utm_source').each(function() {
        var a = getQueryVariable('utm_source');
        if (a) {
          jQuery(this).val(a);
        }
      });
      jQuery('form').find('input.utm_medium').each(function() {
        var a = getQueryVariable('utm_medium');
        if (a) {
          jQuery(this).val(a);
        }
      });
      jQuery('form').find('input.utm_campaign').each(function() {
        var a = getQueryVariable('utm_campaign');
        if (a) {
          jQuery(this).val(a);
        }
      });
      jQuery('form').find('input.utm_term').each(function() {
        var a = getQueryVariable('utm_term');
        if (a) {
          jQuery(this).val(a);
        }
      });
      jQuery('form').find('input.utm_content').each(function() {
        var a = getQueryVariable('utm_content');
        if (a) {
          jQuery(this).val(a);
        }
      });
      jQuery('form').find('input.utm_site').each(function() {
        var a = getQueryVariable('utm_site');
        if (a) {
          jQuery(this).val(a);
        }
      });
      jQuery('form').find('input.utm_url').each(function() {
        var a = getQueryVariable('utm_url');
        if (a) {
          jQuery(this).val(a);
        }
      });

      jQuery('form').find('input.utm_title').each(function() {
        var a = getQueryVariable('utm_title');
        if (a) {
          jQuery(this).val(a);
        }
      });

      jQuery('form').find('input.utm_timestamp').each(function() {
        var a = getQueryVariable('utm_timestamp');
        if (a) {
          jQuery(this).val(a);
        }
      });

      jQuery('form').find('input.utm_itemID').each(function() {
        var a = getQueryVariable('utm_itemID');
        if (a) {
          jQuery(this).val(a);
        }
      });
    });

    function createCookie(name, value, days) {
      var expires = "";
      if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        var expires = "; expires=" + date.toGMTString();
      }
      document.cookie = name + "=" + value + expires + "; path=/";
    }

    function readCookie(name) {
      var nameEQ = name + "=";
      var ca = document.cookie.split(';');
      for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
      }
      return null;
    }

    function eraseCookie(name) {
      createCookie(name, "", -1);
    }
    var c_name = "_aaa_utmz";
    if (getQueryVariable("utm_source") != "") {
      createCookie("_aaa_utmz", getQueryVariable("utm_source") + "|" + getQueryVariable("utm_medium") + "|" + getQueryVariable("utm_term") + "|" + getQueryVariable("utm_campaign") + "|" + getQueryVariable("utm_content") + "|" + getQueryVariable("utm_site") + "|" + getQueryVariable("utm_url") + "|" + getQueryVariable("utm_title") + "|" + getQueryVariable("utm_timestamp") + "|" + getQueryVariable("utm_itmeID"), 60);
    } else if (readCookie(c_name)) {
      c_start = readCookie(c_name);
      var _pipe = c_start.split("|");
      jQuery("input[name=utm_source], .utm_source").val(_pipe[0]);
      jQuery("input[name=utm_medium], .utm_medium").val(_pipe[1]);
      jQuery("input[name=utm_term], .utm_term").val(_pipe[2]);
      jQuery("input[name=utm_campaign], .utm_campaign").val(_pipe[3]);
      jQuery("input[name=utm_content], .utm_content").val(_pipe[4]);
      jQuery("input[name=utm_site], .utm_site").val(_pipe[5]);
      jQuery("input[name=utm_url], .utm_url").val(_pipe[6]);
      jQuery("input[name=utm_title], .utm_title").val(_pipe[7]);
      jQuery("input[name=utm_timestamp], .utm_timestamp").val(_pipe[8]);
      jQuery("input[name=utm_itemID], .utm_itemID").val(_pipe[9]);

    }




  });
</script>
<script>
  $('.autoplay').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    dots: true,
  });

  $('.slide-next').click(function(e) {

    //e.preventDefault(); 

    $('.responsive').slick('slickNext');

  });


  $('.dcterminal').slick({
    dots: false,

    arrows: true,

    infinite: true,

    speed: 2000,

    slidesToShow: 1,

    slidesToScroll: 1,

    autoplay: true,

    autoplaySpeed: 2000,
  });

  //banner contents sliders
  $('.contentSlider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2500,
    cssEase: 'ease-out',
    dots: true,
    arrows: false,
  });


  // Bottom to Top Movement
  const toTop = document.querySelector(".to-top");

  window.addEventListener("scroll", () => {

    if (window.pageYOffset > 100) {

      toTop.classList.add("highlight");

    } else {

      toTop.classList.remove("highlight");
    }
  });
</script>


</body>

</html>