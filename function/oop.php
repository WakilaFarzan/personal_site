
<?php

    class User{

       public $name=null;

        function  __construct($name){
            $this->name=$name;
        }
    }

$arif=new User('Arif');
$arifa=new User('Arifa');

var_dump($arif);


//    $arif=new User();
//    $arif->name='Arif';
//    echo $arif->name;
//    var_dump($arif);
//
//    $arifa=new User();
//    var_dump($arifa);


