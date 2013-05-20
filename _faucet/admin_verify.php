
<?php
//here you can set your username and password
$adminuser = "admin";
$adminpass = "password";

//this displays the login form. you can adjust the values below to customize it
function loginpage($error) {
	echo "<html>\n<head>\n<title>Admin Area</title>\n";
	echo "</head>\n<body>\n";
	echo "<table style='width:100%;height:100%;'>\n<tr>\n<td align='center'>\n";
	echo "<img src='/images/YOURLOGOHERE'>";
	echo "<form action='" . $_SERVER['REQUEST_URI'] . "' method='post'>\n";
	echo "<table border='0' width='300' cellspacing='0' cellpadding='4'><tr>\n";
	$formtitle = "Admin panel - Please login";
	if($error) $formtitle = "Wrong credentials!";
	echo "<th colspan='2'>" . $formtitle . "</th>\n";
	echo "</tr><tr>\n";
	echo "<td><p><b><label for='username'>Usr:</label></b></p></td>\n";
	echo "<td><input type='text' name='username' id='username' size='30' style='border:2px solid #000000; border-radius:7px; font-size:20px;'></td>\n";
	echo "</tr><tr>\n";
	echo "<td><p><b><label for='password'>Pass:</label></b></p></td>\n";
	echo "<td><input type='password' name='password' id='password' size='30' style='border:2px solid #000000; border-radius:7px; font-size:20px;'></td>\n";
	echo "</tr><tr>\n";
	echo "<td><b>Login:</b></td>\n";
	echo "<td><input type='submit' value=' Login &raquo; ' name='login' style='border:2px solid #000000; border-radius:7px; font-size:20px;'></td></tr></table></form>\n";
	echo "</td>\n</tr>\n</table>\n</body>\n</html>";
	exit;
}

$username = $_POST['username'];
$password = $_POST['password'];
$login    = $_POST['login'];

session_start();
if($_SERVER['QUERY_STRING'] == "logout") {
	unset($_SESSION['authuser']);
	header("Location: " . $_SERVER['PHP_SELF']);
	exit;
}
if($_SESSION['authuser'] != $adminuser) {
	if(!$login) {
		loginpage(false);
	}
	elseif(($username != $adminuser) || ($password != $adminpass)) {
		loginpage(true);
	}
	else {
		$_SESSION['authuser'] = $adminuser;
		header('Location: http://1gld.co.nf/_faucet/admin.php');
	}
}
// else we enter the restricted area
session_write_close();
?>

