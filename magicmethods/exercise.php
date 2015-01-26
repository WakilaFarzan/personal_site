<?php

function __autoload($class_name){

    include_once('classes/'.$class_name.'.php');
}


//include_once('classes/Bkiict.php');
//include_once('classes/Student.php');
//include_once('classes/Course.php');

$bkiict=new Bkiict();
echo $bkiict->fullName;

$student= new Student();

$course= new Course();