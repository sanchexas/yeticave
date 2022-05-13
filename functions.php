<?php
$is_auth = rand(0, 1);

function priceFormat($price){
    $result = ceil($price);
    if ($price < 1000){
        return $result."<b class='rub'>р</b>";
    }
    else{
        $format = number_format($result, 0, ',', ' ');
        return  $format."<b class='rub'>р</b>";
    }
}
function deadline(){
    $startTime = new DateTime('now');
    $endTime = new DateTime('24:00'); // "24:00" означает полночь (00:00)
    $willDieIn = $startTime->diff($endTime); // diff - вычисляет промежуток времени
    return $willDieIn -> format('%H:%I:%S');
}
function include_template($name, $data) {
    $name = 'templates/' . $name;
    $result = '';
    if (!file_exists($name)) {
        return $result;
    }
    ob_start();
    extract($data);
    require($name);
    $result = ob_get_clean();
    return $result;
}
$categoryArray = [
    ["category"=>"Доски и лыжи","Image"=>"boards"],
    ["category"=>"Крепления","Image"=>"attachment"],
    ["category"=>"Ботинки","Image"=>"boots"],
    ["category"=>"Одежда","Image"=>"clothing"],
    ["category"=>"Инструменты","Image"=>"tools"],
    ["category"=>"Разное","Image"=>"other"],
];
$catAssociativeArray = [
    [
        "name" => "2014 Rossignol District Snowboard",
        "category" => $catItemArray[0],
        "price" => "10999",
        "imageUrl" => "img/lot-1.jpg"
    ],
    [
        "name" => "DC Ply Mens 2016/2017 Snowboard",
        "category" => $catItemArray[0],
        "price" => "159999",
        "imageUrl" => "img/lot-2.jpg"
    ],
    [
        "name" => "Крепления Union Contact Pro 2015 года размер L/XL",
        "category" => $catItemArray[1],
        "price" => "8000",
        "imageUrl" => "img/lot-3.jpg"
    ],
    [
        "name" => "Ботинки для сноуборда DC Mutiny Charocal",
        "category" => $catItemArray[2],
        "price" => "10999",
        "imageUrl" => "img/lot-4.jpg"
    ],
    [
        "name" => "Куртка для сноуборда DC Mutiny Charocal",
        "category" => $catItemArray[3],
        "price" => "7500",
        "imageUrl" => "img/lot-5.jpg"
    ],
    [
        "name" => "Маска Oakley Canopy",
        "category" => $catItemArray[5],
        "price" => "5400",
        "imageUrl" => "img/lot-6.jpg"
    ]
];
//$catDoubleArray = array(
//    array("2014 Rossignol District Snowboard", "Доски и лыжи", 10999, "img/lot-1.jpg"),
//    array("DC Ply Mens 2016/2017 Snowboard", "Доски и лыжи", 159999, "img/lot-2.jpg"),
//    array("Крепления Union Contact Pro 2015 года размер L/XL", "Крепления", 8000, "img/lot-3.jpg"),
//    array("Ботинки для сноуборда DC Mutiny Charocal", "Ботинки", 10999, "img/lot-4.jpg"),
//    array("Куртка для сноуборда DC Mutiny Charocal", "Одежда", 7500, "img/lot-5.jpg"),
//    array("Маска Oakley Canopy", "Разное", 5400, "img/lot-6.jpg")
//);
$user_name = 'ACEDIA'; // укажите здесь ваше имя
$user_image = 'img/user.jpg'; // укажите здесь ваше имя
?>
