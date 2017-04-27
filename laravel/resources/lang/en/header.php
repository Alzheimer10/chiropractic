<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used during authentication for various
    | messages that we need to display to the user. You are free to modify
    | these language lines according to your application's requirements.
    |
    */
    'main'=> 
    [
        'menu'=> 
        [
            'home' => 'Home',
            'about' => 'About',
            'services' => 'Services',
            'galery' => 'Gallery',
            'contacts' => 'Contacts',
            'vitalsalus' => 'VitaSalus'

        ],
        'lang' => 'Select language',
        'submenu'=> 
        [
            'about' => ['1'=>'WHO WE ARE','2'=>'OUR HISTORY','3' => 'GOVERNANCE'],
            'services' => ['1' => 'Doctors appointments','2' => 'psychological consultations','3' => 'Dentists','4' => 'NEWSTART®','5' => 'Recovery from Depression and Anxiety','6' => 'Internment','7' => 'Healthy stays','8'=>'Training programs','9'=>'Expo health and expo health child'],
            'contacts'
        ],
        'search' => 'Type and hit enter..',
        'index' => ['slide1'
                        =>['title'=> 'Welcome to Chiropractic',
                           'subtitle' => 'spinal healthcare',
                           'text1' => 'We welcome you to a warm environment, with friendly staff members',
                           'text2' => 'who wish to serve our patients in the best way possible.',
                           'appointment' => 'make an appointment'],
                    'slide2' 
                        =>['title'=> 'High-quality',
                           'subtitle' => 'chiropractic services',
                           'text1' => 'We offer affordable high-quality chiropractic services to everyone',
                           'text2' => 'who cares about their health and would like to improve it.',
                           'appointment' => 'make an appointment'],
                    'slide3' 
                        =>['title'=> 'The best therapy and',
                           'subtitle' => 'injuries treatment',
                           'text1' => 'At Chiropractic, you can get professional treatment of a wide',
                           'text2' => 'range of injuries and experience advanced therapy.',
                           'appointment' => 'make an appointment'],

                    ]
    ]
    
];