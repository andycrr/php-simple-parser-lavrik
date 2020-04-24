<?php

include_once __DIR__ .'/lib/curl_query.php';
include_once __DIR__ .'/lib/curl.php';
include_once __DIR__ .'/lib/simple_html_dom.php';

$html = curl_get('https://ntschool.ru/kursyi');
$dom = str_get_html($html);

$courses = $dom->find('.courses-list--item-body--title');
//var_dump($courses);

foreach ($courses as $course) {
//    var_dump(3);
    echo $course->plaintext . '<br>';
}

