<?php
include 'config.php';
$EIh3Kox_ = API_KEY;
if(!file_exists('BPT.php')){
    copy('https://BPT-Proto.site/BPT/BPT.php','BPT.php'); 
}
include 'BPT.php';
class BPT_handler extends BPT{
    public function __construct($token_bot){
        parent::__construct($token_bot);
    }
    public function inline_query($update){
        return;
    }
    public function callback_query($update){
        return;
    }
    public function message($update){
      $chat_id = $update['chat']['id'];
        $message_id = $update['message_id'];
        $text = $update['text'];
       
    if ($text == '/start' and $chat_id == Admin){
       $this->sendMessage(['text'=>'Dear admin, welcome to send proxy manually /Send']);
      }
             
     elseif($text == '/Send' and $chat_id == Admin){
     $proxy = $this->api(['type'=>'proxy']);
     $prx = $proxy[0]['link'];
     $this->sendMessage(['text'=>'Successfully Posted.']);
    $this->sendMessage(['chat_id'=>Channel,'text'=>Text,
    'reply_markup'=>$this->eKey(['inline'=>[[[Button,"$prx"]]]])]);      
      }
      
     elseif($text == '/MultiSend' and $chat_id == Admin){
      $this->sendMessage(['text'=>'Processing.... ']);
      for($i=0; $i < 10; $i++){     
     $proxy = $this->api(['type'=>'proxy']);
     $prx = $proxy[0]['link'];
    $this->sendMessage(['chat_id'=>Channel,'text'=>Text,
    'reply_markup'=>$this->eKey(['inline'=>[[[Button,"$prx"]]]])]);      
      }
    $this->sendMessage(['text'=>'Successfully Posted.']);
}
        return;
    }
    public function edited_message($update){
        return;
    }
}
$BPT = new BPT_handler(['token'=>$EIh3Kox_,'security'=>true,'secure_folder'=>true,'multi'=>false]);