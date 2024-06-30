<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grillerei Stummbeck - Appetitmacher</title>
    <link rel="stylesheet" href="appetitmacher.css">
    <link rel="stylesheet" href="nav.css">
    <link rel="stylesheet" href="footer.css">

    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <!-- nanogallery2 -->
    <link href="https://unpkg.com/nanogallery2/dist/css/nanogallery2.min.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="https://unpkg.com/nanogallery2/dist/jquery.nanogallery2.min.js"></script>


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
            <h1>Appetitmacher</h1>
            <p>Sammle leckere Eindrücke</p>
        </div>
    </section>

    <section id="galerie" class="galerie">
        <p>Foto anklicken um es genauer zu betrachten</p>
        <p>Hier kannst du auch einen Filter auswählen</p>

        
    <div id="nanogallery2">gallery_made_with_nanogallery2</div>

        <script>
            jQuery(document).ready(function () {
                function initNanogallery() {
                var fontSize = window.innerWidth <= 767 ? '0.8em' : '1.2em'; // Smaller font size for mobile devices
                jQuery("#nanogallery2").nanogallery2({
                    thumbnailWidth:   'auto',
                    thumbnailHeight:  300,
                    thumbnailBorderVertical: 0,
                    thumbnailBorderHorizontal: 0,
                    thumbnailGutterWidth: 5,
                    thumbnailGutterHeight: 5,
                    thumbnailLabel: {
                    "position": "overImageOnBottom",
                    "display": false
                    },
                    gallerySorting: "titleasc",
                    galleryFilterTags: true,
                    navigationFontSize: fontSize,

                    thumbnailAlignment: 'right',
                    galleryDisplayTransition: 'slideUp',
                    galleryDisplayTransitionDuration:  500,
                    thumbnailOpenImage: true,
                    kind: 'nano_photos_provider2',
                    dataProvider: 'http://localhost/grillerei/nano_photos_provider2/nano_photos_provider2.php',
                    locationHash: false
                });
            }

                // Initialize the gallery
                initNanogallery();

                // Re-initialize the gallery on window resize
                jQuery(window).resize(function() {
                jQuery("#nanogallery2").nanogallery2('destroy'); // Destroy the existing gallery
                initNanogallery(); // Initialize the gallery again with new font size
                });
            });
            </script>

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