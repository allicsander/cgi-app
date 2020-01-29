<?php
/**
 * User: allicsander
 * Date: 1/29/20
 * Time: 7:53 AM
 */

header('X-number: 2784737');

$stdin = fopen('php://stdin','r');

while($line = fgets($stdin)){
    echo $line;
}

echo sprintf("name: %s\n", $_GET['name'] );
echo sprintf("city: %s\n", $_GET['city'] );

echo getenv('QUERY_STRING'), "\n";