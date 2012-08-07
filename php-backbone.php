<?php

function php_backbone() {
  global $_PUT, $_DELETE, $_POST, $_GET;
  // map global arrays, create unsupported by PHP PUT and DELETE
  $_PUT = array();
  $_DELETE = array();
  $method = strtoupper($_SERVER['REQUEST_METHOD']); 
  if ( preg_match('/application\/json/i' ,$_SERVER['CONTENT_TYPE'])) {
    // if content is JSON, parse accordingly...
    switch ( $method ) {
      case "GET":
      case "POST":
      case "PUT":
      case "DELETE":
        $variable = "_".$method;
        $$variable = json_decode(file_get_contents('php://input'), true);
        break;
      default:
        // unsupported methos, throw error?
    }
  } else {
    // Standard parsing for HTML Forms (application/x-www-form-urlencoded)
    switch ( $method ) {
      case "GET":
      case "POST":
        // nothing to do, PHP parsed normally
        break;
      case "PUT":
        parse_str(file_get_contents('php://input'), $_PUT);
        break;
      case "DELETE":
        parse_str(file_get_contents('php://input'), $_DELETE);
        break;
      default:
        // unsupported methos, throw error?
    }
  }
}

php_backbone();
