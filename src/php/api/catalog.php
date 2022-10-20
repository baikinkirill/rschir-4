<?php

require "services/dbWorker.php";
include "./methods/getCatalogMethod.php";
include "./methods/addCatalogItemMethod.php";

$method = $_SERVER['REQUEST_METHOD'];

switch ($method) {
    case "GET":
        getCatalogMethod();
        break;
    case "POST":
        addCatalogItemMethod();
        break;
    default:
        header("HTTP/1.0 405 Service Unavailable");
}


