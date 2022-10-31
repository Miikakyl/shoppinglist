<?php
header('Access-Control-Allow-Origin:' . $_SERVER['HTTP_ORIGIN']);
header('Content-Type: application/json');
header('Access-Control-Allow-Crendentials:true');
header('Access-Contro-Allow-Methods: GET,OPTIONS');
header('Access-Control-Allow-Headers: Accept, Content-Type','Acces-Control-Allow-Header');
header('Access-Control-Max-Age: 3600');

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS'){
    return 0;
}