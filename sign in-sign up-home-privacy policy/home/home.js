/*first slide*/
let slideIndex = 0;

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("slide");
  if (n === slides.length) {slideIndex = 0}
  if (n < 0) {slideIndex = slides.length-1}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  
  slides[slideIndex].style.display = "block";
}

showSlides(slideIndex);

function clicka(n) {
  slideIndex += n;
  showSlides(slideIndex); 
}

/*secound slide*/
