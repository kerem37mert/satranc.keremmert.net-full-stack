<?php

namespace satranc;

require_once("database.php");

class settings extends database
{
    public int $id;
    public string $title;
    public string $description;
    public string $author;
    public string $owner;
    public string $template;

    public function select()
    {
        $data = self::getRow("select * from settings where id=?",[1]);

        $this->id = $data["id"];
        $this->title = $data["title"];
        $this->description = $data["description"];
        $this->author = $data["author"];
        $this->owner = $data["owner"];
        $this->template = $data["template"];
    }
}