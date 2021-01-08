<?php

ini_set('memory_limit', '-1');

require("vendor/autoload.php");
$openapi = \OpenApi\scan('./', ['exclude' => ['vendor']]);
header('Content-Type: application/x-yaml');

file_put_contents('openapi.yaml',  $openapi->toYaml());
