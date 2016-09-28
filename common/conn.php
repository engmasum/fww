 <?php 
$host_name="localhost";
$user_name="root";
$password="1234";
$db_name="foodwonder";

if(isset($_SESSION["member_login"])&&!empty($_SESSION["member_login"])){
	$_SESSION["member_login"]=$_SESSION["member_login"];
}else{
	$_SESSION["member_login"]="";
}

$conn=mysqli_connect($host_name,$user_name,$password,$db_name);

$db_select=mysqli_select_db($conn, $db_name);

if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: ".mysqli_connect_error();
}
mysqli_select_db($conn,$db_name);
$db="DB connected ";

?>
