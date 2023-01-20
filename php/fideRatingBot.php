<?php

namespace satranc;

require_once("simple_html_dom.php");

class fideRatingBot
{
    public $length = 10;
    private $allNames;
    private $allRatings;
    public $names = [];
    public $ratings = [];

    public function __construct()
    {
        $html = file_get_html('https://en.wikipedia.org/wiki/FIDE_world_rankings');

        $this->allRatings = $html->find('td[style="text-align:center]'); //Ratings
        $this->allNames = $html->find('td a');                           //Names

        for($i=1; $i<=$this->length*3-2; $i+=3):
            array_push($this->ratings, $this->allRatings[$i]->plaintext);
        endfor;

        for($i=1; $i<=$this->length*2-1; $i+=2):
            array_push($this->names, $this->allNames[$i]->plaintext);
        endfor;
    }
}