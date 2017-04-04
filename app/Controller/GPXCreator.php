<?php

namespace Controller;

use Model\Gpx;

class GPXCreator extends \XMLReader {

    public function fromFile($file) {
        
    }

    public function fromContent($content) {

        $gpx = new Gpx();

        if ($content == "") {
            return $gpx;
        }

        $this->xml($content);

        while ($this->next()) {
            echo "READ: " . $this->name . " | " . $this->nodeType . " | " . \XMLReader::ELEMENT . "</br>";
            if ($this->name == "gpx" && $this->nodeType == \XMLReader::ELEMENT) {}

            if ($this->name == "trk" && $this->nodeType == \XMLReader::ELEMENT) {
                $gpx->addTrack("trk");
            } 
        }

        return $gpx;
    }

}