<?php
require_once 'functions.php';
require_once 'headers.php';

$uri = parse_url(filter_input(INPUT_SERVER,'PATH_INFO'),PHP_URL_PATH);
$parameters = explode('/',$uri);

try {
    $db = openDb();
    selectAsJson($db,'select * from tuote');
  }
  catch (PDOException $pdoex) {
    returnError($pdoex);
  }