<html>
	<head>
		<title>
			參加者資料
		</title>
	</head>
	<body>
		<body bgcolor="#D4FFFF">
	
		
		<font size="5" color=#828282><b>.......................................所有參加者資料.......................................</b></font>
		<br>
		<br>
		<?php
			@mysqli_connect("127.0.0.1","root","123456","midterm") ;
		
			$sql="SELECT * FROM user";
			$sql2=mysql_query($sql);
			$i=1;
			while($result=mysql_fetch_row($sql2))
			{
				echo $i;
				echo ".";
				echo "帳號：";
				echo $result[1];

				echo "email：";
				echo $result[3];
				
				echo $result[4];
				echo "　電話";
				echo "<br>";
				echo "<br>";
				$i=$i+1;
			}


			echo "<a href='checkdelete.php?no=".$result[0]."'>
				<img src='http://icons.iconarchive.com/icons/custom-icon-design/pretty-office-4/256/clear-icon.png' width=4%></img></a>";
				
		?>
		
		<font size="5" color=#828282><b>..........................................................................................................</b></font>
		
		<center><font size="4" color=#FFA600>●●　回主畫面　●●</center>
		<a href="http://127.0.0.1/index.php">
		<img src="http://star.morningstar.com.tw/epaper/humor/img/arrow.gif"
		width="5%" height="10%"></img></a>
		<br>
		<br>
		<br>
		
	</body>
</html>