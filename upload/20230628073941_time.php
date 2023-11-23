<?php

$mytime=strtotime("31 may 2023");
echo date('d-m-Y h:i:s', $mytime);
echo "<br>";
$t= time();
echo date("h:i:s A",$t);
echo "<br>";

date_default_timezone_set('Asia/Kolkata');
echo date("d-m-Y g:i:s A");
?>