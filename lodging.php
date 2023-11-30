<?php
include_once("./class/Lodging.php");
include_once("functions.php");


$lodgingInstance = new Lodging();
$data = $lodgingInstance->getOne();
if ($data !== false) {
    include_once("header.php");
    $data = $data[0];
    $images = $data["pictures"];
    $rating = intval($data["rating"]);
?>

    <div id="carrousel">
        <div class="arrowLeft"></div>
        <?php
        foreach ($images as $image) {
            echo '<img src="' . $image . '" alt=""/>';
        }
        ?>
        <div class="arrowRight"></div>
        <p class="count">1 / <?php echo count($images) ?></p>
    </div>
    <main id="lodging">
        <div class="lodgingTitle">
            <h2><?php echo $data['title']; ?></h2>
            <h3><?php echo $data["location"] ?></h3>
            <div class="tagList">
                <?php
                foreach ($data["tags"] as $tag) {
                    echo '<div class="tag">' . $tag . '</div>';
                }
                ?>
            </div>
        </div>
        <div class="ratingAndOwner">
            <div class="lodgingOwner">
                <p><?php echo $data["host"]["name"]; ?></p>
                <img src="<?php echo $data["host"]["picture"]; ?>" alt="Propriétaire du logement" />
            </div>
            <div class="starContain">
                <?php
                for ($i = 0; $i < 5; $i++) {
                    createStar($rating > 0);
                    $rating--;
                }
                ?>
            </div>
        </div>
    </main>
    <div class="dropdownContain">
        <?php
        $equipmentsHTML = "";
        foreach ($data["equipments"] as $equipment) {
            $equipmentsHTML = $equipmentsHTML . '<li>' . $equipment . '</li>';
        }
        $equipmentsHTML = '<ul>' . $equipmentsHTML . '</ul>';
        $dropdowns = [
            [
                "title" => "Description",
                "text" => '<p>' . $data["description"] . '.</p>',
                "status" => "visible",
                "size" => "",
            ], [
                "title" => "Équipements",
                "text" => $equipmentsHTML,
                "status" => "visible",
                "size" => "",
            ]
        ];
        foreach ($dropdowns as $dropdown) {
            createDropDown($dropdown);
        }
        ?>
    </div>



<?php
    include_once("footer.php");
} else {
    include_once("404.php");
}
?>