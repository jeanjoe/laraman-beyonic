<?php

return [

    /*
    |--------------------------------------------------------------------------
    | BEYONIC API KEY
    |--------------------------------------------------------------------------
    |
    | Here you provide the API KEY for your beyonic account.
    | The default key provided here is a for the test account.
    | After testing with the Test KEY, you may decide to change to your key for your account
    |
    */

    'beyonic_api_key' => env('BEYONIC_API_KEY', 'ab594c14986612f6167a975e1c369e71edab6900'),


    /*
    |--------------------------------------------------------------------------
    | BEYONIC API VERSION
    |--------------------------------------------------------------------------
    |
    | Here you may specify which version of the API
    | to use for your requests. Find out more details on the API documentation
    | website https://apidocs.beyonic.com/?php#versioning
    |
    */

    'beyonic_api_version' => env('BEYONIC_VERSION', 'v2'),


    /*
    |--------------------------------------------------------------------------
    | BEYONIC CLIENT VERSION
    |--------------------------------------------------------------------------
    |
    | Here you may specify the version number of the api you can decide to use
    | ta fixed version or the latest version of the api.
    |
    */

    'beyonic_client_version' => env('BEYONIC_CLIENT_VERSION', '0.0.15'),

];

// EOF
