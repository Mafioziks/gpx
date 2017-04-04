<?php

require "vendor/autoload.php";

use Controller\TrackController;

$trackController = new TrackController();

$trackController->importGpx(
    "<?xml version=\"1.0\" encoding=\"UTF-8\" standalone=\"no\" ?>
    <gpx xmlns=\"http://www.topografix.com/GPX/1/1\" >
        <metadata>
            <link href=\"http://www.garmin.com\">
                <text>Garmin International</text>
            </link>
            <time>2017-03-17T22:44:28Z</time>
        </metadata>
        <trk>
            <name>Pašreizējais celiņš: 19 FEBR. 2017 12:15</name>
            <extensions>
                <gpxx:TrackExtension>
                    <gpxx:DisplayColor>Cyan</gpxx:DisplayColor>
                </gpxx:TrackExtension>
            </extensions>
            <trkseg>
                <trkpt lat=\"56.971855\" lon=\"24.149456\">
                    <ele>-2.75</ele>
                    <time>2017-02-19T10:15:21Z</time>
                </trkpt>
                <trkpt lat=\"56.971676\" lon=\"24.149649\">
                    <ele>-2.75</ele>
                    <time>2017-02-19T10:15:27Z</time>
                </trkpt>
                <trkpt lat=\"56.971664\" lon=\"24.149693\">
                    <ele>-2.75</ele>
                    <time>2017-02-19T10:15:28Z</time>
                </trkpt>
            </trkseg>
        </trk>
    </gpx>"
);