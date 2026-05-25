<?php

declare(strict_types=1);

$role = "admin";

switch ($role) {
    case "admin":
        echo "Welcome, admin!";
        break;

    case "user":
        echo "Welcome, user!";
        break;

    default:
        echo "Unknown role";
}