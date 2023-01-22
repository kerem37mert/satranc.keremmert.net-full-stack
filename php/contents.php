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
        $this->data = self::getRows("select id, title, description from contents where publish=? order by id DESC",[1]);
    }

    public function singleSelect($getId)
    {
       if(empty($getId)):
           header("location: /404");
           exit;
       endif;

        $data = self::getRow("select * from contents where id=?",[$getId]);

        if($this->rowcount == 0):
            header("location: /404");
            exit;
        endif;

        $this->title = $data["title"];
        $this->description = $data["description"];
        $this->content = $data["content"];
        $this->author = $data["author"];
        $this->date = $data["date"];
        $this->publish = $data["publish"];

        if($this->publish == 0):
            header("location: /404");
            exit;
        endif;
    }

    public function viewsUpdate($getId)
    {
        $data = self::getRow("select views from contents where id=?",[$getId]);
        $views = $data["views"];
        self::getRow("update contents set views=? where id=?",[$views+1,$getId]);
    }

    public function mostViewsSelect()
    {
        $data = self::getRows("select id, title from contents where publish=? order by views DESC limit 5",[1]);
        $this->data = $data;
    }
}