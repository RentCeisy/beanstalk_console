<?php

$GLOBALS['config'] = array(
    /**
     * List of servers available for all users
     */
    'servers' => array(/* 'Local Beanstalkd' => 'beanstalk://localhost:11300', ... */),
    /**
     * Saved samples jobs are kept in this file, must be writable
     */
    'storage' => dirname(__FILE__) . DIRECTORY_SEPARATOR . 'storage.json',
    /**
     * Optional Basic Authentication
     */
    'auth' => array(
        'enabled' => isset($_ENV['AUTH_ENABLED']) ? $_ENV['AUTH_ENABLED'] : false,
        'username' => isset($_ENV['AUTH_USERNAME']) ? $_ENV['AUTH_USERNAME'] : 'admin',
        'password' => isset($_ENV['AUTH_PASSWORD']) ? $_ENV['AUTH_PASSWORD'] : 'password',
    ),
    /**
     * Version number
     */
    'version' => '1.7.20',
);
