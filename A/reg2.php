<html>
	<head>
		<meta charset="utf8">
		<title>
			資料確認
		</title>
	</head>
	<body>
		<body bgcolor="#D4FFFF">
	
		<!-- <form action="work-travel.php" method="post"> -->
		<?php
		//變數儲存
		$name=$_POST["name"];
		$pwd=$_POST["pwd"];
		$email=$_POST["email"];
		$phone=$_POST["phone"];
		$login=$_POST["login"];
		$lastlogin=$_POST["lastlogin"];
		//連結mysql與新增資料
		mysqli_connect("localhost","root","123456","midterm") ;
		
		mysql_query("INSERT INTO user(name,pwd,email,phone) VALUES ('$name','$pwd','$email','$phone')");


		echo "帳號:";
		echo $_POST["name"];
		echo "　　";
		echo "密碼:";
		echo $_POST["pwd"];
		echo "　　";
		echo "email:";
		echo $_POST["email"];
		echo "　　";
		echo "電話:";
		echo $_POST["phone"];
		echo "<br>";
	
		?>
		
		
		
	</body>
</html>
