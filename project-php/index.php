<?php

declare(strict_types=1);

ini_set('display_errors', '1');
error_reporting(E_ALL);

// class Animal
// {
//     public string $name;

//     public function sayMyName(): void
//     {
//         print $this->name;
//     }
// }

// $maymun = new Animal;
// $maymun->name = 'Shimpanze';
// $maymun->sayMyName();
////////////////////////////////////////////
// $foo = [];
// $foo[0] = 'Bakhtiyor';
// $foo[1] = 'Shaxboz';
// $foo[2] = 'Abbos';

// print $foo[0];
/////////////////////////////////////////////
// $foo = [];
// $foo[] = 'Bakhtiyor';
// $foo[] = 'Shaxboz';
// $foo[] = 'Abbos';

// print $foo[0];
////////////////////////////////////////////////
// $foo = ['Shaxboz', 'Bakhtiyor', 'Bunyod'];

// print $foo[2];
///////////////////////////////////////////////////
// $foo = ['Shaxboz', 77 => 'Bakhtiyor', 'Bunyod'];

// print $foo[1];
/////////////////////////////////////////////////
// $foo = ['Shaxboz', 77 => 'Bakhtiyor', 'Bunyod'];

// print_r($foo);
///////////////////////////////////////////////////////////////
// $foo = ['name' => 'Bakhtiyor', 'fam' => 'Inomov'];

// print_r($foo);

// print $foo['fam'];
///////////////////////////////////////////////////////////////
// $foo = ['name' => 'Bakhtiyor', 'fam' => 'Inomov', 'age' => 26];

// var_dump($foo);
////////////////////////////////////////////////////
// $foo = [74 => 'Bakhtiyor', 0 => 'Shuhrat', 1178 => 'Aziz'];

// var_dump($foo);
//////////////////////////////////////////////////
// $result = isset($foo);

// var_dump($result);
//////////////////////////////////////////////////////////
// $foo = ['name' => 'Bakhtiyor', 'fam' => 'Inomov'];
// $result = isset($foo['name']);

// var_dump($result);
//////////////////////////////////////////////////////////////////
// $foo = ['name' => 'Bakhtiyor', 'fam' => 'Inomov'];
// $result = isset($foo['name'], $foo['fam']);

// var_dump($result);
///////////////////////////////////////////////////////////////////////
// $foo = ['name' => 'Bakhtiyor', 'fam' => 'Inomov'];
// $result = isset($foo['name'], $foo['fam'], $foo['age']);

// var_dump($result);
////////////////////////////////////////////////////////
// $numbers = range(11, 25);

// print_r($numbers);
////////////////////////////////////////////////////////////////////
// $numbers = range(11, 25, 3);

// print_r($numbers);
////////////////////////////////////////////
// $numbers = [1,2,3,4,5];

// echo array_sum($numbers);
//////////////////////////////////////////////////
// $numbers = [1,2,3,4,5];

// echo array_product($numbers);
///////////////////////////////////////////////////
// $names = ['Shaxboz', 'Mastura', 'Zarnigor'];
// print_r($names);

// array_push($names, 'Bakhtiyor');
// print_r($names);
////////////////////////////////////////////////////
// $names = ['Shaxboz', 'Mastura', 'Zarnigor'];

// echo array_search('Zarnigor', $names);
///////////////////////////////////////////////////////
// $names = ['Shaxboz', 'Mastura', 'Zarnigor', 'Bakhtiyor', 'Murod'];

// sort($names);

// print_r($names);
///////////////////////////////////////////////////////////////////
// $names = ['Shaxboz', 'Mastura', 'Zarnigor', 'Bakhtiyor', 'Murod'];

// rsort($names);

// print_r($names);
//////////////////////////////////////////////////////////////
$names = ['Shaxboz', 'Mastura', 'Zarnigor', 'Bakhtiyor', 'Murod'];

shuffle($names);

print_r($names);