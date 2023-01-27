<?php
require_once __DIR__.'/vendor/autoload.php';
    
    $channelName = 'news';
    $recipient= 'ExponentPushToken[gI0QXkCabcfpX41WLDVNEk]';
    
    // You can quickly bootup an expo instance
    $expo = \ExponentPhpSDK\Expo::normalSetup();
    
    // Subscribe the recipient to the server
    $expo->subscribe($channelName, $recipient);
    
    // Build the notification data
    $notification = ['body' => 'Hello World!'];
    
    // Notify an interest with a notification
    $expo->notify([$channelName], $notification);