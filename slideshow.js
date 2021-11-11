if (document.readyState == 'loading') {
  document.addEventListener('DOMContentLoaded', ready)
} else {
  ready()
}

function ready() {
  var slideIndex = 1;
  var timer = null;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  showSlides(slideIndex);
  currentSlide(1);

  function plusSlides(n) {
  clearTimeout(timer);
  showSlides(slideIndex += n);
  }

  function currentSlide(n) {
  clearTimeout(timer);
  showSlides(slideIndex = n);
  }

  function showSlides(n) {
  var i;
  if (n==undefined){n = ++slideIndex}
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
  timer = setTimeout(showSlides, 4000);
  }
}