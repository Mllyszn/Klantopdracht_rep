<div class="slideshow-container">

    <div class="mySlides fade">
        <img src="/assets/img/slideshow_foto_1.png" width="1000" height="600" alt="slideshow">
    </div>

    <div class="mySlides fade">
        <img src="/assets/img/slideshow_foto_2.png" width="1000" height="600" alt="slideshow">
    </div>

    <div class="mySlides fade">
        <img src="/assets/img/slideshow_foto_3.png" width="1000" height="600" alt="slideshow">
    </div>

</div>
<br>
<div style="text-align:center">
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
</div>
<script>
    let slideIndex = 0;
    showSlides();

    function showSlides() {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) { slideIndex = 1 }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
        setTimeout(showSlides, 5000);
    }
</script>