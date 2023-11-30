<?php
include_once("functions.php");
include_once("header.php");
getBanner("./assets/contentBanner_about.png", "about", "");

$dropDowns = [
    [
        "title" => "Fiabilité",
        "text" => "<p>Les annonces postées sur Kasa garantissent une fiabilité totale. Les photos sont conformes aux logements, et toutes les informations sont régulièrement vérifiées par nos équipes.</p>",
        "status"=>"hidden"
    ],
    [
        "title" => "Respect",
        "text" => "<p>La bienveillance fait partie des valeurs fondatrices de Kasa. Tout comportement discriminatoire ou de perturbation du voisinage entraînera une exclusion de notre plateforme.</p>",
        "status"=>"visible"
    ],
    [
        "title" => "Service",
        "text" => "<p>Nos équipes se tiennent à votre disposition pour vous fournir une expérience parfaite. N'hésitez pas à nous contacter si vous avez la moindre question.</p>",
        "status"=>"hidden"
    ],
    [
        "title" => "Sécurité",
        "text" => "<p>La sécurité est la priorité de Kasa. Aussi bien pour nos hôtes que pour les voyageurs, chaque logement correspond aux critères de sécurité établis par nos services. En laissant une note aussi bien à l'hôte qu'au locataire, cela permet à nos équipes de vérifier que les standards sont bien respectés. Nous organisons également des ateliers sur la sécurité domestique pour nos hôtes.</p>",
        "status"=>"hidden",
    ]
];
?>

<main id="about">
    <?php 
        foreach($dropDowns as $dropDown){
            createDropDown($dropDown);
        }
    ?>
</main>
<?php
include_once("./footer.php");
?>
