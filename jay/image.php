<?php
/**
 * Copyright 2017 GoneTone
 *
 * Line Bot
 * 範例 Example Bot (Image)
 *
 * 此範例 GitHub 專案：https://github.com/GoneTone/line-example-bot-php
 * 官方文檔：https://developers.line.biz/en/reference/messaging-api#image-message
 */
/**
陣列輸出 Json
==============================
{
    "type": "image",
    "originalContentUrl": "https://api.reh.tw/line/bot/example/assets/images/example.jpg",
    "previewImageUrl": "https://api.reh.tw/line/bot/example/assets/images/example.jpg"
}
==============================
*/
if (strtolower($message['text']) == "image" || $message['text'] == "圖片") {
    $client->replyMessage(array(
        'replyToken' => $event['replyToken'],
        'messages' => array(
            array(
                'type' => 'image', // 訊息類型 (圖片)
                'originalContentUrl' => 'https://api.reh.tw/line/bot/example/assets/images/example.jpg', // 回復圖片
                'previewImageUrl' => 'https://api.reh.tw/line/bot/example/assets/images/example.jpg' // 回復的預覽圖片
            )
        )
    ));
}

if (strtolower($message['text']) == "三個重要日期") {
    $client->replyMessage(array(
        'replyToken' => $event['replyToken'],
        'messages' => array(
            array(
                'type' => 'image', // 訊息類型 (圖片)
                'originalContentUrl' => 'https://masterufo.000webhostapp.com/%E4%B8%89%E5%80%8B%E9%87%8D%E8%A6%81%E7%9A%84%E6%97%A5%E6%9C%9F.jpg', // 回復圖片
                'previewImageUrl' => 'https://masterufo.000webhostapp.com/%E4%B8%89%E5%80%8B%E9%87%8D%E8%A6%81%E7%9A%84%E6%97%A5%E6%9C%9F.jpg' // 回復的預覽圖片
            )
        )
    ));
}
