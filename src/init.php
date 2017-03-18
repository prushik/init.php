#!/bin/php
<?php

// If runlevel isn't set, assume the default
if (!isset($RUNLEVEL))
	$RUNLEVEL = 3;

// If it exists, set up the initial environment
if (file_exists("/etc/env.php"))
	include "/etc/env.php";/

// Here we need to mount filesystems
if (file_exists("/etc/fstab.php"))
	include "/etc/fstab.php";/


// Run the init scripts
include "/etc/inittab.php";


