<?php
	$no=$_GET["no"];
	$link=mysqli_connect("127.0.0.1","root","123456","midterm");
	$del="DELETE FROM user WHERE id=".$no;#將user集合中欄位id=變數no的值的資料刪除
	mysqli_query($link,$del);

	$read="SELECT * FROM user";
 	$readresult=mysqli_query($link,$read);
	echo "<table border='1'>";
	echo "<tr><td>帳號</td><td>密碼</td><td>email</td><td>電話</td></tr>";
	while($result=mysqli_fetch_array($readresult)){
		echo "<tr>";
		echo "<td>".$result[0]."</td><td>".$result[1]."</td><td>".$result[2]."</td><td>".$result[3].
		"</td>";
		echo "</tr>";
		echo "<a href='checkdelete.php?no=".$result[0]."'>
				<img src='http://icons.iconarchive.com/icons/custom-icon-design/pretty-office-4/256/clear-icon.png' width=4%></img></a>";
	}
	echo"</table>";


?>
