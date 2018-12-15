<?php

//1
class MyClass {
    public function __construct(){
        echo 'This is an instance of MyClass class!';
    }
};
$myClass = new MyClass;
return $myClass;



 //2
 class SayMyName {
   public function statement($myName){
        return 'Hi, my name is '.$myName;
    }
}
$greet = new SayMyName;
echo $greet->statement('Gabriel');


//3
class Factorial {
    public function calculate($int){
        if (!is_int($int)){
            echo "entry is not a number";
        }else{
            $intStep = $int-1;
                do{
                    $int*=$intStep;
                    --$intStep;
                }while($intStep>0);
                return $int;
        }
    }
}
$factorial = new Factorial;
echo $factorial->calculate(4);


//4
class ArraySorter
{
    public function sortthis(array $array)
     {
        sort($array);
        return $array;
      }
}
$sorter = new ArraySorter;
var_dump($sorter->sortthis(array(11, -2, 4, 35, 0, 8, -9)));


//5
class DateDifference{

    function datediff($date1, $date2){
        $usethis = DateTime::createFromFormat('m-d-Y', $date1);
        $andthis = DateTime::createFromFormat('m-d-Y', $date2);
        $period = $usethis->diff($andthis);
        echo "Difference : ", $period->y, " years ", $period->m, " months, ", $period->d, " days, "; 
    }
    
}    
$differentiate = new DateDifference;
$differentiate->datediff('12-13-1991', '12-14-2018');

//6
class Calculator {
    public function add($int1, $int2){
        if(!is_int($int1) || !is_int($int2)){
        echo "At least one of your entries is not a number" ."\n";
        }else{
        
            $sum = $int1 + $int2;
            echo $sum . "\n";
        }
        
    }
    public function subtract($int1, $int2){
        if(!is_int($int1) || !is_int($int2)){
        echo "At least one of your entries is not a number" ."\n";
        }else{
            $difference = $int1 - $int2;
            echo $difference . "\n";
        }
    }
    public function multiply($int1, $int2){
        if(!is_int($int1) || !is_int($int2)){
        echo "At least one of your entries is not a number" ."\n";
        }else{
            $product = $int1 * $int2;
            echo $product ."\n";
        }
    }
    public function divide($int1, $int2){
        if(!is_int($int1) || !is_int($int2)){
        echo "At least one of your entries is not a number" ."\n";
        }else{
            $quotient = $int1 / $int2;
            echo $quotient . "\n";
        }
    }
}

$calculate = new Calculator;
$calculate->add(8,4);
$calculate->subtract(8,4);
$calculate->multiply(8,4);
$calculate->divide(8,4);
$calculate->add('a',4);
$calculate->subtract(8,'b');
$calculate->multiply('c',4);
$calculate->divide(8,'d');

//7
class DateMaker{

    function datify($date){
        $converted = DateTime::createFromFormat('m-d-Y', $date);
        return $converted;
    }

}    
$asdate = new DateMaker;
echo $asdate->datify('12-13-1991')->format('Y-m-d');
