<!DOCTYPE html>
<html lang="fr">
        <head>
             <meta charset="UTF-8">
             <meta name="viewport" content="width=device-width, initial-scale=1.0">

            <title>Gaming Zone</title>

                <link rel="stylesheet" href="../style/style.css">
                <link rel="icon" href="../src/logo.png">
                <script src="../script/veritable.js" defer></script>
        </head>
<body>

<!--Zone du menu , en haut de la page-->



    <?php
        require_once("../view/_partials/_nav.php");
        require_once("../view/_partials/_header.php");
    ?>
<!--En tête stylé


Zone principale-->

        <div id="main-game">

                <div id="user-interface">
                     <div>
                        <label for="user-number">Entre un nombre la chienté entre 1 et 100</label>

                        <input id="user-number" type="number" min="1" max="100" placeholder="écrit ici sale fou">
                     </div>

                        <input id="send-button" type="submit" value="Proposer">

                          <!--
                        <input type="text">
                        <input type="number">
                        <input type="date">
                        <input type="mail">
                        <input type="password">
                        <input type="checkbox">
                        <input type="textarea">
                        <input type="submit"> -->

                </div>
                <div id="game-display">



                </div>
                
        </div>

</body>
</html>