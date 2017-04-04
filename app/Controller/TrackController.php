<?php

namespace Controller;

use Controller\GPXCreator;

class TrackController {
    public function importGpx($gpxFile) {
        $gpxCreatr = new GPXCreator();
        $gpx = $gpxCreatr->fromContent($gpxFile);
        echo $gpx->toString();
    }
}
