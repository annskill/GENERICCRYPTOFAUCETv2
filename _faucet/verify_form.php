<?
//This is the basic form processing file. you can see here it gets the address, ip address and the server date and time from the main "index.php" page.
    $address = $_POST['address'];
    $ip = $_POST['ip'];
    $timestamp = $_POST['timestamp'];

    $data = "$address | $ip | $timestamp ";

//open the file and choose the mode. changing the name of this file is not recommended.
$fh = fopen("list.txt", "a");	
//writes the address and ip to the file
fwrite($fh, $data); //close the file fclose($fh); 
echo "Your Address Has Been Submitted <a href='your home page here'> return to the homepage?</a>";
?>