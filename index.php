<?php

session_start();

require("bootstrap.php");
require("classes/MailTemplate.php");

$error = $_SESSION['error'] ?? [];
$alert = '';
$language = isset($_GET['language']) && 'japanese' === $_GET['language'] ? 'japanese' : 'english';
$portfolio = [
    //
    [
        'title' => 'Self Introduction Website',
        'details' => [
            //
            'english' => 'My very first website, written in Japanese, created to use during self introductions',
            'japanese' => '初めてのウェブサイト。自己紹介の時に役に立ちそうなウェブサイトを作ろうかと思った時に作ったウェブサイト。'
        ],
        'link' => '/genki/index.html',
        'image' => 'images/Genki.png'
    ],
    [
        'title' => "Yogi's Exchange",
        'details' => [
            'english' => 'Website to check foreign exchange rates',
            'japanese' => '為替レートを見ることができるウェブサイト。'
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
            'japanese' => '読書が好きな方々のサークルのウェブサイト。'
        ],
        'link' => '/tokyo-readers-club/index.php',
        'image' => 'images/ReadersClub.png'
    ],
    [
        'title' => 'Tech C Overflow',
        'details' => [
            'english' => 'Stack Overflow-like website which is made for Tech C students so that they may ask questions in a safe environment, 
            where fellow students can answer and build camaraderie by working on problems together.',
            'japanese' => 'Stack Overflowの模写ウェブサイト。学生同士が同じ問題に悩まされているため、質問をするなら友達や、先輩方に聞いた方がいいと思い、
            このウェブサイトを作りました。学生の仲もよくなるし、同じ問題に取り組めばより深い友情の始まりを望んでます。'
        ],
        'link' => 'https://tech-c-overflow.herokuapp.com',
        'image' => 'images/tflow.png'
    ],
    [
        'title' => 'Calculator',
        'details' => [
            'english' => 'A calculator made purely with React library. I made this application as a stepping stone to creating the mobile
            application for Tech C Overflow, my other website, which I plan to create with React Native.',
            'japanese' => 'React.jsで作られた電卓。Tech C Overflowの連携アプリを作るために練習のアプリを作りました'
         ],
        'link' => 'https://radiant-harbor-05944.herokuapp.com/',
        'image' => 'images/react-calculator.png'
    ],
    [
        'title' => 'Corona Data Search',
        'details' => [
            'english' => 'A test website using React, designed to provide updated data regarding Covid-19 cases provided by an api.',
            'japanese' => 'React.jsで作られたコロナの感染者数などの情報を提供するウェブサイトです。ReactでのAPIのデータ取得方法の練習するために作りました'
         ],
        'link' => 'https://boiling-sierra-92918.herokuapp.com/',
        'image' => 'images/corona-number-search.png'
    ]
];

$about = [

    [
        'english' => 'My name is Eugene Sinamban, and I am currently a 2nd year student at Tech C. taking up
        Programming.',
        'japanese' => '初めまして、東京デザインテクノロジーセンター専門学校で在学中、二年生プログラマー専攻のシナンバン・ユージンです。'
    ],
    [
        'english' => "What you'll see on this website is a collection of my works so far, and links to live websites.",
        'japanese' => 'ここにあるのは今まで制作したウェブサイトと、それのリンクです。'
    ],
    [
        'english' => 'Creates websites mostly on PHP. Currently learning how to write in JavaScript and Python.
        Still learning how to write CSS.',
        'japanese' => 'ほとんどのウェブサイトはPHPで開発してます。JavaScriptとPythonとCSSは勉強中です。'
    ]

];

if ("POST" === $_SERVER['REQUEST_METHOD']) {

    require_once "mail.php";

}

$pages = [

    'portfolio',
    'about',
    'contact'

];

$viewVars = [
    //
    'contents' => [

        'portfolio' => $portfolio,
        'about' => $about

    ],
    'language' => $language,
    'pages' => $pages,
    'alert' => $alert,
    'error' => $error
];

echo $twig->render("index.twig", $viewVars);
$_SESSION['error'] = [];
?>