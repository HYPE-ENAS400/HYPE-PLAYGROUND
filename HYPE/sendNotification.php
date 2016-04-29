<?php

include 'APNSBase.php';
include 'APNotification.php';
include 'APFeedback.php';

echo 'hello';
  # Notification Example
  # Shouldn't have to change?
try{
  $notification = new APNotification('development');
  $notification->setDeviceToken("0aa0304500736f4a1a292e8ad6febb4bbfff624b23a4c2cbd241b5957db8c5c4");
  $notification->setMessage("Time to earn points!");
  $notification->setBadge(1);
  $notification->setPrivateKey('pushcert.pem');
  $notification->setPrivateKeyPassphrase('');
  $notification->send();
}catch(Exception $e){
  echo $e->getLine().': '.$e->getMessage();
}

?>