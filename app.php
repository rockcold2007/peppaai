<?php
/**
 * Copyright 2017 GoneTone
 *
 * Line Bot
 * 範例 Example Bot 執行主文件
 *
 * 此範例 GitHub 專案：https://github.com/GoneTone/line-example-bot-php
 * 官方文檔：https://developers.line.biz/en/reference/messaging-api/
 */
error_reporting(0); // 不顯示錯誤 (Debug 時請註解掉)
date_default_timezone_set("Asia/Taipei"); // 設定時區為台北時區

require_once('LINEBotTiny.php');

if (file_exists(__DIR__ . '/config.ini')) {
    $config = parse_ini_file("config.ini", true); // 解析配置檔
    if ($config['Channel']['Token'] == Null || $config['Channel']['Secret'] == Null) {
        error_log("config.ini 配置檔未設定完全！", 0); // 輸出錯誤
    } else {
        $channelAccessToken = $config['Channel']['Token'];
        $channelSecret = $config['Channel']['Secret'];
    }
} else {
    $configFile = fopen("config.ini", "w") or die("Unable to open file!");
    $configFileContent = '; Copyright 2019 GoneTone
;
; Line Bot
; 範例 Example Bot 配置文件
;
; 此範例 GitHub 專案：https://github.com/GoneTone/line-example-bot-php
; 官方文檔：https://developers.line.biz/en/reference/messaging-api/

[Channel]
; 請在雙引號內輸入您的 Line Bot "Channel access token"
Token = "YhbnyV4jtf879O7PHYOX4Fr00d285nHnBo5mUiT0akMKovRQouZYYu94+ZyYXxm2LjICBzm1fpBQpKv380Y1ICtu0O4Ph/nA85Qz2S9Yv0wTbjK69rXpwwyGnZiwwo7XvtPJbKeeUGXKKtLwrxYtAQdB04t89/1O/w1cDnyilFU="

; 請在雙引號內輸入您的 Line Bot "Channel secret"
Secret = "674225e541c6d3a2cc197f5f4ac9588a"
';
    fwrite($configFile, $configFileContent); // 建立文件並寫入
    fclose($configFile); // 關閉文件
    error_log("config.ini 配置檔建立成功，請編輯檔案填入資料！", 0); // 輸出錯誤
}

$client = new LINEBotTiny($channelAccessToken, $channelSecret);
foreach ($client->parseEvents() as $event) {
    switch ($event['type']) {
        case 'message':
            $message = $event['message'];
            switch ($message['type']) {
                case 'text':
                    #require_once('includes/text.php'); // Type: Text
                    require_once('includes/image.php'); // Type: Image
                    #require_once('includes/video.php'); // Type: Video
                    #require_once('includes/audio.php'); // Type: Audio
                    #require_once('includes/location.php'); // Type: Location
                    #require_once('includes/sticker.php'); // Type: Sticker
                    #require_once('includes/imagemap.php'); // Type: Imagemap
                    #require_once('includes/template.php'); // Type: Template
					require_once('jay/eva.php');
					require_once('jay/newufo.php');
					require_once('jay/news.php');
					require_once('jay/map.php');
					require_once('jay/gmtss.php');
                    break;
                default:
                    //error_log("Unsupporeted message type: " . $message['type']);
                    break;
            }
            break;
        case 'postback':
            //require_once('postback.php'); // postback
            break;
        case 'follow': // 加為好友觸發
            $client->replyMessage(array(
                'replyToken' => $event['replyToken'],
                'messages' => array(
                    array(
                        'type' => 'text',
                        'text' => '您好，我是沛沛一家專屬Bot ^_<
						輸入「menu」可獲取培訓資源'
                    )
                )
            ));
            break;
        case 'join': // 加入群組觸發
            $client->replyMessage(array(
                'replyToken' => $event['replyToken'],
                'messages' => array(
                    array(
                        'type' => 'text',
                        'text' => '大家好，這是沛沛一家專屬Bot ^_<'
                    )
                )
            ));
            break;
        default:
            //error_log("Unsupporeted event type: " . $event['type']);
            break;
			}
};
?>
