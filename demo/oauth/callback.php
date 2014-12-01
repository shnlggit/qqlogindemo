<?php
require_once("../../API/qqConnectAPI.php");
$qc = new QC();
echo "qq_callback:<br>";
echo $qc->qq_callback();
echo '<br>';
echo "get_openid:<br>";
echo $qc->get_openid();

header("Location: ../index.php");
die();
