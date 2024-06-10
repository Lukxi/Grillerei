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
    <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <?php include('includes/header.php'); ?>
        <div class="text-box">
            <h1>Mein Team</h1>
            <p>Infos und Vorstellung<br></p>
        </div>
    </section>

    <section id="about" class="about">
        <h1></h1>
        <div class="row">
            <div class="about-col" id="about-col">
                <h4></h4><br>
                <img src= "https://cdn.pixabay.com/photo/2018/05/12/11/37/team-3393037_1280.jpg">
            </div>
            <div class="about-col" id="vorstand-list">
                <ul>
                    <li>Herzlich Willkommen!</li><br>

        <li>Freuen Sie sich auf ein gemütliches Beisammensein unter Grillfreunden, wo der Duft von frisch Gegrilltem in der Luft liegt und die Glut sanft knistert.
            <li>Unser Grillmeister, Franz Stumbeck, lädt Sie ein, traditionelle Grillkunst hautnah zu erleben.</li><br>

            <li>Was Sie erwartet:</li><br>

            <li>Authentische Grillvorführungen: Entdecken Sie, wie mit Hingabe und handwerklichem Geschick klassische Grillgerichte zubereitet werden.</li><br>
            <li>Interaktive Grillkurse: Erfahren Sie praktische Tipps und Tricks, um Ihr Grillgut zu Hause perfektionieren zu können.</li><br>
            <li>Regionale Speisen: Genießen Sie eine Auswahl an herzhaften Klassikern und regionalen Favoriten.</li><br>
            <li>Familiäre Atmosphäre: Treffen Sie Gleichgesinnte und tauschen Sie sich aus über alles, was das Grillerherz begehrt.</li><br>
                </ul>
            </div>
        </div>
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