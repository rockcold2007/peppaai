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
if (strtolower($message['text']) == "buttons template" || $message['text'] == "新人") {
    $client->replyMessage(array(
        'replyToken' => $event['replyToken'],
        'messages' => array(
            array(
                'type' => 'template', // 訊息類型 (模板)
                'altText' => 'Example buttons template', // 替代文字
                'template' => array(
                    'type' => 'buttons', // 類型 (按鈕)
                    #'thumbnailImageUrl' => '', // 圖片網址 <不一定需要>
                    'title' => '新人培訓資料', // 標題 <不一定需要>
                    'text' => '培訓相關資料', // 文字
                    'actions' => array(
                        array(
                            'type' => 'uri', // 類型 (回傳)
                            'label' => '履歷表', // 標籤 1
                            'uri' => 'https://drive.google.com/open?id=18wXgpoc5LSqOhicrZ8wXqgoCGzyyf-F5' // 資料
                        ),
                        array(
                            'type' => 'message', // 類型 (訊息)
                            'label' => '開店紀錄', // 標籤 2
                            'text' => 'https://drive.google.com/open?id=1TBjqY7lrrpJ-DRfqfc7258O1B04mKQJA' // 用戶發送文字
                        ),
		                array(
                            'type' => 'uri', // 類型 (連結)
                            'label' => '300名單', // 標籤 3
                            'uri' => 'https://drive.google.com/open?id=13-CG_g0kEPpQLpmEwgOi1ASyF1InB2fV' // 連結網址
                        )
                    )
                )
            )
        )
    ));
}
/**
確認模板陣列輸出 Json