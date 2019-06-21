<?php
session_start();
$_SESSION['is_logged_in'] = true;

header('Location: http://cv-web/admin/index.php');
exit();