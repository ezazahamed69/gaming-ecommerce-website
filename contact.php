<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css2?family=Overpass+Mono&display=swap" rel="stylesheet">
     
        

        <!-- <script defer src="./static/js/account_dropdown.js"></script>
        <script defer src="./static/js/burger_menu_dropdown.js"></script> -->
        <link rel="shortcut icon" href="./fav.png" type="image/x-icon">
        <title>Contact us</title>
        <!-- <link rel="stylesheet" href="./assets/css/navstyle.css"> -->
        <link rel="stylesheet" href="./assets/css/style.css">
        <link rel="stylesheet" href="./contact.css">
        <style>
    .header-bottom {
    position: relative;
    top: calc(100% - 1px);
    left: 0;
    width: 100%;
    background-color: var(--raisin-black-2);
    padding-block: 20px;
    z-index : 0;
  }
        </style>
    </head>

    <body>
    <?php
        include 'navbar.php';
    ?>
        <main>

            <div class="title">Contact us</div>
            <div class="title-info">We'll get back to you soon!</div>

            <form action="" method="" class="form">
                <div class="input-group">
                    <input type="text" name="first_name" id="first-name" placeholder="First name">
                    <label for="first-name">First name</label>
                </div>
                
                <div class="input-group">
                    <input type="text" name="last_name" id="last-name" placeholder="Last Name">
                    <label for="last-name">Last name</label>
                </div>

                <div class="input-group">
                    <input type="email" name="e-mail" id="e-mail" placeholder="e-mail">
                    <label for="e-mail">e-mail</label>
                </div>

                <div class="textarea-group">
                    <textarea name="message" id="message" rows="5" placeholder="Message"></textarea>
                    <label for="message">Message</label>
                </div>

                <div class="button-div">
                    <button type="submit">Send</button>
                </div>
        
            </form>
            <?php
        include 'footer.php';
    ?>
        </main>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script src="swiper-bundle.min.js"></script>
    </body>
</html>