<?php
require_once 'myclasses/userpanel.php';
$userPanel = new UserPanel ();
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>QQ login test</title>
<?php $userPanel->buildHead()?>
</head>
<body>
	<?php $userPanel->build()?>
</body>
</html>
