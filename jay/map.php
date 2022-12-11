<?php
/**
 * Copyright 2017 GoneTone
 *
 * Line Bot
 * 範例 Example Bot (Location)
 *
 * 此範例 GitHub 專案：https://github.com/GoneTone/line-example-bot-php
 * 官方文檔：https://developers.line.biz/en/reference/messaging-api#location-message
 */
/**
陣列輸出 Json
==============================
{
    "type": "location",
    "title": "Example location",
    "address": "台灣高雄市三民區大昌一路 98 號 (立志中學)",
    "latitude": 22.653742,
    "longitude": 120.32652400000006
}
==============================
*/
if (strtolower($message['text']) == "天祥教室") {
    $client->replyMessage(array(
        'replyToken' => $event['replyToken'],
        'messages' => array(
            array(
                'type' => 'location', // 訊息類型 (位置)
                'title' => '台北天祥教室', // 回復標題
                'address' => '台北市中山區天祥路3號4樓', // 回復地址
                'latitude' => 25.060722, // 地址緯度
                'longitude' => 121.521139 // 地址經度
            )
        )
    ));
}

if (strtolower($message['text']) == "台北研習中心") {
    $client->replyMessage(array(
        'replyToken' => $event['replyToken'],
        'messages' => array(
            array(
                'type' => 'location', // 訊息類型 (位置)
                'title' => '美安台北研習中心', // 回復標題
                'address' => '台北市松山區復興北路99號B1', // 回復地址
                'latitude' => 25.052966, // 地址緯度
                'longitude' => 121.544282 // 地址經度
            )
        )
    ));
}
?>