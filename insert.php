<?php

require_once __DIR__ . '/vendor/autoload.php';
$con = new MongoDB\Client("mongodb+srv://kenUser:KenPassword@atlascluster.qrj9egp.mongodb.net/Sample");
$db = $con->Sample;
$tbl = $db->Connect;
$tbl->insertOne(["Name" => "ken", "Age" => 21]);

?>