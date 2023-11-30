<?php
function getBanner(string $image, string $page, string $text)
{
    $class = $page === "about" && "aboutBanner";

    echo '<div class="banner ' . $class . '">';
    if ($text !== "")
        echo '<h1>' . $text . '</h1>';
    echo '<img src=' . $image . ' alt="Bannière" /></div>';
}

function createDropDown(array $content){

    $title = $content["title"];
    $text = $content["text"];
    $class = $content["status"];
    $classArrow = $content["status"] === "visible" ? "arrowUp" : "arrowDown";
    $size = isset($content["size"]) ? "dropdownSmaller" : null;
    
    echo '
    <div class="dropdown '.$size.'">
        <h3>
        '.$title.'
        <div class='.$classArrow.'></div>
        </h3>
        <div class="content '.$class.'">
        '.$text.'
        </div>
    </div>
    ';
}

function createStar(bool $isFill){
    $color = $isFill ? "#FF6060" : "#E3E3E3";
    echo '<svg class="star" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
    <g clipPath="url(#clip0_108749_228)">
        <path d="M21.645 15L18 3L14.355 15H3L12.27 21.615L8.745 33L18 25.965L27.27 33L23.745 21.615L33 15H21.645Z" fill="'.$color.'"/>
    </g>
</svg>';
}