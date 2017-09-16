<?php


class MyCalculator {

private $x=4;
private $y=9;

public function GG( $x, $y ) {
$this->x = $x;
$this->y = $y;

}
public function add() {
return $this->x + $this->y;
}
public function subtract() {
return $this->x - $this->y;
}
public function multiply() {
return $this->x * $this->y;
}
public function divide() {
return $this->y / $this->y;
}
}
$mycalc = new MyCalculator(12, 6); 
echo $mycalc-> add()."\n"; 
echo $mycalc-> multiply()."\n";
echo $mycalc-> subtract()."\n"; 
echo $mycalc-> divide()."\n"; 
?>