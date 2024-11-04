(function($) {
  "use strict"; 


  $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: (target.offset().top - 54)
        }, 1000, "easeInOutExpo");
        return false;
      }
    }
  });


  $('.js-scroll-trigger').click(function() {
    $('.navbar-collapse').collapse('hide');
  });

 
  $('body').scrollspy({
    target: '#mainNav',
    offset: 56
  });

  var navbarCollapse = function() {
    if ($("#mainNav").offset().top > 100) {
      $("#mainNav").addClass("navbar-shrink");
    } else {
      $("#mainNav").removeClass("navbar-shrink");
    }
  };

  navbarCollapse();
  
  $(window).scroll(navbarCollapse);

})(jQuery); 


var url = window.location.pathname;


//Top-Button


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
  $('html, body').animate({scrollTop:0}, '300');
});


 
  



/*slides im header*/
/*
var slideIndex = 1;
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
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
} 

*/

//slides für Portfolio

/*NUMMER 1*/
/*var simpleSlides1 = function () {
  var erster;
  var slides1 = document.querySelectorAll(".slides1");
  for (erster = 0; erster < slides1.length; erster++) {
    slides1[erster].setAttribute("style","display:none");
  }
  count1++;
  if (count1 > slides1.length) { count1 = 1; }
  slides1[count1-1].setAttribute("style","display:block");
  setTimeout(simpleSlides1, 3600);
}

var count1 = 0;
simpleSlides1();*/


/*NUMMER 2*/
var simpleSlides2 = function () {
  var zweiter;
  var slides2 = document.querySelectorAll(".slides2");
  for (zweiter = 0; zweiter < slides2.length; zweiter++) {
    slides2[zweiter].setAttribute("style","display:none");
  }
  count2++;
  if (count2 > slides2.length) { count2 = 1; }
  slides2[count2-1].setAttribute("style","display:block");
  setTimeout(simpleSlides2, 3600);
}

var count2 = 0;
simpleSlides2();


/*NUMMER 3*/
var simpleSlides3 = function () {
  var dritter;
  var slides3 = document.querySelectorAll(".slides3");
  for (dritter = 0; dritter < slides3.length; dritter++) {
    slides3[dritter].setAttribute("style","display:none");
  }
  count3++;
  if (count3 > slides3.length) { count3 = 1; }
  slides3[count3-1].setAttribute("style","display:block");
  setTimeout(simpleSlides3, 3600);
}

var count3 = 0;
simpleSlides3();


/*NUMMER 4*/
var simpleSlides4 = function () {
  var vierter;
  var slides4 = document.querySelectorAll(".slides4");
  for (vierter = 0; vierter < slides4.length; vierter++) {
    slides4[vierter].setAttribute("style","display:none");
  }
  count4++;
  if (count4 > slides4.length) { count4 = 1; }
  slides4[count4-1].setAttribute("style","display:block");
  setTimeout(simpleSlides4, 3600);
}

var count4 = 0;
simpleSlides4();



/*NUMMER 5*/
var simpleSlides5 = function () {
  var funfter;
  var slides5 = document.querySelectorAll(".slides5");
  for (funfter = 0; funfter < slides5.length; funfter++) {
    slides5[funfter].setAttribute("style","display:none");
  }
  count5++;
  if (count5 > slides5.length) { count5 = 1; }
  slides5[count5-1].setAttribute("style","display:block");
  setTimeout(simpleSlides5, 3600);
}

var count5 = 0;
simpleSlides5();

/*NUMMER 6*/
var simpleSlides6 = function () {
  var sechster;
  var slides6 = document.querySelectorAll(".slides6");
  for (sechster = 0; sechster < slides6.length; sechster++) {
    slides6[sechster].setAttribute("style","display:none");
  }
  count6++;
  if (count6 > slides6.length) { count6 = 1; }
  slides6[count6-1].setAttribute("style","display:block");
  setTimeout(simpleSlides6, 3600);
}

var count6 = 0;
simpleSlides6();


/*NUMMER 7*/
var simpleSlides7 = function () {
  var siebenter;
  var slides7 = document.querySelectorAll(".slides7");
  for (siebenter = 0; siebenter < slides7.length; siebenter++) {
    slides7[siebenter].setAttribute("style","display:none");
  }
  count7++;
  if (count7 > slides7.length) { count7 = 1; }
  slides7[count7-1].setAttribute("style","display:block");
  setTimeout(simpleSlides7, 3600);
}

var count7 = 0;
simpleSlides7();

/*NUMMER 8*/
var simpleSlides8 = function () {
  var achter;
  var slides8 = document.querySelectorAll(".slides8");
  for (achter = 0; achter < slides8.length; achter++) {
    slides8[achter].setAttribute("style","display:none");
  }
  count8++;
  if (count8 > slides8.length) { count8 = 1; }
  slides8[count8-1].setAttribute("style","display:block");
  setTimeout(simpleSlides8, 3600);
}

var count8 = 0;
simpleSlides8();












