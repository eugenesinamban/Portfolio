<?php 

require("bootstrap.php");
$contents = [
    //
    [
        'title' => '元気モリモリご飯パワー',
        'details' => 'My very first website, written in Japanese, created to use during self introductions',
        'link' => '/genki/top.html',
        'image' => 'images/genki.png'
    ],
    [
        'title' => "Yogi's Exchange",
        'details' => 'Website to check foreign exchange rates',
        'link' => 'http://yogiexchange.rf.gd/',
        'image' => 'images/Exchange.png'
    ], 
    [
        'title' => 'Organizer',
        'details' => 'Organizer created for foreigners living in Japan, especially students like me,
                        who need to organizer their Part-time job hours and keep track of salary which is
                        checked by the Immigration Office of Japan',
        'link' => 'http://organizer.epizy.com',
        'image' => 'images/Organizer.png'
    ], 
    [
        'title' => 'Tokyo Readers Club',
        'details' => 'Club for people who love to read, English or Japanese.',
        'link' => '/tokyo-readers-club/index.php',
        'image' => 'images/ReadersClub.png'
    ] 
    
];

$viewVars = [
    // 
    'contents' => $contents
];
echo $twig->render("portfolio.twig", $viewVars);
?>