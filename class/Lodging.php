<?php
include_once("./vue/cards.php");
class Lodging
{
    private $list = [];
    // public function __construct(Type $var = null) {
    // }

    public function getList()
    {
        $filePath = "./data/logements.json";
        if (file_exists($filePath)) {
            $data = file_get_contents($filePath);
            $this->list = json_decode($data, true);
        } else {
            return 0;
        }
    }
    public function getOne()
    {
        $this->getList();
        $item = array_filter($this->list, function ($entry) {
            return $entry['id'] === $_GET['id'];
        });

        if (count($item) === 1) {
            return array_values($item);
        } else {
            return false;
        }
        
    }

    public function createCards()
    {
        foreach ($this->list as $lodging) {
            createLodgingCard($lodging);
        }
    }
}
