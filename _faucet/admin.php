<?php
//-this is the default administrator page. here you view you the contents of the list.txt file, and remove any spam or duplicate entries, as well as clear the entire list.
require_once("admin_verify.php");

$authuser = $_SESSION['authuser'];
?>
<html>
<head>
<meta http-equiv="refresh" content="300">
<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
<title>r3wt's</title>
<style type="text/css">

<!--
//*this styles the menu
#minitabs 
{
border: 1px solid #000000;
}
ul#minitabs{list-style: none;margin: 0;padding: 7px 0;
  ;font-weight: bold;
  text-align: center;white-space: nowrap}
ul#minitabs li{display: inline;margin: 0 3px}
ul#minitabs a{text-decoration: none;padding: 0 0 3px;
  border-bottom: 4px solid #000000;color: #CCCCCC}
ul#minitabs a#current{border-color: #000000;color:#CCCCCC}
ul#minitabs a:hover{border-color: #000000;color: #CCCCCC}
}
--------------------------------------------------------
//**This text area(where you'll be seeing the list of address and ip submissions)
textarea.scroll {

height: 300px;

width: 656px;

overflow: auto;

border:2px solid #000000;

border-radius:7px;

background-color: #CCCCCC;

padding: 8px;

}

textarea:focus { 
    outline:none;
    border-color:#000000;
    box-shadow:0 0 10px #CCCCCC;
}
----------------------------------
// THE ADMINISTATOR Login Console
}
#adminconsole
}
float: left
}
------------------------------------
//*the Save button
input {
    border:2px solid #CCCCCC;
    border-radius:7px;
    font-size:32px;
    padding:5px;
    margin-top: 0px; 
    height: 50px;
    width: 200px;	
}

input:focus { 
    outline:none;
    border-color:#000000;
    box-shadow:0 0 10px #CCCCCC;
}
-->
</style>
</head>
</body>
<center><div>
<ul id="minitabs">
  <li><a id="current" href="index.php">Home</a></li>
  <li><a href="#">Your Page</a></li>
  <li><a href="#">Your Page</a></li>
  <li><a href="#">Your page</a></li>
</ul>
</div></center>
<div id="admin"><center><p>Hello <?=$authuser;?>!You have successfully logged in.<a href="login.php?logout">Logout</a></p></center><div>
<center><h3>Submissions</h3></center>
<center>
<?php
//this function calls the file that the form writes to. you can remove spam posts and save all from this admin form i have created for you.
$fn = "list.txt";


//do not edit anything between here
if (isset($_POST['content']))

{

    $content = stripslashes($_POST['content']);

    $fp = fopen($fn,"w") or die ("Error opening file in write mode!");

    fputs($fp,$content);

    fclose($fp) or die ("Error closing file!");

}
//and here unless you know what you are doing
?>
<form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">

    <textarea  class="scroll" name="content"><?php readfile($fn); ?></textarea></center>
	<center><input type="submit" name="Submit" value="Save"></form></center></br>
</div></center>
<center><img src="/images/badge.gif"></center>
</body>
</html>