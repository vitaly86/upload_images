document.getElementById('closebtn').onclick = function () {
    this.parentElement.style.display = 'none';
}

document.getElementById('prev').onclick = function () {
    plusSlides(-1);
}

document.getElementById('next').onclick = function () {
    plusSlides(1);
}
console.log(document.getElementById('next'));
function plusSlides(n) {
    showSlides(slideIndex += n);
}

var carousel = document.getElementsByClassName('carousel');

for (let i = 0; i < carousel.length; i++) {
    carousel[i].onclick = function () { currentSlide(i + 1); }
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    var slides = document.getElementsByClassName("mySlides");
    var expandImg = document.getElementById("expandedImg");
    var imgText = document.getElementById("imgtext");
    var dots = document.getElementsByClassName("demo");
    var numbering = document.getElementsByClassName("numbertext");

    if (n > slides.length) {
        slideIndex = 1;
    }

    if (n < 1) {
        slideIndex = slides.length;
    }

    for (var i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }

    slides[slideIndex - 1].style.display = "block";
    expandImg.parentElement.style.display = "block";
    imgText.innerHTML = dots[slideIndex - 1].alt;
    numbering[slideIndex - 1].innerHTML = (slideIndex) + "/" + dots.length;
}
