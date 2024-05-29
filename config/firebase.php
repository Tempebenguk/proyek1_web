<?php

return [
    'credentials' => [
        'file' => env('FIREBASE_CREDENTIALS', storage_path('starling.json')),
    ],

    'database' => [
        'url' => env('https://starling-79d8b-default-rtdb.firebaseio.com/'),
    ],

    'auth' => [
        'api_key' => env('AIzaSyAd8Fwod_tsmsLBSBdpMIAH-ge0PqSmhEs'),
        'auth_domain' => env('starling-79d8b.firebaseapp.com'),
        'project_id' => env('starling-79d8b'),
        'storage_bucket' => env('starling-79d8b.appspot.com'),
        'messaging_sender_id' => env('816572852011'),
        'app_id' => env('1:816572852011:web:c504b81e39fc3fdad4c76e'),
    ],

];
