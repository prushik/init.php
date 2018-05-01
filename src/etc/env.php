#!/bin/php
<?php

$variables = array(
	"PATH" => "/bin:/sbin",
	"PWD" => "/"
);

echo "Setting up environment" . PHP_EOL;
foreach ($variables as $variable => $value)
{
	putenv($variable . "=" . $value);
}
