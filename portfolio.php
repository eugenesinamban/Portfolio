<?php 

require("bootstrap.php");
$language = isset($_GET['language']) && 'japanese' === $_GET['language'] ? 'japanese' : 'english';
$contents = [
    //
    [
        'title' => 'Self Introduction Website',
        'details' => [
            // 
            'english' => 'My very first website, written in Japanese, created to use during self introductions',
            'japanese' => '初めてのウェブサイト。自己紹介の時に役に立てそうなウェブサイトを作ろうかと思った時に作ったウェブサイト。'
        ],
        'link' => '/genki/top.html',
        'image' => 'images/genki.png'
    ],
    [
        'title' => "Yogi's Exchange",
        'details' => [
            'english' => 'Website to check foreign exchange rates',
            'japanese' => '為替レートを見ることできるウェブサイト。'
        ],
        'link' => 'http://yogiexchange.rf.gd/',
        'image' => 'images/Exchange.png'
    ], 
    [
        'title' => 'Organizer',
        'details' => [
            'english' => 'Organizer created for foreigners living in Japan, especially students like me,
                        who need to organizer their Part-time job hours and keep track of salary which is
                        checked by the Immigration Office of Japan',
            'japanese' => '外国人向けのバイトのシフトを管理するためのウェブサイト。留学生や、他の就労時間が制限されてる方々の為に、バイト先の住所、連絡の登録ができる。バイト時間、給料などの計算も可能。'
        ],
        'link' => 'http://organizer.epizy.com',
        'image' => 'images/Organizer.png'
    ], 
    [
        'title' => 'Tokyo Readers Club',
        'details' => [
            'english' => 'Club for people who love to read, English or Japanese.',
            'japanese' => '読書が好き方々のサークルのウェブサイト。'
        ],
        'link' => '/tokyo-readers-club/index.php',
        'image' => 'images/ReadersClub.png'
    ] 
    
];

$viewVars = [
    // 
    'contents' => $contents,
    'language' => $language
];
echo $twig->render("portfolio.twig", $viewVars);
?>