<?php
    $pageTitle = "Des Livres et des Histoire";
    $pageSubtitle = "La Bibliothèque de L'E2C";
    $navList = [
        [
            "label" => "Accueil" ,
            "path" => "../controller/homeController.php"
        ],
        [
            "label" => "Détente" ,
            "path" => "../controller/gameController.php"
        ]        
    ];
    // var_dump($navList[1]); c'est comme le console.log 
    $navList[] = [
        "label" => "Se connecter",
        "path" => "#"
    ];

    // var_dump($navList);


    

    require_once("../view/librayryView.php")
?>
