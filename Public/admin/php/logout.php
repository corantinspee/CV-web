<?php
session_start();
session_destroy();

    header('Location: http://cv-web/admin/index.php');
exit();