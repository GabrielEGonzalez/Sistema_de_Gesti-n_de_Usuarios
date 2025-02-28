<?php

    require_once('../app/init.php');

    require_once('../app/lib/core.php');

    $url = new Core();
    echo ''. $url->getUrl();