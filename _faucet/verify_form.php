<?

    $address = $_POST['address'];
    $ip = $_POST['ip'];
    $timestamp = $_POST['timestamp'];

    $data = "$address | $ip | $timestamp ";

    if($address==''){
 
echo'No address entered. go back< your link here>';
	}else
//open the file and choose the mode
$fh = fopen("list.txt", "a");	
//writes the address and ip to the file
fwrite($fh, $data); //close the file fclose($fh); 
echo "Your Address Has Been Submitted<your link here>";

?>
