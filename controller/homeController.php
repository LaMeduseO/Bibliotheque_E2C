<?php
    $pageTitle = "Bibliothèque De L'E2C";
    $pageSubtitle = "Giga Beau Gosse";
    $navList = [
        [
            "label" => "Bibliothèque" ,
            "path" => "../controller/librayryController.php"
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


    require_once("../view/homeView.php");
?>
