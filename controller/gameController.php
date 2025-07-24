<?php
    $pageTitle = "Zone Chill";
    $pageSubtitle = "8 mort 6 Blesser";
    $navList = [
        [
            "label" => "Bibliothèque" ,
            "path" => "../controller/librayryController.php"
        ],
        [
            "label" => "Accueil" ,
            "path" => "../controller/homeController.php"
        ]        
    ];
    // var_dump($navList[1]); c'est comme le console.log 
    $navList[] = [
        "label" => "Se connecter",
        "path" => "#"
    ];

    // var_dump($navList);


    

    require_once("../view/gameView.php");
?>


