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
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
<?php include('includes/header.php'); ?>
        <div class="text-box">
            <h1>Grillerei Test</h1>
            <p>mit Herz und Glut!</p>
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

        


    </script>
</body>
</html>