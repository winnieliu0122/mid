<<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
輸入名稱: <input text name="name"><br/>
輸入原網址: <input text name="longurl"><br/>



</body>
</html>>
<?php

$links = parse_ini_file('longurl');

if(isset($_GET['l']) && array_key_exists($_GET['l'], $links)){
	header('Location: ' . $links[$_GET['l']]);
}
else{
	header('HTTP/1.0 404 Not Found');
	echo 'Unknown link.';
}
}
}