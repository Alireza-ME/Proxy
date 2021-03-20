<?php

include 'config.php';
function bot($method,$datas=[]){
    $url = 'https://api.telegram.org/bot'.API_KEY.'/'.$method;
$ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}

$token= API_KEY; $channel= Channel; $send = Text;

$ids = ['ProxyMTProto','TelMTProto','MyPoroxy','JackalProxy','Cheetah_MTP'];
$id = $ids[array_rand($ids)];
$proxy = json_decode(file_get_contents("https://poty.fun/apis/proxy.php?channel=$id"), true)['results'];
$prx = $proxy[0]['link'];


bot('sendMessage',['chat_id'=>$channel,'text'=>"$send\n$prx"]);

