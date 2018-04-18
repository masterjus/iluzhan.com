<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/settings.php';
require_once '../data/trans.php';
require_once '../data/about.php';
require_once '../data/audio.php';
require_once '../data/photo.php';
require_once '../data/video.php';
require_once '../data/events.php';
require_once '../index.php';
$current_lang = array_search(explode('?', $_SERVER['REQUEST_URI'])[0], $lang_url);


