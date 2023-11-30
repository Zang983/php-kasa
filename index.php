<?php
include_once("./class/Lodging.php");
include_once("functions.php");
include_once("header.php");
getBanner("./assets/accueil.png", "", "Chez vous, partout et ailleurs");
$lodgingInstance = new Lodging();
$lodgingList = $lodgingInstance->getList();
?>

<main id="index">
    <?php $lodgingInstance->createCards(); ?>
</main>


<?php
include_once("footer.php");

?>