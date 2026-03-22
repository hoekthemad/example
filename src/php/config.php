<?php

require_once 'src/php/utils/utils.global.php';
require 'src/php/database/class.connect.php';

$dbConn = DbConnect::Init();
try {
    $connection = $dbConn->getConnection();
} catch (Exception $e) {
    exit($e->getMessage());
}

const DEBUG_OUTPUT = true;