<?php
include('simple_html_dom.php');

//$html = file_get_html('https://www.copart.com/ru/lot/19085866');
try {
  $html = file_get_html('modules/parse/cars/2014 BMW X5 XDRIVE3 for Sale _ NJ - TRENTON - Vehicle Auctions at Copart USA.html');
} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}

//find h1 headers from a webpage
$headlines = array();
foreach($html->find('h1') as $header) {
    $headlines[] = $header->plaintext;
}
//images
foreach($html->find('.viewAllPhotosRelative img') as $image) {
    $image_galleria[] = $image->src;
}
//details
foreach($html->find('div[class="details"] span') as $item) {
    $bid[] = $item->plaintext;
}
$html->clear();
unset($html);




//$html = file_get_html('https://www.copart.com/ru/lot/19085866');
try {
    $html2 = file_get_html('modules/parse/cars/2016 BMW X5 XDRIVE3 for Sale _ PA - PHILADELPHIA - Vehicle Auctions at Copart USA.html');
} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}
//find h1 headers from a webpage
$headlines2 = array();
foreach($html2->find('h1') as $header) {
    $headlines2[] = $header->plaintext;
}
//images
foreach($html2->find('.viewAllPhotosRelative img') as $image) {
    $image_galleria2[] = $image->src;
}
//details
foreach($html2->find('div[class="details"] span') as $item) {
    $bid2[] = $item->plaintext;
}
$html2->clear();
unset($html2);




//$html = file_get_html('https://www.copart.com/ru/lot/19085866');
try {
    $html3 = file_get_html('modules/parse/cars/2013 HONDA CR-V EX-L for Sale _ IL - CHICAGO SOUTH - Vehicle Auctions at Copart USA.html');
} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}
//find h1 headers from a webpage
$headlines3 = array();
foreach($html3->find('h1') as $header) {
    $headlines3[] = $header->plaintext;
}
//images
foreach($html3->find('.viewAllPhotosRelative img') as $image) {
    $image_galleria3[] = $image->src;
}
//details
foreach($html3->find('div[class="details"] span') as $item) {
    $bid3[] = $item->plaintext;
}
$html3->clear();
unset($html3);

// Find all links
/*foreach($html->find('span') as $element)
   echo $element->href . '<br>';*/

//echo file_get_html('https://www.copart.com/ru/lot/19085866')->plaintext;

