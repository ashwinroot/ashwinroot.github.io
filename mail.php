<?php

$msg = "Call request to attend at ";
$msg = wordwrap($msg,70);
$headers = 'From: ashwinoscar@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

$p = mail('ashwinoscar@gmail.com','Alert',$msg,$headers);
echo $p;
 ?>
