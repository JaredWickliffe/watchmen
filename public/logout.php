<?php

require_once '../libraries/database.class.php';
require_once '../libraries/login.class.php';

Login::log_out();

header('location: index.php');
exit;
