<html>
  <head>
    <title>calc.html</title>
  </head>
  <body>
    <form name="form1" method="post">
      <input type = "text" name = "txtA">　

      <select name="selOpe" size=1>
        <option value = "＋">＋</option>
        <option value = "－">－</option>
        <option value = "×">×</option>
        <option value = "÷">÷</option>
      </select>　

      <input type = "text" name = "txtB">　=　?　
      <br>
      <input type = "submit" value = "計算">
      <input type = "reset" value = "清除">
    </form>

   


    <?php
 
      $a = $_POST['txtA'];
      $b = $_POST['txtB'];
      $ope = $_POST['selOpe'];

	var_dump(pow(int, int));
		$num= pow( $a,$b);
		echo "指數值為：";
 		echo "$num";
 		echo "<br/>";
       switch ($ope) {
        case "＋":
           $answer = $a + $b;
           break;
     	case "－":
          $answer = $a - $b;
          break;
         case "×":
           $answer = $a * $b;
           break;
         case "÷":
           $answer = $a / $b;
           break;
         default:
          break;
     }

      print ($a." ".$ope." ".$b." = ".$answer."\n");

 
		


	?>
  </body>

</html>