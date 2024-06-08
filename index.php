<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grillerei</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="nav.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    <div class="fade-Logo" id="fadeLogo" >
        <img src="img/logo.png">
    </div>

<?php include('includes/header.php'); ?>
        <div class="text-box">
            <h1>Grillerei mit Herz und Glut</h1>
            <p></p>
            <a href="#member" class="hero-btn">Jetzt Mitd werden!</a>
        </div>
    </section>

    <section id="about" class="about">
        <h1>Über uns</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla a sapiente repellat soluta dignissimos accusantium reprehenderit quia? Illo enim voluptatem, corporis doloribus error neque! Inventore amet voluptatibus quaerat consectetur sit.</p>
        <div class="row">
            <div class="about-col" id="about-col">
                <img src="img/events.png">
                <div class="layer">
                    <h3>Mitgliederevents</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Commodi, di cumque aut tempore explicabo numquam, repellat enim eaque eos?</p>
                </div>
            </div>
            <div class="about-col">
                <img src="img/events.png">
                <div class="layer">
                    <h3>Wissensmanagement</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Commodi, di cumque aut tempore explicabo numquam, repellat enim eaque eos?</p>
                </div>
            </div>
            <div class="about-col">
                <img src="img/feier.jpg">
                <div class="layer">
                    <h3>Studentisches Leben</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Commodi, di cumque aut tempore explicabo numquam, repellat enim eaque eos?</p>
                </div>
            </div>
        </div>
    </section>

    <section id="member" class="member">
        <h1>Mitglied werden!</h1>
        <p>Um Mitglied zu werden, musst du nur die beigefügte Beitrittserklärung ausfüllen<br>und diese einfach eingescannt an <br><a id="red" href="mailto:wiproject@th-deg.de">wiproject@th-deg.de</a> senden!</p>
        <a href="res/Beitrittserklärung.pdf" target="_blank" rel="noreferrer noopener" class="member-btn">Zur Beitrittserklärung</a>
    </section>

    <div class="slideshow-container" id="slideshow-container">
        <div class="mySlides fadeSlider">
            <img class="slideImg" src="KarusellImg/Karusell1.jpg">
        </div>
        <div class="mySlides fadeSlider" >
            <img class="slideImg" src="KarusellImg/Karusell2.jpg">
        </div>
        <div class="mySlides fadeSlider" >
            <img class="slideImg" src="KarusellImg/Karusell3.jpg">
        </div>
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>

        <div class="sliderDots" style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>
    </div>

    <?php include('includes/footer.php'); ?>


    <script>

        const toggleBtn= document.querySelector('.toggle_btn');
        const toggleBtnIcon= document.querySelector('.toggle_btn i');
        const dropdown= document.querySelector('.dropdown');

        toggleBtn.onclick = function(){
            dropdown.classList.toggle('open');
            const isOpen = dropdown.classList.contains('open');

            toggleBtnIcon.classList = isOpen 
            ? 'fa-solid fa-xmark' 
            : 'fa-solid fa-bars'
        }

        setTimeout(() => {
            const element = document.getElementById('fadeLogo');
            let opacity = 1;
            const fadeEffect = setInterval(() => {
                if (opacity > 0) {
                    opacity -= 0.1;
                    element.style.opacity = opacity;
                } else {
                    clearInterval(fadeEffect);
                    element.style.display = 'none';
                }
            }, 30);
            //document.getElementById('centerText').style.display = 'none';
        }, 1000);

        //Fotokarusell
        var slideIndex = 0;
        var autoSlide = true;
        showSlidesAuto();
        function plusSlides(n) {
            showSlides(slideIndex += n);
            autoSlide = false;
        }
        function currentSlide(n) {
            showSlides(slideIndex = n);
            autoSlide = false;
        }
        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            if (n > slides.length) { slideIndex = 1 }
            if (n < 1) { slideIndex = slides.length }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
        }
        // Auto Slide
        function showSlidesAuto() {
            if (!autoSlide) {
                autoSlide = true;
                setTimeout(showSlidesAuto, 5000);
                return;
            }
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slideIndex++;
            if (slideIndex > slides.length) { slideIndex = 1 }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
            if (autoSlide) {
                setTimeout(showSlidesAuto, 5000);
            }
        }

        //slideshow ausrichten
        document.addEventListener('DOMContentLoaded', function() {
            const slideshowContainer = document.getElementById('slideshow-container');

            const observerOptions = {
                root: null,
                rootMargin: '0px',
                threshold: 0.95
            };

            /*const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        console.log("intersecting");
                        //slideshowContainer.scrollIntoView({ behavior: 'smooth', block: 'center', inline: 'nearest' });
                        const rect = slideshowContainer.getBoundingClientRect();
                        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
                        window.scrollTo({
                            top: rect.top + scrollTop - (window.innerHeight / 2) + (rect.height / 2),
                            behavior: "smooth"
                        });
                    }
                });
            }, observerOptions);*/

            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const rect = slideshowContainer.getBoundingClientRect();
                        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
                        const targetPosition = rect.top + scrollTop - (window.innerHeight / 2) + (rect.height / 2);
                        const startPosition = window.pageYOffset;
                        const distance = targetPosition - startPosition;
                        let startTime = null;

                        const animation = currentTime => {
                            if (startTime === null) startTime = currentTime;
                            const timeElapsed = currentTime - startTime;
                            const run = ease(timeElapsed, startPosition, distance, 100);
                            window.scrollTo(0, run);
                            if (timeElapsed < 100) requestAnimationFrame(animation);
                        };

                        const ease = (t, b, c, d) => {
                            t /= d / 2;
                            if (t < 1) return c / 2 * t * t + b;
                            t--;
                            return -c / 2 * (t * (t - 2) - 1) + b;
                        };

                        requestAnimationFrame(animation);
                    }
                });
            }, observerOptions);

            observer.observe(slideshowContainer);
        });

    </script>
</body>
</html>