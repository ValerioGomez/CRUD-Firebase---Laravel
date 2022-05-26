<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'firebase' => [
        'apiKey' => env('AIzaSyDiTAwk3urUALcM-gldm-d5nJ_nODfBTJU'),
        'authDomain' => env('laravel-crudfirebase.firebaseapp.com'),
        'projectId' => env('laravel-crudfirebase'),
        'storageBucket' => env('laravel-crudfirebase.appspot.com'),
        'messagingSenderId' => env('277978831698'),
        'appId' => env('1:277978831698:web:68e868431fedfec493788b'),
        'measurementId' => env('G-GY7M9B0T9T'),        
    ],

    /*var firebaseConfig = {
        apiKey: "AIzaSyDiTAwk3urUALcM-gldm-d5nJ_nODfBTJU",
        authDomain: "laravel-crudfirebase.firebaseapp.com",
        projectId: "laravel-crudfirebase",
        storageBucket: "laravel-crudfirebase.appspot.com",
        messagingSenderId: "277978831698",
        appId: "1:277978831698:web:68e868431fedfec493788b",
        measurementId: "G-GY7M9B0T9T"
    };*/

];
