<?php

// src/init/admin.php

use Security\CheckLogin;

require_once(__DIR__.'/../../vendor/autoload.php');

$checkLogin = new CheckLogin();
$checkLogin->check();

?>