<!DOCTYPE html>
<html lang="fr">
        <head>
             <meta charset="UTF-8">
             <meta name="viewport" content="width=device-width, initial-scale=1.0">

            <title>Bibliothèque E2C</title>

                <link rel="stylesheet" href="../style/style.css">
                <link rel="icon" href="../src/logo.png">

                <script src="../script/news.js" defer></script>
                <script src="../script/connect.js" defer></script>
                <script src="../script/flash.js" defer></script>


        </head>
<body>

<!--Zone du menu , en haut de la page-->

<!--En tête stylé-->

    <?php
        require_once("../view/_partials/_nav.php");
        require_once("../view/_partials/_header.php");
        require_once("../view/_partials/_connect.php");
        if(isset($_GET["message"])) {
            require_once("../view/_partials/_flashMessage.php");
        }
        if(isset($_SESSION["userId"])){
            require_once("../view/_partials/_footer.php");
        }
    ?>

<!--Zone principale - présentation de l'e2c et de Silence, On lit-->

<div id="rangement">
    <main>
        <article>
            <h2>Offrir une seconde chance par la lecture et l’apprentissage</h2>


                            <!--Vidéo Intégrer de la présentation de l'e2c-->
        <div id="text1-contenant">


            <div id="text1">
                <p>L’École de la Deuxième Chance (E2C) Grand Lille <a href="https://e2c-grandlille.fr/">E2C Grand Lille</a> accompagne les jeunes de 16 à 25 ans sortis du système scolaire sans diplôme ni qualification. Elle leur propose un parcours individualisé pour retrouver confiance en eux, construire un projet professionnel et renouer avec les apprentissages fondamentaux. La lecture y occupe une place centrale, car elle est à la fois un outil d’émancipation, de réflexion et d’ouverture sur le monde.</p>


                <p>Au-delà de l’apprentissage technique, l’E2C valorise la lecture comme un levier de développement personnel. Lire permet aux jeunes de se reconnecter à leur curiosité, de découvrir des univers variés et de mieux comprendre leur environnement. C’est aussi un moyen de reprendre goût à l’apprentissage, dans un cadre bienveillant où chaque progrès est valorisé. La lecture devient ainsi un fil conducteur vers la reconstruction de soi et l’élaboration d’un avenir choisi.</p>
            </div>

            <iframe id="video-e2c" src="https://www.youtube.com/embed/q8IXhr6b304?si=klODCY1F0kBoX93q" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> 
            </div>
            

    </article>
        <div class="intertext">
            <h4>Le Feu Sa Brûle</h4>

        </div>


        <article>
            <h2>Lire pour apprendre, lire pour s’insérer</h2>

           
        <p> <img id="lecture" src="../src/sol.png" alt="Des stagiaires en pleine lecture"> À l’E2C Grand Lille, la lecture est intégrée dans un parcours pédagogique sur mesure. Elle permet aux jeunes de renforcer leurs compétences en compréhension écrite, d’enrichir leur vocabulaire et de développer leur esprit critique. Qu’il s’agisse de lire un article de presse, un roman, ou un texte professionnel, chaque lecture est une opportunité de progresser et de mieux se préparer à la vie active. Des ateliers de lecture, des rencontres avec des auteurs ou encore des projets autour du livre viennent enrichir cette démarche.</p>

        <p>Cette approche pédagogique favorise également l’expression orale et écrite, essentielle pour réussir dans le monde professionnel. Les jeunes apprennent à argumenter, à structurer leurs idées et à prendre la parole avec assurance. En travaillant sur des supports variés, ils développent leur autonomie et leur capacité à s’adapter à différents contextes de communication. La lecture devient ainsi un outil transversal, au service de l’insertion sociale et professionnelle.</p>

    </article>
        <div class="it2">
            <h4>L'eau sa Mouille</h4>
        </div>

        <article>
            <h2>La Prépa Numérique : lire, coder, créer</h2>

            
        <P>Parmi les parcours proposés, la Prépa Numérique se distingue par son orientation vers les métiers du digital. Ce programme permet aux jeunes de découvrir les bases du développement web, du design numérique, de la cybersécurité ou encore de la création de contenus. La lecture y prend une forme nouvelle : lire du code, comprendre des documentations techniques, explorer des articles spécialisés… autant de compétences clés pour évoluer dans un secteur en pleine croissance. Ce site web, conçu par les stagiaires de la Prépa Numérique, en est une belle illustration : un projet concret, collaboratif et formateur.</P>
            
        <P>Ce parcours allie apprentissage technique et créativité. Les jeunes y développent des projets numériques concrets, en lien avec leurs centres d’intérêt et les besoins du monde professionnel. Ils apprennent à travailler en équipe, à gérer un projet de A à Z, et à valoriser leurs compétences à travers des réalisations visibles et utiles. La Prépa Numérique est ainsi un tremplin vers les métiers du futur, où la lecture, sous toutes ses formes, reste un pilier fondamental de la réussite.</P>

        
            <img id="prepa-num" src="../src/bannerOld.jpg" alt="Photo des personne ayant participé a la prépa numérique">

    </article>


    </main>

                    <!--Articles d'actualité sur le coté de la page-->    

        <aside>
                <div id="close">X</div>
            <article>
                <h2>🎉 Le Fest Num revient à Roubaix le 24 juin !</h2>

                <img id="festnum" src="../src/festNum.jpg" alt="Image Du Festival Numérique">

            <p>La Prépa Numérique de l’E2C Grand Lille vous donne rendez-vous le 24 juin 2025 sur le site de Roubaix pour une nouvelle édition du Fest Num, un événement festif et créatif dédié au numérique. Porté par les jeunes en formation, ce festival mettra en lumière leurs projets web, leurs créations graphiques, leurs prototypes interactifs… et bien plus encore ! Une belle occasion de découvrir les talents de demain, d’échanger autour des métiers du digital et de célébrer l’innovation dans une ambiance conviviale et inspirante.</p>

            </article>
        </aside>
</div>

            <div id="news-trigger">

                <p>Breaking News!</p>

                

            </div>


</body>
</html>