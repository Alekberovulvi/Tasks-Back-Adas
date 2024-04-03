<?php

// Task 1
//  function countPositivesSumNegatives($input) {
//     if(empty($input)) {
//         return [];
//     }


//     $positives =  array_filter($input, function($a) {
//         if($a >= 1) {
//             return $a;
//         }
//     });
//     $countOfPositives = count($positives);



//     $negatives =  array_filter($input, function($a) {
//         if($a < 0) {
//             return $a;
//         }
//     });

//     $sumOfNegatives = array_sum($negatives);

//     return [$countOfPositives, $sumOfNegatives];
//  }

//  print_r(countPositivesSumNegatives( []));

//Task 5

// function sum(array $a) : float{
//     return array_sum($a);
// }

//Task 6

// $str = 'HeLLO I AM DONALD';

// function is_uppercase($str) {
//   return $str == strtoupper($str);
// }

// echo is_uppercase($str);


//Task 8

// function repeatStr($n, $str)
// {
//     return str_repeat($str, $n);
// }

// $result = repeatStr(6,"I");
// echo $result;
// echo "<br>";
// $resulthello = repeatStr(10,"hello");
// echo $resulthello;

// Task 