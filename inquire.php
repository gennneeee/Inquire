<?php

require_once 'vendor/autoload.php';
require_once './inquireConversation.php';

use BotMan\BotMan\BotMan;
use BotMan\BotMan\BotManFactory;
use BotMan\BotMan\Drivers\DriverManager;
use BotMan\BotMan\Cache\DoctrineCache;
use Doctrine\Common\Cache\PhpFileCache;

DriverManager::loadDriver(\BotMan\Drivers\Web\WebDriver::class);

$cacheDriver = new PhpFileCache(__DIR__ . '/cache');

$botman = BotManFactory::create([], new DoctrineCache($cacheDriver));

$botman->hears('Hello CvSU', function($bot) {
    $bot->startConversation(new inquireConversation());
});

$botman->fallback(function($bot) {
    $bot->reply('Hi! To start a coversation with me, kindly chat Hello CvSU.');
});

$botman->listen();
