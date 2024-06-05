<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WI-Project e.V.</title>
    <link rel="stylesheet" href="team.css">
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
            <h1>Die Vorstandschaft</h1>
            <p>Hier erfährst du alles rund um die Vorstände<br>und die letzte Jahreshauptversammlung</p>
        </div>
    </section>

    <section id="about" class="about">
        <h1>Die aktuelle Vorstandschaft</h1>
        <div class="row">
            <div class="about-col" id="about-col">
                <h4>Liebe Mitglieder,</h4><br>
                <p>am 12.08.2023 fand die Jahreshauptversammlung unseres Vereins statt. Nachdem die alte Vorstandschaft nach einem erfolgreichen Jahr entlastet wurde, fanden daraufhin die Neuwahlen statt!</p>
       
                <p>Wir blicken gemeinsam in ein weiteres erfolgreiches Jahr unseres Vereins WI-Project e.V.!</p><br>
                <p>Wir sehen uns auf einer unserer vielen Veranstaltungen.</p><br>
                <p>Eure Vorstandschaft</p>
            </div>
            <div class="about-col" id="vorstand-list">
                <ul>
                    <li>1. Vorstand: Lukas Nowak lol</li>
                    <li>2. Vorstand: Franziska Michl</li>
                    <li>3. Vorstand (Kassier): Andreas Kergel</li><br>
                    <li>1. Schriftführer: Julian Wagner</li>
                    <li>2. Schriftführer: Stefan Schreiner</li><br>
                    <li>Kassenprüfer: Maximilian Dandorfer</li>
                    <li>Kassenprüfer: Julia Bauer</li><br>
                    <li>Beisitzer: Florian Hartl</li>
                    <li>Beisitzer: Theresa Müller</li>
                    <li>Beisitzer: Alexander Pietruska</li>
                </ul>
            </div>
        </div>
    </section>


    <section class="footer">
        <div class="f-row">
            <div class="f-col">
                <img src="img/logo.png" alt="logo" class="f-logo">
                <div class="f-p">
                    <p>Als Verein des Studiengangs Wirtschaftsinformatik an der THD haben wir es uns zur Aufgabe gemacht WI-Studenten zu helfen, sich schnell im Studiengang, an der Hochschule und natürlich im Studentenleben zurecht zu finden.</p>
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