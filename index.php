<!DOCTYPE html>
<html>
<head>
<title>GLDfaucetv1</title>
<link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon" />
<meta name="discription" content="The Official Home of GLD Coin">
<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1">
<meta name="keywords" content="GLDcoin, GoldCoin Official Site, GoldCoin, GoldCoin Faucet, Download Gold Coin, Cool, Mine GoldCoin">
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
----------------------------------------------------------
//*this styles the input fields
input {
    border:2px solid #dadada;
    border-radius:7px;
    font-size:18px;
    padding:5px;
    margin-top:-10px;    
}

input:focus { 
    outline:none;
    border-color:#9ecaed;
    box-shadow:0 0 10px #9ecaed;
}
----------------------------------------------------------
//*this styles the address bar
#address 
{ 
width: 300px; 
height: 20px;
}
----------------------------------------------------------
//*this styles the submit button
#submit
{
width: 50px;
height: 20px;
}
-->
</style>
</head>
<body>
<center><div>
<ul id="minitabs">
  <li><a id="current" href="index.php">Home</a></li>
  <li><a href="#">Your Page</a></li>
  <li><a href="#">Your Page</a></li>
  <li><a href="#">Your page</a></li>
</ul>
</div></center>
<center><div>
<a href="index.php"><img src="/images/YOUR LOGO IMAGE HERE" title="YOUR DESCRIPTION HERE"></a>
<h3>Enter Your Address</h3>
<form name="submit" method="POST" action="/_faucet/verify_form.php"><input type="text" id="address" name="address" maxlength="34"><input id="ip" name="ip"  value='<?php echo $_SERVER['REMOTE_ADDR'] ; ?>' type='hidden'>
<input id="timestamp" name="timestamp"  value='<?php echo $date = date('m/d/Y h:i:s a');?>' type='hidden'>
<input type="submit" name="Submit" value="Submit">
</form>
</div></center>
//** this is the footer, if you wish to remove this please donate to the project
<center><div id="footer"><a href="index.php"><img src="/images/badge.gif"></a><a href="http://www.r3wt.tk" "visit r3wts page">Another Fine Design by <img src="/images/r3wt.png"></img></a></div></center>
</p>
</body>
</html>