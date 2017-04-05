<?php

namespace Controller;

use Model\Gpx;

class GPXCreator extends \XMLReader {

    public function fromFile($file) {
        
    }

    public function fromContent($content) {

        $elements = [];

        $this->xml($content);

        while ($this->next()) {
            echo "READ: " . $this->name . " | " . $this->nodeType . " | " . \XMLReader::ELEMENT . "</br>";
            if ($this->nodeType == \XMLReader::ELEMENT) {
                if ($this->name == "gpx") {
                    $gpx = new Gpx();
                    $elements[] = $gpx;

                    if ($this->readInnerXML() != "") {
                        $gpxCreator = new GPXCreator();
                        $gpx->addChildren($gpxCreator->fromContent($this->readInnerXML()));
                    }
                }

                if ($this->name == "trk") {
                    $track = new Track();
                    $elements[] = $track;
                    
                    if ($this->readInnerXML() != "") {
                        $gpxCreator = new GPXCreator();
                        $track->addChildren($gpxCreator->fromContent($this->readInnerXML()));
                    }
                } 
            }
        }

        if (count($elements) == 0) {
            return null;
        }

        if (count($elements) == 1) {
            return $elements[0];
        }

        return $elements;
    }

}