<?php
require_once("../myclasses/myqqconnect.php");
$myqc = new MyQC();
$myqc->logout();
header("Location: ../index.php");
die();

