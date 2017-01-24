<?php
if ($argc !== 2) {

	echo "Usage: php hellp.php [php].\n";

	exit(1);
}

$name = $argv[1];

echo "Hello, $name\n";