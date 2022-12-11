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
*/
if (strtolower($message['text']) == "!gmtss") {
    $client->replyMessage(array(
        'replyToken' => $event['replyToken'],
        'messages' => array(
            array(
                'type' => 'template', // 訊息類型 (模板)
                'altText' => 'Example buttons template', // 替代文字
                'template' => array(
                    'type' => 'carousel', // 類型 (輪播)
                    'columns' => array(
                        array(
                            'thumbnailImageUrl' => 'https://api.reh.tw/line/bot/example/assets/images/example.jpg', // 圖片網址 <不一定需要>
                            #'title' => '後台課程', // 標題 1 <不一定需要>
                            'text' => 'NUOT課程查詢　', // 文字 1
                            'actions' => array(
                                array(
                                    'type' => 'uri', // 類型
                                    'label' => '北區', // 標籤 1
                                    'uri' => 'https://tw.unfranchise.com/index.cfm?action=meetings.unfMeetingSearch&minSearchDate=0&latitude=&longitude=&userLatitude=0.000000&userLongitude=0.000000&locationPostalCode=&renderType=list&mode=search&curCalDate=&dateFilter=12&startDate=&endDate=&meetingID=&selSpeakerType=&speakerType=&selSpeakerID=&meetingTypeID=17&state=N*TWN&postalCode=&mileRadius=&search=%E4%BD%BF%E7%94%A8%E7%AF%A9%E9%81%B8%E5%99%A8' // 連結
                                ),
                                array(
                                    'type' => 'uri', // 類型 
                                    'label' => '中區', // 標籤 2
                                    'uri' => 'https://tw.unfranchise.com/index.cfm?action=meetings.unfMeetingSearch&minSearchDate=0&latitude=&longitude=&userLatitude=0.000000&userLongitude=0.000000&locationPostalCode=&renderType=list&mode=search&curCalDate=&dateFilter=12&startDate=&endDate=&meetingID=&selSpeakerType=&speakerType=&selSpeakerID=&meetingTypeID=17&state=C*TWN&postalCode=&mileRadius=&search=%E4%BD%BF%E7%94%A8%E7%AF%A9%E9%81%B8%E5%99%A8' // 連結
                                ),
                                array(
                                    'type' => 'uri', // 類型 
                                    'label' => '南區', // 標籤 3
                                    'uri' => 'https://tw.unfranchise.com/index.cfm?action=meetings.unfMeetingSearch&minSearchDate=0&latitude=&longitude=&userLatitude=0.000000&userLongitude=0.000000&locationPostalCode=&renderType=list&mode=search&curCalDate=&dateFilter=12&startDate=&endDate=&meetingID=&selSpeakerType=&speakerType=&selSpeakerID=&meetingTypeID=17&state=S*TWN&postalCode=&mileRadius=&search=%E4%BD%BF%E7%94%A8%E7%AF%A9%E9%81%B8%E5%99%A8' // 連結
                                )
                            )
                        ),
						array(
                            'thumbnailImageUrl' => 'https://api.reh.tw/line/bot/example/assets/images/example.jpg', // 圖片網址 <不一定需要>
                            #'title' => '後台課程', // 標題 1 <不一定需要>
                            'text' => 'UBP課程查詢　', // 文字 1
                            'actions' => array(
                                array(
                                    'type' => 'uri', // 類型
                                    'label' => '北區', // 標籤 1
                                    'uri' => 'https://tw.unfranchise.com/index.cfm?action=meetings.unfMeetingSearch&minSearchDate=0&latitude=&longitude=&userLatitude=0.000000&userLongitude=0.000000&locationPostalCode=&renderType=list&mode=search&curCalDate=&dateFilter=12&startDate=&endDate=&meetingID=&selSpeakerType=&speakerType=&selSpeakerID=&meetingTypeID=6&state=N*TWN&postalCode=&mileRadius=&search=%E4%BD%BF%E7%94%A8%E7%AF%A9%E9%81%B8%E5%99%A8' // 連結
                                ),
                                array(
                                    'type' => 'uri', // 類型 
                                    'label' => '中區', // 標籤 2
                                    'uri' => 'https://tw.unfranchise.com/index.cfm?action=meetings.unfMeetingSearch&minSearchDate=0&latitude=&longitude=&userLatitude=0.000000&userLongitude=0.000000&locationPostalCode=&renderType=list&mode=search&curCalDate=&dateFilter=12&startDate=&endDate=&meetingID=&selSpeakerType=&speakerType=&selSpeakerID=&meetingTypeID=6&state=C*TWN&postalCode=&mileRadius=&search=%E4%BD%BF%E7%94%A8%E7%AF%A9%E9%81%B8%E5%99%A8' // 連結
                                ),
                                array(
                                    'type' => 'uri', // 類型 
                                    'label' => '南區', // 標籤 3
                                    'uri' => 'https://tw.unfranchise.com/index.cfm?action=meetings.unfMeetingSearch&minSearchDate=0&latitude=&longitude=&userLatitude=0.000000&userLongitude=0.000000&locationPostalCode=&renderType=list&mode=search&curCalDate=&dateFilter=12&startDate=&endDate=&meetingID=&selSpeakerType=&speakerType=&selSpeakerID=&meetingTypeID=6&state=S*TWN&postalCode=&mileRadius=&search=%E4%BD%BF%E7%94%A8%E7%AF%A9%E9%81%B8%E5%99%A88' // 連結
                                )
                            )
                        ),
                        array(
                            'thumbnailImageUrl' => 'https://api.reh.tw/line/bot/example/assets/images/example.jpg', // 圖片網址 <不一定需要>
                            #'title' => 'Example Menu 2', // 標題 2 <不一定需要>
                            'text' => 'B5課程查詢', // 文字 2
                            'actions' => array(
                                array(
                                    'type' => 'uri', // 類型
                                    'label' => '北區', // 標籤 1
                                    'uri' => 'https://tw.unfranchise.com/index.cfm?action=meetings.unfMeetingSearch&minSearchDate=0&latitude=&longitude=&userLatitude=0.000000&userLongitude=0.000000&locationPostalCode=&renderType=list&mode=search&curCalDate=&dateFilter=12&startDate=&endDate=&meetingID=&selSpeakerType=&speakerType=&selSpeakerID=&meetingTypeID=7&state=N*TWN&postalCode=&mileRadius=&search=%E4%BD%BF%E7%94%A8%E7%AF%A9%E9%81%B8%E5%99%A8' // 連結
                                ),
                                array(
                                    'type' => 'uri', // 類型 
                                    'label' => '中區', // 標籤 2
                                    'uri' => 'https://tw.unfranchise.com/index.cfm?action=meetings.unfMeetingSearch&minSearchDate=0&latitude=&longitude=&userLatitude=0.000000&userLongitude=0.000000&locationPostalCode=&renderType=list&mode=search&curCalDate=&dateFilter=12&startDate=&endDate=&meetingID=&selSpeakerType=&speakerType=&selSpeakerID=&meetingTypeID=7&state=N*TWN&postalCode=&mileRadius=&search=%E4%BD%BF%E7%94%A8%E7%AF%A9%E9%81%B8%E5%99%A8' // 連結
                                ),
                                array(
                                    'type' => 'uri', // 類型 
                                    'label' => '南區', // 標籤 3
                                    'uri' => 'https://tw.unfranchise.com/index.cfm?action=meetings.unfMeetingSearch&minSearchDate=0&latitude=&longitude=&userLatitude=0.000000&userLongitude=0.000000&locationPostalCode=&renderType=list&mode=search&curCalDate=&dateFilter=12&startDate=&endDate=&meetingID=&selSpeakerType=&speakerType=&selSpeakerID=&meetingTypeID=7&state=N*TWN&postalCode=&mileRadius=&search=%E4%BD%BF%E7%94%A8%E7%AF%A9%E9%81%B8%E5%99%A8' // 連結
                                )
                            )
                        )
                    )
                )
            )
        )
    ));
}

/**