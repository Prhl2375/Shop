<?php

require_once dirname(__DIR__)  . '/config/init.php';
require_once LIBS . '/functions.php';


new shop\App();
debug(\shop\App::$app->getProperties());