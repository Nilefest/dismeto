<?php
set_time_limit(0);

define("URL_DISMETO", '/dismeto');
define("DISMETO_DIR", __DIR__);

require_once DISMETO_DIR . '/src/DISMETO.php';

$dismeto = new DLL\DISMETO\DISMETO();

define("DISMETO_VER", $dismeto->version());
