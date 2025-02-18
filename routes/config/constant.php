<?php
    
    date_default_timezone_set('Asia/Kolkata');
    define('CURRENT_YEAR', date('Y'));
    define('CURRENT_DATETIME', date('Y-m-d H:i:s'));
    define('ROOT_PATH', dirname(__DIR__,2));

    $env_path = ROOT_PATH. '/.env';
    if (file_exists($env_path)) {
        $lines_env = file($env_path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        foreach ($lines_env as $line_env) {
            putenv(trim($line_env)); // Set env variables
        }
    }

    if ($_SERVER['HTTP_HOST'] == 'localhost' || $_SERVER['SERVER_NAME'] == 'localhost') {
        // Local environment
        define('BASE_URL', getenv('LOCAL_BASE_URL'));
    } else {
        // Live environment
        define('BASE_URL', getenv('LIVE_BASE_URL'));
    }

    define('ADMIN_EMAIL', 'support@finzor.com'); //for to_mail backup
    define('ADMIN_NAME', 'Finzor Admin'); //for to_mail backup

    define('CONTACT_ADMIN_EMAILS', [
        'to' => ['support@finzor.com' => 'Finzor Admin'],
        'cc' => [
            //'cc1@company.in' => 'Finzor Marketing Admin 1',
            //'cc2@company.in' => 'Finzor Marketing Admin 2'
        ],
        'bcc' => [
            'praveenkumar@upfinzo.in' => 'Finzor BCC User 1',
            'jothi@upfinzo.in' => 'Finzor BCC User 2'
        ]
    ]);

    define('BOOK_DEMO_ADMIN_EMAILS', [
        'to' => ['support@finzor.com' => 'Finzor Admin'],
        'cc' => [],
        'bcc' => [
            'praveenkumar@upfinzo.in' => 'Finzor BCC User 1',
            'jothi@upfinzo.in' => 'Finzor BCC User 2'
        ]
    ]);

    define('SUBSCRIBERS_ADMIN_EMAILS', [
        'to' => ['support@finzor.com' => 'Finzor Admin'],
        'cc' => [],
        'bcc' => [
            'praveenkumar@upfinzo.in' => 'Finzor BCC User 1',
            'jothi@upfinzo.in' => 'Finzor BCC User 2'
        ]
    ]);
	
?>