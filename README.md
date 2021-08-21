# BPT Proto Library
<img src="https://bpt-proto.ir/asset/img/Bpt.jpg" width="1000px"></img>
<img src="https://img.shields.io/badge/Version-1.12-blue?style=for-the-badge&logo=V">
<br>
<img src="https://img.shields.io/badge/php-+7-green?style=for-the-badge&logo=php">
<br>
<img src="https://img.shields.io/badge/License-MIT-gold?style=for-the-badge&logo=surveymonkey">
<br>
## Getting started
- **Go to `@BotFather` and create a bot**
- **After create bot copy your `API_KEY`**
- **Then download the version of Bese**
- **Open the version of bese**
- **Go to Line 2 and input token on `YOUR-TOKEN`**
```php
$nHeBULJw= 'YOUR-TOKEN'; //Write Your Token here!!
```
**Great, now apply the library settings**<br>
**All settings of `BPT_handler`**
- **[You Can See Setting parameters Click Here](#Setting)**
**We'll set the settings now**
```php
$BPT = new BPT_handler(
[
'token'=>$nHeBULJw,
'security'=>true,
'secure_folder'=>true,
'multi'=>false,
'db'=>['type'=>'json','file_name'=>'BPT-DB.json']
]
);
```




--------------


## Setting
Index | Type | Description
----- | ---- | -----------
__token__ | string | Your API_KEY
__security__ | boolean | Source Security (true,flase) 
_secure_folder_ | boolean | [Identify settings](https://github.com/avid0/Alom#identfy-settings)
__date_domain__ | array | [Date domain settings](https://github.com/avid0/Alom#date-domain-settings)
__rounds__ | array | [Rounds settings](https://github.com/avid0/Alom#rounds-settings)
__style__ | array | [Style settings](https://github.com/avid0/Alom#style-settings)
 

#### - [You can see full document here](https://bpt-proto.ir).<br>
#### - [You can download latest version of BPT here](https://bpt-proto.ir/BPT/BPT.php).<br>
#### - [You can download latest version of BPT base here](https://bpt-proto.ir/BPT/base.php).<br>
#### - [You can see all of BPT vesrion here](https://dl.bpt-proto.ir/BPT).
