<?php

include_once __DIR__ .'/lib/curl.php';
include_once __DIR__ .'/lib/simple_html_dom.php';

$html = file_get_contents('https://ntschool.ru/kursyi');

