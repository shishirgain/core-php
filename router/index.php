<?php
use Router\Path;

$paths = [
    new Path('/', '/../views/home.php'),
    new Path('/about', '/../views/about.php'),
];

function route($url)
{
    global $paths;
    foreach ($paths as $path) {
        if ($url == $path->getPath()) {
            return $path;
        }
    }
}

$url = "$_SERVER[REQUEST_URI]";

include(route($url)->getView());
