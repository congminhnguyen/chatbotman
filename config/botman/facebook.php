<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Facebook Token
    |--------------------------------------------------------------------------
    |
    | Your Facebook application you received after creating
    | the messenger page / application on Facebook.
    |
    */
    'token' => env('FACEBOOK_TOKEN'),

    /*
    |--------------------------------------------------------------------------
    | Facebook App Secret
    |--------------------------------------------------------------------------
    |
    | Your Facebook application secret, which is used to verify
    | incoming requests from Facebook.
    |
    */
    'app_secret' => env('FACEBOOK_APP_SECRET'),

    /*
    |--------------------------------------------------------------------------
    | Facebook Verification
    |--------------------------------------------------------------------------
    |
    | Your Facebook verification token, used to validate the webhooks.
    |
    */
    'verification' => env('FACEBOOK_VERIFICATION'),

    /*
    |--------------------------------------------------------------------------
    | Facebook Start Button Payload
    |--------------------------------------------------------------------------
    |
    | The payload which is sent when the Get Started Button is clicked.
    |
    */
    'start_button_payload' => 'GET_STARTED',

    /*
    |--------------------------------------------------------------------------
    | Facebook Greeting Text
    |--------------------------------------------------------------------------
    |
    | Your Facebook Greeting Text which will be shown on your message start screen.
    |
    */
    'greeting_text' => [
        'greeting' => [
            [
                'locale' => 'default',
                'text' => 'Hello {{ user_first_name }} - Đừng ngần ngại, liên hệ với chúng tôi ngay!',
            ],
            [
                'locale' => 'en_US',
                'text' => 'Timeless apparel for the masses.',
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Facebook Persistent Menu
    |--------------------------------------------------------------------------
    |
    | Example items for your persistent Facebook menu.
    | See https://developers.facebook.com/docs/messenger-platform/reference/messenger-profile-api/persistent-menu/#example
    |
    */
    'persistent_menu' => [
        [
            'locale' => 'default',
            'composer_input_disabled' => false,
            'call_to_actions' => [
                [
                    'type' => 'web_url',
                    'title' => 'PXWebShop',
                    'url' => 'https://pxwebshop.com',
                    'webview_height_ratio' => 'full',
                ],
                [
                    'title' => 'Started',
                    'type' => 'postback',
                    'payload' => 'Started',
                ],
                [
                    'title' => 'Bảng giá',
                    'type' => 'postback',
                    'payload' => 'Bảng giá',
                ],
            ],
        ],
    ],
    // "persistent_menu": [
    //     {
    //         "locale": "default",
    //         "composer_input_disabled": false,
    //         "call_to_actions": [
    //             {
    //                 "type": "postback",
    //                 "title": "Talk to an agent",
    //                 "payload": "CARE_HELP"
    //             },
    //             {
    //                 "type": "postback",
    //                 "title": "Outfit suggestions",
    //                 "payload": "CURATION"
    //             },
    //             {
    //                 "type": "web_url",
    //                 "title": "Shop now",
    //                 "url": "https://www.originalcoastclothing.com/",
    //                 "webview_height_ratio": "full"
    //             }
    //         ]
    //     }
    // ]

    /*
    |--------------------------------------------------------------------------
    | Facebook Domain Whitelist
    |--------------------------------------------------------------------------
    |
    | In order to use domains you need to whitelist them
    |
    */
    'whitelisted_domains' => [
        'https://petersfancyapparel.com',
    ],
];
