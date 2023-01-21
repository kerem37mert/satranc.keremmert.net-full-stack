<?php

namespace satranc;

require_once("database.php");

class contents extends database
{
    public int $id;
    public string $title;
    public string $description;
    public string $content;
    public string $author;
    public string $date;
    public string $publish;

    public $data;

    public function selectIndex()
    {
        $this->stmt = $this->getRows("select id, title, description from contents");
        $this->data = $this->stmt;
    }

}