<?php

namespace satranc;

require_once("database.php");

class featured extends database
{
    public int $id;
    public string $text;
    public string $author;
    public string $publish;

    public function select()
    {
        $data = self::getRow("select * from featured where publish = ?",[1]);

        $this->id = $data["id"];
        $this->text = $data["text"];
        $this->author = $data["author"];
        $this->publish = $data["publish"];
    }
}