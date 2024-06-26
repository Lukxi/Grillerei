<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Buchen Sie ihren Promo-,Show- und Event-Griller Franz Stumbeck.">   //SEO
    <title>Grillerei mit Herz und Glut</title>
    <title>Grillerei mit Herz und Glut</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="AngeboteSlideshow.css">
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
        <img src="img/blacklogo.png" alt="Logo">
    </div>

<?php include('includes/header.php'); ?>
        <div class="text-box">
            <h1>Grillerei mit Herz und Glut</h1>
            <p></p>
            <div class="btns">
                <a href="#member" class="hero-btn" id="left">Zu den Angeboten</a>
                <a href="#member" class="hero-btn" id="right">Kontakt</a>
            </div>
        </div>
    </section>

    <section id="about" class="about">
        <h2>Über uns</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla a sapiente repellat soluta dignissimos accusantium reprehenderit quia? Illo enim voluptatem, corporis doloribus error neque! Inventore amet voluptatibus quaerat consectetur sit.</p>
        <div class="row">
            <div class="about-col">
                <div class="courses">
                    <img src="img/events.png" alt="Weber-Promo-Grillen buchen">
                    <div class="layer">
                        <h3>Weber-Promo</h3>
                    </div>
                </div>
                <div>
                    <div class="about-col-buttons">
                        <p id="course-button">Weber-Promo buchen!</p>
                    </div>
                </div>
            </div>
            <div class="about-col">
                <div class="courses">
                    <img src="KarusellImg/Karusell1.jpg" alt="Event-Grillen buchen">
                    <div class="layer">
                        <h3>Event-Grillen</h3>
                    </div>
                </div>
                <div>
                    <div class="about-col-buttons">
                        <p id="course-button">Event-Grillen buchen!</p>
                    </div>
                </div>
            </div>
            <div class="about-col">
                <div class="courses">
                    <img src="KarusellImg/Karusell2.jpg" class="angebot-img" alt="Show-Grillen buchen">
                    <div class="layer">
                        <h3>Show-Grillen</h3>
                    </div>
                </div>
                <div>
                    <div class="about-col-buttons">
                        <p id="course-button">Show-Grillen buchen!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="slideshow-container" id="slideshow-container">
        <div class="mySlides fadeSlider">
            <img class="slideImg" src="KarusellImg/Karusell1.jpg" alt="Promo-Grillen in Regensburg">
            <div class="slideText">
                <p>Promo-Grillen in Regensburg</p>
            </div>
        </div>
        <div class="mySlides fadeSlider" >
            <img class="slideImg" src="KarusellImg/Karusell2.jpg" alt="Event-Grillen in Plattling">
            <div class="slideText">
                <p>Event-Grillen in Plattling</p>
            </div>
        </div>
        <div class="mySlides fadeSlider" >
            <img class="slideImg" src="KarusellImg/Karusell3.jpg" alt="Show-Grillen in Deggendorf">
            <div class="slideText">
                <p>Show-Grillen in Deggendorf</p>
            </div>
        </div>
        <div class="prev-next">
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>

        <div class="sliderDots" style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>
    </div>

    <?php include('includes/footer.php'); ?>


    <script>

        /*Angebote Höhe Handy*/
        window.addEventListener('load', () => {
            const aboutCols = document.querySelectorAll('.about-col');
            const aboutCol = document.querySelectorAll('.about-col-buttons');
            let maxHeight = 0;
            let maxHeightWeber = 0;

            // Finde die maximale Höhe
            aboutCols.forEach(col => {
                const height = col.offsetHeight;
                if (height > maxHeight) {
                    maxHeight = height;
                }
            });
            aboutCol.forEach(cols => {
                const height = cols.offsetHeight;
                if (height > maxHeight) {
                    maxHeightWeber = height;
                }
            });

            // Setze alle divs auf die maximale Höhe
            aboutCols.forEach(col => {
                col.style.height = maxHeight + 'px';
            });
            aboutCol.forEach(cols => {
                cols.style.height = maxHeightWeber + 'px';
            });
        });
        /*Angebote Höhe Handy*/

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
            slides[slideIndex - 1].style.display = "flex";
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
            slides[slideIndex - 1].style.display = "flex";
            dots[slideIndex - 1].className += " active";
            if (autoSlide) {
                setTimeout(showSlidesAuto, 5000);
            }
        }



    </script>
</body>
</html>