<?php

include 'APNSBase.php';
include 'APNotification.php';
include 'APFeedback.php';

echo 'hello';
  # Notification Example
  # Shouldn't have to change?
  $notification = new APNotification('development');
  $notification->setDeviceToken("77715020f64cfc12448884260456a0906b80b9790feb6fe617a50ef720ab4306");
  $notification->setMessage("Hype Push Test");
  $notification->setBadge(1);
  $notification->setPrivateKey('certificates/pushCer.cer');
  $notification->setPrivateKeyPassphrase();
  $notification->send();


?>