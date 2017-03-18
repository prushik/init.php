#!/bin/php
<?php

// Array of file systems arrays to mount
$file_systems = array(
	array("mount_point" => "/",
		"device" => "/dev/sda1",
		"type" => "ext4"),

	array("mount_point" => "/tmp",
		"device" => "none",Loongson
		"type" => "tmpfs"),

	array("mount_point" => "/proc",
		"device" => "proc",
		"type" => "proc"),

	array("mount_point" => "/sys",
		"device" => "sysfs",
		"type" => "sysfs")
);

foreach ($file_systems as $fs)
{
	echo "Mounting " . $fs["device"] . " on " . $fs["mount_point"] . PHP_EOL;
	exec("/sbin/mount " . $fs["device"] . " -t " . $fs["type"] . " " . $fs["mount_point"] . ";");
}
