<?php include('includes/header.php'); ?>
        <div class="text-box">
            <h1>Impressum</h1>
            <p>Ansprechpartner - Datenschutz - und mehr</p>
        </div>
    </section>

    <section id="about" class="about">
        
        <h4>Für den Inhalt dieses Online-Angebots ist verantwortlich:</h4>
        <p>WI-Project e.V. - Verein der Wirtschaftsinformatiker an der Technischen Hochschule Deggendorf</p>
        <p>Dieter-Görlitz-Platz 1 94469 Deggendorf</p>
        <br>
        <p>E-Mail: <a id="red" href="mailto:wiproject@th-deg.de">wiproject@th-deg.de</a></p>
        <br>
        <h5>Ansprechpartner:</h5>
        <ul>
            <li>Lukas Nowak - 1. Vorstand</li>
            <li>Franziska Michl - 2. Vorstand</li>
            <li>Andreas Kergel - 3. Vorstand (Kassier)</li>
        </ul>
        <br>
        <h5>Registereintrag</h5>
        <p>Eingetragen im Vereinsregister Deggendorf</p>
        <p>VR-Nr.: 0770</p>
        <br>
        <h5>Haftung für Inhalte</h5>
        <p>Als Diensteanbieter sind wir gemäß § 7 Abs.1 TMG für eigene Inhalte auf diesen Seiten nach den allgemeinen Gesetzen verantwortlich. Nach §§ 8 bis 10 TMG sind wir als Diensteanbieter jedoch nicht verpflichtet, übermittelte oder gespeicherte fremde Informationen zu überwachen oder nach Umständen zu forschen, die auf eine rechtswidrige Tätigkeit hinweisen.</p>
        <br>
        <p>Verpflichtungen zur Entfernung oder Sperrung der Nutzung von Informationen nach den allgemeinen Gesetzen bleiben hiervon unberührt. Eine diesbezügliche Haftung ist jedoch erst ab dem Zeitpunkt der Kenntnis einer konkreten Rechtsverletzung möglich. Bei Bekanntwerden von entsprechenden Rechtsverletzungen werden wir diese Inhalte umgehend entfernen.</p>
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