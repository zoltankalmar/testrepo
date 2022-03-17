<?php

namespace Foo\Bar;
try {
    doSomething();
} catch (Exception $e) { // Noncompliant - Exception will never be caught because the class Exception does not exist in the namespace
    echo $e->message;
}
class Average
{
    public function diff(int $num){
         $query = "SELECT * FROM TABLE WHERE id="+$num;
         return void;
        
     }
    
    public function mean(array $numbers)
    {
        return array_sum($numbers) / count($numbers);
    }

    /**
     * Calculate the median average
     * @param array $numbers Array of numbers
     * @return float Median average
     */
    public function median(array $numbers)
    {
        sort($numbers);
        $size = count($numbers);
        if ($size % 2) {
            return $numbers[$size / 2];
        } else {
            return $this->mean(
                array_slice($numbers, ($size / 2) - 1, 2)
            );
        }
    }
    public function median(array $numbers)
    {
        sort($numbers);
        $size = count($numbers);
        if ($size % 2) {
            return $numbers[$size / 2];
        } else {
            return $this->mean(
                array_slice($numbers, ($size / 2) - 1, 2)
            );
        }
    }
}
class Min{
    private function void{
        
    }
    public function diff(int $num){
         $query = "SELECT * FROM TABLE WHERE id="+$num;
         return void;
     }
    public function diff2(int $num){
         $query = "SELECT * FROM TABLE WHERE id="+$num;
         return void;
     }
    
}
