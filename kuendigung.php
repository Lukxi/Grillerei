<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WI-Project e.V.</title>
    <link rel="stylesheet" href="kuendigung.css">
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
            <h1>Kündigung der Mitgliedschaft</h1>
            <p>Du willst uns wirklich verlassen?</p>
        </div>
    </section>

    <section id="about" class="about">
        <p>Wir akzeptieren nur schriftliche Kündigungen!<br><br>
        Bitte sende deine Kündigung unterschrieben an <a id="red" href="mailto:wiproject@th-deg.de">wiproject@th-deg.de</a> <br>
        Kündigungen ohne Unterschrift werden nicht bearbeitet.<br><br>
        Viele Grüße,<br>
        Die Vorstandschaft
        </p>
        
        </section>

        <section class="footer">
            <div class="f-row">
                <div class="f-col">
                    <img src="img/logo.png" alt="logo" class="f-logo">
                    <div class="f-p">
                        <p>Wir sind der Verein der Wirtschaftsinformatiker an der Technischen Hochschule Deggendorf!</p>
                    </div>
                </div>
                <div class="f-col">
                    <h3>Adresse <div class="underline"><span></span></div></h3>
                    <p>Raum A209</p>
                    <p>Dieter-Görlitz-Platz 1</p>
                    <p>94469 Deggendorf</p>
                    <h4 class="mail"><a href="mailto:wiproject@th-deg.de">wiproject@th-deg.de</a></h4>
                </div>
                <div class="f-col">
                    <h3>Links <div class="underline"><span></span></div></h3>
                        <ul>                        
                            <li><a href="impressum.html" id="impressum">Impressum</a></li>
                            <li><a href="impressum.html#daten" id="impressum">Datenschutz</a></li>
    
                        </ul>
                    
                </div>
                <div class="f-col">
                    <h3>Social <div class="underline"><span></span></div></h3>
                    <div class="social-icons">
                        <a href="https://www.instagram.com/wiproject_thd/"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.facebook.com/WIProjecteV/"><i class="fab fa-facebook"></i></a>
                    </div>
                </div>
                
    
            </div>
            <hr>
            <p class="copy">&copy; 2024 WI-Project e.V. - Made with <i class="fa-regular fa-heart"></i> in Deggendorf</p>
    
            
        </section>

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