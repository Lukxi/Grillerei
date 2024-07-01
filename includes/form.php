<!DOCTYPE HTML>
<html lang="DE">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="includes/form.css">
    <script>
        function sendForm(event) {
            event.preventDefault();

            const formData = new FormData(event.target);
            const xhr = new XMLHttpRequest();

            xhr.open("POST", "script.php", true);
            xhr.onload = function() {
                if (xhr.status == 200) {
                    const response = JSON.parse(xhr.responseText);
                    const messageBox = document.createElement("p");
                    messageBox.textContent = response.message;
                    messageBox.className = response.status === "success" ? "success" : "error";
                    document.querySelector(".wrapper").prepend(messageBox);
                } else {
                    alert("Ein Fehler ist aufgetreten.");
                }
            };

            xhr.send(formData);
        }
    </script>
    <style>
        .success {
            color: green;
        }
        .error {
            color: red;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <form id="contactForm" onsubmit="sendForm(event)">
            <div class="input-box">
                <input type="email" id="Email" name="email" placeholder="E-Mail" required><br>
            </div>
            <div class="input-box">
                <select id="option" name="option">
                    <option value="" selected disabled hidden>Bitte auswählen</option>
                    <option value="event-grillen">Event - Grillen</option>
                    <option value="promo-grillen">Promo - Grillen</option>
                    <option value="show-grillen">Show - Grillen</option>
                </select><br>    
            </div>
            <div class="input-box">
                <input type="text" id="Betreff" name="betreff" placeholder="Betreff" required><br>
            </div>
            <textarea id="Nachricht" name="nachricht" placeholder="Nachricht" rows="10" cols="20" required></textarea><br>
            <div class="button-container">
                <button type="submit" name="submit">Absenden</button><br>
            </div>
        </form>
    </div>    
</body>
</html>
