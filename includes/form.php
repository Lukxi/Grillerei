<?php require("script.php") ?>

<?php 
   if (isset($_POST["submit"])) {
      if (empty($_POST["email"]) || empty($_POST["betreff"]) || empty($_POST["option"]) || empty($_POST["nachricht"])) {
         echo "...";
      }
   }
?>

<!DOCTYPE HTML>
<HTML lang="DE">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Kontaktformular.css">
</head>

<body>
    <div class="wrapper">
        <form action="script.php" method="post">
            <div class="input-box">
                <input type="email" id="Email" name="email" placeholder="E-Mail" required><br>
            </div>
            <div class="input-box">
                <select id="option" name="option">
                    <option value="" selected disabled hidden>Bitte auswählen</option>
                    <option value="event-grillen" >Event - Grillen</option>
                    <option value="promo-grillen" >Promo - Grillen</option>
                    <option value="show-grillen" >Show - Grillen</option>
            </select><br>    
            </div>
            <div class="input-box">
                <input type="text" id="Betreff" name="betreff" placeholder="Betreff" required><br>
            </div>
            <textarea id="Nachricht" name="nachricht" placeholder="Nachricht" rows="10" cols="20" required></textarea><br>
            <div class="input-box">
                <button type="submit" name="submit">Absenden</button><br>
            </div>
        </form>
    </div>    
</body>
</HTML>