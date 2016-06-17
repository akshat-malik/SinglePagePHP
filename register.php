<?php
$arr=array("Noida","Delhi","Gurgaon","Haryana");
if(isset($_POST['button']))
{
	mysql_connect("localhost","root","");
mysql_select_db("project")or die("error");
$name=$_POST['nm'];
$city=$_POST['ct'];
$mobile=$_POST['mob'];
$dob=$_POST['dob'];
$prof=$_POST['prof'];
$pass=$_POST['npass'];
//echo $name."<br>".$dob;
$query="insert into `user` values (NULL,'$name','$city','$mobile','$dob','$prof','$pass')";
	mysql_query($query);
	if(mysql_affected_rows() >0)
		echo "Registration SuccessFUl!!!";
	else
		echo "Registration Unsuccesful";
}




?>

<center>
<form method="post" style="border:2px solid black;border-radius:5px;background-color:#9999ff;width:300px;margin:0 auto">
Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="nm"/><br>
City:<select name="ct">
<?php
for($i=0;$i<count($arr);$i++)
echo "<option>  $arr[$i] </option>";
echo "</select>";
?>
<br>
Mobile:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="mob" pattern=".{6,}" title="Six or more characters(Max 10)"/>
<br>
Date Of Birth<input type="date" name="dob"/><br>
Profession&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="prof"/><br>
Password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="npass" pattern=".{6,}" title="Six or more characters(Max 20)"/><br>
<input type="submit" name="button" value="submit"/><br>

</form>
<center>