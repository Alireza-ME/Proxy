# BPT Proto Library 
 
A simple library for working with telegram api
--------------






for obfuscatoring we need require alomencoder.obfs.php :
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
 
