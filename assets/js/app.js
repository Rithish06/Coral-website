

// ////////////////////////////////////////////
// document.onkeydown = function(e) {
//     if(event.keyCode == 123) {
//        return false;
//     }
//     if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) {
//        return false;
//     }
//     if(e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)) {
//        return false;
//     }
//     if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) {
//        return false;
//     }
//     if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) {
//        return false;
//     }
//   }
change_card_height(["brand_first_card","our_philosphy_card", "boss_card_detais","second_card"])

function change_card_height(class_name_arr) {
    for (let i = 0; i < class_name_arr.length; i++) {
        var class_name = class_name_arr[i];
        console.log(class_name)
        let height_arr = [];
        let card_arr = document.getElementsByClassName(class_name);

        const myTimeout = setTimeout(function () {
            for (let i = 0; i < card_arr.length; i++) {
                card_arr[i].style.height = "auto";
            }
            for (let i = 0; i < card_arr.length; i++) {
                let height_data = card_arr[i].getBoundingClientRect();
                elemHeight = height_data.height;
                height_arr.push(parseInt(elemHeight));
            }
            var max_height = (Math.max.apply(Math, height_arr));
            for (let i = 0; i < card_arr.length; i++) {
                card_arr[i].style.height = (max_height + 0) + "px";
            }
        }, 500);

    }
}

// Open the Modal
function openModal() {
  document.getElementById("myModal").style.display = "block";
}

// Close the Modal
function closeModal() {
  document.getElementById("myModal").style.display = "none";
  var iframe_youtube_video = document.getElementsByClassName("iframe_youtube_video");
  for (let i = 0; i < iframe_youtube_video.length; i++) {
    const element = iframe_youtube_video[i];
    element.setAttribute("src", "");
  }
  console.log
}

var slideIndex = 11;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  
}



//   window.onscroll = function() {myFunction()};

// var navBar = document.getElementById("navsticky");
// // var sticky = navBar.offsetTop;

// function myFunction() {
//   if (window.pageYOffset >= 100) {
//     navBar.classList.add("sticky")
   

//   } else {
//     navBar.classList.remove("sticky");
//   }
// }


  // for (i = 0; i < dots.length; i++) {
  //   dots[i].className = dots[i].className.replace(" active", "");
  // }
  
  // // dots[slideIndex - 1].className += " active";
  // captionText.innerHTML = dots[slideIndex - 1].alt;
// }

// -------------------------------SERVIVE SLIDER---------------------------
// var activeLinks  = document.getElementById('nav_Links');
// for (var i = 0; i < activeLinks.links.length; i++) {
 
//   if (activeLinks.links[i].href == activeLinks.URL) {
//     activeLinks.links[i].className = 'active';
    
//   }
// }


// /---------------------------------------


// var header = document.getElementById("myDIV");
// var btns = header.getElementsByClassName("btn");
// for (var i = 0; i < btns.length; i++) {
//   btns[i].addEventListener("click", function() {
//   var current = document.getElementsByClassName("active");
//   current[0].className = current[0].className.replace(" active", "");
//   this.className += " active";
//   });
// }

// --------------------------------------------

function openModal() {
  var modalId =  $('#myModal');
  modalId.fadeIn('slow');
  document.getElementById("myModal").style.display = "block";
  

}

// Close the Modal
function closeModal() {
  var modalId =  $('#myModal');
  document.getElementById("myModal").style.display = "none";
  modalId.fadeOut('slow');

  // var iframe_youtube_video = document.getElementsByClassName("iframe_youtube_video");
  // for (let i = 0; i < iframe_youtube_video.length; i++) {
  //   const element = iframe_youtube_video[i];
  //   element.setAttribute("src", "");
  // }
  // console.log
}


function testimonial_p_function() {
  $(".testimonial_p").toggleClass("testimonial_p_show");
  var btn_val = $(".myBtn").val() == "Read More" ? "Read Less" : "Read More";
  $(".myBtn").val(btn_val);
}