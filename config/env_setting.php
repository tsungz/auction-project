<?php

return [
    'Calendar' => [
        'Year' => 'Năm',
        'Month' => 'Tháng',
        'Day' => [
            'Day' => 'Ngày',
            'Mon' => '(T2)',
            'Tue' => '(T3)',
            'Wed' => '(T4)',
            'Thu' => '(T5)',
            'Fri' => '(T6)',
            'Sat' => '(T7)',
            'Sun' => '(CN)',
        ]
    ],
    //
    // Common config
    'Common' => [
        'Navigation' => 'navbar',
        'Paginate' => 5,
        'Number' => [
            'Zero' => 0,
            'One' => 1,
            'Ten' => 10,
        ],
        'Text' => [
            'Day' => ' ngày',
            'Hour' => ' giờ ',
            'Mins' => ' phút',
        ],
        'Basic' => [
            'Ctl' => [
                // Controller login thanh cong
                'LoginSuccess' => 'BidObjects',
                // Controller logout thanh cong
                'LogoutSuccess' => 'BidUsers',
            ],
            'Action' => [
                // action login
                'Login' => 'login',
                'Index' => 'index',
                'ListView' => 'list_view',
            ],
        ],
        'DateTime' => [
            'ToSecond' => [
                'Day' => 86400,
                'Hour' => 3600,
                'Minute' => 60,
            ],
        ],
    ],
    //
    // User rolls
    // user : 1 - duoc tham gia bid - xem thong tin bid - lich su bid
    // staff : 2 - quan ly cac vung bid
    // moder : 3 - chua nghi ra :))
    // admin : 99 - quan ly chinh
    'BidUsers' => [
        // Quyen nguoi dung
        'Rolls' => [
            'User' => 1,
            'Staff' => 2,
            'Moder' => 3,
            'Admin' => 99,
        ]
    ],
];
