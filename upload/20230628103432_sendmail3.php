<?php
$to="nand86363@gmail.com";
$subject="sample email test";
$body="hii this si test email send by php script";
$headers="From: aditibm7235@gmail.com";

if(mail($to,$subject,$body,$headers)){
    echo "email successfully sent to $to....";
}
else{
    echo "email sending failed....";
}
?>