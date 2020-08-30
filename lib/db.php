<?php

/** Connecting with our database */
$db = new PDO($dsn, $user, $pwd);

// Setting up error
$db->setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_WARNING);
