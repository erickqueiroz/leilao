<?php
$numbers = range(1, 1000);
shuffle($numbers);
$begin = 1;
foreach ($numbers as $number) {
    $txt = '';
    $json = fopen('./json/'.$number.".json", "w");
    $txt = '{"name":"#'.$number.'", "description":"#'.$number.'","external_link":"https://livrariart.com.br/","image":"https:\/\/ipfs.io\/ipfs\/","attributes":[{"display_type":"number","trait_type":"Generation","value":'.$number.'},{"trait_type":"Rarity","value":"Book"}]}';
    $begin++;
    fwrite($json, $txt);
    fclose($json);
}



