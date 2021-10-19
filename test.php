<?php

use PHPHtmlParser\Dom;
use PHPHtmlParser\Dom\HtmlNode;

require_once "./vendor/autoload.php";



// works

$testHtml = file_get_contents("./testPass.html");

$dom = new Dom();
$dom->loadStr($testHtml);

print $dom->find("article.msg")[0]->text();


// fails

$testHtml = file_get_contents("./testFails.html");

$dom = new Dom();
$dom->loadStr($testHtml);

print $dom->find("article.msg")[0]->text();
