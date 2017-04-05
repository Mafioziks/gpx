<?php

namespace Model;

class Gpx {

    private $tag = "gpx";
    private $xmlns;
    private $tracks = [];

    public function __construct() {}

    public function setXmlns($xmlns) {
        $this->xmlns = $xmlns;
    }

    public function addTrack($track) {
        $this->tracks[] = $track;
    } 

    public function toString() {
        return "<" . $this->tag . " " . $this->xmlns . ">".
            count($this->tracks) .
            "</" . $this->tag . ">";
    }

    public function addChildren($children) {
        $this->tracks[] = $children;
    }
}