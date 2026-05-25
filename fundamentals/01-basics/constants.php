<?php

declare(strict_types=1);

define("SITE_NAME", "PHP Fundamentals");

echo SITE_NAME . "\n";

// This is going to fail, as a constant cannot be changed
define("SITE_NAME", "New name");

echo SITE_NAME . "\n";