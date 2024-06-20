<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WI-Project e.V.</title>
    <link rel="stylesheet" href="impressum.css">
    <link rel="stylesheet" href="nav.css">
    <link rel="stylesheet" href="footer.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<?php include('includes/header.php'); ?>
        <div class="text-box">
            <h1>Impressum</h1>
            <p>Ansprechpartner - Datenschutz - und mehr</p>
        </div>
    </section>

    <section id="about" class="about">
        
        <h4>Angaben gemäß § 5 TMG:</h4>
        <p>Franz Stumbeck</p>
        <p>Adresse: Eidsberg 32</p>
        <p>94539 Grafling</p>
        <br>
        <p></a></p>
        <br>
        <h5>Ansprechpartner:</h5>
        <ul>
            <li>Franz Stumbeck</li>
        </ul>
        <br>
        <h5>Kontaktdaten:</h5>
        <p>Telefon: +49 175 1976184</p>
        <p>E-Mail: franzstumbeck@gmail.com</p>
        <br>
        <h5>Haftung für Inhalte</h5>
        <p>Veranwortlich für den Inhalt nach § 55 Abs. 2 RStV:</p><br>
        <p>Franz Stumbeck</p>
        <br>
        <h5>Haftung für Links</h5>
        <p>Unser Angebot enthält Links zu externen Webseiten Dritter, auf deren Inhalte wir keinen Einfluss haben. Deshalb können wir für diese fremden Inhalte auch keine Gewähr übernehmen. Für die Inhalte der verlinkten Seiten ist stets der jeweilige Anbieter oder Betreiber der Seiten verantwortlich. Die verlinkten Seiten wurden zum Zeitpunkt der Verlinkung auf mögliche Rechtsverstöße überprüft. Rechtswidrige Inhalte waren zum Zeitpunkt der Verlinkung nicht erkennbar.</p>
        <br>
        <p>Eine permanente inhaltliche Kontrolle der verlinkten Seiten ist jedoch ohne konkrete Anhaltspunkte einer Rechtsverletzung nicht zumutbar. Bei Bekanntwerden von Rechtsverletzungen werden wir derartige Links umgehend entfernen.</p>
        <br>
        <h5>Urheberrecht</h5>
        <p>Die durch die Seitenbetreiber erstellten Inhalte und Werke auf diesen Seiten unterliegen dem deutschen Urheberrecht. Die Vervielfältigung, Bearbeitung, Verbreitung und jede Art der Verwertung außerhalb der Grenzen des Urheberrechtes bedürfen der schriftlichen Zustimmung des jeweiligen Autors bzw. Erstellers. Downloads und Kopien dieser Seite sind nur für den privaten, nicht kommerziellen Gebrauch gestattet.</p>
        <br>
        <p>Soweit die Inhalte auf dieser Seite nicht vom Betreiber erstellt wurden, werden die Urheberrechte Dritter beachtet. Insbesondere werden Inhalte Dritter als solche gekennzeichnet. Sollten Sie trotzdem auf eine Urheberrechtsverletzung aufmerksam werden, bitten wir um einen entsprechenden Hinweis. Bei Bekanntwerden von Rechtsverletzungen werden wir derartige Inhalte umgehend entfernen.</p>
        <h5>Verwendung von Sozialen Medien:</h5>
        <p> Dieses Impressum gilt auch für Auftritte in den sozial Medien, außerdem werden dadurch deren Nutzungsbedigungen geltend gemacht.</p>
        <p>Facebook: <a href="https://de-de.facebook.com/legal/terms#:~:text=Du%20darfst%20Benutzernamen%20oder%20Passw%C3%B6rter,in%20den%20Plattform%2DNutzungsbedingungen%20festgelegt">Facebook-Nutzungsbedingungen</a></p>
        <p>Instagram: <a href="https://help.instagram.com/581066165581870">Instagram-Nutzungsbedinungen</a></p>
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