<?php

//decompondo URLs
$url = "https://www.example.com:8080/path/to/page?query=php&lang=en#section2";

$arrayUrl = parse_url($url);

print_r($arrayUrl);

echo "Scheme: " . (isset($arrayUrl['scheme']) ? $arrayUrl['scheme'] : 'N/A') . "\n";
echo "Host: " . (isset($arrayUrl['host']) ? $arrayUrl['host'] : 'N/A') . "\n";
echo "Port: " . (isset($arrayUrl['port']) ? $arrayUrl['port'] : 'N/A') . "\n";
echo "Path: " . (isset($arrayUrl['path']) ? $arrayUrl['path'] : 'N/A') . "\n";
echo "Query: " . (isset($arrayUrl['query']) ? $arrayUrl['query'] : 'N/A') . "\n";
echo "Fragment: " . (isset($arrayUrl['fragment']) ? $arrayUrl['fragment'] : 'N/A') . "\n";