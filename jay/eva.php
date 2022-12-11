<?php
/**
 * Copyright 2017 GoneTone
 *
 * Line Bot
 * 範例 Example Bot (Template)
 *
 * 此範例 GitHub 專案：https://github.com/GoneTone/line-example-bot-php
 * 官方文檔：https://developers.line.biz/en/reference/messaging-api#template-messages
 */
/**
按鈕模板陣列輸出 Json
==============================
{
    "type": "template",
    "altText": "Example buttons template",
    "template": {
        "type": "buttons",
        "thumbnailImageUrl": "https://api.reh.tw/line/bot/example/assets/images/example.jpg",
        "title": "Example Menu",
        "text": "Please select",
        "actions": [
            {
                "type": "postback",
                "label": "Postback example",
                "data": "action=buy&itemid=123"
            },
            {
                "type": "message",
                "label": "Message example",
                "text": "Message example"
            },
            {
                "type": "uri",
                "label": "Uri example",
                "uri": "https://github.com/GoneTone/line-example-bot-php"
            }
        ]
    }
}
==============================
*/
if (strtolower($message['text']) == "buttons template" || $message['text'] == "丁沛然老師") {
    $client->replyMessage(array(
        'replyToken' => $event['replyToken'],
        'messages' => array(
            array(
                'type' => 'template', // 訊息類型 (模板)
                'altText' => 'Example buttons template', // 替代文字
                'template' => array(
                    'type' => 'buttons', // 類型 (按鈕)
                    'thumbnailImageUrl' => 'https://masterufo.000webhostapp.com/eva.jpg', // 圖片網址 <不一定需要>
                    #'title' => '丁沛然老師', // 標題 <不一定需要>
                    'text' => '丁沛然老師', // 文字
                    'actions' => array(
                        array(
                            'type' => 'message', // 類型 (訊息)
                            'label' => '丁沛然老師背景', // 標籤 2
                            'text' => '丁沛然老師背景' // 用戶發送文字
                        ),
		                array(
                            'type' => 'uri', // 類型 (連結)
                            'label' => '課程報名', // 標籤 3
                            'uri' => 'https://forms.gle/jawjwRL7VfidjSTo6' // 連結網址
                        )
                    )
                )
            )
        )
    ));
}

if (strtolower($message['text']) == "image" || $message['text'] == "丁沛然老師背景") {
    $client->replyMessage(array(
        'replyToken' => $event['replyToken'],
        'messages' => array(
            array(
                'type' => 'image', // 訊息類型 (圖片)
                'originalContentUrl' => 'https://masterufo.000webhostapp.com/%E6%B2%9B%E6%B2%9B%E7%B0%A1%E4%BB%8B.jpg', // 回復圖片
                'previewImageUrl' => 'https://masterufo.000webhostapp.com/%E6%B2%9B%E6%B2%9B%E7%B0%A1%E4%BB%8B.jpg' // 回復的預覽圖片
            )
        )
    ));
}
/**
確認模板陣列輸出 Json