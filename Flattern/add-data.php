<?php
include_once("config.php");

require_once __DIR__.'/vendor/autoload.php';
  
session_start();

$profile = $_SESSION['access_profile'];

$result = mysqli_query($mysqli, "INSERT INTO pengunjung VALUES(
						'{$profile['emails']['0']['value']}',
						'{$profile['displayName']}','','','')");

header('Location:index.php');
?>