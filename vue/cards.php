<?php
function createLodgingCard($lodging)
{
    $id = $lodging["id"];
    $img = $lodging["cover"];
    $title = $lodging["title"];
?>
    <a href='./lodging.php?id=<?php echo $id ?>' class="card">
        <figure>
            <img src='<?php echo $img ?>' alt="Image du logement" />
            <figcaption>
                <?php echo $title ?>
            </figcaption>
        </figure>
    </a>
<?php

}
