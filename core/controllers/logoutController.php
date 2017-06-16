<?php
unset($_SESSION['app_id']);
unset($_SESSION['users']);
session_destroy();
header('location: ?view=login');
?>
