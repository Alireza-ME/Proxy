# BPT Proto Library 
**simple library for working with telegram api**
<br><br>
[![API Version](https://img.shields.io/badge/Bot%20API-5.3%20%28June%202021%29-32a2da.svg)](https://core.telegram.org/bots/api#june-25-2021)
[![Join the bot support group on Telegram](https://img.shields.io/badge/telegram-@PHP__Telegram__Bot__Support-64659d.svg)](https://telegram.me/PHP_Telegram_Bot_Support)
[![Donate](https://img.shields.io/badge/%F0%9F%92%99-Donate%20%2F%20Support%20Us-blue.svg)](#donate)

[![Build Status](https://travis-ci.com/php-telegram-bot/core.svg?branch=master)](https://travis-ci.com/github/php-telegram-bot/core)
[![Code Coverage](https://img.shields.io/scrutinizer/coverage/g/php-telegram-bot/core/master.svg?style=flat)](https://scrutinizer-ci.com/g/php-telegram-bot/core/?b=master)
[![Code Quality](https://img.shields.io/scrutinizer/g/php-telegram-bot/core/master.svg?style=flat)](https://scrutinizer-ci.com/g/php-telegram-bot/core/?b=master)
[![Latest Stable Version](https://img.shields.io/packagist/v/longman/telegram-bot.svg)](https://packagist.org/packages/longman/telegram-bot)
[![Dependencies](https://tidelift.com/badges/github/php-telegram-bot/core?style=flat)][Tidelift]
[![Total Downloads](https://img.shields.io/packagist/dt/longman/telegram-bot.svg)](https://packagist.org/packages/longman/telegram-bot)
[![Downloads Month](https://img.shields.io/packagist/dm/longman/telegram-bot.svg)](https://packagist.org/packages/longman/telegram-bot)
[![Minimum PHP Version](http://img.shields.io/badge/php-%3E%3D7.3-8892BF.svg)](https://php.net/)
[![License](https://img.shields.io/packagist/l/longman/telegram-bot.svg)](https://github.com/php-telegram-bot/core/LICENSE)
<br><br>
 Configs 
```php
include_once "alomencoder.obfs.php";
```
after that, we define $settings parameter, then use method AlomEncoder::obfuscator()
```php
/**
 * @method AlomEncoder::Obfuscator()
 * @param string|callable $code (php code with tags and html code | php file name | an callable)
 * @param array $settings = [] (obfuscate settings parameter)
 */
$settings = [
  'rounds' => [
    'main' => [
      'depth' => 1.5
    ]
  ],
  'license' => [
    'title' => 'example',
    'author' => 'Avid'
  ]
];
$obfs = AlomEncoder::obfuscator("file.php", $settings);
file_put_contents("file.obfs.php", $obfs); // save obfuscated script
```
 
## Setting parameters
 
Index | Type | Description
----- | ---- | -----------
__license__ | array | [License settings](https://github.com/avid0/Alom#license-settings)
__additional__ | array | [Additional settings](https://github.com/avid0/Alom#additional-settings)
__identify__ | array | [Identify settings](https://github.com/avid0/Alom#identfy-settings)
__date_domain__ | array | [Date domain settings](https://github.com/avid0/Alom#date-domain-settings)
__rounds__ | array | [Rounds settings](https://github.com/avid0/Alom#rounds-settings)
__style__ | array | [Style settings](https://github.com/avid0/Alom#style-settings)
 

#### [You can see full document here](https://bpt-proto.ir).<br>
#### [You can download latest version of BPT here](https://bpt-proto.ir/BPT/BPT.php).<br>
#### [You can download latest version of BPT base here](https://bpt-proto.ir/BPT/base.php).<br>
#### [You can see all of BPT vesrion here](https://dl.bpt-proto.ir/BPT).
