<?php
session_start();
unset($_SESSION['user']);
header('../pages/indexx.php');