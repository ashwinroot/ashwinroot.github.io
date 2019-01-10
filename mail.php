<?php

$msg = "Reminder alert: Daily updates ";
$msg = wordwrap($msg,70);
$headers = 'From: ashwinoscar@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

$p = mail('ashwinoscar@gmail.com','See whats new',$msg,$headers);
echo $p;
 ?>
